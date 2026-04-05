# Software Requirements Specification (SRS)

## PPDB MTsN 1 Pandeglang

---

## 1. Pendahuluan

### 1.1 Tujuan Dokumen

Dokumen ini mendeskripsikan kebutuhan fungsional dan non-fungsional sistem Penerimaan Peserta Didik Baru (PPDB) MTsN 1 Pandeglang secara lengkap, mencakup alur logika bisnis, struktur teknis, dan daftar fitur yang perlu disempurnakan.

### 1.2 Ruang Lingkup

Sistem ini adalah aplikasi web berbasis Laravel 12 dengan antarmuka Filament v3. Sistem mengelola seluruh siklus PPDB mulai dari registrasi akun calon siswa, pengisian formulir, verifikasi berkas, penjadwalan tes, pengumuman hasil, hingga daftar ulang. Notifikasi dikirim secara otomatis melalui WhatsApp menggunakan gateway eksternal dengan sistem antrian.

### 1.3 Definisi dan Singkatan

| Istilah | Keterangan |
|---|---|
| PPDB | Penerimaan Peserta Didik Baru |
| OTP | One-Time Password |
| NISN | Nomor Induk Siswa Nasional |
| NIK | Nomor Induk Kependudukan |
| KIP | Kartu Indonesia Pintar |
| KKS | Kartu Keluarga Sejahtera |
| PKH | Program Keluarga Harapan |
| SKL | Surat Keterangan Lulus |
| SKBB | Surat Keterangan Berkelakuan Baik |
| SKAB | Surat Keterangan Aktif Belajar |
| CBT | Computer Based Test |
| TTE | Tanda Tangan Elektronik |
| SRS | Software Requirements Specification |

---

## 2. Gambaran Umum Sistem

### 2.1 Perspektif Sistem

Sistem berjalan sebagai aplikasi monolitik Laravel dengan Filament sebagai admin panel. Antrian job menggunakan Redis. Cache menggunakan Redis. Session menggunakan Redis. Penyimpanan file menggunakan disk lokal. Autentikasi menggunakan session-based dengan verifikasi OTP via WhatsApp, bukan email standar Laravel.

### 2.2 Fungsi Utama

Sistem memiliki tiga domain utama: manajemen master data, proses pendaftaran, dan administrasi PPDB.

Manajemen master data mencakup data wilayah (negara, provinsi, kabupaten, kecamatan, kelurahan), data referensi (jalur pendaftaran, prestasi, ekstrakurikuler, mata pelajaran, jurusan, kelas), data administrasi (pimpinan, ketua, sekretaris, bendahara, anggota), dan data instansi (sekolah, sekolah asal).

Proses pendaftaran mencakup registrasi akun dengan verifikasi OTP WhatsApp, pengisian formulir multi-step wizard, unggah berkas, formulir prestasi khusus jalur prestasi, pembuatan kartu tes, dan pencetakan dokumen PDF.

Administrasi PPDB mencakup verifikasi berkas, perubahan status formulir dan pendaftaran, penjadwalan tes, penilaian, penetapan kelas, pengiriman notifikasi WhatsApp, ekspor dan impor data, serta publikasi informasi.

### 2.3 Aktor Sistem

| Role | Kewenangan |
|---|---|
| super_admin | Akses penuh ke seluruh fitur termasuk manajemen pengguna, perubahan status apapun, dan penghapusan permanen |
| admin | Akses ke verifikasi, perubahan status formulir dan pendaftaran, penjadwalan tes, dan pengiriman notifikasi |
| verifikator | Akses terbatas untuk memeriksa dan mengubah status formulir |
| panitia | Akses untuk melihat data dan mengirim notifikasi |
| calon_siswa | Akses hanya pada data milik sendiri: membuat formulir, melihat status, mencetak dokumen |

---

## 3. Alur Logika Bisnis

### 3.1 Alur Registrasi dan Verifikasi Akun

Sistem memeriksa apakah pendaftaran akun sedang dibuka dengan mengambil data TahunPendaftaran yang berstatus Aktif dari cache (TTL 60 detik). Jika tanggal saat ini berada di luar rentang tanggal_ppdb_mulai dan tanggal_ppdb_selesai, halaman register dialihkan ke halaman login dengan notifikasi penutupan.

Jika pendaftaran terbuka, calon siswa mengisi form: nama lengkap, NISN (10 digit numerik, unik), nomor WhatsApp aktif, email (unik), password, dan konfirmasi password. Sistem membuat akun User dengan role calon_siswa yang ditetapkan otomatis melalui event User::created di model booted(). Status email_verified_at dibiarkan null.

Sistem menghasilkan OTP 6 digit acak, menyimpannya di Redis dengan TTL 300 detik menggunakan key "otp:{user_id}", kemudian mengirim OTP ke nomor WhatsApp melalui WhatsAppService::send() yang mendispatch SendWhatsAppJob dengan delay 1-5 detik. Session menyimpan otp_user_id.

