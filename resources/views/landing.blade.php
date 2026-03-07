@php
    use Carbon\Carbon;

    $now = Carbon::now();

    $jadwals = [];
    if ($tahun) {
        $map = [
            ['🏆', 'Jalur Prestasi',       'tanggal_pendaftaran_jalur_prestasi_mulai',  'tanggal_pendaftaran_jalur_prestasi_selesai'],
            ['📚', 'Jalur Reguler',         'tanggal_pendaftaran_jalur_reguler_mulai',   'tanggal_pendaftaran_jalur_reguler_selesai'],
            ['🤝', 'Jalur Afirmasi',        'tanggal_pendaftaran_jalur_afirmasi_mulai',  'tanggal_pendaftaran_jalur_afirmasi_selesai'],
            ['🏘️', 'Jalur Zonasi',          'tanggal_pendaftaran_jalur_zonasi_mulai',    'tanggal_pendaftaran_jalur_zonasi_selesai'],
            ['🔄', 'Jalur Mutasi',          'tanggal_pendaftaran_jalur_mutasi_mulai',    'tanggal_pendaftaran_jalur_mutasi_selesai'],
            ['📝', 'Tes Seleksi (CBT)',     'tanggal_tes_akademik_mulai',               'tanggal_tes_akademik_selesai'],
            ['📢', 'Pengumuman Reguler',    'tanggal_pengumuman_jalur_reguler_mulai',    'tanggal_pengumuman_jalur_reguler_selesai'],
            ['✅', 'Registrasi Berkas',     'tanggal_registrasi_berkas_mulai',           'tanggal_registrasi_berkas_selesai'],
        ];
        foreach ($map as [$icon, $label, $mk, $sk]) {
            if ($tahun->$mk) {
                $jadwals[] = ['icon' => $icon, 'label' => $label, 'mulai' => $tahun->$mk, 'selesai' => $tahun->$sk];
            }
        }
    }

    $jalurMeta = [
        'Prestasi' => ['icon' => '🏆', 'color' => '#d4a843', 'bg' => 'rgba(212,168,67,.12)', 'border' => 'rgba(212,168,67,.3)'],
        'Reguler'  => ['icon' => '📚', 'color' => '#10b981', 'bg' => 'rgba(16,185,129,.12)',  'border' => 'rgba(16,185,129,.3)'],
        'Afirmasi' => ['icon' => '🤝', 'color' => '#60a5fa', 'bg' => 'rgba(96,165,250,.12)',  'border' => 'rgba(96,165,250,.3)'],
        'Zonasi'   => ['icon' => '🏘️', 'color' => '#a78bfa', 'bg' => 'rgba(167,139,250,.12)', 'border' => 'rgba(167,139,250,.3)'],
        'Mutasi'   => ['icon' => '🔄', 'color' => '#fb923c', 'bg' => 'rgba(251,146,60,.12)',  'border' => 'rgba(251,146,60,.3)'],
    ];

    $jalurDesc = [
        'Prestasi' => 'Untuk siswa berprestasi akademik/non-akademik di tingkat kabupaten, provinsi, atau nasional.',
        'Reguler'  => 'Seleksi berbasis tes CBT dan ujian praktik. Terbuka untuk semua calon peserta didik.',
        'Afirmasi' => 'Untuk keluarga pemegang KIP, PKH, atau KKS. Bukti kartu bantuan wajib dilampirkan.',
        'Zonasi'   => 'Diprioritaskan bagi yang berdomisili terdekat dengan madrasah berdasarkan Kartu Keluarga.',
        'Mutasi'   => 'Untuk calon peserta yang pindah domisili karena orang tua dipindahtugaskan secara resmi.',
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
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="PPDB MTsN 1 Pandeglang {{ $tahun?->nama ?? '' }} — Pendaftaran online peserta didik baru.">
    <title>PPDB MTsN 1 Pandeglang{{ $tahun ? ' — ' . $tahun->nama : '' }}</title>
    <style>
        *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }
        html { scroll-behavior: smooth; font-size: 16px; }

        :root {
            --green:   #059669;
            --green-l: #10b981;
            --gold:    #d4a843;
            --gold-l:  #f0c96a;

            --bg:       #0b0f0e;
            --surface:  #111a17;
            --card:     rgba(255,255,255,.04);
            --border:   rgba(255,255,255,.08);
            --text:     #e8f1ee;
            --muted:    #7a9e92;
            --radius:   16px;
        }
        html.light {
            --bg:      #f4f7f5;
            --surface: #ffffff;
            --card:    rgba(255,255,255,.9);
            --border:  rgba(0,0,0,.08);
            --text:    #0d1f1a;
            --muted:   #5a7a6e;
        }

        body {
            font-family: 'Segoe UI', system-ui, -apple-system, sans-serif;
            background: var(--bg);
            color: var(--text);
            transition: background .3s, color .3s;
            overflow-x: hidden;
            line-height: 1.6;
        }

        /* ─── nav brand mobile truncation fix ─── */
        @media (max-width: 400px) {
            .nav-name { font-size: .78rem; }
            .nav-sub  { display: none; }
        }

        /* ─── scrollbar ─── */
        ::-webkit-scrollbar { width: 6px; }
        ::-webkit-scrollbar-track { background: transparent; }
        ::-webkit-scrollbar-thumb { background: var(--green); border-radius: 4px; }

        /* ─── ambient ─── */
        .orb {
            position: fixed; border-radius: 50%; filter: blur(110px);
            opacity: .12; pointer-events: none; z-index: 0;
        }
        html.light .orb { opacity: .06; }
        .orb-1 { width: 600px; height: 600px; background: var(--green); top: -200px; left: -200px; }
        .orb-2 { width: 400px; height: 400px; background: var(--gold);  bottom: 0;   right: -150px; }

        /* ─── layout helpers ─── */
        .wrap { max-width: 1180px; margin: 0 auto; padding: 0 1.5rem; }
        section { padding: 5rem 1.5rem; position: relative; z-index: 1; }
        .section-header { margin-bottom: 3rem; }
        .section-header.center { text-align: center; }
        .section-header.center .divider { margin: .5rem auto 0; }

        /* ─── type ─── */
        .eyebrow {
            display: inline-flex; align-items: center; gap: .4rem;
            padding: .28rem .85rem; border-radius: 999px;
            font-size: .72rem; font-weight: 700; letter-spacing: .08em; text-transform: uppercase;
            background: rgba(16,185,129,.1); color: var(--green-l);
            border: 1px solid rgba(16,185,129,.2); margin-bottom: .75rem;
        }
        .divider {
            width: 40px; height: 3px;
            background: linear-gradient(90deg, var(--green), var(--gold));
            border-radius: 999px; margin: .5rem 0 0;
        }
        h1, h2 { font-weight: 800; letter-spacing: -.03em; line-height: 1.1; }
        h1 { font-size: clamp(2.2rem, 5vw, 3.6rem); }
        h2 { font-size: clamp(1.7rem, 3.5vw, 2.5rem); margin-bottom: .75rem; }
        .grad {
            background: linear-gradient(135deg, var(--green-l), var(--gold));
            -webkit-background-clip: text; -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        .lead { font-size: 1.05rem; color: var(--muted); max-width: 540px; line-height: 1.75; }

        /* ─── glass card ─── */
        .card {
            background: var(--card);
            border: 1px solid var(--border);
            border-radius: var(--radius);
            backdrop-filter: blur(10px);
            transition: border-color .25s, transform .25s, box-shadow .25s;
        }
        html.light .card { box-shadow: 0 2px 16px rgba(0,0,0,.06); }
        .card-hover:hover {
            border-color: rgba(16,185,129,.3);
            transform: translateY(-3px);
            box-shadow: 0 8px 32px rgba(5,150,105,.12);
        }

        /* ─── buttons ─── */
        .btn {
            display: inline-flex; align-items: center; gap: .4rem;
            padding: .6rem 1.4rem; border-radius: 10px;
            font-size: .875rem; font-weight: 600; cursor: pointer;
            border: none; text-decoration: none; transition: all .2s;
        }
        .btn-primary {
            background: linear-gradient(135deg, var(--green), #047857);
            color: #fff; box-shadow: 0 0 20px rgba(5,150,105,.25);
        }
        .btn-primary:hover { transform: translateY(-1px); box-shadow: 0 4px 28px rgba(5,150,105,.4); }
        .btn-ghost {
            background: transparent; color: var(--muted);
            border: 1px solid var(--border);
        }
        .btn-ghost:hover { color: var(--green-l); border-color: rgba(16,185,129,.4); background: rgba(16,185,129,.06); }
        .btn-lg { padding: .8rem 2rem; font-size: 1rem; border-radius: 12px; }

        /* ─── badge ─── */
        .badge {
            display: inline-block; padding: .2rem .7rem; border-radius: 999px;
            font-size: .7rem; font-weight: 700; text-transform: uppercase; letter-spacing: .06em;
        }

        /* ═══════════════════════════════════════
           NAV
        ═══════════════════════════════════════ */
        nav {
            position: fixed; top: 0; left: 0; right: 0; z-index: 200;
            height: 60px; padding: 0 1.5rem;
            display: flex; align-items: center; justify-content: space-between;
            background: rgba(11,15,14,.85); border-bottom: 1px solid var(--border);
            backdrop-filter: blur(18px) saturate(160%);
            transition: background .3s, border-color .3s;
        }
        html.light nav { background: rgba(244,247,245,.92); }

        .nav-brand {
            display: flex; align-items: center; gap: .7rem;
            text-decoration: none; color: inherit; font-weight: 700; flex-shrink: 0;
        }
        .nav-logo {
            width: 34px; height: 34px; border-radius: 9px; flex-shrink: 0;
            background: linear-gradient(135deg, var(--green), var(--gold));
            display: flex; align-items: center; justify-content: center; font-size: 1.1rem;
        }
        .nav-name { font-size: .88rem; line-height: 1.25; }
        .nav-sub  { font-size: .68rem; font-weight: 400; color: var(--muted); }

        .nav-links { display: flex; gap: .1rem; list-style: none; }
        .nav-links a {
            text-decoration: none; color: var(--muted); font-size: .82rem;
            padding: .35rem .65rem; border-radius: 8px; transition: all .2s;
        }
        .nav-links a:hover, .nav-links a.active { color: var(--green-l); background: rgba(16,185,129,.08); }

        .nav-right { display: flex; align-items: center; gap: .6rem; flex-shrink: 0; }

        #themeBtn {
            width: 34px; height: 34px; border-radius: 8px;
            border: 1px solid var(--border); background: var(--card);
            cursor: pointer; display: flex; align-items: center; justify-content: center;
            font-size: 1rem; color: inherit; transition: all .2s;
        }
        #themeBtn:hover { transform: scale(1.1); }

        /* hamburger */
        #menuBtn {
            display: none; width: 34px; height: 34px; border-radius: 8px;
            border: 1px solid var(--border); background: var(--card);
            cursor: pointer; flex-direction: column; align-items: center; justify-content: center;
            gap: 4px; color: inherit;
        }
        #menuBtn span {
            display: block; width: 16px; height: 2px; background: currentColor;
            border-radius: 2px; transition: all .3s;
        }
        #menuBtn.open span:nth-child(1) { transform: translateY(6px) rotate(45deg); }
        #menuBtn.open span:nth-child(2) { opacity: 0; transform: scaleX(0); }
        #menuBtn.open span:nth-child(3) { transform: translateY(-6px) rotate(-45deg); }

        /* drawer */
        .drawer {
            position: fixed; top: 56px; left: 0; right: 0; z-index: 190;
            flex-direction: column; padding: 0 1.25rem;
            background: #0b0f0e;
            border-bottom: 1px solid transparent;
            max-height: 0; overflow: hidden;
            transition: max-height .3s ease, padding .3s ease, border-color .3s;
            display: flex;
        }
        html.light .drawer { background: #f4f7f5; }
        .drawer.open {
            max-height: 420px;
            padding: 1rem 1.25rem 1.5rem;
            border-color: var(--border);
        }
        .drawer.open { opacity: 1; transform: translateY(0); }
        .drawer a {
            text-decoration: none; color: var(--muted); font-size: .9rem; font-weight: 500;
            padding: .6rem .9rem; border-radius: 10px; transition: all .2s;
        }
        .drawer a:hover { color: var(--green-l); background: rgba(16,185,129,.08); }
        .drawer hr { border: none; border-top: 1px solid var(--border); margin: .6rem 0; }

        /* ═══════════════════════════════════════
           HERO
        ═══════════════════════════════════════ */
        #hero {
            min-height: 100vh; padding-top: 60px;
            display: flex; align-items: center;
        }
        .hero-grid {
            display: grid; grid-template-columns: 1fr 1fr;
            gap: 4rem; align-items: center; max-width: 1180px; margin: 0 auto; width: 100%;
        }
        .hero-eyebrow {
            display: inline-flex; align-items: center; gap: .45rem;
            padding: .35rem 1rem; border-radius: 999px; font-size: .75rem; font-weight: 600;
            background: rgba(212,168,67,.1); border: 1px solid rgba(212,168,67,.2);
            color: var(--gold-l); margin-bottom: 1.25rem;
        }
        .hero-cta { display: flex; gap: .85rem; flex-wrap: wrap; margin-top: 2rem; }
        .hero-stats {
            display: flex; gap: 2rem; flex-wrap: wrap;
            margin-top: 2.5rem; padding-top: 2rem; border-top: 1px solid var(--border);
        }
        .stat-val {
            font-size: 1.6rem; font-weight: 800;
            background: linear-gradient(135deg, var(--green-l), var(--gold));
            -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text;
        }
        .stat-lbl { font-size: .74rem; color: var(--muted); margin-top: .15rem; }

        /* hero card */
        .hero-card { padding: 1.75rem; border-radius: 22px; max-width: 400px; width: 100%; }
        .cd-grid { display: grid; grid-template-columns: repeat(4,1fr); gap: .65rem; margin-top: 1.25rem; }
        .cd-box {
            background: rgba(255,255,255,.05); border: 1px solid var(--border);
            border-radius: 12px; padding: .9rem .5rem; text-align: center;
        }
        html.light .cd-box { background: rgba(0,0,0,.04); }
        .cd-n {
            font-size: 1.75rem; font-weight: 900; font-variant-numeric: tabular-nums;
            background: linear-gradient(135deg, var(--green-l), var(--gold));
            -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text;
        }
        .cd-l { font-size: .6rem; color: var(--muted); text-transform: uppercase; letter-spacing: .1em; margin-top: .15rem; }

        .quota-row { display: flex; align-items: center; justify-content: space-between; font-size: .8rem; }
        .progress { width: 70px; height: 5px; background: rgba(255,255,255,.08); border-radius: 999px; overflow: hidden; }
        html.light .progress { background: rgba(0,0,0,.08); }
        .progress-fill { height: 100%; border-radius: 999px; }

        /* ═══════════════════════════════════════
           STATS ROW
        ═══════════════════════════════════════ */
        .stats-row {
            display: grid; grid-template-columns: repeat(4, 1fr);
            gap: 1px; background: var(--border);
            border: 1px solid var(--border); border-radius: var(--radius); overflow: hidden;
            margin: 0 auto; max-width: 1180px;
        }
        .stat-box {
            background: var(--surface); padding: 2rem 1.5rem; text-align: center;
        }
        .stat-box .val { font-size: 2rem; font-weight: 800; }
        .stat-box .lbl { font-size: .78rem; color: var(--muted); margin-top: .25rem; }

        /* ═══════════════════════════════════════
           JALUR
        ═══════════════════════════════════════ */
        .jalur-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(210px,1fr)); gap: 1rem; }
        .jalur-card { padding: 1.5rem; border-radius: var(--radius); position: relative; overflow: hidden; }
        .jalur-icon {
            width: 46px; height: 46px; border-radius: 12px;
            display: flex; align-items: center; justify-content: center;
            font-size: 1.4rem; margin-bottom: 1rem;
        }
        .jalur-name  { font-size: .95rem; font-weight: 700; margin-bottom: .4rem; }
        .jalur-desc  { font-size: .78rem; color: var(--muted); line-height: 1.6; }
        .jalur-quota { margin-top: 1rem; }
        .quota-label { display: flex; justify-content: space-between; font-size: .72rem; color: var(--muted); margin-bottom: .35rem; }

        /* ═══════════════════════════════════════
           TIMELINE + JADWAL
        ═══════════════════════════════════════ */
        .two-col { display: grid; grid-template-columns: 1fr 1fr; gap: 4rem; align-items: start; }

        .timeline { padding-left: 1.75rem; position: relative; }
        .timeline::before {
            content: ''; position: absolute; left: .35rem; top: 0; bottom: 0;
            width: 2px; background: linear-gradient(to bottom, var(--green), var(--gold), transparent);
        }
        .tl-item { position: relative; padding: 1rem 0 1rem 1.25rem; border-bottom: 1px solid var(--border); }
        .tl-item:last-child { border-bottom: none; }
        .tl-dot {
            position: absolute; left: -1.75rem; top: 1.2rem;
            width: 12px; height: 12px; border-radius: 50%;
            background: var(--green); border: 3px solid var(--bg); transition: background .2s;
        }
        html.light .tl-dot { border-color: var(--bg); }
        .tl-item:hover .tl-dot { background: var(--gold); }
        .tl-step  { font-size: .68rem; font-weight: 700; text-transform: uppercase; letter-spacing: .07em; color: var(--green-l); margin-bottom: .25rem; }
        .tl-title { font-size: .9rem; font-weight: 700; margin-bottom: .2rem; }
        .tl-desc  { font-size: .78rem; color: var(--muted); line-height: 1.6; }

        .sched-list { display: flex; flex-direction: column; }
        .sched-item {
            display: flex; align-items: center; gap: .85rem;
            padding: .85rem 0; border-bottom: 1px solid var(--border);
        }
        .sched-item:last-child { border-bottom: none; }
        .sched-ico {
            min-width: 38px; height: 38px; border-radius: 10px;
            display: flex; align-items: center; justify-content: center; font-size: 1rem;
            background: rgba(255,255,255,.04); border: 1px solid var(--border);
            flex-shrink: 0;
        }
        .sched-title { font-size: .82rem; font-weight: 700; }
        .sched-date  { font-size: .72rem; color: var(--muted); margin-top: .1rem; }
        .sched-badge { margin-left: auto; }

        /* ═══════════════════════════════════════
           PROGRAM
        ═══════════════════════════════════════ */
        .prog-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(180px,1fr)); gap: 1rem; }
        .prog-card { padding: 1.5rem; border-radius: var(--radius); text-align: center; }
        .prog-ico   { font-size: 2.2rem; display: block; margin-bottom: .6rem; }
        .prog-title { font-size: .88rem; font-weight: 700; margin-bottom: .35rem; }
        .prog-desc  { font-size: .76rem; color: var(--muted); line-height: 1.55; }

        /* ═══════════════════════════════════════
           SYARAT
        ═══════════════════════════════════════ */
        .req-grid { display: grid; grid-template-columns: 1fr 1fr; gap: .75rem; margin-top: 1.5rem; }
        .req-item { display: flex; align-items: flex-start; gap: .75rem; padding: 1rem; border-radius: 12px; }
        .req-num {
            min-width: 26px; height: 26px; border-radius: 7px; flex-shrink: 0;
            background: linear-gradient(135deg, var(--green), #047857);
            display: flex; align-items: center; justify-content: center;
            font-size: .7rem; font-weight: 800; color: #fff;
        }
        .req-text { font-size: .82rem; line-height: 1.6; }
        .req-text strong { display: block; margin-bottom: .15rem; }

        /* ═══════════════════════════════════════
           INFORMASI
        ═══════════════════════════════════════ */
        .info-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(300px,1fr)); gap: 1rem; }
        .info-card { padding: 1.5rem; border-radius: var(--radius); display: flex; flex-direction: column; }
        .info-tag  { font-size: .68rem; font-weight: 700; text-transform: uppercase; letter-spacing: .06em; color: var(--green-l); margin-bottom: .6rem; }
        .info-title { font-size: .95rem; font-weight: 700; margin-bottom: .5rem; line-height: 1.4; flex: 1; }
        .info-excerpt { font-size: .78rem; color: var(--muted); line-height: 1.65; }
        .info-date  { font-size: .72rem; color: var(--muted); margin-top: .85rem; }

        /* ═══════════════════════════════════════
           FAQ
        ═══════════════════════════════════════ */
        .faq-wrap { max-width: 760px; margin: 2.5rem auto 0; }
        .faq-item  { border-radius: 12px; overflow: hidden; margin-bottom: .6rem; }
        .faq-btn {
            width: 100%; display: flex; align-items: center; justify-content: space-between; gap: 1rem;
            padding: 1.1rem 1.25rem; background: transparent; border: none;
            color: inherit; cursor: pointer; text-align: left; font-size: .88rem; font-weight: 600;
            transition: color .2s;
        }
        .faq-btn:hover { color: var(--green-l); }
        .faq-chevron {
            min-width: 20px; height: 20px; border-radius: 50%;
            background: rgba(16,185,129,.1); border: 1px solid rgba(16,185,129,.2);
            display: flex; align-items: center; justify-content: center;
            font-size: .65rem; color: var(--green-l); transition: transform .3s;
        }
        .faq-body { max-height: 0; overflow: hidden; transition: max-height .35s ease; }
        .faq-body p {
            padding: 0 1.25rem 1.1rem; font-size: .83rem; color: var(--muted);
            line-height: 1.75; border-top: 1px solid var(--border);
        }

        /* ═══════════════════════════════════════
           CTA
        ═══════════════════════════════════════ */
        .cta-section { text-align: center; padding: 6rem 1.5rem; }
        .cta-inner { max-width: 600px; margin: 0 auto; }
        .cta-inner h2 { font-size: clamp(2rem, 4.5vw, 3rem); margin-bottom: 1rem; }
        .cta-inner .lead { margin: 0 auto 2rem; }
        .cta-btns { display: flex; gap: .85rem; justify-content: center; flex-wrap: wrap; }

        /* ═══════════════════════════════════════
           FOOTER
        ═══════════════════════════════════════ */
        footer {
            border-top: 1px solid var(--border); padding: 2.5rem 1.5rem;
            text-align: center; position: relative; z-index: 1;
        }
        .footer-logo { font-size: .95rem; font-weight: 800; margin-bottom: .3rem; }
        .footer-sub  { font-size: .78rem; color: var(--muted); }
        .footer-links { display: flex; justify-content: center; gap: 1.25rem; flex-wrap: wrap; margin-top: 1.5rem; }
        .footer-links a { font-size: .78rem; color: var(--muted); text-decoration: none; transition: color .2s; }
        .footer-links a:hover { color: var(--green-l); }
        .footer-copy { font-size: .73rem; color: var(--muted); margin-top: 1.5rem; }
        .footer-copy a { color: var(--green-l); text-decoration: none; }

        /* ═══════════════════════════════════════
           RESPONSIVE
        ═══════════════════════════════════════ */
        @media (max-width: 960px) {
            .hero-grid    { grid-template-columns: 1fr; gap: 3rem; }
            .hero-visual  { display: none; }
            .stats-row    { grid-template-columns: repeat(2,1fr); }
            .two-col      { grid-template-columns: 1fr; gap: 3rem; }
        }

        @media (max-width: 768px) {
            section { padding: 3.5rem 1.25rem; }
            nav { padding: 0 1rem; height: 56px; }
            #hero { padding-top: 56px; min-height: calc(100svh - 56px); padding-bottom: 3rem; align-items: flex-start; }
            .nav-links { display: none; }
            .req-grid  { grid-template-columns: 1fr; }
            .prog-grid { grid-template-columns: repeat(2,1fr); }
            #loginBtnNav, #registerBtnNav { display: none !important; }
            .hero-grid { padding: 2.5rem 0 0; }
            h1 { font-size: clamp(1.85rem, 7vw, 2.5rem); }
            .lead { font-size: .92rem; }
            .hero-cta { flex-direction: column; gap: .65rem; margin-top: 1.5rem; }
            .hero-cta .btn { width: 100%; justify-content: center; padding: .85rem 1.5rem; font-size: .95rem; }
            .hero-stats { gap: 0; margin-top: 2rem; padding-top: 1.5rem; display: grid; grid-template-columns: repeat(2,1fr); row-gap: 1.25rem; }
            .stat-val { font-size: 1.4rem; }
        }

        @media (max-width: 480px) {
            h2 { font-size: 1.5rem; }
            .stats-row { grid-template-columns: repeat(2,1fr); }
            .cta-btns { flex-direction: column; align-items: stretch; }
            .cta-btns .btn { width: 100%; justify-content: center; }
            .prog-grid { grid-template-columns: 1fr 1fr; }
            .jalur-grid { grid-template-columns: 1fr; }
        }
    </style>
