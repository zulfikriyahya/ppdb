# KONSEP SOFTWARE REQUIREMENTS SPECIFICATION (SRS)
## Landing Page PMBM MTsN 1 Pandeglang
### Tahun Pelajaran 2026/2027

---

## LANGKAH 1 — GAMBARAN UMUM SISTEM

### 1.1 Deskripsi Produk
Landing page ini adalah antarmuka web satu halaman (single-page) yang berfungsi sebagai:
- Pusat informasi resmi PMBM MTsN 1 Pandeglang TP 2026/2027 untuk **3 jalur sekaligus**
- Panduan lengkap pendaftaran bagi calon murid dan orang tua
- Pintu masuk ke dua sistem pendaftaran:
  - Jalur Prestasi & Afirmasi → **daftar.mtsn1pandeglang.sch.id** (sistem lokal madrasah)
  - Jalur Reguler → **http://pmbm-kanwilbanten.com/** (sistem Kanwil Kemenag Banten)
- Kanal komunikasi antara madrasah dan masyarakat

### 1.2 Ruang Lingkup
- Cakupan: PMBM MTsN 1 Pandeglang — Jalur Prestasi, Afirmasi, dan Reguler
- Platform: Website responsif (desktop, tablet, mobile)
- Bahasa: Bahasa Indonesia
- Sifat: Informatif + gateway; bukan sistem pendaftaran itu sendiri

### 1.3 Pengguna Sistem (User Persona)

| Persona | Deskripsi | Kebutuhan Utama |
|---|---|---|
| Orang tua/wali | Dewasa, literasi digital menengah | Syarat, jadwal, biaya, cara daftar |
| Calon murid (kelas VI MI/SD) | Usia 10–12 tahun, melek gadget | Langkah daftar visual & mudah dipahami |
| Guru/operator MI/SD | Profesional pendidikan | Data teknis: NISN, NPSN, jalur, kuota |
| Masyarakat umum | Beragam | Info umum, kontak, kanal pengaduan |

---

## LANGKAH 2 — ARSITEKTUR INFORMASI & STRUKTUR HALAMAN

### 2.1 Konsep Utama: "3 Jalur, 1 Pintu"
Landing page dirancang dengan konsep **satu pintu masuk** yang memandu pengunjung memilih jalur yang tepat sebelum masuk ke sistem pendaftaran masing-masing. Alurnya:

```
Pengunjung tiba
      ↓
[Hero] → Pilih Jalur
      ↓              ↓              ↓
[Prestasi]      [Afirmasi]      [Reguler]
      ↓              ↓              ↓
daftar.mtsn1   daftar.mtsn1   pmbm-kanwil
pandeglang     pandeglang     banten.com
.sch.id        .sch.id
```

### 2.2 Susunan Section (Linear Scroll)

```
[01] HERO / BANNER UTAMA
[02] PENGENALAN 3 JALUR (Pemilihan Jalur)
[03] JADWAL — Prestasi & Afirmasi
[04] JADWAL — Reguler (PMBM Bersama)
[05] PERSYARATAN UMUM (Semua Jalur)
[06] DETAIL JALUR PRESTASI
[07] DETAIL JALUR AFIRMASI
[08] DETAIL JALUR REGULER
[09] MEKANISME SELEKSI
[10] KETENTUAN GUGUR (Penting!)
[11] KUOTA & ROMBONGAN BELAJAR
[12] FAQ
[13] FOOTER & KONTAK
```

---

## LANGKAH 3 — DETAIL SETIAP SECTION

---

### SECTION 01 — HERO / BANNER UTAMA

**Tujuan:** Kesan pertama kuat; sampaikan inti informasi dalam 3 detik.

**Elemen wajib:**
- Logo MTsN 1 Pandeglang + Logo Kementerian Agama RI (berdampingan)
- Judul utama:
  *"Penerimaan Murid Baru Madrasah (PMBM) MTsN 1 Pandeglang — Tahun Pelajaran 2026/2027"*
- Subjudul:
  *"Terbuka untuk Lulusan MI/SD Sederajat | 3 Jalur Pendaftaran | Gratis"*
- Nama Kepala Madrasah: **Hj. Yanti Mariah, S.S., M.Pd.**
- Kuota tersedia: **224 kursi** (Jalur Reguler) + kuota Prestasi & Afirmasi *(diisi setelah data tersedia)*
- **Countdown timer** menuju tanggal pembukaan terdekat:
  - Prestasi & Afirmasi: **6 April 2026**
  - Reguler: **18 April 2026**
  - Logika: tampilkan countdown ke tanggal terdekat yang belum lewat
