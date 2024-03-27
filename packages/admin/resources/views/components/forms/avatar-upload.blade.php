<div class="flex items-center">
    {{ $slot }}

    <div x-data="{ focused: false }">
        <span class="ml-5">
            <input @focus="focused = true" @blur="focused = false" class="sr-only" type="file" {{ $attributes }}>
            <label for="{{ $attributes['id'] }}" :class="{ 'focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-500': focused }" class="cursor-pointer inline-flex py-2 px-3 border border-gray-300 dark:border-gray-700 rounded-md text-sm leading-4 font-medium text-gray-700 dark:bg-gray-700 dark:text-gray-400 hover:text-gray-600 dark:hover:text-gray-300 shadow-sm focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-500">
                {{ __('shopper::layout.forms.label.change') }}
            </label>
        </span>
    </div>
</div>