Pengguna diarahkan ke halaman verifikasi OTP. Pengguna memasukkan 6 digit OTP. Sistem mengambil OTP dari Redis, membandingkan dengan hash_equals() untuk mencegah timing attack. Jika cocok, sistem mengupdate user: email_verified_at diisi now(), status diubah ke Aktif. Redis key OTP dan cooldown dihapus. User di-login otomatis lalu diarahkan ke dashboard.

Jika OTP kadaluarsa (Redis key tidak ada), pengguna dapat meminta ulang dengan batasan cooldown 60 detik menggunakan Redis key "otp_cooldown:{user_id}".

Jika pengguna login tanpa verifikasi email, LoginCustom::authenticate() mendeteksi hasVerifiedEmail() false, menyimpan otp_user_id ke session, logout, lalu redirect ke halaman verifikasi OTP.

### 3.2 Alur Lupa Password

Pengguna memasukkan identitas: username, email, atau nomor WhatsApp. Sistem mencari user yang cocok di salah satu kolom tersebut dengan kondisi status Aktif. Jika tidak ditemukan, sistem tetap menampilkan pesan sukses palsu untuk mencegah user enumeration.

Sistem memeriksa cooldown Redis key "otp_cooldown:{user_id}". Jika ada, sistem menolak dengan informasi sisa waktu tunggu. Jika tidak ada, sistem menghasilkan OTP baru, menyimpan di Redis "reset_otp:{user_id}" (TTL 300 detik) dan cooldown 60 detik, lalu mengirim ke WhatsApp. Session menyimpan reset_otp_user_id.

Pengguna mengisi OTP di halaman ResetPasswordOtp. Setelah OTP valid, Redis key OTP dihapus dan Redis key "reset_token:{user_id}" dibuat dengan TTL 900 detik. Pengguna diarahkan ke halaman NewPassword.

Di halaman NewPassword, sistem memverifikasi keberadaan reset_token di Redis. Jika ada, password baru disimpan menggunakan forceFill dengan Hash::make(). Semua Redis key terkait dihapus. Notifikasi WhatsApp konfirmasi perubahan password dikirim. Pengguna diarahkan ke halaman login.

### 3.3 Alur Pengisian Formulir Pendaftaran

Calon siswa yang sudah terverifikasi mengakses ListCalonSiswas. Jika belum pernah mendaftar, tombol "Daftar Sekarang" ditampilkan yang mengarah ke CreateCalonSiswa.

Formulir menggunakan Wizard 3 step dengan canSkipWizardSteps() false (urutan wajib):

Step 1 berisi data calon siswa: jalur pendaftaran (hanya yang berstatus Aktif), nama (diisi otomatis dari Auth::user()->name, readonly), NISN (dari username, disabled), NIK (unik), KK, tempat lahir, tanggal lahir, tahun lulus, data demografis, data bantuan sosial (KIP/KKS/PKH bersifat kondisional), nomor telepon, sekolah asal, pilihan ekstrakurikuler dan mata pelajaran, serta alamat domisili dengan cascade wilayah. Upload berkas foto, KK, akta, SKBB, SKAB, NISN. Berkas KIP/KKS/PKH muncul hanya jika nomor yang bersesuaian diisi.

Step 2 berisi data orang tua: ibu kandung, ayah kandung, wali (opsional, collapsed by default), dan kepemilikan rumah.

Step 3 berisi data tes: hanya terlihat bagi non-calon_siswa. Berisi jadwal tes (sesi, ruang, waktu akademik, waktu praktik) dan nilai tes (bobot dan nilai akademik/praktik).

Pada mutateFormDataBeforeCreate, sistem mengisi user_id dari Auth::id() dan tahun_pendaftaran_id dari TahunPendaftaran yang berstatus Aktif. Nomor pendaftaran di-generate otomatis di model CalonSiswa::booted() melalui static::creating, menggunakan lockForUpdate() untuk mencegah race condition, dengan format "PPDB-{TAHUN}-{NNNNNN}".

Setelah create berhasil, afterCreate() memeriksa apakah jalur pendaftaran adalah "Prestasi". Jika ya dan belum ada FormulirPrestasi, ditampilkan notifikasi peringatan dan pengguna diarahkan ke halaman CreateFormulirPrestasi.

CalonSiswaObserver::created() dipanggil dan mengirim notifikasi WhatsApp konfirmasi pendaftaran ke nomor telepon user dengan delay 5-60 detik.

### 3.4 Alur Formulir Prestasi

Hanya dapat diakses oleh calon siswa yang jalur pendaftarannya adalah "Prestasi". Navigasi menu dan akses halaman difilter oleh shouldRegisterNavigation() dan getEloquentQuery() yang masing-masing memverifikasi kondisi ini.

