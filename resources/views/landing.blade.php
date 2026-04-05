<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta name="description"
        content="PMBM MTsN 1 Pandeglang TP 2026/2027 — Pendaftaran peserta didik baru Jalur Prestasi, Afirmasi, dan Reguler.">
    <title>PMBM MTsN 1 Pandeglang — TP 2026/2027</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <style>
        *,
        *::before,
        *::after {
            box-sizing: border-box;
            margin: 0;
            padding: 0
        }

        html {
            scroll-behavior: smooth;
            font-size: 16px
        }

        :root {
            --teal: #0d9488;
            --teal-l: #14b8a6;
            --teal-d: #0f766e;
            --teal-xl: #5eead4;
            --gold: #d4a843;
            --gold-l: #f0c96a;
            --red: #dc2626;
            --red-l: #ef4444;
            --blue: #2563eb;
            --blue-l: #60a5fa;
            --amber: #f59e0b;
            --bg: #060d0c;
            --bg2: #091210;
            --surface: #0e1a18;
            --card: rgba(20, 184, 166, .06);
            --card2: rgba(255, 255, 255, .03);
            --border: rgba(20, 184, 166, .12);
            --border2: rgba(255, 255, 255, .06);
            --text: #e2f4f1;
            --muted: #6aada3;
            --muted2: #4a8078;
            --radius: 16px;
            --nav-h: 64px;
            --shadow-teal: 0 0 40px rgba(13, 148, 136, .18);
        }

        body {
            font-family: 'Lexend', system-ui, sans-serif;
            background: var(--bg);
            color: var(--text);
            overflow-x: hidden;
            line-height: 1.65;
            -webkit-font-smoothing: antialiased
        }

        ::-webkit-scrollbar {
            width: 4px
        }

        ::-webkit-scrollbar-thumb {
            background: var(--teal);
            border-radius: 4px
        }

        /* ── TEXTURE ── */
        body::before {
            content: '';
            position: fixed;
            inset: 0;
            background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 200 200' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='.9' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)' opacity='.03'/%3E%3C/svg%3E");
            opacity: .4;
            pointer-events: none;
            z-index: 0
        }

        /* ── ORB ── */
        .orb {
            position: fixed;
            border-radius: 50%;
            filter: blur(140px);
            opacity: .07;
            pointer-events: none;
            z-index: 0;
            animation: orb-drift 18s ease-in-out infinite alternate
        }

        .orb-1 {
            width: 800px;
            height: 800px;
            background: radial-gradient(circle, var(--teal), transparent 70%);
            top: -300px;
            left: -300px
        }

        .orb-2 {
            width: 600px;
            height: 600px;
            background: radial-gradient(circle, var(--gold), transparent 70%);
            bottom: -200px;
            right: -250px;
            animation-delay: -9s
        }

        @keyframes orb-drift {
            0% {
                transform: translate(0, 0) scale(1)
            }

            100% {
                transform: translate(30px, 20px) scale(1.08)
            }
        }

        /* ── GRID BG ── */
        .grid-bg {
            position: fixed;
            inset: 0;
            z-index: 0;
            pointer-events: none;
            background-image: linear-gradient(rgba(13, 148, 136, .04) 1px, transparent 1px), linear-gradient(90deg, rgba(13, 148, 136, .04) 1px, transparent 1px);
            background-size: 60px 60px;
            mask-image: radial-gradient(ellipse 80% 60% at 50% 0%, black 40%, transparent 100%)
        }

        /* ══ NAV ══ */
        nav {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            z-index: 200;
            height: var(--nav-h);
            padding: 0 2rem;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 1rem;
            background: rgba(6, 13, 12, .88);
            border-bottom: 1px solid var(--border);
            backdrop-filter: blur(24px) saturate(180%);
            transition: background .3s, box-shadow .3s
        }

        nav.scrolled {
            background: rgba(6, 13, 12, .97);
            box-shadow: 0 1px 0 var(--border), var(--shadow-teal)
        }

        .nav-brand {
            display: flex;
            align-items: center;
            gap: .75rem;
            text-decoration: none;
            color: inherit;
            font-weight: 700;
            flex-shrink: 0
        }

        .nav-logo {
            width: 40px;
            height: 40px;
            border-radius: 10px;
            overflow: hidden;
            flex-shrink: 0;
            border: 1px solid var(--border);
            display: flex;
            align-items: center;
            justify-content: center;
            background: rgba(13, 148, 136, .1)
        }

        .nav-logo svg {
            width: 24px;
            height: 24px;
            fill: var(--teal-xl)
        }

        .nav-name {
            font-size: .88rem;
            line-height: 1.2;
            font-weight: 700;
            letter-spacing: -.01em;
            white-space: nowrap
        }

        .nav-sub {
            font-size: .62rem;
            font-weight: 500;
            color: var(--teal-l)
        }

        .nav-links {
            display: flex;
            gap: .1rem;
            list-style: none;
            flex: 1;
            justify-content: center;
            flex-wrap: nowrap;
            overflow: hidden
        }

        .nav-links a {
            text-decoration: none;
            color: var(--muted);
            font-size: .75rem;
            font-weight: 600;
            padding: .38rem .6rem;
            border-radius: 8px;
            transition: all .2s;
            white-space: nowrap
        }

        .nav-links a:hover,
        .nav-links a.active {
            color: var(--teal-xl);
            background: rgba(20, 184, 166, .1)
        }

        .nav-right {
            display: flex;
            align-items: center;
            gap: .5rem;
            flex-shrink: 0
        }

        .n-btn {
            height: 34px;
            padding: 0 .65rem;
            border-radius: 8px;
            border: 1px solid var(--border);
            background: var(--card2);
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: .8rem;
            color: inherit;
            transition: all .2s;
            white-space: nowrap;
            font-weight: 600;
            font-family: 'Lexend', sans-serif
        }

        .n-btn:hover {
            border-color: var(--teal);
            color: var(--teal-xl);
            background: rgba(20, 184, 166, .1)
        }

        #menuBtn {
            width: 36px;
            height: 36px;
            flex-direction: column;
            gap: 5px;
            display: none
        }

        #menuBtn span {
            display: block;
            width: 18px;
            height: 2px;
            background: currentColor;
            border-radius: 2px;
            transition: all .3s;
            margin: 0 auto
        }

        #menuBtn.open span:nth-child(1) {
            transform: translateY(7px) rotate(45deg)
        }

        #menuBtn.open span:nth-child(2) {
            opacity: 0;
            transform: scaleX(0)
        }

        #menuBtn.open span:nth-child(3) {
            transform: translateY(-7px) rotate(-45deg)
        }

        /* ── DRAWER ── */
        .drawer {
            position: fixed;
            top: var(--nav-h);
            left: 0;
            right: 0;
            z-index: 190;
            flex-direction: column;
            background: rgba(6, 13, 12, .98);
            border-bottom: 1px solid transparent;
            max-height: 0;
            overflow: hidden;
            transition: max-height .38s cubic-bezier(.4, 0, .2, 1), padding .3s, border-color .3s;
            display: flex;
            backdrop-filter: blur(20px)
        }

        .drawer.open {
            max-height: 560px;
            padding: 1rem 1.5rem 2rem;
            border-color: var(--border)
        }

        .drawer a {
            text-decoration: none;
            color: var(--muted);
            font-size: .88rem;
            font-weight: 600;
            padding: .6rem .9rem;
            border-radius: 10px;
            transition: all .2s
        }

        .drawer a:hover {
            color: var(--teal-xl);
            background: rgba(20, 184, 166, .08)
        }

        .drawer hr {
            border: none;
            border-top: 1px solid var(--border);
            margin: .6rem 0
        }

        /* ══ LAYOUT ══ */
        .wrap {
            max-width: 1180px;
            margin: 0 auto;
            padding: 0 2rem
        }

        section {
            padding: 5.5rem 2rem;
            position: relative;
            z-index: 1
        }

        h1,
        h2,
        h3 {
            font-weight: 800;
            letter-spacing: -.03em;
            line-height: 1.1
        }

        h1 {
            font-size: clamp(2rem, 5vw, 3.8rem)
        }

        h2 {
            font-size: clamp(1.5rem, 3.5vw, 2.4rem)
        }

        .grad {
            background: linear-gradient(135deg, var(--teal-xl), var(--gold));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text
        }

        .grad-teal {
            background: linear-gradient(135deg, var(--teal-l), var(--teal-xl));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text
        }

        .eyebrow {
            display: inline-flex;
            align-items: center;
            gap: .4rem;
            padding: .3rem .9rem;
            border-radius: 999px;
            font-size: .68rem;
            font-weight: 700;
            letter-spacing: .1em;
            text-transform: uppercase;
            background: rgba(20, 184, 166, .1);
            color: var(--teal-xl);
            border: 1px solid rgba(20, 184, 166, .25);
            margin-bottom: .85rem
        }

        .divider {
            width: 44px;
            height: 3px;
            background: linear-gradient(90deg, var(--teal), var(--gold));
            border-radius: 999px;
            margin: .6rem 0 0
        }

        .section-header {
            margin-bottom: 3rem
        }

        .section-header.center {
            text-align: center
        }

        .section-header.center .divider {
            margin: .6rem auto 0
        }

        .lead {
            font-size: .95rem;
            color: var(--muted);
            line-height: 1.85;
            font-weight: 400
        }

        .card {
            background: var(--card);
            border: 1px solid var(--border);
            border-radius: var(--radius);
            backdrop-filter: blur(12px);
            transition: border-color .3s, transform .3s, box-shadow .3s
        }

        .card-hover:hover {
            border-color: rgba(20, 184, 166, .35);
            transform: translateY(-4px);
            box-shadow: 0 12px 40px rgba(13, 148, 136, .15)
        }

        .btn {
            display: inline-flex;
            align-items: center;
            gap: .45rem;
            padding: .7rem 1.6rem;
            border-radius: 10px;
            font-size: .88rem;
            font-weight: 700;
            cursor: pointer;
            border: none;
            text-decoration: none;
            transition: all .25s;
            white-space: nowrap;
            letter-spacing: -.01em;
            line-height: 1.2;
            font-family: 'Lexend', sans-serif
        }

        .btn-primary {
            background: linear-gradient(135deg, var(--teal), var(--teal-d));
            color: #fff;
            box-shadow: 0 0 28px rgba(13, 148, 136, .28)
        }

        .btn-primary:hover {
            transform: translateY(-2px) scale(1.02);
            box-shadow: 0 8px 36px rgba(13, 148, 136, .44)
        }

        .btn-ghost {
            background: transparent;
            color: var(--muted);
            border: 1px solid var(--border2)
        }

        .btn-ghost:hover {
            color: var(--teal-xl);
            border-color: rgba(20, 184, 166, .45);
            background: rgba(20, 184, 166, .07)
        }

        .btn-gold {
            background: linear-gradient(135deg, var(--gold), #b8882a);
            color: #fff;
            box-shadow: 0 0 24px rgba(212, 168, 67, .22)
        }

        .btn-gold:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 32px rgba(212, 168, 67, .36)
        }

        .btn-lg {
            padding: .9rem 2.2rem;
            font-size: .98rem;
            border-radius: 12px
        }

        .badge {
            display: inline-block;
            padding: .22rem .8rem;
            border-radius: 999px;
            font-size: .67rem;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: .07em
        }

        .two-col {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 3.5rem;
            align-items: start
        }

        .infobox {
            display: flex;
            gap: .8rem;
            padding: 1rem 1.25rem;
            border-radius: 12px;
            font-size: .82rem;
            line-height: 1.7;
            align-items: flex-start;
            margin-top: 1.5rem;
            font-weight: 400
        }

        .infobox-icon {
            font-size: 1rem;
            flex-shrink: 0;
            margin-top: .15rem
        }

        /* ── ICON SVG ── */
        .idn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 1.1em;
            height: 1.1em;
            vertical-align: middle;
            flex-shrink: 0
        }

        .idn svg {
            width: 100%;
            height: 100%
        }

        /* ══ HERO ══ */
        #hero {
            min-height: 100svh;
            padding-top: var(--nav-h);
            display: flex;
            align-items: center;
            overflow: hidden
        }

        .hero-grid {
            display: grid;
            grid-template-columns: 1.1fr 1fr;
            gap: 4rem;
            align-items: center;
            max-width: 1180px;
            margin: 0 auto;
            width: 100%;
            padding: 4rem 2rem
        }

        .hero-eyebrow {
            display: inline-flex;
            align-items: center;
            gap: .4rem;
            padding: .35rem .9rem;
            border-radius: 999px;
            font-size: .7rem;
            font-weight: 700;
            background: rgba(212, 168, 67, .1);
            border: 1px solid rgba(212, 168, 67, .28);
            color: var(--gold-l);
            margin-bottom: 1.25rem;
            animation: fade-up .6s ease both .1s
        }

        .hero-title {
            animation: fade-up .7s ease both .2s
        }

        .hero-desc {
            animation: fade-up .7s ease both .3s
        }

        .hero-cta {
            display: flex;
            gap: .75rem;
            flex-wrap: wrap;
            margin-top: 2rem;
            animation: fade-up .7s ease both .4s
        }

        .hero-stats {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 1rem;
            margin-top: 2.5rem;
            padding-top: 1.75rem;
            border-top: 1px solid var(--border);
            animation: fade-up .7s ease both .5s
        }

        .stat-val {
            font-size: 1.6rem;
            font-weight: 900;
            background: linear-gradient(135deg, var(--teal-xl), var(--gold));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            line-height: 1.1
        }

        .stat-lbl {
            font-size: .65rem;
            color: var(--muted);
            margin-top: .2rem;
            line-height: 1.3;
            font-weight: 500
        }

        @keyframes fade-up {
            from {
                opacity: 0;
                transform: translateY(20px)
            }

            to {
                opacity: 1;
                transform: none
            }
        }

        /* ── COUNTDOWN ── */
        .cd-card {
            padding: 1.85rem;
            border-radius: 22px;
            background: rgba(13, 148, 136, .07);
            border: 1px solid rgba(20, 184, 166, .18);
            backdrop-filter: blur(16px);
            animation: fade-up .8s ease both .4s;
            position: relative;
            overflow: hidden
        }

        .cd-card::before {
            content: '';
            position: absolute;
            top: -60%;
            left: -60%;
            width: 220%;
            height: 220%;
            background: radial-gradient(circle at 60% 40%, rgba(20, 184, 166, .08), transparent 55%);
            pointer-events: none
        }

        .cd-label {
            font-size: .69rem;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: .1em;
            color: var(--gold-l);
            text-align: center;
            margin-bottom: .85rem
        }

        .cd-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: .6rem
        }

        .cd-box {
            background: rgba(13, 148, 136, .1);
            border: 1px solid rgba(20, 184, 166, .15);
            border-radius: 12px;
            padding: .95rem .4rem;
            text-align: center
        }

        .cd-n {
            font-size: 1.95rem;
            font-weight: 900;
            font-variant-numeric: tabular-nums;
            background: linear-gradient(135deg, var(--teal-xl), var(--gold));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            line-height: 1
        }

        .cd-l {
            font-size: .57rem;
            color: var(--muted);
            text-transform: uppercase;
            letter-spacing: .12em;
            margin-top: .28rem;
            font-weight: 600
        }

        .cd-footer {
            margin-top: 1.25rem;
            padding-top: 1rem;
            border-top: 1px solid var(--border);
            font-size: .71rem;
            color: var(--muted);
            text-align: center
        }

        .cd-footer a {
            color: var(--teal-xl);
            text-decoration: none
        }

        .cd-jalur-row {
            display: flex;
            flex-direction: column;
            gap: .55rem;
            margin-top: .95rem;
            padding-top: .9rem;
            border-top: 1px solid var(--border)
        }

        .cd-jalur-item {
            display: flex;
            align-items: center;
            justify-content: space-between;
            font-size: .77rem;
            gap: .5rem;
            font-weight: 500
        }

        /* ── STATS BAR ── */
        .stats-row {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 1px;
            background: var(--border);
            border: 1px solid var(--border);
            border-radius: var(--radius);
            overflow: hidden;
            max-width: 1180px;
            margin: 0 auto
        }

        .stat-box {
            background: var(--surface);
            padding: 1.85rem 1.25rem;
            text-align: center;
            transition: background .2s
        }

        .stat-box:hover {
            background: rgba(13, 148, 136, .08)
        }

        .stat-box .val {
            font-size: 2rem;
            font-weight: 900
        }

        .stat-box .lbl {
            font-size: .74rem;
            color: var(--muted);
            margin-top: .3rem;
            font-weight: 500
        }

        .sec-sep {
            height: 1px;
            background: linear-gradient(90deg, transparent, var(--border), transparent);
            margin: 0;
            position: relative;
            z-index: 1
        }

        /* ══ JALUR CARDS ══ */
        .jalur-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 1.35rem
        }

        .jalur-card {
            padding: 1.85rem;
            border-radius: var(--radius);
            display: flex;
            flex-direction: column;
            gap: .45rem;
            position: relative;
            overflow: hidden
        }

        .jalur-card::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            height: 3px;
            opacity: 0;
            transition: opacity .3s;
            border-radius: 0 0 var(--radius) var(--radius)
        }

        .jalur-card:hover::after {
            opacity: 1
        }

        .jalur-card.c-gold::after {
            background: linear-gradient(90deg, var(--gold), var(--gold-l))
        }

        .jalur-card.c-blue::after {
            background: linear-gradient(90deg, var(--blue), var(--blue-l))
        }

        .jalur-card.c-teal::after {
            background: linear-gradient(90deg, var(--teal), var(--teal-xl))
        }

        .jalur-name {
            font-size: 1.05rem;
            font-weight: 800;
            margin: .3rem 0;
            letter-spacing: -.02em
        }

        .jalur-desc {
            font-size: .82rem;
            color: var(--muted);
            line-height: 1.75;
            flex: 1;
            font-weight: 400
        }

        .jalur-meta {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-top: 1.1rem;
            padding-top: .9rem;
            border-top: 1px solid var(--border2);
            font-size: .73rem;
            color: var(--muted);
            gap: .5rem;
            flex-wrap: wrap;
            font-weight: 500
        }

        /* ── JADWAL ── */
        .sched-list {
            display: flex;
            flex-direction: column
        }

        .sched-item {
            display: flex;
            align-items: flex-start;
            gap: .85rem;
            padding: .85rem .5rem;
            border-bottom: 1px solid var(--border2);
            transition: background .2s;
            border-radius: 8px
        }

        .sched-item:last-child {
            border-bottom: none
        }

        .sched-item:hover {
            background: rgba(13, 148, 136, .05)
        }

        .sched-icon {
            width: 34px;
            height: 34px;
            border-radius: 9px;
            background: rgba(20, 184, 166, .1);
            border: 1px solid rgba(20, 184, 166, .18);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: .82rem;
            flex-shrink: 0;
            margin-top: .1rem
        }

        .sched-content {
            flex: 1;
            min-width: 0
        }

        .sched-title {
            font-size: .84rem;
            font-weight: 700
        }

        .sched-date {
            font-size: .72rem;
            color: var(--muted);
            margin-top: .15rem;
            line-height: 1.5;
            font-weight: 400
        }

        .sched-badge {
            flex-shrink: 0;
            margin-top: .1rem;
            white-space: nowrap
        }

        /* ── TIMELINE ── */
        .timeline {
            padding-left: 1.85rem;
            position: relative
        }

        .timeline::before {
            content: '';
            position: absolute;
            left: .38rem;
            top: .6rem;
            bottom: 0;
            width: 2px;
            background: linear-gradient(to bottom, var(--teal), var(--gold), transparent)
        }

        .tl-item {
            position: relative;
            padding: .95rem 0 .95rem 1.1rem;
            border-bottom: 1px solid var(--border2)
        }

        .tl-item:last-child {
            border-bottom: none
        }

        .tl-dot {
            position: absolute;
            left: -1.85rem;
            top: 1.2rem;
            width: 12px;
            height: 12px;
            border-radius: 50%;
            background: var(--teal);
            border: 3px solid var(--bg);
            box-shadow: 0 0 0 3px rgba(13, 148, 136, .2), 0 0 12px rgba(13, 148, 136, .3)
        }

        .tl-step {
            font-size: .64rem;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: .08em;
            color: var(--teal-xl);
            margin-bottom: .2rem
        }

        .tl-title {
            font-size: .88rem;
            font-weight: 700;
            margin-bottom: .25rem
        }

        .tl-desc {
            font-size: .79rem;
            color: var(--muted);
            line-height: 1.7;
            font-weight: 400
        }

        /* ── PERSYARATAN ── */
        .req-tabs {
            display: flex;
            gap: .5rem;
            margin-bottom: 1.6rem;
            flex-wrap: wrap
        }

        .req-tab {
            padding: .44rem 1.15rem;
            border-radius: 999px;
            font-size: .79rem;
            font-weight: 700;
            cursor: pointer;
            border: 1px solid var(--border);
            background: transparent;
            color: var(--muted);
            transition: all .25s;
            font-family: 'Lexend', sans-serif
        }

        .req-panel {
            display: none
        }

        .req-panel.active {
            display: block
        }

        .req-list {
            display: flex;
            flex-direction: column;
            gap: .65rem;
            margin-top: .75rem
        }

        .req-item {
            display: flex;
            align-items: flex-start;
            gap: .75rem;
            padding: 1rem 1.15rem;
            border-radius: 12px;
            background: var(--card2);
            border: 1px solid var(--border2)
        }

        .req-num {
            min-width: 28px;
            height: 28px;
            border-radius: 8px;
            flex-shrink: 0;
            background: linear-gradient(135deg, var(--teal), var(--teal-d));
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: .72rem;
            font-weight: 800;
            color: #fff
        }

        .req-text {
            font-size: .83rem;
            line-height: 1.65;
            min-width: 0;
            font-weight: 400
        }

        .req-text strong {
            display: block;
            margin-bottom: .1rem;
            font-weight: 700
        }

        .req-note {
            font-size: .73rem;
            color: var(--muted);
            margin-top: .22rem;
            line-height: 1.6
        }

        .req-cond {
            background: rgba(255, 255, 255, .025);
            border-color: rgba(255, 255, 255, .07)
        }

        .map-box {
            padding: 1.1rem 1.4rem;
            border-radius: 12px;
            text-align: center;
            border: 2px solid transparent;
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: .4rem
        }

        .map-box-icon {
            font-size: 1.75rem
        }

        .map-box-label {
            font-size: .82rem;
            font-weight: 700
        }

        .map-box-sub {
            font-size: .7rem;
            color: var(--muted)
        }

        /* ── SELEKSI ── */
        .seleksi-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 1.15rem;
            margin-top: .5rem
        }

        .seleksi-card {
            padding: 1.65rem;
            border-radius: var(--radius);
            display: flex;
            flex-direction: column;
            gap: .5rem
        }

        .seleksi-name {
            font-size: .92rem;
            font-weight: 800;
            margin-bottom: .3rem
        }

        .seleksi-body {
            font-size: .8rem;
            color: var(--muted);
            line-height: 1.8;
            flex: 1;
            font-weight: 400
        }

        .formula-box {
            background: rgba(20, 184, 166, .09);
            border: 1px solid rgba(20, 184, 166, .22);
            border-radius: 10px;
            padding: 1rem 1.25rem;
            margin-top: .85rem;
            text-align: center;
            font-size: .9rem;
            font-weight: 700
        }

        .formula-box span {
            color: var(--teal-xl)
        }

        .tiebreak {
            margin-top: .75rem;
            font-size: .74rem;
            color: var(--muted);
            line-height: 1.75;
            padding: .8rem;
            background: rgba(255, 255, 255, .03);
            border-radius: 8px;
            border: 1px solid var(--border2);
            font-weight: 400
        }

        /* ── GUGUR ── */
        .gugur-list {
            display: flex;
            flex-direction: column;
            gap: .55rem;
            margin-top: 1rem
        }

        .gugur-item {
            display: flex;
            align-items: flex-start;
            gap: .75rem;
            padding: .95rem 1rem;
            border-radius: 12px;
            border: 1px solid rgba(220, 38, 38, .2);
            background: rgba(220, 38, 38, .05);
            font-size: .83rem;
            line-height: 1.7;
            transition: border-color .2s;
            font-weight: 400
        }

        .gugur-item:hover {
            border-color: rgba(220, 38, 38, .38)
        }

        .gugur-icon {
            width: 20px;
            height: 20px;
            flex-shrink: 0;
            margin-top: .2rem
        }

        /* ── KUOTA ── */
        .kuota-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 1.15rem;
            margin-top: .5rem
        }

        .kuota-card {
            padding: 1.65rem;
            border-radius: var(--radius);
            text-align: center;
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: .45rem
        }

        .kuota-num {
            font-size: 2.5rem;
            font-weight: 900;
            line-height: 1
        }

        .kuota-label {
            font-size: .82rem;
            font-weight: 700;
            margin-top: .25rem
        }

        .kuota-sub {
            font-size: .73rem;
            color: var(--muted);
            line-height: 1.55;
            font-weight: 400
        }

        .kuota-note-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: .85rem;
            margin-top: 1.5rem
        }

        /* ── PROGRAM ── */
        .prog-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 1rem
        }

        .prog-card {
            padding: 1.5rem;
            border-radius: var(--radius);
            display: flex;
            flex-direction: column;
            gap: .3rem
        }

        .prog-icon-wrap {
            width: 46px;
            height: 46px;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: .4rem;
            background: rgba(20, 184, 166, .1);
            border: 1px solid rgba(20, 184, 166, .18)
        }

        .prog-icon-wrap svg {
            width: 22px;
            height: 22px
        }

        .prog-title {
            font-size: .88rem;
            font-weight: 700
        }

        .prog-desc {
            font-size: .77rem;
            color: var(--muted);
            line-height: 1.65;
            font-weight: 400
        }

        /* ── FAQ ── */
        .faq-wrap {
            max-width: 780px;
            margin: 2.5rem auto 0
        }

        .faq-item {
            border-radius: 12px;
            overflow: hidden;
            margin-bottom: .55rem
        }

        .faq-btn {
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 1rem;
            padding: 1.15rem 1.3rem;
            background: transparent;
            border: none;
            color: inherit;
            cursor: pointer;
            text-align: left;
            font-size: .87rem;
            font-weight: 600;
            transition: color .2s;
            line-height: 1.45;
            font-family: 'Lexend', sans-serif
        }

        .faq-btn:hover {
            color: var(--teal-xl)
        }

        .faq-chev {
            min-width: 22px;
            height: 22px;
            border-radius: 50%;
            background: rgba(20, 184, 166, .1);
            border: 1px solid rgba(20, 184, 166, .22);
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
            transition: transform .3s
        }

        .faq-chev svg {
            width: 10px;
            height: 10px;
            stroke: var(--teal-xl);
            fill: none;
            stroke-width: 2.5;
            stroke-linecap: round;
            stroke-linejoin: round
        }

        .faq-body {
            max-height: 0;
            overflow: hidden;
            transition: max-height .38s ease
        }

        .faq-body p {
            padding: .25rem 1.3rem 1.15rem;
            font-size: .82rem;
            color: var(--muted);
            line-height: 1.85;
            border-top: 1px solid var(--border2);
            font-weight: 400
        }

        .faq-group {
            margin-bottom: .85rem
        }

        .faq-group-label {
            font-size: .68rem;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: .1em;
            padding: .35rem .95rem;
            border-radius: 999px;
            display: inline-block;
            margin: 0 .25rem 1rem
        }

        /* ── CTA ── */
        .cta-section {
            text-align: center;
            padding: 6.5rem 2rem;
            position: relative;
            z-index: 1
        }

        .cta-glow {
            position: absolute;
            inset: 0;
            background: radial-gradient(ellipse 80% 60% at 50% 50%, rgba(13, 148, 136, .1), transparent);
            pointer-events: none
        }

        .cta-inner {
            max-width: 620px;
            margin: 0 auto;
            position: relative
        }

        .cta-btns {
            display: flex;
            gap: .9rem;
            justify-content: center;
            flex-wrap: wrap;
            margin-top: 2.2rem
        }

        /* ── FOOTER ── */
        footer {
            border-top: 1px solid var(--border);
            padding: 3.5rem 2rem;
            position: relative;
            z-index: 1
        }

        .footer-inner {
            max-width: 1180px;
            margin: 0 auto
        }

        .footer-top {
            display: grid;
            grid-template-columns: 1fr 1fr 1fr;
            gap: 2.5rem;
            margin-bottom: 2.5rem
        }

        .footer-col-title {
            font-size: .76rem;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: .1em;
            color: var(--teal-xl);
            margin-bottom: 1rem
        }

        .footer-col p,
        .footer-col a {
            font-size: .79rem;
            color: var(--muted);
            line-height: 1.8;
            text-decoration: none;
            display: block;
            font-weight: 400
        }

        .footer-col a:hover {
            color: var(--teal-xl)
        }

        .footer-bottom {
            border-top: 1px solid var(--border);
            padding-top: 1.5rem;
            text-align: center;
            font-size: .73rem;
            color: var(--muted2);
            line-height: 1.85;
            font-weight: 400
        }

        .footer-bottom a {
            color: var(--teal-l);
            text-decoration: none
        }

        /* ── WA FAB ── */
        .wa-fab {
            position: fixed;
            bottom: 1.75rem;
            right: 1.75rem;
            z-index: 300;
            width: 54px;
            height: 54px;
            border-radius: 50%;
            background: linear-gradient(135deg, #25d366, #128c7e);
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 4px 24px rgba(37, 211, 102, .38);
            cursor: pointer;
            border: none;
            text-decoration: none;
            transition: transform .2s, box-shadow .2s
        }

        .wa-fab:hover {
            transform: scale(1.1);
            box-shadow: 0 6px 32px rgba(37, 211, 102, .55)
        }

        .wa-fab svg {
            width: 28px;
            height: 28px;
            fill: #fff
        }

        .wa-fab-pulse {
            position: absolute;
            inset: -4px;
            border-radius: 50%;
            border: 2px solid rgba(37, 211, 102, .4);
            animation: wa-pulse 2s ease infinite
        }

        @keyframes wa-pulse {

            0%,
            100% {
                transform: scale(1);
                opacity: .6
            }

            50% {
                transform: scale(1.15);
                opacity: 0
            }
        }

        /* ── SCROLL REVEAL ── */
        .reveal {
            opacity: 0;
            transform: translateY(24px);
            transition: opacity .55s ease, transform .55s ease
        }

        .reveal.visible {
            opacity: 1;
            transform: none
        }

        .reveal-delay-1 {
            transition-delay: .1s
        }

        .reveal-delay-2 {
            transition-delay: .18s
        }

        .reveal-delay-3 {
            transition-delay: .26s
        }

        /* ── INFO PILL ── */
        .info-pill {
            display: inline-flex;
            align-items: center;
            gap: .5rem;
            padding: .4rem 1rem;
            border-radius: 999px;
            font-size: .73rem;
            font-weight: 600;
            background: rgba(20, 184, 166, .08);
            border: 1px solid rgba(20, 184, 166, .2);
            color: var(--teal-xl)
        }

        /* ══ RESPONSIVE ══ */
        @media(max-width:1100px) {
            .nav-links a {
                font-size: .7rem;
                padding: .35rem .4rem
            }
        }

        @media(max-width:960px) {

            .nav-links,
            #daftarBtnNav {
                display: none !important
            }

            #menuBtn {
                display: flex
            }

            .hero-grid {
                grid-template-columns: 1fr;
                gap: 2.5rem;
                text-align: center;
                padding: 3rem 1.5rem
            }

            .hero-cta {
                justify-content: center
            }

            .hero-stats {
                justify-content: center
            }

            .hero-visual {
                display: none !important
            }
        }

        @media(max-width:900px) {
            .jalur-grid {
                grid-template-columns: 1fr 1fr
            }

            .seleksi-grid {
                grid-template-columns: 1fr 1fr
            }

            .kuota-grid {
                grid-template-columns: 1fr 1fr
            }

            .prog-grid {
                grid-template-columns: 1fr 1fr
            }

            .stats-row {
                grid-template-columns: repeat(2, 1fr)
            }

            .two-col {
                grid-template-columns: 1fr;
                gap: 2.5rem
            }

            .footer-top {
                grid-template-columns: 1fr 1fr
            }
        }

        @media(max-width:768px) {
            :root {
                --nav-h: 56px
            }

            section {
                padding: 3.5rem 1rem
            }

            .wrap {
                padding: 0 1rem
            }

            h1 {
                font-size: clamp(1.75rem, 6vw, 2.2rem)
            }

            h2 {
                font-size: clamp(1.35rem, 5vw, 1.8rem)
            }

            .jalur-grid,
            .seleksi-grid,
            .kuota-grid {
                grid-template-columns: 1fr
            }

            .prog-grid {
                grid-template-columns: repeat(2, 1fr)
            }

            .stats-row {
                grid-template-columns: repeat(2, 1fr)
            }

            .stat-box {
                padding: 1.25rem .75rem
            }

            .stat-box .val {
                font-size: 1.6rem
            }

            .hero-stats {
                grid-template-columns: repeat(2, 1fr);
                gap: .75rem
            }

            .cta-btns {
                flex-direction: column;
                align-items: stretch
            }

            .cta-btns .btn {
                justify-content: center
            }

            .hero-cta {
                flex-direction: column;
                gap: .6rem
            }

            .kuota-note-grid {
                grid-template-columns: 1fr
            }

            .footer-top {
                grid-template-columns: 1fr;
                gap: 1.75rem
            }

            .sched-item {
                gap: .6rem
            }
        }

        @media(max-width:540px) {
            :root {
                --nav-h: 52px
            }

            section {
                padding: 2.75rem 1rem
            }

            .prog-grid {
                grid-template-columns: 1fr
            }

            .btn-lg {
                padding: .75rem 1.4rem;
                font-size: .88rem
            }

            .nav-name {
                font-size: .8rem
            }

            .jalur-card {
                padding: 1.4rem
            }

            .cd-n {
                font-size: 1.55rem
            }

            .cd-box {
                padding: .8rem .3rem
            }

            .req-item {
                padding: .85rem .9rem
            }

            .faq-btn {
                font-size: .83rem;
                padding: 1rem
            }

            .infobox {
                flex-direction: column;
                gap: .5rem
            }

            .hero-eyebrow {
                white-space: normal;
                font-size: .65rem
            }

            .sched-item {
                flex-wrap: wrap
            }

            .sched-badge {
                margin-left: calc(34px + .6rem);
                margin-top: .1rem
            }
        }

        @media(max-width:360px) {
            .nav-sub {
                display: none
            }

            h1 {
                font-size: 1.55rem
            }

            .cd-grid {
                grid-template-columns: repeat(2, 1fr)
            }

            .stats-row {
                grid-template-columns: 1fr 1fr
            }

            .jalur-meta {
                flex-direction: column;
                align-items: flex-start
            }
        }
    </style>
