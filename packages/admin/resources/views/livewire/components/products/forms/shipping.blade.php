<x-shopper::container>
    <form wire:submit="store">
        {{ $this->form }}

        <div class="mt-10 border-t border-gray-200 pt-8 dark:border-gray-700">
            <div class="flex justify-end">
                <x-shopper::buttons.primary type="submit" wire.loading.attr="disabled">
                    <x-shopper::loader wire:loading wire:target="store" class="text-white" />
                    {{ __('shopper::layout.forms.actions.update') }}
                </x-shopper::buttons.primary>
            </div>
        </div>
    </form>
</x-shopper::container>
