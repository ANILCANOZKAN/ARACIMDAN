<x-layout>
    <main class="carbody">
<section class="carvehicles" id="Araçlar">
    <div class="swiper carvehicles-slider">
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
                <div class="price"><span>Fiyat:  </span>{{$car->price}} TL </div>

                <p>
                    <i class="fas fa-star"></i>
                    <span class="fas fa circle"></span>{{$car->model}} Model
                    <i class="fas fa-star"></i>
                    <span class="fas fa circle"></span>{{$car->shifter}}
                    <i class="fas fa-star"></i>
                    <span class="fas fa circle"></span>{{$car->fuel}}
                    <i class="fas fa-star"></i>
                    <span class="fas fa circle"></span>{{$car->speed}} Gücünde
                </p>
                @auth
                    <br />
                    <a class="btn" href="/randevu/{{$car->id}}">Randevu Al</a>
                <form action="/commentStore/{{$car->id}}" method="post">
                    @csrf
                    <textarea id="comment" name="comment" placeholder="Mesajınız"></textarea>
                    <br/>
                    <button class="text-xs">Yorum yap</button>
                </form>
                @else
                <p style="font-size: medium;color: #1a202c;
                margin-top: 20px;margin-bottom: 20px">Randevu almak veya yorum yapmak için giriş yapınız.</p>
                @endauth
            </div>
        </div>
    </div>
</section>
    <section class="carvehicles">
    @isset($comments[0])
    @foreach($comments as $comment)
        <br/>
    <div class="comment-thread">
        @if(auth()->user()?->role == 1)
        @if($comment->pin)
            <form method="post" action="/commentUnPin/{{$comment->id}}">
                @csrf
                <button
                    style="background: #130f40;
                            color: #e2e8f0;
                            font-size: small;
                            width: 160px;
                            height: 30px;
                            float: right;"
                    type="submit">Sabitlemeyi Kaldır</button></form>
            <br />
            <br />
            @else
        <form method="post" action="/commentPin/{{$comment->id}}">
            @csrf
            <button
                style="background: #130f40;
                            color: #e2e8f0;
                            width: 79px;
                            font-size: small;
                            height: 30px;
                            float: right;"
                type="submit">Sabitle</button></form>
        <br />
        <br />
        @endif
        @endif
        <!-- Comment 1 start -->
        <div class="comment" id="comment-1">
            <div class="comment-heading">
                <div class="comment-info">
                    <p class="comment-author">{{$comment->user->name}}</p>
                    <p class="m-0" style="float: right">
                        {{$comment->created_at->format('d F y')}} Tarihinde yapılmıştır.</p>
                </div>
            </div>
                <p class="comment.comment">
                    {{$comment->comment}}
                </p>
        </div>
    </div>
    @endforeach
    @else
        <br/>
        <div style="margin: auto; font-size: medium; color: #1a202c">
            Bu araca henüz yorum yapılmamıştır.
        </div>
    @endisset
    <div style="font-size: medium; margin-top: 15px">
    {{ $comments->links() }}
        <br/>
    </div>
    </section>
    </main>
</x-layout>