</head>
<body>

<div class="orb orb-1"></div>
<div class="orb orb-2"></div>

{{-- ═══ NAV ═══ --}}
<nav>
    <a href="{{ route('landing') }}" class="nav-brand">
        <div class="nav-logo">🕌</div>
        <div>
            <div class="nav-name">MTsN 1 Pandeglang</div>
            <div class="nav-sub">PPDB {{ $tahun?->nama ?? '' }}</div>
        </div>
    </a>

    <ul class="nav-links">
        <li><a href="#jalur">Jalur</a></li>
        <li><a href="#alur">Alur</a></li>
        <li><a href="#syarat">Syarat</a></li>
        <li><a href="#program">Program</a></li>
        <li><a href="#informasi">Informasi</a></li>
        <li><a href="#faq">FAQ</a></li>
    </ul>

    <div class="nav-right">
        <button id="themeBtn" title="Ganti tema">🌙</button>
        <button id="menuBtn" aria-label="Menu">
            <span></span><span></span><span></span>
        </button>
        <a href="{{ url('/login') }}"  class="btn btn-ghost"   style="display:none;" id="loginBtnNav">Masuk</a>
        <a href="{{ url('/register') }}" class="btn btn-primary" id="registerBtnNav">📝 Daftar</a>
    </div>
