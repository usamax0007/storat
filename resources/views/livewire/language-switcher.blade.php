<div class="flex items-center space-x-2">
    <label for="language-select" class="text-sm font-medium text-gray-700 dark:text-gray-300">
        {{ __('Language') }}:
    </label>
    <select
        wire:change="switchLanguage($event.target.value)"
        wire:loading.attr="disabled"
        class="block w-32 rounded-md border-gray-300 shadow-sm focus:border-primary-500 focus:ring-primary-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white sm:text-sm"
    >
        <option value="ar" {{ $currentLocale === 'ar' ? 'selected' : '' }}>العربية</option>
        <option value="en" {{ $currentLocale === 'en' ? 'selected' : '' }}>English</option>
    </select>
    <div wire:loading class="ml-2">
        <svg class="animate-spin h-4 w-4 text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
            <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
            <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
        </svg>
    </div>
</div>

<script>
    document.addEventListener('livewire:init', () => {
        Livewire.on('language-changed', () => {
            window.location.reload();
        });
    });
</script>
