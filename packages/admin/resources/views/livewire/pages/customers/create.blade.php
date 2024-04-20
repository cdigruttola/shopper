<x-shopper::container>
    <x-shopper::breadcrumb :back="route('shopper.customers.index')">
        <x-untitledui-chevron-left class="h-4 w-4 shrink-0 text-gray-300 dark:text-gray-600" />
        <x-shopper::breadcrumb.link
            :link="route('shopper.customers.index')"
            :title="__('shopper::layout.sidebar.customers')"
        />
    </x-shopper::breadcrumb>

    <x-shopper::heading>
        <x-slot name="title">
            {{ __('shopper::words.actions_label.add_new', ['name' => __('shopper::words.customer')]) }}
        </x-slot>
    </x-shopper::heading>

    <form wire:submit="store" class="mt-10">
        {{ $this->form }}

        <div class="mt-10 border-t border-gray-200 pt-10 dark:border-gray-700">
            <div class="flex justify-end">
                <x-shopper::buttons.primary type="submit" wire:loading.attr="disabled">
                    <x-shopper::loader wire:loading wire:target="store" class="text-white" />
                    {{ __('shopper::layout.forms.actions.save') }}
                </x-shopper::buttons.primary>
            </div>
        </div>
    </form>
</x-shopper::container>
