# KONSEP SOFTWARE REQUIREMENTS SPECIFICATION (SRS)
## Landing Page PMBM MTsN 1 Pandeglang
### Tahun Pelajaran 2026/2027

---

## LANGKAH 1 — GAMBARAN UMUM SISTEM

### 1.1 Deskripsi Produk
Landing page ini adalah antarmuka web satu halaman (single-page) yang berfungsi sebagai:
- Pusat informasi resmi PMBM MTsN 1 Pandeglang TP 2026/2027
- Panduan lengkap pendaftaran bagi calon murid dan orang tua
- Pintu masuk (gateway) menuju sistem pendaftaran online resmi di http://pmbm-kanwilbanten.com/
- Kanal komunikasi antara madrasah dan masyarakat

### 1.2 Ruang Lingkup
- Cakupan: Informasi PMBM Jalur Reguler MTsN 1 Pandeglang
- Platform: Website (responsif — desktop, tablet, mobile)
- Bahasa: Bahasa Indonesia
- Bukan sistem pendaftaran (tidak ada database murid di sisi ini)

### 1.3 Pengguna Sistem (User Persona)

| Persona | Deskripsi | Kebutuhan Utama |
|---|---|---|
| Orang tua/wali | Dewasa, literasi digital menengah | Informasi syarat, jadwal, cara daftar |
| Calon murid (anak SD/MI) | Usia 10–12 tahun, melek gadget | Visual menarik, langkah daftar mudah dipahami |
| Guru/operator MI/SD | Profesional pendidikan | Data teknis: NISN, NPSN, EMIS, kuota |
| Masyarakat umum | Beragam | Info umum madrasah, kontak, pengaduan |

---

## LANGKAH 2 — STRUKTUR HALAMAN (SITEMAP / SECTION LAYOUT)

Landing page terdiri dari **9 section** yang tersusun secara linear dari atas ke bawah:

```
[1] HERO / BANNER UTAMA
[2] TENTANG PMBM
[3] PERSYARATAN PENDAFTARAN
[4] ALUR / TATA CARA PENDAFTARAN
[5] JADWAL PENTING
[6] MEKANISME SELEKSI
[7] KUOTA & ROMBEL
[8] FAQ
[9] FOOTER & KONTAK
```

---

## LANGKAH 3 — DETAIL SETIAP SECTION

---

### SECTION 1 — HERO / BANNER UTAMA

**Tujuan:** Memberikan kesan pertama yang kuat dan menyampaikan informasi inti dalam 3 detik.

**Elemen yang harus ada:**
- Logo MTsN 1 Pandeglang (placeholder jika belum tersedia)
- Logo Kementerian Agama RI
- Judul besar: *"Penerimaan Murid Baru Madrasah (PMBM) MTsN 1 Pandeglang Tahun Pelajaran 2026/2027"*
- Subjudul: *"Pendaftaran Online Jalur Reguler — Terbuka untuk Lulusan MI/SD Sederajat"*
- Informasi ringkas kuota: **224 kursi tersedia**
- Dua tombol CTA (Call to Action):
  - **[Daftar Sekarang]** → link ke http://pmbm-kanwilbanten.com/
  - **[Unduh Panduan]** → opsional, file PDF juknis
- Countdown timer: Hitung mundur menuju tanggal buka pendaftaran (18 April 2026)
- Background: Foto eksterior madrasah atau ilustrasi islami (placeholder awal)

---

### SECTION 2 — TENTANG PMBM

**Tujuan:** Memberi konteks mengapa PMBM diadakan dan siapa penyelenggaranya.

**Elemen yang harus ada:**
- Penjelasan singkat PMBM (2–3 paragraf):
  - Dasar hukum: Keputusan Kanwil Kemenag Banten No. 009/B/Tahun 2026
  - Prinsip: Objektif, akuntabel, transparan, tidak diskriminatif
  - Gratis: tidak ada pungutan biaya dari calon murid
- Informasi madrasah:
  - Nama: MTsN 1 Pandeglang
  - Alamat: Jl. Raya Labuan, Kadulisung, Pandeglang
  - Email: mtsnpdg1.417849@gmail.com
- Badge/highlight: "Terakreditasi", "Negeri", "Gratis"

---

### SECTION 3 — PERSYARATAN PENDAFTARAN

**Tujuan:** Memastikan calon murid dan orang tua tahu apa saja yang perlu disiapkan sebelum mendaftar.

**Elemen yang harus ada:**

