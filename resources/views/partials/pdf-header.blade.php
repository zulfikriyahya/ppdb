@php
    use Illuminate\Support\Facades\Storage;
    $logoInstitusi = $instansi?->logo_institusi ? Storage::url($instansi->logo_institusi) : null;
    $logoMadrasah  = $instansi?->logo ? Storage::url($instansi->logo) : null;

    $alamat = collect([
        $instansi?->alamat,
        optional($instansi?->kelurahan)->nama,
        optional($instansi?->kecamatan)->nama,
        optional($instansi?->kabupaten)->nama,
        optional($instansi?->provinsi)->nama,
    ])->filter()->map(fn($item) => ucwords(strtolower($item)))->implode(', ');

    $kontak = collect([
        $instansi?->website ? 'Website: ' . $instansi->website : null,
        $instansi?->email   ? 'Email: '   . $instansi->email   : null,
        $instansi?->telepon ? 'Telp: '    . $instansi->telepon : null,
    ])->filter()->implode('  |  ');
@endphp

<table width="100%" style="border-collapse: collapse; margin-bottom: 0; padding: 0;">
    <tr>
        <td width="85" align="left" valign="middle">
            @if ($logoInstitusi)
                <img src="{{ $logoInstitusi }}" alt="Logo Kemenag" style="width: 75px; height: auto;">
            @else
                <div style="width: 75px; height: 75px;"></div>
            @endif
        </td>

        <td align="center" valign="middle" style="padding: 0 10px; line-height: 1.3;">
            <div style="font-size: 11pt; font-weight: bold; text-transform: uppercase; letter-spacing: 0.5pt;">
                Kementerian Agama Republik Indonesia<br>
                Kantor Kementerian Agama {{ ucwords(strtolower(optional($instansi?->kabupaten)->nama ?? 'Kabupaten Pandeglang')) }}
            </div>
            <div style="font-size: 14pt; font-weight: bold; text-transform: uppercase; letter-spacing: 1pt; margin-top: 3px;">
                {{ $instansi?->nama ?? 'MTs Negeri 1 Pandeglang' }}
            </div>
            @if ($alamat)
                <div style="font-size: 9pt; margin-top: 4px; color: #111;">{{ $alamat }}</div>
            @endif
            @if ($kontak)
                <div style="font-size: 8.5pt; margin-top: 1px; color: #333;">{{ $kontak }}</div>
            @endif
        </td>

        <td width="85" align="right" valign="middle">
            @if ($logoMadrasah)
                <img src="{{ $logoMadrasah }}" alt="Logo Madrasah" style="width: 75px; height: auto;">
            @else
                <div style="width: 75px; height: 75px;"></div>
            @endif
        </td>
    </tr>
</table>

<div style="border-top: 3px solid #000; margin-top: 6px;"></div>
<div style="border-top: 1px solid #000; margin-top: 2px; margin-bottom: 15px;"></div>
