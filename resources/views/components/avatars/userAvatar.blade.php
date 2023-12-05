@props(['userAvatar'])

@if ($userAvatar)
    <img src="{{ asset('storage/customers/avatars/'.$userAvatar) }}" {{ $attributes->merge(['class'=>'rounded-circle']) }} alt="No Avatar Found" width="48" height="48" >
@else
    <img src="{{ asset('img/avatar.png') }}" {{ $attributes->merge(['class'=>'rounded-circle']) }} alt="Default user avatar missing" width="48" height="48" >
@endif