Pada CreateFormulirPrestasi::mount(), sistem memverifikasi bahwa user sudah mengisi formulir utama dan jalur yang dipilih adalah Prestasi. Jika tidak memenuhi, pengguna diarahkan kembali ke index formulir dengan notifikasi.

calon_siswa_id diisi otomatis dari CalonSiswa yang dimiliki user pada mutateFormDataBeforeCreate(), menggunakan withoutGlobalScopes() untuk melewati global scope tahun_aktif dan milik_sendiri.

### 3.5 Alur Verifikasi dan Perubahan Status

Admin atau verifikator membuka daftar CalonSiswa. Kolom status_formulir dapat diubah ke: Diproses, Berkas Tidak Lengkap, Disetujui, atau Ditolak. Kolom status_pendaftaran dapat diubah ke: Diproses, Tidak Diterima, Diterima, Diterima Di Kelas Reguler, atau Diterima Di Kelas Unggulan (hanya super_admin yang bisa ke status non-Diproses).

Saat status_pendaftaran atau status_formulir berubah, CalonSiswaObserver::updated() dipicu. Observer memeriksa wasChanged() untuk kedua kolom. Pesan WhatsApp yang sesuai dengan kondisi baru disiapkan dan dikirim melalui WhatsAppService dengan delay 5-60 detik untuk mencegah rate limit.

Bulk action tersedia untuk super_admin: set jalur pendaftaran massal, set status pendaftaran massal (dengan pemilihan kelas jika status diterima di kelas tertentu), dan kirim notifikasi massal. Notifikasi massal menggunakan delay 10-120 detik per pesan untuk menyebarkan beban pengiriman.

### 3.6 Alur Pencetakan Dokumen PDF

Pencetakan menggunakan paket torgodly/html2media dengan metode Html2MediaAction yang merender view Blade ke PDF.

Formulir dapat dicetak jika status_formulir calon siswa adalah "Disetujui".

Kartu tes dapat dicetak jika status_formulir adalah "Disetujui", status_pendaftaran bukan Tidak Diterima, Diterima Di Kelas Reguler, atau Diterima Di Kelas Unggulan, dan waktu saat ini berada dalam rentang tanggal_penerbitan_kartu_tes_mulai hingga tanggal_penerbitan_kartu_tes_selesai.

Hasil/SKL dapat dicetak jika status_pendaftaran adalah salah satu dari: Diterima, Diterima Di Kelas Reguler, Diterima Di Kelas Unggulan, atau Tidak Diterima, dan waktu saat ini berada dalam salah satu rentang tanggal_pengumuman jalur manapun yang aktif.

### 3.7 Alur Global Scope CalonSiswa

Model CalonSiswa memiliki dua global scope yang diterapkan otomatis:

Scope "tahun_aktif" memfilter data berdasarkan TahunPendaftaran yang berstatus Aktif, yang dimuat dari Cache::rememberForever dengan key "tahun_pendaftaran_aktif". Cache ini di-flush saat TahunPendaftaran disimpan atau dihapus melalui event saved dan deleted di model TahunPendaftaran::booted().

Scope "milik_sendiri" memfilter data agar calon_siswa hanya melihat record milik sendiri berdasarkan user_id. Scope ini aktif hanya jika user terautentikasi dan memiliki role calon_siswa.

Beberapa operasi menggunakan withoutGlobalScopes() secara eksplisit untuk melewati kedua scope ini: resolveRecord di importer, formulir prestasi, relasi calonSiswa di User model, dan query di CalonSiswaObserver.

### 3.8 Alur Notifikasi WhatsApp

WhatsAppService::send() mendispatch SendWhatsAppJob ke queue dengan delay acak dalam rentang yang ditentukan (minDelay hingga maxDelay detik). Ini mencegah pengiriman serentak yang dapat menyebabkan rate limit atau pemblokiran dari gateway.

SendWhatsAppJob::handle() memanggil WhatsAppService::sendDirect() yang melakukan HTTP POST ke endpoint WhatsApp gateway dengan header X-Api-Key. Nomor telepon dinormalisasi terlebih dahulu: prefix "0" diganti "62", jika tidak dimulai "62" maka ditambahkan "62". Job dikonfigurasi dengan tries 3 dan backoff 60 detik.

### 3.9 Alur Cache TahunPendaftaran

Data TahunPendaftaran aktif di-cache dengan Cache::rememberForever. Strategi ini berarti cache tidak pernah kedaluarsa secara otomatis, tetapi di-flush secara manual saat ada perubahan data. Cache Landing Page menggunakan TTL 60-300 detik.

---

## 4. Kebutuhan Fungsional

### 4.1 Manajemen Akun dan Autentikasi

