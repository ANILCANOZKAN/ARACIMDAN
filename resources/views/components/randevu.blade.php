@props(['value', 'img'])
<div class="box">
    <i class="{{$img}}"></i>
    <h3> {{ ucwords($value) }} </h3>
    <p>Hizmet İçin randevu alabilirsiniz. </p>
    <a href="#" class="btn">Randevu al</a>
</div>
