<div class="login-form-container">

    <span class="fas fa-times" id="close-login-form"></span>

    <form action="/login" method="post">
        @csrf
        <h3>HOŞGELDİNİZ</h3>
        <input type="email" id="email" name="email" value="{{ old('email') }}" placeholder="e-mail" class="box">
        <input type="password" id="password" name="password" placeholder="şifre" class="box">
        <button type="submit" class="btn">  Giriş Yap </button>

        <p>Şunu Deneyebilirsiniz</p>

        <div class="buttons">
            <a href="#" class="btn"> google</a>
            <a href="#" class="btn"> instagram </a>
        </div>
        <p><a href="/register">Kayıt Ol</a></p>
    </form>
</div>
<script src="login-script.js"></script>
