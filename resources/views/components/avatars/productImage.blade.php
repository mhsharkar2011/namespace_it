@props(['productImages'])

@if ($productImages)
    <img src="{{ asset('storage/products/images/'.$productImages) }}" {{ $attributes->merge(['class'=>'rounded-circle']) }} alt="No Image Found" width="48" height="48" >
@else
    <img src="{{ asset('img/sample_product.png') }}" {{ $attributes->merge(['class'=>'rounded-circle']) }} alt="Default Product image not Found" width="48" height="48" >
@endif

