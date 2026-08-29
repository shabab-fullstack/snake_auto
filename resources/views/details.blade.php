<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    
    @php
        $gameKey = $game ?? 'carrom';
        $titles = [
            'about' => 'About Carrom Pool Auto Play | Official Features & System Documentation',
            'carrom' => 'Carrom Pool Auto Play & Auto Play Carrom Pool Mod APK Guide',
            '8bp' => '8 Ball Pool Auto Play & Multi-Line Aim Assistant Guide',
            'soccer' => 'Soccer Stars Auto Play & Accuracy Predictor Guide',
            'pc-setup' => 'Carrom Pool Auto Play PC Setup | LDPlayer & BlueStacks Guide'
        ];
        $pageTitle = $titles[$gameKey] ?? 'Carrom Pool Auto Play Guide';
    @endphp

    <title>{{ $pageTitle }} | Carrom Pool Auto Play Official</title>
    <meta name="description" content="Complete guide on {{ $pageTitle }}. Download Carrom Pool Auto Play APK, Auto Play Carrom Pool Mod APK, anti-ban setup and get instant VIP activation keys.">
    <meta name="keywords" content="carrom pool auto play, auto play carrom pool, carrom pool free auto play, carrom pool auto play mod apk, auto play carrom pool mod apk, carrom pool auto play download, auto play carrom pool free download, carrom pool auto aim, carrom pool aim assist, carrom pool bitaim, carrom auto play, shabab gaming">
    <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">
    <meta name="author" content="SHABAB GAMING">
    @if(env('GOOGLE_SITE_VERIFICATION'))
    <meta name="google-site-verification" content="{{ env('GOOGLE_SITE_VERIFICATION') }}">
    @endif
    <link rel="canonical" href="{{ url('/details/' . $gameKey) }}">

    <!-- Open Graph -->
    <meta property="og:locale" content="en_US">
    <meta property="og:site_name" content="Carrom Pool Auto Play Official Guide">
    <meta property="og:title" content="{{ $pageTitle }}">
    <meta property="og:description" content="Complete tutorial, features, PC emulator support and VIP keys for {{ $pageTitle }}.">
    <meta property="og:type" content="article">
    <meta property="og:url" content="{{ url('/details/' . $gameKey) }}">
    <meta property="og:image" content="{{ asset('snake-engine-banner.png') }}">

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="{{ $pageTitle }}">
    <meta name="twitter:description" content="Official Carrom Pool Auto Play Guide &amp; Instant VIP Key Activation.">
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
          "https://youtube.com/@@shabab.gaming1",
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

        #overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100vw;
            height: 100vh;
            background: rgba(0, 0, 0, 0.7);
            backdrop-filter: blur(4px);
            -webkit-backdrop-filter: blur(4px);
            z-index: 99990;
            display: none;
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
            .back-btn {
                padding: 8px 14px;
                font-size: 12px;
            }
        }

        /* WHATSAPP FLOATING BUTTON & POPUP MESSAGE BUBBLE */
        .whatsapp-floating-wrap {
            position: fixed;
            bottom: 24px;
            right: 24px;
            z-index: 9999;
            display: flex;
            align-items: center;
            gap: 12px;
        }
        .whatsapp-float-btn {
            width: 58px;
            height: 58px;
            border-radius: 50%;
            background: #25d366;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 8px 24px rgba(37, 211, 102, 0.4);
            transition: all 0.3s cubic-bezier(0.16, 1, 0.3, 1);
            cursor: pointer;
            text-decoration: none;
        }
        .whatsapp-float-btn:hover {
            transform: scale(1.1) rotate(6deg);
            background: #20ba59;
            box-shadow: 0 10px 30px rgba(37, 211, 102, 0.6);
        }
        .whatsapp-float-btn svg {
            width: 32px;
            height: 32px;
            fill: #fff;
        }
        .whatsapp-message-bubble {
            background: #111b21;
            color: #e9edef;
            padding: 10px 16px;
            border-radius: 12px;
            font-size: 13px;
            font-weight: 600;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.5);
            border: 1px solid rgba(255, 255, 255, 0.1);
            white-space: nowrap;
            opacity: 0;
            transform: translateX(10px);
            transition: opacity 0.3s ease, transform 0.3s ease;
            pointer-events: none;
            position: relative;
        }
        .whatsapp-message-bubble::after {
            content: '';
            position: absolute;
            right: -6px;
            top: 50%;
            transform: translateY(-50%);
            border-width: 6px 0 6px 6px;
            border-style: solid;
            border-color: transparent transparent transparent #111b21;
        }
        .whatsapp-message-bubble.show {
            opacity: 1;
            transform: translateX(0);
        }

        /* DETAILS PAGE MAIN CONTAINER */
        .details-wrapper {
            max-width: 900px;
            margin: 30px auto 60px;
            padding: 0 20px;
            position: relative;
            z-index: 1;
        }

        .details-hero {
            text-align: center;
            padding: 30px 20px 40px;
            background: linear-gradient(180deg, rgba(13, 19, 27, 0.9) 0%, rgba(6, 9, 13, 0.95) 100%);
            border: 1px solid var(--border-card);
            border-radius: 20px;
            margin-bottom: 30px;
            position: relative;
            overflow: hidden;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.5);
        }
        .details-hero img {
            width: 140px;
            height: 140px;
            object-fit: contain;
            filter: none !important;
            margin-bottom: 15px;
        }
        .details-hero h1 {
            font-family: var(--font-display);
            font-size: 32px;
            font-weight: 900;
            letter-spacing: -0.5px;
            margin-bottom: 10px;
            line-height: 1.2;
            text-shadow: none !important;
        }
        .details-hero h1 span {
            color: var(--primary);
            text-shadow: none !important;
        }
        .details-hero .game-badge {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            background: rgba(0, 255, 102, 0.1);
            border: 1px solid rgba(0, 255, 102, 0.3);
            color: var(--primary);
            padding: 5px 14px;
            border-radius: 100px;
            font-size: 11px;
            font-weight: 800;
            text-transform: uppercase;
            letter-spacing: 1px;
            margin-bottom: 15px;
        }

        .content-card {
            background: var(--bg-card);
            border: 1px solid var(--border-card);
            border-radius: 16px;
            padding: 30px;
            margin-bottom: 25px;
            backdrop-filter: blur(16px);
            -webkit-backdrop-filter: blur(16px);
        }
        .content-card h2 {
            font-family: var(--font-display);
            font-size: 22px;
            font-weight: 800;
            color: #fff;
            margin-bottom: 18px;
            display: flex;
            align-items: center;
            gap: 10px;
            border-bottom: 1px solid rgba(255, 255, 255, 0.06);
            padding-bottom: 12px;
        }
        .content-card h3 {
            font-size: 17px;
            font-weight: 700;
            color: var(--primary);
            margin: 20px 0 10px;
        }
        .content-card p {
            color: #c9d1d9;
            font-size: 14.5px;
            line-height: 1.7;
            margin-bottom: 16px;
        }
        .content-card ul, .content-card ol {
            color: #c9d1d9;
            font-size: 14.5px;
            line-height: 1.7;
            padding-left: 24px;
            margin-bottom: 16px;
        }
        .content-card li {
            margin-bottom: 10px;
        }
        .content-card li strong {
            color: #fff;
        }

        .feature-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
            gap: 16px;
            margin-top: 20px;
        }
        .feature-item {
            background: rgba(255, 255, 255, 0.02);
            border: 1px solid rgba(255, 255, 255, 0.05);
            padding: 18px;
            border-radius: 12px;
            border-left: 3px solid var(--primary);
        }
        .feature-item h4 {
            font-size: 15px;
            font-weight: 700;
            color: #fff;
            margin-bottom: 8px;
            display: flex;
            align-items: center;
            gap: 6px;
        }
        .feature-item p {
            font-size: 13px;
            color: var(--text-muted);
            line-height: 1.5;
            margin-bottom: 0;
        }

        .cta-box {
            text-align: center;
            background: linear-gradient(135deg, rgba(0, 255, 102, 0.08) 0%, rgba(0, 240, 255, 0.05) 100%);
            border: 1px solid rgba(0, 255, 102, 0.25);
            border-radius: 16px;
            padding: 35px 25px;
            margin-top: 35px;
        }
        .cta-box h3 {
            font-family: var(--font-display);
            font-size: 24px;
            font-weight: 900;
            color: #fff;
            margin-bottom: 10px;
        }
        .cta-box p {
            color: var(--text-muted);
            font-size: 14px;
            margin-bottom: 22px;
        }
        .cta-buttons {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 14px;
            flex-wrap: wrap;
        }
        .cta-btn-main {
            background: linear-gradient(135deg, #00ff66 0%, #00bb44 100%);
            color: #040608;
            padding: 13px 28px;
            border-radius: 100px;
            font-weight: 800;
            font-size: 14px;
            text-decoration: none;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            box-shadow: none !important;
            transform: none !important;
            transition: background-color 0.2s ease;
        }
        .cta-btn-main:hover {
            box-shadow: none !important;
            transform: none !important;
            background: linear-gradient(135deg, #26ff7b 0%, #00d64e 100%);
        }
        .cta-btn-bot {
            background: #0088cc;
            color: #fff;
            padding: 13px 28px;
            border-radius: 100px;
            font-weight: 800;
            font-size: 14px;
            text-decoration: none;
            text-transform: uppercase;
            letter-spacing: 0.5px;
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

    <div id="overlay" onclick="closeAllModals()"></div>

    <!-- GLOBAL UNIFIED DYNAMIC HEADER -->
    @include('partials.header')

    <div class="details-wrapper">

        <div class="back-nav-bar">
            <a href="{{ url('/') }}" class="back-btn">← Back to Store</a>
        </div>

        @if($gameKey === 'carrom')
            <div class="details-hero">
                <div class="game-badge">⚡ #1 Auto Play Carrom Pool &bull; Mod APK Guide</div>
                <div><img src="{{ asset('snake-engine-carrom-pool.png') }}" alt="Carrom Pool Auto Play Precision Aim Tool" width="180" height="180" fetchpriority="high"></div>
                <h1>CARROM POOL <span>AUTO PLAY</span></h1>
                <p style="color:var(--text-muted); font-size:13px; text-transform:uppercase; letter-spacing:1px;">Complete Auto Play Carrom Pool, Mod APK &amp; Anti-Ban Documentation</p>
            </div>

            <div class="content-card">
                <h2>🎯 What is Carrom Pool Auto Play &amp; Auto Play Carrom Pool?</h2>
                <p><strong>Carrom Pool Auto Play</strong> is a next-generation real-time trajectory calculation tool that gives players 100% precision board clearance capability. Built with advanced geometric raycasting and memory algorithms, it projects the exact path of the striker, target puck, and rebound angles from every pocket.</p>
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
                <h2>📖 How to Install &amp; Activate Carrom Pool Auto Play</h2>
                <ol>
                    <li><strong>Download Supported APK:</strong> Download the verified Carrom Pool APK and Auto Play tool from our official portal.</li>
                    <li><strong>Purchase License Key:</strong> Choose your duration (3 Days, 10 Days, 30 Days, or 90 Days) and receive an instant VIP key.</li>
                    <li><strong>Open Auto Play Tool:</strong> Enter your activation key and grant Floating Window overlay permissions.</li>
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

        @elseif($gameKey === 'soccer')
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

        @elseif($gameKey === 'about')
            <div class="details-hero">
                <div class="game-badge">⚡ OFFICIAL SNAKE ENGINE DOCUMENTATION &amp; ABOUT GUIDE</div>
                <div><img src="{{ asset('snake-engine-logo.png') }}" alt="About Official Snake Engine System" width="160" height="160" fetchpriority="high"></div>
                <h1>ABOUT SNAKE ENGINE &bull; <span>OFFICIAL SYSTEM CORE</span></h1>
                <p style="color:var(--text-muted); font-size:13px; text-transform:uppercase; letter-spacing:1px;">Complete Guide to Geometric Raycasting Overlay, Anti-Ban Engine, Emulator Setup &amp; Official Shabab Gaming Keys</p>
            </div>

            <div class="content-card">
                <h2>⚡ The Evolution of Game Automation: Snake Engine Core</h2>
                <p><strong>Snake Engine</strong> is the world's most advanced, mathematically calibrated real-time overlay assistant specifically built for competitive board and precision trajectory games like <strong>Carrom Pool, 8 Ball Pool, and Soccer Stars</strong>.</p>
                <p>Engineered from the ground up to operate completely isolated from game binaries, Snake Engine uses screen coordinate vector calculation without altering internal game code, ensuring true <strong>100% Anti-Ban security</strong>.</p>
                
                <div class="feature-grid">
                    <div class="feature-item">
                        <h4>🎯 Snake Carrom Pool</h4>
                        <p>Real-time striker angle calculation, pocket rebound reflections, and automatic power level guide for instant clearance.</p>
                        <a href="{{ url('/details/carrom') }}" style="color:#00ff66; font-weight:700; text-decoration:none; display:inline-block; margin-top:6px;">View Carrom Guide →</a>
                    </div>
                    <div class="feature-item">
                        <h4>🎱 Snake 8 Ball Pool</h4>
                        <p>Infinite multi-line cue guides, 3-cushion bank shot trajectories, and cue ball resting location prediction based on applied spin.</p>
                        <a href="{{ url('/details/8bp') }}" style="color:#00ff66; font-weight:700; text-decoration:none; display:inline-block; margin-top:6px;">View 8BP Guide →</a>
                    </div>
                    <div class="feature-item">
                        <h4>⚽ Snake Soccer Stars</h4>
                        <p>Goal alignment vector tracking, obstacle puck deflection mapping, and high-precision rebound calculations.</p>
                        <a href="{{ url('/details/soccer') }}" style="color:#00ff66; font-weight:700; text-decoration:none; display:inline-block; margin-top:6px;">View Soccer Guide →</a>
                    </div>
                    <div class="feature-item">
                        <h4>💻 PC Emulator Engine</h4>
                        <p>Native optimization for LDPlayer 9, BlueStacks 5, and Nox Player running at smooth 120 FPS without lag.</p>
                        <a href="{{ url('/details/pc-setup') }}" style="color:#00ff66; font-weight:700; text-decoration:none; display:inline-block; margin-top:6px;">View PC Setup Guide →</a>
                    </div>
                </div>
            </div>

            <div class="content-card">
                <h2>📖 Complete Step-by-Step Installation &amp; Setup Guide</h2>
                <ol>
                    <li><strong>Purchase Official VIP Key:</strong> Choose your duration plan (3 Days, 10 Days, 30 Days, or 90 Days) from our official store.</li>
                    <li><strong>Download Supported APK:</strong> Download verified APK files directly from our verified portal.</li>
                    <li><strong>Grant Display Permission:</strong> On Android or Emulator, enable <em>"Display Over Other Apps"</em> permission for Snake Engine.</li>
                    <li><strong>Login with Key:</strong> Paste your activated Snake Key into the login box and click <strong>LOGIN</strong>.</li>
                    <li><strong>Launch Your Game:</strong> Open Carrom Pool, 8BP, or Soccer Stars. The automated overlay will lock onto game coordinates automatically!</li>
                </ol>
            </div>

            <div class="content-card">
                <h2>👑 Official SHABAB GAMING Verification &amp; Trust</h2>
                <p><strong>SHABAB GAMING</strong> is the verified, gold-standard provider for the Snake automation ecosystem, trusted by over <strong>25,000+ satisfied competitive gamers</strong> across India and worldwide.</p>
                <p>Always ensure you are buying from the official portal (this website) or direct Shabab Gaming channels to avoid fake clones, expired trial keys, and unsafe malware mods.</p>
            </div>

        @elseif($gameKey === 'pc-setup')
            <div class="details-hero">
                <div class="game-badge">💻 SNAKE ENGINE PC SETUP GUIDE</div>
                <div><img src="{{ asset('snake-engine-logo.png') }}" alt="Setup Snake Engine on PC LDPlayer BlueStacks" width="160" height="160" fetchpriority="high"></div>
                <h1>SNAKE ENGINE <span>PC EMULATOR SETUP</span></h1>
                <p style="color:var(--text-muted); font-size:13px; text-transform:uppercase; letter-spacing:1px;">Complete Tutorial for LDPlayer 9, BlueStacks 5 &amp; Nox (No Root Required)</p>
            </div>

            <div class="content-card">
                <h2>⚡ Supported Emulators &amp; System Requirements</h2>
                <p><strong>Snake Engine</strong> runs flawlessly on all modern Windows PC Android emulators with zero lag and high-refresh-rate 120 FPS output. You do <strong>NOT</strong> need root permissions.</p>
                <div class="feature-grid">
                    <div class="feature-item">
                        <h4>🥇 LDPlayer 9 (Recommended)</h4>
                        <p>Best performance, fastest raycasting updates, and native 120 FPS rendering mode.</p>
                    </div>
                    <div class="feature-item">
                        <h4>🥈 BlueStacks 5 (Pie 64-bit)</h4>
                        <p>Excellent graphical stability, customizable RAM allocation and high DPI precision.</p>
                    </div>
                    <div class="feature-item">
                        <h4>🥉 Nox Player 7</h4>
                        <p>Lightweight memory footprint, perfect for low-spec dual-core laptops and PCs.</p>
                    </div>
                </div>
            </div>

            <div class="content-card">
                <h2>📖 Step-by-Step PC Emulator Installation</h2>
                <ol>
                    <li>Download &amp; install <strong>LDPlayer 9</strong> or <strong>BlueStacks 5 (64-bit)</strong> on your PC.</li>
                    <li>Inside emulator settings, allocate at least <strong>4 CPU cores &amp; 4GB RAM</strong>.</li>
                    <li>Download the Snake Engine APK inside the emulator and install it.</li>
                    <li>Launch Snake Engine, paste your VIP key, and click Login.</li>
                    <li>Launch your game (Carrom Pool, 8BP, or Soccer Stars) and dominate every match!</li>
                </ol>
            </div>
        @endif

        <div class="cta-box">
            <h3>Ready to Dominate Your Games?</h3>
            <p>Get instant VIP key activation within 2 minutes. 100% Safe, Verified &amp; Trusted by 25,000+ Players.</p>
            <div class="cta-buttons">
                <a href="{{ url('/') }}#store" class="cta-btn-main">🛒 View Plans &amp; Buy Now</a>
                <a href="https://t.me/shababgaming" target="_blank" rel="noopener noreferrer" class="cta-btn-bot">✈️ Buy via Telegram</a>
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
        function closeAllModals() {
            const nav = document.getElementById("mySidenav");
            if (nav) nav.classList.remove("open");
            const overlay = document.getElementById("overlay");
            if (overlay) overlay.style.display = "none";
        }

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
