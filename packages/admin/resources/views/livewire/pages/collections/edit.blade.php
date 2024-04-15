<x-shopper::container>
    <x-shopper::breadcrumb :back="route('shopper.collections.index')">
        <x-untitledui-chevron-left
            class="shrink-0 h-4 w-4 text-gray-300 dark:text-gray-600"
            aria-hidden="true"
        />
        <x-shopper::breadcrumb.link
            :link="route('shopper.collections.index')"
            :title="__('shopper::layout.sidebar.collections')"
        />
    </x-shopper::breadcrumb>

    <x-shopper::heading class="mt-5">
        <x-slot name="title">
            {{ $collection->name }}
        </x-slot>
    </x-shopper::heading>

    <form wire:submit="store" class="mt-8 pt-10 border-t border-gray-200 dark:border-gray-700">
        <div class="space-y-10">
            {{ $this->form }}

            <div class="py-8 border-t border-gray-200 dark:border-gray-700">
                <div class="flex justify-end">
                    <x-shopper::buttons.primary type="submit" wire.loading.attr="disabled">
                        <x-shopper::loader wire:loading wire:target="store" class="text-white" />
                        {{ __('shopper::layout.forms.actions.update') }}
                    </x-shopper::buttons.primary>
                </div>
            </div>
        </div>

    </form>
</x-shopper::container>
