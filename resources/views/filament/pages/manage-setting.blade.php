<x-filament-panels::page>
    <form wire:submit.prevent="update" class="space-y-6">
        {{ $this->form }}

        <div class="mt-10" style="padding-top: 30px;">
        <x-filament::button type="submit">
            Save Settings
        </x-filament::button>
        </div>
    </form>
</x-filament-panels::page>