</nav>

<nav class="drawer" id="drawer">
    <a href="#jalur"     class="d-link">🗂️ Jalur Pendaftaran</a>
    <a href="#alur"      class="d-link">🗺️ Alur Daftar</a>
    <a href="#syarat"    class="d-link">📄 Persyaratan</a>
    <a href="#program"   class="d-link">🎓 Program Unggulan</a>
    <a href="#informasi" class="d-link">📰 Informasi</a>
    <a href="#faq"       class="d-link">❓ FAQ</a>
    <hr>
    <a href="{{ url('/login') }}"    class="d-link">🔐 Masuk Akun</a>
    <a href="{{ url('/register') }}" class="d-link" style="color:var(--green-l);font-weight:700;">📝 Daftar Sekarang</a>
</nav>

<main>

{{-- ═══ HERO ═══ --}}
<section id="hero">
    <div class="hero-grid wrap">
        {{-- left --}}
        <div>
            <div class="hero-eyebrow">✨ Penerimaan Peserta Didik Baru {{ $tahun?->nama ?? '' }}</div>
            <h1>Raih Masa Depan<br><span class="grad">Bersama Kami</span></h1>
            <p class="lead" style="margin-top:1rem;">
                MTsN 1 Pandeglang — Madrasah unggulan dengan kurikulum terpadu antara ilmu umum dan ilmu agama. Tempat terbaik untuk generasi penerus bangsa yang berakhlak mulia dan berprestasi.
            </p>
            <div class="hero-cta">
                <a href="{{ url('/register') }}" class="btn btn-primary btn-lg">📝 Daftar Sekarang</a>
                <a href="#alur"                  class="btn btn-ghost btn-lg">Lihat Alur →</a>
            </div>
            <div class="hero-stats">
                <div><div class="stat-val">1.200+</div><div class="stat-lbl">Siswa Aktif</div></div>
                <div><div class="stat-val">98%</div>   <div class="stat-lbl">Kelulusan</div></div>
                <div><div class="stat-val">50+</div>   <div class="stat-lbl">Prestasi Nasional</div></div>
                @if($tahun)
                <div><div class="stat-val">{{ $tahun->kuantitas }}</div><div class="stat-lbl">Kuota Total</div></div>
                @endif
            </div>
        </div>

        {{-- right card --}}
        <div class="hero-visual" style="display:flex;align-items:center;justify-content:center;">
            <div class="card hero-card">
                <div class="eyebrow" style="justify-content:center;display:flex;margin-bottom:.75rem;">
                    @if($closestDeadline) ⏳ Pendaftaran Ditutup Dalam @else 📋 Status PPDB @endif
                </div>

                @if($closestDeadline)
                <div class="cd-grid" id="countdown" data-deadline="{{ Carbon::parse($closestDeadline)->toIso8601String() }}">
                    <div class="cd-box"><div class="cd-n" id="cd-d">--</div><div class="cd-l">Hari</div></div>
                    <div class="cd-box"><div class="cd-n" id="cd-h">--</div><div class="cd-l">Jam</div></div>
                    <div class="cd-box"><div class="cd-n" id="cd-m">--</div><div class="cd-l">Menit</div></div>
                    <div class="cd-box"><div class="cd-n" id="cd-s">--</div><div class="cd-l">Detik</div></div>
                </div>
                @else
                <p style="text-align:center;padding:1.5rem 0;font-size:.85rem;color:var(--muted);">Tidak ada sesi pendaftaran aktif saat ini.</p>
                @endif

                @if($jalurs->isNotEmpty())
                <div style="margin-top:1.25rem;padding-top:1.1rem;border-top:1px solid var(--border);">
                    <p style="font-size:.7rem;color:var(--muted);text-align:center;margin-bottom:.75rem;">Sisa Kuota Per Jalur</p>
                    <div style="display:flex;flex-direction:column;gap:.6rem;">
                        @foreach($jalurs as $j)
                        @php
                            $m    = $jalurMeta[$j->nama] ?? ['icon'=>'📋','color'=>'#10b981','bg'=>'rgba(16,185,129,.12)','border'=>'rgba(16,185,129,.3)'];
                            $sisa = max(0, $j->kuantitas - ($j->terisi ?? 0));
                            $pct  = $j->kuantitas > 0 ? round(($j->terisi / $j->kuantitas) * 100) : 0;
                        @endphp
                        <div class="quota-row">
                            <span style="font-size:.78rem;">{{ $m['icon'] }} {{ $j->nama }}</span>
                            <div style="display:flex;align-items:center;gap:.5rem;">
                                <div class="progress">
                                    <div class="progress-fill" style="width:{{ $pct }}%;background:{{ $m['color'] }};"></div>
                                </div>
                                <span style="font-size:.7rem;font-weight:700;color:{{ $m['color'] }};">{{ $sisa }} sisa</span>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                @endif
            </div>
        </div>
    </div>