- Dua tombol CTA:
  - **[Daftar Prestasi/Afirmasi]** → daftar.mtsn1pandeglang.sch.id
  - **[Daftar Reguler]** → http://pmbm-kanwilbanten.com/
- Background: foto eksterior madrasah atau ilustrasi islami (placeholder awal)

---

### SECTION 02 — PENGENALAN 3 JALUR

**Tujuan:** Bantu pengunjung memahami perbedaan jalur agar bisa memilih yang tepat.

**Desain rekomendasi:** 3 card berdampingan, masing-masing berwarna berbeda sesuai warna map fisik.

| Elemen | Jalur Prestasi | Jalur Afirmasi | Jalur Reguler |
|---|---|---|---|
| Warna card | Merah | Kuning | Biru/Hijau |
| Ikon | 🏆 Piala | 💛 Hati | 📝 Formulir |
| Singkatan untuk siapa | Berprestasi (akademik/non-akademik/tahfidz) | Keluarga kurang mampu (KIP/PKH/KKS/SKTM) | Umum / semua calon murid |
| Sistem daftar | daftar.mtsn1pandeglang.sch.id | daftar.mtsn1pandeglang.sch.id | pmbm-kanwilbanten.com |
| Jadwal buka | 6 April 2026 | 6 April 2026 | 18 April 2026 |
| Tombol CTA | [Pelajari & Daftar] | [Pelajari & Daftar] | [Pelajari & Daftar] |

**Catatan:** Tiap tombol CTA melakukan smooth scroll ke section detail jalur masing-masing, bukan langsung ke link eksternal — agar pengunjung membaca syarat terlebih dahulu.

**Catatan penting untuk pengunjung (infoboks):**
> "Tidak lolos Jalur Prestasi/Afirmasi? Anda masih bisa mendaftar ke Jalur Reguler (PMBM Bersama) yang dibuka mulai 18 April 2026."

---

### SECTION 03 — JADWAL PRESTASI & AFIRMASI

**Tujuan:** Tampilkan timeline Jalur Prestasi & Afirmasi secara visual.

**Desain rekomendasi:** Timeline vertikal dengan indikator status (mendatang / sedang berlangsung / selesai) berbasis tanggal hari ini.

| No | Kegiatan | Tanggal | Keterangan |
|---|---|---|---|
| 1 | Pendaftaran Online | 6 – 8 April 2026 | Website: daftar.mtsn1pandeglang.sch.id |
| 2 | Penyerahan Berkas Fisik | 6 – 8 April 2026 | Sekretariat PMBM MTsN 1 Pandeglang |
| 3 | Verifikasi Berkas | 9 – 10 April 2026 | Dilakukan panitia |
| 4 | Tes Kemampuan & BTQ | 13 April 2026 | Hadir pukul **07.00 WIB** |
| 5 | Pengumuman Hasil | 14 April 2026 | Website resmi madrasah |
| 6 | Lapor Diri & Pemberkasan | 15 – 16 April 2026 | Langsung ke madrasah |

**Infoboks jam kerja panitia:**
> ⏰ Jam layanan panitia: **08.00 – 14.00 WIB** | Istirahat: **11.30 – 13.00 WIB**

---

### SECTION 04 — JADWAL REGULER (PMBM BERSAMA)

**Tujuan:** Tampilkan timeline Jalur Reguler dengan sumber dari Juknis Kanwil Kemenag Banten.

| No | Kegiatan | Tanggal | Keterangan |
|---|---|---|---|
| 1 | Informasi & Sosialisasi | Maret – April 2026 | — |
| 2 | Pendaftaran Online | 18 – 27 April 2026 | Buka 18 Apr 08.00 WIB, tutup 27 Apr 16.00 WIB |
| 3 | Verifikasi Dokumen | 19 – 28 April 2026 | 08.00 – 16.00 WIB |
| 4 | Pengumuman Peserta CBT | 29 April 2026 | 08.00 WIB |
| 5 | Uji Coba CBT | 30 April 2026 | 07.30 – 16.00 WIB |
| 6 | Pelaksanaan CBT | 2 Mei 2026 | 07.30 – 16.00 WIB |
| 7 | Tes Baca Tulis Al-Qur'an | 2 – 3 Mei 2026 | 07.30 – 16.00 WIB |
| 8 | Pengumuman Kelulusan | 5 Mei 2026 | 08.00 WIB |
| 9 | Lapor Diri & Berkas Manual | 6 – 12 Mei 2026 | Buka 6 Mei 08.00, tutup 12 Mei 16.00 WIB |

