<!-- resources/views/filament/pages/banner-image.blade.php -->
<x-filament-panels::page>
    <form wire:submit.prevent="update">
        {{ $this->form }}

        <div class="mt-10" style="padding-top: 30px;">
            <x-filament::button type="submit">
                Save Banner
            </x-filament::button>
        </div>
    </form>
</x-filament-panels::page>
