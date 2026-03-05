@php
    use App\Helpers\PdfDataHelper;
    use Illuminate\Support\Facades\Storage;

    $instansi         = PdfDataHelper::instansi();
    $tahunPendaftaran = PdfDataHelper::tahunAktif();
    $sekretaris       = PdfDataHelper::sekretarisAktif();
    $ketua            = PdfDataHelper::ketuaAktif();

    $isJalurPrestasi = optional($record->jalurPendaftaran)->nama === 'Prestasi';
    $jenisKelamin    = $record->jenis_kelamin === 'Pria' ? 'Laki-laki' : 'Perempuan';
    $fotoUrl         = $record->berkas_foto ? Storage::url($record->berkas_foto) : null;
    $qrPayload       = url('/admin/formulir/' . $record->id);
    $isDraft         = $record->status_formulir !== 'Disetujui';
    $kota            = ucwords(strtolower(optional($instansi?->kabupaten)->nama ?? 'Pandeglang'));

    $alamatSiswa = collect([
        $record->siswa_alamat, optional($record->siswaKelurahan)->nama,
        optional($record->siswaKecamatan)->nama, optional($record->siswaKabupaten)->nama,
        optional($record->siswaProvinsi)->nama,
    ])->filter()->implode(', ');

    $biodata = [
        ['No. Pendaftaran', $record->nomor_pendaftaran ?? '-'],
        ['Nama Lengkap', strtoupper($record->nama ?? '-')],
        ['Jalur Pendaftaran', strtoupper(optional($record->jalurPendaftaran)->nama ?? '-')],
        ['NISN / NIK', ($record->nisn ?? '-') . '  /  ' . ($record->nik ?? '-')],
        ['Tempat, Tgl Lahir', ucwords(strtolower($record->tempat_lahir ?? '')) . ', ' . ($record->tanggal_lahir ? date('d F Y', strtotime($record->tanggal_lahir)) : '-')],
        ['Jenis Kelamin', $jenisKelamin],
        ['Agama', ucwords(strtolower($record->agama ?? '-'))],
        ['Asal Sekolah', strtoupper(optional($record->sekolahAsal)->nama ?? '-')],
        ['No. Telepon', $record->siswa_telepon ?? '-'],
        ['Alamat Siswa', ucwords(strtolower($alamatSiswa))],
    ];

    if ($record->penerima_kip) {
        $biodata[] = ['KIP / KKS / PKH', ($record->no_kip ?? '-') . ' / ' . ($record->no_kks ?? '-') . ' / ' . ($record->no_pkh ?? '-')];
    }
@endphp

