@props(['cars'])
<div class="swiper featured-slider">
    <div class="swiper-wrapper">
        <div class="swiper-slide box">
            @foreach($cars as $car)
            <img src="{{$car->thumbnail}}" alt="">
            <div class="content">
                <h3>{{$car->name}}-{{$car->serial_number}}</h3>
                <div class="stars">
                    5 yıldız üzerinden:
                    @for($int = 1; $int<= $car->rating; $int++)
                        <i class="fas fa-star"></i>
                    @endfor
                </div>
                <div class="price">{{$car->price}}TL</div>
                <a href="/randevu/{{$car->id}}" class="btn">Randevu Al</a>
                <a href="/cars/{{$car->id}}" class="btn">İncele</a>
            </div>
            @endforeach
        </div>
    </div>
</div>
