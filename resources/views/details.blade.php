<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    
    @php
        $gameKey = $game ?? 'carrom';
        $titles = [
            'carrom' => 'Snake Engine Carrom Pool Auto Play & Aim Assistant Guide',
            '8bp' => 'Snake Engine 8 Ball Pool Multi-Line Trajectory Guide',
            'soccer' => 'Snake Engine Soccer Stars Aim Predictor Guide'
        ];
        $pageTitle = $titles[$gameKey] ?? 'Snake Engine Game Automation Tool Guide';
    @endphp

    <title>CARROM POOL AUTO PLAY — {{ $pageTitle }} | Snake Engine</title>
    <meta name="description" content="Complete guide on {{ $pageTitle }}. Download Carrom Pool Auto Play APK, anti-ban configuration, laser aim line predictor tutorial and purchase instant VIP keys.">
    <meta name="keywords" content="carrom pool auto play, kos auto, kos auto play, carrom pool auto play apk, carrom pool auto play download, snake carrom pool auto play, snake engine carrom pool, snake auto play, carrom pool auto aim, 8 ball pool aim assistant, snake aim tool, snake apk mod, how to use snake engine, snake engine {{ $gameKey }}, anti ban aim predictor, shabab gaming">
    <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">
    <meta name="author" content="SHABAB GAMING">
    @if(env('GOOGLE_SITE_VERIFICATION'))
    <meta name="google-site-verification" content="{{ env('GOOGLE_SITE_VERIFICATION') }}">
    @endif
    <link rel="canonical" href="{{ url('/details/' . $gameKey) }}">

    <!-- Open Graph -->
    <meta property="og:locale" content="en_US">
    <meta property="og:site_name" content="Snake Engine Official Guide">
    <meta property="og:title" content="{{ $pageTitle }} — Snake Engine">
    <meta property="og:description" content="Complete tutorial, features, PC emulator support and VIP keys for Snake Engine {{ $pageTitle }}.">
    <meta property="og:type" content="article">
    <meta property="og:url" content="{{ url('/details/' . $gameKey) }}">
    <meta property="og:image" content="{{ asset('snake-engine-banner.png') }}">

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="{{ $pageTitle }}">
    <meta name="twitter:description" content="Official Snake Engine Guide &amp; Instant VIP Key Activation.">
    <meta name="twitter:image" content="{{ asset('snake-engine-banner.png') }}">

    <link rel="icon" type="image/png" href="{{ asset('snake-engine-logo.png') }}">
    <link rel="apple-touch-icon" href="{{ asset('snake-engine-logo.png') }}">

    <!-- JSON-LD Breadcrumb & TechArticle Schema -->
    <script type="application/ld+json">
    {
      "@@context": "https://schema.org",
      "@@type": "TechArticle",
      "headline": "{{ $pageTitle }}",
      "description": "Complete setup guide and features breakdown for Snake Engine {{ $pageTitle }}.",
      "author": {
        "@@type": "Organization",
        "name": "SHABAB GAMING"
      },
      "publisher": {
        "@@type": "Organization",
        "name": "SHABAB GAMING",
        "url": "{{ url('/') }}",
        "sameAs": [
          "https://t.me/shababgaming",
          "https://youtube.com/@shabab.gaming1",
          "https://whatsapp.com/channel/0029VbCa2RHBVJl3JOI24R38"
        ],
        "logo": {
          "@@type": "ImageObject",
          "url": "{{ asset('snake-engine-banner.png') }}"
        }
      }
    }
    </script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700;800&family=Outfit:wght@400;500;600;700;800;900&family=Syne:wght@700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('header.css') }}">

    <style>
        :root {
            --primary: #00ff66;
            --primary-glow: rgba(0, 255, 102, 0.4);
            --accent-cyan: #00f0ff;
            --accent-cyan-glow: rgba(0, 240, 255, 0.35);
            --bg-darkest: #05080c;
            --bg-card: rgba(13, 19, 27, 0.85);
            --border-card: rgba(255, 255, 255, 0.08);
            --text-main: #f0f6fc;
            --text-muted: #8b949e;
            --font-display: 'Syne', sans-serif;
            --font-body: 'Outfit', sans-serif;
        }

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            -webkit-tap-highlight-color: transparent;
        }

        body {
            background-color: var(--bg-darkest);
            color: var(--text-main);
            font-family: var(--font-body);
            scroll-behavior: smooth;
            background-image: 
                radial-gradient(circle at 50% 0%, rgba(0, 255, 102, 0.12) 0%, transparent 50%),
                radial-gradient(circle at 100% 40%, rgba(0, 240, 255, 0.06) 0%, transparent 40%);
            min-height: 100vh;
        }

        body::before {
            content: '';
            position: fixed;
            top: 0; left: 0; right: 0; bottom: 0;
            background: linear-gradient(rgba(255, 255, 255, 0.015) 1px, transparent 1px),
                        linear-gradient(90deg, rgba(255, 255, 255, 0.015) 1px, transparent 1px);
            background-size: 32px 32px;
            pointer-events: none;
            z-index: 0;
        }

        header {
            position: sticky;
            top: 0;
            z-index: 1000;
            background: rgba(6, 9, 13, 0.92);
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
            border-bottom: 1px solid rgba(255, 255, 255, 0.08);
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 14px 28px;
            min-height: 76px;
        }

        .header-logo-group {
            display: flex;
            align-items: center;
            gap: 14px;
            text-decoration: none;
        }
        .header-logo img {
            height: 44px;
            width: auto;
            filter: drop-shadow(0 0 10px rgba(0, 255, 102, 0.4));
        }
        .logo-text-wrap {
            display: flex;
            flex-direction: column;
            line-height: 1.15;
        }
        .logo-text {
            font-family: var(--font-display);
            font-size: 20px;
            font-weight: 900;
            letter-spacing: -0.5px;
            color: #fff;
            text-transform: uppercase;
        }
        .logo-text span {
            color: var(--primary);
            text-shadow: 0 0 12px rgba(0, 255, 102, 0.4);
        }
        .logo-subtag {
            font-size: 9.5px;
            font-weight: 700;
            color: var(--text-muted);
            letter-spacing: 1.5px;
            text-transform: uppercase;
        }

        .header-right {
            display: flex;
            align-items: center;
            gap: 15px;
        }
        .live-status-pill {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            background: rgba(0, 255, 102, 0.08);
            border: 1px solid rgba(0, 255, 102, 0.25);
            color: var(--primary);
            padding: 8px 16px;
            border-radius: 100px;
            font-size: 11.5px;
            font-weight: 800;
            letter-spacing: 0.5px;
            text-transform: uppercase;
        }
        .live-status-pill .dot {
            width: 7px;
            height: 7px;
            border-radius: 50%;
            background: var(--primary);
            box-shadow: 0 0 8px var(--primary);
            animation: pulseGlow 1.5s infinite;
        }
        @keyframes pulseGlow {
            0% { transform: scale(0.9); opacity: 0.7; }
            50% { transform: scale(1.3); opacity: 1; }
            100% { transform: scale(0.9); opacity: 0.7; }
        }

        .shop-link {
            background: linear-gradient(135deg, #00ff66 0%, #00bb44 100%);
            color: #040608;
            padding: 10px 22px;
            border-radius: 100px;
            text-decoration: none;
            font-weight: 900;
            font-size: 13px;
            letter-spacing: 0.5px;
            text-transform: uppercase;
            box-shadow: none !important;
            transform: none !important;
            transition: background-color 0.2s ease;
            display: inline-flex;
            align-items: center;
            gap: 6px;
            white-space: nowrap;
        }
        .shop-link:hover {
            transform: none !important;
            box-shadow: none !important;
            background: linear-gradient(135deg, #26ff7b 0%, #00d64e 100%);
        }

        .back-nav-bar {
            margin-bottom: 25px;
            display: flex;
            align-items: center;
            justify-content: flex-start;
        }
        .back-btn {
            background: rgba(255, 255, 255, 0.04);
            border: 1px solid rgba(255, 255, 255, 0.1);
            color: #c9d1d9;
            padding: 9px 18px;
            border-radius: 100px;
            text-decoration: none;
            font-weight: 700;
            font-size: 13px;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            transition: all 0.2s ease;
        }
        .back-btn:hover {
            border-color: var(--primary);
            color: #fff;
            background: rgba(0, 255, 102, 0.1);
            transform: translateX(-3px);
        }

        @media (max-width: 768px) { 
            header { 
                padding: 10px 14px; 
                min-height: 60px;
            }
            .header-logo img { height: 34px; }
            .logo-text { font-size: 16px; }
            .logo-subtag { font-size: 8px; }
            .live-status-pill { display: none; }
            .shop-link {
                padding: 8px 14px;
                font-size: 11.5px;
                gap: 4px;
                white-space: nowrap;
            }
            .back-btn {
                padding: 8px 14px;
                font-size: 12px;
            }
        }

        /* WHATSAPP FLOATING BUTTON & POPUP MESSAGE BUBBLE */
        .whatsapp-floating-wrap {
            position: fixed;
            bottom: 25px;
            right: 22px;
            z-index: 999999 !important;
            display: flex;
            align-items: center;
            flex-direction: row-reverse;
            gap: 12px;
            pointer-events: auto;
        }
        .whatsapp-float-btn {
            width: 56px;
            height: 56px;
            min-width: 56px;
            background: #25D366;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.4);
            text-decoration: none;
            cursor: pointer;
            transition: transform 0.2s ease;
        }
        .whatsapp-float-btn:hover {
            transform: scale(1.08);
        }
        .whatsapp-float-btn svg {
            width: 38px;
            height: 38px;
            fill: #ffffff;
        }

        /* Continuous 8-Second Loop Animation */
        .whatsapp-message-bubble {
            background: #ffffff !important;
            color: #000000 !important;
            padding: 9px 18px !important;
            border-radius: 100px !important;
            font-size: 14px !important;
            font-weight: 800 !important;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif !important;
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.5) !important;
            position: relative;
            white-space: nowrap !important;
            user-select: none;
            pointer-events: auto;
            animation: waBubbleCycle 8s cubic-bezier(0.16, 1, 0.3, 1) infinite;
            transform-origin: right center;
        }
        .whatsapp-message-bubble::after {
            content: '';
            position: absolute;
            right: -8px;
            bottom: 12px;
            width: 0;
            height: 0;
            border-style: solid;
            border-width: 0 0 10px 10px;
            border-color: transparent transparent transparent #ffffff;
            filter: drop-shadow(2px 2px 2px rgba(0, 0, 0, 0.08));
        }

        /* 8s Keyframes: 0-6% (Pop In), 6-45% (Visible ~3.5s), 45-52% (Fade Out), 52-100% (Hidden ~4s) */
        @keyframes waBubbleCycle {
            0% {
                opacity: 0;
                transform: scale(0.7) translateX(12px);
            }
            6%, 45% {
                opacity: 1;
                transform: scale(1) translateX(0);
            }
            52%, 100% {
                opacity: 0;
                transform: scale(0.7) translateX(12px);
            }
        }

        @media (max-width: 768px) {
            .whatsapp-floating-wrap {
                bottom: 18px;
                right: 16px;
                gap: 8px;
            }
            .whatsapp-float-btn {
                width: 48px;
                height: 48px;
                min-width: 48px;
            }
            .whatsapp-float-btn svg {
                width: 32px;
                height: 32px;
            }
            .whatsapp-message-bubble {
                font-size: 12.5px !important;
                padding: 7px 14px !important;
            }
        }

        .details-wrapper {
            max-width: 850px;
            margin: 0 auto;
            padding: 30px 18px 80px;
            position: relative;
            z-index: 1;
        }

        .details-hero {
            text-align: center;
            padding: 20px 0 30px;
        }
        .game-badge {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            background: rgba(0, 255, 102, 0.08);
            border: 1px solid rgba(0, 255, 102, 0.3);
            padding: 6px 14px;
            border-radius: 100px;
            color: var(--primary);
            font-size: 11px;
            font-weight: 800;
            letter-spacing: 1px;
            text-transform: uppercase;
            margin-bottom: 15px;
        }
        .details-hero img {
            max-width: 130px;
            filter: drop-shadow(0 8px 20px rgba(0, 255, 102, 0.3));
            margin-bottom: 15px;
        }
        .details-hero h1 {
            font-family: var(--font-display);
            font-size: clamp(24px, 5.5vw, 38px);
            font-weight: 900;
            text-transform: uppercase;
            letter-spacing: -0.5px;
            line-height: 1.15;
            margin-bottom: 10px;
        }
        .details-hero h1 span {
            background: linear-gradient(135deg, #00ff66 0%, #00f0ff 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .content-card {
            background: var(--bg-card);
            backdrop-filter: blur(14px);
            border: 1px solid var(--border-card);
            border-radius: 18px;
            padding: 24px 20px;
            margin-bottom: 20px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.4);
        }
        .content-card h2 {
            font-family: var(--font-display);
            font-size: 18px;
            color: var(--primary);
            margin-bottom: 12px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            display: flex;
            align-items: center;
            gap: 8px;
        }
        .content-card h3 {
            font-size: 15px;
            color: #fff;
            margin: 16px 0 8px;
            font-weight: 700;
        }
        .content-card p {
            color: #c9d1d9;
            font-size: 14px;
            line-height: 1.7;
            margin-bottom: 12px;
        }
        .content-card ul, .content-card ol {
            padding-left: 20px;
            margin-bottom: 14px;
            color: #c9d1d9;
            font-size: 14px;
            line-height: 1.8;
        }
        .content-card li { margin-bottom: 6px; }
        .content-card strong { color: #fff; }

        .feature-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 12px;
            margin-top: 15px;
        }
        .feature-item {
            background: rgba(255, 255, 255, 0.03);
            border: 1px solid rgba(255, 255, 255, 0.06);
            border-radius: 12px;
            padding: 14px;
        }
        .feature-item h4 {
            color: var(--accent-cyan);
            font-size: 13px;
            font-weight: 800;
            margin-bottom: 5px;
        }
        .feature-item p {
            font-size: 12px;
            color: var(--text-muted);
            line-height: 1.5;
            margin: 0;
        }

        .cta-box {
            text-align: center;
            background: linear-gradient(180deg, rgba(0, 255, 102, 0.1) 0%, rgba(13, 19, 27, 0.95) 100%);
            border: 1px solid rgba(0, 255, 102, 0.4);
            border-radius: 20px;
            padding: 30px 20px;
            margin-top: 30px;
        }
        .cta-box h3 {
            font-family: var(--font-display);
            font-size: 20px;
            color: #fff;
            font-weight: 900;
            text-transform: uppercase;
            margin-bottom: 8px;
        }
        .cta-box p {
            color: var(--text-muted);
            font-size: 13px;
            margin-bottom: 20px;
        }
        .cta-buttons {
            display: flex;
            gap: 12px;
            justify-content: center;
            flex-wrap: wrap;
        }
        .cta-btn-main {
            background: linear-gradient(135deg, var(--primary) 0%, #00cc44 100%);
            color: #000;
            text-decoration: none;
            padding: 14px 28px;
            border-radius: 12px;
            font-weight: 900;
            font-size: 13px;
            text-transform: uppercase;
            box-shadow: none !important;
            transform: none !important;
            transition: background-color 0.2s ease;
        }
        .cta-btn-main:hover {
            box-shadow: none !important;
            transform: none !important;
            background: #00e65c;
        }
        .cta-btn-bot {
            background: linear-gradient(135deg, #0088cc 0%, #005588 100%);
            color: #fff;
            text-decoration: none;
            padding: 14px 24px;
            border-radius: 12px;
            font-weight: 900;
            font-size: 13px;
            text-transform: uppercase;
            box-shadow: none !important;
            transform: none !important;
            transition: background-color 0.2s ease;
        }
        .cta-btn-bot:hover {
            box-shadow: none !important;
            transform: none !important;
            background: #0077b3;
        }
    </style>
</head>
<body>

    <!-- GLOBAL UNIFIED DYNAMIC HEADER -->
    @include('partials.header')

    <div class="details-wrapper">

        <div class="back-nav-bar">
            <a href="{{ url('/') }}" class="back-btn">← Back to Store</a>
        </div>

        @if($gameKey === 'carrom')
            <div class="details-hero">
                <div class="game-badge">🎯 Carrom Pool Precision Tool</div>
                <div><img src="{{ asset('snake-engine-carrom-pool.png') }}" alt="Snake Engine Carrom Pool Auto Play Precision Aim Tool" width="180" height="180" fetchpriority="high"></div>
                <h1>SNAKE ENGINE <span>CARROM POOL</span></h1>
                <p style="color:var(--text-muted); font-size:13px; text-transform:uppercase; letter-spacing:1px;">Complete Auto Play, Aim Trajectory &amp; Anti-Ban Documentation</p>
            </div>

            <div class="content-card">
                <h2>🎯 What is Snake Carrom Pool Auto Play?</h2>
                <p><strong>Snake Engine Carrom Pool</strong> is a next-generation real-time trajectory calculation tool that gives players 100% precision board clearance capability. Built with advanced geometric raycasting and memory algorithms, it projects the exact path of the striker, target puck, and rebound angles from every pocket.</p>
                <div class="feature-grid">
                    <div class="feature-item">
                        <h4>⚡ Real-Time Raycasting</h4>
                        <p>Instantaneous multi-reflection trajectory lines updated dynamically in real-time.</p>
                    </div>
                    <div class="feature-item">
                        <h4>🛡️ 100% Anti-Ban Engine</h4>
                        <p>Embedded stream protection and undetected memory mapping keep your account 100% safe.</p>
                    </div>
                    <div class="feature-item">
                        <h4>💻 Android &amp; PC Emulation</h4>
                        <p>Full native support on LDPlayer, BlueStacks, Nox, and all Android mobile devices without Root.</p>
                    </div>
                    <div class="feature-item">
                        <h4>🔥 Auto Play Macro</h4>
                        <p>Automates high-stake trick shots, bank shots, and tough corner angles with single-tap accuracy.</p>
                    </div>
                </div>
            </div>

            <div class="content-card">
                <h2>📖 How to Install &amp; Activate Snake Carrom Pool</h2>
                <ol>
                    <li><strong>Download Supported APK:</strong> Download the verified Carrom Pool APK and Snake Hack tool from our official portal.</li>
                    <li><strong>Purchase License Key:</strong> Choose your duration (3 Days, 10 Days, 30 Days, or 90 Days) and receive an instant VIP key.</li>
                    <li><strong>Open Snake Engine:</strong> Enter your activation key and grant Floating Window overlay permissions.</li>
                    <li><strong>Launch Carrom Pool:</strong> Start your match. Trajectory guidance lines will automatically lock onto pucks and pockets in real-time.</li>
                </ol>
            </div>

            <div class="content-card">
                <h2>🏆 Supported Modes &amp; Features</h2>
                <ul>
                    <li><strong>Classic Carrom Mode:</strong> Auto locks white and black pucks with precise strike power meter calculations.</li>
                    <li><strong>Disc Pool Mode:</strong> Rapid speed clearance without fouls or striker slips.</li>
                    <li><strong>Freestyle Mode:</strong> Automatic point maximization by prioritizing the Queen puck and cover shots.</li>
                    <li><strong>Direct Rebound Line:</strong> Cushion bank shots calculated even behind obstacles.</li>
                </ul>
            </div>

        @elseif($gameKey === '8bp')
            <div class="details-hero">
                <div class="game-badge">🎱 8 Ball Pool Multi-Line Tool</div>
                <div><img src="{{ asset('snake-engine-8-ball-pool.png') }}" alt="Snake Engine 8 Ball Pool Multi-Line Aim Assistant Tool" width="180" height="180" fetchpriority="high"></div>
                <h1>SNAKE ENGINE <span>8 BALL POOL</span></h1>
                <p style="color:var(--text-muted); font-size:13px; text-transform:uppercase; letter-spacing:1px;">Multi-Line Target Extensions &amp; Cue Ball Physics Engine</p>
            </div>

            <div class="content-card">
                <h2>🎱 What is Snake 8 Ball Pool Aim Tool?</h2>
                <p><strong>Snake Engine 8 Ball Pool</strong> is the industry-leading multi-line cue assistant designed for flawless tournament domination. It provides infinite target line projection, cushion rebound calculations, and cue ball resting trajectory predictions.</p>
                <div class="feature-grid">
                    <div class="feature-item">
                        <h4>🎯 Multi-Line Projections</h4>
                        <p>Full 3-cushion bank shot and reflection trajectory tracking directly to the target pocket.</p>
                    </div>
                    <div class="feature-item">
                        <h4>🔄 Cue Ball Spin Physics</h4>
                        <p>Calculates where the white cue ball will stop after hitting the target ball based on applied spin.</p>
                    </div>
                    <div class="feature-item">
                        <h4>🎥 Stream-Hide Technology</h4>
                        <p>Stream your live gameplay on Discord, YouTube or Facebook without overlays being visible to viewers.</p>
                    </div>
                    <div class="feature-item">
                        <h4>🔒 Undetected Bypass</h4>
                        <p>Safe memory bypass that guarantees 0% risk of account flagging or ban.</p>
                    </div>
                </div>
            </div>

            <div class="content-card">
                <h2>📖 Step-by-Step Setup Guide</h2>
                <ol>
                    <li><strong>Get Your VIP Key:</strong> Purchase your 3, 10, 30, or 90 days key from our store or Telegram bot.</li>
                    <li><strong>Install Snake Engine APK:</strong> Install on any Android 8.0+ device or PC Emulator.</li>
                    <li><strong>Activate 8 Ball Pool:</strong> Turn on Multi-Line Mode and Cue Ball Trajectory toggle in settings.</li>
                    <li><strong>Win Matches:</strong> Enjoy automated guidelines across Berlin, Venice, and Rome tables effortlessly.</li>
                </ol>
            </div>

        @else
            <div class="details-hero">
                <div class="game-badge">⚽ Soccer Stars Goal Alignment</div>
                <div><img src="{{ asset('snake-engine-soccer-stars.png') }}" alt="Snake Engine Soccer Stars Aim Predictor &amp; Vector Alignment Tool" width="180" height="180" fetchpriority="high"></div>
                <h1>SNAKE ENGINE <span>SOCCER STARS</span></h1>
                <p style="color:var(--text-muted); font-size:13px; text-transform:uppercase; letter-spacing:1px;">Goal Alignment Vectors &amp; Deflection Prediction System</p>
            </div>

            <div class="content-card">
                <h2>⚽ What is Snake Soccer Stars Aim Tool?</h2>
                <p><strong>Snake Engine Soccer Stars</strong> gives you surgical angle precision by projecting exact goal alignment vectors, puck deflections, and wall rebound lines to ensure every shot hits the net.</p>
                <div class="feature-grid">
                    <div class="feature-item">
                        <h4>🥅 Perfect Goal Alignment</h4>
                        <p>Direct vector trace from your pieces to the opponent's goal post for guaranteed scoring angles.</p>
                    </div>
                    <div class="feature-item">
                        <h4>💥 Deflection Trajectory</h4>
                        <p>Accurately maps collisions when hitting opposing pieces or obstacle walls.</p>
                    </div>
                    <div class="feature-item">
                        <h4>⚡ Lightweight &amp; Fast</h4>
                        <p>Zero frame drops or lag; perfectly synchronized with high refresh rate mobile displays.</p>
                    </div>
                    <div class="feature-item">
                        <h4>🛡️ Anti-Ban Guaranteed</h4>
                        <p>100% verified and tested by over 25,000+ active competitive players.</p>
                    </div>
                </div>
            </div>

            <div class="content-card">
                <h2>📖 Easy Installation Guide</h2>
                <ol>
                    <li><strong>Purchase Key:</strong> Select your package (3 Days ₹155, 10 Days ₹350, 30 Days ₹773).</li>
                    <li><strong>Install &amp; Login:</strong> Open Snake Engine and paste your key.</li>
                    <li><strong>Select Soccer Stars:</strong> Activate Goal Vectors and Wall Rebound Tracking.</li>
                </ol>
            </div>
        @endif

        <div class="cta-box">
            <h3>Ready to Dominate Your Games?</h3>
            <p>Get instant VIP key activation within 2 minutes. 100% Safe, Verified &amp; Trusted by 25,000+ Players.</p>
            <div class="cta-buttons">
                <a href="{{ url('/') }}#store" class="cta-btn-main">🛒 View Plans &amp; Buy Now</a>
                <a href="https://wa.me/917667363785?text=Hello%20Bro%2C%20I%20need%20Snake%20Engine%20Auto%20Play%20tool.%20What%20is%20the%20process%3F" target="_blank" class="cta-btn-bot">💬 Buy via WhatsApp</a>
            </div>
        </div>

    </div>

    <!-- WHATSAPP FLOATING BUTTON WITH POPUP SPEECH BUBBLE -->
    <div class="whatsapp-floating-wrap">
        <a href="https://wa.me/917667363785?text=Hello%20Bro%2C%20I%20need%20Snake%20Engine%20Auto%20Play%20tool.%20What%20is%20the%20process%3F" target="_blank" class="whatsapp-float-btn" title="Chat with us on WhatsApp">
            <svg viewBox="0 0 32 32">
                <path d="M16 2C8.268 2 2 8.268 2 16c0 2.766.804 5.344 2.188 7.516L2.094 30.125l6.812-2.031C11.016 29.359 13.438 30 16 30c7.732 0 14-6.268 14-14S23.732 2 16 2zm0 25.563c-2.312 0-4.484-.656-6.328-1.797l-.453-.281-4.203 1.25 1.281-4.094-.312-.484C4.781 20.313 4.125 18.219 4.125 16c0-6.547 5.328-11.875 11.875-11.875S27.875 9.453 27.875 16 22.547 27.563 16 27.563zm6.5-8.813c-.359-.188-2.125-1.047-2.453-1.172-.328-.109-.562-.172-.812.188-.234.359-.922 1.172-1.141 1.406-.203.234-.422.25-.781.078-.359-.188-1.516-.562-2.891-1.781-1.063-.953-1.781-2.141-2-2.5-.203-.359-.016-.547.156-.734.156-.156.359-.422.547-.625.188-.203.25-.359.375-.594.125-.234.062-.438-.031-.625-.109-.188-.812-1.953-1.109-2.688-.297-.719-.594-.609-.812-.625-.203-.016-.438-.016-.672-.016s-.625.094-.953.438c-.328.359-1.25 1.219-1.25 2.984s1.281 3.469 1.453 3.703c.188.234 2.516 3.844 6.109 5.391.859.375 1.531.594 2.047.766.859.281 1.641.234 2.266.141.688-.109 2.125-.875 2.422-1.719.312-.844.312-1.562.219-1.719-.094-.172-.328-.266-.688-.453z"/>
            </svg>
        </a>
        <div id="waSpeechBubble" class="whatsapp-message-bubble">Bro how can I help you?</div>
    </div>

    <script>
        // WhatsApp Message Bubble Popup Loop (Triggers every 5 seconds)
        (function initWhatsAppBubble() {
            const bubble = document.getElementById('waSpeechBubble');
            if (!bubble) return;

            function showBubble() {
                bubble.classList.add('show');
                setTimeout(() => {
                    bubble.classList.remove('show');
                }, 2800);
            }
            setTimeout(showBubble, 1000);
            setInterval(showBubble, 5000);
        })();
    </script>
</body>
</html>