| Kode | Kebutuhan |
|---|---|
| F-AUTH-01 | Sistem menyediakan halaman registrasi yang hanya aktif dalam periode PPDB |
| F-AUTH-02 | Registrasi menghasilkan OTP 6 digit yang dikirim ke WhatsApp dengan TTL 5 menit |
| F-AUTH-03 | Login mendukung username (NISN) dan email |
| F-AUTH-04 | Sistem memblokir login jika email belum terverifikasi dan mengarahkan ke verifikasi OTP |
| F-AUTH-05 | Sistem menyediakan reset password berbasis OTP WhatsApp tanpa email |
| F-AUTH-06 | OTP memiliki mekanisme cooldown 60 detik untuk permintaan ulang |
| F-AUTH-07 | Perbandingan OTP menggunakan hash_equals() untuk mencegah timing attack |
| F-AUTH-08 | Profil pengguna dapat mengedit nama, NISN/username, nomor WhatsApp, email, password, dan avatar |

### 4.2 Manajemen Master Data Wilayah

| Kode | Kebutuhan |
|---|---|
| F-WILAYAH-01 | Sistem mengelola hierarki wilayah: Negara, Provinsi, Kabupaten, Kecamatan, Kelurahan |
| F-WILAYAH-02 | Form wilayah di seluruh sistem menggunakan cascade dropdown yang mereset level bawah saat level atas berubah |
| F-WILAYAH-03 | Dropdown wilayah menggunakan searchable dengan getSearchResultsUsing untuk performa pada data besar |

### 4.3 Manajemen Referensi

| Kode | Kebutuhan |
|---|---|
| F-REF-01 | Sistem mengelola Jalur Pendaftaran dengan nama (Prestasi, Reguler, Afirmasi, Zonasi, Mutasi), kuota, status, dan tahun pendaftaran |
| F-REF-02 | Sistem mengelola master Prestasi dengan jenis (Hafalan Al-Quran, Olimpiade/Kejuaraan), tingkat, kategori, dan peringkat |
| F-REF-03 | Sistem mengelola Ekstrakurikuler, Mata Pelajaran, Jurusan, dan Kelas |
| F-REF-04 | Sistem mengelola Sekolah (instansi sendiri) dan Sekolah Asal (instansi lain) dengan data lengkap termasuk NPSN, NSS, logo, akreditasi, alamat, dan kontak |
| F-REF-05 | Sekolah Asal dapat dibuat inline langsung dari form formulir pendaftaran melalui createOptionForm |

### 4.4 Manajemen Administrasi Panitia

| Kode | Kebutuhan |
|---|---|
| F-PANITIA-01 | Sistem mengelola data Pimpinan, Ketua, Sekretaris, Bendahara, dan Anggota panitia |
| F-PANITIA-02 | Setiap panitia memiliki foto, TTE (Tanda Tangan Elektronik), SK, NIP, dan status aktif |
| F-PANITIA-03 | Form panitia menggunakan wizard 2 step: data biodata dan upload berkas |
| F-PANITIA-04 | Data panitia digunakan di dokumen PDF (formulir, kartu tes, SKL) |

### 4.5 Manajemen Tahun Pendaftaran

| Kode | Kebutuhan |
|---|---|
| F-TAHUN-01 | Sistem mengelola TahunPendaftaran dengan seluruh tanggal periode per jalur |
| F-TAHUN-02 | Setiap jalur memiliki tanggal pendaftaran mulai-selesai dan tanggal pengumuman mulai-selesai |
| F-TAHUN-03 | Tersedia tanggal penerbitan kartu tes, tanggal tes akademik, tanggal tes praktik, dan tanggal registrasi berkas |
| F-TAHUN-04 | Terdapat kuota maksimal registrasi akun |
| F-TAHUN-05 | Perubahan TahunPendaftaran secara otomatis memflush cache "tahun_pendaftaran_aktif" |

### 4.6 Formulir Pendaftaran Calon Siswa

| Kode | Kebutuhan |
|---|---|
| F-FORM-01 | Formulir menggunakan Wizard multi-step dengan urutan yang tidak dapat dilewati |
| F-FORM-02 | Step 1 mencakup data pribadi, data bantuan sosial (kondisional), alamat domisili dengan cascade wilayah, dan upload berkas |
| F-FORM-03 | Step 2 mencakup data ibu kandung, ayah kandung (termasuk kepemilikan rumah), dan wali (opsional) |
| F-FORM-04 | Nomor pendaftaran di-generate otomatis saat create dengan format PPDB-{TAHUN}-{NNNNNN} menggunakan lockForUpdate |
| F-FORM-05 | Kolom NIK, KK, dan nomor telepon dienkripsi di database menggunakan cast "encrypted" |
| F-FORM-06 | Calon siswa hanya dapat melihat dan mengedit formulir milik sendiri |
| F-FORM-07 | Calon siswa tidak dapat mengedit formulir jika status pendaftaran sudah final (Diterima/Tidak Diterima) |
| F-FORM-08 | Admin dapat melihat semua formulir dan mengubah status serta data tes |

