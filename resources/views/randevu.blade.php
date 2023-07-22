<x-layout>
    <link rel="stylesheet" href="randevu.css">
    <main class="randevubody">
<section class="randevuvehicles" id="Araçlar">
    <div class="swiper randevuvehicles-slider">
        <div class="swiper-slide box">
            <img src="{{asset($car->thumbnail)}}" alt="{{$car->name}}-{{$car->serial_number}}">
            <div class="content">
                <h3>{{$car->name}}-{{$car->serial_number}}</h3>
                <div class="stars">
                    5 yıldız üzerinden:
                    @for($int = 1; $int<= $car->rating; $int++)
                        <i class="fas fa-star"></i>
                    @endfor
                </div>
                <div class="price"><span>fiyat: </span>{{$car->price}} TL </div>
                <p>
                    <i class="fas fa-star"></i>
                    <span class="fas fa circle"></span>{{$car->model}} Model
                    <i class="fas fa-star"></i>
                    <span class="fas fa circle"></span>{{$car->shifter}}
                    <i class="fas fa-star"></i>
                    <span class="fas fa circle"></span>{{$car->fuel}}
                    <i class="fas fa-star"></i>
                    <span class="fas fa circle"></span>{{$car->speed}} gücünde
                </p>
                @auth
                    @php(
    $kontrol = \App\Models\Randevu::where('user_id', auth()->id())->where('car_id', $car->id)->get())
                    @isset($kontrol[0])
                        <br />
                        <p style="color: midnightblue; font-size: medium">Daha önce bu araca randevu almışsınız.</p>
                        <p style="color: midnightblue; font-size: medium">randevu tarihi: <span>{{$kontrol[0]->date}}</span></p>
                        <p style="color: midnightblue; font-size: medium">randevu saati: <span>{{$kontrol[0]->clock}}</span></p>
                        <p style="color: midnightblue; font-size: medium">
                            Randevuyu İptal etmek İçin <a href="/randevuDestroy/{{$car->id}}"
                                                          class="btn"
                            style="font-size: medium; padding: .3rem; width: 70px">tıklayın.</a></p>
                            @else
                        <div class="datepickers">

                            <form action="/randevu/{{$car->id}}" method="post">
                                @csrf
                                <br>
                                Tarih giriniz: <input name="date" id="date" type="date">
                                <br>
                                    Saat Seçiniz:  <select name="clock" id="clock">
                                    @for($i= 10.00; $i<=20.00; $i++)
                                    <option value="{{$i}}">{{$i}}.00</option>
                                    @endfor
                                </select>
                                <br>
                                <button type="submit" class="btn">Randevu al</button>
                            @endisset
                        @guest
                            <br />
                            <p style="color: midnightblue; font-size: medium">Randevu almak İçin giriş yapmalısınız.</p>
                        @endguest
                            @endauth
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
    </main>
</x-layout>
