<header class="header">

    <div id="menu-btn" class="fas fa-bars"></div>

    <a href="/" class="logo"> <span>Aracım</span>dan </a>

    <nav class="navbar">
        <a href="/">AnaSayfa</a>
        <a href="/#Araçlar">Araçlar</a>
        <a href="/#Servisler">Servisler</a>
        <a href="/#Diğer Araçlar">Diğer Araçlar</a>
        <a href="/#Yorumlar">Yorumlar</a>
        <a href="/#Hakkımızda">Hakkımızda</a>
    </nav>
    @guest
        <div id="login-btn">
            <button class="btn">Giriş Yap</button>
            <i class="far fa-user"> </i>
        </div>
    @endguest
    @auth
        <div>
            <p style="font-size: large;color: forestgreen">
            {{auth()->user()->name }}<a style="margin-left: 10px" class="btn" href="/logout">Çıkış</a></p>
        </div>
    @endauth
</header>
