@php
    use Carbon\Carbon;
    use Illuminate\Support\Facades\Storage;

    $fotoUrl = $record->berkas_foto ? Storage::url($record->berkas_foto) : null;
    $qrPayload = url('/admin/formulir/' . $record->id);

    $now = Carbon::now();
    $tanggalTtd = $now;
    if ($tahunPendaftaran) {
        $periodes = [
            [
                $tahunPendaftaran->tanggal_pengumuman_jalur_prestasi_mulai,
                $tahunPendaftaran->tanggal_pengumuman_jalur_prestasi_selesai,
            ],
            [
                $tahunPendaftaran->tanggal_pengumuman_jalur_reguler_mulai,
                $tahunPendaftaran->tanggal_pengumuman_jalur_reguler_selesai,
            ],
            [
                $tahunPendaftaran->tanggal_pengumuman_jalur_afirmasi_mulai,
                $tahunPendaftaran->tanggal_pengumuman_jalur_afirmasi_selesai,
            ],
            [
                $tahunPendaftaran->tanggal_pengumuman_jalur_zonasi_mulai,
                $tahunPendaftaran->tanggal_pengumuman_jalur_zonasi_selesai,
            ],
            [
                $tahunPendaftaran->tanggal_pengumuman_jalur_mutasi_mulai,
                $tahunPendaftaran->tanggal_pengumuman_jalur_mutasi_selesai,
            ],
        ];
        foreach ($periodes as [$mulai, $selesai]) {
            if ($mulai && $selesai && $now->between(Carbon::parse($mulai), Carbon::parse($selesai))) {
                $tanggalTtd = Carbon::parse($mulai);
                break;
            }
        }
    }

    $kota = ucwords(strtolower(optional($instansi?->kabupaten)->nama ?? 'Pandeglang'));
    $namaMadrasah = $instansi?->nama ?? 'MTsN 1 Pandeglang';
    $diterima = in_array($record->status_pendaftaran, [
        'Diterima',
        'Diterima Di Kelas Reguler',
        'Diterima Di Kelas Unggulan',
    ]);
