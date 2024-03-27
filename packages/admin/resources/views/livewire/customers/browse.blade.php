<x-shopper::container>
    <x-shopper::heading>
        <x-slot name="title">
            {{ __('shopper::layout.sidebar.customers') }}
        </x-slot>

        <x-slot name="action">
            @if($total > 0)
                @can('add_customers')
                    <div class="flex space-x-3">
                        <span class="shadow-sm rounded-md">
                            <x-shopper::buttons.primary :link="route('shopper.customers.create')">
                                {{ __('shopper::words.actions_label.add_new', ['name' => __('shopper::words.customer')]) }}
                            </x-shopper::buttons.primary>
                        </span>
                    </div>
                @endcan
            @endif
        </x-slot>
    </x-shopper::heading>

    @if($total === 0)
        <x-shopper::empty-state
            :title="__('shopper::pages/customers.title')"
            :content="__('shopper::pages/customers.content')"
            :button="__('shopper::words.actions_label.add_new', ['name' => __('customer')])"
            permission="add_customers"
            :url="route('shopper.customers.create')"
        >
            <div class="shrink-0">
                <svg class="w-auto h-64 lg:h-auto" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 230">
                    <style>
                        .st0{fill:#e1effe}.st1{fill:#5850ec}.st2{fill:#fff}.st5{fill:#3f83f8}.st6{opacity:.24}.st7{fill:#111}.st8{fill:none;stroke:#a4cafe;stroke-width:1.5339;stroke-linecap:round;stroke-miterlimit:10}.st9{fill:#5521b5}.st11{fill:#f9d2b2}.st12{fill:#27303f}.st13{fill:none;stroke:#e6efff;stroke-width:1.5339;stroke-linecap:round;stroke-miterlimit:10}.st14{fill:#7e3af2}.st15{fill:#362f78}.st17{opacity:8.000000e-02}.st19{opacity:.24;fill:#111}.st20{fill:#eab892}.st23{fill:none;stroke:#9061f9;stroke-width:1.5339;stroke-linecap:round;stroke-miterlimit:10}
                    </style>
                    <g>
                        <path class="st0" d="M183.6 146.4c15 6 33.9 6.8 45.6-4.4 1.5-1.4 2.9-3.2 2.7-5.2-.2-2.9-3.2-4.5-5-6.8-3.5-4.4-1.7-11.2 1.9-15.5 3.7-4.3 8.9-6.9 13.3-10.4 12.6-9.9 20.6-42.9 12.6-56.8-2.4-4.2-5.9-7.6-9.5-10.8-16.1-13.8-40.1-17.5-61-14.2-20.9 3.4-41.8 10-60.5 20-11.6 6.2-23.1 15.3-26 28.1-2.6 11.3 2.2 23.4 10.1 32 7.9 8.6 18.4 14.2 29.1 18.8 10.7 4.7 21.7 8.7 31.6 14.8l15.1 10.4z"/>
                        <path class="st1" d="M127.9 26.9c3.9-2.2 7-5.7 9-9.7.3-.6.5-1.2.4-1.8-.2-.7-4.4-6.9-7.2-7.6 0 1.6 0 3.3-.1 4.9-1.6-.6-3.4-.7-5.1-.4.3 2.1.6 4.1.9 6.2 0 .2 0 .4-.1.5-.1.2-.3.2-.5.2-2.2.3-4.3.9-6.2 1.9 2.9 2.5 5.3 4.7 8.9 5.8z"/>
                        <g>
                            <path class="st2" d="M202.7 41.3c5.9-8.8 17.9-11.7 23.7-2.6 5.8 9 4.4 19-2.2 23.4-6.6 4.4-19.2-.2-21.5-7-2.3-6.8 0-10.2 0-10.2l-7.9-4.4 7.9.8z"/>
                            <circle class="st1" cx="215.5" cy="48.5" r="7.8"/>
                            <path d="M219 51.3c-.7 1.2-2 2-3.5 2s-2.8-.8-3.5-2" fill="none" stroke="#fff" stroke-width="1.534" stroke-linecap="round" stroke-miterlimit="10"/>
                            <g>
                                <path class="st2" d="M213.9 47.1c0 .7-.3 1.3-.6 1.3s-.6-.6-.6-1.3c0-.7.3-1.3.6-1.3s.6.6.6 1.3z"/>
                                <ellipse class="st2" cx="217.8" cy="47.1" rx=".6" ry="1.3"/>
                            </g>
                        </g>
                        <path d="M109.8 43.4c1.8 2.4.5 6.1-1.9 7.9-2.4 1.8-5.5 2.3-8.5 2.5-2.8.3-5.8.4-8.5-.2-2.8-.7-5.4-2.3-6.7-4.9-1-1.9-1.1-4.1-1-6.3.2-3.2 1-6.5 2.9-9.1 2.6-3.5 7.2-5.4 11.5-4.7 4.3.7 8.1 3.9 9.4 8 .4 1.2.7 2.7 1.8 3.4.5.3 1.1.4 1.7.5 2.5.3 4.9.7 7.4 1 .1 0-5.2 1.1-8.1 1.9z" fill="#e74694"/>
                        <path class="st2" d="M94.7 39.5c.7-1.7 2.1-3.3 3.9-3.3 1.7.1 3 1.7 3.1 3.4.1 1.2-.3 2.4-1 3.4-.7.9-1.8 1.6-2.8 2.2-1.2.7-2.5 1.5-3.7 2.2-1.2-1.5-2.4-3.1-3.6-4.6-.6-.8-1.3-1.6-1.5-2.6-.4-1.7.8-3.5 2.4-4 .3-.1.7-.1 1 0 .4.2.6.5.9.9.4.8.8 1.6 1 2.4h.3z"/>
                        <path class="st0" d="M240.2 126.5c.4 4 4.2 7.2 8.2 7.5 4 .3 8-1.9 10.4-5.1 1.1-1.5 1.9-3.3 1.7-5.2-.5-3.7-4.9-5.4-8.7-5.9-2.4-.3-4.9-.5-7.2.2s-4.4 2.4-5 4.8c-.5 2.4.6 3.7.6 3.7z"/>
                        <g>
                            <path class="st5" d="M145.5 212.5l.1-.2 1.1-1.2c5.8-3.7 10.1-9.6 12.1-16.2.5-1.5.8-3.1.8-4.7 0-3.3-1.3-6.4-3-9.3-3.1-5.5-7.6-10.2-12.8-13.7-.2-.1-.3-.2-.5-.3 1.7 10.4-8.9 20-6.7 30.3.5 2.2 1.6 4.3 2.7 6.3 1.8 3.2 3.7 6.3 6.2 9z"/>
                            <g class="st6">
                                <path class="st7" d="M145.7 212.3l1.1-1.2c5.8-3.7 10.1-9.6 12.1-16.2.5-1.5.8-3.1.8-4.7 0-3.3-1.3-6.4-3-9.3-3.1-5.5-7.6-10.2-12.8-13.7.8 1.3 1.6 2.6 2.4 4 .5.9 1.1 1.8 1.2 2.8.1.9-.1 1.7-.2 2.6-.1 2 .6 3.9.6 5.9.1 1.9-.4 3.7-.2 5.6.3 2 1.4 3.9 1.1 5.9-.2 1-.7 1.9-.8 2.9-.1.9.2 1.9 0 2.8-.1.7-.3 1.3-.5 1.9-.8 2.3-1.2 4.7-1.6 7.1-.1 1.2-.3 2.5-.2 3.6z"/>
                            </g>
                        </g>
                        <g>
                            <path class="st8" d="M156.5 201.5c4-8.6 7.2-17.5 9.7-26.7 1-3.9 1.9-8.1.9-12"/>
                            <g>
                                <path class="st5" d="M169.7 156.8c-.5-2.3-1.8-4.4-3.2-6.4l-2.1 5.7c-.3.8-.6 1.6-.6 2.4 0 .7.2 1.4.4 2 .4 1.1 2 2.7 3 3.3.1.1 3-4.6 2.5-7z"/>
                                <path class="st5" d="M163.1 180.1c.5-1.5.3-3.3-.5-4.7-.8-1.4-2-2.5-3.4-3.3-1.4-.7-3.1-1.2-4.1-2.5-.2 1.1.1 2.3.5 3.5.4 1.2.8 2.3 1.4 3.4.6 1.1 1.4 2 2.5 2.6.9.5 2 .6 3 .8l.6.2z"/>
                                <path class="st5" d="M167.4 174.4c.9-2 2-4 3.9-5 1.1-.6 2.3-.8 3.5-1.1 1.2-.4 2.3-1.1 2.7-2.3-.1 1.9-.1 3.9-.9 5.7-.5 1.1-1.3 2.2-2.2 3-.7.6-1.5 1.1-2.3 1.3-.7.2-1.4.1-2.2 0-.8-.1-2.5-1.6-2.5-1.6z"/>
                                <path class="st5" d="M157.3 191.7c-.6-.7-1.3-1.2-2.1-1.6-.8-.4-1.5-.8-2.2-1.4-.1 2.4 1.1 4.8 3.1 6.2.3.2.6.4 1 .4.5 0 1-.3 1.5-.6.1 0-.7-2.3-1.3-3z"/>
                                <path class="st5" d="M163.1 187.6c.4-.8 1.1-1.4 1.8-2 .7-.5 1.5-1 2.4-1.3.9-.3 1.8-.3 2.7.1.3.2.7.4 1 .5.3.1.8.2 1.1 0 .2-.1.4-.3.5-.2-.1.4-.4.8-.7 1.1-.6.6-1.1 1.1-1.7 1.6-.6.5-1.3 1.1-2 1.4-1.8.7-3.9.1-5.5-1l.4-.2z"/>
                            </g>
                        </g>
                        <g>
                            <path class="st1" d="M146.4 213.6l.2-.1 1.5-.5c6.9-.2 13.6-3 18.7-7.6 1.2-1.1 2.3-2.3 3.1-3.7 1.7-2.8 2.2-6.2 2.2-9.5.1-6.3-1.2-12.6-3.9-18.3-.1-.2-.2-.4-.3-.5-3.9 9.8-17.9 12.5-21.3 22.5-.7 2.2-.9 4.5-.9 6.8-.2 3.6-.1 7.3.7 10.9z"/>
                            <g class="st6">
                                <path class="st7" d="M146.6 213.5l1.5-.5c6.9-.2 13.6-3 18.7-7.6 1.2-1.1 2.3-2.3 3.1-3.7 1.7-2.8 2.2-6.2 2.2-9.5.1-6.3-1.2-12.6-3.9-18.3 0 1.6 0 3.1.1 4.7 0 1 0 2.1-.4 3.1-.4.8-1 1.4-1.5 2.2-1.1 1.6-1.5 3.7-2.5 5.4-.9 1.6-2.3 3-3 4.7-.8 1.8-.8 4.1-2.1 5.6-.6.8-1.6 1.3-2.2 2.1-.6.7-.8 1.7-1.4 2.4-.4.5-.9.9-1.4 1.3-1.9 1.5-3.4 3.4-5 5.2-.9 1-1.7 1.9-2.2 2.9z"/>
                            </g>
                        </g>
                        <g>
                            <path class="st8" d="M179 208.7c6.8-6.6 13.1-13.7 18.6-21.4 2.4-3.3 4.7-6.8 5.2-10.8"/>
                            <g>
                                <path class="st5" d="M207.5 171.8c.4-2.4-.1-4.8-.7-7.1-1.3 1.5-2.7 3-4 4.5-.6.6-1.1 1.3-1.4 2-.3.7-.3 1.4-.3 2.1 0 1.2.9 3.2 1.6 4.2 0 0 4.4-3.3 4.8-5.7z"/>
                                <path class="st5" d="M192.9 191.1c1-1.2 1.4-2.9 1.2-4.5-.2-1.6-1-3.1-2-4.3-1-1.2-2.4-2.2-2.9-3.8-.6 1-.7 2.2-.8 3.4-.1 1.2-.1 2.5 0 3.7.2 1.2.6 2.4 1.4 3.3.7.8 1.6 1.3 2.5 1.8l.6.4z"/>
                                <path class="st5" d="M198.9 187.3c1.6-1.5 3.3-3 5.4-3.3 1.2-.1 2.4.1 3.7.2 1.2.1 2.6-.2 3.4-1.2-.7 1.8-1.5 3.6-2.9 5-.9.9-2 1.6-3.1 2-.8.3-1.8.5-2.6.4-.7-.1-1.4-.4-2-.8-.7-.3-1.9-2.3-1.9-2.3z"/>
                                <path class="st5" d="M183.3 199.9c-.3-.8-.8-1.6-1.4-2.2-.6-.7-1.1-1.3-1.5-2.1-.9 2.2-.7 4.9.7 6.9.2.3.4.6.8.7.5.2 1.1.1 1.6-.1 0 0 .1-2.4-.2-3.2z"/>
                                <path class="st5" d="M190.2 198.1c.7-.6 1.5-.9 2.4-1.2.9-.2 1.8-.4 2.7-.4.9.1 1.8.4 2.5 1 .3.3.5.6.8.8.3.3.6.4 1 .4.2 0 .5-.1.6.1-.2.4-.7.6-1.1.8-.7.3-1.5.6-2.2.9-.8.3-1.6.5-2.4.5-1.9 0-3.7-1.3-4.7-2.9h.4z"/>
                            </g>
                        </g>
                        <g>
                            <path class="st9" d="M156.2 211.1h.2l1.6.1c6.5 2.2 13.8 2 20.2-.6 1.5-.6 2.9-1.3 4.2-2.3 2.6-2 4.2-5 5.4-8.1 2.3-5.9 3.3-12.3 2.8-18.5v-.6c-7.1 7.8-21.2 5.4-27.9 13.6-1.4 1.8-2.4 3.9-3.3 6-1.4 3.3-2.7 6.8-3.2 10.4z"/>
                            <g class="st6">
                                <path class="st7" d="M156.4 211.1l1.6.1c6.5 2.2 13.8 2 20.2-.6 1.5-.6 2.9-1.3 4.2-2.3 2.6-2 4.2-5 5.4-8.1 2.3-5.9 3.3-12.3 2.8-18.5-.5 1.5-1.1 2.9-1.6 4.4-.4 1-.7 2-1.5 2.7-.6.6-1.4 1-2.2 1.5-1.6 1.1-2.7 2.9-4.2 4.2-1.4 1.2-3.2 2-4.5 3.3-1.4 1.5-2.1 3.5-3.9 4.5-.9.5-1.9.7-2.8 1.2-.8.5-1.4 1.3-2.2 1.8-.6.4-1.2.5-1.8.8-2.3.8-4.4 2-6.5 3.2-1 .4-2.1 1.1-3 1.8z"/>
                            </g>
                        </g>
                        <g>
                            <g>
                                <path d="M155.4 140.8c-.3 1.3-.7 2.7-1.2 4.2-3.9 12.1-14.1 30.5-21 24-6.2-5.9-23.5-25.6-30.4-33.6-1.8-2.1-2.9-3.4-2.9-3.4l3.6-6.2.2-.3.1-.1s.4 4.6 11 7.9c10.6 3.3 16 14.5 16 14.5s.2-20.8 5.8-29c-.2 0 21.2 10.8 18.8 22z" fill="#5f5ddb"/>
                                <path class="st11" d="M103.7 125.4l-.1.1-.2.3-3.6 6.2c-3.6-2.6-13.1-3.8-13.1-3.8l-2.3-.1-.5-4.4 12.4-.1 4.7-1 2.1 2.4.6.4z"/>
                                <path class="st12" d="M103.7 125.6c-.1.1-.2.1-.2.2-1.7 1.2-2.7.2-7.9-.8-3.7-.7-8.1 1-9.4 2.2-.6.6-.6 1 .6 1 0 0-3.9 2.5-7.7 2.1-3.8-.4-.4-5.8 4.2-8.2 4.7-2.4 8.5-2.6 12-2.1s-.2-4-.2-4l2.5-1.1 5.7 10.1.3.5.1.1z"/>
                                <g class="st6">
                                    <path class="st7" d="M155.4 140.8c-.3 1.3-.7 2.7-1.2 4.2-3 .9-6.1-.6-9-1.8-2.6-1-5.8-1.7-8.1-.4-.3.2-.7.4-1 .7-2.1 2-2.3 5.8-4.9 7-1.3.6-3 .3-4.2-.4-1.3-.7-2.3-1.8-3.3-2.9-1.6-1.8-3.3-3.6-4.9-5.4-2-2.1-4-4.4-6.8-5.3-1.6-.6-3.3-.6-5.1-.7-1.4-.1-2.8-.2-4.3-.3-1.8-2.1-2.9-3.4-2.9-3.4-3.6-2.6-13.1-3.8-13.1-3.8s-3.9 2.5-7.7 2.1c-3.8-.4-.4-5.8 4.2-8.2 4.7-2.4 8.5-2.6 12-2.1s-.2-4-.2-4l2.5-1.1 5.7 10.1.4.4s.4 4.6 11 7.9c10.6 3.3 16 14.5 16 14.5s.2-20.8 5.8-29c.1-.1 21.5 10.7 19.1 21.9z"/>
                                </g>
                                <path class="st8" d="M142.6 130.3c-4.4 6.6-7.9 20.7-7.9 20.7"/>
                            </g>
                            <g>
                                <path class="st9" d="M130 162.8l-6.9 1.7.4-3.3.4-4 3.8 2.6.5.6z"/>
                                <path class="st13" d="M101.8 117.7c8.3-.2 15.5 12.2 16.2 15.2"/>
                                <path class="st9" d="M120.4 132l-21.6 2-3.8 5.3 23.1-3.3z"/>
                                <path class="st9" d="M123.1 164.5s-5.7.8-11.2 0l-3.1-15-2-10 7.8-2.6 3.6 5.4 4.2 18.8.7 3.4z"/>
                                <path class="st14" d="M130 162.8l-4.3-1.7-2.5 3.4-1.1-3.4-7.5-24.2.4-.4 5.5-4.5c2 2.3 7.3 21.9 9 28.6.3 1.3.5 2.2.5 2.2z"/>
                            </g>
                            <g class="st6">
                                <path class="st7" d="M130 162.8l-6.9 1.7s-5.7.8-11.2 0l-3.1-15c.2-.3.4-.5.7-.8 1.2-1.1 2.9-1.7 4.3-1l.5 2.5.6 6.9c.1.9.2 1.9.5 2.7.4.8 1.1 1.6 2 1.8 1.1.2 2.1-.4 3.2-.6.5 0 .9 0 1.4.1h.3c.3 0 .6.1.9.1h.3c1.4 0 2.7-.5 4.1-.7h.6c.4 0 .8 0 1.2.1.4 1.3.6 2.2.6 2.2z"/>
                            </g>
                            <g>
                                <path class="st13" d="M95.4 136.9c.9-11.7 2.7-17.3 6.5-17.7 3.8-.4 5 13.1 4.4 17.1"/>
                                <path class="st15" d="M111.1 164.1v3.7c-1.5.1-4.9-.6-6.9-1h-.1c-.9-.2-1.6-.4-1.6-.4s.8-.9 1.5-1.7c.5-.6 1.1-1.2 1.3-1.3.2-.1.7-.4 1.2-.8 1.1-.7 2.6-1.7 2.6-1.7l2 3.2z"/>
                                <path d="M112.7 161.5c-.1.3-.2.6-.2.9-.5 1.7-1 3.3-1.5 5v.2s-1.5-2.8-2.4-4c-.4.5-2.3 1.9-3.6 2.8-.4.3-.7.5-.9.6h-.1c-.1-.2-.1-1-.1-2.1s.1-2.4.2-3.9c.2-3.5.5-7.1.5-7.1l2.4-11.5c.6-2.6 1-5.9 2.3-8.2h.1c1.9.2 3.9 1.1 5.7 1.7 1.3 8.4-.1 17.2-2.4 25.6z" fill="#42389d"/>
                                <path class="st1" d="M107.6 158.2c-.4 1.8-.8 3.3-1.2 4.5-.5 1.6-.8 2.5-1 2.9-.1.3-.3.4-.5.7-.1.2-.4.4-.9.5-2.5 1-9.7 1.6-13.7 1.3-3.4-.3-9.2-3.1-9.2-3.1.7-1.5 1.1-3.1 1.4-4.7.6-3 1.1-6.1 1.5-9.1.1-.9.3-2 .4-3.2.7-5.4 1.5-13 1.5-13 1.2 0 2.4 0 3.6-.1 2 0 3.9-.1 5.9-.2 2.8-.1 5.7-.2 8.5-.4.8 0 1.6-.1 2.4-.1 1-.1 2-.1 3-.2v1.6c.5 9.7-.5 17.4-1.7 22.6z"/>
                                <path class="st15" d="M90 138.5c0 .9-.5 1.7-1.1 1.7s-1.1-.7-1.1-1.7c0-.9.5-1.7 1.1-1.7s1.1.8 1.1 1.7z"/>
                                <path class="st15" d="M105.2 138.5c0 .9-.5 1.7-1.1 1.7-.6 0-1.1-.7-1.1-1.7 0-.9.5-1.7 1.1-1.7.6.1 1.1.8 1.1 1.7z"/>
                                <path class="st13" d="M89.2 138.2c.9-6.2 1-10.9 3.1-16 .4-1 .9-2.1 1.8-2.7.4-.3.8-.4 1.3-.6.8-.2 1.7-.4 2.5-.3 1.3.1 2.5.9 3.4 1.8.9 1 1.5 2.2 1.9 3.4 1 2.9.8 10.6.9 13.7"/>
                            </g>
                            <g>
                                <path class="st11" d="M105.8 115.6c-.3 1.2-2.1 2.4-2.1 2.4v1.3c0 1.4-.1 3.3-.7 3.6-.9.5-1.8-.3-1.8-.3s-.3 1.4-1.7 1c-1.4-.3-1.8-1.7-1.8-1.7s-.1 1.8-1.2 1.7c-1.1-.1-1.1-1.9-1.1-1.9s-2.5 0-2.1-2.7c.3-2.7 1.5-4.5 2.7-8 0-.1 0-.1.1-.2 1-3.3 4.4-22.2 5.8-30.2.4-2.2 1.9-4 4-4.8h.1s1.7 1.3 3.1 4.4c.2.4.3.8.5 1.2v.1c.6 1.8 1.1 4.1 1.2 7 .2 9.3-11.8 24.3-11.8 24.3s3.1-.5 3.8 0c.5.3 3.4 1.6 3 2.8z"/>
                                <g class="st17">
                                    <path class="st7" d="M109.4 81.3c-.8.2-1.7.6-2.3 1.3-1.1 1.1-1.7 2.7-2.1 4.2-.5 1.5-.9 3.1-1.8 4.4l-.9 1.2c-.4.7-.5 1.6-.5 2.4-.6 5.7-2.6 11.2-5.8 16 1-3.3 4.4-22.2 5.8-30.2.4-2.2 1.9-4 4-4.8h.1s1.7 1.3 3.1 4.4c.1.3.2.7.4 1.1z"/>
                                </g>
                                <path class="st11" d="M217.6 184.4c-2.1 3.5-10.5 5.6-15.7 5.7-2.3 0-4-.3-4.3-1.1-.6-1.5-4.2-5.2-8.6-9.2.5-.4 1.1-.9 1.8-1.4 1.5-1.2 3.1-2.7 4.4-3.8 1.2 2.2 2.4 4.2 3.6 5.6 6 7 18.8 4.2 18.8 4.2z"/>
                                <path d="M195.2 174.6c-1.3 1.2-2.9 2.6-4.4 3.8-.6.5-1.2 1-1.8 1.4-2.9-2.7-6.2-5.6-9-8-7-6-6.2-17.6-6.2-17.6-4.6-1.2-39.6-18.4-45.6-40.8 0 0 1.9-.4 4.8-.8 7.1-1.2 20.1-3 23.4-1.2 4.6 2.6 24.2 33.6 27.5 37.6 2.6 3.2 6.7 16.7 11.3 25.6z" fill="#756ce9"/>
                                <g>
                                    <path class="st8" d="M140.2 113c3.2 7 12 6.8 12 6.8"/>
                                    <path class="st8" d="M147.4 113c1.8 1.9 16 24 19.8 28.4"/>
                                </g>
                                <g class="st6">
                                    <path class="st7" d="M201.8 190c-2.3 0-4-.3-4.3-1.1-.6-1.5-4.2-5.2-8.6-9.2-2.9-2.7-6.2-5.6-9-8-7-6-6.2-17.6-6.2-17.6-4.6-1.2-39.6-18.4-45.6-40.8 0 0 1.9-.4 4.8-.8l22.7 1.4c-4.3.1-9 1.5-11.2 5.2-2 3.2-1.5 7.5.3 10.9 1.8 3.3 4.9 5.8 7.9 8 8.2 5.9 17.5 10.3 27.3 12.8-2 2.1-2.4 5.4-1.8 8.2.7 2.8 2.3 5.4 3.9 7.8 2.6 4 5.4 7.9 8.6 11.5 2.6 2.9 5.4 5.5 8.6 7.7.8.5 1.6 1.1 2.1 1.9.6.7.8 1.5.5 2.1z"/>
                                </g>
                                <path class="st12" d="M218.8 188.9c-1 .9-2.2 1.7-3.5 2.3-4.8 2.2-8.6 2.2-12.1 1.6-3.5-.6 0 4 0 4l-2.5 1-5.6-11c.2-.1.4-.3.6-.4 1-.5 1.9-.3 3.7.2 1 .3 2.2.7 3.9 1.1 5.4 1.3 12.5-2.7 8.9-2.8 0 0 4-2.3 7.8-1.7 2.7.4 1.5 3.3-1.2 5.7z"/>
                                <path class="st12" d="M156.9 30.8l-7.6 23.1-13.6 41.2-1.4 4.1c-1 1.3-2.4 2.3-3.9 2.9-1.4.6-3.4.6-4-.8-.4-.8-.2-1.8-.6-2.6-.4-.8-1.3-1.1-2.2-1.2-.9-.1-1.7.1-2.6 0-2.6-.3-4.6-2.6-5.1-5.1-.2-.7-.2-1.4-.2-2.2.1-1.8.7-3.6 1.6-5.3l.6-1.1 5-9.3.8-1.4c2-1.5 3.1-4.1 3-6.6-.1-1.2-.4-2.3-.4-3.5 0-1 .1-2.1.5-3.1.2-.6.5-1.2.9-1.7 1.2-1.7 3-2.8 4.5-4.1 1.5-1.4 2.9-3.3 2.6-5.3-.2-1.4-1.1-2.6-1.6-3.9-.9-2.1-1-4.5-.2-6.6.8-2.1 2.5-3.9 4.6-4.8l.7.3c-1-.4-1.3-1.7-1.1-2.7.1-.3.2-.7.5-.9.2-.2.5-.2.8-.2 1-.1 2-.1 2.7.6 0 0-.6-4.5.8-6.7 1.3-2 3.7-3.1 6-2.9 2.3.1 4.5 1.4 6.1 3.2 1.5 2 2.4 4.3 2.8 6.6z"/>
                                <path class="st19" d="M149.3 53.9l-13.6 41.2c-2.8.7-7.9 1.3-8.2-2.8-.3-4.9-9.5-.8-11.9-1.9.1-1.8.7-3.6 1.6-5.3l.6-1.1 2.1-2.1c1-1.1 2-3.9 2.9-7.2l.8-1.4c2-1.5 3.1-4.1 3-6.6-.1-1.2-.4-2.3-.4-3.5 0-1 .1-2.1.5-3.1.5 1.5 1.7 3.2 4 3.3 4.6.2 8.9-7.4 6.9-10.5-2-3.1-2.9-6.9-2.5-11h6.1l8.1 12z"/>
                                <path class="st11" d="M189 46.5c-.9 3.6-6.1 6.9-9 8.5-1.2.7-2.1 1.1-2.1 1.1l-4 1.6s-1.3-7.6 0-9.6c1.3-2.1 6.7-3.6 6.7-3.6s-1.3-6.1-.7-19.4c.1-1.3.2-2.7.3-4.2l2.4 1.2c2.6 3.8 7.7 19.4 6.4 24.4z"/>
                                <g class="st17">
                                    <path class="st7" d="M179.6 49.1c-1.2 1.6.4 3.9.4 5.9-1.2.7-2.1 1.1-2.1 1.1l-4 1.6s-1.3-7.6 0-9.6c1.3-2.1 6.7-3.6 6.7-3.6s-1.3-6.1-.7-19.4h.7c-.7 1.4-.5 3.2 0 4.7.6 1.5 1.4 2.9 2.1 4.3 1.1 2.6 1.5 5.6 1.8 8.4.2 1.5.2 3.3-.9 4.4-1.1 1-3.1 1-4 2.2z"/>
                                </g>
                                <path class="st20" d="M192.2 16.3c1.5 1.3.7 2.9-1.1 3.3-1.8.4-1.3-.9-.7-1.7.7-.7-4.4 2.6-5.6-.1-1.2-2.7 3.5-4 3.5-4h4.6l-.7 2.5z"/>
                                <path class="st11" d="M180.2 20.8c.3-3.6-.5-6.1 1.1-7.4.7-.6 2-1 3.1-1.2 1.5-.3 3.1-.2 4.7.2 1.7.5 4.2 1.1 6 .7 2.9-.5.8 2.4-3.6 2.3-4.5-.1-4.7.3-4.7.3l-2 2.3s2.4 2.3 4.5 2.1c2.1-.1 3.1-1.5 3.5-.3.4 1.2-1.3 2.5-3.5 2.5s-6.7-.3-6.7-.3l-2.4-1.2z"/>
                                <path class="st14" d="M165 68.4c-.2.8 12.9-8.3 12.9-8.3-.1-4.3-.8-8.5-2.1-12.6l-.6-.6c-8.9 3.7-17.8 7.5-26.6 11.5l16.4 10z"/>
                                <path class="st14" d="M165.2 67.2c1.1 3.9.8 8.1-.7 11.8-.8 1.9-1.9 3.6-2.5 5.6-.5 1.7-.6 3.4-.7 5.1-.3 4.9-.9 9.8-1.6 14.7-.6 3.4.5 6.6-.3 9.9-7.3.5-16.2 1-23.5 1.2-2.5.1-4.9.2-7.4-.2-.8-.1-1.7-.3-2.3-.9-.9-.9-.8-2.3-.3-3.4s1.4-2 2.1-3c1.5-2 2.1-4.5 2.8-6.9.9-3.3 1.7-6.6 1.8-10 0-2.6-.5-5.3-.6-7.9v-2.7c.1-1.4.4-2.7.8-4 .7-2.5 1.6-5 3.2-7.1 1.9-2.6 4.7-4.5 7.7-5.7 3-1.2 6.2-1.8 9.5-2.2 2.6-.3 5.4-.5 7.9.3 2.5.9 4.8 3 5 5.6l-.9-.2z"/>
                                <path class="st14" d="M160 72.2c2.1-1.1 4.2-2.3 5.3-4.4 1.2-2.1.9-5-.6-6.9-1.5-1.9-4.3-2.7-6.6-2l-9.4-.8c-6.5 2.3-13 4.6-19.7 6.5-2.9.8-5.7 1.5-8.5 2.5-5.6 2-10.7 5.1-15.7 8.3 2.5 4.5 4.5 9.2 6.1 14.1 7.1-1.3 14.1-3.3 20.7-6.2 2.4-1 4.8-2.1 7.3-3 3.4-1.2 6.9-1.9 10.3-3.1"/>
                                <path class="st11" d="M148.5 58.7c-.3 2.3-1 4.3-2.3 4.7-3.1.9-4.7-2.9-4.7-2.9s.2-.5.4-1.4c.4-2 .9-5.9-.3-10 0-.2-.1-.3-.1-.5l.9-.4 2.7-1 3.6 4.9c.1-.1.3 3.5-.2 6.6z"/>
                                <g class="st17">
                                    <path class="st7" d="M148.5 58.7c-1.3-.4-2.6-.7-3.9-.6-1 .1-1.9.4-2.7.9.4-2 .9-5.9-.3-10 .2-.3.5-.6.8-.8l2.7-1 3.6 4.9c.1-.1.3 3.5-.2 6.6z"/>
                                </g>
                                <path class="st12" d="M164.4 35.7c-.3 2.8-2.3 5.5-5 6.5l-5.7-8.4-.9-1.3c.9-2 3.1-3 5.2-3.3 1-.2 2-.2 3 .1 1.9.6 3.1 2.6 3.4 4.5.1.6.1 1.3 0 1.9z"/>
                                <path class="st19" d="M164.4 35.7c-.3 2.8-2.3 5.5-5 6.5l-5.7-8.4 3.6-1.7c2 5.9 6.2 1.7 7.1 3.6z"/>
                                <path class="st11" d="M158.5 38.5c2.9 7.9 2.4 12.9 0 16.3-2.4 3.4-7.2 3.2-10.6 1.9-3.4-1.3-5.8-5.3-5.8-5.3l-3.3-8.4 1.4-3.8 6.7-5.2 6.6-1.5 3.3.8 1.7 5.2z"/>
                                <path class="st11" d="M142.7 48.4c-3.2-3.5-6.5-1.1-5.4 1.8 1.1 2.9 6 4.4 6 1.9.1-2.4-.6-3.7-.6-3.7z"/>
                                <path class="st12" d="M150.5 44c.1.4.1.8-.2.9-.2.1-.5-.2-.7-.6-.1-.4-.1-.8.2-.9.3-.1.6.2.7.6z"/>
                                <path class="st12" d="M155.9 42.5c.1.4.1.8-.2.9-.2.1-.5-.2-.7-.6-.1-.4-.1-.8.2-.9.3-.1.6.2.7.6z"/>
                                <path d="M155 45.6c.2.6 2 1.4 1.7 1.9-.3.5-2.2.5-2.2.5" fill="none" stroke="#efac86" stroke-linecap="round" stroke-miterlimit="10"/>
                                <path class="st12" d="M157.3 33.9c-.1.5-.3 1-.5 1.4-.2.4-.5.7-.8 1.1-.9 1-2.2 1.8-3.5 2.2-2.4.7-5 0-7.5-.6.5 1 .4 2.3-.2 3.3-.5 1-1.4 1.8-2.4 2.4-1.7 1.1-4 1.6-5.7.6l-1-.2-.3-.3c-.6-.6-.8-1.4-.8-2.2 0-.9.4-1.9.8-2.7 1.5-3 4-5.5 7-7s6.5-2 9.8-1.4c.6.1 1.2.3 1.7.6l2.4.5c.8.3 1.1 1.3 1 2.3z"/>
                                <path class="st23" d="M134.9 62.9c3.1 7.2 8.4 5.7 10.9 4.6 2.5-1.2 4.4-5.6 3.7-9.3"/>
                                <path class="st23" d="M161.5 84c-4.1 5.1-16.8 8.7-16.8 8.7"/>
                                <path class="st20" d="M141.1 48.4c-2.4-1.6-2.6 1.2-.6 2.3 1.9 1.2 2.8 0 2.8 0l-2.2-2.3z"/>
                                <path class="st19" d="M156.8 35.3c-.2.4-.5.7-.8 1.1-.9 1-2.2 1.8-3.5 2.2-2.4.7-5 0-7.5-.6.5 1 .4 2.3-.2 3.3-.5 1-1.4 1.8-2.4 2.4-1.7 1.1-4 1.6-5.7.6l-1-.2-.3-.3c-.5-1.3-.1-2.7-.1-2.7s1.7 1.7 4.9-.4 2.8-5.9 2.8-5.9c2 1.2 9 3.9 13.8.5z"/>
                                <path class="st19" d="M159.7 104.4c-.6 3.4.5 6.6-.3 9.9-7.3.5-16.2 1-23.5 1.2-2.5.1-4.9.2-7.4-.2-.8-.1-1.7-.3-2.3-.9-.9-.9-.8-2.3-.3-3.4s1.4-2 2.1-3c1.5-2 2.1-4.5 2.8-6.9.9-3.3 1.7-6.6 1.8-10 0-2.6-.5-5.3-.6-7.9 4.1-1.7 10.1-3.8 10.3-3.9-.2.1-5.9 4.3-6.1 12.2-.2 8-2.7 14.1 3.1 15.7 5.8 1.6 11.5 3.9 18.1-1.6.8-.8 1.6-1.2 2.3-1.2z"/>
                                <path class="st23" d="M110 73.8c4.1 2.6 6.8 7.3 7 12.1"/>
                                <path class="st23" d="M172.4 48.5c1.5 3.6 2.4 7.4 2.6 11.3"/>
                                <g class="st6">
                                    <path class="st7" d="M218.8 188.9c-1 .9-2.2 1.7-3.5 2.3-4.8 2.2-8.6 2.2-12.1 1.6-3.5-.6 0 4 0 4l-2.5 1-5.6-11c.2-.1.4-.3.6-.4 1-.5 1.9-.3 3.7.2-.2 1.4.5 3.5 1.8 4.1 1.3.6 2.9.6 4.3.5 1.9-.1 3.8-.1 5.7-.2 1.8-.1 3.7-.1 5.3-.9.8-.3 1.5-.8 2.3-1.2z"/>
                                </g>
                            </g>
                            <g class="st6">
                                <path class="st7" d="M112.7 161.5c-.1.3-.2.6-.2.9-.5 1.7-1 3.3-1.5 5v.5c-1.5.1-4.9-.6-6.9-1-2.5 1-9.7 1.6-13.7 1.3-3.4-.3-9.2-3.1-9.2-3.1.7-1.5 1.1-3.1 1.4-4.7.6-3 1.1-6.1 1.5-9.1.1-.9.3-2 .4-3.2h.4c-.6 3.8-.8 7.6-.6 11.4.1 1.4.3 3.1 1.5 3.9.6.4 1.4.5 2.1.6 1.3.1 2.6.2 3.9.2 4.3.2 9-.3 12.2-3.1.3-.2.5-.5.8-.8.4-.4.7-.9 1.2-1.2.4-.3.9-.4 1.3-.6.1 0 .1 0 .2-.1.8-.3 1.5-.5 2.3-.7.2-.1.5-.1.7-.1.2.1.4.3.5.4.6.8 1 1.8 1.3 2.7.2.2.3.5.4.8z"/>
                            </g>
                        </g>
                    </g>
                </svg>
            </div>
        </x-shopper::empty-state>
    @else
        <div class="mt-8">
            <livewire:shopper-tables.customers-table />
        </div>
    @endif

    <x-shopper::learn-more :name="__('shopper::layout.sidebar.customers')" link="customers" />

</x-shopper::container>