### 4.7 Formulir Prestasi

| Kode | Kebutuhan |
|---|---|
| F-PRESTASI-01 | Formulir prestasi hanya tersedia untuk jalur pendaftaran "Prestasi" |
| F-PRESTASI-02 | Satu calon siswa dapat memiliki banyak entri formulir prestasi |
| F-PRESTASI-03 | Setiap entri formulir prestasi berisi jenis prestasi (dari master), nama, tahun, penyelenggara, dan berkas bukti |
| F-PRESTASI-04 | Navigasi menu formulir prestasi tersembunyi otomatis bagi yang bukan jalur prestasi |
| F-PRESTASI-05 | Admin melihat semua formulir prestasi dari semua calon siswa |

### 4.8 Manajemen Status dan Verifikasi

| Kode | Kebutuhan |
|---|---|
| F-STATUS-01 | Status formulir: Diproses, Berkas Tidak Lengkap, Disetujui, Ditolak |
| F-STATUS-02 | Status pendaftaran: Diproses, Tidak Diterima, Diterima, Diterima Di Kelas Reguler, Diterima Di Kelas Unggulan |
| F-STATUS-03 | Perubahan status memicu notifikasi WhatsApp otomatis melalui observer |
| F-STATUS-04 | Bulk action untuk mengubah status pendaftaran banyak calon sekaligus |
| F-STATUS-05 | Bulk action untuk mengubah jalur pendaftaran |
| F-STATUS-06 | Penetapan kelas wajib diisi saat status Diterima Di Kelas Reguler atau Diterima Di Kelas Unggulan |

### 4.9 Penjadwalan Tes

| Kode | Kebutuhan |
|---|---|
| F-TES-01 | Admin dapat mengisi sesi tes, ruang tes, waktu tes akademik, dan waktu tes praktik per calon siswa |
| F-TES-02 | Nilai tes akademik dan praktik beserta bobotnya dapat diisi oleh admin |
| F-TES-03 | Data tes diimpor secara massal menggunakan importer |
| F-TES-04 | Kartu tes menampilkan informasi jadwal, ruang, sesi, dan kredensial login CBT (NISN sebagai username, NIK sebagai password) |

### 4.10 Pencetakan Dokumen PDF

| Kode | Kebutuhan |
|---|---|
| F-PDF-01 | Formulir pendaftaran dapat dicetak jika status formulir adalah "Disetujui" |
| F-PDF-02 | Kartu tes dapat dicetak dalam periode penerbitan kartu tes |
| F-PDF-03 | Dokumen hasil (SKL) terdiri dari 4 lembar: SKL, Pakta Integritas, Surat Pernyataan Siswa, dan Checklist Daftar Ulang |
| F-PDF-04 | Dokumen PDF menyertakan QR code yang mengarah ke URL formulir untuk verifikasi |
| F-PDF-05 | Dokumen PDF menampilkan TTE pimpinan, ketua, dan sekretaris yang berstatus Aktif |
| F-PDF-06 | Header PDF menampilkan logo institusi, logo madrasah, nama, alamat, dan kontak instansi |

### 4.11 Notifikasi WhatsApp

| Kode | Kebutuhan |
|---|---|
| F-WA-01 | Notifikasi dikirim otomatis saat: pendaftaran berhasil, status formulir berubah, status pendaftaran berubah |
| F-WA-02 | Notifikasi dapat dikirim manual per calon siswa oleh admin |
| F-WA-03 | Notifikasi dapat dikirim massal ke target yang dipilih: semua, terverifikasi, atau diterima |
| F-WA-04 | Informasi yang dipublikasikan dapat dikirim notifikasinya ke target tertentu |
| F-WA-05 | Pengiriman menggunakan antrian dengan delay acak untuk mencegah rate limit |
| F-WA-06 | Job memiliki retry 3 kali dengan backoff 60 detik |

### 4.12 Ekspor dan Impor Data

| Kode | Kebutuhan |
|---|---|
| F-EKSPOR-01 | Data calon siswa dapat diekspor ke Excel dengan seluruh kolom termasuk data orang tua, berkas, dan jadwal tes |
| F-EKSPOR-02 | Ekspor dapat dilakukan per record terpilih (bulk) atau seluruh data |
| F-IMPOR-01 | Data tes dan status pendaftaran dapat diimpor dari Excel |
| F-IMPOR-02 | Importer menggunakan NISN sebagai kunci untuk update-or-create |
| F-IMPOR-03 | Impor hanya tersedia bagi super_admin dan hanya jika tahun pendaftaran aktif ada |

### 4.13 Manajemen Informasi

