@php
    use Carbon\Carbon;

    $now = Carbon::now();

    $jadwals = [];
    if ($tahun) {
        $jadwals = [
            [
                'icon' => '🏆',
                'label' => 'Jalur Prestasi',
                'mulai' => $tahun->tanggal_pendaftaran_jalur_prestasi_mulai,
                'selesai' => $tahun->tanggal_pendaftaran_jalur_prestasi_selesai,
            ],
            [
                'icon' => '📚',
                'label' => 'Jalur Reguler',
                'mulai' => $tahun->tanggal_pendaftaran_jalur_reguler_mulai,
                'selesai' => $tahun->tanggal_pendaftaran_jalur_reguler_selesai,
            ],
            [
                'icon' => '🤝',
                'label' => 'Jalur Afirmasi',
                'mulai' => $tahun->tanggal_pendaftaran_jalur_afirmasi_mulai,
                'selesai' => $tahun->tanggal_pendaftaran_jalur_afirmasi_selesai,
            ],
            [
                'icon' => '🏘️',
                'label' => 'Jalur Zonasi',
                'mulai' => $tahun->tanggal_pendaftaran_jalur_zonasi_mulai,
                'selesai' => $tahun->tanggal_pendaftaran_jalur_zonasi_selesai,
            ],
            [
                'icon' => '🔄',
                'label' => 'Jalur Mutasi',
                'mulai' => $tahun->tanggal_pendaftaran_jalur_mutasi_mulai,
                'selesai' => $tahun->tanggal_pendaftaran_jalur_mutasi_selesai,
            ],
            [
                'icon' => '📝',
                'label' => 'Tes Seleksi (CBT)',
                'mulai' => $tahun->tanggal_tes_akademik_mulai,
                'selesai' => $tahun->tanggal_tes_akademik_selesai,
            ],
            [
                'icon' => '📢',
                'label' => 'Pengumuman Reguler',
                'mulai' => $tahun->tanggal_pengumuman_jalur_reguler_mulai,
                'selesai' => $tahun->tanggal_pengumuman_jalur_reguler_selesai,
            ],
            [
                'icon' => '✅',
                'label' => 'Registrasi Berkas',
                'mulai' => $tahun->tanggal_registrasi_berkas_mulai,
                'selesai' => $tahun->tanggal_registrasi_berkas_selesai,
            ],
        ];
        $jadwals = array_filter($jadwals, fn($j) => $j['mulai'] !== null);
    }

    $jalurIcons = [
        'Prestasi' => [
            'icon' => '🏆',
            'color' => '#d4a843',
            'bg' => 'rgba(212,168,67,0.12)',
            'border' => 'rgba(212,168,67,0.25)',
        ],
        'Reguler' => [
            'icon' => '📚',
            'color' => '#10b981',
            'bg' => 'rgba(5,150,105,0.12)',
            'border' => 'rgba(5,150,105,0.25)',
        ],
        'Afirmasi' => [
            'icon' => '🤝',
            'color' => '#60a5fa',
            'bg' => 'rgba(59,130,246,0.12)',
            'border' => 'rgba(59,130,246,0.25)',
        ],
        'Zonasi' => [
            'icon' => '🏘️',
            'color' => '#a78bfa',
            'bg' => 'rgba(139,92,246,0.12)',
            'border' => 'rgba(139,92,246,0.25)',
        ],
        'Mutasi' => [
            'icon' => '🔄',
            'color' => '#fbbf24',
            'bg' => 'rgba(245,158,11,0.12)',
            'border' => 'rgba(245,158,11,0.25)',
        ],
    ];

    $closestDeadline = null;
    foreach ($jadwals as $j) {
        if ($j['selesai'] && Carbon::parse($j['selesai'])->isFuture()) {
            $closestDeadline = $j['selesai'];
            break;
        }
    }
