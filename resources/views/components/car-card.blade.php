@props(['car'])
<div class="swiper-slide box">

    <img src="{{$car->thumbnail}}" alt="">
    <div class="content">
        <h3>{{$car->name}}-{{$car->serial_number}}</h3>
        <div class="stars">
            5 yıldız üzerinden:
            @for($int = 1; $int<= $car->rating; $int++)
                <i class="fas fa-star"></i>
            @endfor
        </div>
        <div class="price"><span>Fiyat: </span>{{$car->price}}TL </div>
        <p>

            {{$car->name}}
            <span class="fas fa circle"></span>{{$car->model}} Model
            <span class="fas fa circle"></span>{{$car->shifter}}
            <span class="fas fa circle"></span{{$car->fuel}}
            <span class="fas fa circle"></span>{{$car->speed}} Gücünde
        </p>
        <a href="/randevu/{{$car->id}}" class="btn">Randevu almak İçin İlerleyin </a>
        <a href="/cars/{{$car->id}}" class="btn">İncele</a>
    </div>
</div>
