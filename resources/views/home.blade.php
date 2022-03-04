<x-app-layout>
    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl leading-tight">
            {{ __('Inicio') }}
        </h2>
    </x-slot> --}}

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="dark:text-white bg-white dark:bg-gray-700 overflow-hidden shadow-xl sm:rounded-lg">
                @livewire('vehicles.category')
                <hr />
                <h2 class="ml-6 mt-4 text-3xl font-bold">
                    &Uacute;ltimas publicaciones
                </h2>
                {{-- @livewire('vehicles.vehicle-card') --}}
                <x-vehicle-card-home :homevehicles="$homeVehicles" />

                <a class="ml-6 text-lg font-bold" href="{{ route('vehicles') }}">
                    Ver m&aacute;s
                </a>
            </div>
        </div>

    </div>
</x-app-layout>