</section>

{{-- ═══ STATS ROW ═══ --}}
<div style="padding:0 1.5rem;position:relative;z-index:1;max-width:1180px;margin:0 auto;">
    <div class="stats-row">
        <div class="stat-box"><div class="val grad">54</div><div class="lbl">Tahun Berdiri</div></div>
        <div class="stat-box"><div class="val" style="background:linear-gradient(135deg,#60a5fa,#a78bfa);-webkit-background-clip:text;-webkit-text-fill-color:transparent;background-clip:text;">70</div><div class="lbl">Tenaga Pendidik</div></div>
        <div class="stat-box"><div class="val grad">A</div><div class="lbl">Akreditasi</div></div>
        <div class="stat-box"><div class="val" style="background:linear-gradient(135deg,#fb923c,#f59e0b);-webkit-background-clip:text;-webkit-text-fill-color:transparent;background-clip:text;">100+</div><div class="lbl">Prestasi Kejuaraan</div></div>
    </div>
</div>

{{-- ═══ JALUR ═══ --}}
<section id="jalur">
    <div class="wrap">
        <div class="section-header">
            <div class="eyebrow">📋 Jalur Pendaftaran</div>
            <h2>Pilih Jalur yang<br><span class="grad">Tepat Untukmu</span></h2>
            <div class="divider"></div>
        </div>

        @if($jalurs->isNotEmpty())
        <div class="jalur-grid">
            @foreach($jalurs as $j)
            @php
                $m    = $jalurMeta[$j->nama] ?? ['icon'=>'📋','color'=>'#10b981','bg'=>'rgba(16,185,129,.12)','border'=>'rgba(16,185,129,.3)'];
                $desc = $jalurDesc[$j->nama]  ?? 'Lihat informasi lengkap persyaratan jalur ini.';
                $sisa = max(0, $j->kuantitas - ($j->terisi ?? 0));
                $pct  = $j->kuantitas > 0 ? round(($j->terisi / $j->kuantitas) * 100) : 0;
            @endphp
            <div class="card card-hover jalur-card" style="background:linear-gradient(135deg,{{ $m['bg'] }},transparent);">
                <div class="jalur-icon" style="background:{{ $m['bg'] }};border:1px solid {{ $m['border'] }};">{{ $m['icon'] }}</div>
                <div class="badge" style="background:{{ $m['bg'] }};color:{{ $m['color'] }};border:1px solid {{ $m['border'] }};margin-bottom:.6rem;">{{ $j->kuantitas }} Kursi</div>
                <div class="jalur-name">Jalur {{ $j->nama }}</div>
                <p class="jalur-desc">{{ $desc }}</p>
                <div class="jalur-quota">
                    <div class="quota-label">
                        <span>Terisi {{ $j->terisi ?? 0 }}</span>
                        <span style="color:{{ $m['color'] }};font-weight:700;">{{ $sisa }} sisa</span>
                    </div>
                    <div class="progress" style="width:100%;">
                        <div class="progress-fill" style="width:{{ $pct }}%;background:{{ $m['color'] }};"></div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        @else
        <div class="card" style="padding:3rem;text-align:center;color:var(--muted);">
            Informasi jalur pendaftaran belum tersedia. Pantau terus halaman ini.
        </div>
        @endif
    </div>
