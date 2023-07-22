<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aracımdan</title>
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="car.css">
</head>
<body>
<x-header />
<x-login />

{{$slot}}

@if(session()->has('success'))
    <div x-data="{ show: true}"
         x-init="setTimeout(() => show = false, 4000)"
         x-show="show"
         style="background: forestgreen; color: #ffffff;
         padding-top: 5px; padding-bottom: 5px; padding-left: 10px; padding-right: 10px;
         border-radius: initial;
         font-size: medium; position: fixed; bottom: 0; right: 0; margin-bottom: 10px"
    >
        <p>{{ session('success') }}</p>
    </div>
@endif
@if(session()->has('error'))
    <div x-data="{ show: true}"
         x-init="setTimeout(() => show = false, 4000)"
         x-show="show"
         style="background: firebrick; color: #ffffff;
         padding-top: 5px; padding-bottom: 5px; padding-left: 10px; padding-right: 10px;
         border-radius: initial;
         font-size: medium; position: fixed; bottom: 0; right: 0; margin-bottom: 10px"
    >
        <p>{{ session('error') }}</p>
    </div>
@endif

<x-footer />
</body>
<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
<script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
<script src="script.js"></script>
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.2/dist/alpine.min.js" defer></script>
</html>
