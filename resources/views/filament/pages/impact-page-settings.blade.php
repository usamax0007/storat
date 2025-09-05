<x-filament::page>
    {{ $this->form }}

    <div class="mt-6">
        <x-filament::button wire:click="save">
            Save Impact Page
        </x-filament::button>
    </div>
</x-filament::page>