| Kode | Kebutuhan |
|---|---|
| F-INFO-01 | Sistem mengelola informasi/pengumuman dengan judul, isi (rich text), lampiran, tanggal, status (Publish/Draft), dan tahun pendaftaran |
| F-INFO-02 | Informasi berstatus Publish ditampilkan di landing page dan di widget dashboard calon siswa |
| F-INFO-03 | Notifikasi WhatsApp dapat dikirim untuk satu informasi atau banyak informasi sekaligus |
| F-INFO-04 | Hanya informasi berstatus Publish yang dapat dikirim notifikasinya |

### 4.14 Dashboard dan Widget

| Kode | Kebutuhan |
|---|---|
| F-DASH-01 | Widget FormulirOverview menampilkan statistik per status formulir dan pendaftaran dengan sparkline chart |
| F-DASH-02 | Widget FormulirOverview menampilkan view berbeda untuk calon_siswa (status diri sendiri) vs admin (statistik global) |
| F-DASH-03 | Widget InformasiPublished menampilkan daftar informasi terbaru yang berstatus Publish |
| F-DASH-04 | Widget UserRegisters menampilkan log akun calon siswa terbaru berdasarkan email_verified_at, hanya untuk non-calon_siswa |

### 4.15 Landing Page

| Kode | Kebutuhan |
|---|---|
| F-LANDING-01 | Landing page menampilkan informasi PPDB: jalur, jadwal, alur, persyaratan, program, informasi, dan FAQ |
| F-LANDING-02 | Countdown timer menampilkan sisa waktu hingga deadline pendaftaran terdekat |
| F-LANDING-03 | Progress bar kuota per jalur ditampilkan berdasarkan jumlah pendaftar aktual |
| F-LANDING-04 | Landing page mendukung mode gelap dan terang dengan preferensi disimpan di localStorage |
| F-LANDING-05 | Data landing page di-cache 60-300 detik untuk performa |

### 4.16 Manajemen Pengguna

| Kode | Kebutuhan |
|---|---|
| F-USER-01 | super_admin dapat membuat, mengedit, menonaktifkan, memulihkan, dan menghapus permanen akun pengguna |
| F-USER-02 | Pengguna memiliki kolom status (Aktif/Nonaktif) |
| F-USER-03 | Pengguna baru tanpa role akan otomatis mendapat role calon_siswa |
| F-USER-04 | Avatar pengguna dapat diunggah; jika tidak ada, sistem menggunakan foto dari formulir calon siswa |
| F-USER-05 | Manajemen pengguna tidak terlihat di navigasi utama tetapi dapat diakses melalui user menu oleh super_admin |

---

## 5. Kebutuhan Non-Fungsional

### 5.1 Performa

Cache TahunPendaftaran aktif menggunakan rememberForever untuk meminimalkan query berulang. Data landing page di-cache 60-300 detik. Widget menggunakan polling 60 detik bukan realtime. Dropdown wilayah menggunakan searchable dengan limit 50 hasil per query untuk mencegah loading seluruh data.

### 5.2 Keamanan

Kolom sensitif (NIK, KK, nomor telepon orang tua) dienkripsi di database. Perbandingan OTP menggunakan hash_equals(). Mekanisme cooldown mencegah brute force OTP. File yang diunggah disimpan dengan visibility private. Akses kontrol berbasis role menggunakan Spatie Permission dengan Filament Shield.

### 5.3 Ketersediaan

Antrian job menggunakan Redis dengan tries 3 dan backoff. Cache menggunakan Redis. Session menggunakan Redis. Sistem dirancang untuk berjalan dengan Laravel Octane.

### 5.4 Skalabilitas

Pengiriman WhatsApp menggunakan antrian dengan delay acak untuk mencegah lonjakan permintaan ke gateway eksternal. Ekspor dan impor menggunakan chunk 250 baris.

---

## 6. Daftar Fitur yang Perlu Disempurnakan

### 6.1 Keamanan dan Validasi

**F-SEMPURNA-01: Validasi kuota pendaftaran akun**
Sistem saat ini tidak memverifikasi apakah jumlah akun yang terdaftar sudah mencapai kuota maksimal (kolom kuantitas di TahunPendaftaran). RegisterCustom::isRegistrationOpen() hanya memeriksa periode tanggal, bukan jumlah akun. Perlu ditambahkan pengecekan User::count() terhadap TahunPendaftaran::kuantitas sebelum mengizinkan registrasi baru.

**F-SEMPURNA-02: Validasi kuota jalur pendaftaran**
Saat calon siswa memilih jalur pendaftaran di formulir, sistem tidak memverifikasi apakah kuota jalur tersebut masih tersedia (JalurPendaftaran::kuantitas versus jumlah pendaftar di jalur tersebut). Perlu ditambahkan validasi sebelum formulir berhasil disimpan.

