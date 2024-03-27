<x-shopper::container>
    <x-shopper::breadcrumb :back="route('shopper.products.index')">
        <x-untitledui-chevron-left class="shrink-0 h-4 w-4 text-gray-300 dark:text-gray-600" />
        <x-shopper::breadcrumb.link :link="route('shopper.products.index')" :title="__('shopper::layout.sidebar.products')" />
    </x-shopper::breadcrumb>

    <x-shopper::heading class="mt-5">
        <x-slot name="title">
            {{ __('shopper::words.attributes') }}
        </x-slot>

        <x-slot name="action">
            @if($total > 0)
                @can('add_attributes')
                    <div class="flex space-x-3">
                        <span class="shadow-sm rounded-md">
                            <x-shopper::buttons.primary :link="route('shopper.attributes.create')">
                                {{ __('shopper::layout.forms.actions.create') }}
                            </x-shopper::buttons.primary>
                        </span>
                    </div>
                @endcan
            @endif
        </x-slot>
    </x-shopper::heading>

    @if($total === 0)
        <x-shopper::empty-state
            :title="__('shopper::pages/attributes.title')"
            :content="__('shopper::pages/attributes.content')"
            :button="__('shopper::pages/attributes.add')"
            permission="add_attributes"
            :url="route('shopper.attributes.create')"
        >
            <div class="shrink-0">
                <svg class="w-auto h-64 lg:h-auto" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 250">
                    <style>
                        .st1{fill:#263238}.st2{fill:#1c64f2}.st5{fill-rule:evenodd;clip-rule:evenodd;fill:#fff}.st6{fill:#252f3f}.st7{fill:#57a4ff}.st8{fill:#004fac}.st9{fill:#fcd462}
                    </style>
                    <path d="M294.9 90.3c-3.4-25-5.7-43.6-16.6-56.3-10.9-12.7-26.6-21.3-49.6-21.7-25-.5-38.9 16.7-47.6 31-11 17.9-7.1 43.4-21.8 58.4-8.5 8.8-21.3 11.7-33.4 13.3-12.1 1.6-24.7 2.2-35.6 7.8C70 133.3 61.2 160 67.9 181.9c6.7 21.9 26.3 38.3 48.1 45.2 21.8 6.9 62.3 15.4 84.6 10.3 33.8-2.9 64.1-22.6 79.8-52.7 1.1-2 2.1-4.1 3-6.1 12.2-27.1 15.5-58.8 11.5-88.3z" fill="#e1effe" id="Background_Simple"/>
                    <path class="st1" d="M310.5 250.3c0 .1-67.9.2-151.7.2-83.8 0-151.7-.1-151.7-.2s67.9-.2 151.7-.2c83.8.1 151.7.1 151.7.2z" id="Desk"/>
                    <g id="Features">
                        <path class="st2" d="M156.6 147.7l-28.3-1.2v-26.3h28.3z"/>
                        <path class="st2" d="M139.5 112.6h28.4V139h-28.4z"/>
                        <path class="st2" d="M156.6 146.5l11.3-7.5v-26.4l-11.3 7.6z"/>
                        <path class="st2" d="M128.3 120.2l11.2-7.6h28.4l-11.3 7.6z"/>
                        <path class="st2" d="M156.6 147.7l11.3-8.7v-26.4l-11.3 7.6z"/>
                        <path opacity=".3" fill="#fff" d="M128.3 120.2l11.2-7.6h28.4l-11.3 7.6z"/>
                        <path opacity=".4" d="M156.6 147.7l11.3-8.7v-26.4l-11.3 7.6z"/>
                        <path class="st2" d="M171.9 140c.1 0 .2.7.2 1.6-.1.3 0 .1-.1.1h-.1l-.1.1c-.1.1-.2.1-.3.2-.2.1-.3.2-.4.3-.3.1-.4.2-.5.2 0 0 .1-.2.3-.4.1-.1.2-.2.4-.3.1-.1.2-.1.2-.2l.1-.1h.1c0 .1.1-.1-.1.1.1-.9.2-1.6.3-1.6zm0-6.7c.1 0 .2.7.2 1.7 0 .9-.1 1.7-.2 1.7s-.2-.7-.2-1.7c0-.9.1-1.7.2-1.7zm0-6.6c.1 0 .2.7.2 1.7 0 .9-.1 1.7-.2 1.7s-.2-.7-.2-1.7.1-1.7.2-1.7zm0-6.7c.1 0 .2.7.2 1.7 0 .9-.1 1.7-.2 1.7s-.2-.7-.2-1.7c0-.9.1-1.7.2-1.7zm0-6.6c.1 0 .2.7.2 1.7 0 .9-.1 1.7-.2 1.7s-.2-.7-.2-1.7.1-1.7.2-1.7zm-1.7-4.9c0-.1.7-.2 1.7-.2l.2.2v1.1c0 .3-.1.5-.1.5s-.1-.2-.1-.5v-1.1l.2.2c-1.2-.1-1.9-.1-1.9-.2zm-6.4 0c0-.1.7-.2 1.6-.2.9 0 1.6.1 1.6.2s-.7.2-1.6.2c-.9-.1-1.6-.1-1.6-.2zm-6.4 0c0-.1.7-.2 1.6-.2.9 0 1.6.1 1.6.2s-.7.2-1.6.2c-.9-.1-1.6-.1-1.6-.2zm-6.5 0c0-.1.7-.2 1.6-.2.9 0 1.6.1 1.6.2s-.7.2-1.6.2c-.8-.1-1.6-.1-1.6-.2zm-6.4 0c0-.1.7-.2 1.6-.2.9 0 1.6.1 1.6.2s-.7.2-1.6.2c-.8-.1-1.6-.1-1.6-.2zm-6.2.3s.1-.2.4-.4h1.1c.9 0 1.6.1 1.6.2s-.7.2-1.6.2h-1 .1c-.4 0-.6.1-.6 0zm-5 3.8c-.1-.1.4-.6 1.1-1.1.7-.5 1.3-.9 1.3-.8.1.1-.4.6-1.1 1.1-.6.5-1.2.9-1.3.8zm-4.9 3.8c-.1-.1.4-.6 1.1-1.1.7-.5 1.3-.9 1.3-.8.1.1-.4.6-1.1 1.1-.6.5-1.2.9-1.3.8zm-3.8 4.5c-.1 0-.2-.7-.2-1.6.1-.2 0-.1.1-.1h.1l.1-.1c.1-.1.2-.1.2-.2.2-.1.3-.2.4-.3.3-.2.4-.2.5-.2 0 0-.1.2-.3.4-.1.1-.2.2-.4.3-.1.1-.2.1-.2.2l-.1.1-.1.1c0-.1-.1.1.1-.1 0 .8-.1 1.5-.2 1.5zm0 6.1c-.1 0-.2-.7-.2-1.5 0-.9.1-1.5.2-1.5s.2.7.2 1.5c-.1.9-.1 1.5-.2 1.5zm-.1 6.2c-.1 0-.2-.7-.2-1.5 0-.9.1-1.5.2-1.5s.2.7.2 1.5-.1 1.5-.2 1.5zm-.1 6.2c-.1 0-.2-.7-.2-1.5 0-.9.1-1.5.2-1.5s.2.7.2 1.5-.1 1.5-.2 1.5zm0 6.1c-.1 0-.2-.7-.2-1.5 0-.9.1-1.5.2-1.5s.2.7.2 1.5c0 .9-.1 1.5-.2 1.5zm1.6 4.7c0 .1-.8.2-1.7.1l-.2-.2V149c0-.3.1-.5.1-.5s.1.2.1.5v1.1l-.2-.2c1.1.1 1.9.2 1.9.3zm6.3.1c0 .1-.7.2-1.6.1-.9 0-1.6-.1-1.6-.2s.7-.2 1.6-.1c.9 0 1.6.1 1.6.2zm6.4.1c0 .1-.7.2-1.6.1-.9 0-1.6-.1-1.6-.2s.7-.2 1.6-.1c.8 0 1.6.1 1.6.2zm6.3.1c0 .1-.7.2-1.6.1-.9 0-1.6-.1-1.6-.2s.7-.2 1.6-.1c.9 0 1.6.1 1.6.2zm6.3.1c0 .1-.7.2-1.6.1-.9 0-1.6-.1-1.6-.2s.7-.2 1.6-.1c.9 0 1.6.1 1.6.2zm6.4.1c0 .1-.7.2-1.6.1-.9 0-1.6-.1-1.6-.2s.7-.2 1.6-.1c.8 0 1.6.1 1.6.2zm5.2-2.9c.1.1-.5.5-1.2 1s-1.3.8-1.4.8c-.1-.1.5-.5 1.2-1 .8-.5 1.4-.8 1.4-.8zm5.1-3.5c.1.1-.5.5-1.2 1s-1.3.8-1.4.8c-.1-.1.5-.5 1.2-1 .7-.6 1.3-.9 1.4-.8zm-3.8-38c.1 0 .1.4 0 .8s-.3.7-.4.7c-.1 0-.1-.4 0-.8s.3-.7.4-.7zm1.5-6.3c.1 0 0 .7-.2 1.6-.2.9-.5 1.6-.6 1.5-.1 0 0-.7.2-1.6.2-.8.5-1.5.6-1.5zm1.5-6.3c.1 0 0 .7-.2 1.6-.2.9-.5 1.6-.6 1.5-.1 0 0-.7.2-1.6.3-.8.5-1.5.6-1.5zm1.6-6.3c.1 0 0 .7-.2 1.6-.2.9-.5 1.6-.6 1.5-.1 0 0-.7.2-1.6.2-.9.5-1.6.6-1.5zm1.5-6.4c.1 0 0 .7-.2 1.6-.2.9-.5 1.6-.6 1.5-.1 0 0-.7.2-1.6.2-.8.5-1.5.6-1.5zm1.5-6.3c.1 0 0 .7-.2 1.6-.2.9-.5 1.6-.6 1.5-.1 0 0-.7.2-1.6.3-.8.5-1.5.6-1.5zM173 70c.1 0 .1.4 0 .8s-.3.7-.4.7c-.1 0-.1-.4 0-.8.1-.3.3-.7.4-.7z"/>
                        <path class="st2" d="M138 107.1c.1 0 .3.2.5.6.2.4.3.7.2.8-.1 0-.3-.2-.5-.6-.2-.4-.3-.8-.2-.8zm-3-5.4c.1 0 .5.5.9 1.3.4.7.7 1.4.6 1.4-.1 0-.5-.5-.9-1.3s-.7-1.4-.6-1.4zm-2.9-5.4c.1 0 .5.5.9 1.3.4.7.7 1.4.6 1.4-.1 0-.5-.5-.9-1.3s-.7-1.4-.6-1.4zm-2.9-5.5c.1 0 .5.5.9 1.3.4.7.7 1.4.6 1.4-.1 0-.5-.5-.9-1.3-.5-.7-.7-1.3-.6-1.4zm-3-5.4c.1 0 .5.5.9 1.3.4.7.7 1.4.6 1.4-.1 0-.5-.5-.9-1.3-.4-.7-.6-1.3-.6-1.4zm-2.9-5.4c.1 0 .5.5.9 1.3.4.7.7 1.4.6 1.4-.1 0-.5-.5-.9-1.3-.4-.7-.7-1.3-.6-1.4zm-2.9-5.4c.1 0 .5.5.9 1.3.4.7.7 1.4.6 1.4-.1 0-.5-.5-.9-1.3-.4-.7-.7-1.3-.6-1.4zm-2.9-5.4c.1 0 .5.5.9 1.3.4.7.7 1.4.6 1.4-.1 0-.5-.5-.9-1.3-.5-.7-.7-1.4-.6-1.4zm-2.3-4.1c.1 0 .3.2.5.6.2.4.3.7.2.8-.1 0-.3-.2-.5-.6-.2-.4-.2-.8-.2-.8zm-29.6 51.4c0 .1-.4.1-.8.1-.5 0-.8-.1-.8-.2s.4-.1.8-.1c.5 0 .8.1.8.2zm6.8.5c0 .1-.8.1-1.7 0-.9-.1-1.7-.2-1.7-.3 0-.1.8-.1 1.7 0 1 .1 1.7.2 1.7.3zm6.8.5c0 .1-.8.1-1.7 0-.9-.1-1.7-.2-1.7-.3 0-.1.8-.1 1.7 0 1 .1 1.7.2 1.7.3zm6.8.5c0 .1-.8.1-1.7 0-.9-.1-1.7-.2-1.7-.3 0-.1.8-.1 1.7 0 1 .1 1.7.2 1.7.3zm6.8.5c0 .1-.8.1-1.7 0-.9-.1-1.7-.2-1.7-.3 0-.1.8-.1 1.7 0 .9 0 1.7.2 1.7.3zm6.8.5c0 .1-.8.1-1.7 0-.9-.1-1.7-.2-1.7-.3 0-.1.8-.1 1.7 0 .9 0 1.7.2 1.7.3zm5 .3c0 .1-.4.1-.8.1-.5 0-.8-.1-.8-.2s.4-.1.8-.1c.5 0 .9.1.8.2z"/>
                        <ellipse class="st5" cx="101.4" cy="42" rx="29.4" ry="27.4"/>
                        <path class="st2" d="M130.8 42v-.4c0-.3 0-.7-.1-1.3 0-.3 0-.6-.1-1 0-.4-.1-.7-.2-1.1-.1-.4-.1-.9-.2-1.3-.1-.5-.3-1-.4-1.5-.5-2.1-1.6-4.6-3.3-7.3-1.7-2.6-4.1-5.4-7.5-7.7-.4-.3-.8-.6-1.3-.9-.4-.3-.9-.5-1.4-.8-.5-.3-.9-.6-1.4-.8-.5-.2-1-.5-1.5-.7-.3-.1-.5-.2-.8-.3-.3-.1-.5-.2-.8-.3-.5-.2-1.1-.4-1.6-.6-.6-.2-1.1-.3-1.7-.4-.6-.1-1.2-.3-1.8-.4-1.2-.2-2.4-.4-3.7-.4-.6 0-1.3-.1-1.9-.1-.6 0-1.3.1-1.9.1-.3 0-.7 0-1 .1-.3 0-.6.1-1 .1-.7.1-1.3.2-2 .3-1.3.3-2.6.6-3.9 1.1-1.3.4-2.5 1-3.8 1.6-.6.3-1.2.7-1.8 1-.3.2-.6.3-.9.5l-.8.6c-1.2.8-2.2 1.7-3.3 2.6l-1.5 1.5-.4.4-.3.4-.7.8-.7.8-.6.9-.5 1-.3.5-.3.5c-.3.6-.7 1.3-1 1.9-.3.7-.5 1.3-.8 2-1 2.7-1.5 5.6-1.5 8.6s.6 5.9 1.5 8.6c.3.7.5 1.3.8 2 .3.6.7 1.3 1 1.9l.2.5.3.5.6.9.6.9.7.8.7.8.3.4.4.4 1.5 1.5c1.1.9 2.1 1.9 3.3 2.6l.9.6c.3.2.6.4.9.5.6.3 1.2.7 1.8 1 1.3.6 2.5 1.2 3.8 1.6 1.3.5 2.6.7 3.9 1.1.7.1 1.3.2 2 .3.3 0 .7.1 1 .1.3 0 .7 0 1 .1.7 0 1.3.1 1.9.1.6 0 1.3 0 1.9-.1 1.3 0 2.5-.2 3.7-.4.6-.1 1.2-.3 1.8-.4.6-.1 1.2-.3 1.7-.4.6-.2 1.1-.4 1.6-.6.3-.1.5-.2.8-.3.3-.1.5-.2.8-.3.5-.2 1-.5 1.5-.7.5-.2 1-.5 1.4-.8.5-.3.9-.5 1.4-.8.4-.3.8-.6 1.3-.9 3.3-2.3 5.8-5.1 7.5-7.7 1.7-2.6 2.7-5.1 3.3-7.3.1-.5.3-1 .4-1.5.1-.5.2-.9.2-1.3.1-.4.1-.8.2-1.1 0-.4 0-.7.1-1 0-.6.1-1 .1-1.3-.1-.2-.1-.3-.1-.3v.4c0 .3 0 .7-.1 1.3v1c0 .4-.1.7-.2 1.1-.1.4-.1.9-.2 1.3-.1.5-.2 1-.4 1.5-.5 2.1-1.5 4.6-3.2 7.3-1.7 2.7-4.1 5.5-7.5 7.8-.4.3-.8.6-1.3.9-.4.3-.9.5-1.4.8-.5.3-.9.6-1.4.8-.5.2-1 .5-1.5.7-.3.1-.5.2-.8.3-.3.1-.5.2-.8.3-.5.2-1.1.4-1.7.6-.6.2-1.2.3-1.7.4-.6.1-1.2.3-1.8.4-1.2.2-2.5.4-3.7.4-.6 0-1.3.1-1.9.1-.6 0-1.3-.1-2-.1-.3 0-.7 0-1-.1-.3 0-.7-.1-1-.1-.7-.1-1.3-.2-2-.3-1.3-.3-2.7-.6-3.9-1.1-1.3-.4-2.6-1-3.9-1.6-.6-.3-1.2-.7-1.8-1-.3-.2-.6-.3-.9-.5l-.9-.6c-1.2-.8-2.3-1.7-3.4-2.7l-1.5-1.5-.4-.4-.3-.4-.7-.8-.7-.8-.6-.9-.6-.9-.3-.5-.3-.5c-.3-.6-.7-1.3-1-1.9-.3-.7-.5-1.4-.8-2-1-2.8-1.5-5.7-1.5-8.7 0-3 .6-5.9 1.5-8.7.3-.7.5-1.4.8-2 .3-.6.7-1.3 1-1.9l.3-.5.3-.5.6-.9.6-.9.7-.8.7-.8.3-.4.5-.6 1.5-1.5c1.1-.9 2.2-1.9 3.4-2.7l.9-.6c.3-.2.6-.4.9-.5.6-.3 1.2-.7 1.8-1 1.3-.6 2.5-1.2 3.9-1.6 1.3-.5 2.6-.7 3.9-1.1.7-.1 1.3-.2 2-.3.3 0 .7-.1 1-.1.3 0 .7 0 1-.1.7 0 1.3-.1 2-.1.6 0 1.3.1 1.9.1 1.3 0 2.5.2 3.7.4.6.1 1.2.3 1.8.4.6.1 1.2.3 1.7.4.6.2 1.1.4 1.7.6.3.1.5.2.8.3.3.1.5.2.8.3.5.2 1 .5 1.5.7.5.2 1 .5 1.4.8.5.3.9.5 1.4.8.4.3.9.6 1.3.9 3.3 2.4 5.8 5.2 7.5 7.8 1.7 2.7 2.7 5.2 3.2 7.3.1.5.3 1 .4 1.5.1.5.1.9.2 1.3s.1.8.2 1.1v1c0 .6 0 1 .1 1.3-.1.4-.1.6-.1.6z"/>
                        <path class="st6" d="M112.9 30.1H89.5c-.2 0-.4.2-.4.4v6.6c0 .2.2.4.4.4s.4-.2.4-.4v-2.3l2.4 2.4-2.4 2.4v-1.1c0-.2-.2-.4-.4-.4s-.4.2-.4.4V54c0 .2.2.4.4.4H113c.2 0 .4-.2.4-.4V30.6c0-.3-.2-.5-.5-.5zm-1.1.9l-2.3 2.3-2.3-2.3h4.6zm-6.7 0l-2.3 2.3-2.3-2.3h4.6zm-1.6 4.2c.2.2.5.2.6 0 .2-.2.2-.5 0-.6l-.7-.7 2.7-2.7 6.1 6.1-2.7 2.7-4.4-4.4c-.2-.2-.5-.2-.6 0-.2.2-.2.5 0 .6l1 1-2.7 2.7-6.1-6.1 2.7-2.7 4.1 4.1zm-1.3 5.4l-6.1 6.1-2.6-2.7 6.1-6.1 2.6 2.7zM98.5 31l-2.3 2.3-2.3-2.3h4.6zm-8.6 0h2l-2 2v-2zm.3 2.9l2.7-2.7 6.1 6.1-2.8 2.7-6-6.1zm-.3 7l3-3 2.7 2.7-5.7 5.7v-5.4zm0 7.4l2.4 2.4-2.4 2.3v-4.7zm.7 5.3l2.3-2.3 2.3 2.3h-4.6zm-.4-6.3l2.7-2.7 6.1 6.1-2.7 2.7-6.1-6.1zm7 6.3l2.3-2.3 2.3 2.3h-4.6zm-.4-6.3l2.7-2.7 6.1 6.1-2.7 2.7-6.1-6.1zm7.1 6.3l2.3-2.3 2.3 2.3h-4.6zm-.5-6.3l.9-.9c.2-.2.2-.5 0-.6-.2-.2-.5-.2-.6 0l-.9.9-2.7-2.7 6.1-6.1 2.7 2.7-4.3 4.3c-.2.2-.2.5 0 .6.2.2.5.2.6 0l.9-.9 6.1 6.1-2.7 2.7-6.1-6.1zm9.1 6.3h-2l2-2v2zm0-3.9l-2.4-2.4 2.4-2.4v4.8zm0-6l-3 3-2.7-2.7 5.7-5.7v5.4zm0-7.4l-2.4-2.4 2.4-2.4v4.8z"/>
                        <ellipse class="st5" cx="181.8" cy="44.7" rx="29.4" ry="27.4"/>
                        <path class="st2" d="M211.3 44.7v-.4c0-.3 0-.7-.1-1.3 0-.3 0-.6-.1-1 0-.4-.1-.7-.2-1.1-.1-.4-.1-.9-.2-1.3-.1-.5-.3-1-.4-1.5-.5-2.1-1.6-4.6-3.3-7.3-1.7-2.6-4.1-5.4-7.5-7.7-.4-.3-.8-.6-1.3-.9-.4-.3-.9-.5-1.4-.8-.5-.3-.9-.6-1.4-.8-.5-.2-1-.5-1.5-.7-.3-.1-.5-.2-.8-.3-.3-.1-.5-.2-.8-.3-.5-.2-1.1-.4-1.6-.6-.6-.2-1.1-.3-1.7-.4-.6-.1-1.2-.3-1.8-.4-1.2-.2-2.4-.4-3.7-.4-.6 0-1.3-.1-1.9-.1-.6 0-1.3.1-1.9.1-.3 0-.7 0-1 .1-.3 0-.6.1-1 .1-.7.1-1.3.2-2 .3-1.3.3-2.6.6-3.9 1.1-1.3.4-2.5 1-3.8 1.6-.6.3-1.2.7-1.8 1-.3.2-.6.3-.9.5l-.9.6c-1.2.8-2.2 1.7-3.3 2.6l-1.5 1.5-.4.4-.3.4-.7.8-.7.8-.6.9-.6.9-.3.5-.3.5c-.3.6-.7 1.3-1 1.9-.3.7-.5 1.3-.8 2-1 2.7-1.5 5.6-1.5 8.6s.6 5.9 1.5 8.6c.3.7.5 1.3.8 2 .3.6.7 1.3 1 1.9l.2.5.3.5.8.9.6.9.7.8.7.8.3.4.4.4 1.5 1.5c1.1.9 2.1 1.9 3.3 2.6l.9.6c.3.2.6.4.9.5.6.3 1.2.7 1.8 1 1.3.6 2.5 1.2 3.8 1.6 1.3.5 2.6.7 3.9 1.1.7.1 1.3.2 2 .3.3 0 .7.1 1 .1.3 0 .7 0 1 .1.7 0 1.3.1 1.9.1.6 0 1.3 0 1.9-.1 1.3 0 2.5-.2 3.7-.4.6-.1 1.2-.3 1.8-.4.6-.1 1.2-.3 1.7-.4.6-.2 1.1-.4 1.6-.6.3-.1.5-.2.8-.3.3-.1.5-.2.8-.3.5-.2 1-.5 1.5-.7.5-.2 1-.5 1.4-.8.5-.3.9-.5 1.4-.8.4-.3.8-.6 1.3-.9 3.3-2.3 5.8-5.1 7.5-7.7 1.7-2.6 2.7-5.1 3.3-7.3.1-.5.3-1 .4-1.5.1-.5.2-.9.2-1.3.1-.4.1-.8.2-1.1 0-.4 0-.7.1-1 0-.6.1-1 .1-1.3-.1-.1-.1-.2-.1-.2v.4c0 .3 0 .7-.1 1.3v1c0 .4-.1.7-.2 1.1-.1.4-.1.9-.2 1.3-.1.5-.2 1-.4 1.5-.5 2.1-1.5 4.6-3.2 7.3-1.7 2.7-4.1 5.5-7.5 7.8-.4.3-.8.6-1.3.9-.4.3-.9.5-1.4.8-.5.3-.9.6-1.4.8-.5.2-1 .5-1.5.7-.3.1-.5.2-.8.3-.3.1-.5.2-.8.3-.5.2-1.1.4-1.7.6-.6.2-1.2.3-1.7.4-.6.1-1.2.3-1.8.4-1.2.2-2.5.4-3.7.4-.6 0-1.3.1-1.9.1-.6 0-1.3-.1-2-.1-.3 0-.7 0-1-.1-.3 0-.7-.1-1-.1-.7-.1-1.3-.2-2-.3-1.3-.3-2.7-.6-3.9-1.1-1.3-.4-2.6-1-3.9-1.6-.6-.3-1.2-.7-1.8-1-.3-.2-.6-.3-.9-.5l-.9-.6c-1.2-.8-2.3-1.7-3.4-2.7l-1.5-1.5-.4-.4-.3-.4-.7-.8-.7-.8-.6-.9-.6-.9-.3-.5-.3-.5c-.3-.6-.7-1.3-1-1.9-.3-.7-.5-1.4-.8-2-1-2.8-1.5-5.7-1.5-8.7 0-3 .6-5.9 1.5-8.7.3-.7.5-1.4.8-2 .3-.6.7-1.3 1-1.9l.3-.5.3-.5.6-.9.6-.9.7-.8.7-.8.3-.4.4-.4 1.5-1.5c1.1-.9 2.2-1.9 3.4-2.7l.9-.6c.3-.2.6-.4.9-.5.6-.3 1.2-.7 1.8-1 1.3-.6 2.5-1.2 3.9-1.6 1.3-.5 2.6-.7 3.9-1.1.7-.1 1.3-.2 2-.3.3 0 .7-.1 1-.1.3 0 .7 0 1-.1.7 0 1.3-.1 2-.1.6 0 1.3.1 1.9.1 1.3 0 2.5.2 3.7.4.6.1 1.2.3 1.8.4.6.1 1.2.3 1.7.4.6.2 1.1.4 1.7.6.3.1.5.2.8.3.3.1.5.2.8.3.5.2 1 .5 1.5.7.5.2 1 .5 1.4.8.5.3.9.5 1.4.8.4.3.9.6 1.3.9 3.3 2.4 5.8 5.2 7.5 7.8 1.7 2.7 2.7 5.2 3.2 7.3.1.5.3 1 .4 1.5.1.5.1.9.2 1.3s.1.8.2 1.1v1c0 .6 0 1 .1 1.3v.4z"/>
                        <path class="st7" d="M170.4 33.2h1.8V35h-1.8v-1.8zm0 21.1h1.8v1.8h-1.8v-1.8zm16.7-15.8V42h-.8l-.5-1.8h-3.1v9.2l1.8.4v.9h-5.3v-.9l1.8-.4v-9.2h-3.1l-.5 1.8h-.8v-3.5h10.5zm4.4-5.3h1.8V35h-1.8v-1.8zm0 21.1h1.8v1.8h-1.8v-1.8z"/>
                        <path class="st7" d="M168.7 31.5h3.5V35h-3.5v-3.5zm0 22.8h3.5v3.5h-3.5v-3.5zm22.8-22.8h3.5V35h-3.5v-3.5zm0 22.8h3.5v3.5h-3.5v-3.5zm-4.4-15.8V42h-.8l-.5-1.8h-3.1v9.2l1.8.4v.9h-5.3v-.9l1.8-.4v-9.2h-3.1l-.5 1.8h-.8v-3.5h10.5z"/>
                        <path class="st8" d="M195 35.4c.2 0 .4-.2.4-.4v-3.5c0-.2-.2-.4-.4-.4h-3.5c-.2 0-.4.2-.4.4v1.3h-18.5v-1.3c0-.2-.2-.4-.4-.4h-3.5c-.2 0-.4.2-.4.4V35c0 .2.2.4.4.4h1.3v18.5h-1.3c-.2 0-.4.2-.4.4v3.5c0 .2.2.4.4.4h3.5c.2 0 .4-.2.4-.4v-1.3h18.5v1.3c0 .2.2.4.4.4h3.5c.2 0 .4-.2.4-.4v-3.5c0-.2-.2-.4-.4-.4h-1.3V35.4h1.3zm-25.9-.8V32h2.6v2.6h-2.6zm2.6 22.8h-2.6v-2.6h2.6v2.6zm19.4-3.1v1.3h-18.5v-1.3c0-.2-.2-.4-.4-.4h-1.3V35.4h1.3c.2 0 .4-.2.4-.4v-1.3h18.5V35c0 .2.2.4.4.4h1.3v18.5h-1.3c-.2 0-.4.2-.4.4zm3.5.5v2.6H192v-2.6h2.6zM192 34.6V32h2.6v2.6H192z"/>
                        <path class="st8" d="M187.1 38.1h-10.5c-.2 0-.4.2-.4.4V42c0 .2.2.4.4.4h.8c.2 0 .4-.1.4-.3l.4-1.4h2.3v8.4l-1.4.4c-.2 0-.3.2-.3.4v.9c0 .2.2.4.4.4h5.3c.2 0 .4-.2.4-.4v-.9c0-.2-.1-.4-.3-.4l-1.4-.4v-8.4h2.3l.4 1.4c.1.2.2.3.4.3h.8c.2 0 .4-.2.4-.4v-3.5c.1-.2-.1-.4-.4-.4zm-.4 3.5l-.5-1.4c-.1-.2-.2-.3-.4-.3h-3.1c-.2 0-.4.2-.4.4v9.2c0 .2.1.4.3.4l1.4.4v.1h-4.4v-.1l1.4-.4c.2 0 .3-.2.3-.4v-9.2c0-.2-.2-.4-.4-.4h-3.1c-.2 0-.4.1-.4.3l-.4 1.4V39h9.7v2.6zm.9 10.5h-11.4c-.2 0-.4.2-.4.4s.2.4.4.4h11.4c.2 0 .4-.2.4-.4s-.2-.4-.4-.4zm-4 1.4h-3.5c-.2 0-.4.2-.4.4s.2.4.4.4h3.5c.2 0 .4-.2.4-.4s-.2-.4-.4-.4z"/>
                        <path class="st2" d="M173.4 127.8c0 .1-.3.2-.7.3-.4.1-.8 0-.8-.1s.3-.2.7-.3c.4 0 .7 0 .8.1zm6.4-.9c0 .1-.7.3-1.6.4-.9.1-1.6.1-1.6 0s.7-.3 1.6-.4c.9-.1 1.6-.1 1.6 0zm6.4-.9c0 .1-.7.3-1.6.4-.9.1-1.6.1-1.6 0s.7-.3 1.6-.4c.9-.1 1.6-.1 1.6 0zm6.5-.9c0 .1-.7.3-1.6.4-.9.1-1.6.1-1.6 0s.7-.3 1.6-.4c.8 0 1.6-.1 1.6 0zm6.4-.8c0 .1-.7.3-1.6.4-.9.1-1.6.1-1.6 0s.7-.3 1.6-.4c.9-.1 1.6-.1 1.6 0zm6.5-.9c0 .1-.7.3-1.6.4-.9.1-1.6.1-1.6 0s.7-.3 1.6-.4c.8-.1 1.6-.1 1.6 0zm4.7-.7c0 .1-.3.2-.7.3-.4.1-.8 0-.8-.1s.3-.2.7-.3c.5 0 .8 0 .8.1z"/>
                        <ellipse transform="rotate(-21.424 237.24 121.72)" class="st5" cx="237.2" cy="121.7" rx="27.4" ry="29.4"/>
                        <path class="st2" d="M248 149.1s.1-.1.4-.2c.3-.1.7-.3 1.2-.6.3-.1.5-.3.9-.4.3-.2.6-.4 1-.6.4-.2.7-.4 1.2-.7.4-.2.8-.6 1.2-.9 1.8-1.3 3.7-3.2 5.6-5.7 1.8-2.5 3.5-5.8 4.5-9.8.1-.5.2-1 .4-1.5.1-.5.2-1 .2-1.6.1-.5.2-1.1.2-1.6s.1-1.1.1-1.7v-1.7c0-.6-.1-1.2-.1-1.7 0-.6-.2-1.2-.2-1.8-.1-.6-.1-1.2-.3-1.8-.3-1.2-.5-2.4-1-3.6l-.6-1.8c-.3-.6-.5-1.2-.8-1.8-.1-.3-.3-.6-.4-.9-.2-.3-.3-.6-.5-.9-.3-.6-.6-1.2-1-1.7-.8-1.1-1.5-2.2-2.4-3.2-.8-1.1-1.9-2-2.8-3-.5-.5-1.1-.9-1.6-1.3-.3-.2-.5-.5-.8-.6l-.9-.6c-1.1-.8-2.4-1.5-3.7-2.1-.7-.3-1.3-.6-2-.8l-.5-.2-.5-.2-1-.3-1-.3-1-.2-1.1-.2-.5-.1-.5-.1c-.7-.1-1.4-.1-2.1-.2h-2.2c-2.9.1-5.8.7-8.5 1.7-2.7 1.1-5.2 2.7-7.4 4.5-.5.5-1.1 1-1.6 1.5s-1 1.1-1.4 1.6l-.4.4-.3.4-.6.9-.6.9-.5.9-.5.9-.3.5-.2.5c-.3.7-.6 1.3-.9 1.9-.5 1.3-1 2.7-1.2 4l-.2 1c-.1.3-.1.7-.2 1l-.3 2.1c-.1 1.4-.2 2.8-.1 4.1 0 1.4.3 2.7.4 4 .1.7.3 1.3.4 1.9.1.3.2.6.2 1l.3.9.6 1.8c.2.6.5 1.2.8 1.8.5 1.2 1.1 2.2 1.7 3.3.3.5.7 1 1 1.5.3.5.7 1 1 1.4.4.4.8.9 1.1 1.3.2.2.4.4.6.7l.6.6 1.2 1.2c.4.4.8.7 1.2 1 .4.3.8.7 1.2 1 .4.3.9.6 1.3.9 3.4 2.2 6.8 3.5 9.9 4.1 3.1.6 5.8.7 7.9.4.5-.1 1.1-.1 1.5-.2.5-.1.9-.2 1.3-.3.4-.1.8-.2 1.1-.2l.9-.3c.5-.2 1-.3 1.2-.4.2.3.4.2.4.2s-.1.1-.4.2c-.3.1-.7.2-1.2.4l-.9.3c-.3.1-.7.2-1.1.3-.4.1-.9.2-1.3.3-.5.1-1 .1-1.5.2-2.2.3-4.9.3-8-.3-3.1-.6-6.6-1.9-10-4.1-.4-.3-.9-.6-1.3-.9-.4-.3-.8-.7-1.2-1-.4-.4-.9-.7-1.3-1.1l-1.2-1.2-.6-.6c-.2-.2-.4-.4-.6-.7-.4-.4-.8-.9-1.1-1.3-.4-.5-.7-1-1-1.5-.3-.5-.7-1-1-1.5-.6-1.1-1.3-2.1-1.7-3.3-.3-.6-.5-1.2-.8-1.8-.2-.6-.4-1.2-.6-1.9l-.3-.9c-.1-.3-.2-.6-.2-1-.1-.6-.3-1.3-.5-2-.2-1.3-.4-2.7-.4-4.1-.1-1.4 0-2.8.1-4.2l.3-2.1c.1-.3.1-.7.2-1l.2-1c.3-1.4.8-2.7 1.2-4.1.3-.7.6-1.3.9-2l.2-.5.3-.5.5-.9.5-.9.6-.9.6-.9.3-.4.4-.4c.5-.5 1-1.1 1.4-1.6.5-.5 1.1-1 1.6-1.5 2.2-1.9 4.8-3.5 7.5-4.6 2.8-1.1 5.7-1.6 8.6-1.7h2.2c.7.1 1.5.2 2.2.2l.5.1.5.1 1.1.2 1.1.2 1 .3 1 .3.5.2.5.2c.7.3 1.3.6 2 .8 1.3.7 2.5 1.3 3.7 2.2l.9.6c.3.2.6.4.8.7.5.5 1.1.9 1.6 1.3 1 1 2 1.9 2.9 3 .9 1 1.7 2.2 2.4 3.3.4.6.7 1.2 1 1.7.2.3.3.6.5.9.2.3.3.6.4.9.3.6.5 1.2.8 1.8l.6 1.8c.5 1.2.7 2.4 1 3.6.2.6.2 1.2.3 1.8.1.6.2 1.2.2 1.8 0 .6.1 1.2.1 1.8v1.8c0 .6-.1 1.1-.1 1.7 0 .6-.1 1.1-.2 1.6s-.1 1.1-.2 1.6-.2 1-.4 1.5c-1 4-2.7 7.3-4.6 9.8-1.9 2.5-3.8 4.4-5.6 5.7-.4.3-.8.7-1.3.9-.4.2-.8.5-1.2.7-.4.2-.7.4-1 .6-.3.1-.6.3-.9.4-.5.2-.9.4-1.2.5-.2.1-.3.1-.3.1z"/>
                        <path class="st9" d="M237.5 126.9c0-.1 0-.1 0 0v-8.3H219v8.5c.4 1.5 4.4 2.7 9.2 2.7s8.8-1.2 9.2-2.7l.1-.2z"/>
                        <path d="M237.5 126.8v-8.2h-9.2v11.2c4.8 0 8.8-1.2 9.2-2.7v-.3c0 .1 0 .1 0 0z" fill="#e5aa4a"/>
                        <path class="st9" d="M258.8 129.8h-30.7l-1.2-8.2h31.9v8.2z"/>
                        <path d="M228.1 122.8h.5v3h-.5v-3zm1.8 0h.5v1.6h-.5v-1.6zm1.9 0h.5v3h-.5v-3zm1.8 0h.5v1.6h-.5v-1.6zm1.9 0h.5v3h-.5v-3zm1.8 0h.5v1.6h-.5v-1.6zm1.9 0h.5v3h-.5v-3zm1.8 0h.5v1.6h-.5v-1.6zm1.9 0h.5v3h-.5v-3zm1.7 0h.5v1.6h-.5v-1.6zm2 0h.5v3h-.5v-3zm1.7 0h.5v1.6h-.5v-1.6zm2 0h.5v3h-.5v-3zm1.7 0h.5v1.6h-.5v-1.6zm2 0h.5v3h-.5v-3z" fill="#4d5c7d"/>
                        <ellipse cx="228.2" cy="118.6" rx="9.3" ry="3" fill="#f7be56"/>
                        <ellipse cx="228.2" cy="118.6" rx="5.4" ry="1.7" fill="#dc8744"/>
                        <path d="M259.3 121.4h-3c-.2 0-.4.2-.5.4-.7 2.8-.7 5.4 0 7.9.1.2.3.4.5.4h3c.3 0 .6-.3.6-.6V122c0-.4-.2-.6-.6-.6zm-2.1 5.3c0 .2-.2.4-.4.4s-.4-.2-.4-.4v-2.1c0-.2.2-.4.4-.4s.4.2.4.4v2.1z" fill="#ebf0f3"/>
                        <path class="st2" d="M121.8 152.3c-.1-.1.4-.6 1.1-1.2.7-.6 1.3-1 1.4-.9.1.1-.4.6-1.1 1.2-.7.5-1.3.9-1.4.9zm-4.9 4.1c-.1-.1.4-.6 1.1-1.2.7-.6 1.3-1 1.4-.9.1.1-.4.6-1.1 1.2-.8.6-1.4 1-1.4.9zm-5 4.2c-.1-.1.4-.6 1.1-1.2.7-.6 1.3-1 1.4-.9.1.1-.4.6-1.1 1.2-.7.5-1.3.9-1.4.9zm-5 4.1c-.1-.1.4-.6 1.1-1.2.7-.6 1.3-1 1.4-.9.1.1-.4.6-1.1 1.2-.7.6-1.3 1-1.4.9zm-4.9 4.2c-.1-.1.4-.6 1.1-1.2.7-.6 1.3-1 1.4-.9.1.1-.4.6-1.1 1.2-.8.5-1.4.9-1.4.9z"/>
                        <ellipse class="st5" cx="84" cy="191.1" rx="29.4" ry="27.4"/>
                        <path class="st2" d="M113.4 191.1v-.4c0-.3 0-.7-.1-1.3 0-.3 0-.6-.1-1 0-.4-.1-.7-.2-1.1-.1-.4-.1-.9-.2-1.3-.1-.5-.3-1-.4-1.5-.5-2.1-1.6-4.6-3.3-7.3-1.7-2.6-4.1-5.4-7.5-7.7-.4-.3-.8-.6-1.3-.9-.4-.3-.9-.5-1.4-.8-.5-.3-.9-.6-1.4-.8-.5-.2-1-.5-1.5-.7-.3-.1-.5-.2-.8-.3-.3-.1-.5-.2-.8-.3-.5-.2-1.1-.4-1.6-.6-.6-.2-1.1-.3-1.7-.4-.6-.1-1.2-.3-1.8-.4-1.2-.2-2.4-.4-3.7-.4-.6 0-1.3-.1-1.9-.1-.6 0-1.3.1-1.9.1-.3 0-.7 0-1 .1-.3 0-.6.1-1 .1-.7.1-1.3.2-2 .3-1.3.3-2.6.6-3.9 1.1-1.3.4-2.5 1-3.8 1.6-.6.3-1.2.7-1.8 1-.3.2-.6.3-.9.5l-.9.6c-1.2.8-2.2 1.7-3.3 2.6l-1.5 1.5-.4.4-.3.4-.7.8-.7.8-.6.9-.6.9-.3.5-.3.5c-.3.6-.7 1.3-1 1.9-.3.7-.5 1.3-.8 2-1 2.7-1.5 5.6-1.5 8.6s.6 5.9 1.5 8.6c.3.7.5 1.3.8 2 .3.6.7 1.3 1 1.9l.2.5.3.5.6.9.6.9.7.8.7.8.3.4.4.4 1.5 1.5c1.1.9 2.1 1.9 3.3 2.6l.9.6c.3.2.6.4.9.5.6.3 1.2.7 1.8 1 1.3.6 2.5 1.2 3.8 1.6 1.3.5 2.6.7 3.9 1.1.7.1 1.3.2 2 .3.3 0 .7.1 1 .1.3 0 .7 0 1 .1.7 0 1.3.1 1.9.1.6 0 1.3 0 1.9-.1 1.3 0 2.5-.2 3.7-.4.6-.1 1.2-.3 1.8-.4.6-.1 1.2-.3 1.7-.4.6-.2 1.1-.4 1.6-.6.3-.1.5-.2.8-.3.3-.1.5-.2.8-.3.5-.2 1-.5 1.5-.7.5-.2 1-.5 1.4-.8.5-.3.9-.5 1.4-.8.4-.3.8-.6 1.3-.9 3.3-2.3 5.8-5.1 7.5-7.7 1.7-2.6 2.7-5.1 3.3-7.3.1-.5.3-1 .4-1.5.1-.5.2-.9.2-1.3.1-.4.1-.8.2-1.1 0-.4 0-.7.1-1 0-.6.1-1 .1-1.3.1-.1.1-.2.1-.2v.4c0 .3 0 .7-.1 1.3v1c0 .4-.1.7-.2 1.1-.1.4-.1.9-.2 1.3-.1.5-.2 1-.4 1.5-.5 2.1-1.5 4.6-3.2 7.3-1.7 2.7-4.1 5.5-7.5 7.8-.4.3-.8.6-1.3.9-.4.3-.9.5-1.4.8-.5.3-.9.6-1.4.8-.5.2-1 .5-1.5.7-.3.1-.5.2-.8.3-.3.1-.5.2-.8.3-.5.2-1.1.4-1.7.6-.6.2-1.2.3-1.7.4-.6.1-1.2.3-1.8.4-1.2.2-2.5.4-3.7.4-.6 0-1.3.1-1.9.1-.6 0-1.3-.1-2-.1-.3 0-.7 0-1-.1-.3 0-.7-.1-1-.1-.7-.1-1.3-.2-2-.3-1.3-.3-2.7-.6-3.9-1.1-1.3-.4-2.6-1-3.9-1.6-.6-.3-1.2-.7-1.8-1-.3-.2-.6-.3-.9-.5l-.9-.6c-1.2-.8-2.3-1.7-3.4-2.7l-1.5-1.5-.4-.4-.3-.4-.7-.8-.7-.8-.6-.9-.6-.9-.3-.5-.3-.5c-.3-.6-.7-1.3-1-1.9-.3-.7-.5-1.4-.8-2-1-2.8-1.5-5.7-1.5-8.7 0-3 .6-5.9 1.5-8.7.3-.7.5-1.4.8-2 .3-.6.7-1.3 1-1.9l.3-.5.3-.5.6-.9.6-.9.7-.8.7-.8.3-.4.4-.4 1.5-1.5c1.1-.9 2.2-1.9 3.4-2.7l.9-.6c.3-.2.6-.4.9-.5.6-.3 1.2-.7 1.8-1 1.3-.6 2.5-1.2 3.9-1.6 1.3-.5 2.6-.7 3.9-1.1.7-.1 1.3-.2 2-.3.3 0 .7-.1 1-.1.3 0 .7 0 1-.1.7 0 1.3-.1 2-.1.6 0 1.3.1 1.9.1 1.3 0 2.5.2 3.7.4.6.1 1.2.3 1.8.4.6.1 1.2.3 1.7.4.6.2 1.1.4 1.7.6.3.1.5.2.8.3.3.1.5.2.8.3.5.2 1 .5 1.5.7.5.2 1 .5 1.4.8.5.3.9.5 1.4.8.4.3.9.6 1.3.9 3.3 2.4 5.8 5.2 7.5 7.8 1.7 2.7 2.7 5.2 3.2 7.3.1.5.3 1 .4 1.5.1.5.1.9.2 1.3s.1.8.2 1.1v1c0 .6 0 1 .1 1.3v.4z"/>
                        <path class="st6" d="M89 199.3c-.3-.3-.8-.3-1.1 0l-2.8 2.8v-20.5l2.8 2.9c.1.1.3.2.5.2s.4-.1.6-.2l.4-.4c.1-.1.2-.3.2-.6 0-.2-.1-.4-.2-.6l-4.9-4.9c-.2-.2-.4-.2-.6-.2-.2 0-.4.1-.6.2l-4.9 4.9c-.3.3-.3.8 0 1.1l.4.4c.3.3.8.3 1.1 0l2.8-2.8v20.3l-2.8-2.8c-.3-.3-.8-.3-1.1 0l-.4.4c-.3.3-.3.8 0 1.1l4.9 4.9c.2.2.4.2.6.2.2 0 .4-.1.6-.2l4.9-4.9c.3-.3.3-.8 0-1.1l-.4-.2z"/>
                        <path class="st2" d="M158.6 153.5c-.1 0-.5-.6-.9-1.4-.4-.8-.6-1.5-.6-1.5.1 0 .5.6.9 1.4.4.7.7 1.4.6 1.5zm2.8 5.8c-.1 0-.5-.6-.9-1.4-.4-.8-.6-1.5-.6-1.5.1 0 .5.6.9 1.4.4.8.7 1.5.6 1.5zm2.8 5.8c-.1 0-.5-.6-.9-1.4-.4-.8-.6-1.5-.6-1.5.1 0 .5.6.9 1.4.4.8.7 1.5.6 1.5zm2.8 5.9c-.1 0-.5-.6-.9-1.4-.4-.8-.6-1.5-.6-1.5.1 0 .5.6.9 1.4.5.7.7 1.4.6 1.5zm2.9 5.8c-.1 0-.5-.6-.9-1.4-.4-.8-.6-1.5-.6-1.5.1 0 .5.6.9 1.4.4.8.6 1.5.6 1.5z"/>
                        <ellipse class="st5" cx="175.7" cy="202.6" rx="29.4" ry="27.4"/>
                        <path class="st2" d="M205.1 202.6v-.4c0-.3 0-.7-.1-1.3 0-.3 0-.6-.1-1 0-.4-.1-.7-.2-1.1-.1-.4-.1-.9-.2-1.3-.1-.5-.3-1-.4-1.5-.5-2.1-1.6-4.6-3.3-7.3-1.7-2.6-4.1-5.4-7.5-7.7-.4-.3-.8-.6-1.3-.9-.4-.3-.9-.5-1.4-.8-.5-.3-.9-.6-1.4-.8-.5-.2-1-.5-1.5-.7-.3-.1-.5-.2-.8-.3-.3-.1-.5-.2-.8-.3-.5-.2-1.1-.4-1.6-.6-.6-.2-1.1-.3-1.7-.4-.6-.1-1.2-.3-1.8-.4-1.2-.2-2.4-.4-3.7-.4-.6 0-1.3-.1-1.9-.1-.6 0-1.3.1-1.9.1-.3 0-.7 0-1 .1-.3 0-.6.1-1 .1-.7.1-1.3.2-2 .3-1.3.3-2.6.6-3.9 1.1-1.3.4-2.5 1-3.8 1.6-.6.3-1.2.7-1.8 1-.3.2-.6.3-.9.5l-.9.6c-1.2.8-2.2 1.7-3.3 2.6l-1.5 1.5-.4.4-.3.4-.7.8-.7.8-.6.9-.6.9-.3.5-.3.5c-.3.6-.7 1.3-1 1.9-.3.7-.5 1.3-.8 2-1 2.7-1.5 5.6-1.5 8.6s.6 5.9 1.5 8.6c.3.7.5 1.3.8 2 .3.6.7 1.3 1 1.9l.2.5.3.5.6.9.6.9.7.8.7.8.3.4.4.4 1.5 1.5c1.1.9 2.1 1.9 3.3 2.6l.9.6c.3.2.6.4.9.5.6.3 1.2.7 1.8 1 1.3.6 2.5 1.2 3.8 1.6 1.3.5 2.6.7 3.9 1.1.7.1 1.3.2 2 .3.3 0 .7.1 1 .1.3 0 .7 0 1 .1.7 0 1.3.1 1.9.1.6 0 1.3 0 1.9-.1 1.3 0 2.5-.2 3.7-.4.6-.1 1.2-.3 1.8-.4.6-.1 1.2-.3 1.7-.4.6-.2 1.1-.4 1.6-.6.3-.1.5-.2.8-.3.3-.1.5-.2.8-.3.5-.2 1-.5 1.5-.7.5-.2 1-.5 1.4-.8.5-.3.9-.5 1.4-.8.4-.3.8-.6 1.3-.9 3.3-2.3 5.8-5.1 7.5-7.7 1.7-2.6 2.7-5.1 3.3-7.3.1-.5.3-1 .4-1.5.1-.5.2-.9.2-1.3.1-.4.1-.8.2-1.1 0-.4 0-.7.1-1 0-.6.1-1 .1-1.3.1-.1.1-.2.1-.2v.4c0 .3 0 .7-.1 1.3v1c0 .4-.1.7-.2 1.1-.1.4-.1.9-.2 1.3-.1.5-.2 1-.4 1.5-.5 2.1-1.5 4.6-3.2 7.3-1.7 2.7-4.1 5.5-7.5 7.8-.4.3-.8.6-1.3.9-.4.3-.9.5-1.4.8-.5.3-.9.6-1.4.8-.5.2-1 .5-1.5.7-.3.1-.5.2-.8.3-.3.1-.5.2-.8.3-.5.2-1.1.4-1.7.6-.6.2-1.2.3-1.7.4-.6.1-1.2.3-1.8.4-1.2.2-2.5.4-3.7.4-.6 0-1.3.1-1.9.1-.6 0-1.3-.1-2-.1-.3 0-.7 0-1-.1-.3 0-.7-.1-1-.1-.7-.1-1.3-.2-2-.3-1.3-.3-2.7-.6-3.9-1.1-1.3-.4-2.6-1-3.9-1.6-.6-.3-1.2-.7-1.8-1-.3-.2-.6-.3-.9-.5l-.9-.6c-1.2-.8-2.3-1.7-3.4-2.7l-1.5-1.5-.4-.4-.3-.4-.7-.8-.7-.8-.6-.9-.6-.9-.3-.5-.3-.5c-.3-.6-.7-1.3-1-1.9-.3-.7-.5-1.4-.8-2-1-2.8-1.5-5.7-1.5-8.7 0-3 .6-5.9 1.5-8.7.3-.7.5-1.4.8-2 .3-.6.7-1.3 1-1.9l.3-.5.3-.5.6-.9.6-.9.7-.8.7-.8.3-.4.4-.4 1.5-1.5c1.1-.9 2.2-1.9 3.4-2.7l.9-.6c.3-.2.6-.4.9-.5.6-.3 1.2-.7 1.8-1 1.3-.6 2.5-1.2 3.9-1.6 1.3-.5 2.6-.7 3.9-1.1.7-.1 1.3-.2 2-.3.3 0 .7-.1 1-.1.3 0 .7 0 1-.1.7 0 1.3-.1 2-.1.6 0 1.3.1 1.9.1 1.3 0 2.5.2 3.7.4.6.1 1.2.3 1.8.4.6.1 1.2.3 1.7.4.6.2 1.1.4 1.7.6.3.1.5.2.8.3.3.1.5.2.8.3.5.2 1 .5 1.5.7.5.2 1 .5 1.4.8.5.3.9.5 1.4.8.4.3.9.6 1.3.9 3.3 2.4 5.8 5.2 7.5 7.8 1.7 2.7 2.7 5.2 3.2 7.3.1.5.3 1 .4 1.5.1.5.1.9.2 1.3s.1.8.2 1.1v1c0 .6 0 1 .1 1.3v.4z"/>
                        <linearGradient id="SVGID_1_" gradientUnits="userSpaceOnUse" x1="176.969" y1="36.582" x2="176.969" y2="60.067" gradientTransform="matrix(1 0 0 -1 0 252.11)">
                            <stop offset="0" stop-color="#fd5900"/>
                            <stop offset="1" stop-color="#ffde00"/>
                        </linearGradient>
                        <path d="M188.7 208.2h-23.5c-.4 0-.7.3-.7.7v5.9c0 .4.3.7.7.7h23.5c.4 0 .7-.3.7-.7v-5.9c.1-.4-.3-.7-.7-.7zm-.7 5.9h-22.1v-4.4h1.5v.7c0 .4.3.7.7.7s.7-.3.7-.7v-.7h1.5v2.2c0 .4.3.7.7.7s.7-.3.7-.7v-2.2h1.5v.7c0 .4.3.7.7.7.4 0 .7-.3.7-.7v-.7h1.5v2.2c0 .4.3.7.7.7s.7-.3.7-.7v-2.2h1.5v.7c0 .4.3.7.7.7s.7-.3.7-.7v-.7h1.5v2.2c0 .4.3.7.7.7s.7-.3.7-.7v-2.2h1.5v.7c0 .4.3.7.7.7.4 0 .7-.3.7-.7v-.7h1.5v4.4zm-21.9-7.6c.3.3.7.3 1 0s.3-.7 0-1l-.2-.2h20l-.2.2c-.3.3-.3.7 0 1 .3.3.7.3 1 0l1.5-1.5c.3-.3.3-.7 0-1l-1.5-1.5c-.3-.3-.7-.3-1 0-.3.3-.3.7 0 1l.2.2h-20l.2-.2c.3-.3.3-.7 0-1-.3-.3-.7-.3-1 0l-1.5 1.5c-.3.3-.3.7 0 1l1.5 1.5zm6.5-4.2h8.8c.4 0 .7-.3.7-.7v-8.8c0-.4-.3-.7-.7-.7h-8.8c-.4 0-.7.3-.7.7v8.8c-.1.4.3.7.7.7zm3.6-8.8h1.5v2.5l-.4-.2c-.2-.1-.4-.1-.7 0l-.4.2v-2.5zm-2.9 0h1.5v3.7c0 .3.1.5.3.6.2.1.5.1.7 0l1.1-.6 1.1.6c.2.1.5.1.7 0 .2-.1.3-.4.3-.6v-3.7h1.5v7.4h-7.3v-7.4z" fill="url(#SVGID_1_)"/>
                        <ellipse class="st5" cx="54.5" cy="114.4" rx="29.4" ry="27.4"/>
                        <path class="st2" d="M84 114.4v-.4c0-.3 0-.7-.1-1.3 0-.3 0-.6-.1-1 0-.4-.1-.7-.2-1.1-.1-.4-.1-.9-.2-1.3-.1-.5-.3-1-.4-1.5-.5-2.1-1.6-4.6-3.3-7.3-1.7-2.6-4.1-5.4-7.5-7.7-.4-.3-.8-.6-1.3-.9-.4-.3-.9-.5-1.4-.8-.5-.3-.9-.6-1.4-.8-.5-.2-1-.5-1.5-.7-.3-.1-.5-.2-.8-.3-.3-.1-.5-.2-.8-.3-.5-.2-1.1-.4-1.6-.6-.6-.2-1.1-.3-1.7-.4-.6-.1-1.2-.3-1.8-.4-1.2-.2-2.4-.4-3.7-.4-.6 0-1.3-.1-1.9-.1-.6 0-1.3.1-1.9.1-.3 0-.7 0-1 .1-.3 0-.6.1-1 .1-.7.1-1.3.2-2 .3-1.3.3-2.6.6-3.9 1.1-1.3.4-2.5 1-3.8 1.6-.6.3-1.2.7-1.8 1-.3.2-.6.3-.9.5l-.9.6c-1.2.8-2.2 1.7-3.3 2.6l-1.5 1.5-.3.5-.3.4-.7.8-.7.8-.6.9-.6.9-.3.5-.3.5c-.3.6-.7 1.3-1 1.9-.3.7-.5 1.3-.8 2-1 2.7-1.5 5.6-1.5 8.6s.6 5.9 1.5 8.6c.3.7.5 1.3.8 2 .3.6.7 1.3 1 1.9l.2.5.3.5.6.9.6.9.7.8.7.8.3.4.4.4 1.5 1.5c1.1.9 2.1 1.9 3.3 2.6l.9.6c.3.2.6.4.9.5.6.3 1.2.7 1.8 1 1.3.6 2.5 1.2 3.8 1.6 1.3.5 2.6.7 3.9 1.1.7.1 1.3.2 2 .3.3 0 .7.1 1 .1.3 0 .7 0 1 .1.7 0 1.3.1 1.9.1.6 0 1.3 0 1.9-.1 1.3 0 2.5-.2 3.7-.4.6-.1 1.2-.3 1.8-.4.6-.1 1.2-.3 1.7-.4.6-.2 1.1-.4 1.6-.6.3-.1.5-.2.8-.3.3-.1.5-.2.8-.3.5-.2 1-.5 1.5-.7.5-.2 1-.5 1.4-.8.5-.3.9-.5 1.4-.8.4-.3.8-.6 1.3-.9 3.3-2.3 5.8-5.1 7.5-7.7 1.7-2.6 2.7-5.1 3.3-7.3.1-.5.3-1 .4-1.5.1-.5.2-.9.2-1.3.1-.4.1-.8.2-1.1 0-.4 0-.7.1-1 0-.6.1-1 .1-1.3-.1-.1 0-.3 0-.3v.4c0 .3 0 .7-.1 1.3v1c0 .4-.1.7-.2 1.1-.1.4-.1.9-.2 1.3-.1.5-.2 1-.4 1.5-.5 2.1-1.5 4.6-3.2 7.3-1.7 2.7-4.1 5.5-7.5 7.8-.4.3-.8.6-1.3.9-.4.3-.9.5-1.4.8-.5.3-.9.6-1.4.8-.5.2-1 .5-1.5.7-.3.1-.5.2-.8.3-.3.1-.5.2-.8.3-.5.2-1.1.4-1.7.6-.6.2-1.2.3-1.7.4-.6.1-1.2.3-1.8.4-1.2.2-2.5.4-3.7.4-.6 0-1.3.1-1.9.1-.6 0-1.3-.1-2-.1-.3 0-.7 0-1-.1-.3 0-.7-.1-1-.1-.7-.1-1.3-.2-2-.3-1.3-.3-2.7-.6-3.9-1.1-1.3-.4-2.6-1-3.9-1.6-.6-.3-1.2-.7-1.8-1-.3-.2-.6-.3-.9-.5l-.9-.6c-1.2-.8-2.3-1.7-3.4-2.7l-1.5-1.5-.4-.4-.3-.4-.7-.8-.7-.8-.6-.9-.6-.9-.3-.5-.3-.5c-.3-.6-.7-1.3-1-1.9-.3-.7-.5-1.4-.8-2-1-2.8-1.5-5.7-1.5-8.7 0-3 .6-5.9 1.5-8.7.3-.7.5-1.4.8-2 .3-.6.7-1.3 1-1.9l.3-.5.3-.5.6-.9.6-.9.7-.8.7-.8.3-.4.4-.4 1.5-1.5c1.1-.9 2.2-1.9 3.4-2.7l.9-.6c.3-.2.6-.4.9-.5.6-.3 1.2-.7 1.8-1 1.3-.6 2.5-1.2 3.9-1.6 1.3-.5 2.6-.7 3.9-1.1.7-.1 1.3-.2 2-.3.3 0 .7-.1 1-.1.3 0 .7 0 1-.1.7 0 1.3-.1 2-.1.6 0 1.3.1 1.9.1 1.3 0 2.5.2 3.7.4.6.1 1.2.3 1.8.4.6.1 1.2.3 1.7.4.6.2 1.1.4 1.7.6.3.1.5.2.8.3.3.1.5.2.8.3.5.2 1 .5 1.5.7.5.2 1 .5 1.4.8.5.3.9.5 1.4.8.4.3.9.6 1.3.9 3.3 2.4 5.8 5.2 7.5 7.8 1.7 2.7 2.7 5.2 3.2 7.3.1.5.3 1 .4 1.5.1.5.1.9.2 1.3s.1.8.2 1.1v1c0 .6 0 1 .1 1.3v.4z"/>
                        <path d="M55.3 102.5l3.2 6c.1.2.4.4.6.4l7.1 1c.7.1 1 .9.5 1.3l-5.2 4.7c-.2.2-.3.4-.2.7l1.2 6.6c.1.6-.6 1.1-1.2.8l-6.4-3.1c-.2-.1-.5-.1-.8 0l-6.4 3.1c-.6.3-1.3-.2-1.2-.8l1.2-6.6c0-.3 0-.5-.2-.7l-5.2-4.7c-.5-.4-.2-1.2.5-1.3l7.1-1c.3 0 .5-.2.6-.4l3.2-6c.4-.6 1.3-.6 1.6 0z" fill="#fafafa"/>
                        <path class="st1" d="M55.3 102.5s0-.1-.1-.2-.3-.2-.6-.2-.6.1-.8.5l-.6 1.2c-.5.9-1 2-1.7 3.3-.2.3-.3.7-.5 1-.1.2-.2.3-.3.5-.1.2-.3.3-.6.4-.9.1-1.8.3-2.7.4-1 .1-2 .3-3 .4-.5.1-1 .1-1.6.2-.5.1-.7.7-.4 1 1.6 1.5 3.4 3 5.2 4.7.3.2.4.6.3.9-.1.3-.1.6-.2.9l-.3 1.8c-.2 1.2-.5 2.5-.7 3.7-.1.3 0 .5.3.7.1.1.3.1.4.1.1 0 .3-.1.4-.2.6-.3 1.3-.6 1.9-.9 1.3-.6 2.6-1.3 3.9-1.9l.5-.2c.2-.1.4-.1.6-.1.2 0 .4.2.5.2l.5.2c.6.3 1.3.6 1.9.9 1.3.6 2.5 1.2 3.7 1.8.3.1.6 0 .8-.2.1-.1.2-.2.2-.3 0-.1 0-.3-.1-.4-.1-.6-.2-1.2-.3-1.9-.2-1.2-.4-2.4-.7-3.6-.1-.3-.1-.6-.2-.9-.1-.3.1-.7.4-.9.4-.4.9-.8 1.3-1.2.9-.8 1.7-1.5 2.5-2.3.4-.4.8-.7 1.2-1.1.4-.3.3-.9-.1-1.1-.2-.1-.5-.1-.7-.1-.3 0-.5-.1-.8-.1-.5-.1-1-.1-1.5-.2-1-.1-1.9-.3-2.7-.4-.4-.1-.8-.1-1.3-.2-.2 0-.4 0-.6-.1-.2-.1-.4-.2-.5-.4-.7-1.3-1.2-2.4-1.7-3.3-.5-.9-.8-1.6-1.1-2.1-.1-.2-.2-.4-.3-.5.2.3.2.2.2.2s0 .1.1.2.2.3.3.5c.3.5.6 1.2 1.1 2.1.5.9 1.1 2 1.8 3.3.1.1.2.2.4.3.2 0 .4.1.6.1.4.1.8.1 1.3.2.9.1 1.8.2 2.7.4.5.1 1 .1 1.5.2.2 0 .5.1.8.1.2 0 .5 0 .8.2.3.1.5.4.5.7 0 .3-.1.6-.3.8-.4.4-.8.7-1.2 1.1-.8.7-1.6 1.5-2.5 2.3-.4.4-.9.8-1.3 1.2-.2.2-.3.4-.3.6.1.3.1.6.2.9.2 1.2.4 2.4.7 3.6.1.6.2 1.2.3 1.9 0 .2.1.3.1.5s-.1.4-.2.5c-.3.3-.8.4-1.1.2-1.2-.6-2.5-1.2-3.8-1.8-.6-.3-1.3-.6-1.9-.9l-.5-.2c-.2-.1-.3-.2-.5-.2h-.4l-.5.2c-1.3.6-2.6 1.3-3.9 1.9-.6.3-1.3.6-1.9.9-.1.1-.3.2-.6.2-.2 0-.4 0-.6-.1-.4-.2-.5-.7-.4-1 .2-1.3.5-2.5.7-3.7l.3-1.8c.1-.3.1-.6.2-.9.1-.3 0-.5-.2-.7-1.8-1.7-3.6-3.2-5.2-4.7-.2-.2-.3-.6-.2-.9.1-.3.4-.5.7-.6.5-.1 1.1-.1 1.6-.2 1-.1 2-.3 3-.4.9-.1 1.9-.2 2.7-.4.2 0 .3-.2.4-.3.1-.2.2-.3.3-.5.2-.3.4-.7.5-1 .7-1.3 1.3-2.4 1.8-3.3.2-.4.5-.8.6-1.2.2-.4.6-.5.9-.5.3 0 .5.2.6.3v-.1z"/>
                        <ellipse class="st5" cx="54.5" cy="114.4" rx="29.4" ry="27.4"/>
                        <path class="st2" d="M84 114.4v-.4c0-.3 0-.7-.1-1.3 0-.3 0-.6-.1-1 0-.4-.1-.7-.2-1.1-.1-.4-.1-.9-.2-1.3-.1-.5-.3-1-.4-1.5-.5-2.1-1.6-4.6-3.3-7.3-1.7-2.6-4.1-5.4-7.5-7.7-.4-.3-.8-.6-1.3-.9-.4-.3-.9-.5-1.4-.8-.5-.3-.9-.6-1.4-.8-.5-.2-1-.5-1.5-.7-.3-.1-.5-.2-.8-.3-.3-.1-.5-.2-.8-.3-.5-.2-1.1-.4-1.6-.6-.6-.2-1.1-.3-1.7-.4-.6-.1-1.2-.3-1.8-.4-1.2-.2-2.4-.4-3.7-.4-.6 0-1.3-.1-1.9-.1-.6 0-1.3.1-1.9.1-.3 0-.7 0-1 .1-.3 0-.6.1-1 .1-.7.1-1.3.2-2 .3-1.3.3-2.6.6-3.9 1.1-1.3.4-2.5 1-3.8 1.6-.6.3-1.2.7-1.8 1-.3.2-.6.3-.9.5l-.9.6c-1.2.8-2.2 1.7-3.3 2.6l-1.5 1.5-.3.5-.3.4-.7.8-.7.8-.6.9-.6.9-.3.5-.3.5c-.3.6-.7 1.3-1 1.9-.3.7-.5 1.3-.8 2-1 2.7-1.5 5.6-1.5 8.6s.6 5.9 1.5 8.6c.3.7.5 1.3.8 2 .3.6.7 1.3 1 1.9l.2.5.3.5.6.9.6.9.7.8.7.8.3.4.4.4 1.5 1.5c1.1.9 2.1 1.9 3.3 2.6l.9.6c.3.2.6.4.9.5.6.3 1.2.7 1.8 1 1.3.6 2.5 1.2 3.8 1.6 1.3.5 2.6.7 3.9 1.1.7.1 1.3.2 2 .3.3 0 .7.1 1 .1.3 0 .7 0 1 .1.7 0 1.3.1 1.9.1.6 0 1.3 0 1.9-.1 1.3 0 2.5-.2 3.7-.4.6-.1 1.2-.3 1.8-.4.6-.1 1.2-.3 1.7-.4.6-.2 1.1-.4 1.6-.6.3-.1.5-.2.8-.3.3-.1.5-.2.8-.3.5-.2 1-.5 1.5-.7.5-.2 1-.5 1.4-.8.5-.3.9-.5 1.4-.8.4-.3.8-.6 1.3-.9 3.3-2.3 5.8-5.1 7.5-7.7 1.7-2.6 2.7-5.1 3.3-7.3.1-.5.3-1 .4-1.5.1-.5.2-.9.2-1.3.1-.4.1-.8.2-1.1 0-.4 0-.7.1-1 0-.6.1-1 .1-1.3-.1-.1 0-.3 0-.3v.4c0 .3 0 .7-.1 1.3v1c0 .4-.1.7-.2 1.1-.1.4-.1.9-.2 1.3-.1.5-.2 1-.4 1.5-.5 2.1-1.5 4.6-3.2 7.3-1.7 2.7-4.1 5.5-7.5 7.8-.4.3-.8.6-1.3.9-.4.3-.9.5-1.4.8-.5.3-.9.6-1.4.8-.5.2-1 .5-1.5.7-.3.1-.5.2-.8.3-.3.1-.5.2-.8.3-.5.2-1.1.4-1.7.6-.6.2-1.2.3-1.7.4-.6.1-1.2.3-1.8.4-1.2.2-2.5.4-3.7.4-.6 0-1.3.1-1.9.1-.6 0-1.3-.1-2-.1-.3 0-.7 0-1-.1-.3 0-.7-.1-1-.1-.7-.1-1.3-.2-2-.3-1.3-.3-2.7-.6-3.9-1.1-1.3-.4-2.6-1-3.9-1.6-.6-.3-1.2-.7-1.8-1-.3-.2-.6-.3-.9-.5l-.9-.6c-1.2-.8-2.3-1.7-3.4-2.7l-1.5-1.5-.4-.4-.3-.4-.7-.8-.7-.8-.6-.9-.6-.9-.3-.5-.3-.5c-.3-.6-.7-1.3-1-1.9-.3-.7-.5-1.4-.8-2-1-2.8-1.5-5.7-1.5-8.7 0-3 .6-5.9 1.5-8.7.3-.7.5-1.4.8-2 .3-.6.7-1.3 1-1.9l.3-.5.3-.5.6-.9.6-.9.7-.8.7-.8.3-.4.4-.4 1.5-1.5c1.1-.9 2.2-1.9 3.4-2.7l.9-.6c.3-.2.6-.4.9-.5.6-.3 1.2-.7 1.8-1 1.3-.6 2.5-1.2 3.9-1.6 1.3-.5 2.6-.7 3.9-1.1.7-.1 1.3-.2 2-.3.3 0 .7-.1 1-.1.3 0 .7 0 1-.1.7 0 1.3-.1 2-.1.6 0 1.3.1 1.9.1 1.3 0 2.5.2 3.7.4.6.1 1.2.3 1.8.4.6.1 1.2.3 1.7.4.6.2 1.1.4 1.7.6.3.1.5.2.8.3.3.1.5.2.8.3.5.2 1 .5 1.5.7.5.2 1 .5 1.4.8.5.3.9.5 1.4.8.4.3.9.6 1.3.9 3.3 2.4 5.8 5.2 7.5 7.8 1.7 2.7 2.7 5.2 3.2 7.3.1.5.3 1 .4 1.5.1.5.1.9.2 1.3s.1.8.2 1.1v1c0 .6 0 1 .1 1.3v.4z"/>
                        <path d="M65 115.3h-3.4c0-2-.8-3.8-2.1-5.1l2.4-2.4c1.9 1.9 3.1 4.5 3.1 7.5z" fill="#f6bb42"/>
                        <path d="M61.6 115.3H65c0 2.9-1.2 5.6-3.1 7.5l-2.4-2.4c1.3-1.3 2.1-3.1 2.1-5.1z" fill="#8cc152"/>
                        <path d="M61.9 122.8c-1.9 1.9-4.6 3.1-7.5 3.1v-3.4c2 0 3.8-.8 5.1-2.1l2.4 2.4z" fill="#37bc9b"/>
                        <path d="M61.9 107.7l-2.4 2.4c-1.3-1.3-3.1-2.1-5.1-2.1v-3.4c2.9 0 5.6 1.2 7.5 3.1z" fill="#e9573f"/>
                        <path d="M61.6 115.3h-3.4c0-1-.4-2-1.1-2.7l2.4-2.4c1.3 1.3 2.1 3.1 2.1 5.1z" fill="#ffce54"/>
                        <path d="M57 118l2.4 2.4c-1.3 1.3-3.1 2.1-5.1 2.1v-3.4c1.1 0 2-.5 2.7-1.1z" fill="#48cfad"/>
                        <path d="M54.3 122.5v3.4c-2.9 0-5.6-1.2-7.5-3.1l2.4-2.4c1.3 1.3 3.2 2.1 5.1 2.1z" fill="#4a89dc"/>
                        <path d="M54.3 119.1v3.4c-2 0-3.8-.8-5.1-2.1l2.4-2.4c.8.6 1.7 1.1 2.7 1.1z" fill="#5d9cec"/>
                        <path d="M54.3 108.1v3.4c-1 0-2 .4-2.7 1.1l-2.4-2.4c1.3-1.3 3.2-2.1 5.1-2.1z" fill="#ed5565"/>
                        <path d="M49.2 120.4l-2.4 2.4c-1.9-1.9-3.1-4.6-3.1-7.5h3.4c0 2 .8 3.8 2.1 5.1z" fill="#967adc"/>
                        <path d="M58.1 115.3h3.4c0 2-.8 3.8-2.1 5.1L57 118c.7-.7 1.1-1.7 1.1-2.7z" fill="#a0d468"/>
                        <path d="M49.2 110.2l2.4 2.4c-.7.7-1.1 1.6-1.1 2.7h-3.4c0-2 .8-3.8 2.1-5.1z" fill="#ec87c0"/>
                        <path d="M51.7 118l-2.4 2.4c-1.3-1.3-2.1-3.1-2.1-5.1h3.4c0 1 .4 2 1.1 2.7z" fill="#ac92ec"/>
                        <path d="M46.8 107.7l2.4 2.4c-1.3 1.3-2.1 3.1-2.1 5.1h-3.4c0-2.9 1.2-5.5 3.1-7.5z" fill="#d770ad"/>
                        <path d="M59.5 110.2l-2.4 2.4c-.7-.7-1.6-1.1-2.7-1.1v-3.4c1.9 0 3.8.8 5.1 2.1z" fill="#fc6e51"/>
                        <path d="M54.3 104.6v3.4c-2 0-3.8.8-5.1 2.1l-2.4-2.4c1.9-1.9 4.6-3.1 7.5-3.1z" fill="#da4453"/>
                    </g>
                </svg>
            </div>
        </x-shopper::empty-state>
    @else
        <div class="mt-8">
            <livewire:shopper-tables.attributes-table />
        </div>
    @endif

    <x-shopper::learn-more :name="__('shopper::words.attributes')" link="attributes" />

</x-shopper::container>
