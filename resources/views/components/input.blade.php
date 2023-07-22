@props(['id', 'type', 'value', 'img'])
<div>
    <i class="fas fa-{{$img}}"></i>
    <input type="{{$type}}" name="{{$id}}" id="{{$id}}"
           @if($type != 'password')
               value="{{old($id)}}"
           @endif
           placeholder="{{$value}}">
</div>
@error($id)
    <p>
        Hatalı İşlem.
    </p>
@enderror