**F-SEMPURNA-03: Rate limiting pada endpoint OTP**
Tidak ada rate limiting berbasis IP pada endpoint verifikasi OTP. Hanya ada cooldown per user. Pengguna yang berbeda dari IP yang sama dapat melakukan banyak request. Perlu ditambahkan throttle middleware pada route OTP.

**F-SEMPURNA-04: Validasi tanggal periode pendaftaran per jalur**
Saat calon siswa memilih jalur pendaftaran, sistem tidak memeriksa apakah saat ini berada dalam periode pendaftaran jalur tersebut. Pengguna bisa memilih jalur Prestasi padahal periode pendaftarannya sudah tutup.

**F-SEMPURNA-05: Enkripsi NIK pada CalonSiswaExporter**
CalonSiswaExporter mengekspor kolom nik dan kk yang di model dikonfigurasi sebagai cast "encrypted". Perlu dipastikan nilai yang diekspor sudah terdekripsi dengan benar, bukan ciphertext.

### 6.2 Logika Bisnis

**F-SEMPURNA-06: Konsistensi cek calon_siswa di ListCalonSiswas**
Method getCalonSiswaRecord() menggunakan query where('nisn', Auth::user()->username), bukan where('user_id', Auth::id()). Ini berpotensi salah jika ada user non-calon_siswa dengan username yang sama dengan NISN seseorang. Seharusnya menggunakan user_id.

**F-SEMPURNA-07: Penanganan edge case isSuperAdmin dan isCalonSiswa**
Beberapa method di ListCalonSiswas menggunakan roles->first()->name yang akan error jika user tidak memiliki role apapun. Perlu diganti dengan hasRole() yang lebih aman.

**F-SEMPURNA-08: Pembatasan edit formulir berdasarkan periode**
Saat ini calon siswa diblokir mengedit formulir hanya berdasarkan status pendaftaran final. Belum ada pembatasan berdasarkan tanggal periode pendaftaran jalur yang dipilih. Setelah periode pendaftaran jalur berakhir, formulir seharusnya terkunci meski status masih "Diproses".

**F-SEMPURNA-09: Relasi calon_siswa di model CalonSiswa**
Model CalonSiswa memiliki relasi pimpinan(), ketua(), sekretaris(), dan bendahara() ke model terkait, tetapi tidak ada foreign key kolom-kolom tersebut di tabel calon_siswas. Relasi ini tidak akan berfungsi. Perlu dihapus dari model atau ditambahkan foreign key yang sesuai.

**F-SEMPURNA-10: Global scope tahun_aktif pada FormulirPrestasi**
FormulirPrestasi tidak memiliki kolom tahun_pendaftaran_id, namun relasinya ke CalonSiswa yang memiliki scope tahun_aktif. Saat query formulir prestasi melibatkan join ke calon_siswas, scope tahun_aktif dapat menyebabkan data lintas tahun tidak muncul. Perlu dipastikan withoutGlobalScopes digunakan konsisten di seluruh query terkait.

**F-SEMPURNA-11: Status formulir "Berkas Tidak Lengkap" bisa dihapus dari form edit**
Di CalonSiswaResource::form(), dropdown status_formulir untuk admin hanya menampilkan Diproses, Disetujui, dan Ditolak — menghilangkan "Berkas Tidak Lengkap". Namun di FormOptions::STATUS_FORMULIR, opsi ini ada. Perlu diseragamkan.

### 6.3 Antarmuka dan Pengalaman Pengguna

**F-SEMPURNA-12: Formulir.blade.php dalam kondisi dikomentari**
Seluruh konten view formulir.blade.php dibungkus dalam blok komentar Blade (@php ... @endphp dan HTML dalam --}}). Akibatnya, fitur cetak formulir tidak berfungsi. View ini perlu diaktifkan dan diuji.

**F-SEMPURNA-13: Penanganan kasus CalonSiswaFormTrait::getWilayahFields dengan prefix kosong**
Di getSekolahAsalForm(), method getWilayahFields('') dipanggil dengan string kosong sebagai prefix. Ini menghasilkan field name seperti "_negara_id" dengan underscore di depan. Perlu disesuaikan agar field name valid.

**F-SEMPURNA-14: ViewCalonSiswa::canPrintFormulir menggunakan getCalonSiswa()**
Method canPrintFormulir() dan canPrintKartuTes() memanggil getCalonSiswa() yang melakukan query where('nisn', Auth::user()->username). Saat admin membuka ViewCalonSiswa milik calon lain, metode ini akan mengembalikan null karena admin tidak punya NISN yang cocok, sehingga tombol cetak tidak muncul. Tombol cetak seharusnya selalu terlihat bagi admin tanpa pembatasan periode.