---

### SECTION 05 — PERSYARATAN UMUM (SEMUA JALUR)

**Tujuan:** Tampilkan syarat dasar yang berlaku untuk semua jalur agar tidak terulang di tiap section.

**Checklist visual:**
1. ✅ Usia maksimal **15 tahun** per 1 Juli 2026
2. ✅ Surat keterangan aktif murid **kelas VI** (MI/SD)
3. ✅ Akta kelahiran **berbarcode**
4. ✅ Kartu Keluarga **berbarcode**

**Infoboks:**
> ⚠️ Dokumen KK dan Akta Kelahiran **wajib berbarcode** (terbitan Dinas Dukcapil). Dokumen lama tanpa barcode tidak dapat diterima.

---

### SECTION 06 — DETAIL JALUR PRESTASI

**Tujuan:** Informasi lengkap Jalur Prestasi agar calon murid dapat menilai kelayakan dirinya.

**Desain rekomendasi:** Background/aksen warna merah sesuai warna map.

**6A. Kategori Prestasi yang Diakui:**

| Kategori | Ketentuan | Bukti |
|---|---|---|
| **Tahfidz** | Minimal 3 juz | Sertifikat + tes hafalan langsung |
| **Akademik** | KSM/OMI, MYRES, OSN, OSP, OSK — Juara 1–3, minimal tingkat Kab/Kota; diselenggarakan Kemenag, Kemendikbud, BRIN, atau PT Terakreditasi | Sertifikat asli |
| **Non-Akademik** | MTQ, MHQ, MSQ, Pidato Arab, Kaligrafi, O2SN, FLS2N, Olahraga (beregu: hanya top scorer/pemain terbaik) | Sertifikat asli |

**6B. Jenjang Kejuaraan yang Diakui:**

| Tingkat | Juara yang Diakui |
|---|---|
| Kabupaten / Kota | Juara 1 |
| Provinsi | Juara 1 dan 2 |
| Nasional | Juara 1, 2, dan 3 |

**6C. Berkas yang Diserahkan Secara Fisik:**
1. Print out formulir pendaftaran online
2. Sertifikat prestasi **asli**
3. Dokumen persyaratan umum (akta, KK, surat keterangan aktif)
4. Semua dimasukkan **map snelhecter warna MERAH** + label identitas (nama, asal sekolah, jalur)

**6D. Tombol CTA:**
- **[Daftar Jalur Prestasi →]** → daftar.mtsn1pandeglang.sch.id

---

### SECTION 07 — DETAIL JALUR AFIRMASI

**Tujuan:** Informasi lengkap Jalur Afirmasi agar keluarga yang berhak dapat mendaftar dengan percaya diri.

**Desain rekomendasi:** Background/aksen warna kuning sesuai warna map.

**7A. Kriteria Penerima:**
Calon murid yang berasal dari keluarga penerima manfaat program sosial pemerintah:
- 🟡 Kartu Indonesia Pintar (KIP)
- 🟡 Program Keluarga Harapan (PKH)
- 🟡 Kartu Keluarga Sejahtera (KKS)
- 🟡 Surat Keterangan Tidak Mampu (SKTM) dari pemerintah daerah

**7B. Dokumen Tambahan Khusus SKTM:**
Jika menggunakan SKTM, wajib melampirkan:
- Fotokopi rekening/tagihan listrik **3 bulan terakhir**
- Foto rumah: tampak **depan, dalam, dan belakang**

**7C. Berkas yang Diserahkan Secara Fisik:**
1. Print out formulir pendaftaran online
2. Fotokopi kartu KIP/PKH/KKS/SKTM yang telah **dilegalisir**
3. Dokumen persyaratan umum (akta, KK, surat keterangan aktif)
4. *(Jika SKTM)* Fotokopi rekening listrik 3 bulan + foto rumah
5. Semua dimasukkan **map snelhecter warna KUNING** + label identitas

**7D. Tombol CTA:**
- **[Daftar Jalur Afirmasi →]** → daftar.mtsn1pandeglang.sch.id

---

### SECTION 08 — DETAIL JALUR REGULER

