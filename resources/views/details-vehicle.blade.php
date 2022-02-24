<x-app-layout pagetitle="Detalles vehículo">
    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl leading-tight">
            {{ __('Detalles vehículo') }}
        </h2> 
    </x-slot> --}}
    <section class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="mx-2 py-2">
                    @foreach ($detailVehicle as $vehicle)
                        <h1 class="text-4xl text-sky-700 font-bold">
                            {{ $vehicle->makeModels->makes->make_name }} {{ $vehicle->makeModels->model_name }}
                        </h1>
                        <p class="text-2xl">
                            {{ $vehicle->id }}
                        </p>
                        <p class="text-2xl">
                            ${{ number_format($vehicle->price) }} MXN
                        </p>
                        <div class="text-2xl">
                            {!! $vehicle->description !!}
                        </div>
                    @endforeach
                </div>
                {{-- @php
                    print_r($detailVehicle);
                @endphp --}}
            </div>
        </div>
    </section>
</x-app-layout>
