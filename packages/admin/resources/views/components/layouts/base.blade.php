@props(['title' => config('app.name')])

<!DOCTYPE html>
<html
    lang="{{ str_replace('_', '-', app()->getLocale()) }}"
    class="shopper scroll-smooth js-focus-visible min-h-screen antialiased"
>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="X-DNS-Prefetch-Control" content="on">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="locale" content="{{ str_replace('_', '-', app()->getLocale()) }}">
    <meta name="base-url" content="{{ config('app.url') }}">
    <meta name="dashboard-url" content="{{ config('app.url') . '/' . shopper_prefix() }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    @if ($favicon = config('shopper.admin.favicon'))
        <link rel="icon" href="{{ $favicon }}" />
    @else
        <x-shopper::favicons />
    @endif

    <title>{{ $title }} // {{ __('shopper::layout.meta_title') }}</title>

    <link rel="dns-prefetch" href="{{ config('app.url') }}"/>
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css"/>
    <link rel="stylesheet" href="https://unpkg.com/tippy.js@6/dist/tippy.css"/>

    @stack('styles')

    <livewire:styles />
    {{ \Shopper\Facades\Shopper::getThemeLink() }}

    <wireui:scripts />
    <script
        defer
        src="{{
        route('shopper.asset', [
            'id' => get_asset_id('shopper.js'),
            'file' => 'shopper.js',
        ])
    }}"
    ></script>

    @include('shopper::includes._additional-styles')
    @stack('scripts')
</head>
<body x-keypress {{ $attributes->merge(['class' => 'bg-white font-sans dark:bg-gray-950']) }}>

    {{ $slot }}

    <x-shopper::alert />

    <div id="ui-modal">
        @livewire('livewire-ui-modal')
    </div>

    @livewire('notifications')

    <livewire:scripts />
    @include('shopper::includes._additional-scripts')

</body>
</html>
