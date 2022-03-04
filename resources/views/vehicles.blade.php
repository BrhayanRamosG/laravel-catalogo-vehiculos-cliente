<x-app-layout pagetitle="Vehículos">
    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl leading-tight">
            {{ __('Vehiculos') }}
        </h2>
    </x-slot> --}}

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-700 dark:text-white overflow-hidden shadow-xl sm:rounded-lg">
                {{-- @livewire('vehicles.vehicles') --}}
                <h2 class="ml-6 mt-6 text-3xl font-bold">
                    Todos los veh&iacute;culos
                </h2>
                @livewire('vehicles.vehicle-card')
            </div>
        </div>
    </div>
</x-app-layout>