@endphp
<!DOCTYPE html>
<html lang="id" class="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="PPDB MTsN 1 Pandeglang {{ $tahun?->nama ?? '' }} — Pendaftaran online peserta didik baru. Madrasah unggulan Kabupaten Pandeglang.">
    <title>PPDB MTsN 1 Pandeglang {{ $tahun ? '— ' . $tahun->nama : '' }}</title>
    <style>
        :root {
            --gold: #d4a843;
            --gold-light: #f0c96a;
            --green: #059669;
            --green-light: #10b981;
            --bg-dark: #0a0a0f;
            --card-dark: rgba(255, 255, 255, 0.04);
            --border-dark: rgba(255, 255, 255, 0.08);
            --text-dark: #f1f5f9;
            --muted-dark: #94a3b8;
            --bg-light: #f8fafc;
            --card-light: rgba(255, 255, 255, 0.85);
            --border-light: rgba(0, 0, 0, 0.08);
            --text-light: #0f172a;
            --muted-light: #64748b;
        }

        *,
        *::before,
        *::after {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: 'Segoe UI', system-ui, -apple-system, sans-serif;
            background: var(--bg-dark);
            color: var(--text-dark);
            transition: background .3s, color .3s;
            overflow-x: hidden;
        }

        html.light body {
            background: var(--bg-light);
            color: var(--text-light);
        }

        body::before {
            content: '';
            position: fixed;
            inset: 0;
            background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 256 256' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)' opacity='0.03'/%3E%3C/svg%3E");
            pointer-events: none;
            z-index: 0;
        }

        .orb {
            position: fixed;
            border-radius: 50%;
            filter: blur(120px);
            opacity: .15;
            pointer-events: none;
            z-index: 0;
            animation: floatOrb 8s ease-in-out infinite;
        }

        .orb-1 {
            width: 600px;
            height: 600px;
            background: radial-gradient(circle, #059669, transparent);
            top: -200px;
            left: -200px;
        }

        .orb-2 {
            width: 500px;
            height: 500px;
            background: radial-gradient(circle, #d4a843, transparent);
            bottom: 0;
            right: -150px;
            animation-delay: -4s;
        }

        .orb-3 {
            width: 400px;
            height: 400px;
            background: radial-gradient(circle, #7c3aed, transparent);
            top: 50%;
            left: 50%;
            animation-delay: -2s;
            opacity: .07;
        }

        html.light .orb {
            opacity: .06;
        }

        @keyframes floatOrb {

            0%,
            100% {
                transform: translateY(0) scale(1);
            }

            50% {
                transform: translateY(-30px) scale(1.05);
            }
        }

        /* ── NAV ── */
        nav {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            z-index: 100;
            height: 64px;
            padding: 0 2rem;
            display: flex;
            align-items: center;
            justify-content: space-between;
            backdrop-filter: blur(20px) saturate(180%);
            background: rgba(10, 10, 15, .75);
            border-bottom: 1px solid var(--border-dark);
            transition: background .3s, border-color .3s;
        }

        html.light nav {
            background: rgba(248, 250, 252, .9);
            border-bottom-color: var(--border-light);
        }

        .nav-brand {
            display: flex;
            align-items: center;
            gap: .75rem;
            font-weight: 700;
            text-decoration: none;
            color: inherit;
        }

        .nav-logo {
            width: 36px;
            height: 36px;
            border-radius: 10px;
            background: linear-gradient(135deg, var(--green), var(--gold));
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.2rem;
        }

        .nav-name-main {
            font-size: .9rem;
            line-height: 1.2;
        }

        .nav-name-sub {
            font-size: .7rem;
            font-weight: 400;
            opacity: .55;
        }

        .nav-links {
            display: flex;
            gap: .25rem;
            list-style: none;
        }

        .nav-links a {
            text-decoration: none;
            color: var(--muted-dark);
            font-size: .85rem;
            padding: .375rem .7rem;
            border-radius: 8px;
            transition: all .2s;
        }

        html.light .nav-links a {
            color: var(--muted-light);
        }

        .nav-links a:hover,
        .nav-links a.active {
            color: var(--green-light);
            background: rgba(5, 150, 105, .1);
        }

        .nav-actions {
            display: flex;
            align-items: center;
            gap: .75rem;
        }

        #themeToggle {
            width: 38px;
            height: 38px;
            border-radius: 10px;
            border: 1px solid var(--border-dark);
            background: var(--card-dark);
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.1rem;
            transition: all .2s;
            color: inherit;
        }

        html.light #themeToggle {
            border-color: var(--border-light);
            background: var(--card-light);
        }

        #themeToggle:hover {
            transform: scale(1.05);
        }

        .btn {
            display: inline-flex;
            align-items: center;
            gap: .45rem;
            padding: .5rem 1.25rem;
            border-radius: 10px;
            font-size: .875rem;
            font-weight: 600;
            cursor: pointer;
            border: none;
            text-decoration: none;
            transition: all .2s;
        }

        .btn-primary {
            background: linear-gradient(135deg, var(--green), #047857);
            color: #fff;
            box-shadow: 0 0 20px rgba(5, 150, 105, .3);
        }

        .btn-primary:hover {
            transform: translateY(-1px);
            box-shadow: 0 0 30px rgba(5, 150, 105, .5);
        }

        .btn-ghost {
            background: transparent;
            color: var(--muted-dark);
            border: 1px solid var(--border-dark);
        }

        html.light .btn-ghost {
            color: var(--muted-light);
            border-color: var(--border-light);
        }

        .btn-ghost:hover {
            background: rgba(5, 150, 105, .08);
            color: var(--green-light);
            border-color: rgba(5, 150, 105, .3);
        }

        .btn-lg {
            padding: .875rem 2rem;
            font-size: 1rem;
            border-radius: 14px;
        }

        /* ── LAYOUT ── */
        main {
            position: relative;
            z-index: 1;
        }

        section {
            padding: 5rem 2rem;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
        }

        /* ── TYPE ── */
        .tag {
            display: inline-flex;
            align-items: center;
            gap: .4rem;
            padding: .35rem 1rem;
            border-radius: 999px;
            font-size: .72rem;
            font-weight: 700;
            letter-spacing: .08em;
            text-transform: uppercase;
            background: rgba(5, 150, 105, .12);
            color: var(--green-light);
            border: 1px solid rgba(5, 150, 105, .2);
            margin-bottom: 1rem;
        }

        .divider {
            width: 60px;
            height: 3px;
            background: linear-gradient(90deg, var(--green), var(--gold));
            border-radius: 999px;
            margin: .6rem 0 1.5rem;
        }

        .title {
            font-size: clamp(1.75rem, 4vw, 2.75rem);
            font-weight: 800;
            letter-spacing: -.03em;
            line-height: 1.15;
            margin-bottom: 1rem;
        }

        .grad {
            background: linear-gradient(135deg, var(--green-light), var(--gold));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .sub {
            font-size: 1.05rem;
            color: var(--muted-dark);
            max-width: 560px;
            line-height: 1.7;
        }

        html.light .sub {
            color: var(--muted-light);
        }

        /* ── GLASS ── */
        .glass {
            background: var(--card-dark);
            border: 1px solid var(--border-dark);
            backdrop-filter: blur(12px);
            border-radius: 20px;
            transition: all .3s;
        }

        html.light .glass {
            background: var(--card-light);
            border-color: var(--border-light);
            box-shadow: 0 4px 24px rgba(0, 0, 0, .06);
        }

        .glass-hover:hover {
            border-color: rgba(5, 150, 105, .3);
            transform: translateY(-2px);
            box-shadow: 0 8px 40px rgba(5, 150, 105, .1);
        }

        /* ── HERO ── */
        #hero {
            min-height: 100vh;
            display: flex;
            align-items: center;
            padding-top: 64px;
        }

        .hero-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 4rem;
            align-items: center;
        }

        .hero-eyebrow {
            display: inline-flex;
            align-items: center;
            gap: .5rem;
            padding: .4rem 1rem;
            border-radius: 999px;
            font-size: .78rem;
            font-weight: 600;
            background: linear-gradient(135deg, rgba(212, 168, 67, .15), rgba(5, 150, 105, .12));
            border: 1px solid rgba(212, 168, 67, .25);
            color: var(--gold-light);
            margin-bottom: 1.5rem;
        }

        .hero-title {
            font-size: clamp(2.2rem, 5vw, 3.8rem);
            font-weight: 900;
            letter-spacing: -.04em;
            line-height: 1.05;
            margin-bottom: 1.5rem;
        }

        .hero-sub {
            font-size: 1.05rem;
            color: var(--muted-dark);
            line-height: 1.7;
            margin-bottom: 2.5rem;
            max-width: 480px;
        }

        html.light .hero-sub {
            color: var(--muted-light);
        }

        .hero-actions {
            display: flex;
            gap: 1rem;
            flex-wrap: wrap;
        }

        .hero-stats {
            display: flex;
            gap: 2.5rem;
            margin-top: 3rem;
            padding-top: 2rem;
            border-top: 1px solid var(--border-dark);
        }

        html.light .hero-stats {
            border-top-color: var(--border-light);
        }

        .stat-val {
            font-size: 1.75rem;
            font-weight: 800;
            background: linear-gradient(135deg, var(--green-light), var(--gold));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .stat-lbl {
            font-size: .78rem;
            color: var(--muted-dark);
            margin-top: .2rem;
        }

        html.light .stat-lbl {
            color: var(--muted-light);
        }

        /* Hero card */
        .hero-card {
            padding: 2rem;
            border-radius: 24px;
            position: relative;
            overflow: hidden;
            max-width: 420px;
            width: 100%;
        }

        .hero-card::before {
            content: '';
            position: absolute;
            inset: 0;
            background: linear-gradient(135deg, rgba(5, 150, 105, .1), rgba(212, 168, 67, .07), transparent);
            border-radius: 24px;
            pointer-events: none;
        }

        .countdown-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: .75rem;
            margin-top: 1.5rem;
        }

        .cd-box {
            background: rgba(255, 255, 255, .05);
            border: 1px solid rgba(255, 255, 255, .09);
            border-radius: 14px;
            padding: 1rem .5rem;
            text-align: center;
        }

        html.light .cd-box {
            background: rgba(0, 0, 0, .04);
            border-color: rgba(0, 0, 0, .08);
        }

        .cd-num {
            font-size: 2rem;
            font-weight: 900;
            font-variant-numeric: tabular-nums;
            background: linear-gradient(135deg, #10b981, #d4a843);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .cd-lbl {
            font-size: .62rem;
            color: var(--muted-dark);
            text-transform: uppercase;
            letter-spacing: .1em;
            margin-top: .2rem;
        }

        html.light .cd-lbl {
            color: var(--muted-light);
        }

        .progress-row {
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-size: .82rem;
        }

        .progress-bar {
            width: 80px;
            height: 6px;
            background: rgba(255, 255, 255, .1);
            border-radius: 999px;
            overflow: hidden;
        }

        html.light .progress-bar {
            background: rgba(0, 0, 0, .08);
        }

        .progress-fill {
            height: 100%;
            border-radius: 999px;
        }

        .badge-float {
            position: absolute;
            padding: .7rem 1.1rem;
            border-radius: 14px;
            font-size: .8rem;
            font-weight: 600;
            display: flex;
            align-items: center;
            gap: .45rem;
            backdrop-filter: blur(8px);
        }

        .badge-float-1 {
            top: -1rem;
            right: -1rem;
            background: rgba(5, 150, 105, .15);
            border: 1px solid rgba(5, 150, 105, .3);
            color: #34d399;
            animation: floatB 3s ease-in-out infinite;
        }

        .badge-float-2 {
            bottom: -1rem;
            left: -1rem;
            background: rgba(212, 168, 67, .15);
            border: 1px solid rgba(212, 168, 67, .3);
            color: var(--gold-light);
            animation: floatB 3s ease-in-out infinite;
            animation-delay: -1.5s;
        }

        @keyframes floatB {

            0%,
            100% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-8px);
            }
        }

        /* ── BENTO ── */
        .bento {
            display: grid;
            grid-template-columns: repeat(12, 1fr);
            grid-auto-rows: minmax(130px, auto);
            gap: 1.25rem;
        }

        .b1 {
            grid-column: span 8;
            grid-row: span 2;
        }

        .b2 {
            grid-column: span 4;
        }

        .b3 {
            grid-column: span 4;
        }

        .b4 {
            grid-column: span 4;
            grid-row: span 2;
        }

        .b5 {
            grid-column: span 4;
            grid-row: span 2;
        }

        .b6 {
            grid-column: span 4;
            grid-row: span 2;
        }

        .bcard {
            border-radius: 20px;
            padding: 1.75rem;
            position: relative;
            overflow: hidden;
            transition: all .3s;
        }

        .bcard:hover {
            transform: translateY(-2px);
        }

        .borb {
            position: absolute;
            border-radius: 50%;
            filter: blur(60px);
            opacity: .15;
            pointer-events: none;
        }

        .bstat {
            font-size: 2.8rem;
            font-weight: 900;
        }

        .bstat-lbl {
            font-size: .82rem;
            opacity: .6;
            margin-top: .2rem;
        }

        .bstat-ico {
            font-size: 1.8rem;
            margin-top: .5rem;
        }

        /* ── JALUR ── */
        .jalur-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(215px, 1fr));
            gap: 1.25rem;
            margin-top: 3rem;
        }

        .jalur-card {
            padding: 1.75rem;
            border-radius: 20px;
            position: relative;
            overflow: hidden;
            cursor: default;
        }

        .jalur-icon {
            width: 50px;
            height: 50px;
            border-radius: 14px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            margin-bottom: 1rem;
        }

        .jalur-title {
            font-size: 1rem;
            font-weight: 700;
            margin-bottom: .5rem;
        }

        .jalur-badge {
            display: inline-flex;
            align-items: center;
            gap: .3rem;
            font-size: .72rem;
            font-weight: 700;
            padding: .25rem .6rem;
            border-radius: 999px;
            margin-bottom: .75rem;
        }

        .jalur-desc {
            font-size: .8rem;
            color: var(--muted-dark);
            line-height: 1.6;
        }

        html.light .jalur-desc {
            color: var(--muted-light);
        }

        .jalur-quota-bar {
            margin-top: 1rem;
        }

        .jalur-quota-track {
            height: 5px;
            background: rgba(255, 255, 255, .08);
            border-radius: 999px;
            overflow: hidden;
            margin-top: .4rem;
        }

        html.light .jalur-quota-track {
            background: rgba(0, 0, 0, .07);
        }

        .jalur-quota-label {
            display: flex;
            justify-content: space-between;
            font-size: .72rem;
            color: var(--muted-dark);
        }

        html.light .jalur-quota-label {
            color: var(--muted-light);
        }

        /* ── TIMELINE ── */
        .timeline {
            position: relative;
            padding-left: 2rem;
        }

        .timeline::before {
            content: '';
            position: absolute;
            left: .45rem;
            top: 0;
            bottom: 0;
            width: 2px;
            background: linear-gradient(to bottom, var(--green), var(--gold), transparent);
        }

        .tl-item {
            position: relative;
            padding: 1.2rem 0 1.2rem 1.5rem;
            border-bottom: 1px solid var(--border-dark);
        }

        html.light .tl-item {
            border-bottom-color: var(--border-light);
        }

        .tl-item:last-child {
            border-bottom: none;
        }

        .tl-dot {
            position: absolute;
            left: -2rem;
            top: 1.4rem;
            width: 14px;
            height: 14px;
            border-radius: 50%;
            background: var(--green);
            border: 3px solid var(--bg-dark);
            transition: background .2s;
        }

        html.light .tl-dot {
            border-color: var(--bg-light);
        }

        .tl-item:hover .tl-dot {
            background: var(--gold);
        }

        .tl-step {
            font-size: .7rem;
            text-transform: uppercase;
            letter-spacing: .08em;
            color: var(--green-light);
            font-weight: 700;
            margin-bottom: .3rem;
        }

        .tl-title {
            font-size: .95rem;
            font-weight: 600;
            margin-bottom: .25rem;
        }

        .tl-desc {
            font-size: .8rem;
            color: var(--muted-dark);
            line-height: 1.6;
        }

        html.light .tl-desc {
            color: var(--muted-light);
        }

        /* ── JADWAL ── */
        .jadwal-item {
            display: flex;
            align-items: center;
            gap: 1rem;
            padding: 1rem 0;
            border-bottom: 1px solid var(--border-dark);
        }

        html.light .jadwal-item {
            border-bottom-color: var(--border-light);
        }

        .jadwal-item:last-child {
            border-bottom: none;
        }

        .jadwal-icon {
            min-width: 42px;
            height: 42px;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.1rem;
        }

        .jadwal-title {
            font-size: .85rem;
            font-weight: 700;
        }

        .jadwal-date {
            font-size: .75rem;
            color: var(--muted-dark);
            margin-top: .15rem;
        }

        html.light .jadwal-date {
            color: var(--muted-light);
        }

        .jadwal-status {
            margin-left: auto;
            padding: .2rem .6rem;
            border-radius: 999px;
            font-size: .68rem;
            font-weight: 700;
            white-space: nowrap;
        }

        /* ── PROGRAM ── */
        .program-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(190px, 1fr));
            gap: 1.1rem;
            margin-top: 2.5rem;
        }

        .program-card {
            padding: 1.5rem;
            border-radius: 18px;
            text-align: center;
        }

        .program-ico {
            font-size: 2.5rem;
            margin-bottom: .75rem;
            display: block;
        }

        .program-title {
            font-size: .9rem;
            font-weight: 700;
            margin-bottom: .35rem;
        }

        .program-desc {
            font-size: .78rem;
            color: var(--muted-dark);
            line-height: 1.55;
        }

        html.light .program-desc {
            color: var(--muted-light);
        }

        /* ── SYARAT ── */
        .syarat-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(270px, 1fr));
            gap: 1rem;
            margin-top: 2rem;
        }

        .syarat-item {
            display: flex;
            align-items: flex-start;
            gap: .9rem;
            padding: 1.2rem;
            border-radius: 16px;
        }

        .syarat-num {
            min-width: 30px;
            height: 30px;
            border-radius: 9px;
            background: linear-gradient(135deg, var(--green), #047857);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: .78rem;
            font-weight: 800;
            color: #fff;
        }

        .syarat-text {
            font-size: .86rem;
            line-height: 1.6;
        }

        /* ── KURIKULUM ── */
        .kurikulum-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 1.25rem;
            margin-top: 2.5rem;
        }

        .kuri-card {
            padding: 1.75rem;
            border-radius: 20px;
        }

        .kuri-ico {
            font-size: 2rem;
            margin-bottom: 1rem;
            display: block;
        }

        .kuri-title {
            font-size: 1rem;
            font-weight: 700;
            margin-bottom: .6rem;
        }

        .kuri-list {
            list-style: none;
        }

        .kuri-list li {
            display: flex;
            align-items: center;
            gap: .5rem;
            font-size: .82rem;
            color: var(--muted-dark);
            padding: .35rem 0;
            border-bottom: 1px solid var(--border-dark);
        }

        html.light .kuri-list li {
            color: var(--muted-light);
            border-bottom-color: var(--border-light);
        }

        .kuri-list li:last-child {
            border-bottom: none;
        }

        .kuri-list li::before {
            content: '✓';
            color: var(--green-light);
            font-weight: 700;
            font-size: .78rem;
        }

        /* ── PRESTASI ── */
        .prestasi-scroll {
            display: flex;
            gap: 1.25rem;
            overflow-x: auto;
            padding-bottom: 1rem;
            margin-top: 2.5rem;
            scrollbar-width: thin;
            scrollbar-color: var(--green) transparent;
        }

        .prestasi-card {
            min-width: 210px;
            padding: 1.5rem;
            border-radius: 18px;
            flex-shrink: 0;
            text-align: center;
        }

        .prestasi-medal {
            font-size: 3rem;
            margin-bottom: .75rem;
            display: block;
        }

        .prestasi-title {
            font-size: .875rem;
            font-weight: 700;
            margin-bottom: .25rem;
        }

        .prestasi-info {
            font-size: .76rem;
            color: var(--muted-dark);
        }

        html.light .prestasi-info {
            color: var(--muted-light);
        }

        /* ── TESTIMONI ── */
        .testi-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 1.25rem;
            margin-top: 2.5rem;
        }

        .testi-card {
            padding: 1.75rem;
            border-radius: 20px;
        }

        .testi-stars {
            color: var(--gold);
            font-size: 1rem;
            margin-bottom: 1rem;
            letter-spacing: 2px;
        }

        .testi-text {
            font-size: .88rem;
            line-height: 1.7;
            color: var(--muted-dark);
            margin-bottom: 1.25rem;
            font-style: italic;
        }

        html.light .testi-text {
            color: var(--muted-light);
        }

        .testi-author {
            display: flex;
            align-items: center;
            gap: .75rem;
        }

        .testi-avatar {
            width: 42px;
            height: 42px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.1rem;
            font-weight: 700;
            color: #fff;
        }

        .testi-name {
            font-size: .9rem;
            font-weight: 700;
        }

        .testi-role {
            font-size: .74rem;
            color: var(--muted-dark);
        }

        html.light .testi-role {
            color: var(--muted-light);
        }

        /* ── INFORMASI ── */
        .info-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(310px, 1fr));
            gap: 1.25rem;
            margin-top: 2.5rem;
        }

        .info-card {
            padding: 1.75rem;
            border-radius: 20px;
            display: flex;
            flex-direction: column;
        }

        .info-tag {
            display: inline-block;
            padding: .2rem .65rem;
            border-radius: 999px;
            font-size: .68rem;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: .06em;
            background: rgba(5, 150, 105, .12);
            color: var(--green-light);
            border: 1px solid rgba(5, 150, 105, .2);
            margin-bottom: .75rem;
            align-self: flex-start;
        }

        .info-title {
            font-size: 1rem;
            font-weight: 700;
            margin-bottom: .5rem;
            line-height: 1.4;
            flex: 1;
        }

        .info-excerpt {
            font-size: .8rem;
            color: var(--muted-dark);
            line-height: 1.65;
        }

        html.light .info-excerpt {
            color: var(--muted-light);
        }

        .info-date {
            font-size: .74rem;
            color: var(--muted-dark);
            margin-top: 1rem;
            display: flex;
            align-items: center;
            gap: .3rem;
        }

        html.light .info-date {
            color: var(--muted-light);
        }

        /* ── FAQ ── */
        html.light .faq-body p {
            color: var(--muted-light);
            border-top-color: var(--border-light);
        }

        .faq-trigger:hover {
            color: var(--green-light);
        }

        /* ── PRIVASI ── */
        .privacy-box {
            padding: 2.5rem;
            border-radius: 24px;
            max-width: 820px;
            margin: 2.5rem auto 0;
        }

        .privacy-box h3 {
            font-size: 1rem;
            font-weight: 700;
            margin: 1.5rem 0 .5rem;
            color: var(--green-light);
        }

        .privacy-box h3:first-child {
            margin-top: 0;
        }

        .privacy-box p {
            font-size: .875rem;
            line-height: 1.8;
            color: var(--muted-dark);
        }

        html.light .privacy-box p {
            color: var(--muted-light);
        }

        /* ── CTA ── */
        .cta-wrap {
            text-align: center;
            padding: 6rem 2rem;
            position: relative;
            overflow: hidden;
        }

        .cta-bg {
            position: absolute;
            inset: 0;
            background: radial-gradient(ellipse at center, rgba(5, 150, 105, .12) 0%, transparent 70%);
            pointer-events: none;
        }

        .cta-title {
            font-size: clamp(2rem, 5vw, 3.5rem);
            font-weight: 900;
            letter-spacing: -.04em;
            margin-bottom: 1.25rem;
        }

        .cta-sub {
            font-size: 1.05rem;
            color: var(--muted-dark);
            margin-bottom: 2.5rem;
        }

        html.light .cta-sub {
            color: var(--muted-light);
        }

        .cta-actions {
            display: flex;
            gap: 1rem;
            justify-content: center;
            flex-wrap: wrap;
        }

        /* ── FOOTER ── */
        footer {
            border-top: 1px solid var(--border-dark);
            padding: 3rem 2rem;
            text-align: center;
            position: relative;
            z-index: 1;
        }

        html.light footer {
            border-top-color: var(--border-light);
        }

        .footer-links {
            display: flex;
            justify-content: center;
            gap: 1.5rem;
            margin-top: 1.5rem;
            flex-wrap: wrap;
        }

        .footer-links a {
            font-size: .8rem;
            color: var(--muted-dark);
            text-decoration: none;
            transition: color .2s;
        }

        html.light .footer-links a {
            color: var(--muted-light);
        }

        .footer-links a:hover {
            color: var(--green-light);
        }

        .footer-copy {
            font-size: .76rem;
            color: var(--muted-dark);
            margin-top: 1.75rem;
        }

        html.light .footer-copy {
            color: var(--muted-light);
        }

        /* ── RESPONSIVE ── */
        @media (max-width:768px) {
            .hero-grid {
                grid-template-columns: 1fr;
            }

            .hero-visual {
                display: none;
            }

            .b1,
            .b2,
            .b3,
            .b4,
            .b5,
            .b6 {
                grid-column: span 12;
            }

            .nav-links {
                display: none;
            }

            section {
                padding: 3.5rem 1.25rem;
            }
        }
    </style>