@endphp

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <style>
        @page {
            size: A4 portrait;
            margin: 15mm 20mm;
        }

        body {
            font-family: 'Georgia', 'Times New Roman', serif;
            font-size: 11pt;
            color: #111827;
            line-height: 1.6;
            text-align: justify;
        }

        table {
            border-collapse: collapse;
            width: 100%;
            text-align: left;
        }

        .sans {
            font-family: 'Helvetica', sans-serif;
        }

        .doc-title {
            text-align: center;
            font-size: 14pt;
            font-weight: bold;
            letter-spacing: 1.5px;
            text-decoration: underline;
            margin-top: 10px;
        }

        .doc-nomor {
            text-align: center;
            font-size: 10.5pt;
            font-family: 'Helvetica', sans-serif;
            color: #4b5563;
            margin-bottom: 25px;
        }

        .data-box {
            border: 1px solid #d1d5db;
            padding: 15px;
            margin: 20px 0;
            background-color: #fcfcfc;
        }

        .data-box td {
            padding: 4px;
            vertical-align: top;
            font-family: 'Helvetica', sans-serif;
            font-size: 10pt;
        }

        .data-box .lbl {
            color: #6b7280;
            font-weight: bold;
            width: 35%;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .stamp-container {
            text-align: center;
            margin: 30px 0;
        }

        .stamp {
            display: inline-block;
            padding: 10px 40px;
            font-family: 'Helvetica', sans-serif;
            font-size: 16pt;
            font-weight: 900;
            letter-spacing: 4px;
            text-transform: uppercase;
            border: 4px solid;
            border-radius: 8px;
            transform: rotate(-3deg);
        }

        .stamp-pass {
            color: #047857;
            border-color: #047857;
            background-color: rgba(4, 120, 87, 0.05);
        }

        .stamp-fail {
            color: #b91c1c;
            border-color: #b91c1c;
            background-color: rgba(185, 28, 28, 0.05);
        }

        .sig-area {
            margin-top: 40px;
            page-break-inside: avoid;
        }

        .sig-block {
            text-align: center;
            font-family: 'Helvetica', sans-serif;
            font-size: 9.5pt;
        }

        .sig-title {
            color: #4b5563;
            margin-bottom: 60px;
            display: block;
        }

        .sig-name {
            font-weight: bold;
            color: #111827;
            text-decoration: underline;
            font-size: 10pt;
        }

        .page-break {
            page-break-before: always;
        }

        .clean-table {
            border: 1px solid #e5e7eb;
            font-family: 'Helvetica', sans-serif;
            font-size: 9.5pt;
        }

        .clean-table th {
            background-color: #f3f4f6;
            padding: 10px;
            text-align: left;
            color: #374151;
            font-weight: bold;
            border-bottom: 2px solid #d1d5db;
            text-transform: uppercase;
            font-size: 8.5pt;
            letter-spacing: 0.5px;
        }

        .clean-table td {
            padding: 10px;
            border-bottom: 1px solid #e5e7eb;
            color: #1f2937;
        }
    </style>
</head>

<body>

    {{-- ==================== LEMBAR 1: SKL ==================== --}}
    @include('partials.pdf-header', ['instansi' => $instansi])

    <div class="doc-title">SURAT KEPUTUSAN KELULUSAN</div>
    <div class="doc-nomor">Nomor: {{ $instansi?->nomor_surat ?? '......./Mts.01/PPDB/' . date('Y') }}</div>

    <p>
        Berdasarkan hasil Keputusan Sidang Pleno Panitia Penerimaan Peserta Didik Baru (PPDB) <b>{{ $namaMadrasah }}</b>
        Tahun Pelajaran {{ $tahunPendaftaran?->nama ?? '' }}, setelah melakukan evaluasi terhadap kelengkapan
        administrasi dan hasil uji seleksi, maka Panitia menetapkan bahwa peserta didik di bawah ini:
    </p>

    <div class="data-box">
        <table>
            <tr>
                <td class="lbl">Nomor Registrasi</td>
                <td>:</td>
                <td style="font-weight: bold; font-size: 11pt; color: #111827;">{{ $record->nomor_pendaftaran ?? '-' }}
                </td>
            </tr>
            <tr>
                <td class="lbl">Nama Lengkap</td>
                <td>:</td>
                <td style="font-weight: bold; font-size: 11pt; color: #111827;">{{ strtoupper($record->nama ?? '-') }}
                </td>
            </tr>
            <tr>
                <td class="lbl">Jalur Pendaftaran</td>
                <td>:</td>
                <td>{{ strtoupper(optional($record->jalurPendaftaran)->nama ?? '-') }}</td>
            </tr>
            <tr>
                <td class="lbl">Asal Sekolah Dasar</td>
                <td>:</td>
                <td>{{ strtoupper(optional($record->sekolahAsal)->nama ?? '-') }}</td>
            </tr>
        </table>
    </div>

    <p style="text-align: center; font-size: 12pt; margin-top: 30px;">Dinyatakan:</p>

    <div class="stamp-container">
        <div class="stamp {{ $diterima ? 'stamp-pass' : 'stamp-fail' }}">
            {{ $diterima ? 'L U L U S' : 'TIDAK LULUS' }}
        </div>
    </div>

    <p>
        Demikian Surat Keputusan ini diterbitkan agar dapat dipergunakan sebagaimana mestinya. Keputusan Panitia
        bersifat mutlak dan tidak dapat diganggu gugat. Bagi peserta didik yang dinyatakan <b>LULUS</b>, diwajibkan
        untuk segera melakukan tahapan Daftar Ulang sesuai dengan jadwal yang telah ditentukan.
    </p>

    <div class="sig-area">
        <table>
            <tr>
                <td style="width: 25%; vertical-align: bottom;">{!! QrCode::size(70)->margin(0)->generate($qrPayload) !!}</td>
                <td class="sig-block" style="width: 37.5%; vertical-align: top;">
                    <span class="sig-title">{{ $kota }}, {{ $tanggalTtd->translatedFormat('d F Y') }}<br>Ketua
                        Panitia PPDB,</span>
                    <div style="position: relative; top: -50px; height: 0;">
                        @if ($ketua?->berkas_tte)
                            <img src="{{ Storage::url($ketua->berkas_tte) }}" style="height:60px;">
                        @endif
                    </div>
                    <span class="sig-name">{{ $ketua?->nama ?? '.....................................' }}</span><br>
                    NIP. {{ $ketua?->nip ?? '-' }}
                </td>
                <td class="sig-block" style="width: 37.5%; vertical-align: top;">
                    <span class="sig-title">Mengetahui,<br>Kepala {{ ucwords(strtolower($namaMadrasah)) }}</span>
                    <div style="position: relative; top: -50px; height: 0;">
                        @if ($pimpinan?->berkas_tte)
                            <img src="{{ Storage::url($pimpinan->berkas_tte) }}" style="height:60px;">
                        @endif
                    </div>
                    <span class="sig-name">{{ $pimpinan?->nama ?? '.....................................' }}</span><br>
                    NIP. {{ $pimpinan?->nip ?? '-' }}
                </td>
            </tr>
        </table>
    </div>

    {{-- ==================== LEMBAR 2: PAKTA INTEGRITAS ==================== --}}
    <div class="page-break"></div>
    @include('partials.pdf-header', ['instansi' => $instansi])

    <div class="doc-title" style="font-size: 13pt; margin-bottom: 25px;">PAKTA INTEGRITAS ORANG TUA / WALI</div>

    <p>Saya yang bertanda tangan di bawah ini:</p>
    <table class="sans" style="margin: 15px 0 20px 20px; width: 90%;">
        <tr>
            <td style="width: 30%; color: #4b5563;">Nama Lengkap</td>
            <td style="width: 2%;">:</td>
            <td style="font-weight: bold;">
                {{ strtoupper($record->ayah_nama ?? ($record->wali_nama ?? '......................................')) }}
            </td>
        </tr>
        <tr>
            <td style="color: #4b5563;">Status Hubungan</td>
            <td>:</td>
            <td>Orang Tua / Wali Peserta Didik</td>
        </tr>
    </table>

    <p>Adalah benar orang tua / wali dari Calon Peserta Didik Baru:</p>
    <table class="sans" style="margin: 15px 0 20px 20px; width: 90%;">
        <tr>
            <td style="width: 30%; color: #4b5563;">Nama Lengkap Siswa</td>
            <td style="width: 2%;">:</td>
            <td style="font-weight: bold; font-size: 12pt;">{{ strtoupper($record->nama) }}</td>
        </tr>
        <tr>
            <td style="color: #4b5563;">Nomor Registrasi</td>
            <td>:</td>
            <td>{{ $record->nomor_pendaftaran }}</td>
        </tr>
    </table>

    <p>Menyatakan dengan sesungguhnya bahwa:</p>
    <ol style="margin-top: 10px; padding-left: 25px; line-height: 1.8;">
        <li>Seluruh data dan dokumen yang saya berikan kepada pihak panitia adalah <b>benar, absah, dan dapat
                dipertanggungjawabkan secara hukum</b>.</li>
        <li>Apabila dikemudian hari ditemukan indikasi pemalsuan data/dokumen, saya bersedia menerima sanksi berupa
            <b>pembatalan kelulusan</b> putra/putri saya.</li>
        <li>Saya sepenuhnya sanggup dan bersedia bekerja sama dengan pihak madrasah untuk membimbing putra/putri saya
            agar senantiasa mematuhi <b>Tata Tertib dan Peraturan Madarasah</b>.</li>
        <li>Saya berkomitmen untuk tidak melakukan tindakan penyuapan, pemaksaan, maupun gratifikasi kepada panitia
            pelaksana, dewan guru, atau staf madrasah dalam bentuk apa pun.</li>
    </ol>

    <p style="margin-top: 20px;">Demikian Pakta Integritas ini saya buat dalam keadaan sadar, sehat jasmani dan rohani,
        serta tanpa adanya tekanan dari pihak mana pun.</p>

    <table class="sig-area sans">
        <tr>
            <td style="width: 55%;"></td>
            <td class="sig-block" style="width: 45%;">
                <span style="display: block; margin-bottom: 10px;">{{ $kota }},
                    {{ $tanggalTtd->translatedFormat('d F Y') }}<br>Yang Membuat Pernyataan,</span>
                <div
                    style="border: 1px dashed #9ca3af; width: 80px; height: 40px; line-height: 40px; margin: 0 auto 10px; font-size: 8pt; color: #9ca3af;">
                    Meterai 10rb</div>
                <span class="sig-name"
                    style="font-size: 11pt;">{{ strtoupper($record->ayah_nama ?? ($record->wali_nama ?? '......................................')) }}</span>
            </td>
        </tr>
    </table>

    {{-- ==================== LEMBAR 3: SURAT PERNYATAAN SISWA ==================== --}}
    <div class="page-break"></div>
    @include('partials.pdf-header', ['instansi' => $instansi])

    <div class="doc-title" style="font-size: 13pt; margin-bottom: 25px;">SURAT PERNYATAAN PESERTA DIDIK</div>

    <p>Saya yang bertanda tangan di bawah ini, Calon Peserta Didik Baru {{ $namaMadrasah }}:</p>
    <table class="sans"
        style="margin: 15px 0 20px 20px; width: 90%; background-color: #f9fafb; padding: 15px; border-left: 3px solid #059669;">
        <tr>
            <td style="width: 30%; color: #4b5563; padding: 4px;">Nama Lengkap</td>
            <td style="width: 2%;">:</td>
            <td style="font-weight: bold; font-size: 12pt;">{{ strtoupper($record->nama) }}</td>
        </tr>
        <tr>
            <td style="color: #4b5563; padding: 4px;">NISN</td>
            <td>:</td>
            <td>{{ $record->nisn }}</td>
        </tr>
        <tr>
            <td style="color: #4b5563; padding: 4px;">Asal Sekolah</td>
            <td>:</td>
            <td>{{ strtoupper(optional($record->sekolahAsal)->nama ?? '-') }}</td>
        </tr>
    </table>

    <p>Dengan memohon ridha Allah SWT, saya berjanji dan menyatakan bahwa saya:</p>
    <ol style="margin-top: 10px; padding-left: 25px; line-height: 1.8;">
        <li>Akan senantiasa menjaga nama baik agama, keluarga, dan almamater {{ $namaMadrasah }} di mana pun saya
            berada.</li>
        <li>Sanggup mematuhi dan melaksanakan segala tata tertib, peraturan madrasah, serta menjunjung tinggi norma
            kesopanan dan akhlakul karimah terhadap Guru dan sesama teman.</li>
        <li>Bersedia mengikuti seluruh kegiatan intrakurikuler maupun ekstrakurikuler yang telah ditetapkan oleh pihak
            madrasah dengan penuh tanggung jawab.</li>
        <li><b>TIDAK AKAN</b> terlibat secara langsung maupun tidak langsung dalam tindakan kriminalitas,
            perkelahian/tawuran pelajar, perundungan (<i>bullying</i>), mengkonsumsi rokok/miras/narkotika, serta
            pergaulan bebas.</li>
        <li>Apabila saya terbukti melanggar pernyataan di atas, saya <b>SIAP MENERIMA SANKSI TERBERAT</b> dari pihak
            madrasah, yaitu dikembalikan pembinaannya kepada orang tua / wali (Dikeluarkan).</li>
    </ol>

    <table class="sig-area sans">
        <tr>
            <td class="sig-block" style="width: 45%;">
                <span style="display: block; margin-bottom: 70px;">Mengetahui dan Menyetujui,<br>Orang Tua / Wali
                    Siswa</span>
                <span class="sig-name"
                    style="font-size: 11pt;">{{ strtoupper($record->ayah_nama ?? ($record->wali_nama ?? '......................................')) }}</span>
            </td>
            <td style="width: 10%;"></td>
            <td class="sig-block" style="width: 45%;">
                <span style="display: block; margin-bottom: 70px;">{{ $kota }},
                    {{ $tanggalTtd->translatedFormat('d F Y') }}<br>Calon Peserta Didik</span>
                <span class="sig-name" style="font-size: 11pt;">{{ strtoupper($record->nama) }}</span>
            </td>
        </tr>
    </table>

    {{-- ==================== LEMBAR 4: CHECKLIST ==================== --}}
    <div class="page-break"></div>
    @include('partials.pdf-header', ['instansi' => $instansi])

    <div class="doc-title" style="font-size: 13pt; margin-bottom: 25px; font-family: 'Helvetica', sans-serif;">PANDUAN &
        CHECKLIST DAFTAR ULANG</div>

    <p class="sans" style="font-size: 10.5pt; color: #374151; margin-bottom: 15px;">
        Selamat, Anda telah dinyatakan Lulus! Sebagai syarat akhir penerimaan, harap membawa dokumen-dokumen di bawah
        ini saat proses Daftar Ulang. Masukkan seluruh dokumen ke dalam <b>MAP SNELHECTER PLASTIK</b> (Warna Merah untuk
        Laki-laki, Warna Kuning untuk Perempuan).
    </p>

    <table class="clean-table" style="width: 100%;">
        <thead>
            <tr>
                <th style="width: 5%; text-align: center;">No</th>
                <th style="width: 45%;">Nama Dokumen Pemberkasan</th>
                <th style="width: 10%; text-align: center;">Jumlah</th>
                <th style="width: 30%;">Keterangan</th>
                <th style="width: 10%; text-align: center;">Cek (✓)</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td style="text-align:center;">1</td>
                <td>Formulir Pendaftaran (Lembar 1)</td>
                <td style="text-align:center; font-weight:bold;">1 Lembar</td>
                <td>Dicetak dari sistem PPDB</td>
                <td style="font-size: 14pt; text-align:center;">☐</td>
            </tr>
            <tr>
                <td style="text-align:center;">2</td>
                <td>Pakta Integritas (Lembar 2)</td>
                <td style="text-align:center; font-weight:bold;">1 Lembar</td>
                <td>Bermeterai 10.000 & Ditandatangani</td>
                <td style="font-size: 14pt; text-align:center;">☐</td>
            </tr>
            <tr>
                <td style="text-align:center;">3</td>
                <td>Surat Pernyataan (Lembar 3)</td>
                <td style="text-align:center; font-weight:bold;">1 Lembar</td>
                <td>Ditandatangani Siswa & Ortu</td>
                <td style="font-size: 14pt; text-align:center;">☐</td>
            </tr>
            <tr>
                <td style="text-align:center;">4</td>
                <td>Fotokopi Kartu Keluarga (KK)</td>
                <td style="text-align:center; font-weight:bold;">2 Lembar</td>
                <td>Dilegalisir Desa/Kelurahan</td>
                <td style="font-size: 14pt; text-align:center;">☐</td>
            </tr>
            <tr>
                <td style="text-align:center;">5</td>
                <td>Fotokopi Akta Kelahiran</td>
                <td style="text-align:center; font-weight:bold;">2 Lembar</td>
                <td>Jelas & Terbaca</td>
                <td style="font-size: 14pt; text-align:center;">☐</td>
            </tr>
            <tr>
                <td style="text-align:center;">6</td>
                <td>Fotokopi Ijazah / SKL</td>
                <td style="text-align:center; font-weight:bold;">2 Lembar</td>
                <td>Dilegalisir Asal Sekolah</td>
                <td style="font-size: 14pt; text-align:center;">☐</td>
            </tr>
            <tr>
                <td style="text-align:center;">7</td>
                <td>Pas Foto Resmi 3x4</td>
                <td style="text-align:center; font-weight:bold;">4 Lembar</td>
                <td>Berlatar Belakang Merah</td>
                <td style="font-size: 14pt; text-align:center;">☐</td>
            </tr>
            <tr>
                <td style="text-align:center;">8</td>
                <td>Kartu KIP / PKH / KKS</td>
                <td style="text-align:center; font-weight:bold;">1 Lembar</td>
                <td><i style="color: #6b7280;">Hanya bagi yang memiliki</i></td>
                <td style="font-size: 14pt; text-align:center;">☐</td>
            </tr>
        </tbody>
    </table>

</body>

</html>
