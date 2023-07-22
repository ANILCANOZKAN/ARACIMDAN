<x-layout>
<section class="home" id="home">

    <h3 data-speed="-2" class="home-parallax">FARKI HİSSET</h3>

    <img data-speed="5" class="home-parallax" src="/images/home-img.png" alt="">

</section>
<script src="home-script.js"></script>

<section class="icons-container">

<div class="icons">
<i class="fas fa-car"></i>
<div class="content">
    <h3>150+</h3>
    <p>Diğer modeller</p>
</div>
</div>


<div class="icons">
    <i class="fas fa-car"></i>
    <div class="content">
        <h3>4770+</h3>
        <p>Satılan Araçlar</p>
    </div>
    </div>

    <div class="icons">
        <i class="fas fa-users"></i>
        <div class="content">
            <h3>590+</h3>
            <p>mutlu müşteriler</p>
        </div>
        </div>

        <div class="icons">
            <i class="fas fa-car"></i>
            <div class="content">
                <h3>890+</h3>
                <p>yeni araçlar</p>
            </div>
            </div>
</section>



<section class="vehicles" id="Araçlar">
    <br/>
<h1 class="heading">Üst Segment <span> Araçlar</span></h1>
<div class="swiper vehicles-slider">
    <div class="swiper-wrapper">
        @foreach($powerfullCars as $car)
        <x-car-card :car="$car" />
        @endforeach
    </div>
</div>
</section>
<section class="services" id="Servisler">
    <h1 class="heading">Araç <span> Servisi</span></h1>
    <div class="box-container">
        <x-randevu :value="'Geri İade'" :img="'fas fa-car'" />
        <x-randevu :value="'Araç Tamiri'" :img="'fas fa-tools'" />
        <x-randevu :value="'Araç Sigortası'" :img="'fas fa-car-crash'" />
        <x-randevu :value="'Akü Değişimi'" :img="'fas fa-car-battery'" />
        <x-randevu :value="'Yağ Değişimi'" :img="'fas fa-gas-pump'" />
        <x-randevu :value="'7/24 Aktif Müşteri Temsilcisi'" :img="'fas fa-headset'" />
</div>
    </section>


<br/>

    <section class="featured" id="Diğer Araçlar">
        <h1 class="heading"> <span>Orta Segment</span> Araçlar </h1>
        @if(count($cars))
        <x-ortasegmentarac :cars="$cars" />
        @else
            <div style="font-size: medium; padding: 3pt; text-align: center">
                <p>
                    Henüz Orta segment araç eklenmemiştir.
                </p>
            </div>
        @endif
    </section>


<div class="newsletter">
    <h3>Yeniliklerden Haberder olun</h3>
    <p>Güncel araçlar ve yenilikler için takipte kalın</p>
    <form action="">
    <input type="email" placeholder="mail adresinizi giriniz" name=" id">
    <input type="submit" class="aboneler" name=" id">
    </form>

</div>



<section class="reviews" id="Yorumlar">
    @if(count($comments))
    <h1 class="heading"> Mutlu <span> Müşteriler</span></h1>

    <div class="swiper reviews-slider">

        <div class="swiper-wrapper">
@foreach($comments as $comment)
            <div class="swiper-slide box">
                @if(auth()->user()?->role == 1)
                <form method="post" action="/commentUnPin/{{$comment->id}}">
                    @csrf
                    <button
                        style="background: #130f40;
                            color: #e2e8f0;
                            font-size: small;
                            width: 160px;
                            height: 30px;"
                        type="submit">Sabitlemeyi Kaldır</button></form>
                @endif
                <div class="content">
                    <p>{{$comment->comment}}</p>
                    <p>{{$comment->created_at->format('d F y')}} Tarihinde Yazılmıştır.</p>
                        <h4><span>Yorum yapılan araç: </span><a  href="/cars/{{$comment->car->id}}">
                                {{$comment->car->name}}-{{$comment->car->serial_number}}</a></h4>
                 <h3>{{$comment->user->name}}</h3>
                 <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                 </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    @else
        <div style="font-size: medium; padding: 3pt; text-align: center">
            <p>
                Henüz yorum yapılmamış.
            </p>
        </div>
        <br/>
    @endif
</section>



<section class="contact" id="Hakkımızda">
    <h1 class="heading"><span>Satış adresimizi ziyaret edebilirsiniz</span></h1>


<div class="row">

<iframe class="map"
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3147.205130313353!2d40.17937051559574!3d37.9256380112378!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40751fa74abb4b87%3A0x2fbe474c64e1ea49!2sErbab%202%20Sitesi!5e0!3m2!1str!2str!4v1663250604115!5m2!1str!2str" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>
    <br/>
</section>
</x-layout>