</section>

{{-- ═══ ALUR + JADWAL ═══ --}}
<section id="alur">
    <div class="wrap">
        <div class="two-col">
            {{-- alur --}}
            <div>
                <div class="section-header">
                    <div class="eyebrow">🗺️ Alur Pendaftaran</div>
                    <h2>Cara<br><span class="grad">Mendaftar</span></h2>
                    <div class="divider"></div>
                </div>
                <div class="timeline">
                    @foreach([
                        ['Langkah 1','Buat Akun',              'Daftar menggunakan NISN, email, dan nomor WhatsApp aktif. Verifikasi akun melalui OTP yang dikirim ke WhatsApp.'],
                        ['Langkah 2','Isi Formulir',           'Lengkapi data diri, data orang tua, pilih jalur pendaftaran, dan unggah seluruh dokumen yang dipersyaratkan.'],
                        ['Langkah 3','Verifikasi Berkas',      'Panitia memeriksa dokumen. Notifikasi status dikirim otomatis ke WhatsApp pendaftar.'],
                        ['Langkah 4','Ikuti Tes Seleksi',      'Cetak kartu tes dari sistem, lalu ikuti ujian akademik CBT dan ujian praktik ibadah sesuai jadwal.'],
                        ['Langkah 5','Pengumuman & Daftar Ulang','Cek hasil seleksi melalui akun. Jika diterima, lakukan daftar ulang dengan membawa berkas asli.'],
                    ] as [$step, $title, $desc])
                    <div class="tl-item">
                        <div class="tl-dot"></div>
                        <div class="tl-step">{{ $step }}</div>
                        <div class="tl-title">{{ $title }}</div>
                        <div class="tl-desc">{{ $desc }}</div>
                    </div>
                    @endforeach
                </div>
            </div>

            {{-- jadwal --}}
            <div>
                <div class="section-header">
                    <div class="eyebrow">📅 Jadwal PPDB</div>
                    <h2>Timeline<br><span class="grad">Kegiatan</span></h2>
                    <div class="divider"></div>
                </div>
                <div class="card" style="padding:1.5rem;">
                    <div class="sched-list">
                        @forelse($jadwals as $j)
                        @php
                            $m = Carbon::parse($j['mulai']);
                            $s = Carbon::parse($j['selesai']);
                            if ($now->lt($m))             { $st = 'Mendatang'; $sc = 'rgba(255,255,255,.06)'; $tc = 'var(--muted)'; }
                            elseif ($now->between($m,$s)) { $st = 'Aktif';     $sc = 'rgba(212,168,67,.15)'; $tc = '#d4a843'; }
                            else                          { $st = 'Selesai';   $sc = 'rgba(16,185,129,.12)'; $tc = '#10b981'; }
                        @endphp
                        <div class="sched-item">
                            <div class="sched-ico">{{ $j['icon'] }}</div>
                            <div>
                                <div class="sched-title">{{ $j['label'] }}</div>
                                <div class="sched-date">{{ $m->translatedFormat('d M') }} – {{ $s->translatedFormat('d M Y') }}</div>
                            </div>
                            <div class="sched-badge badge" style="background:{{ $sc }};color:{{ $tc }};border:1px solid {{ $tc }}44;">{{ $st }}</div>
                        </div>
                        @empty
                        <p style="text-align:center;padding:2rem;font-size:.85rem;color:var(--muted);">Jadwal PPDB belum ditetapkan.</p>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ═══ PERSYARATAN ═══ --}}
