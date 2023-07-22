<x-layout>
    <link rel="stylesheet" href="register.css">
    <div class="body">
        <div class="container">
        <form action="/register" method="post">
            @csrf
        <h1>Kayıt Ol</h1>
            <x-input :id="'name'" :type="'text'" :value="'Ad Soyad'" :img="'user'"/>
            <x-input :id="'email'" :type="'email'" :value="'E-Mail'" :img="'envelope'"/>
            <label class="ortayazi">Başında 0 olmadan.</label>
            <x-input :id="'phone'" :type="'text'" :value="'Telefon Numarası'" :img="'phone'"/>
            @if(Session::has('phone'))
                <p class="ortayazi">
                    {{ Session::get('phone') }}
                </p>
            @endif
            <x-input :id="'password'" :type="'password'" :value="'Parola'" :img="'key'"/>
            <x-input :id="'password2'" :type="'password'" :value="'Parolanın aynısını tekrar girin'" :img="'key'"/>
        <button type="submit">Kayıt ol</button>
        </form>
        </div>
    </div>
</x-layout>
