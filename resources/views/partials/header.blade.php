<!-- SIDE NAVIGATION DRAWER (DESIGN #1: CYBER HUD GREEN) -->
<div id="mySidenav" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="toggleMenu()">&times;</a>
    <div class="sidenav-content">
        <div class="s1-hud-header">
            <div class="s1-hud-title">CARROM POOL AUTO PLAY</div>
        </div>
        <div class="s1-box">
            <h4><span>⚡</span> ABOUT CARROM POOL AUTO PLAY</h4>
            <p>Official next-gen Carrom Pool Auto Play &amp; Auto Play Carrom Pool aim engine. Infinite multi-line trajectory for 8 Ball Pool and vector alignment for Soccer Stars by Shabab Gaming. 🔥</p>
            <a href="{{ url('/details/carrom') }}" class="s1-link-btn" style="margin-top: 12px; background: rgba(0, 200, 83, 0.1); border: 1px solid rgba(0, 200, 83, 0.3); justify-content: space-between; font-weight: 800; color: #00ff66; box-shadow: none !important;">
                <span>📖 Carrom Pool Auto Play Guide</span> <span>→</span>
            </a>
        </div>
        <div class="s1-box">
            <h4><span>🎮</span> QUICK NAVIGATION &amp; GUIDES</h4>
            <div class="s1-links" style="margin-top: 10px; margin-bottom: 0;">
                <a href="{{ url('/details/carrom') }}" class="s1-link-btn">
                    <span>🎯 Carrom Pool Auto Play &amp; Keys</span> <span>→</span>
                </a>
                <a href="{{ url('/details/8bp') }}" class="s1-link-btn">
                    <span>🎱 8 Ball Pool Auto Play Tool</span> <span>→</span>
                </a>
                <a href="{{ url('/details/soccer') }}" class="s1-link-btn">
                    <span>⚽ Soccer Stars Auto Play Tool</span> <span>→</span>
                </a>
            </div>
        </div>
        <div class="s1-box">
            <h4><span>🌐</span> SHABAB GAMING SOCIALS</h4>
            <div class="s1-links" style="margin-top: 10px; margin-bottom: 0;">
                <a href="https://youtube.com/@shabab.gaming1?si=nTCkkH1iu9NjNBjq" target="_blank" rel="noopener noreferrer" class="s1-link-btn">
                    <span>▶ YouTube Official</span> <span>→</span>
                </a>
                <a href="https://t.me/shababgaming" target="_blank" rel="noopener noreferrer" class="s1-link-btn">
                    <span>✈️ Telegram Channel</span> <span>→</span>
                </a>
                <a href="https://whatsapp.com/channel/0029VbCa2RHBVJl3JOI24R38" target="_blank" rel="noopener noreferrer" class="s1-link-btn">
                    <span>🟢 WhatsApp Channel</span> <span>→</span>
                </a>
            </div>
        </div>
        <a href="https://wa.me/917667363785?text=Hi%20bro%2C%20I%20need%20Carrom%20Pool%20Auto%20Play%20VIP%20Key." target="_blank" rel="noopener noreferrer" class="s1-report-btn">
            💬 24/7 WHATSAPP SUPPORT
        </a>
    </div>
</div>

<!-- TOP GREEN HEADER -->
<header class="site-header">
    <div class="menu-trigger" onclick="toggleMenu()">
        <span class="menu-icon">☰</span> <span id="menu-text">MENU</span>
    </div>
    <div class="header-logo">
        <a href="{{ url('/') }}">
            <img src="{{ asset('snake-engine-logo.png') }}" alt="Official Snake Engine Logo">
        </a>
    </div>
    <a href="{{ url('/') }}#store" class="shop-link">STORE</a>
</header>

<script>
    function toggleMenu() {
        const nav = document.getElementById("mySidenav");
        const overlay = document.getElementById("overlay");
        if (!nav) return;
        
        const isOpen = nav.classList.contains("open");
        if (isOpen) {
            nav.classList.remove("open");
            if (overlay && (!document.getElementById("seoModal") || document.getElementById("seoModal").style.display !== "block") && (!document.getElementById("buyConfirmPopup") || document.getElementById("buyConfirmPopup").style.display !== "block")) {
                overlay.style.display = "none";
            }
        } else {
            nav.classList.add("open");
            if (overlay) overlay.style.display = "block";
        }
    }
</script>
