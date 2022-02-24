<x-app-layout pagetitle="Remates">
    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl leading-tight">
            {{ __('Remates') }}
        </h2>
    </x-slot> --}}

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-700 overflow-hidden shadow-xl sm:rounded-lg">
                @livewire('vehicles.vehicle-card', ['categoryId' => 3])
            </div>
        </div>
    </div>
</x-app-layout>