<section id="syarat">
    <div class="wrap">
        <div class="two-col">
            {{-- dokumen --}}
            <div>
                <div class="section-header">
                    <div class="eyebrow">📄 Dokumen</div>
                    <h2>Berkas yang<br><span class="grad">Diperlukan</span></h2>
                    <div class="divider"></div>
                    <p class="lead" style="margin-top:.75rem;">Siapkan dokumen berikut sebelum memulai pendaftaran. Format JPG/PNG/PDF, maks 1 MB, min 10 KB.</p>
                </div>
                <div class="req-grid">
                    @foreach([
                        ['Kartu Keluarga',   'Scan/foto KK asli yang masih berlaku.'],
                        ['Akta Kelahiran',   'Scan/foto akta kelahiran yang jelas.'],
                        ['Pas Foto Formal',  'Berlatar merah, berpakaian formal.'],
                        ['Screenshot NISN',  'Dari nisn.data.kemdikbud.go.id.'],
                        ['SKBB & SKAB',      'Surat keterangan dari kepala sekolah asal.'],
                        ['KIP / PKH / KKS',  'Jika berlaku — kartu bantuan sosial.'],
                    ] as $i => [$dok, $ket])
                    <div class="card req-item">
                        <div class="req-num">{{ $i+1 }}</div>
                        <div class="req-text"><strong>{{ $dok }}</strong>{{ $ket }}</div>
                    </div>
                    @endforeach
                </div>
            </div>

            {{-- ketentuan --}}
            <div>
                <div class="section-header">
                    <div class="eyebrow">✅ Ketentuan</div>
                    <h2>Ketentuan<br><span class="grad">Umum</span></h2>
                    <div class="divider"></div>
                </div>
                <div class="card" style="padding:1.75rem;">
                    <ul style="list-style:none;display:flex;flex-direction:column;gap:.9rem;">
                        @foreach([
                            'Calon peserta didik telah <strong>lulus SD/MI</strong> atau sederajat.',
                            'Berusia <strong>maksimal 15 tahun</strong> per 1 Juli tahun berjalan.',
                            'Memiliki <strong>NISN yang valid</strong> sesuai data Kemendikbud.',
                            'Pendaftaran dilakukan <strong>sepenuhnya online</strong> melalui sistem ini.',
                            'Setiap pendaftar hanya dapat <strong>memilih satu jalur</strong>.',
                            'Berkas asli diminta saat <strong>verifikasi dan daftar ulang</strong>.',
                        ] as $ket)
                        <li style="display:flex;gap:.65rem;font-size:.85rem;line-height:1.65;align-items:flex-start;">
                            <span style="color:var(--green-l);font-size:1rem;flex-shrink:0;margin-top:.05rem;">✓</span>
                            <span>{!! $ket !!}</span>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ═══ PROGRAM ═══ --}}
