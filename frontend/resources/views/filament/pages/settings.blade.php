<x-filament-panels::page>
    {{-- Page content --}}
    {{ $this->form }}
    <div class="mt-6 flex justify-end">
        <x-filament::button wire:click="save" icon="heroicon-o-check-circle">
            Save Changes
        </x-filament::button>
    </div>
</x-filament-panels::page>
