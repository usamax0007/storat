<x-filament-panels::page>
    {{ $this->form }}
    <div class="grid ">
        <x-filament::button wire:click="save" color="primary">
            Update
        </x-filament::button>
    </div>
</x-filament-panels::page>