<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<style>
    @page { size: A4 portrait; margin: 15mm; }
    body { font-family: 'Helvetica', 'Arial', sans-serif; font-size: 9.5pt; color: #374151; line-height: 1.5; }
    table { border-collapse: collapse; width: 100%; }

    /* Typography */
    .title-doc { font-family: 'Georgia', serif; text-align: center; font-size: 14pt; font-weight: bold; color: #111827; letter-spacing: 1px; text-transform: uppercase; margin-top: 15px; }
    .subtitle-doc { text-align: center; font-size: 10pt; color: #6b7280; margin-bottom: 20px; letter-spacing: 0.5px; }

    /* Modern Section Header */
    .section-title { background-color: #f3f4f6; color: #111827; padding: 6px 10px; font-size: 9pt; font-weight: bold; text-transform: uppercase; letter-spacing: 1px; border-left: 4px solid #059669; margin: 15px 0 8px 0; }

    /* Modern Data Table */
    .data-table td { padding: 6px 4px; border-bottom: 1px solid #f3f4f6; vertical-align: top; }
    .data-table tr:last-child td { border-bottom: none; }
    .data-table .lbl { width: 30%; color: #6b7280; font-size: 8.5pt; text-transform: uppercase; letter-spacing: 0.5px; }
    .data-table .cln { width: 3%; text-align: center; color: #9ca3af; }
    .data-table .val { font-weight: bold; color: #1f2937; }

    /* Elegant Photo Box */
    .photo-wrapper { width: 3.5cm; padding-left: 15px; vertical-align: top; }
    .photo-box { width: 3cm; height: 4cm; border: 2px solid #e5e7eb; border-radius: 4px; padding: 3px; text-align: center; background: #f9fafb; display: table-cell; vertical-align: middle; }
    .photo-box img { width: 100%; height: 100%; object-fit: cover; border-radius: 2px; }
    .photo-text { font-size: 8pt; color: #9ca3af; letter-spacing: 1px; }

    /* Watermark */
    .watermark { position: absolute; top: 35%; left: 0; right: 0; text-align: center; font-size: 80pt; font-family: 'Georgia', serif; color: rgba(220, 38, 38, 0.05); transform: rotate(-30deg); z-index: -1000; letter-spacing: 5px; }

    /* Signatures */
    .signature-area { margin-top: 30px; page-break-inside: avoid; }
    .sig-box { text-align: center; font-size: 9.5pt; color: #374151; vertical-align: bottom; }
    .sig-name { font-weight: bold; color: #111827; text-decoration: underline; margin-bottom: 2px; display: inline-block; }
</style>
</head>
<body>

@if ($isDraft) <div class="watermark">DRAFT DOCUMENT</div> @endif

@include('partials.pdf-header', ['instansi' => $instansi])

<div class="title-doc">Formulir Pendaftaran Calon Peserta Didik</div>
<div class="subtitle-doc">Tahun Pelajaran {{ $tahunPendaftaran?->nama ?? '' }}</div>

<div class="section-title">A. Identitas Calon Peserta Didik</div>
<table>
    <tr>
        <td style="vertical-align: top; padding: 0;">
            <table class="data-table">
                @foreach ($biodata as [$label, $value])
                <tr>
                    <td class="lbl">{{ $label }}</td><td class="cln">:</td><td class="val">{{ $value }}</td>
                </tr>
                @endforeach
            </table>
        </td>
        <td class="photo-wrapper">
            <div class="photo-box">
                @if ($fotoUrl) <img src="{{ $fotoUrl }}" alt="Foto">
                @else <span class="photo-text">FOTO<br>3x4</span> @endif
            </div>
        </td>
    </tr>
</table>

<div class="section-title">B. Data Orang Tua / Wali</div>
<table class="data-table">
    <tr>
        <td class="lbl" style="width: 25%;">Nama Ayah / Ibu</td><td class="cln">:</td>
        <td class="val">{{ strtoupper($record->ayah_nama ?? '-') }} &nbsp;|&nbsp; {{ strtoupper($record->ibu_nama ?? '-') }}</td>
    </tr>
    <tr>
        <td class="lbl">Pekerjaan</td><td class="cln">:</td>
        <td class="val">{{ $record->ayah_pekerjaan ?? '-' }} &nbsp;|&nbsp; {{ $record->ibu_pekerjaan ?? '-' }}</td>
    </tr>
    <tr>
        <td class="lbl">No. Telepon/WhatsApp</td><td class="cln">:</td>
        <td class="val">{{ $record->ayah_telepon ?? $record->ibu_telepon ?? '-' }}</td>
    </tr>
</table>

@if ($isJalurPrestasi)
<div class="section-title">C. Rekam Prestasi</div>
<table style="width: 100%; border-collapse: collapse; margin-top: 5px;">
    <thead>
        <tr style="background-color: #f9fafb; border-bottom: 2px solid #e5e7eb;">
            <th style="padding: 8px; text-align: left; font-size: 8.5pt; color: #6b7280; text-transform: uppercase;">No</th>
            <th style="padding: 8px; text-align: left; font-size: 8.5pt; color: #6b7280; text-transform: uppercase;">Nama Prestasi / Perlombaan</th>
            <th style="padding: 8px; text-align: center; font-size: 8.5pt; color: #6b7280; text-transform: uppercase;">Tingkat</th>
            <th style="padding: 8px; text-align: center; font-size: 8.5pt; color: #6b7280; text-transform: uppercase;">Peringkat</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($record->formulirPrestasis as $i => $fp)
        <tr style="border-bottom: 1px solid #f3f4f6;">
            <td style="padding: 8px; font-weight: bold;">{{ $i + 1 }}</td>
            <td style="padding: 8px; color: #111827;">{{ $fp->nama_prestasi }}</td>
            <td style="padding: 8px; text-align: center;">{{ optional($fp->prestasi)->tingkat ?? '-' }}</td>
            <td style="padding: 8px; text-align: center; font-weight: bold;">{{ optional($fp->prestasi)->peringkat ?? '-' }}</td>
        </tr>
        @empty
        <tr><td colspan="4" style="padding: 15px; text-align: center; font-style: italic; color: #9ca3af;">Tidak ada data prestasi yang dilampirkan.</td></tr>
        @endforelse
    </tbody>
</table>
@endif

<div class="signature-area">
    <table>
        <tr>
            <td style="width: 25%; vertical-align: bottom;">
                {!! QrCode::size(70)->margin(0)->generate($qrPayload) !!}
                <div style="font-size: 7.5pt; color: #9ca3af; margin-top: 5px; letter-spacing: 0.5px;">SCAN TO VERIFY</div>
            </td>
            <td class="sig-box" style="width: 37.5%;">
                {{ $kota }}, {{ date('d F Y', strtotime($record->updated_at)) }}<br>
                <span style="color: #6b7280; font-size: 9pt;">Ketua Panitia PPDB,</span>
                <div style="height: 70px;">
                    @if ($ketua?->berkas_tte) <img src="{{ Storage::url($ketua->berkas_tte) }}" style="height:60px; margin-top:5px;"> @endif
                </div>
                <div class="sig-name">{{ $ketua?->nama ?? str_repeat('.', 35) }}</div><br>
                <span style="font-size: 8.5pt; color: #6b7280;">NIP. {{ $ketua?->nip ?? '-' }}</span>
            </td>
            <td class="sig-box" style="width: 37.5%;">
                <br>
                <span style="color: #6b7280; font-size: 9pt;">Sekretaris Panitia,</span>
                <div style="height: 70px;">
                    @if ($sekretaris?->berkas_tte) <img src="{{ Storage::url($sekretaris->berkas_tte) }}" style="height:60px; margin-top:5px;"> @endif
                </div>
                <div class="sig-name">{{ $sekretaris?->nama ?? str_repeat('.', 35) }}</div><br>
                <span style="font-size: 8.5pt; color: #6b7280;">NIP. {{ $sekretaris?->nip ?? '-' }}</span>
            </td>
        </tr>
    </table>
</div>

</body>
</html>