</head>

<body>
    <div class="orb orb-1"></div>
    <div class="orb orb-2"></div>
    <div class="grid-bg"></div>

    <!-- NAV -->
    <nav id="mainNav">
        <a href="#" class="nav-brand">
            <div class="nav-logo">
                {{-- <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M12 2L3 7v10l9 5 9-5V7L12 2zm0 2.18L19 8.5v7L12 19.5l-7-4V8.5l7-4.32zM12 8a4 4 0 100 8 4 4 0 000-8zm0 2a2 2 0 110 4 2 2 0 010-4z" />
                </svg> --}}
                <img src="{{ asset('img/logo.png') }}" alt="Logo MTsN 1 Pandeglang">
            </div>
            <div>
                <div class="nav-name">MTSN 1 PANDEGLANG</div>
                <div class="nav-sub">PMBM TP 2026/2027</div>
            </div>
        </a>
        <ul class="nav-links">
            <li><a href="#jalur">Jalur</a></li>
            <li><a href="#jadwal">Jadwal</a></li>
            <li><a href="#alur">Cara Daftar</a></li>
            <li><a href="#syarat">Persyaratan</a></li>
            <li><a href="#seleksi">Seleksi</a></li>
            <li><a href="#kuota">Kuota</a></li>
            <li><a href="#faq">FAQ</a></li>
        </ul>
        <div class="nav-right">
            <button class="n-btn" id="menuBtn" aria-label="Menu"><span></span><span></span><span></span></button>
            <a href="https://daftar.mtsn1pandeglang.sch.id/dashboard" class="btn btn-primary" id="daftarBtnNav"
                style="height:36px;font-size:.78rem;padding:.4rem 1.1rem;">Daftar Sekarang</a>
        </div>
    </nav>

    <!-- DRAWER -->
    <div class="drawer" id="drawer">
        <a href="#jalur" class="d-link">Jalur Pendaftaran</a>
        <a href="#jadwal" class="d-link">Jadwal Kegiatan</a>
        <a href="#alur" class="d-link">Cara Mendaftar</a>
        <a href="#syarat" class="d-link">Persyaratan</a>
        <a href="#seleksi" class="d-link">Mekanisme Seleksi</a>
        <a href="#gugur" class="d-link">Ketentuan Gugur</a>
        <a href="#kuota" class="d-link">Kuota &amp; Rombel</a>
        <a href="#faq" class="d-link">FAQ</a>
        <hr>
        <a href="https://daftar.mtsn1pandeglang.sch.id/dashboard" style="color:var(--gold-l);font-weight:700;">Daftar
            Prestasi / Afirmasi →</a>
        <a href="https://pmbm-kanwilbanten.com" style="color:var(--teal-xl);font-weight:700;">Daftar Reguler →</a>
    </div>

    <main>

        <!-- HERO -->
        <section id="hero" style="padding:0">
            <div class="hero-grid">
                <div>
                    <div class="hero-eyebrow">Penerimaan Murid Baru Madrasah &middot; TP 2026/2027</div>
                    <h1 class="hero-title">Bergabung &amp;<br><span class="grad">Berprestasi</span><br>di MTsN 1</h1>
                    <p class="lead hero-desc" style="margin-top:1.1rem;max-width:500px;">
                        MTsN 1 Pandeglang membuka pendaftaran peserta didik baru melalui <strong>3 jalur resmi</strong>
                        — Prestasi, Afirmasi, dan Reguler. Gratis, transparan, dan penuh peluang.
                    </p>
                    <p style="font-size:.79rem;color:var(--muted2);margin-top:.85rem;" class="hero-desc">
                        Kepala Madrasah: <strong style="color:var(--muted)">Hj. Yanti Mariah, S.S., M.Pd.</strong>
                        &nbsp;&middot;&nbsp; Ketua PMBM: <strong style="color:var(--muted)">Umar Mu'tamar,
                            S.Ag.</strong>
                    </p>
                    <div class="hero-cta">
                        <a href="https://daftar.mtsn1pandeglang.sch.id/dashboard" class="btn btn-gold btn-lg">Daftar
                            Prestasi / Afirmasi</a>
                        <a href="https://pmbm-kanwilbanten.com" class="btn btn-ghost btn-lg">Daftar Reguler &rarr;</a>
                    </div>
                    <div class="hero-stats">
                        <div>
                            <div class="stat-val">224</div>
                            <div class="stat-lbl">Kuota Reguler</div>
                        </div>
                        <div>
                            <div class="stat-val">A</div>
                            <div class="stat-lbl">Akreditasi</div>
                        </div>
                        <div>
                            <div class="stat-val">3</div>
                            <div class="stat-lbl">Jalur Masuk</div>
                        </div>
                        <div>
                            <div class="stat-val">Rp 0</div>
                            <div class="stat-lbl">Biaya Daftar</div>
                        </div>
                    </div>
                </div>
                <div class="hero-visual" style="display:flex;justify-content:center;">
                    <div class="cd-card" style="width:100%;max-width:360px;">
                        <div class="cd-label" id="cd-label">Menghitung Waktu…</div>
                        <div class="cd-grid">
                            <div class="cd-box">
                                <div class="cd-n" id="cd-d">--</div>
                                <div class="cd-l">Hari</div>
                            </div>
                            <div class="cd-box">
                                <div class="cd-n" id="cd-h">--</div>
                                <div class="cd-l">Jam</div>
                            </div>
                            <div class="cd-box">
                                <div class="cd-n" id="cd-m">--</div>
                                <div class="cd-l">Menit</div>
                            </div>
                            <div class="cd-box">
                                <div class="cd-n" id="cd-s">--</div>
                                <div class="cd-l">Detik</div>
                            </div>
                        </div>
                        <div class="cd-jalur-row">
                            <div class="cd-jalur-item">
                                <span>Prestasi &amp; Afirmasi</span>
                                <span style="font-size:.72rem;color:var(--gold);font-weight:700;">6&ndash;8 Apr
                                    2026</span>
                            </div>
                            <div class="cd-jalur-item">
                                <span>Jalur Reguler</span>
                                <span style="font-size:.72rem;color:var(--teal-xl);font-weight:700;">18&ndash;27 Apr
                                    2026</span>
                            </div>
                            <div class="cd-jalur-item">
                                <span>Pengumuman Reguler</span>
                                <span style="font-size:.72rem;color:var(--blue-l);font-weight:700;">5 Mei 2026</span>
                            </div>
                        </div>
                        <div class="cd-footer">Lapor diri terakhir: <strong>12 Mei 2026</strong> &middot; <a
                                href="https://pmbm-kanwilbanten.com">pmbm-kanwilbanten.com</a></div>
                    </div>
                </div>
            </div>
        </section>

        <!-- STATS BAR -->
        <div style="padding:0 2rem;position:relative;z-index:1;margin-top:.5rem;">
            <div class="stats-row wrap" style="padding:0">
                <div class="stat-box reveal">
                    <div class="val grad-teal">1970</div>
                    <div class="lbl">Tahun Berdiri</div>
                </div>
                <div class="stat-box reveal reveal-delay-1">
                    <div class="val"
                        style="background:linear-gradient(135deg,#60a5fa,#a78bfa);-webkit-background-clip:text;-webkit-text-fill-color:transparent;background-clip:text">
                        70+</div>
                    <div class="lbl">Tenaga Pendidik</div>
                </div>
                <div class="stat-box reveal reveal-delay-2">
                    <div class="val grad-teal">A</div>
                    <div class="lbl">Akreditasi BAN-S/M</div>
                </div>
                <div class="stat-box reveal reveal-delay-3">
                    <div class="val"
                        style="background:linear-gradient(135deg,#fb923c,#f59e0b);-webkit-background-clip:text;-webkit-text-fill-color:transparent;background-clip:text">
                        1000+</div>
                    <div class="lbl">Prestasi Kejuaraan</div>
                </div>
            </div>
        </div>

        <div class="sec-sep" style="margin-top:3rem"></div>

        <!-- JALUR -->
        <section id="jalur">
            <div class="wrap">
                <div class="section-header center reveal">
                    <div class="eyebrow">Jalur Pendaftaran</div>
                    <h2>3 Jalur, <span class="grad">1 Tujuan</span></h2>
                    <div class="divider"></div>
                    <p class="lead" style="margin-top:.9rem;max-width:540px;margin-left:auto;margin-right:auto;">
                        Pilih jalur yang paling sesuai dengan kondisimu. Tidak lolos Prestasi/Afirmasi? Kamu masih bisa
                        daftar ke Jalur Reguler.</p>
                </div>
                <div class="jalur-grid">
                    <!-- Prestasi -->
                    <div class="card card-hover jalur-card c-gold reveal"
                        style="background:linear-gradient(160deg,rgba(212,168,67,.08),transparent);">
                        <div class="badge"
                            style="background:rgba(212,168,67,.15);color:#d4a843;border:1px solid rgba(212,168,67,.3);align-self:flex-start;">
                            Jalur Prestasi</div>
                        <div class="jalur-name">Jalur Prestasi</div>
                        <p class="jalur-desc">Untuk siswa berprestasi di bidang <strong>Tahfidz</strong> (min. 3 juz),
                            <strong>Akademik</strong> (KSM, OSN, MYRES, OSP, OSK), atau <strong>Non-Akademik</strong>
                            (MTQ, O2SN, FLS2N, Kaligrafi, dll). Minimal Juara 1 tingkat Kabupaten/Kota.
                        </p>
                        <div class="jalur-meta">
                            <span>Buka: 6&ndash;8 April 2026</span>
                            <span style="color:#dc2626;font-weight:700;">Map Merah</span>
                        </div>
                        <a href="https://daftar.mtsn1pandeglang.sch.id/dashboard" class="btn btn-ghost"
                            style="margin-top:1rem;width:100%;justify-content:center;border-color:rgba(212,168,67,.4);color:#d4a843;">Daftar
                            Jalur Prestasi &rarr;</a>
                    </div>
                    <!-- Afirmasi -->
                    <div class="card card-hover jalur-card c-blue reveal reveal-delay-1"
                        style="background:linear-gradient(160deg,rgba(96,165,250,.08),transparent);">
                        <div class="badge"
                            style="background:rgba(96,165,250,.15);color:#60a5fa;border:1px solid rgba(96,165,250,.3);align-self:flex-start;">
                            Jalur Afirmasi</div>
                        <div class="jalur-name">Jalur Afirmasi</div>
                        <p class="jalur-desc">Untuk keluarga penerima manfaat program sosial pemerintah: pemegang
                            <strong>KIP</strong>, <strong>PKH</strong>, <strong>KKS</strong>, atau <strong>SKTM</strong>
                            dari pemerintah daerah. Memberikan akses pendidikan yang berkeadilan.
                        </p>
                        <div class="jalur-meta">
                            <span>Buka: 6&ndash;8 April 2026</span>
                            <span style="color:#eab308;font-weight:700;">Map Kuning</span>
                        </div>
                        <a href="https://daftar.mtsn1pandeglang.sch.id/dashboard" class="btn btn-ghost"
                            style="margin-top:1rem;width:100%;justify-content:center;border-color:rgba(96,165,250,.4);color:#60a5fa;">Daftar
                            Jalur Afirmasi &rarr;</a>
                    </div>
                    <!-- Reguler -->
                    <div class="card card-hover jalur-card c-teal reveal reveal-delay-2"
                        style="background:linear-gradient(160deg,rgba(20,184,166,.07),transparent);">
                        <div class="badge"
                            style="background:rgba(20,184,166,.13);color:var(--teal-xl);border:1px solid rgba(20,184,166,.28);align-self:flex-start;">
                            Jalur Reguler</div>
                        <div class="jalur-name">Jalur Reguler</div>
                        <p class="jalur-desc">Terbuka untuk <strong>semua</strong> lulusan MI/SD sederajat. Seleksi
                            menggunakan <strong>CBT</strong> dan <strong>Tes BTQ</strong>. Kuota 224 kursi melalui
                            sistem PMBM Bersama Kanwil Kemenag Banten.</p>
                        <div class="jalur-meta">
                            <span>Buka: 18&ndash;27 April 2026</span>
                            <span style="color:#16a34a;font-weight:700;">Map Hijau</span>
                        </div>
                        <a href="https://pmbm-kanwilbanten.com" class="btn btn-ghost"
                            style="margin-top:1rem;width:100%;justify-content:center;border-color:rgba(20,184,166,.4);color:var(--teal-xl);">Daftar
                            Jalur Reguler &rarr;</a>
                    </div>
                </div>
                <div class="infobox reveal"
                    style="background:rgba(20,184,166,.06);border:1px solid rgba(20,184,166,.22);">
                    <span class="infobox-icon">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none"
                            stroke="var(--teal-xl)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="12" cy="12" r="10" />
                            <line x1="12" y1="8" x2="12" y2="12" />
                            <line x1="12" y1="16" x2="12.01" y2="16" />
                        </svg>
                    </span>
                    <div><strong>Tidak lolos Prestasi/Afirmasi? Tenang!</strong> Berkas dapat diambil kembali sehari
                        setelah pengumuman <strong>(15 April 2026)</strong>. Kamu masih bisa mendaftar ke <strong>Jalur
                            Reguler mulai 18 April 2026</strong> melalui https://pmbm-kanwilbanten.com.</div>
                </div>
            </div>
        </section>

        <div class="sec-sep"></div>

        <!-- JADWAL -->
        <section id="jadwal"
            style="background:linear-gradient(180deg,transparent,rgba(13,148,136,.03),transparent)">
            <div class="wrap">
                <div class="section-header center reveal">
                    <div class="eyebrow">Timeline Kegiatan</div>
                    <h2>Jadwal <span class="grad">PMBM 2026</span></h2>
                    <div class="divider"></div>
                    <p class="lead" style="margin-top:.9rem;">Tandai kalendermu! Jadwal berikut berlaku untuk
                        seluruh jalur pendaftaran.</p>
                </div>
                <div class="two-col">
                    <div class="reveal">
                        <div class="badge"
                            style="background:rgba(212,168,67,.12);color:#d4a843;border:1px solid rgba(212,168,67,.3);margin-bottom:1rem;font-size:.72rem;padding:.35rem 1rem;">
                            Jalur Prestasi &amp; Afirmasi</div>
                        <div class="card" style="padding:1.5rem;">
                            <div class="sched-list" id="sched-pa"></div>
                            <div
                                style="margin-top:1rem;padding-top:1rem;border-top:1px solid var(--border2);font-size:.73rem;color:var(--muted);">
                                Jam layanan panitia: <strong>08.00&ndash;14.00 WIB</strong> &nbsp;|&nbsp; Istirahat:
                                <strong>11.30&ndash;13.00 WIB</strong>
                            </div>
                        </div>
                    </div>
                    <div class="reveal reveal-delay-1">
                        <div class="badge"
                            style="background:rgba(20,184,166,.1);color:var(--teal-xl);border:1px solid rgba(20,184,166,.28);margin-bottom:1rem;font-size:.72rem;padding:.35rem 1rem;">
                            Jalur Reguler (PMBM Bersama Kanwil)</div>
                        <div class="card" style="padding:1.5rem;">
                            <div class="sched-list" id="sched-reg"></div>
                            <div
                                style="margin-top:1rem;padding-top:1rem;border-top:1px solid var(--border2);font-size:.73rem;color:var(--muted);">
                                Sistem pendaftaran: <a href="https://pmbm-kanwilbanten.com"
                                    style="color:var(--teal-xl);text-decoration:none;font-weight:600;">pmbm-kanwilbanten.com</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="sec-sep"></div>

        <!-- CARA DAFTAR -->
        <section id="alur">
            <div class="wrap">
                <div class="section-header center reveal">
                    <div class="eyebrow">Panduan Lengkap</div>
                    <h2>Cara <span class="grad">Mendaftar</span></h2>
                    <div class="divider"></div>
                    <p class="lead" style="margin-top:.9rem;">Ikuti langkah-langkah berikut sesuai jalur yang kamu
                        pilih.</p>
                </div>
                <div class="two-col">
                    <div class="reveal">
                        <div
                            style="font-size:.75rem;font-weight:700;color:#d4a843;text-transform:uppercase;letter-spacing:.08em;margin-bottom:1.15rem;">
                            Jalur Prestasi &amp; Afirmasi</div>
                        <div class="timeline">
                            <div class="tl-item">
                                <div class="tl-dot"></div>
                                <div class="tl-step">Langkah 1</div>
                                <div class="tl-title">Isi Formulir Pendaftaran Online</div>
                                <div class="tl-desc">Akses <strong>daftar.mtsn1pandeglang.sch.id/dashboard</strong>,
                                    pilih jalur (Prestasi atau Afirmasi), dan isi formulir menggunakan NISN.</div>
                            </div>
                            <div class="tl-item">
                                <div class="tl-dot"></div>
                                <div class="tl-step">Langkah 2</div>
                                <div class="tl-title">Siapkan &amp; Masukkan Berkas ke Map</div>
                                <div class="tl-desc">Kumpulkan semua dokumen yang disyaratkan. Masukkan ke dalam
                                    <strong>map snelhecter berwarna sesuai jalur</strong> (Merah = Prestasi, Kuning =
                                    Afirmasi). Tempelkan label identitas.
                                </div>
                            </div>
                            <div class="tl-item">
                                <div class="tl-dot"></div>
                                <div class="tl-step">Langkah 3</div>
                                <div class="tl-title">Serahkan Berkas ke Sekretariat PMBM</div>
                                <div class="tl-desc">Antar langsung ke Sekretariat PMBM MTsN 1 Pandeglang pada
                                    <strong>6&ndash;8 April 2026</strong>, pukul <strong>08.00&ndash;14.00 WIB</strong>
                                    (istirahat 11.30&ndash;13.00).
                                </div>
                            </div>
                            <div class="tl-item">
                                <div class="tl-dot"></div>
                                <div class="tl-step">Langkah 4</div>
                                <div class="tl-title">Ikuti Tes Seleksi</div>
                                <div class="tl-desc">Hadir di MTsN 1 Pandeglang pada <strong>13 April 2026</strong>
                                    paling lambat pukul <strong>07.00 WIB</strong> untuk mengikuti tes kemampuan dan
                                    BTQ. Khusus Tahfidz: tes hafalan langsung.</div>
                            </div>
                            <div class="tl-item">
                                <div class="tl-dot"></div>
                                <div class="tl-step">Langkah 5</div>
                                <div class="tl-title">Cek Pengumuman &amp; Lapor Diri</div>
                                <div class="tl-desc">Pengumuman hasil: <strong>14 April 2026</strong>. Jika diterima,
                                    wajib lapor diri langsung ke madrasah pada <strong>15&ndash;16 April 2026</strong>.
                                    <span style="color:#ef4444;font-weight:600;">Tidak lapor diri = gugur.</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="reveal reveal-delay-1">
                        <div
                            style="font-size:.75rem;font-weight:700;color:var(--teal-xl);text-transform:uppercase;letter-spacing:.08em;margin-bottom:1.15rem;">
                            Jalur Reguler (PMBM Bersama)</div>
                        <div class="timeline">
                            <div class="tl-item">
                                <div class="tl-dot"
                                    style="background:var(--teal-l);box-shadow:0 0 0 3px rgba(20,184,166,.18),0 0 12px rgba(20,184,166,.3)">
                                </div>
                                <div class="tl-step">Langkah 1</div>
                                <div class="tl-title">Akses Portal Pendaftaran</div>
                                <div class="tl-desc">Buka <strong>pmbm-kanwilbanten.com</strong> mulai <strong>18 April
                                        2026</strong> pukul 08.00 WIB. Masukkan <strong>NISN</strong> untuk memulai
                                    proses pendaftaran.</div>
                            </div>
                            <div class="tl-item">
                                <div class="tl-dot"
                                    style="background:var(--teal-l);box-shadow:0 0 0 3px rgba(20,184,166,.18),0 0 12px rgba(20,184,166,.3)">
                                </div>
                                <div class="tl-step">Langkah 2</div>
                                <div class="tl-title">Isi Formulir &amp; Pilih Madrasah</div>
                                <div class="tl-desc">Lengkapi seluruh data diri, data orang tua, dan informasi sekolah
                                    asal. Pilih <strong>MTsN 1 Pandeglang</strong> sebagai madrasah tujuan (minimal 1,
                                    maksimal 2 pilihan).</div>
                            </div>
                            <div class="tl-item">
                                <div class="tl-dot"
                                    style="background:var(--teal-l);box-shadow:0 0 0 3px rgba(20,184,166,.18),0 0 12px rgba(20,184,166,.3)">
                                </div>
                                <div class="tl-step">Langkah 3</div>
                                <div class="tl-title">Unggah Dokumen Persyaratan</div>
                                <div class="tl-desc">Upload KK (terbit sebelum Maret 2026), Ijazah MI/SD, dan Surat
                                    Pernyataan Pertanggungjawaban Mutlak bermaterai Rp 10.000. Tambahkan dokumen
                                    kondisional jika diperlukan.</div>
                            </div>
                            <div class="tl-item">
                                <div class="tl-dot"
                                    style="background:var(--teal-l);box-shadow:0 0 0 3px rgba(20,184,166,.18),0 0 12px rgba(20,184,166,.3)">
                                </div>
                                <div class="tl-step">Langkah 4</div>
                                <div class="tl-title">Cetak Bukti &amp; Ikuti Seleksi CBT</div>
                                <div class="tl-desc">Cetak bukti pendaftaran setelah berkas dinyatakan lengkap. Ikuti
                                    Uji Coba CBT <strong>30 April</strong>, lalu CBT resmi <strong>2 Mei 2026</strong>
                                    dan Tes BTQ <strong>2&ndash;3 Mei 2026</strong>.</div>
                            </div>
                            <div class="tl-item">
                                <div class="tl-dot"
                                    style="background:var(--teal-l);box-shadow:0 0 0 3px rgba(20,184,166,.18),0 0 12px rgba(20,184,166,.3)">
                                </div>
                                <div class="tl-step">Langkah 5</div>
                                <div class="tl-title">Cek Hasil &amp; Lapor Diri</div>
                                <div class="tl-desc">Pengumuman kelulusan: <strong>5 Mei 2026</strong> di
                                    pmbm-kanwilbanten.com. Jika diterima, wajib lapor diri ke madrasah
                                    <strong>6&ndash;12 Mei 2026</strong>. <span
                                        style="color:#ef4444;font-weight:600;">Tidak lapor diri = gugur.</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="sec-sep"></div>

        <!-- PERSYARATAN -->
        <section id="syarat"
            style="background:linear-gradient(180deg,transparent,rgba(212,168,67,.02),transparent)">
            <div class="wrap">
                <div class="section-header center reveal">
                    <div class="eyebrow">Dokumen Pendaftaran</div>
                    <h2>Persyaratan <span class="grad">Lengkap</span></h2>
                    <div class="divider"></div>
                </div>
                <!-- Syarat Umum -->
                <div style="margin-bottom:2.5rem;" class="reveal">
                    <div
                        style="font-size:.75rem;font-weight:700;color:var(--teal-xl);text-transform:uppercase;letter-spacing:.08em;margin-bottom:1rem;">
                        Persyaratan Umum — Berlaku untuk Semua Jalur</div>
                    <div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(220px,1fr));gap:.7rem;">
                        <div class="req-item">
                            <div class="req-num">1</div>
                            <div class="req-text"><strong>Usia Maksimal 15 Tahun</strong>Dihitung per 1 Juli 2026</div>
                        </div>
                        <div class="req-item">
                            <div class="req-num">2</div>
                            <div class="req-text"><strong>Surat Keterangan Aktif Kelas VI</strong>Diterbitkan oleh
                                sekolah/madrasah asal</div>
                        </div>
                        <div class="req-item">
                            <div class="req-num">3</div>
                            <div class="req-text"><strong>Akta Kelahiran Berbarcode</strong>Wajib terbitan resmi Dinas
                                Dukcapil</div>
                        </div>
                        <div class="req-item">
                            <div class="req-num">4</div>
                            <div class="req-text"><strong>Kartu Keluarga Berbarcode</strong>Wajib terbitan resmi Dinas
                                Dukcapil</div>
                        </div>
                    </div>
                    <div class="infobox"
                        style="background:rgba(251,191,36,.06);border:1px solid rgba(251,191,36,.2);margin-top:1rem;">
                        <span class="infobox-icon">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#f59e0b"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path
                                    d="M10.29 3.86L1.82 18a2 2 0 001.71 3h16.94a2 2 0 001.71-3L13.71 3.86a2 2 0 00-3.42 0z" />
                                <line x1="12" y1="9" x2="12" y2="13" />
                                <line x1="12" y1="17" x2="12.01" y2="17" />
                            </svg>
                        </span>
                        <span>KK dan Akta Kelahiran <strong>wajib berbarcode</strong> — yaitu dokumen resmi terbitan
                            Dinas Kependudukan dan Catatan Sipil (Dukcapil). Dokumen lama tanpa barcode <strong>tidak
                                diterima</strong>.</span>
                    </div>
                </div>
                <!-- Tab Per Jalur -->
                <div class="reveal">
                    <div class="req-tabs" id="reqTabs">
                        <button class="req-tab active" data-panel="tab-prestasi"
                            style="background:rgba(212,168,67,.1);color:#d4a843;border-color:#d4a843;">Jalur
                            Prestasi</button>
                        <button class="req-tab" data-panel="tab-afirmasi">Jalur Afirmasi</button>
                        <button class="req-tab" data-panel="tab-reguler">Jalur Reguler</button>
                    </div>
                    <!-- PRESTASI -->
                    <div id="tab-prestasi" class="req-panel active">
                        <div class="req-list">
                            <div class="req-item">
                                <div class="req-num">1</div>
                                <div class="req-text"><strong>Print Out Formulir Pendaftaran Online</strong>Dicetak
                                    dari daftar.mtsn1pandeglang.sch.id setelah pengisian selesai</div>
                            </div>
                            <div class="req-item">
                                <div class="req-num">2</div>
                                <div class="req-text"><strong>Sertifikat Prestasi Asli</strong>
                                    <div class="req-note"><strong>Akademik:</strong> KSM/OMI, MYRES, OSN, OSP, OSK —
                                        Juara 1&ndash;3 minimal tingkat Kab/Kota, diselenggarakan Kemenag, Kemendikbud,
                                        BRIN, atau PT Terakreditasi</div>
                                    <div class="req-note"><strong>Non-Akademik:</strong> MTQ, MHQ, MSQ, Pidato Arab,
                                        Kaligrafi, O2SN, FLS2N, Olahraga — Juara 1 Kab/Kota &middot; Juara 1&ndash;2
                                        Provinsi &middot; Juara 1&ndash;3 Nasional</div>
                                    <div class="req-note"><strong>Tahfidz:</strong> Sertifikat hafalan minimal 3 juz.
                                        <em>Akan ada tes hafalan langsung pada 13 April 2026</em>
                                    </div>
                                    <div class="req-note"><strong>Olahraga Beregu:</strong> Hanya untuk <em>top
                                            scorer</em> atau pemain terbaik yang tercantum namanya di sertifikat</div>
                                </div>
                            </div>
                            <div class="req-item">
                                <div class="req-num">3</div>
                                <div class="req-text"><strong>Dokumen Persyaratan Umum</strong>Akta kelahiran
                                    berbarcode + KK berbarcode + surat keterangan aktif kelas VI</div>
                            </div>
                            <div class="req-item"
                                style="background:rgba(220,38,38,.05);border-color:rgba(220,38,38,.2);">
                                <div class="req-num" style="background:linear-gradient(135deg,#dc2626,#b91c1c);">M
                                </div>
                                <div class="req-text"><strong>Semua Berkas &rarr; Map Snelhecter Warna MERAH</strong>
                                    <div class="req-note">Tempel label di map: Nama Lengkap &middot; Asal Sekolah
                                        &middot; Jalur Prestasi</div>
                                </div>
                            </div>
                        </div>
                        <div style="margin-top:1.25rem;display:flex;gap:1rem;flex-wrap:wrap;">
                            <div class="map-box"
                                style="background:rgba(220,38,38,.07);border-color:rgba(220,38,38,.3);">
                                <div class="map-box-icon" style="font-size:1.75rem;">&#128193;</div>
                                <div class="map-box-label" style="color:#ef4444;">Map Merah</div>
                                <div class="map-box-sub">Jalur Prestasi</div>
                            </div>
                        </div>
                    </div>
                    <!-- AFIRMASI -->
                    <div id="tab-afirmasi" class="req-panel">
                        <div class="req-list">
                            <div class="req-item">
                                <div class="req-num">1</div>
                                <div class="req-text"><strong>Print Out Formulir Pendaftaran Online</strong>Dicetak
                                    dari daftar.mtsn1pandeglang.sch.id/dashboard setelah pengisian selesai</div>
                            </div>
                            <div class="req-item">
                                <div class="req-num">2</div>
                                <div class="req-text"><strong>Fotokopi Kartu KIP / PKH / KKS / SKTM yang
                                        Dilegalisir</strong>
                                    <div class="req-note">Pilih salah satu sesuai yang dimiliki keluarga. Pastikan
                                        sudah dilegalisir oleh instansi penerbit.</div>
                                </div>
                            </div>
                            <div class="req-item"
                                style="background:rgba(251,191,36,.05);border-color:rgba(251,191,36,.25);">
                                <div class="req-num" style="background:linear-gradient(135deg,#f59e0b,#d97706);">!
                                </div>
                                <div class="req-text"><strong>Khusus Pengguna SKTM — Wajib Tambah 2 Dokumen
                                        Ini:</strong>
                                    <div class="req-note">Fotokopi tagihan/rekening listrik <strong>3 bulan
                                            terakhir</strong></div>
                                    <div class="req-note">Foto tampak depan, dalam, dan belakang rumah</div>
                                    <div class="req-note" style="color:#f59e0b;margin-top:.3rem;">SKTM hanya diterima
                                        jika diterbitkan oleh pemerintah daerah (kelurahan, kecamatan, atau dinas
                                        sosial). SKTM dari RT/RW <strong>tidak diterima</strong></div>
                                </div>
                            </div>
                            <div class="req-item">
                                <div class="req-num">3</div>
                                <div class="req-text"><strong>Dokumen Persyaratan Umum</strong>Akta kelahiran
                                    berbarcode + KK berbarcode + surat keterangan aktif kelas VI</div>
                            </div>
                            <div class="req-item"
                                style="background:rgba(234,179,8,.05);border-color:rgba(234,179,8,.25);">
                                <div class="req-num" style="background:linear-gradient(135deg,#ca8a04,#a16207);">K
                                </div>
                                <div class="req-text"><strong>Semua Berkas &rarr; Map Snelhecter Warna KUNING</strong>
                                    <div class="req-note">Tempel label di map: Nama Lengkap &middot; Asal Sekolah
                                        &middot; Jalur Afirmasi</div>
                                </div>
                            </div>
                        </div>
                        <div style="margin-top:1.25rem;display:flex;gap:1rem;flex-wrap:wrap;">
                            <div class="map-box"
                                style="background:rgba(234,179,8,.07);border-color:rgba(234,179,8,.35);">
                                <div class="map-box-icon" style="font-size:1.75rem;">&#128193;</div>
                                <div class="map-box-label" style="color:#eab308;">Map Kuning</div>
                                <div class="map-box-sub">Jalur Afirmasi</div>
                            </div>
                        </div>
                    </div>
                    <!-- REGULER -->
                    <div id="tab-reguler" class="req-panel">
                        <div class="req-list">
                            <div class="req-item">
                                <div class="req-num">1</div>
                                <div class="req-text"><strong>NISN (Nomor Induk Siswa Nasional)</strong>Harus terdaftar
                                    di EMIS atau DAPODIK. Bisa dicek di sekolah asal atau nisn.data.kemdikbud.go.id
                                </div>
                            </div>
                            <div class="req-item">
                                <div class="req-num">2</div>
                                <div class="req-text"><strong>Kartu Keluarga (KK)</strong>Diterbitkan Dinas Dukcapil —
                                    <strong>sebelum Maret 2026</strong>
                                </div>
                            </div>
                            <div class="req-item">
                                <div class="req-num">3</div>
                                <div class="req-text"><strong>Ijazah MI/SD atau Surat Keterangan Lulus</strong>Dokumen
                                    resmi yang membuktikan penyelesaian pendidikan dasar</div>
                            </div>
                            <div class="req-item">
                                <div class="req-num">4</div>
                                <div class="req-text"><strong>Surat Pernyataan Pertanggungjawaban Mutlak</strong>
                                    <div class="req-note">Ditandatangani orang tua/wali, bermaterai Rp 10.000. Format
                                        tersedia di portal pmbm-kanwilbanten.com.</div>
                                </div>
                            </div>
                            <div class="req-item req-cond">
                                <div class="req-num"
                                    style="background:rgba(255,255,255,.12);color:var(--muted);font-size:.8rem;">*
                                </div>
                                <div class="req-text"><strong>Sertifikat Akreditasi Sekolah Asal</strong> <span
                                        style="color:var(--gold);font-size:.72rem;font-weight:700;">KONDISIONAL</span>
                                    <div class="req-note">Hanya wajib jika asal sekolah dari <strong>luar Provinsi
                                            Banten.</strong> Sekolah yang belum/tidak terakreditasi &rarr; nilai
                                        akreditasi dihitung otomatis = 65.</div>
                                </div>
                            </div>
                            <div class="req-item req-cond">
                                <div class="req-num"
                                    style="background:rgba(255,255,255,.12);color:var(--muted);font-size:.8rem;">*
                                </div>
                                <div class="req-text"><strong>Surat Rekomendasi / Kesetaraan Ijazah</strong> <span
                                        style="color:var(--gold);font-size:.72rem;font-weight:700;">KONDISIONAL</span>
                                    <div class="req-note">Hanya untuk calon murid dari <strong>sekolah asing</strong>.
                                        Diterbitkan oleh Kemenag atau Kemendikdasmen.</div>
                                </div>
                            </div>
                            <div class="req-item"
                                style="background:rgba(22,163,74,.05);border-color:rgba(22,163,74,.25);">
                                <div class="req-num" style="background:linear-gradient(135deg,#16a34a,#15803d);">H
                                </div>
                                <div class="req-text"><strong>Semua Berkas &rarr; Map Snelhecter Warna HIJAU</strong>
                                    <div class="req-note">Tempel label di map: Nama Lengkap &middot; Asal Sekolah
                                        &middot; Jalur Reguler. Berkas fisik diserahkan saat lapor diri ke madrasah pada
                                        <strong>6&ndash;12 Mei 2026</strong>.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div style="margin-top:1.25rem;display:flex;gap:1rem;flex-wrap:wrap;">
                            <div class="map-box"
                                style="background:rgba(22,163,74,.08);border-color:rgba(22,163,74,.4);">
                                <div class="map-box-icon" style="font-size:1.75rem;">&#128193;</div>
                                <div class="map-box-label" style="color:#16a34a;">Map Hijau</div>
                                <div class="map-box-sub">Jalur Reguler</div>
                            </div>
                        </div>
                        <div class="infobox"
                            style="background:rgba(20,184,166,.06);border:1px solid rgba(20,184,166,.2);margin-top:1rem;">
                            <span class="infobox-icon"><svg width="16" height="16" viewBox="0 0 24 24"
                                    fill="none" stroke="var(--teal-xl)" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <circle cx="12" cy="12" r="10" />
                                    <line x1="12" y1="8" x2="12" y2="12" />
                                    <line x1="12" y1="16" x2="12.01" y2="16" />
                                </svg></span>
                            <span>Semua dokumen <strong>diunggah secara online</strong> melalui pmbm-kanwilbanten.com.
                                Lapor diri fisik dengan <strong>map hijau</strong> hanya dilakukan setelah pengumuman
                                kelulusan (6&ndash;12 Mei 2026).</span>
                        </div>
                        <div class="infobox"
                            style="background:rgba(220,38,38,.05);border:1px solid rgba(220,38,38,.18);margin-top:.75rem;">
                            <span class="infobox-icon"><svg width="16" height="16" viewBox="0 0 24 24"
                                    fill="none" stroke="#ef4444" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <circle cx="12" cy="12" r="10" />
                                    <line x1="15" y1="9" x2="9" y2="15" />
                                    <line x1="9" y1="9" x2="15" y2="15" />
                                </svg></span>
                            <span><strong>Pemalsuan dokumen</strong> akan mengakibatkan diskualifikasi dari seluruh
                                proses seleksi dan <strong>sanksi hukum</strong> sesuai peraturan perundang-undangan
                                yang berlaku.</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="sec-sep"></div>

        <!-- SELEKSI -->
        <section id="seleksi">
            <div class="wrap">
                <div class="section-header center reveal">
                    <div class="eyebrow">Sistem Penilaian</div>
                    <h2>Mekanisme <span class="grad">Seleksi</span></h2>
                    <div class="divider"></div>
                    <p class="lead" style="margin-top:.9rem;">Setiap jalur memiliki metode seleksi yang berbeda.
                        Pahami agar kamu bisa mempersiapkan diri dengan baik.</p>
                </div>
                <div class="seleksi-grid">
                    <div class="card seleksi-card reveal"
                        style="background:linear-gradient(160deg,rgba(212,168,67,.08),transparent);">
                        <div class="badge"
                            style="background:rgba(212,168,67,.15);color:#d4a843;border:1px solid rgba(212,168,67,.3);align-self:flex-start;">
                            Prestasi</div>
                        <div class="seleksi-name">Jalur Prestasi</div>
                        <div class="seleksi-body">Seleksi berdasarkan <strong>verifikasi sertifikat prestasi
                                asli</strong> oleh panitia madrasah.<br><br>Khusus <strong>Tahfidz</strong>: verifikasi
                            sertifikat disertai <strong>tes hafalan langsung</strong> pada 13 April 2026 di
                            madrasah.<br><br><span style="color:#d4a843;font-weight:600;">Tidak ada CBT untuk jalur
                                ini.</span></div>
                    </div>
                    <div class="card seleksi-card reveal reveal-delay-1"
                        style="background:linear-gradient(160deg,rgba(96,165,250,.08),transparent);">
                        <div class="badge"
                            style="background:rgba(96,165,250,.15);color:#60a5fa;border:1px solid rgba(96,165,250,.3);align-self:flex-start;">
                            Afirmasi</div>
                        <div class="seleksi-name">Jalur Afirmasi</div>
                        <div class="seleksi-body">Seleksi berdasarkan <strong>verifikasi kelayakan ekonomi</strong>
                            melalui dokumen KIP/PKH/KKS/SKTM.<br><br>Pengguna SKTM: panitia akan melakukan
                            <strong>pengecekan lapangan</strong> berdasarkan foto rumah dan tagihan listrik yang
                            dilampirkan.<br><br><span style="color:#60a5fa;font-weight:600;">Tidak ada CBT untuk jalur
                                ini.</span>
                        </div>
                    </div>
                    <div class="card seleksi-card reveal reveal-delay-2"
                        style="background:linear-gradient(160deg,rgba(20,184,166,.07),transparent);">
                        <div class="badge"
                            style="background:rgba(20,184,166,.13);color:var(--teal-xl);border:1px solid rgba(20,184,166,.25);align-self:flex-start;">
                            Reguler</div>
                        <div class="seleksi-name">Jalur Reguler</div>
                        <div class="seleksi-body">Nilai Akhir dihitung dari dua komponen tes:
                            <div class="formula-box">Nilai Akhir = <span>70%</span> CBT <span
                                    style="color:var(--muted)">+</span> <span>30%</span> BTQ</div>
                            <div class="tiebreak"><strong>Aturan jika nilai akhir sama:</strong><br>1. Prioritas siswa
                                dengan <strong>usia lebih tua</strong><br>2. Jika usia sama &rarr; prioritas
                                <strong>waktu daftar lebih awal</strong>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="sec-sep"></div>

        <!-- GUGUR -->
        <section id="gugur" style="padding-top:2rem;">
            <div class="wrap">
                <div style="max-width:800px;margin:0 auto;" class="reveal">
                    <div class="eyebrow"
                        style="background:rgba(220,38,38,.1);color:#ef4444;border-color:rgba(220,38,38,.22);">Perhatian
                        Penting</div>
                    <h2 style="margin-bottom:.5rem;">Ketentuan <span
                            style="background:linear-gradient(135deg,#ef4444,#f97316);-webkit-background-clip:text;-webkit-text-fill-color:transparent;background-clip:text">Gugur</span>
                    </h2>
                    <div class="divider" style="background:linear-gradient(90deg,#ef4444,#f97316)"></div>
                    <p style="color:var(--muted);font-size:.85rem;margin:.85rem 0 1.1rem;line-height:1.75;">Bacalah
                        dengan seksama. Peserta yang melanggar ketentuan berikut <strong>tidak dapat diproses lebih
                            lanjut</strong>:</p>
                    <div class="gugur-list">
                        <div class="gugur-item">
                            <svg class="gugur-icon" viewBox="0 0 24 24" fill="none" stroke="#ef4444"
                                stroke-width="2.5" stroke-linecap="round">
                                <line x1="18" y1="6" x2="6" y2="18" />
                                <line x1="6" y1="6" x2="18" y2="18" />
                            </svg>
                            <span>Mengisi formulir online <strong>tanpa menyerahkan berkas fisik</strong> ke sekretariat
                                (Prestasi &amp; Afirmasi) — keduanya wajib dilakukan</span>
                        </div>
                        <div class="gugur-item">
                            <svg class="gugur-icon" viewBox="0 0 24 24" fill="none" stroke="#ef4444"
                                stroke-width="2.5" stroke-linecap="round">
                                <line x1="18" y1="6" x2="6" y2="18" />
                                <line x1="6" y1="6" x2="18" y2="18" />
                            </svg>
                            <span>Menyerahkan berkas fisik <strong>tanpa mengisi formulir online</strong> (Prestasi
                                &amp; Afirmasi) — keduanya wajib dilakukan</span>
                        </div>
                        <div class="gugur-item">
                            <svg class="gugur-icon" viewBox="0 0 24 24" fill="none" stroke="#ef4444"
                                stroke-width="2.5" stroke-linecap="round">
                                <line x1="18" y1="6" x2="6" y2="18" />
                                <line x1="6" y1="6" x2="18" y2="18" />
                            </svg>
                            <span>Dokumen fisik yang diserahkan <strong>tidak sesuai</strong> dengan data yang diunggah
                                secara online</span>
                        </div>
                        <div class="gugur-item">
                            <svg class="gugur-icon" viewBox="0 0 24 24" fill="none" stroke="#ef4444"
                                stroke-width="2.5" stroke-linecap="round">
                                <line x1="18" y1="6" x2="6" y2="18" />
                                <line x1="6" y1="6" x2="18" y2="18" />
                            </svg>
                            <span>Tidak lapor diri ke madrasah sesuai jadwal &rarr; dianggap secara otomatis
                                <strong>mengundurkan diri</strong>, meskipun telah dinyatakan lulus seleksi</span>
                        </div>
                        <div class="gugur-item">
                            <svg class="gugur-icon" viewBox="0 0 24 24" fill="none" stroke="#ef4444"
                                stroke-width="2.5" stroke-linecap="round">
                                <line x1="18" y1="6" x2="6" y2="18" />
                                <line x1="6" y1="6" x2="18" y2="18" />
                            </svg>
                            <span>Terbukti <strong>memalsukan data atau dokumen</strong> &rarr; diskualifikasi dari
                                seluruh proses seleksi + sanksi hukum sesuai peraturan perundang-undangan</span>
                        </div>
                    </div>
                    <div class="infobox"
                        style="background:rgba(20,184,166,.06);border:1px solid rgba(20,184,166,.2);margin-top:1.35rem;">
                        <span class="infobox-icon"><svg width="16" height="16" viewBox="0 0 24 24"
                                fill="none" stroke="var(--teal-xl)" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round">
                                <circle cx="12" cy="12" r="10" />
                                <line x1="12" y1="8" x2="12" y2="12" />
                                <line x1="12" y1="16" x2="12.01" y2="16" />
                            </svg></span>
                        <div>Tidak lolos Jalur Prestasi atau Afirmasi? <strong>Berkas dapat diambil kembali mulai 15
                                April 2026</strong> (sehari setelah pengumuman) di Sekretariat PMBM. Kamu masih bisa
                            mendaftar ke <strong>Jalur Reguler mulai 18 April 2026</strong>.</div>
                    </div>
                </div>
            </div>
        </section>

        <div class="sec-sep"></div>

        <!-- KUOTA -->
        <section id="kuota">
            <div class="wrap">
                <div class="section-header center reveal">
                    <div class="eyebrow">Kapasitas Penerimaan</div>
                    <h2>Kuota &amp; <span class="grad">Rombongan Belajar</span></h2>
                    <div class="divider"></div>
                    <p class="lead" style="margin-top:.9rem;">Informasi kuota penerimaan untuk Tahun Pelajaran
                        2026/2027.</p>
                </div>
                <div class="kuota-grid">
                    <div class="card kuota-card reveal"
                        style="background:linear-gradient(160deg,rgba(212,168,67,.08),transparent);">
                        <div class="kuota-num"
                            style="background:linear-gradient(135deg,#d4a843,#f0c96a);-webkit-background-clip:text;-webkit-text-fill-color:transparent;background-clip:text">
                            TBD</div>
                        <div class="kuota-label">Kuota Jalur Prestasi</div>
                        <div class="kuota-sub">Dikonfirmasi oleh Panitia PMBM<br>MTsN 1 Pandeglang</div>
                    </div>
                    <div class="card kuota-card reveal reveal-delay-1"
                        style="background:linear-gradient(160deg,rgba(96,165,250,.08),transparent);">
                        <div class="kuota-num"
                            style="background:linear-gradient(135deg,#60a5fa,#a78bfa);-webkit-background-clip:text;-webkit-text-fill-color:transparent;background-clip:text">
                            TBD</div>
                        <div class="kuota-label">Kuota Jalur Afirmasi</div>
                        <div class="kuota-sub">Dikonfirmasi oleh Panitia PMBM<br>MTsN 1 Pandeglang</div>
                    </div>
                    <div class="card kuota-card reveal reveal-delay-2"
                        style="background:linear-gradient(160deg,rgba(20,184,166,.07),transparent);">
                        <div class="kuota-num grad">224</div>
                        <div class="kuota-label">Kuota Jalur Reguler</div>
                        <div class="kuota-sub">Estimasi 7 kelas baru<br>Maks. 32 murid per kelas</div>
                    </div>
                </div>
                <div class="kuota-note-grid">
                    <div class="card req-item reveal" style="margin:0">
                        <div class="req-num" style="background:linear-gradient(135deg,var(--teal),var(--teal-d))">
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#fff"
                                stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M12 2v20M2 12h20" />
                            </svg>
                        </div>
                        <div class="req-text"><strong>Biaya Pendidikan: Rp 0 (GRATIS)</strong>
                            <div class="req-note">Seluruh biaya dibebankan pada anggaran BOS/BOP Madrasah. Tidak ada
                                pungutan dari peserta didik.</div>
                        </div>
                    </div>
                    <div class="card req-item reveal reveal-delay-1" style="margin:0">
                        <div class="req-num" style="background:linear-gradient(135deg,#1d4ed8,#1e40af)">
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#fff"
                                stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                                <rect x="2" y="7" width="20" height="14" rx="2" />
                                <path d="M16 7V5a2 2 0 00-2-2h-4a2 2 0 00-2 2v2" />
                            </svg>
                        </div>
                        <div class="req-text"><strong>Kapasitas Per Kelas: 32 Murid</strong>
                            <div class="req-note">Sesuai ketentuan rombongan belajar Kemenag RI.</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="sec-sep"></div>

        <!-- PROGRAM -->
        <section id="program"
            style="background:linear-gradient(180deg,transparent,rgba(13,148,136,.03),transparent)">
            <div class="wrap">
                <div class="section-header center reveal">
                    <div class="eyebrow">Keunggulan Madrasah</div>
                    <h2>Program &amp; <span class="grad">Ekstrakurikuler</span></h2>
                    <div class="divider"></div>
                    <p class="lead" style="margin-top:.9rem;">Lebih dari sekadar belajar — temukan passionmu di
                        sini.</p>
                </div>
                <div class="prog-grid">
                    <div class="card card-hover prog-card reveal">
                        <div class="prog-icon-wrap"><svg viewBox="0 0 24 24" fill="none" stroke="var(--teal-xl)"
                                stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z" />
                                <path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z" />
                            </svg></div>
                        <div class="prog-title">Tahfidz Al-Qur'an</div>
                        <p class="prog-desc">Target minimal 3 juz selama 3 tahun dengan bimbingan hafiz berpengalaman.
                        </p>
                    </div>
                    <div class="card card-hover prog-card reveal reveal-delay-1">
                        <div class="prog-icon-wrap"><svg viewBox="0 0 24 24" fill="none" stroke="var(--teal-xl)"
                                stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                                <path
                                    d="M9 3H5a2 2 0 00-2 2v4m6-6h10a2 2 0 012 2v4M9 3v18m0 0h10a2 2 0 002-2V9M9 21H5a2 2 0 01-2-2V9m0 0h18" />
                            </svg></div>
                        <div class="prog-title">Olimpiade Sains</div>
                        <p class="prog-desc">Persiapan KSM &amp; OSN mulai dari tingkat kabupaten hingga nasional.</p>
                    </div>
                    <div class="card card-hover prog-card reveal reveal-delay-2">
                        <div class="prog-icon-wrap"><svg viewBox="0 0 24 24" fill="none" stroke="var(--teal-xl)"
                                stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                                <rect x="2" y="3" width="20" height="14" rx="2" />
                                <path d="M8 21h8M12 17v4" />
                            </svg></div>
                        <div class="prog-title">Teknologi &amp; IT</div>
                        <p class="prog-desc">Literasi digital dan coding dasar untuk menyiapkan generasi era global.
                        </p>
                    </div>
                    <div class="card card-hover prog-card reveal">
                        <div class="prog-icon-wrap"><svg viewBox="0 0 24 24" fill="none" stroke="var(--teal-xl)"
                                stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                                <circle cx="12" cy="12" r="10" />
                                <path d="M12 8v4l3 3" />
                            </svg></div>
                        <div class="prog-title">Olahraga Prestasi</div>
                        <p class="prog-desc">O2SN, sepak bola, bulu tangkis, karate, dan atletik bersama pelatih
                            berpengalaman.</p>
                    </div>
                    <div class="card card-hover prog-card reveal reveal-delay-1">
                        <div class="prog-icon-wrap"><svg viewBox="0 0 24 24" fill="none" stroke="var(--teal-xl)"
                                stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M12 20h9" />
                                <path d="M16.5 3.5a2.121 2.121 0 013 3L7 19l-4 1 1-4L16.5 3.5z" />
                            </svg></div>
                        <div class="prog-title">Seni &amp; Budaya</div>
                        <p class="prog-desc">Paskibra, drumband, hadroh, kaligrafi, MTQ, dan seni rupa.</p>
                    </div>
                    <div class="card card-hover prog-card reveal reveal-delay-2">
                        <div class="prog-icon-wrap"><svg viewBox="0 0 24 24" fill="none" stroke="var(--teal-xl)"
                                stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                                <circle cx="12" cy="12" r="10" />
                                <path d="M2 12h20M12 2a15.3 15.3 0 010 20M12 2a15.3 15.3 0 000 20" />
                            </svg></div>
                        <div class="prog-title">Bahasa Asing</div>
                        <p class="prog-desc">English Club &amp; Arabic Club untuk mendukung komunikasi internasional.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <div class="sec-sep"></div>

        <!-- FAQ -->
        <section id="faq">
            <div class="wrap">
                <div class="section-header center reveal">
                    <div class="eyebrow">FAQ</div>
                    <h2>Pertanyaan yang<br><span class="grad">Sering Diajukan</span></h2>
                    <div class="divider"></div>
                </div>
                <div class="faq-wrap" id="faqList"></div>
            </div>
        </section>

        <!-- CTA -->
        <section class="cta-section">
            <div class="cta-glow"></div>
            <div class="cta-inner reveal">
                <div class="eyebrow" style="margin-bottom:1rem;display:inline-flex;">Kuota Terbatas</div>
                <h2>Siap Bergabung?<br><span class="grad">Daftar Sekarang</span></h2>
                <p class="lead" style="margin:1rem auto 0;max-width:460px;">Pendaftaran gratis, transparan, dan
                    objektif. Pilih jalur yang tepat dan raih masa depanmu bersama MTsN 1 Pandeglang.</p>
                <div class="cta-btns">
                    <a href="https://daftar.mtsn1pandeglang.sch.id/dashboard" class="btn btn-gold btn-lg">Prestasi /
                        Afirmasi &rarr;</a>
                    <a href="https://pmbm-kanwilbanten.com" class="btn btn-ghost btn-lg">Reguler (PMBM Bersama)
                        &rarr;</a>
                </div>
            </div>
        </section>

    </main>

    <!-- FOOTER -->
    <footer>
        <div class="footer-inner">
            <div class="footer-top">
                <div class="footer-col">
                    <div class="footer-col-title">MTsN 1 Pandeglang</div>
                    <p>Madrasah Tsanawiyah Negeri 1 Pandeglang</p>
                    <p>Jl. Raya Labuan, Kadulisung</p>
                    <p>Pandeglang, Banten 42253</p>
                    <p style="margin-top:.5rem;">adm@mtsn1pandeglang.sch.id</p>
                    <p><em>+6283189542997</em></p>
                </div>
                <div class="footer-col">
                    <div class="footer-col-title">Pimpinan</div>
                    <p>Kepala Madrasah:</p>
                    <p><strong style="color:var(--text)">Hj. Yanti Mariah, S.S., M.Pd.</strong></p>
                    <p style="margin-top:.6rem;">Ketua PMBM:</p>
                    <p><strong style="color:var(--text)">Umar Mu'tamar, S.Ag.</strong></p>
                    <p style="margin-top:.6rem;font-size:.74rem;line-height:1.65;color:var(--muted2)">Kementerian
                        Agama<br>Kabupaten Pandeglang</p>
                </div>
                <div class="footer-col">
                    <div class="footer-col-title">Link Penting</div>
                    <a href="https://daftar.mtsn1pandeglang.sch.id/dashboard">Daftar Prestasi / Afirmasi</a>
                    <a href="https://pmbm-kanwilbanten.com">Portal Reguler (PMBM Bersama)</a>
                    <a href="https://mtsn1pandeglang.sch.id">Website Resmi Madrasah</a>
                    <a href="https://banten.kemenag.go.id">Kanwil Kemenag Banten</a>
                    <a href="https://nisn.data.kemdikbud.go.id">Cek NISN</a>
                </div>
            </div>
            <div class="footer-bottom">
                <p>Diselenggarakan berdasarkan Keputusan Kepala Kanwil Kemenag Provinsi Banten No. 009/B/Tahun 2026
                    &amp; Juknis PMBM MTsN 1 Pandeglang Tahun 2026.</p>
                <p style="margin-top:.4rem;">&copy; 2026 MTs Negeri 1 Pandeglang</p>
            </div>
        </div>
    </footer>

    <!-- WA FAB -->
    <a class="wa-fab" href="https://wa.me/6283189542997" target="_blank" rel="noopener"
        title="Hubungi Panitia via WhatsApp">
        <div class="wa-fab-pulse"></div>
        <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path
                d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z" />
        </svg>
    </a>

    <script>
        // ── DATA ──
        const schedPA = [{
                icon: '',
                label: 'Pendaftaran Online',
                mulai: '2026-04-06',
                selesai: '2026-04-08',
                note: 'daftar.mtsn1pandeglang.sch.id/dashboard',
                svgKey: 'form'
            },
            {
                icon: '',
                label: 'Penyerahan Berkas Fisik',
                mulai: '2026-04-06',
                selesai: '2026-04-08',
                note: 'Sekretariat PMBM MTsN 1 Pandeglang',
                svgKey: 'folder'
            },
            {
                icon: '',
                label: 'Verifikasi Berkas',
                mulai: '2026-04-09',
                selesai: '2026-04-10',
                note: 'Dilakukan panitia',
                svgKey: 'check'
            },
            {
                icon: '',
                label: 'Tes Kemampuan & BTQ',
                mulai: '2026-04-13',
                selesai: '2026-04-13',
                note: 'Hadir max. pukul 07.00 WIB',
                svgKey: 'pencil'
            },
            {
                icon: '',
                label: 'Pengumuman Hasil',
                mulai: '2026-04-14',
                selesai: '2026-04-14',
                note: 'Website resmi madrasah',
                svgKey: 'bell'
            },
            {
                icon: '',
                label: 'Lapor Diri & Pemberkasan',
                mulai: '2026-04-15',
                selesai: '2026-04-16',
                note: 'Langsung ke madrasah',
                svgKey: 'school'
            },
        ];
        const schedReg = [{
                icon: '',
                label: 'Pendaftaran Online',
                mulai: '2026-04-18',
                selesai: '2026-04-27',
                note: '08.00 buka – 16.00 tutup WIB',
                svgKey: 'form'
            },
            {
                icon: '',
                label: 'Verifikasi Dokumen',
                mulai: '2026-04-19',
                selesai: '2026-04-28',
                note: '08.00–16.00 WIB',
                svgKey: 'check'
            },
            {
                icon: '',
                label: 'Pengumuman Peserta CBT',
                mulai: '2026-04-29',
                selesai: '2026-04-29',
                note: '08.00 WIB',
                svgKey: 'bell'
            },
            {
                icon: '',
                label: 'Uji Coba CBT',
                mulai: '2026-04-30',
                selesai: '2026-04-30',
                note: '07.30–16.00 WIB',
                svgKey: 'monitor'
            },
            {
                icon: '',
                label: 'Pelaksanaan CBT',
                mulai: '2026-05-02',
                selesai: '2026-05-02',
                note: '07.30–16.00 WIB',
                svgKey: 'monitor'
            },
            {
                icon: '',
                label: "Tes BTQ (Al-Qur'an)",
                mulai: '2026-05-02',
                selesai: '2026-05-03',
                note: '07.30–16.00 WIB',
                svgKey: 'book'
            },
            {
                icon: '',
                label: 'Pengumuman Kelulusan',
                mulai: '2026-05-05',
                selesai: '2026-05-05',
                note: '08.00 WIB di pmbm-kanwilbanten.com',
                svgKey: 'award'
            },
            {
                icon: '',
                label: 'Lapor Diri & Berkas (Map Hijau)',
                mulai: '2026-05-06',
                selesai: '2026-05-12',
                note: '08.00–16.00 WIB · Bawa map hijau',
                svgKey: 'school'
            },
        ];
        const svgIcons = {
            form: '<svg viewBox="0 0 24 24" fill="none" stroke="var(--teal-xl)" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" width="16" height="16"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="16" y1="13" x2="8" y2="13"/><line x1="16" y1="17" x2="8" y2="17"/><polyline points="10 9 9 9 8 9"/></svg>',
            folder: '<svg viewBox="0 0 24 24" fill="none" stroke="var(--teal-xl)" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" width="16" height="16"><path d="M22 19a2 2 0 01-2 2H4a2 2 0 01-2-2V5a2 2 0 012-2h5l2 3h9a2 2 0 012 2z"/></svg>',
            check: '<svg viewBox="0 0 24 24" fill="none" stroke="var(--teal-xl)" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" width="16" height="16"><polyline points="20 6 9 17 4 12"/></svg>',
            pencil: '<svg viewBox="0 0 24 24" fill="none" stroke="var(--teal-xl)" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" width="16" height="16"><path d="M12 20h9"/><path d="M16.5 3.5a2.121 2.121 0 013 3L7 19l-4 1 1-4L16.5 3.5z"/></svg>',
            bell: '<svg viewBox="0 0 24 24" fill="none" stroke="var(--teal-xl)" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" width="16" height="16"><path d="M18 8A6 6 0 006 8c0 7-3 9-3 9h18s-3-2-3-9"/><path d="M13.73 21a2 2 0 01-3.46 0"/></svg>',
            school: '<svg viewBox="0 0 24 24" fill="none" stroke="var(--teal-xl)" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" width="16" height="16"><path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>',
            monitor: '<svg viewBox="0 0 24 24" fill="none" stroke="var(--teal-xl)" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" width="16" height="16"><rect x="2" y="3" width="20" height="14" rx="2"/><path d="M8 21h8M12 17v4"/></svg>',
            book: '<svg viewBox="0 0 24 24" fill="none" stroke="var(--teal-xl)" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" width="16" height="16"><path d="M2 3h6a4 4 0 014 4v14a3 3 0 00-3-3H2z"/><path d="M22 3h-6a4 4 0 00-4 4v14a3 3 0 013-3h7z"/></svg>',
            award: '<svg viewBox="0 0 24 24" fill="none" stroke="var(--teal-xl)" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" width="16" height="16"><circle cx="12" cy="8" r="6"/><path d="M15.477 12.89L17 22l-5-3-5 3 1.523-9.11"/></svg>',
        };
        const faqData = [{
                group: 'Umum & Teknis',
                items: [
                    ['Apakah ada biaya pendaftaran?',
                        'Tidak ada biaya sama sekali. Seluruh proses PMBM MTsN 1 Pandeglang 100% gratis — tidak ada pungutan dalam bentuk apapun dari calon peserta didik. Semua biaya operasional ditanggung anggaran BOS/BOP Madrasah sesuai regulasi Kemenag RI.'
                    ],
                    ['Apakah boleh mendaftar di dua jalur sekaligus (Prestasi dan Afirmasi)?',
                        'Tidak boleh. Setiap calon murid hanya dapat memilih satu jalur antara Prestasi atau Afirmasi. Jika terbukti mendaftar di dua jalur sekaligus, keduanya dapat dibatalkan. Namun jika tidak lolos, kamu masih bisa mendaftar ke Jalur Reguler mulai 18 April 2026.'
                    ],
                    ['Apakah siswa dari luar Pandeglang atau luar Banten bisa mendaftar?',
                        'Bisa. Tidak ada batasan domisili untuk mendaftar. Untuk Jalur Reguler, jika sekolah asal berasal dari luar Provinsi Banten, wajib melampirkan sertifikat akreditasi sekolah asal. Jika tidak terakreditasi, nilainya dihitung otomatis = 65.'
                    ],
                    ['Apa itu NISN dan bagaimana cara mengeceknya?',
                        'NISN (Nomor Induk Siswa Nasional) adalah nomor identitas unik setiap siswa yang terdaftar di EMIS (Kemenag) atau DAPODIK (Kemendikbud). Cara cek: hubungi guru/wali kelas di sekolah asal, atau cek mandiri di nisn.data.kemdikbud.go.id. Pastikan NISN sudah aktif sebelum mendaftar.'
                    ],
                    ['Mengapa KK dan Akta Kelahiran harus berbarcode?',
                        'Barcode pada dokumen kependudukan adalah tanda keaslian yang membuktikan dokumen diterbitkan resmi oleh Dinas Dukcapil. Dokumen lama (format lama tanpa barcode) tidak dapat diterima karena tidak dapat diverifikasi secara digital. Jika dokumenmu belum berbarcode, segera urus pembaruan di kantor Dukcapil setempat — prosesnya gratis.'
                    ],
                    ['Apa warna map snelhecter untuk masing-masing jalur?',
                        'Warna map berbeda untuk tiap jalur dan wajib sesuai: Merah = Jalur Prestasi, Kuning = Jalur Afirmasi, Hijau = Jalur Reguler. Menggunakan warna yang salah dapat menyebabkan berkas sulit diproses. Tempel label identitas (Nama, Asal Sekolah, Jalur) di bagian depan map.'
                    ],
                    ['Di mana lokasi Sekretariat PMBM MTsN 1 Pandeglang?',
                        'Sekretariat PMBM berada di MTsN 1 Pandeglang, Jl. Raya Labuan, Kadulisung, Pandeglang, Banten 42253. Jam pelayanan: 08.00–14.00 WIB (istirahat 11.30–13.00 WIB) selama periode penyerahan berkas berlangsung.'
                    ],
                    ['Bagaimana cara menghubungi panitia jika ada pertanyaan?',
                        'Kamu bisa menghubungi panitia PMBM melalui WhatsApp di nomor +6283189542997, atau klik tombol WhatsApp di pojok kanan bawah halaman ini. Bisa juga melalui email adm@mtsn1pandeglang.sch.id. Harap hubungi di jam kerja (08.00–14.00 WIB).'
                    ],
                    ['Apakah ada batas usia untuk mendaftar?',
                        'Ya. Calon peserta didik baru maksimal berusia 15 tahun dihitung per 1 Juli 2026. Artinya, calon murid yang lahir sebelum 1 Juli 2011 tidak dapat diterima.'
                    ],
                    ['Apakah anak berkebutuhan khusus (ABK) bisa mendaftar?',
                        'Untuk informasi lebih lanjut mengenai penerimaan peserta didik berkebutuhan khusus, silakan hubungi langsung panitia PMBM karena ketentuannya bersifat kasuistis dan memerlukan koordinasi khusus.'
                    ],
                ]
            },
            {
                group: 'Jalur Prestasi',
                items: [
                    ['Prestasi apa saja yang diakui untuk Jalur Prestasi?',
                        'Ada tiga kategori: (1) Tahfidz: sertifikat hafalan minimal 3 juz — akan ada tes hafalan langsung. (2) Akademik: KSM/OMI, MYRES, OSN, OSP, OSK — diselenggarakan Kemenag, Kemendikbud, BRIN, atau PT Terakreditasi, minimal Juara 1–3 Kab/Kota. (3) Non-Akademik: MTQ, MHQ, MSQ, Pidato Arab, Kaligrafi, O2SN, FLS2N, Olahraga — minimal Juara 1 Kab/Kota, Juara 1–2 Provinsi, atau Juara 1–3 Nasional.'
                    ],
                    ['Apakah sertifikat fotokopi bisa diterima?',
                        'Tidak. Sertifikat yang diserahkan harus asli. Fotokopi, scan, atau sertifikat digital tidak diterima untuk proses verifikasi. Pastikan sertifikat asli dalam kondisi baik dan terbaca jelas.'
                    ],
                    ['Bagaimana jika sertifikat prestasi sudah lama atau sudah rusak?',
                        'Sertifikat tetap harus asli. Jika rusak atau hilang, coba urus surat keterangan pengganti dari instansi penyelenggara lomba. Konfirmasi terlebih dahulu ke panitia PMBM apakah surat keterangan pengganti dapat diterima.'
                    ],
                    ['Untuk olahraga beregu, siapa yang bisa menggunakan sertifikat tersebut?',
                        'Hanya top scorer atau pemain terbaik yang namanya tercantum secara eksplisit di sertifikat beregu. Anggota tim biasa yang tidak tercantum namanya di sertifikat tidak dapat menggunakan sertifikat beregu tersebut.'
                    ],
                    ['Apakah prestasi dari tingkat kecamatan atau sekolah bisa digunakan?',
                        'Tidak. Minimal harus Juara 1 tingkat Kabupaten/Kota untuk kategori Non-Akademik, dan minimal Juara 1–3 tingkat Kab/Kota untuk Akademik. Prestasi tingkat kecamatan atau internal sekolah tidak diakui.'
                    ],
                    ['Apakah ada tes tambahan selain verifikasi sertifikat?',
                        'Untuk kategori Tahfidz: ya, ada tes hafalan langsung pada 13 April 2026 di madrasah. Untuk kategori Akademik dan Non-Akademik: seleksi hanya berupa verifikasi sertifikat oleh panitia, tidak ada CBT.'
                    ],
                    ['Jika punya lebih dari satu sertifikat prestasi, apakah semua bisa dilampirkan?',
                        'Boleh melampirkan lebih dari satu sertifikat, namun panitia akan mempertimbangkan sertifikat dengan tingkat tertinggi. Lampirkan semua yang relevan untuk memperkuat berkas pendaftaran.'
                    ],
                ]
            },
            {
                group: 'Jalur Afirmasi',
                items: [
                    ['Dokumen apa saja yang bisa digunakan untuk Jalur Afirmasi?',
                        'Pilih salah satu yang dimiliki keluarga: KIP (Kartu Indonesia Pintar), PKH (Kartu Program Keluarga Harapan), KKS (Kartu Keluarga Sejahtera), atau SKTM (Surat Keterangan Tidak Mampu) dari pemerintah daerah. Semua harus difotokopi dan dilegalisir oleh instansi penerbit.'
                    ],
                    ['SKTM dari RT/RW apakah bisa digunakan?',
                        'Tidak bisa. SKTM hanya diterima jika diterbitkan oleh pemerintah daerah — minimal tingkat kelurahan, kecamatan, atau dinas sosial. SKTM dari RT/RW tidak memiliki kekuatan hukum yang cukup dan tidak akan diterima panitia.'
                    ],
                    ['Apa saja dokumen tambahan untuk pengguna SKTM?',
                        'Pengguna SKTM wajib melampirkan dua dokumen tambahan: (1) Fotokopi tagihan/rekening listrik 3 bulan terakhir, dan (2) Foto kondisi rumah dari tiga sisi: tampak depan, tampak dalam, dan tampak belakang. Panitia dapat melakukan pengecekan lapangan berdasarkan dokumen ini.'
                    ],
                    ['KIP yang digunakan, atas nama siapa — anak atau orang tua?',
                        'KIP yang digunakan adalah KIP atas nama calon murid (anak), bukan orang tua. Pastikan KIP masih aktif dan telah dilegalisir oleh instansi penerbit sebelum dilampirkan.'
                    ],
                    ['Apakah ada tes atau seleksi tambahan untuk Jalur Afirmasi?',
                        'Tidak ada CBT atau tes akademik untuk Jalur Afirmasi. Seleksi dilakukan murni berdasarkan verifikasi dokumen kelayakan ekonomi. Khusus pengguna SKTM, panitia dapat melakukan pengecekan lapangan.'
                    ],
                    ['Jika keluarga punya KIP dan PKH sekaligus, mana yang harus dilampirkan?',
                        'Cukup lampirkan salah satu yang paling kuat dan mudah diverifikasi. Namun boleh juga melampirkan keduanya sebagai penguat. Pastikan semua dokumen yang dilampirkan sudah dilegalisir.'
                    ],
                ]
            },
            {
                group: 'Jalur Reguler',
                items: [
                    ['Berapa madrasah yang bisa dipilih di Jalur Reguler?',
                        'Minimal 1 dan maksimal 2 madrasah tujuan dalam satu kali pendaftaran di sistem pmbm-kanwilbanten.com. Pertimbangkan baik-baik pilihan madrasah karena akan memengaruhi penempatan jika diterima.'
                    ],
                    ['Bagaimana sistem penilaian Jalur Reguler?',
                        'Nilai Akhir dihitung dari: 70% Nilai CBT + 30% Nilai BTQ. Jika nilai akhir sama, prioritas diberikan kepada siswa yang lebih tua usianya. Jika usia pun sama persis, yang mendaftar lebih awal yang diprioritaskan.'
                    ],
                    ['Apa itu CBT dan BTQ? Materi apa yang diujikan?',
                        'CBT (Computer Based Test) adalah tes berbasis komputer yang menguji kemampuan akademik. BTQ (Baca Tulis Al-Qur\'an) adalah tes kemampuan membaca dan menulis Al-Qur\'an. Untuk persiapan CBT, pelajari materi pelajaran SD/MI kelas 4–6.'
                    ],
                    ['Kapan dan di mana pelaksanaan CBT?',
                        'Uji Coba CBT dilaksanakan pada 30 April 2026 (07.30–16.00 WIB), dan CBT resmi pada 2 Mei 2026 (07.30–16.00 WIB) di MTsN 1 Pandeglang. Tes BTQ dilaksanakan 2–3 Mei 2026.'
                    ],
                    ['Apakah ada uji coba CBT sebelum tes resmi?',
                        'Ya. Uji Coba CBT diadakan pada 30 April 2026 agar peserta bisa mengenal sistem dan antarmuka CBT sebelum tes sesungguhnya. Sangat disarankan untuk hadir.'
                    ],
                    ['Dokumen apa yang perlu diunggah saat daftar online Reguler?',
                        'Tiga dokumen wajib: (1) KK diterbitkan sebelum Maret 2026, (2) Ijazah MI/SD atau Surat Keterangan Lulus, (3) Surat Pernyataan Pertanggungjawaban Mutlak bermaterai Rp 10.000 (format tersedia di pmbm-kanwilbanten.com). Dokumen kondisional: Sertifikat Akreditasi Sekolah (jika dari luar Banten) atau Surat Rekomendasi (jika dari sekolah asing).'
                    ],
                    ['KK saya terbit setelah Maret 2026, apakah masih bisa mendaftar?',
                        'KK yang diterbitkan pada atau setelah Maret 2026 tidak memenuhi syarat untuk Jalur Reguler. Segera hubungi panitia PMBM untuk mendapatkan solusi atau informasi alternatif dokumen yang dapat digunakan.'
                    ],
                    ['Sekolah asal saya belum terakreditasi, apakah bisa mendaftar?',
                        'Bisa. Jika sekolah asal belum atau tidak terakreditasi, sistem akan menghitung nilai akreditasi secara otomatis sebesar 65. Tidak perlu dokumen akreditasi dalam kondisi ini.'
                    ],
                    ['Kapan dan di mana menyerahkan map hijau Jalur Reguler?',
                        'Map snelhecter warna HIJAU berisi berkas fisik diserahkan langsung ke madrasah saat lapor diri, yaitu 6–12 Mei 2026 (setelah pengumuman kelulusan 5 Mei 2026), pukul 08.00–16.00 WIB.'
                    ],
                    ['Apa yang terjadi jika diterima tapi tidak lapor diri?',
                        'Peserta dianggap secara otomatis mengundurkan diri dan kursinya hangus. Lapor diri adalah kewajiban mutlak yang harus dilakukan pada 6–12 Mei 2026 dengan membawa map hijau dan seluruh berkas.'
                    ],
                ]
            },
            {
                group: 'Jadwal & Pengumuman',
                items: [
                    ['Di mana bisa melihat pengumuman hasil seleksi?',
                        'Pengumuman Jalur Prestasi & Afirmasi: 14 April 2026 di website resmi madrasah (daftar.mtsn1pandeglang.sch.id). Pengumuman Jalur Reguler: 5 Mei 2026 pukul 08.00 WIB di pmbm-kanwilbanten.com.'
                    ],
                    ['Bagaimana jika tidak lolos Jalur Prestasi atau Afirmasi?',
                        'Berkas fisik dapat diambil kembali di Sekretariat PMBM mulai 15 April 2026. Setelah itu, kamu masih bisa mendaftar ke Jalur Reguler yang dibuka 18–27 April 2026 melalui pmbm-kanwilbanten.com.'
                    ],
                    ['Apakah ada masa sanggah atau banding hasil seleksi?',
                        'Untuk Jalur Prestasi dan Afirmasi, keputusan panitia bersifat final berdasarkan verifikasi dokumen. Jika merasa ada kekeliruan, segera hubungi panitia PMBM sebelum batas lapor diri.'
                    ],
                    ['Kapan tahun ajaran baru dimulai?',
                        'Tahun Pelajaran 2026/2027 diperkirakan dimulai pada Juli 2026. Informasi lebih lanjut mengenai hari pertama masuk sekolah akan diumumkan setelah proses lapor diri selesai.'
                    ],
                    ['Apakah ada orientasi atau MATSAMA setelah diterima?',
                        'Informasi mengenai kegiatan Masa Ta\'aruf Siswa Madrasah (MATSAMA) akan disampaikan saat atau setelah lapor diri. Pantau pengumuman resmi dari madrasah.'
                    ],
                ]
            },
            {
                group: 'Dokumen & Teknis',
                items: [
                    ['Bagaimana jika NISN saya tidak ditemukan di sistem?',
                        'Segera koordinasikan dengan operator sekolah asal untuk memastikan NISN sudah terdaftar dan aktif di EMIS/DAPODIK. Proses sinkronisasi data bisa memakan waktu. Jangan menunggu mepet deadline untuk mengecek NISN.'
                    ],
                    ['Dokumen saya ada yang hilang atau belum jadi, apa yang harus dilakukan?',
                        'Segera urus dokumen yang kurang sebelum periode pendaftaran berakhir. Untuk dokumen kependudukan (KK, Akta), bisa diurus di kantor Dukcapil. Untuk surat keterangan aktif, minta ke sekolah asal.'
                    ],
                    ['Apakah formulir online harus diisi sebelum menyerahkan berkas fisik (Prestasi/Afirmasi)?',
                        'Ya, keduanya wajib dilakukan dan saling melengkapi. Isi formulir online terlebih dahulu di daftar.mtsn1pandeglang.sch.id/dashboard, lalu cetak buktinya dan lampirkan bersama berkas fisik ke sekretariat. Salah satu saja tanpa yang lain = dinyatakan gugur.'
                    ],
                    ['Apakah berkas yang sudah diserahkan bisa diubah atau ditarik kembali?',
                        'Berkas yang sudah diserahkan ke sekretariat tidak bisa diubah selama proses verifikasi berlangsung. Jika ada kesalahan data, segera hubungi panitia PMBM sesegera mungkin.'
                    ],
                    ['Format foto rumah untuk Jalur Afirmasi (SKTM) seperti apa?',
                        'Foto harus jelas, tidak buram, dan menampilkan kondisi nyata rumah dari tiga sudut: tampak depan (terlihat fasad dan pintu utama), tampak dalam (ruang utama), dan tampak belakang. Foto bisa diambil dengan kamera HP.'
                    ],
                    ['Apakah pendaftaran bisa dilakukan malam hari atau di luar jam kerja?',
                        'Pendaftaran online (mengisi formulir di website) bisa dilakukan kapan saja selama server aktif. Namun penyerahan berkas fisik ke sekretariat hanya bisa dilakukan pada jam layanan panitia: 08.00–14.00 WIB pada tanggal yang telah ditentukan.'
                    ],
                ]
            },
        ];

        // ── RENDER JADWAL ──
        function statusBadge(mulai, selesai) {
            const now = new Date(),
                m = new Date(mulai),
                s = new Date(selesai);
            s.setHours(23, 59, 59);
            if (now < m) return {
                text: 'Mendatang',
                bg: 'rgba(255,255,255,.05)',
                tc: 'var(--muted)'
            };
            if (now <= s) return {
                text: 'Aktif',
                bg: 'rgba(212,168,67,.15)',
                tc: '#d4a843'
            };
            return {
                text: 'Selesai',
                bg: 'rgba(20,184,166,.12)',
                tc: 'var(--teal-xl)'
            };
        }

        function fmtDate(a, b) {
            const o = {
                day: 'numeric',
                month: 'short'
            };
            const da = new Date(a).toLocaleDateString('id-ID', o);
            const db = new Date(b).toLocaleDateString('id-ID', {
                ...o,
                year: 'numeric'
            });
            return a === b ? db : da + ' – ' + db;
        }

        function renderSched(data, elId) {
            const el = document.getElementById(elId);
            if (!el) return;
            el.innerHTML = data.map(j => {
                const {
                    text,
                    bg,
                    tc
                } = statusBadge(j.mulai, j.selesai);
                const iconSvg = svgIcons[j.svgKey] || '';
                return `<div class="sched-item">
      <div class="sched-icon">${iconSvg}</div>
      <div class="sched-content">
        <div class="sched-title">${j.label}</div>
        <div class="sched-date">${fmtDate(j.mulai,j.selesai)}${j.note?' · '+j.note:''}</div>
      </div>
      <div class="sched-badge badge" style="background:${bg};color:${tc};border:1px solid ${tc}33;">${text}</div>
    </div>`;
            }).join('');
        }
        renderSched(schedPA, 'sched-pa');
        renderSched(schedReg, 'sched-reg');

        // ── RENDER FAQ ──
        const grpClrs = {
            'Umum & Teknis': {
                bg: 'rgba(20,184,166,.1)',
                tc: 'var(--teal-xl)'
            },
            'Jalur Prestasi': {
                bg: 'rgba(212,168,67,.12)',
                tc: '#d4a843'
            },
            'Jalur Afirmasi': {
                bg: 'rgba(96,165,250,.12)',
                tc: '#60a5fa'
            },
            'Jalur Reguler': {
                bg: 'rgba(20,184,166,.1)',
                tc: 'var(--teal-xl)'
            },
            'Jadwal & Pengumuman': {
                bg: 'rgba(167,139,250,.12)',
                tc: '#a78bfa'
            },
            'Dokumen & Teknis': {
                bg: 'rgba(251,146,60,.1)',
                tc: '#fb923c'
            },
        };
        let faqHtml = '';
        faqData.forEach(grp => {
            const c = grpClrs[grp.group] || {
                bg: 'rgba(255,255,255,.06)',
                tc: 'var(--muted)'
            };
            faqHtml +=
                `<div class="faq-group"><div class="faq-group-label" style="background:${c.bg};color:${c.tc};border:1px solid ${c.tc}33;">${grp.group}</div>`;
            grp.items.forEach(([q, a]) => {
                faqHtml +=
                    `<div class="card faq-item"><button class="faq-btn" onclick="toggleFaq(this)"><span>${q}</span><div class="faq-chev"><svg viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"/></svg></div></button><div class="faq-body"><p>${a}</p></div></div>`;
            });
            faqHtml += '</div>';
        });
        document.getElementById('faqList').innerHTML = faqHtml;

        // ── COUNTDOWN ──
        (function() {
            const pad = n => String(n).padStart(2, '0');
            const deadlines = [{
                    label: 'Pendaftaran Prestasi &amp; Afirmasi',
                    d: '2026-04-08T16:00:00'
                },
                {
                    label: 'Pendaftaran Reguler Ditutup',
                    d: '2026-04-27T16:00:00'
                },
                {
                    label: 'Pengumuman Kelulusan Reguler',
                    d: '2026-05-05T08:00:00'
                },
                {
                    label: 'Batas Lapor Diri',
                    d: '2026-05-12T16:00:00'
                },
            ];
            const lEl = document.getElementById('cd-label'),
                dEl = document.getElementById('cd-d'),
                hEl = document.getElementById('cd-h'),
                mEl = document.getElementById('cd-m'),
                sEl = document.getElementById('cd-s');
            if (!lEl) return;

            function getActive() {
                const now = Date.now();
                return deadlines.find(d => new Date(d.d).getTime() > now) || null;
            }

            function tick() {
                const active = getActive();
                if (!active) {
                    lEl.textContent = 'Seluruh proses PMBM 2026 telah selesai.';
                    return;
                }
                const diff = new Date(active.d).getTime() - Date.now();
                if (diff <= 0) {
                    tick();
                    return;
                }
                lEl.innerHTML = active.label;
                dEl.textContent = pad(Math.floor(diff / 86400000));
                hEl.textContent = pad(Math.floor((diff % 86400000) / 3600000));
                mEl.textContent = pad(Math.floor((diff % 3600000) / 60000));
                sEl.textContent = pad(Math.floor((diff % 60000) / 1000));
            }
            tick();
            setInterval(tick, 1000);
        })();

        // ── NAV SCROLL ──
        const nav = document.getElementById('mainNav');
        window.addEventListener('scroll', () => {
            nav.classList.toggle('scrolled', window.scrollY > 40);
        }, {
            passive: true
        });

        // ── DRAWER ──
        const menuBtn = document.getElementById('menuBtn'),
            drawer = document.getElementById('drawer');
        menuBtn.addEventListener('click', () => {
            const o = drawer.classList.toggle('open');
            menuBtn.classList.toggle('open', o);
        });
        drawer.querySelectorAll('.d-link,a').forEach(a => a.addEventListener('click', () => {
            drawer.classList.remove('open');
            menuBtn.classList.remove('open');
        }));
        document.addEventListener('click', e => {
            if (!drawer.contains(e.target) && !menuBtn.contains(e.target)) {
                drawer.classList.remove('open');
                menuBtn.classList.remove('open');
            }
        });

        // ── NAV ACTIVE ──
        const secEls = document.querySelectorAll('section[id]'),
            navAs = document.querySelectorAll('.nav-links a');
        secEls.forEach(s => new IntersectionObserver(entries => {
            entries.forEach(e => {
                if (!e.isIntersecting) return;
                navAs.forEach(a => a.classList.remove('active'));
                const a = document.querySelector(`.nav-links a[href="#${e.target.id}"]`);
                if (a) a.classList.add('active');
            });
        }, {
            threshold: .3
        }).observe(s));

        // ── FAQ TOGGLE ──
        function toggleFaq(btn) {
            const body = btn.nextElementSibling,
                chev = btn.querySelector('.faq-chev');
            const isOpen = body.style.maxHeight && body.style.maxHeight !== '0px';
            document.querySelectorAll('.faq-body').forEach(b => b.style.maxHeight = '0px');
            document.querySelectorAll('.faq-chev').forEach(c => c.style.transform = '');
            if (!isOpen) {
                body.style.maxHeight = body.scrollHeight + 'px';
                chev.style.transform = 'rotate(180deg)';
            }
        }

        // ── REQ TABS ──
        const tabClrs = {
            'tab-prestasi': {
                bg: 'rgba(212,168,67,.1)',
                tc: '#d4a843',
                bc: '#d4a843'
            },
            'tab-afirmasi': {
                bg: 'rgba(96,165,250,.1)',
                tc: '#60a5fa',
                bc: '#60a5fa'
            },
            'tab-reguler': {
                bg: 'rgba(20,184,166,.1)',
                tc: 'var(--teal-xl)',
                bc: 'var(--teal)'
            },
        };
        document.getElementById('reqTabs').addEventListener('click', e => {
            const btn = e.target.closest('.req-tab');
            if (!btn) return;
            const pId = btn.dataset.panel;
            document.querySelectorAll('.req-tab').forEach(t => {
                t.classList.remove('active');
                t.style.background = 'transparent';
                t.style.color = 'var(--muted)';
                t.style.borderColor = 'var(--border)';
            });
            document.querySelectorAll('.req-panel').forEach(p => p.classList.remove('active'));
            btn.classList.add('active');
            const c = tabClrs[pId];
            if (c) {
                btn.style.background = c.bg;
                btn.style.color = c.tc;
                btn.style.borderColor = c.bc;
            }
            const panel = document.getElementById(pId);
            if (panel) panel.classList.add('active');
        });

        // ── SCROLL REVEAL ──
        const revealEls = document.querySelectorAll('.reveal');
        const revealObs = new IntersectionObserver(entries => {
            entries.forEach(e => {
                if (e.isIntersecting) {
                    e.target.classList.add('visible');
                    revealObs.unobserve(e.target);
                }
            });
        }, {
            threshold: .12,
            rootMargin: '0px 0px -40px 0px'
        });
        revealEls.forEach(el => revealObs.observe(el));

        // ── TOMBOL DAFTAR DINAMIS ──
        (function() {
            const btn = document.getElementById('daftarBtnNav');
            if (!btn) return;
            const phases = [{
                    start: '2026-04-06T08:00:00+07:00',
                    end: '2026-04-08T16:00:00+07:00',
                    href: 'https://daftar.mtsn1pandeglang.sch.id/dashboard',
                    label: 'Daftar Prestasi / Afirmasi',
                    style: {
                        background: 'linear-gradient(135deg,#d4a843,#b8882a)',
                        boxShadow: '0 0 24px rgba(212,168,67,.3)'
                    },
                    disabled: false
                },
                {
                    start: '2026-04-08T16:00:01+07:00',
                    end: '2026-04-17T23:59:59+07:00',
                    href: null,
                    label: 'Sedang Diverifikasi',
                    style: {
                        background: 'rgba(255,255,255,.06)',
                        color: 'var(--muted)',
                        boxShadow: 'none',
                        cursor: 'not-allowed',
                        border: '1px solid var(--border)'
                    },
                    disabled: true
                },
                {
                    start: '2026-04-18T08:00:00+07:00',
                    end: '2026-04-27T16:00:00+07:00',
                    href: 'https://pmbm-kanwilbanten.com',
                    label: 'Daftar Reguler',
                    style: {
                        background: 'linear-gradient(135deg,var(--teal),var(--teal-d))',
                        boxShadow: '0 0 28px rgba(13,148,136,.3)'
                    },
                    disabled: false
                },
                {
                    start: '2026-04-27T16:00:01+07:00',
                    end: '2099-12-31T00:00:00+07:00',
                    href: null,
                    label: 'Pendaftaran Ditutup',
                    style: {
                        background: 'rgba(220,38,38,.12)',
                        color: '#ef4444',
                        boxShadow: 'none',
                        cursor: 'not-allowed',
                        border: '1px solid rgba(220,38,38,.3)'
                    },
                    disabled: true
                },
            ];
            const defaultPhase = {
                href: null,
                label: 'Belum Dibuka',
                style: {
                    background: 'rgba(255,255,255,.05)',
                    color: 'var(--muted)',
                    boxShadow: 'none',
                    cursor: 'not-allowed',
                    border: '1px solid var(--border)'
                },
                disabled: true
            };

            function applyPhase(phase) {
                btn.textContent = phase.label;
                Object.assign(btn.style, {
                    background: '',
                    color: '#fff',
                    boxShadow: '',
                    cursor: 'pointer',
                    border: 'none',
                    ...phase.style
                });
                if (phase.disabled) {
                    btn.removeAttribute('href');
                    btn.style.pointerEvents = 'none';
                    btn.setAttribute('aria-disabled', 'true');
                } else {
                    btn.setAttribute('href', phase.href);
                    btn.style.pointerEvents = 'auto';
                    btn.removeAttribute('aria-disabled');
                }
            }

            function update() {
                const now = Date.now();
                const active = phases.find(p => now >= new Date(p.start).getTime() && now <= new Date(p.end).getTime());
                applyPhase(active || defaultPhase);
            }
            update();
            setInterval(update, 60000);
        })();
    </script>
</body>

</html>