**3A. Persyaratan Umum (checklist visual):**
1. Asal sekolah memiliki NPSN dan terdaftar di EMIS/DAPODIK
2. Calon murid memiliki NISN dan terdaftar di EMIS/DAPODIK
3. Usia maksimal **15 tahun** per 1 Juli 2026
4. Ijazah MI/SD sederajat atau dokumen penyelesaian pendidikan

**3B. Dokumen yang Harus Diunggah (checklist visual):**
1. Kartu Keluarga (KK) — diterbitkan sebelum Maret 2026
2. Ijazah MI/SD sederajat
3. Syahadah Diniyah *(khusus calon murid yang tinggal di dalam/luar Kab. Serang dan akan sekolah di Kab. Serang — tidak berlaku untuk MTsN 1 Pandeglang)*
4. Sertifikat Akreditasi sekolah asal *(hanya bagi asal luar Provinsi Banten)*
5. Surat Pernyataan Pertanggungjawaban Mutlak — bermaterai Rp 10.000
6. Surat Rekomendasi/Kesetaraan Ijazah *(hanya bagi asal sekolah asing)*

**3C. Catatan penting:**
- Calon murid yang sekolah asal belum/tidak terakreditasi → nilai akreditasi otomatis = **65**
- Pemalsuan dokumen = **diskualifikasi + sanksi hukum**

**Desain rekomendasi:** Tampilkan sebagai card checklist dengan ikon centang, beri tanda "Wajib" vs "Kondisional".

---

### SECTION 4 — ALUR / TATA CARA PENDAFTARAN

**Tujuan:** Memandu calon murid langkah demi langkah agar tidak bingung.

**Desain rekomendasi:** Stepper horizontal atau vertikal (numbered steps dengan ikon).

**Langkah-langkah:**

**TAHAP 1 — Persiapan Dokumen**
> Siapkan semua dokumen digital (scan/foto): KK, Ijazah, Surat Pernyataan bermaterai, dan dokumen kondisional lainnya.

**TAHAP 2 — Akses Website Pendaftaran**
> Buka http://pmbm-kanwilbanten.com/ menggunakan browser di HP atau komputer.

**TAHAP 3 — Input NISN**
> Masukkan NISN (Nomor Induk Siswa Nasional) sebagai identitas pendaftaran.

**TAHAP 4 — Isi Formulir Online**
> Lengkapi data diri, data orang tua, dan informasi sekolah asal.

**TAHAP 5 — Pilih Madrasah Tujuan**
> Pilih minimal 1 dan maksimal 2 madrasah tujuan. Salah satunya bisa MTsN 1 Pandeglang.

**TAHAP 6 — Unggah Dokumen**
> Upload semua berkas persyaratan sesuai ketentuan (format file dan ukuran menyesuaikan sistem).

**TAHAP 7 — Cetak Bukti Pendaftaran**
> Setelah berkas dinyatakan lengkap, cetak bukti pendaftaran secara online.

**TAHAP 8 — Tunggu Verifikasi**
> Panitia madrasah akan melakukan verifikasi berkas secara online (7–15 April).

**TAHAP 9 — Cek Pengumuman Peserta CBT**
> Pengumuman peserta yang lolos verifikasi dan berhak mengikuti CBT pada 29 April 2026.

**TAHAP 10 — Ikuti Uji Coba & Pelaksanaan CBT**
> Uji coba: 30 April. Pelaksanaan CBT: 2 Mei. Tes BTQ: 2–3 Mei.

**TAHAP 11 — Cek Hasil Kelulusan**
> Pengumuman hasil kelulusan pada 5 Mei 2026 melalui http://pmbm-kanwilbanten.com/

**TAHAP 12 — Lapor Diri (Daftar Ulang)**
> Jika diterima, wajib lapor diri langsung ke madrasah pada 6–12 Mei 2026. Jika tidak lapor diri = **gugur**.

---

### SECTION 5 — JADWAL PENTING

**Tujuan:** Menampilkan timeline PMBM MTsN secara visual agar mudah diingat.

**Desain rekomendasi:** Timeline card horizontal dengan warna berbeda per fase.

| No | Kegiatan | Tanggal | Waktu |
|---|---|---|---|
| 1 | Informasi & Sosialisasi | Maret – April 2026 | — |
| 2 | **Pendaftaran Online** | **18 – 27 April 2026** | 08.00–16.00 WIB |
| 3 | Verifikasi Dokumen | 19 – 28 April 2026 | 08.00–16.00 WIB |
| 4 | Pengumuman Peserta CBT | 29 April 2026 | 08.00 WIB |
| 5 | Uji Coba CBT | 30 April 2026 | 07.30–16.00 WIB |
| 6 | Pelaksanaan CBT | 2 Mei 2026 | 07.30–16.00 WIB |
| 7 | Tes Baca Tulis Al-Qur'an | 2 – 3 Mei 2026 | 07.30–16.00 WIB |
| 8 | **Pengumuman Kelulusan** | **5 Mei 2026** | 08.00 WIB |
| 9 | Lapor Diri & Berkas Manual | 6 – 12 Mei 2026 | 08.00–16.00 WIB |