**Tujuan:** Panduan lengkap Jalur Reguler (PMBM Bersama Kanwil Kemenag Banten).

**8A. Tata Cara Pendaftaran (Stepper):**

1. Akses **http://pmbm-kanwilbanten.com/**
2. Input **NISN** sebagai identitas pendaftaran
3. Isi formulir pendaftaran online secara lengkap
4. Pilih **1–2 madrasah tujuan** (MTsN 1 Pandeglang masuk pilihan)
5. Unggah dokumen:
   - Kartu Keluarga (diterbitkan sebelum Maret 2026)
   - Ijazah MI/SD sederajat
   - Sertifikat Akreditasi sekolah asal *(hanya jika asal luar Provinsi Banten)*
   - Surat Pernyataan Pertanggungjawaban Mutlak bermaterai Rp 10.000
   - Surat Rekomendasi/Kesetaraan Ijazah *(hanya jika asal sekolah asing)*
6. Cetak bukti pendaftaran setelah berkas dinyatakan lengkap

**8B. Informasi Nilai Akreditasi:**
- Sekolah asal terakreditasi → nilai akreditasi sesuai sertifikat
- Sekolah belum/tidak terakreditasi → nilai akreditasi otomatis = **65**

**8C. Tombol CTA:**
- **[Daftar Jalur Reguler →]** → http://pmbm-kanwilbanten.com/
- **[Unduh Template Surat Pernyataan]** *(opsional, jika file tersedia)*

---

### SECTION 09 — MEKANISME SELEKSI

**Tujuan:** Jelaskan bagaimana penilaian dilakukan di masing-masing jalur.

**9A. Jalur Prestasi:**
- Seleksi berdasarkan verifikasi sertifikat prestasi + tes hafalan (khusus Tahfidz)
- Tidak ada CBT

**9B. Jalur Afirmasi:**
- Seleksi berdasarkan verifikasi kelayakan ekonomi (dokumen KIP/PKH/KKS/SKTM)
- Tidak ada CBT

**9C. Jalur Reguler:**

```
NILAI AKHIR = (70% × Nilai CBT) + (30% × Nilai BTQ)
```

- **CBT** = Computer Based Test, dilaksanakan 2 Mei 2026
- **BTQ** = Tes Baca Tulis Al-Qur'an, dilaksanakan 2–3 Mei 2026

**Aturan tie-breaking (jika nilai akhir sama):**
1. Prioritas usia **lebih tua**
2. Jika usia juga sama → prioritas **waktu mendaftar lebih awal**

---

### SECTION 10 — KETENTUAN GUGUR ⚠️

**Tujuan:** Peringatan tegas agar calon murid tidak melakukan kesalahan prosedural.

**Desain rekomendasi:** Card dengan warna merah/oranye, ikon peringatan, teks tegas tapi tidak menakutkan.

**Calon murid dinyatakan GUGUR apabila:**

| # | Kondisi |
|---|---|
| 1 | Mengisi formulir online **tapi tidak menyerahkan berkas fisik** (Prestasi/Afirmasi) |
| 2 | Menyerahkan berkas fisik **tapi tidak mengisi formulir online** (Prestasi/Afirmasi) |
| 3 | Dokumen fisik **tidak sesuai** dengan yang diunggah secara online |
| 4 | Tidak lapor diri sesuai jadwal → dianggap **mengundurkan diri** |
| 5 | Terbukti memalsukan data/dokumen → **diskualifikasi + sanksi hukum** |

**Catatan positif (bawah section):**
> 💡 Tidak lolos Jalur Prestasi atau Afirmasi? Tenang — Anda masih bisa mendaftar ke **Jalur Reguler** mulai 18 April 2026. Berkas yang tidak lolos dapat diambil **sehari setelah pengumuman** (15 April 2026).

---

### SECTION 11 — KUOTA & ROMBONGAN BELAJAR

**Elemen:**
- Kuota Jalur Reguler MTsN 1 Pandeglang: **224 murid baru**
- Kuota Jalur Prestasi: *(diisi sesuai keputusan madrasah)*
- Kuota Jalur Afirmasi: *(diisi sesuai keputusan madrasah)*
- Maksimal murid per kelas: **32 murid**
- Estimasi kelas baru dari Jalur Reguler: ~7 kelas
- Biaya pendidikan: **Rp 0 (Gratis)** — dibiayai BOS/BOP Madrasah

---

### SECTION 12 — FAQ

