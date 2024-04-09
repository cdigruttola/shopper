@props([
    'label' => __('shopper::layout.forms.label.search'),
    'for' => 'search-filter',
    'placeholder' => __('shopper::layout.forms.label.search'),
])

<div class="flex flex-1">
    <label for="{{ $for }}" class="sr-only">{{ $label }}</label>
    <div class="flex flex-1">
        <div class="relative grow focus-within:z-10">
            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                <x-untitledui-search-sm
                    class="h-5 w-5 text-gray-400 dark:text-gray-500"
                    aria-hidden="true"
                />
            </div>
            <x-shopper::forms.input
                type="search"
                id="search-filter"
                wire:model.live.debounce.550ms="search"
                class="pl-10"
                :placeholder="$placeholder"
            />
            <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                <x-shopper::loader wire:loading wire:target="search" class="text-primary-600" />
            </div>
        </div>
    </div>
</div>
