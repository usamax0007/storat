<div x-data="{ open: false }" class="relative inline-block text-left">
    <!-- Current Language Button -->
    <button @click="open = !open"
            class="flex items-center gap-2 w-14 h-14 rounded-full bg-white px-3 py-2">

        @if($currentLocale === 'ar')
            <img src="{{ asset('assets/images/img_36.png') }}" class="h-6 w-8" alt="Arabic Flag">
        @else
            <img src="{{ asset('assets/images/uk.png') }}" class="h-6 w-8" alt="English Flag">
        @endif
    </button>

    <!-- Dropdown -->
    <div x-show="open" @click.away="open = false"
         class="absolute z-10 mt-2 w-32 rounded-md bg-transparent">
        <div class="py-1">
            @if($currentLocale === 'en')
            <button wire:click="switchLanguage('ar')" class="flex items-center gap-2 w-full px-3 py-2 text-left">
                <img src="{{ asset('assets/images/img_36.png') }}" class="h-6 w-8" alt="Arabic Flag">
            </button>
            @endif
                @if($currentLocale === 'ar')
                    <button wire:click="switchLanguage('en')" class="flex items-center gap-2 w-full px-3 py-2 text-left">
                <img src="{{ asset('assets/images/uk.png') }}" class="h-6 w-8" alt="English Flag">
            </button>
                @endif
        </div>
    </div>
</div>


<script>
    document.addEventListener('livewire:init', () => {
        Livewire.on('language-changed', () => {
            window.location.reload();
        });
    });
</script>