**Desain:** Accordion expand/collapse. Kelompokkan per jalur.

**FAQ Umum:**
1. Apakah pendaftaran dikenakan biaya? → Tidak, gratis.
2. Bisakah mendaftar lebih dari satu jalur? → *(perlu konfirmasi ke panitia — umumnya tidak diperbolehkan mendaftar dua jalur sekaligus untuk madrasah yang sama)*
3. Apa itu NISN? → Nomor Induk Siswa Nasional. Bisa dicek di sekolah asal.
4. Mengapa KK dan Akta harus berbarcode? → Karena harus diterbitkan resmi oleh Dinas Dukcapil sebagai dokumen terverifikasi.

**FAQ Jalur Prestasi:**
5. Apakah piagam tanpa cap basah diterima? → *(perlu konfirmasi panitia)*
6. Sertifikat beregu apakah bisa digunakan? → Hanya untuk top scorer/pemain terbaik yang tercantum.

**FAQ Jalur Afirmasi:**
7. SKTM dari RT/RW apakah bisa? → Tidak, harus dari pemerintah daerah (kelurahan/kecamatan/dinas sosial).
8. Apakah foto rumah bisa selfie dari HP? → *(perlu konfirmasi panitia; umumnya diterima selama jelas)*

**FAQ Jalur Reguler:**
9. Berapa madrasah yang bisa dipilih? → Minimal 1, maksimal 2.
10. Nilai akreditasi sekolah saya 0/belum akreditasi, apakah bisa daftar? → Bisa, nilai akreditasi otomatis dihitung 65.
11. Jika diterima tapi tidak lapor diri, apa yang terjadi? → Dinyatakan gugur/mengundurkan diri.

---

### SECTION 13 — FOOTER & KONTAK

**Elemen wajib:**
- Nama resmi: **MTsN 1 Pandeglang**
- Alamat: Jl. Raya Labuan, Kadulisung, Pandeglang, Banten
- Email: mtsnpdg1.417849@gmail.com
- Nomor telepon: *(diisi pihak madrasah)*
- WhatsApp Panitia: *(diisi pihak madrasah)*
- Ketua PMBM: **Umar Mu'tamar, S.Ag**
- Kepala Madrasah: **Hj. Yanti Mariah, S.S., M.Pd.**
- Link penting:
  - Pendaftaran Prestasi/Afirmasi: daftar.mtsn1pandeglang.sch.id
  - Pendaftaran Reguler: http://pmbm-kanwilbanten.com/
  - Kanwil Kemenag Banten: http://banten.kemenag.go.id
- Tombol CTA terakhir: **[Daftar Sekarang →]** (dengan dropdown pilihan jalur)
- Teks hukum:
  *"Diselenggarakan berdasarkan Keputusan Kepala Kanwil Kemenag Prov. Banten No. 009/B/Tahun 2026 dan Juknis PMBM MTsN 1 Pandeglang Tahun 2026."*
- © 2026 MTsN 1 Pandeglang — Pandeglang, 31 Maret 2026

---

## LANGKAH 4 — SPESIFIKASI TEKNIS

### 4.1 Stack Teknologi (Rekomendasi)
| Komponen | Rekomendasi |
|---|---|
| Frontend | HTML5 + CSS3 + JavaScript |
| Framework CSS | Tailwind CSS atau Bootstrap 5 |
| Hosting | GitHub Pages / Netlify / hosting madrasah |
| Domain | daftar.mtsn1pandeglang.sch.id atau subdomain |
| Responsif | Wajib (mobile-first) |

### 4.2 Fitur Fungsional

| ID | Fitur | Prioritas | Catatan |
|---|---|---|---|
| F-01 | Countdown timer ke tanggal pembukaan terdekat | Tinggi | Otomatis switch ke jalur berikutnya |
| F-02 | Highlight status jadwal (mendatang/aktif/selesai) | Tinggi | Berbasis tanggal hari ini |
| F-03 | Tombol CTA per jalur ke link eksternal | Tinggi | Beda URL per jalur |
| F-04 | Smooth scroll dari card jalur ke section detail | Tinggi | UX penting |
| F-05 | Accordion FAQ | Sedang | Grouped per jalur |
| F-06 | Sticky navbar dengan link ke tiap section | Sedang | |
| F-07 | Tombol WhatsApp floating (kontak panitia) | Sedang | |
| F-08 | Download template Surat Pernyataan (Reguler) | Sedang | |
| F-09 | Infoboks "Tidak lolos? Daftar Reguler" | Tinggi | Lintas jalur |
| F-10 | Pop-up/modal pengumuman penting | Rendah | Opsional |