**F-SEMPURNA-15: Tailwind config path tidak sesuai**
Di vite.config.js, theme yang di-build adalah resources/css/filament/dashboard/theme.css. Di AdminPanelProvider, ->theme() mengarah ke asset publik css/filament/dashboard/theme.css, sementara ->viteTheme() menggunakan path yang sama. Namun di file tree awal, path yang tertera adalah resources/css/filament/admin/ dan public/css/filament/admin/. Setelah perubahan menjadi "dashboard", perlu dipastikan seluruh referensi path konsisten.

**F-SEMPURNA-16: Paginasi Sekolah dan SekolahAsal menggunakan nilai 0**
ListSekolahs dan ListSekolahAsals menggunakan paginationPageOptions([0]). Nilai 0 tidak valid sebagai ukuran halaman dan dapat menyebabkan error. Seharusnya menggunakan opsi seperti [10, 25, 50] atau menampilkan semua dengan cara yang benar.

### 6.4 Performa dan Arsitektur

**F-SEMPURNA-17: Cache::rememberForever berpotensi stale pada multi-instance**
Jika sistem dijalankan dengan multiple worker (Octane), cache flush melalui Cache::forget di satu event mungkin tidak langsung tersebar ke semua instance tergantung konfigurasi cache driver. Perlu dipastikan cache driver Redis digunakan dan konfigurasinya mendukung invalidasi lintas instance.

**F-SEMPURNA-18: once() di FormulirPrestasiResource tidak aman di Octane**
Fungsi once() Laravel menyimpan hasil di dalam request lifecycle. Namun di lingkungan Octane, jika request di-reuse antar pengguna, once() bisa mengembalikan hasil dari request sebelumnya. Perlu dievaluasi apakah once() aman digunakan di konteks ini atau perlu diganti dengan pendekatan yang lebih eksplisit.

**F-SEMPURNA-19: Tidak ada mekanisme cleanup Redis key yang kadaluarsa**
Meski TTL diset di setiap key OTP, belum ada mekanisme audit atau pembersihan untuk key yang mungkin tersisa karena kondisi race. Perlu dipastikan konfigurasi Redis menggunakan eviction policy yang tepat (allkeys-lru atau volatile-lru).

**F-SEMPURNA-20: Query N+1 pada CalonSiswaObserver::kirim()**
Di method kirim(), jika $model->user sudah di-load maka tidak ada masalah. Namun jika tidak, baris $model->user?->telepon akan memicu lazy load, lalu baris berikutnya $model->loadMissing('user') juga dipanggil yang mengakibatkan dua query untuk kasus yang sama. Perlu disederhanakan menjadi satu ekspresi.

### 6.5 Fitur yang Belum Diimplementasi

**F-SEMPURNA-21: Konfirmasi email belum digunakan**
User mengimplementasikan MustVerifyEmail, namun verifikasi dilakukan melalui OTP WhatsApp, bukan melalui link email Laravel standar. Method canAccessPanel() mengembalikan true tanpa kondisi, bukan memeriksa hasVerifiedEmail(). Ini desain yang disengaja tetapi perlu didokumentasikan agar tidak membingungkan saat maintenance.

**F-SEMPURNA-22: Fitur databaseNotifications dikomentari**
Di AdminPanelProvider, ->databaseNotifications() dikomentari. Jika notifikasi in-app diperlukan di masa depan, tabel notifications sudah ada di migrasi. Perlu keputusan apakah fitur ini akan diaktifkan.

**F-SEMPURNA-23: Tidak ada halaman pengumuman hasil yang dapat diakses publik**
Hasil seleksi hanya dapat dilihat melalui login ke dashboard. Tidak ada halaman publik untuk mengecek hasil berdasarkan nomor pendaftaran atau NISN tanpa login. Fitur ini umum pada sistem PPDB dan perlu dipertimbangkan.

**F-SEMPURNA-24: Impor data belum memvalidasi tahun pendaftaran aktif sebelum update**
CalonSiswaImporter::resolveRecord() menggunakan withoutGlobalScopes() dan firstOrNew berdasarkan NISN. Ini berarti bisa mengupdate data calon siswa dari tahun pendaftaran berbeda tanpa konfirmasi. Perlu ditambahkan filter atau konfirmasi bahwa record yang diupdate adalah dari tahun pendaftaran aktif.

**F-SEMPURNA-25: Tidak ada validasi unik nomor pendaftaran lintas soft delete**
Nomor pendaftaran memiliki unique constraint di database. Namun jika record di-soft delete dan calon siswa mendaftar ulang, generateNomorPendaftaran() menggunakan withoutGlobalScopes() yang menyertakan soft deleted records dalam query orderByDesc. Ini sudah benar. Tetapi jika record soft deleted kemudian di-restore, ada potensi konflik nomor pendaftaran jika setelah soft delete sudah ada nomor dengan urutan yang sama. Perlu diverifikasi.