<section id="program">
    <div class="wrap">
        <div class="section-header center">
            <div class="eyebrow">🎓 Unggulan</div>
            <h2>Program & <span class="grad">Ekstrakurikuler</span></h2>
            <div class="divider"></div>
        </div>
        <div class="prog-grid">
            @foreach([
                ['📖','Tahfidz Al-Qur\'an','Target minimal 3 juz selama 3 tahun belajar.'],
                ['🔬','Olimpiade Sains',   'Persiapan OSN mulai dari tingkat kabupaten hingga nasional.'],
                ['💻','Teknologi & IT',    'Literasi digital, coding dasar, dan robotika.'],
                ['⚽','Olahraga Prestasi', 'Sepak bola, bulu tangkis, karate, dan atletik.'],
                ['🎭','Seni & Budaya',     'Paskibra, drumband, hadroh, dan seni rupa.'],
                ['🌍','Bahasa Asing',      'English Club dan Arabic Club untuk era global.'],
            ] as [$ico,$judul,$desc])
            <div class="card card-hover prog-card">
                <span class="prog-ico">{{ $ico }}</span>
                <div class="prog-title">{{ $judul }}</div>
                <p class="prog-desc">{{ $desc }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- ═══ INFORMASI ═══ --}}
<section id="informasi">
    <div class="wrap">
        <div style="display:flex;justify-content:space-between;align-items:flex-end;flex-wrap:wrap;gap:1rem;margin-bottom:2rem;">
            <div>
                <div class="eyebrow">📰 Informasi</div>
                <h2>Berita & <span class="grad">Pengumuman</span></h2>
                <div class="divider"></div>
            </div>
            <a href="{{ url('/informasi') }}" class="btn btn-ghost">Lihat Semua →</a>
        </div>
        @if($informasis->isNotEmpty())
        <div class="info-grid">
            @foreach($informasis as $info)
            <div class="card card-hover info-card">
                <div class="info-tag">{{ $info->status === 'Publish' ? '📢 Pengumuman' : '📋 Informasi' }}</div>
                <div class="info-title">{{ $info->judul }}</div>
                <p class="info-excerpt">{{ \Illuminate\Support\Str::limit(strip_tags($info->isi), 110) }}</p>
                <div class="info-date">📅 {{ ($info->tanggal ?? $info->updated_at)->translatedFormat('d F Y') }}</div>
            </div>
            @endforeach
        </div>
        @else
        <div class="card" style="padding:3rem;text-align:center;color:var(--muted);">Belum ada informasi yang dipublikasikan.</div>
        @endif
    </div>
</section>

{{-- ═══ FAQ ═══ --}}
<section id="faq">
    <div class="wrap">
        <div class="section-header center">
            <div class="eyebrow">❓ FAQ</div>
            <h2>Pertanyaan yang<br><span class="grad">Sering Diajukan</span></h2>
            <div class="divider"></div>
        </div>
        <div class="faq-wrap">
            @foreach([
                ['Apakah pendaftaran bisa dilakukan secara offline?',
                 'Tidak. Seluruh proses pendaftaran dilakukan secara online melalui sistem PPDB ini. Panitia tidak melayani pendaftaran manual.'],
                ['Berapa jalur yang bisa dipilih oleh satu calon peserta didik?',
                 'Setiap calon peserta didik hanya boleh memilih satu jalur pendaftaran sesuai kondisi dan dokumen yang dimiliki.'],
                ['Apa yang terjadi jika dokumen yang diunggah tidak memenuhi syarat?',
                 'Panitia akan mengirim notifikasi melalui WhatsApp. Pendaftar diberikan kesempatan mengunggah ulang sebelum batas waktu verifikasi.'],
                ['Apakah nilai rapor memengaruhi seleksi jalur Reguler?',
                 'Tidak. Jalur Reguler menggunakan hasil tes CBT dan ujian praktik ibadah sebagai dasar seleksi, bukan nilai rapor.'],
                ['Apakah ada biaya pendaftaran?',
                 'Tidak ada. Seluruh proses PPDB MTsN 1 Pandeglang tidak dipungut biaya apapun.'],
                ['Kapan pengumuman hasil seleksi disampaikan?',
                 'Pengumuman disampaikan sesuai jadwal yang tertera di Timeline Kegiatan. Notifikasi otomatis juga dikirim ke WhatsApp pendaftar.'],
                ['Apa yang harus dibawa saat daftar ulang?',
                 'Peserta wajib membawa seluruh dokumen asli: KK, akta kelahiran, pas foto terbaru, dan surat keterangan dari sekolah asal.'],
            ] as [$q, $a])
            <div class="card faq-item">
                <button class="faq-btn" onclick="toggleFaq(this)">
                    <span>{{ $q }}</span>
                    <span class="faq-chevron">▼</span>
                </button>
                <div class="faq-body">
                    <p>{{ $a }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- ═══ CTA ═══ --}}