### 4.3 Fitur Non-Fungsional
- Waktu loading: < 3 detik pada jaringan 4G
- Kompatibel: Chrome, Firefox, Safari, Edge (2 tahun terakhir)
- Font minimum: 14px untuk body teks
- HTTPS wajib
- SEO: meta tag, Open Graph, deskripsi halaman

---

## LANGKAH 5 — ASET YANG PERLU DIKUMPULKAN

| No | Aset | Format | Prioritas | Sumber |
|---|---|---|---|---|
| 1 | Logo MTsN 1 Pandeglang | PNG transparan | Wajib | TU Madrasah |
| 2 | Logo Kementerian Agama RI | PNG transparan | Wajib | kemenag.go.id |
| 3 | Foto eksterior gedung | JPG min 1200px | Wajib | Dokumentasi madrasah |
| 4 | Foto kegiatan belajar/siswa | JPG min 800px | Dianjurkan | Dokumentasi madrasah |
| 5 | Nomor telepon resmi madrasah | Teks | Wajib | TU Madrasah |
| 6 | Nomor WhatsApp panitia PMBM | Teks | Wajib | Ketua PMBM |
| 7 | Kuota Jalur Prestasi & Afirmasi | Angka | Wajib | Ketua PMBM |
| 8 | Template Surat Pernyataan (PDF/DOCX) | File | Dianjurkan | Panitia |
| 9 | Akun media sosial resmi madrasah | URL | Opsional | TU Madrasah |
| 10 | Foto Kepala Madrasah | JPG | Opsional | TU Madrasah |

---

## LANGKAH 6 — PANDUAN DESAIN VISUAL

### 6.1 Palet Warna
| Fungsi | Warna | Hex |
|---|---|---|
| Primer (institusi/islami) | Hijau tua | #1B5E20 |
| Aksen primer | Hijau muda | #4CAF50 |
| Jalur Prestasi | Merah | #C62828 |
| Jalur Afirmasi | Kuning/Amber | #F9A825 |
| Jalur Reguler | Biru tua | #1565C0 |
| Background utama | Putih | #FFFFFF |
| Background alternatif | Abu-abu terang | #F5F5F5 |
| CTA / tombol utama | Emas | #FFC107 |
| Peringatan/gugur | Merah cerah | #D32F2F |

### 6.2 Tipografi
- Judul: **Poppins Bold** atau **Plus Jakarta Sans Bold**
- Body: **Poppins Regular** atau **Inter**
- Elemen Arab/Islami: **Amiri** atau **Scheherazade New**

### 6.3 Tone Visual
- Bersih, profesional, terpercaya (institusi pemerintah)
- Ramah dan mudah dipahami (orang tua dan anak)
- Islami namun modern — hindari terlalu formal/kaku

---

## LANGKAH 7 — PERTANYAAN TERBUKA (Perlu Konfirmasi ke Pihak Madrasah)

Beberapa hal yang belum tercantum di juknis dan perlu dikonfirmasi sebelum development:

| No | Pertanyaan | Untuk Section |
|---|---|---|
| 1 | Berapa kuota Jalur Prestasi & Afirmasi? | Section 02, 11 |
| 2 | Apakah boleh mendaftar dua jalur berbeda sekaligus? | FAQ |
| 3 | Nomor telepon/WhatsApp panitia PMBM? | Section 13 |
| 4 | Apakah ada template resmi Surat Pernyataan untuk Jalur Reguler? | Section 08 |
| 5 | Apakah piagam fotokopi bisa diterima untuk Jalur Prestasi? | FAQ, Section 06 |
| 6 | Lokasi tepat sekretariat PMBM untuk penyerahan berkas fisik? | Section 03 |
| 7 | Apakah ada media sosial resmi yang perlu ditampilkan? | Section 13 |

---

*Dokumen ini merupakan konsep SRS Landing Page PMBM MTsN 1 Pandeglang TP 2026/2027 yang mencakup 3 jalur pendaftaran. Revisi dapat dilakukan sesuai kebutuhan dan masukan stakeholder.*

*Referensi: Keputusan Kepala Kanwil Kemenag Prov. Banten No. 009/B/Tahun 2026 & Juknis PMBM MTsN 1 Pandeglang, Pandeglang 31 Maret 2026.*
