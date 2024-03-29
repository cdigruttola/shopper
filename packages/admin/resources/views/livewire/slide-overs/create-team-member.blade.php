<form wire:submit="store" class="flex h-full flex-col divide-y divide-gray-200 dark:divide-gray-700">
    <div class="h-0 flex-1 overflow-y-auto scrolling py-6">
        <header class="px-4 sm:px-6">
            <div class="flex items-start justify-between">
                <h2 class="text-lg font-medium text-gray-900 dark:text-white">
                    {{ __('shopper::pages/settings.roles_permissions.add_admin') }}
                </h2>
                <div class="ml-3 flex h-7 items-center">
                    <button
                        type="button"
                        class="rounded-md bg-white text-gray-400 hover:text-gray-500 dark:bg-gray-900 dark:text-gray-500 dark:hover:text-gray-300 focus:outline-none focus:ring-2 focus:ring-primary-500 focus:ring-offset-2 dark:ring-offset-gray-900"
                        wire:click="$dispatch('closePanel')"
                    >
                        <span class="sr-only">Close panel</span>
                        <x-untitledui-x class="h-6 w-6" stroke-width="1.5" aria-hidden="true" />
                    </button>
                </div>
            </div>
        </header>
        <div class="mt-8 flex-1 px-4 sm:px-6">
            {{ $this->form }}
            <div class="mt-6 rounded-lg bg-yellow-50 p-4">
                <div class="flex">
                    <div class="shrink-0">
                        <x-untitledui-alert-triangle class="h-6 w-6 text-yellow-400" aria-hidden="true" />
                    </div>
                    <div class="ml-3">
                        <h3 class="text-sm leading-5 font-medium text-yellow-800">
                            {{ __('shopper::words.attention_needed') }}
                        </h3>
                        <p class="mt-2 text-sm leading-5 text-yellow-700">
                            {{ __('shopper::words.attention_description') }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="flex shrink-0 justify-end p-4 space-x-4">
        <x-shopper::buttons.default wire:click="$dispatch('closePanel')" type="button" class="mt-3 sm:mt-0 sm:w-auto">
            {{ __('shopper::layout.forms.actions.cancel') }}
        </x-shopper::buttons.default>
        <x-shopper::buttons.primary type="submit" wire.loading.attr="disabled">
            <x-shopper::loader wire:loading wire:target="store" class="text-white" />
            {{ __('shopper::layout.forms.actions.save') }}
        </x-shopper::buttons.primary>
    </div>
</form>