<section class="cta-section" style="position:relative;z-index:1;">
    <div style="position:absolute;inset:0;background:radial-gradient(ellipse at center,rgba(5,150,105,.1) 0%,transparent 70%);pointer-events:none;"></div>
    <div class="cta-inner" style="position:relative;">
        <div style="font-size:3rem;margin-bottom:.75rem;">🎓</div>
        <h2>Bergabunglah Bersama<br><span class="grad">Generasi Terbaik</span></h2>
        <p class="lead">
            @if($tahun && $tahun->kuantitas) Kuota {{ $tahun->kuantitas }} peserta, terbatas. @endif
            Daftarkan diri sekarang dan wujudkan masa depan lebih cerah.
        </p>
        <div class="cta-btns">
            <a href="{{ url('/register') }}" class="btn btn-primary btn-lg">📝 Daftar Sekarang</a>
            <a href="{{ url('/login') }}"    class="btn btn-ghost btn-lg">🔐 Masuk Akun</a>
        </div>
    </div>
</section>

</main>

{{-- ═══ FOOTER ═══ --}}
<footer>
    <div class="wrap">
        <div style="font-size:2rem;margin-bottom:.5rem;">🕌</div>
        <div class="footer-logo">MTs Negeri 1 Pandeglang</div>
        <div class="footer-sub">Kementerian Agama Kabupaten Pandeglang · PPDB {{ $tahun?->nama ?? '' }}</div>
        <div class="footer-sub" style="margin-top:.25rem;">Jl. Raya Labuan, Kabupaten Pandeglang, Banten 42213</div>
        <div class="footer-links">
            <a href="#jalur">Jalur</a>
            <a href="#alur">Alur Daftar</a>
            <a href="#syarat">Persyaratan</a>
            <a href="#program">Program</a>
            <a href="#informasi">Informasi</a>
            <a href="#faq">FAQ</a>
            <a href="https://mtsn1pandeglang.sch.id" target="_blank" rel="noopener">Website Resmi ↗</a>
        </div>
        <div class="footer-copy">
            &copy; 1970–{{ date('Y') }} MTs Negeri 1 Pandeglang.
            Dikembangkan oleh <a href="https://github.com/zulfikriyahya" target="_blank" rel="noopener">Yahya Zulfikri</a>.
        </div>
    </div>
</footer>

<script>
// ── theme ──
const html = document.documentElement;
const themeBtn = document.getElementById('themeBtn');
const saved = localStorage.getItem('theme');
if (saved === 'light') { html.classList.add('light'); themeBtn.textContent = '🌙'; }
else                   { themeBtn.textContent = '☀️'; }
themeBtn.addEventListener('click', () => {
    html.classList.toggle('light');
    const light = html.classList.contains('light');
    themeBtn.textContent = light ? '🌙' : '☀️';
    localStorage.setItem('theme', light ? 'light' : 'dark');
});

// ── hamburger ──
const menuBtn = document.getElementById('menuBtn');
const drawer  = document.getElementById('drawer');
menuBtn.addEventListener('click', () => {
    const open = drawer.classList.toggle('open');
    menuBtn.classList.toggle('open', open);
});
drawer.querySelectorAll('.d-link').forEach(a => a.addEventListener('click', () => {
    drawer.classList.remove('open'); menuBtn.classList.remove('open');
}));
document.addEventListener('click', e => {
    if (!drawer.contains(e.target) && !menuBtn.contains(e.target)) {
        drawer.classList.remove('open'); menuBtn.classList.remove('open');
    }
});

// ── countdown ──
const cdEl = document.getElementById('countdown');
if (cdEl) {
    const dead = new Date(cdEl.dataset.deadline);
    const pad  = n => String(n).padStart(2,'0');
    function tick() {
        const diff = dead - Date.now();
        if (diff <= 0) {
            cdEl.innerHTML = '<p style="grid-column:span 4;text-align:center;padding:1rem;opacity:.5;font-size:.8rem;">Pendaftaran telah ditutup.</p>';
            return;
        }
        document.getElementById('cd-d').textContent = pad(Math.floor(diff/86400000));
        document.getElementById('cd-h').textContent = pad(Math.floor((diff%86400000)/3600000));
        document.getElementById('cd-m').textContent = pad(Math.floor((diff%3600000)/60000));
        document.getElementById('cd-s').textContent = pad(Math.floor((diff%60000)/1000));
    }
    tick(); setInterval(tick, 1000);
}

// ── active nav ──
const sections = document.querySelectorAll('section[id]');
const navAs    = document.querySelectorAll('.nav-links a');
new IntersectionObserver(entries => {
    entries.forEach(e => {
        if (!e.isIntersecting) return;
        navAs.forEach(a => a.classList.remove('active'));
        const a = document.querySelector(`.nav-links a[href="#${e.target.id}"]`);
        if (a) a.classList.add('active');
    });
}, { threshold: 0.35 }).observe;
sections.forEach(s => new IntersectionObserver(entries => {
    entries.forEach(e => {
        if (!e.isIntersecting) return;
        navAs.forEach(a => a.classList.remove('active'));
        const a = document.querySelector(`.nav-links a[href="#${e.target.id}"]`);
        if (a) a.classList.add('active');
    });
}, { threshold: 0.35 }).observe(s));

// ── faq ──
function toggleFaq(btn) {
    const body    = btn.nextElementSibling;
    const chevron = btn.querySelector('.faq-chevron');
    const isOpen  = body.style.maxHeight && body.style.maxHeight !== '0px';
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
