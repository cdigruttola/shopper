<x-shopper::container>
    <x-shopper::breadcrumb :back="route('shopper.settings.index')" :current="__('shopper::words.locations')">
        <x-untitledui-chevron-left class="shrink-0 h-4 w-4 text-gray-300 dark:text-gray-600" />
        <x-shopper::breadcrumb.link :link="route('shopper.settings.index')" :title="__('shopper::words.settings')" />
    </x-shopper::breadcrumb>

    <x-shopper::heading class="my-6">
        <x-slot name="title">
            {{ __('shopper::words.locations') }}
        </x-slot>

        <x-slot name="action">
            @can('add_inventories')
                @if($inventories->count() < ((int) config('shopper.admin.inventory-limit') + 1))
                    <div class="flex">
                        <x-shopper::buttons.primary :link="route('shopper.settings.inventories.create')">
                            {{ __('shopper::words.actions_label.add_new', ['name' => mb_strtolower(__('shopper::words.location'))]) }}
                        </x-shopper::buttons.primary>
                    </div>
                @endif
            @endcan
        </x-slot>
    </x-shopper::heading>

    <div class="mt-10 lg:grid lg:grid-cols-3 lg:gap-6">
        <div class="lg:col-span-1">
            <div>
                <h3 class="text-lg font-medium leading-6 text-gray-900 dark:text-white font-heading">
                    {{ __('shopper::words.locations') }}
                </h3>
                <p class="mt-2 text-sm leading-5 text-gray-500 dark:text-gray-400">
                    {{ __('shopper::pages/settings.location.description') }}
                </p>
                <p class="mt-3 text-sm leading-5 text-gray-500 dark:text-gray-400">
                    {{ __('shopper::pages/settings.location.count', ['count' => $inventories->count()]) }}
                </p>
            </div>
        </div>
        <div class="mt-5 lg:mt-0 lg:col-span-2">
            <x-shopper::card class="overflow-hidden">
                <ul class="divide-y divide-gray-200 dark:divide-gray-700">
                    @foreach($inventories as $inventory)
                        <li>
                            <x-shopper::link
                                href="{{ route('shopper.settings.inventories.edit', $inventory) }}"
                                class="block hover:bg-gray-50 focus:outline-none dark:hover:bg-gray-700"
                            >
                                <div class="p-4 sm:p-6">
                                    <div class="flex items-center">
                                        <div class="shrink-0 hidden lg:block">
                                            <span class="flex items-center justify-center h-12 w-12 bg-gray-50 text-gray-500 rounded-md dark:bg-gray-700 dark:text-gray-400">
                                                <x-untitledui-building-05 class="w-6 h-6" aria-hidden="true" />
                                            </span>
                                        </div>
                                        <div class="flex-1 lg:ml-4">
                                            <div class="flex items-center justify-between">
                                                <div class="text-sm leading-5 font-medium text-primary-600 truncate dark:text-primary-500/50">
                                                    {{ $inventory->name }}
                                                </div>
                                                @if($inventory->is_default)
                                                    <div class="ml-2 shrink-0 flex">
                                                        <span class="px-2 inline-flex text-xs leading-5 font-medium rounded-full bg-gray-100 text-gray-800 border-2 border-white dark:bg-gray-700 dark:text-gray-300 dark:border-gray-800">
                                                            {{ __('shopper::words.default') }}
                                                        </span>
                                                    </div>
                                                @endif
                                            </div>
                                            <div class="mt-2 sm:flex sm:justify-between">
                                                <div class="sm:flex sm:space-x-4">
                                                    <div class="flex items-center text-sm text-gray-500 dark:text-gray-400">
                                                        {{ isoToEmoji($inventory->country->cca2) }}
                                                        {{ $inventory->country->name }}
                                                    </div>
                                                    <div class="mt-2 flex items-center text-sm text-gray-500 sm:mt-0 dark:text-gray-400">
                                                        <x-untitledui-marker-pin-02 class="shrink-0 mr-1.5 h-5 w-5 text-gray-400 dark:text-gray-500" aria-hidden="true" />
                                                        {{ $inventory->city }}
                                                    </div>
                                                    <div class="mt-2 flex items-center text-sm text-gray-500 sm:mt-0">
                                                        <x-untitledui-phone class="shrink-0 mr-1.5 h-5 w-5 text-gray-400 dark:text-gray-500" aria-hidden="true" />
                                                        {{ $inventory->phone_number ?? __('shopper::words.number_not_set') }}
                                                    </div>
                                                </div>
                                                <div class="mt-2 flex items-center text-sm text-gray-500 sm:mt-0 dark:text-gray-400">
                                                    <x-untitledui-calendar class="shrink-0 mr-1.5 h-5 w-5 text-gray-400 dark:text-gray-500" />
                                                    <span>
                                                        {{ __('shopper::words.added_on') }}
                                                        <time datetime="{{ $inventory->created_at->format('d-m-Y') }}">
                                                            {{ $inventory->created_at->formatLocalized('%d %B %G') }}
                                                        </time>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </x-shopper::link>
                        </li>
                    @endforeach
                </ul>
            </x-shopper::card>
        </div>
    </div>

    <x-shopper::learn-more :name="__('shopper::words.location')" link="locations" />
</x-shopper::container>