**Fitur tambahan:** Highlight jadwal yang sedang aktif / akan datang berdasarkan tanggal hari ini (JavaScript).

---

### SECTION 6 — MEKANISME SELEKSI

**Tujuan:** Menjelaskan bagaimana penilaian dilakukan agar calon murid dapat mempersiapkan diri.

**Elemen yang harus ada:**

**6A. Jenis Jalur Seleksi:**
- Jalur Reguler (yang dibahas di landing page ini)
- Jalur Prestasi dan Afirmasi → arahkan ke madrasah untuk info lebih lanjut

**6B. Komponen Nilai Akhir (Jalur Reguler):**

```
NILAI AKHIR = (70% × Nilai CBT) + (30% × Nilai BTQ)
```

- **CBT (Computer Based Test):** Tes berbasis komputer di lokasi yang ditentukan
- **BTQ (Baca Tulis Al-Qur'an):** Dilaksanakan di madrasah pilihan atau lokasi CBT

**6C. Aturan Tie-Breaking (jika nilai sama):**
1. Prioritas usia lebih tua
2. Jika usia juga sama → prioritas waktu mendaftar lebih awal

**6D. Pengumuman:**
- Hasil dapat diakses di: http://pmbm-kanwilbanten.com/
- Jika diterima: wajib lapor diri langsung ke madrasah
- Jika tidak diterima: dapat mengikuti jalur seleksi lainnya pada PMBM 2026

---

### SECTION 7 — KUOTA & ROMBONGAN BELAJAR

**Tujuan:** Transparansi kapasitas penerimaan.

**Elemen:**
- Kuota MTsN 1 Pandeglang: **224 murid baru**
- Maksimal per kelas (rombel): **32 murid**
- Estimasi jumlah kelas baru: **7 kelas**
- Catatan: biaya pendidikan = Rp 0 (gratis, dibiayai BOS/BOP Madrasah)

---

### SECTION 8 — FAQ (Pertanyaan yang Sering Diajukan)

**Desain rekomendasi:** Accordion (expand/collapse).

**Daftar FAQ yang disarankan:**

1. **Apakah pendaftaran dikenakan biaya?**
   → Tidak. Seluruh biaya PMBM dibebankan pada anggaran BOS/BOP Madrasah.

2. **Berapa madrasah yang bisa dipilih?**
   → Minimal 1, maksimal 2 madrasah tujuan.

3. **Apa itu NISN dan bagaimana cara mendapatkannya?**
   → NISN adalah Nomor Induk Siswa Nasional. Bisa dicek di sekolah asal atau di https://nisn.data.kemdikbud.go.id/

4. **Saya lulusan sekolah luar Provinsi Banten, apakah bisa daftar?**
   → Bisa, dengan syarat mengunggah Sertifikat Akreditasi sekolah asal.

5. **Apa itu Surat Pernyataan Pertanggungjawaban Mutlak?**
   → Surat bermaterai Rp 10.000 dari orang tua/wali yang menyatakan keabsahan seluruh dokumen. Format tersedia di website pendaftaran.

6. **Jika diterima, kapan lapor diri?**
   → 6 – 12 Mei 2026, langsung datang ke MTsN 1 Pandeglang.

7. **Apa yang terjadi jika tidak lapor diri meski dinyatakan diterima?**
   → Dianggap gugur dari hasil seleksi.

8. **Apa yang diujikan dalam CBT?**
   → Materi CBT mengacu pada kurikulum MI/SD. Detail materi dapat ditanyakan langsung ke panitia madrasah.

9. **Di mana saya bisa mengadukan masalah pendaftaran?**
   → Melalui kanal pengaduan yang disediakan Kanwil Kemenag Banten atau langsung ke meja pelayanan MTsN 1 Pandeglang.

---

### SECTION 9 — FOOTER & KONTAK

**Elemen yang harus ada:**
- Nama resmi: MTsN 1 Pandeglang
- Alamat lengkap: Jl. Raya Labuan, Kadulisung, Pandeglang, Banten
- Email: mtsnpdg1.417849@gmail.com
- Nomor telepon: *(perlu diisi dari pihak madrasah)*
- Link eksternal:
  - Website pendaftaran: http://pmbm-kanwilbanten.com/
  - Website Kanwil Kemenag Banten: http://banten.kemenag.go.id
- Tombol CTA terakhir: **[Daftar Sekarang →]**
- Keterangan hukum: *"Diselenggarakan berdasarkan Keputusan Kepala Kanwil Kemenag Provinsi Banten No. 009/B/Tahun 2026"*
- Tahun: © 2026 MTsN 1 Pandeglang

---

## LANGKAH 4 — SPESIFIKASI TEKNIS

### 4.1 Platform & Stack Teknologi (rekomendasi)
| Komponen | Rekomendasi |
|---|---|
| Frontend | HTML5 + CSS3 + JavaScript (atau React/Vue jika dinamis) |
| Framework CSS | Tailwind CSS atau Bootstrap 5 |
| Hosting | GitHub Pages / Netlify / VPS Kemenag |
| Domain | Subdomain madrasah atau domain baru |
| Responsif | Wajib (mobile-first) |

### 4.2 Fitur Fungsional
| ID | Fitur | Prioritas |
|---|---|---|
| F-01 | Countdown timer ke tanggal buka pendaftaran | Tinggi |
| F-02 | Highlight jadwal aktif (berdasarkan tanggal hari ini) | Tinggi |
| F-03 | Tombol CTA ke link pendaftaran eksternal | Tinggi |
| F-04 | Accordion FAQ | Sedang |
| F-05 | Smooth scroll navigasi | Sedang |
| F-06 | Sticky navbar | Sedang |
| F-07 | Tombol WhatsApp/kontak cepat | Sedang |
| F-08 | Download template Surat Pernyataan | Sedang |
| F-09 | Dark/Light mode | Rendah |
| F-10 | Multi-bahasa (Indonesia/Arab) | Rendah |

### 4.3 Fitur Non-Fungsional
- Waktu loading: < 3 detik pada jaringan 4G
- Kompatibel browser: Chrome, Firefox, Safari, Edge (versi 2 tahun terakhir)
- Aksesibilitas: Teks dapat dibaca di layar kecil (font min 14px)
- Keamanan: HTTPS wajib
- SEO: Meta tag, Open Graph, judul halaman deskriptif

---

## LANGKAH 5 — ASET YANG PERLU DISIAPKAN

Karena dimulai dari nol, berikut daftar aset yang perlu dikumpulkan dari pihak madrasah:

| No | Aset | Format | Prioritas |
|---|---|---|---|
| 1 | Logo MTsN 1 Pandeglang | PNG transparan | Wajib |
| 2 | Logo Kementerian Agama RI | PNG transparan | Wajib |
| 3 | Foto eksterior gedung madrasah | JPG min 1200px | Wajib |
| 4 | Foto kegiatan belajar/siswa | JPG min 800px | Dianjurkan |
| 5 | Nomor telepon resmi madrasah | Teks | Wajib |
| 6 | Nomor WhatsApp panitia | Teks | Dianjurkan |
| 7 | Template Surat Pernyataan | DOCX/PDF | Wajib |
| 8 | Nama Kepala Madrasah | Teks | Dianjurkan |
| 9 | Akun media sosial resmi | URL | Opsional |

---

## LANGKAH 6 — PANDUAN DESAIN VISUAL

### 6.1 Identitas Warna (rekomendasi)
- **Hijau tua** (#1B5E20) — warna primer, identitas Islam/Kemenag
- **Hijau muda** (#4CAF50) — aksen
- **Putih** (#FFFFFF) — background utama
- **Abu-abu terang** (#F5F5F5) — background section alternatif
- **Emas/kuning** (#FFC107) — highlight/CTA
- **Merah** (#D32F2F) — peringatan/batas waktu

### 6.2 Tipografi (rekomendasi)
- Judul: **Poppins Bold** atau **Plus Jakarta Sans Bold**
- Body: **Poppins Regular** atau **Inter**
- Arab/Islami (jika diperlukan): **Amiri** atau **Scheherazade New**

### 6.3 Tone Visual
- Bersih, profesional, terpercaya (institusi pemerintah)
- Ramah dan mudah dipahami (untuk orang tua dan anak)
- Islami namun modern

---

*Dokumen ini merupakan konsep awal SRS Landing Page PMBM MTsN 1 Pandeglang TP 2026/2027. Revisi dapat dilakukan sesuai kebutuhan dan masukan stakeholder.*
