@php
    use Carbon\Carbon;
    use Illuminate\Support\Facades\Storage;

    $fotoUrl      = $record->berkas_foto ? Storage::url($record->berkas_foto) : null;
    $qrPayload    = url('/admin/formulir/' . $record->id);
    $tglAkademik  = $record->tes_akademik ? Carbon::parse($record->tes_akademik) : null;
    $tglPraktik   = $record->tes_praktik  ? Carbon::parse($record->tes_praktik)  : null;
    $kota         = ucwords(strtolower(optional($instansi?->kabupaten)->nama ?? 'Pandeglang'));
    $tglTtd       = $tahunPendaftaran?->tanggal_penerbitan_kartu_tes_mulai ? date('d F Y', strtotime($tahunPendaftaran->tanggal_penerbitan_kartu_tes_mulai)) : date('d F Y');
@endphp

<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<style>
    @page { size: A4 portrait; margin: 15mm; }
    body { font-family: 'Helvetica', sans-serif; font-size: 10pt; color: #1f2937; line-height: 1.4; }
    table { border-collapse: collapse; width: 100%; }
    .card-container { border: 2px solid #111827; border-radius: 8px; padding: 20px; position: relative; }
    .card-header { text-align: center; border-bottom: 2px dashed #d1d5db; padding-bottom: 15px; margin-bottom: 15px; }
    .card-title { font-family: 'Georgia', serif; font-size: 16pt; font-weight: bold; color: #111827; text-transform: uppercase; letter-spacing: 2px; }
    .card-subtitle { font-size: 10pt; color: #4b5563; margin-top: 5px; letter-spacing: 1px; }
    .info-lbl { font-size: 9pt; color: #6b7280; text-transform: uppercase; letter-spacing: 0.5px; margin-bottom: 2px; }
    .info-val { font-size: 11pt; font-weight: bold; color: #111827; margin-bottom: 12px; }
    .photo-box { width: 3.5cm; height: 4.5cm; border: 3px solid #e5e7eb; border-radius: 6px; padding: 3px; text-align: center; display: table-cell; vertical-align: middle; }
    .photo-box img { width: 100%; height: 100%; object-fit: cover; border-radius: 3px; }
    .schedule-box { border: 1px solid #d1d5db; border-radius: 6px; overflow: hidden; margin-top: 10px; }
    .schedule-header { background-color: #f3f4f6; padding: 8px; text-align: center; font-weight: bold; font-size: 9.5pt; letter-spacing: 1px; color: #374151; border-bottom: 1px solid #d1d5db; }
    .schedule-cell { padding: 10px; text-align: center; }
    .schedule-time { font-size: 12pt; font-weight: bold; color: #059669; }
    .schedule-date { font-size: 9pt; color: #4b5563; margin-top: 4px; }
    .cbt-alert { background-color: #eff6ff; border: 1px solid #bfdbfe; border-left: 4px solid #3b82f6; border-radius: 4px; padding: 12px 15px; margin-top: 20px; }
    .cbt-title { font-size: 9pt; font-weight: bold; color: #1e3a8a; text-transform: uppercase; letter-spacing: 1px; margin-bottom: 8px; }
    .cbt-creds { font-family: 'Courier New', Courier, monospace; font-size: 14pt; font-weight: bold; color: #1e40af; letter-spacing: 2px; }
    .card-footer { margin-top: 25px; border-top: 2px dashed #d1d5db; padding-top: 15px; }
</style>
</head>
<body>

@include('partials.pdf-header', ['instansi' => $instansi])

<div class="card-container">
    <div class="card-header">
        <div class="card-title">Kartu Ujian Peserta</div>
        <div class="card-subtitle">Penerimaan Peserta Didik Baru &mdash; {{ $tahunPendaftaran?->nama ?? '' }}</div>
    </div>

    <table>
        <tr>
            <td style="vertical-align: top; width: 70%;">
                <div class="info-lbl">Nomor Registrasi</div>
                <div class="info-val" style="font-size: 14pt; color: #059669;">{{ $record->nomor_pendaftaran ?? '-' }}</div>

                <div class="info-lbl">Nama Lengkap Peserta</div>
                <div class="info-val" style="font-size: 13pt;">{{ strtoupper($record->nama ?? '-') }}</div>

                <div class="info-lbl">Asal Sekolah</div>
                <div class="info-val">{{ strtoupper(optional($record->sekolahAsal)->nama ?? '-') }}</div>

                <div class="info-lbl">Jalur Pendaftaran</div>
                <div class="info-val">{{ strtoupper(optional($record->jalurPendaftaran)->nama ?? '-') }}</div>
            </td>
            <td style="vertical-align: top; text-align: right; width: 30%;">
                <div class="photo-box" style="float: right;">
                    @if ($fotoUrl) <img src="{{ $fotoUrl }}" alt="Foto">
                    @else <span style="font-size: 9pt; color: #9ca3af;">PAS FOTO</span> @endif
                </div>
            </td>
        </tr>
    </table>

    <table class="schedule-box">
        <tr>
            <td style="width: 50%; border-right: 1px solid #d1d5db; padding: 0;">
                <div class="schedule-header">UJIAN AKADEMIK (CBT)</div>
                <div class="schedule-cell">
                    <div class="info-lbl">Ruang / Sesi</div>
                    <div style="font-weight: bold; font-size: 11pt; color: #111827; margin-bottom: 8px;">{{ $record->tes_ruang ?? '-' }} / Sesi {{ $record->tes_sesi ?? '-' }}</div>
                    <div class="schedule-time">{{ $tglAkademik ? $tglAkademik->format('H:i') . ' WIB' : '-' }}</div>
                    <div class="schedule-date">{{ $tglAkademik ? $tglAkademik->translatedFormat('l, d F Y') : '-' }}</div>
                </div>
            </td>
            <td style="width: 50%; padding: 0;">
                <div class="schedule-header">UJIAN PRAKTIK IBADAH</div>
                <div class="schedule-cell">
                    <div class="info-lbl">Ruang / Sesi</div>
                    <div style="font-weight: bold; font-size: 11pt; color: #111827; margin-bottom: 8px;">{{ $record->tes_ruang ?? '-' }} / Sesi {{ $record->tes_sesi ?? '-' }}</div>
                    <div class="schedule-time">{{ $tglPraktik ? $tglPraktik->format('H:i') . ' WIB' : '-' }}</div>
                    <div class="schedule-date">{{ $tglPraktik ? $tglPraktik->translatedFormat('l, d F Y') : '-' }}</div>
                </div>
            </td>
        </tr>
    </table>

    <div class="cbt-alert">
        <div class="cbt-title">Kredensial Login Aplikasi Ujian (CBT)</div>
        <table>
            <tr>
                <td style="width: 120px; color: #3b82f6; font-size: 10pt;">Username</td>
                <td class="cbt-creds">{{ $record->nisn ?? '-' }}</td>
            </tr>
            <tr>
                <td style="color: #3b82f6; font-size: 10pt;">Password</td>
                <td class="cbt-creds">{{ $record->nik ?? '-' }}</td>
            </tr>
        </table>
    </div>

    <div class="card-footer">
        <table>
            <tr>
                <td style="width: 25%; vertical-align: middle;">
                    {!! QrCode::size(70)->margin(0)->generate($qrPayload) !!}
                </td>
                <td style="width: 75%; text-align: right; vertical-align: bottom;">
                    <span style="font-size: 9pt; color: #6b7280;">{{ $kota }}, {{ $tglTtd }}</span><br>
                    <span style="font-size: 9.5pt; font-weight: bold; color: #111827;">Panitia Penerimaan Peserta Didik Baru</span>
                    <div style="height: 60px; margin-top: 5px;">
                        @if ($ketua?->berkas_tte) <img src="{{ Storage::url($ketua->berkas_tte) }}" style="height:55px;"> @endif
                    </div>
                    <span style="font-size: 9.5pt; font-weight: bold; text-decoration: underline;">{{ $ketua?->nama ?? '............................................' }}</span><br>
                    <span style="font-size: 8.5pt; color: #6b7280;">Ketua Pelaksana</span>
                </td>
            </tr>
        </table>
    </div>
</div>

</body>
</html>
