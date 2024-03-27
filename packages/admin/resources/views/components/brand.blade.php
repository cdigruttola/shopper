@if (filled($brand = config('shopper.admin.brand')))
    <img {{ $attributes }} src="{{ asset($brand) }}" alt="{{ config('app.name') }}" />
@else
    <img {{ $attributes }} src="{{ asset('shopper/images/shopper-icon.svg') }}" alt="Laravel Shopper" />
@endif