</head>

<body>

    <div class="orb orb-1"></div>
    <div class="orb orb-2"></div>
    <div class="orb orb-3"></div>

    {{-- ═══ NAVBAR ═══ --}}
    <nav>
        <a href="{{ route('landing') }}" class="nav-brand">
            <div class="nav-logo">🕌</div>
            <div>
                <div class="nav-name-main">MTsN 1 Pandeglang</div>
                <div class="nav-name-sub">PPDB {{ $tahun?->nama ?? '' }}</div>
            </div>
        </a>
        <ul class="nav-links">
            <li><a href="#jalur">Jalur</a></li>
            <li><a href="#alur">Alur</a></li>
            <li><a href="#program">Program</a></li>
            <li><a href="#prestasi">Prestasi</a></li>
            <li><a href="#informasi">Informasi</a></li>
            <li><a href="#faq">FAQ</a></li>
            <li><a href="#tentang">Tentang</a></li>
        </ul>
        <div class="nav-actions">
            <button id="themeToggle" title="Ganti Mode">🌙</button>
            <a href="{{ url('/register') }}" class="btn btn-primary">📝 Daftar</a>
        </div>
    </nav>

    <main>

        {{-- ═══ HERO ═══ --}}
        <section id="hero">
            <div class="container">
                <div class="hero-grid">
                    <div>
                        <div class="hero-eyebrow">✨ Penerimaan Peserta Didik Baru {{ $tahun?->nama ?? '' }}</div>
                        <h1 class="hero-title">
                            Raih Masa Depan<br>
                            <span class="grad">Bersama Kami</span>
                        </h1>
                        <p class="hero-sub">
                            MTsN 1 Pandeglang — Madrasah unggulan dengan kurikulum terpadu antara ilmu umum dan ilmu
                            agama.
                            Tempat terbaik untuk generasi penerus bangsa yang berakhlak mulia dan berprestasi.
                        </p>
                        <div class="hero-actions">
                            <a href="{{ url('/register') }}" class="btn btn-primary btn-lg">📝 Daftar Sekarang</a>
                            <a href="#alur" class="btn btn-ghost btn-lg">Lihat Alur →</a>
                        </div>
                        <div class="hero-stats">
                            <div>
                                <div class="stat-val">1.200+</div>
                                <div class="stat-lbl">Siswa Aktif</div>
                            </div>
                            <div>
                                <div class="stat-val">98%</div>
                                <div class="stat-lbl">Tingkat Kelulusan</div>
                            </div>
                            <div>
                                <div class="stat-val">50+</div>
                                <div class="stat-lbl">Prestasi Nasional</div>
                            </div>
                            @if ($tahun)
                                <div>
                                    <div class="stat-val">{{ $tahun->kuantitas }}</div>
                                    <div class="stat-lbl">Kuota Total</div>
                                </div>
                            @endif
                        </div>
                    </div>

                    <div class="hero-visual"
                        style="position:relative;display:flex;align-items:center;justify-content:center;">
                        <div class="glass hero-card">
                            <div style="text-align:center;">
                                <div class="tag" style="justify-content:center;">
                                    @if ($closestDeadline)
                                        ⏳ Pendaftaran Ditutup Dalam
                                    @else
                                        📋 Status Pendaftaran
                                    @endif
                                </div>
                            </div>

                            @if ($closestDeadline)
                                <div class="countdown-grid" id="countdown"
                                    data-deadline="{{ Carbon::parse($closestDeadline)->toIso8601String() }}">
                                    <div class="cd-box">
                                        <div class="cd-num" id="cd-d">--</div>
                                        <div class="cd-lbl">Hari</div>
                                    </div>
                                    <div class="cd-box">
                                        <div class="cd-num" id="cd-h">--</div>
                                        <div class="cd-lbl">Jam</div>
                                    </div>
                                    <div class="cd-box">
                                        <div class="cd-num" id="cd-m">--</div>
                                        <div class="cd-lbl">Menit</div>
                                    </div>
                                    <div class="cd-box">
                                        <div class="cd-num" id="cd-s">--</div>
                                        <div class="cd-lbl">Detik</div>
                                    </div>
                                </div>
                            @else
                                <div style="text-align:center;padding:2rem 0;font-size:.9rem;color:var(--muted-dark);">
                                    Tidak ada sesi aktif saat ini.
                                </div>
                            @endif

                            @if ($jalurs->isNotEmpty())
                                <div
                                    style="margin-top:1.5rem;padding-top:1.25rem;border-top:1px solid var(--border-dark);">
                                    <div style="font-size:.75rem;opacity:.5;margin-bottom:.85rem;text-align:center;">
                                        Sisa Kuota Per Jalur</div>
                                    <div style="display:flex;flex-direction:column;gap:.7rem;">
                                        @foreach ($jalurs as $j)
                                            @php
                                                $meta = $jalurIcons[$j->nama] ?? [
                                                    'icon' => '📋',
                                                    'color' => '#10b981',
                                                    'bg' => 'rgba(5,150,105,.12)',
                                                    'border' => 'rgba(5,150,105,.25)',
                                                ];
                                                $sisa = max(0, $j->kuantitas - ($j->terisi ?? 0));
                                                $pct =
                                                    $j->kuantitas > 0 ? round(($j->terisi / $j->kuantitas) * 100) : 0;
                                            @endphp
                                            <div class="progress-row">
                                                <span>{{ $meta['icon'] }} {{ $j->nama }}</span>
                                                <div style="display:flex;align-items:center;gap:.5rem;">
                                                    <div class="progress-bar">
                                                        <div class="progress-fill"
                                                            style="width:{{ $pct }}%;background:linear-gradient(90deg,{{ $meta['color'] }},{{ $meta['color'] }}99);">
                                                        </div>
                                                    </div>
                                                    <span
                                                        style="font-size:.72rem;color:{{ $meta['color'] }};font-weight:700;">{{ $sisa }}
                                                        sisa</span>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            @endif
                        </div>
                        <div class="glass badge-float badge-float-1">✅ Akreditasi A</div>
                        <div class="glass badge-float badge-float-2">🏅 50+ Prestasi Nasional</div>
                    </div>
                </div>
            </div>
        </section>

        {{-- ═══ TENTANG ═══ --}}
        <section id="tentang">
            <div class="container">
                <div class="bento">
                    <div class="glass bento-card bcard b1"
                        style="background:linear-gradient(135deg,rgba(5,150,105,.08),rgba(212,168,67,.05),transparent);">
                        <div class="borb"
                            style="background:#059669;width:250px;height:250px;top:-80px;right:-60px;"></div>
                        <div class="tag">🏫 Tentang Kami</div>
                        <h2 class="title">Madrasah Unggulan<br><span class="grad">Kabupaten Pandeglang</span></h2>
                        <p class="sub">Berdiri sejak 1970, MTsN 1 Pandeglang telah mencetak ribuan alumni
                            berprestasi. Dengan visi "Terwujudnya peserta didik yang berakhlak mulia, berprestasi, dan
                            berwawasan global."</p>
                        <div style="display:flex;gap:1rem;margin-top:1.5rem;flex-wrap:wrap;">
                            <span
                                style="padding:.6rem 1.2rem;border-radius:10px;background:rgba(5,150,105,.12);border:1px solid rgba(5,150,105,.2);font-size:.8rem;color:#10b981;font-weight:600;">🏛️
                                Negeri</span>
                            <span
                                style="padding:.6rem 1.2rem;border-radius:10px;background:rgba(212,168,67,.12);border:1px solid rgba(212,168,67,.2);font-size:.8rem;color:#d4a843;font-weight:600;">⭐
                                Akreditasi A</span>
                            <span
                                style="padding:.6rem 1.2rem;border-radius:10px;background:rgba(59,130,246,.12);border:1px solid rgba(59,130,246,.2);font-size:.8rem;color:#60a5fa;font-weight:600;">🌐
                                Kemenag RI</span>
                        </div>
                    </div>
                    <div class="glass bcard b2"
                        style="background:linear-gradient(135deg,rgba(212,168,67,.1),transparent);text-align:center;display:flex;flex-direction:column;align-items:center;justify-content:center;padding:1.75rem;">
                        <div class="bstat grad">54</div>
                        <div class="bstat-lbl">Tahun Berdiri</div>
                        <div class="bstat-ico">🏛️</div>
                    </div>
                    <div class="glass bcard b3"
                        style="background:linear-gradient(135deg,rgba(59,130,246,.1),transparent);text-align:center;display:flex;flex-direction:column;align-items:center;justify-content:center;padding:1.75rem;">
                        <div class="bstat"
                            style="background:linear-gradient(135deg,#60a5fa,#818cf8);-webkit-background-clip:text;-webkit-text-fill-color:transparent;background-clip:text;">
                            70</div>
                        <div class="bstat-lbl">Tenaga Pendidik</div>
                        <div class="bstat-ico">👨‍🏫</div>
                    </div>
                    <div class="glass bcard b4"
                        style="background:linear-gradient(135deg,rgba(124,58,237,.08),transparent);">
                        <div style="font-size:2.5rem;margin-bottom:.75rem;">🕌</div>
                        <div style="font-weight:700;font-size:1rem;margin-bottom:.5rem;">Berbasis Islam</div>
                        <p style="font-size:.8rem;color:var(--muted-dark);line-height:1.6;">Kurikulum terintegrasi
                            antara pendidikan umum nasional dan pendidikan agama Islam yang komprehensif dan holistik.
                        </p>
                    </div>
                    <div class="glass bcard b5"
                        style="background:linear-gradient(135deg,rgba(5,150,105,.08),transparent);">
                        <div style="font-size:2.5rem;margin-bottom:.75rem;">🔬</div>
                        <div style="font-weight:700;font-size:1rem;margin-bottom:.5rem;">Lab Modern</div>
                        <p style="font-size:.8rem;color:var(--muted-dark);line-height:1.6;">Fasilitas laboratorium IPA,
                            komputer, dan bahasa yang lengkap untuk mendukung pembelajaran abad ke-21.</p>
                    </div>
                    <div class="glass bcard b6"
                        style="background:linear-gradient(135deg,rgba(212,168,67,.08),transparent);">
                        <div style="font-size:2.5rem;margin-bottom:.75rem;">🏆</div>
                        <div style="font-weight:700;font-size:1rem;margin-bottom:.5rem;">Berprestasi</div>
                        <p style="font-size:.8rem;color:var(--muted-dark);line-height:1.6;">Ratusan prestasi dari
                            tingkat kabupaten hingga nasional di bidang akademik dan non-akademik.</p>
                    </div>
                </div>
            </div>
        </section>

        {{-- ═══ JALUR PENDAFTARAN ═══ --}}
        <section id="jalur">
            <div class="container">
                <div class="tag">📋 Jalur Pendaftaran</div>
                <div class="divider"></div>
                <h2 class="title">{{ $jalurs->count() > 0 ? $jalurs->count() : '5' }} Jalur <span
                        class="grad">Penerimaan</span></h2>
                <p class="sub">Pilih jalur pendaftaran yang sesuai dengan kondisi dan potensi calon peserta didik.
                </p>

                @if ($jalurs->isNotEmpty())
                    <div class="jalur-grid">
                        @foreach ($jalurs as $j)
                            @php
                                $meta = $jalurIcons[$j->nama] ?? [
                                    'icon' => '📋',
                                    'color' => '#10b981',
                                    'bg' => 'rgba(5,150,105,.12)',
                                    'border' => 'rgba(5,150,105,.25)',
                                ];
                                $sisa = max(0, $j->kuantitas - ($j->terisi ?? 0));
                                $pct = $j->kuantitas > 0 ? round(($j->terisi / $j->kuantitas) * 100) : 0;
                                $deskripsi = match ($j->nama) {
                                    'Prestasi'
                                        => 'Bagi siswa berprestasi akademik/non-akademik di tingkat, kabupaten, provinsi, atau nasional.',
                                    'Reguler'
                                        => 'Seleksi berdasarkan nilai akademik dan tes masuk. Terbuka untuk semua calon peserta didik.',
                                    'Afirmasi'
                                        => 'Untuk keluarga kurang mampu pemegang KIP, PKH, atau KKS. Bukti kepemilikan wajib dilampirkan.',
                                    'Zonasi'
                                        => 'Diprioritaskan untuk yang berdomisili paling dekat dengan madrasah berdasarkan Kartu Keluarga.',
                                    'Mutasi'
                                        => 'Untuk yang pindah domisili karena orang tua/wali dipindahtugaskan secara resmi.',
                                    default => 'Lihat informasi lengkap persyaratan jalur ini di sistem pendaftaran.',
                                };
                            @endphp
                            <div class="glass glass-hover jalur-card">
                                <div class="borb"
                                    style="background:{{ $meta['color'] }};width:150px;height:150px;top:-40px;right:-40px;opacity:.12;filter:blur(50px);">
                                </div>
                                <div class="jalur-icon"
                                    style="background:{{ $meta['bg'] }};border:1px solid {{ $meta['border'] }};">
                                    {{ $meta['icon'] }}</div>
                                <div class="jalur-title">Jalur {{ $j->nama }}</div>
                                <div class="jalur-badge"
                                    style="background:{{ $meta['bg'] }};border:1px solid {{ $meta['border'] }};color:{{ $meta['color'] }};">
                                    📊 {{ $j->kuantitas }} Kursi
                                </div>
                                <p class="jalur-desc">{{ $deskripsi }}</p>
                                <div class="jalur-quota-bar">
                                    <div class="jalur-quota-label">
                                        <span>Terisi {{ $j->terisi ?? 0 }}</span>
                                        <span style="color:{{ $meta['color'] }};font-weight:700;">{{ $sisa }}
                                            sisa</span>
                                    </div>
                                    <div class="jalur-quota-track">
                                        <div class="progress-fill"
                                            style="width:{{ $pct }}%;background:linear-gradient(90deg,{{ $meta['color'] }},{{ $meta['color'] }}99);">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @else
                    <div class="glass"
                        style="padding:3rem;text-align:center;margin-top:2rem;color:var(--muted-dark);">
                        Informasi jalur pendaftaran belum tersedia. Pantau terus halaman ini.
                    </div>
                @endif
            </div>
        </section>

        {{-- ═══ PERSYARATAN ═══ --}}
        <section id="syarat">
            <div class="container">
                <div style="display:grid;grid-template-columns:1fr 1fr;gap:4rem;align-items:start;">
                    <div>
                        <div class="tag">📄 Persyaratan</div>
                        <div class="divider"></div>
                        <h2 class="title">Dokumen yang<br><span class="grad">Diperlukan</span></h2>
                        <p class="sub">Siapkan dokumen berikut sebelum memulai proses pendaftaran online.</p>
                        <div class="syarat-grid" style="grid-template-columns:1fr;margin-top:1.5rem;">
                            @foreach ([['Kartu Keluarga (KK)', 'Scan/foto KK asli yang masih berlaku. Format JPG/PNG, maks 500KB.'], ['Akta Kelahiran', 'Scan/foto akta kelahiran asli yang jelas dan terbaca.'], ['Pas Foto 3×4', 'Berlatar merah, berpakaian formal. Format JPG/PNG, maks 500KB.'], ['Kartu NISN', 'Tangkapan layar dari nisn.data.kemdikbud.go.id yang valid.'], ['SKBB & SKAB', 'Surat Keterangan dari kepala sekolah asal. Format PDF, maks 500KB.'], ['KIP / PKH / KKS', 'Scan kartu bantuan sosial yang dimiliki.']] as $i => [$dok, $ket])
                                <div class="glass syarat-item">
                                    <div class="syarat-num">{{ $i + 1 }}</div>
                                    <div class="syarat-text"><strong>{{ $dok }}</strong> —
                                        {{ $ket }}</div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div>
                        <div class="tag">✅ Ketentuan Umum</div>
                        <div class="divider"></div>
                        <div class="glass" style="padding:2rem;margin-top:0;">
                            <ul style="list-style:none;display:flex;flex-direction:column;gap:1rem;">
                                @foreach (['Calon peserta didik telah <strong>lulus SD/MI</strong> atau sederajat pada tahun yang berjalan atau maks 2 tahun sebelumnya.', 'Berusia <strong>maksimal 15 tahun</strong> per tanggal 1 Juli pada tahun yang berjalan.', 'Memiliki <strong>NISN yang valid</strong> sesuai data Kemendikbud.', 'Pendaftaran dilakukan <strong>online melalui sistem PPDB</strong> ini. Tidak melayani pendaftaran manual.', 'Setiap calon peserta didik <strong>hanya dapat mendaftar pada satu jalur</strong> yang dipilih.', 'Berkas asli akan diminta saat proses <strong>verifikasi dan daftar ulang</strong>.'] as $ket)
                                    <li style="display:flex;gap:.75rem;font-size:.875rem;line-height:1.65;">
                                        <span style="color:#10b981;font-size:1.1rem;margin-top:-1px;">✓</span>
                                        <span>{!! $ket !!}</span>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- ═══ ALUR + JADWAL ═══ --}}
        <section id="alur">
            <div class="container">
                <div style="display:grid;grid-template-columns:1fr 1fr;gap:4rem;">
                    <div>
                        <div class="tag">🗺️ Alur Pendaftaran</div>
                        <div class="divider"></div>
                        <h2 class="title">Cara<br><span class="grad">Mendaftar</span></h2>
                        <div class="timeline" style="margin-top:2.5rem;">
                            @foreach ([['Langkah 1', 'Buat Akun', 'Daftar menggunakan NISN, Email, dan Nomor WhatsApp aktif. Verifikasi akun melalui kode OTP yang dikirim ke WhatsApp Anda.'], ['Langkah 2', 'Isi Formulir', 'Lengkapi data diri, data orang tua, pilih jalur pendaftaran, dan unggah seluruh dokumen yang dipersyaratkan.'], ['Langkah 3', 'Verifikasi Berkas', 'Panitia memverifikasi dokumen yang diunggah. Notifikasi status dikirim otomatis ke WhatsApp.'], ['Langkah 4', 'Ikuti Tes Seleksi', 'Cetak kartu tes dari sistem dan ikuti ujian akademik CBT serta ujian praktik ibadah sesuai jadwal.'], ['Langkah 5', 'Pengumuman & Daftar Ulang', 'Cek hasil seleksi melalui akun Anda. Jika diterima, lakukan daftar ulang dengan membawa berkas asli.']] as [$step, $judul, $desc])
                                <div class="tl-item">
                                    <div class="tl-dot"></div>
                                    <div class="tl-step">{{ $step }}</div>
                                    <div class="tl-title">{{ $judul }}</div>
                                    <div class="tl-desc">{{ $desc }}</div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div>
                        <div class="tag">📅 Jadwal PPDB</div>
                        <div class="divider"></div>
                        <h2 class="title">Timeline<br><span class="grad">Kegiatan</span></h2>
                        <div class="glass" style="padding:1.75rem;margin-top:1.5rem;">
                            @forelse($jadwals as $j)
                                @php
                                    $mulai = Carbon::parse($j['mulai']);
                                    $selesai = Carbon::parse($j['selesai']);
                                    if ($now->lt($mulai)) {
                                        $status = 'Mendatang';
                                        $sc = 'rgba(255,255,255,.06)';
                                        $tc = 'var(--muted-dark)';
                                    } elseif ($now->between($mulai, $selesai)) {
                                        $status = 'Aktif';
                                        $sc = 'rgba(212,168,67,.15)';
                                        $tc = '#d4a843';
                                    } else {
                                        $status = 'Selesai';
                                        $sc = 'rgba(5,150,105,.12)';
                                        $tc = '#10b981';
                                    }
                                @endphp
                                <div class="jadwal-item">
                                    <div class="jadwal-icon"
                                        style="background:rgba(255,255,255,.05);border:1px solid var(--border-dark);">
                                        {{ $j['icon'] }}</div>
                                    <div>
                                        <div class="jadwal-title">{{ $j['label'] }}</div>
                                        <div class="jadwal-date">{{ $mulai->translatedFormat('d M') }} –
                                            {{ $selesai->translatedFormat('d M Y') }}</div>
                                    </div>
                                    <div class="jadwal-status"
                                        style="background:{{ $sc }};color:{{ $tc }};border:1px solid {{ $tc }}33;">
                                        {{ $status }}</div>
                                </div>
                            @empty
                                <div style="text-align:center;padding:2rem;font-size:.875rem;color:var(--muted-dark);">
                                    Jadwal PPDB belum ditetapkan.
                                </div>
                            @endforelse
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- ═══ PROGRAM ═══ --}}
        <section id="program">
            <div class="container">
                <div style="text-align:center;">
                    <div class="tag" style="justify-content:center;">🎓 Program Unggulan</div>
                    <div class="divider" style="margin:0.6rem auto 1.5rem;"></div>
                    <h2 class="title">Program & <span class="grad">Ekstrakurikuler</span></h2>
                    <p class="sub" style="margin:0 auto;">Dirancang untuk mengembangkan potensi siswa secara
                        holistik — akademik, spiritual, dan sosial.</p>
                </div>
                <div class="program-grid">
                    @foreach ([['📖', 'Tahfidz Al-Qur\'an', 'Program hafalan Al-Qur\'an dengan target minimal 3 juz selama 3 tahun.'], ['🔬', 'Olimpiade Sains', 'Persiapan kompetisi OSN tingkat kabupaten, provinsi, dan nasional.'], ['💻', 'Teknologi & IT', 'Literasi digital, coding dasar, dan robotika untuk era industri 4.0.'], ['⚽', 'Olahraga Prestasi', 'Sepak bola, bulu tangkis, karate, atletik dengan pelatih berpengalaman.'], ['🎭', 'Seni & Budaya', 'Paskibra, drumband, hadroh, dan seni rupa. Melestarikan budaya bangsa.'], ['🌍', 'Bahasa Asing', 'English Club dan Arabic Club untuk persiapan era global.']] as [$ico, $judul, $desc])
                        <div class="glass glass-hover program-card">
                            <span class="program-ico">{{ $ico }}</span>
                            <div class="program-title">{{ $judul }}</div>
                            <p class="program-desc">{{ $desc }}</p>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        {{-- ═══ KURIKULUM ═══ --}}
        <section id="kurikulum">
            <div class="container">
                <div class="tag">📚 Kurikulum</div>
                <div class="divider"></div>
                <h2 class="title">Kurikulum <span class="grad">Terintegrasi</span></h2>
                <p class="sub">Mengacu pada Kurikulum Merdeka dari Kemdikbud yang dipadukan dengan kurikulum
                    madrasah dari Kemenag RI.</p>
                <div class="kurikulum-grid">
                    <div class="glass kuri-card">
                        <span class="kuri-ico">📐</span>
                        <div class="kuri-title">Mata Pelajaran Umum</div>
                        <ul class="kuri-list">
                            @foreach (['Matematika', 'IPA (Fisika, Kimia, Biologi)', 'IPS (Geografi, Sejarah, Ekonomi)', 'Bahasa Indonesia & Inggris', 'PPKN & Seni Budaya', 'PJOK & Informatika'] as $mp)
                                <li>{{ $mp }}</li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="glass kuri-card">
                        <span class="kuri-ico">🕌</span>
                        <div class="kuri-title">Mata Pelajaran Agama</div>
                        <ul class="kuri-list">
                            @foreach (['Al-Qur\'an Hadits', 'Akidah Akhlak', 'Fiqih', 'Sejarah Kebudayaan Islam', 'Bahasa Arab', 'Tahfidz Al-Qur\'an'] as $mp)
                                <li>{{ $mp }}</li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="glass kuri-card">
                        <span class="kuri-ico">🎯</span>
                        <div class="kuri-title">Program Keunggulan</div>
                        <ul class="kuri-list">
                            @foreach (['Kelas Unggulan (Seleksi)', 'Kelas Reguler', 'Program Akselerasi Hafalan', 'Bimbingan Olimpiade', 'English Immersion', 'Digital Literacy'] as $mp)
                                <li>{{ $mp }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        {{-- ═══ PRESTASI ═══ --}}
        <section id="prestasi">
            <div class="container">
                <div class="tag">🏅 Prestasi</div>
                <div class="divider"></div>
                <h2 class="title">Rekam <span class="grad">Kejuaraan</span></h2>
                <p class="sub">Ratusan prestasi membanggakan dari berbagai bidang di tingkat lokal hingga nasional.
                </p>
                <div class="prestasi-scroll">
                    @foreach ([['🥇', 'Juara 1 OSN Matematika', 'Tingkat Provinsi · 2024'], ['🥇', 'Juara 1 MTQ Tilawah', 'Tingkat Kabupaten · 2024'], ['🥈', 'Juara 2 KSM IPA', 'Tingkat Nasional · 2023'], ['🥇', 'Juara 1 Bulu Tangkis Putra', 'Tingkat Provinsi · 2024'], ['🥉', 'Juara 3 Olimpiade Fisika', 'Tingkat Nasional · 2023'], ['🥇', 'Juara 1 Hafalan 10 Juz', 'Tingkat Provinsi · 2024'], ['🥈', 'Juara 2 LCC Pelajar', 'Tingkat Kabupaten · 2024'], ['🥇', 'Juara 1 Karate Kata Beregu', 'Tingkat Provinsi · 2023']] as [$medal, $judul, $info])
                        <div class="glass glass-hover prestasi-card">
                            <span class="prestasi-medal">{{ $medal }}</span>
                            <div class="prestasi-title">{{ $judul }}</div>
                            <div class="prestasi-info">{{ $info }}</div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        {{-- ═══ TESTIMONI ═══ --}}
        <section id="testimoni">
            <div class="container">
                <div style="text-align:center;">
                    <div class="tag" style="justify-content:center;">💬 Testimoni</div>
                    <div class="divider" style="margin:.6rem auto 1.5rem;"></div>
                    <h2 class="title">Kata Mereka yang<br><span class="grad">Telah Bergabung</span></h2>
                </div>
                <div class="testi-grid">
                    @foreach ([['Hj. Siti Nurhalimah', 'Orang Tua Siswa · Angkatan 2022', 'H', 'linear-gradient(135deg,#059669,#047857)', '"Anak saya berkembang pesat sejak masuk MTsN 1 Pandeglang. Tidak hanya akademik, akhlak dan kedisiplinannya juga sangat terasa perubahan positifnya."'], ['Achmad Fauzi', 'Orang Tua Siswa · Angkatan 2024', 'A', 'linear-gradient(135deg,#d4a843,#b8860b)', '"Proses PPDB online sangat memudahkan. Semua bisa dilakukan dari rumah, notifikasi WhatsApp langsung masuk, dan statusnya bisa dipantau kapan saja."'], ['Rd. Dian Pertiwi', 'Orang Tua Siswa · Angkatan 2023', 'R', 'linear-gradient(135deg,#3b82f6,#1d4ed8)', '"Guru-gurunya sangat perhatian dan profesional. Program tahfidz-nya luar biasa, sekarang anak saya sudah hafal 5 juz di kelas 8. Alhamdulillah."']] as [$nama, $role, $inisial, $grad, $teks])
                        <div class="glass glass-hover testi-card">
                            <div class="testi-stars">★★★★★</div>
                            <p class="testi-text">{{ $teks }}</p>
                            <div class="testi-author">
                                <div class="testi-avatar" style="background:{{ $grad }};">
                                    {{ $inisial }}</div>
                                <div>
                                    <div class="testi-name">{{ $nama }}</div>
                                    <div class="testi-role">{{ $role }}</div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        {{-- ═══ INFORMASI ═══ --}}
        <section id="informasi">
            <div class="container">
                <div style="display:flex;justify-content:space-between;align-items:flex-end;flex-wrap:wrap;gap:1rem;">
                    <div>
                        <div class="tag">📰 Informasi PPDB</div>
                        <div class="divider"></div>
                        <h2 class="title">Berita &<br><span class="grad">Pengumuman</span></h2>
                    </div>
                    <a href="{{ url('/informasi') }}" class="btn btn-ghost">Lihat Semua →</a>
                </div>
                @if ($informasis->isNotEmpty())
                    <div class="info-grid">
                        @foreach ($informasis as $info)
                            <div class="glass glass-hover info-card">
                                <div class="info-tag">{{ $info->status === 'Publish' ? 'Pengumuman' : 'Informasi' }}
                                </div>
                                <div class="info-title">{{ $info->judul }}</div>
                                <p class="info-excerpt">
                                    {{ \Illuminate\Support\Str::limit(strip_tags($info->isi), 120) }}</p>
                                <div class="info-date">
                                    📅
                                    {{ $info->tanggal ? $info->tanggal->translatedFormat('d F Y') : $info->updated_at->translatedFormat('d F Y') }}
                                </div>
                            </div>
                        @endforeach
                    </div>
                @else
                    <div class="glass"
                        style="padding:3rem;text-align:center;margin-top:2rem;color:var(--muted-dark);">
                        Belum ada informasi yang dipublikasikan.
                    </div>
                @endif
            </div>
        </section>

        {{-- ═══ FAQ ═══ --}}
        <section id="faq">
            <div class="container">
                <div style="text-align:center;">
                    <div class="tag" style="justify-content:center;">❓ FAQ</div>
                    <div class="divider" style="margin:.6rem auto 1.5rem;"></div>
                    <h2 class="title">Pertanyaan yang<br><span class="grad">Sering Diajukan</span></h2>
                    <p class="sub" style="margin:0 auto;">Temukan jawaban atas pertanyaan umum seputar proses PPDB
                        MTsN 1 Pandeglang.</p>
                </div>
                <div style="max-width:780px;margin:2.5rem auto 0;">
                    @foreach ([
        ['Apakah pendaftaran bisa dilakukan secara offline?', 'Tidak. Seluruh proses pendaftaran dilakukan secara online melalui sistem PPDB ini. Panitia tidak melayani pendaftaran manual di kantor madrasah.'],
        ['Berapa jalur yang bisa dipilih oleh satu calon peserta didik?', 'Setiap calon peserta didik hanya diperbolehkan memilih satu jalur pendaftaran. Pastikan jalur yang dipilih sesuai dengan kondisi dan dokumen yang dimiliki.'],
        ['Apa yang terjadi jika dokumen yang diunggah tidak memenuhi syarat?', 'Panitia akan mengirimkan notifikasi melalui WhatsApp yang terdaftar. Pendaftar diberikan kesempatan untuk mengunggah ulang dokumen sebelum batas waktu verifikasi berakhir.'],
        ['Apakah nilai rapor memengaruhi seleksi jalur Reguler?', 'Tidak. Jalur Reguler tidak mempertimbangkan nilai akademik sebagai salah satu komponen seleksi, disamping hasil tes CBT dan ujian praktik ibadah yang dilaksanakan sesuai jadwal.'],
        ['Bagaimana cara mendapatkan NISN jika belum terdaftar?', 'NISN dapat dicek dan diajukan melalui nisn.data.kemdikbud.go.id. Jika belum terdaftar, hubungi operator sekolah asal untuk pengurusan lebih lanjut sebelum mendaftar.'],
        ['Apakah ada biaya pendaftaran?', 'Tidak ada biaya pendaftaran. Seluruh proses PPDB MTsN 1 Pandeglang tidak dipungut biaya apapun.'],
        ['Kapan pengumuman hasil seleksi disampaikan?', 'Pengumuman disampaikan sesuai jadwal yang tertera di bagian Timeline Kegiatan. Notifikasi otomatis juga dikirim ke nomor WhatsApp yang didaftarkan.'],
        ['Apa yang harus dibawa saat daftar ulang?', 'Peserta yang dinyatakan diterima wajib membawa seluruh dokumen asli yang sebelumnya diunggah, termasuk KK, akta kelahiran, pas foto terbaru, dan surat keterangan dari sekolah asal.'],
    ] as $idx => [$tanya, $jawab])
                        <div class="glass faq-item" style="margin-bottom:.75rem;border-radius:16px;overflow:hidden;">
                            <button class="faq-trigger" onclick="toggleFaq(this)"
                                style="width:100%;display:flex;align-items:center;justify-content:space-between;gap:1rem;padding:1.25rem 1.5rem;background:transparent;border:none;color:inherit;cursor:pointer;text-align:left;font-size:.9rem;font-weight:600;line-height:1.5;">
                                <span>{{ $tanya }}</span>
                                <span class="faq-chevron"
                                    style="min-width:22px;height:22px;border-radius:50%;background:rgba(5,150,105,.12);border:1px solid rgba(5,150,105,.2);display:flex;align-items:center;justify-content:center;font-size:.7rem;color:#10b981;transition:transform .3s;">▼</span>
                            </button>
                            <div class="faq-body"
                                style="max-height:0;overflow:hidden;transition:max-height .35s ease;">
                                <p
                                    style="padding:0 1.5rem 1.25rem;font-size:.855rem;color:var(--muted-dark);line-height:1.75;border-top:1px solid var(--border-dark);">
                                    {{ $jawab }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        {{-- ═══ KEBIJAKAN PRIVASI ═══ --}}
        <section id="privasi">
            <div class="container">
                <div style="text-align:center;">
                    <div class="tag" style="justify-content:center;">🔒 Privasi</div>
                    <div class="divider" style="margin:.6rem auto 1.5rem;"></div>
                    <h2 class="title">Kebijakan <span class="grad">Privasi</span></h2>
                    <p class="sub" style="margin:0 auto;">Kami berkomitmen melindungi data pribadi Anda sesuai
                        peraturan perundang-undangan yang berlaku di Indonesia.</p>
                </div>
                <div class="glass privacy-box">
                    <h3>1. Data yang Kami Kumpulkan</h3>
                    <p>Kami mengumpulkan data yang diperlukan untuk proses pendaftaran, meliputi: nama lengkap, NIK,
                        NISN, nomor Kartu Keluarga, nomor telepon WhatsApp, alamat email, data orang tua/wali, serta
                        dokumen pendukung pendaftaran (foto, KK, akta kelahiran, dan lainnya).</p>
                    <h3>2. Tujuan Penggunaan Data</h3>
                    <p>Data yang dikumpulkan digunakan semata-mata untuk keperluan proses PPDB, verifikasi kelengkapan
                        berkas, komunikasi melalui WhatsApp terkait status pendaftaran, dan keperluan administrasi
                        madrasah.</p>
                    <h3>3. Perlindungan Data</h3>
                    <p>Seluruh data sensitif seperti NIK dan nomor telepon disimpan dalam bentuk terenkripsi. Akses data
                        dibatasi hanya untuk panitia PPDB yang berwenang. Kami tidak menjual, menyewakan, atau
                        membagikan data pribadi kepada pihak ketiga manapun untuk tujuan komersial.</p>
                    <h3>4. Hak Pengguna</h3>
                    <p>Anda memiliki hak untuk mengakses, memperbaiki, atau menghapus data pribadi Anda dengan
                        menghubungi panitia PPDB secara langsung. Penghapusan data dapat dilakukan setelah proses
                        penerimaan selesai.</p>
                    <h3>5. Kontak</h3>
                    <p>Pertanyaan terkait kebijakan privasi ini dapat disampaikan ke: <strong
                            style="color:#10b981;">adm@mtsn1pandeglang.sch.id</strong> atau melalui WhatsApp panitia
                        PPDB yang tertera pada pengumuman resmi.</p>
                </div>
            </div>
        </section>

        {{-- ═══ CTA ═══ --}}
        <div class="cta-wrap">
            <div class="cta-bg"></div>
            <div class="container" style="position:relative;z-index:1;">
                <div style="font-size:3.5rem;margin-bottom:1rem;">🎓</div>
                <h2 class="cta-title">Bergabunglah Bersama<br><span class="grad">Generasi Terbaik</span></h2>
                <p class="cta-sub">
                    @if ($tahun && $tahun->kuantitas)
                        Kuota {{ $tahun->kuantitas }} peserta, terbatas.
                    @endif
                    Daftarkan diri sekarang dan wujudkan masa depan yang lebih cerah.
                </p>
                <div class="cta-actions">
                    <a href="{{ url('/register') }}" class="btn btn-primary btn-lg">📝 Daftar Sekarang</a>
                    <a href="{{ url('/login') }}" class="btn btn-ghost btn-lg">🔐 Login Akun</a>
                </div>
            </div>
        </div>

    </main>

    {{-- ═══ FOOTER ═══ --}}
    <footer>
        <div class="container">
            <div style="display:flex;justify-content:center;margin-bottom:1.25rem;">
                <div class="nav-logo" style="width:48px;height:48px;font-size:1.6rem;">🕌</div>
            </div>
            <div style="font-size:1.05rem;font-weight:800;">MTs Negeri 1 Pandeglang</div>
            <div style="font-size:.82rem;color:var(--muted-dark);margin-top:.3rem;">Kementerian Agama Kabupaten
                Pandeglang · PPDB {{ $tahun?->nama ?? '' }}</div>
            <div style="font-size:.8rem;color:var(--muted-dark);margin-top:.4rem;">Jl. Raya Labuan, Kabupaten
                Pandeglang, Banten 42213</div>
            <div class="footer-links">
                <a href="#jalur">Jalur Pendaftaran</a>
                <a href="#alur">Alur Daftar</a>
                <a href="#program">Program</a>
                <a href="#kurikulum">Kurikulum</a>
                <a href="#prestasi">Prestasi</a>
                <a href="#informasi">Informasi</a>
                <a href="#privasi">Kebijakan Privasi</a>
                <a href="https://mtsn1pandeglang.sch.id" target="_blank" rel="noopener">Website Resmi ↗</a>
            </div>
            <div class="footer-copy">
                &copy; 1970 – {{ date('Y') }} MTs Negeri 1 Pandeglang.
                Dikembangkan oleh <a href="https://github.com/zulfikriyahya" target="_blank" rel="noopener"
                    style="color:#10b981;text-decoration:none;">Yahya Zulfikri</a>.
            </div>
        </div>
    </footer>

    <script>
        // ── THEME ──
        const html = document.documentElement;
        const btn = document.getElementById('themeToggle');
        const saved = localStorage.getItem('theme');
        if (saved === 'light') {
            html.classList.add('light');
            btn.textContent = '🌙';
        } else {
            btn.textContent = '☀️';
        }
        btn.addEventListener('click', () => {
            html.classList.toggle('light');
            const isLight = html.classList.contains('light');
            btn.textContent = isLight ? '🌙' : '☀️';
            localStorage.setItem('theme', isLight ? 'light' : 'dark');
        });

        // ── COUNTDOWN ──
        const cdEl = document.getElementById('countdown');
        if (cdEl) {
            const deadline = new Date(cdEl.dataset.deadline);
            const pad = n => String(n).padStart(2, '0');

            function tick() {
                const diff = deadline - Date.now();
                if (diff <= 0) {
                    cdEl.innerHTML =
                        '<div style="text-align:center;grid-column:span 4;padding:1rem;opacity:.6;font-size:.85rem;">Pendaftaran telah ditutup.</div>';
                    return;
                }
                const d = Math.floor(diff / 86400000);
                const h = Math.floor((diff % 86400000) / 3600000);
                const m = Math.floor((diff % 3600000) / 60000);
                const s = Math.floor((diff % 60000) / 1000);
                document.getElementById('cd-d').textContent = pad(d);
                document.getElementById('cd-h').textContent = pad(h);
                document.getElementById('cd-m').textContent = pad(m);
                document.getElementById('cd-s').textContent = pad(s);
            }
            tick();
            setInterval(tick, 1000);
        }

        // ── ACTIVE NAV ──
        const sections = document.querySelectorAll('section[id], div.cta-wrap');
        const links = document.querySelectorAll('.nav-links a');
        const obs = new IntersectionObserver(entries => {
            entries.forEach(e => {
                if (!e.isIntersecting) return;
                links.forEach(a => a.classList.remove('active'));
                const a = document.querySelector(`.nav-links a[href="#${e.target.id}"]`);
                if (a) a.classList.add('active');
            });
        }, {
            threshold: 0.35
        });
        sections.forEach(s => obs.observe(s));

        // ── FAQ ──
        function toggleFaq(btn) {
            const body = btn.nextElementSibling;
            const chevron = btn.querySelector('.faq-chevron');
            const isOpen = body.style.maxHeight && body.style.maxHeight !== '0px';
            document.querySelectorAll('.faq-body').forEach(b => b.style.maxHeight = '0px');
            document.querySelectorAll('.faq-chevron').forEach(c => c.style.transform = '');
            if (!isOpen) {
                body.style.maxHeight = body.scrollHeight + 'px';
                chevron.style.transform = 'rotate(180deg)';
            }
        }
    </script>
</body>

</html>
