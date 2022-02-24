<div class="max-w-2xl mx-auto py-16 px-4 sm:py-24 sm:px-6 lg:max-w-7xl lg:px-8">

    <x-search wire:model="opc" title="Ordenar por:" :options="[
        '1'=>'Precio más caro',
        '2'=>'Precio más barato',
        '3'=>'Modelo Z-A',
        '4'=>'Modelo A-Z'
    ]"/>

    <div class="grid grid-cols-1 gap-y-10 sm:grid-cols-2 gap-x-6 lg:grid-cols-3 xl:grid-cols-4 xl:gap-x-6">
        @foreach ($vehicles as $vehicle)
            <a href="{{ route('detailvehicle', [$vehicle, $vehicle->categories_id]) }}"
                class="dark:bg-gray-700 hover:shadow-md dark:hover:shadow-gray-500 group shadow dark:shadow-gray-500">
                <div
                    class="w-full aspect-w-1 aspect-h-1 bg-gray-200 dark:bg-gray-500 dark:text-white rounded-lg overflow-hidden xl:aspect-w-7 xl:aspect-h-8">
                    <img src="https://tailwindui.com/img/ecommerce-images/category-page-04-image-card-01.jpg"
                        alt="Tall slender porcelain bottle with natural clay textured body and cork stopper."
                        class="w-full h-full object-center object-cover group-hover:opacity-75">
                </div>

                <h3 class="mx-1 mt-4 text-xl dark:text-gray-100">
                    {{ $vehicle->makeModels->makes->make_name }}
                </h3>

                <p class="mx-1 mt-1 text-lg text-gray-500 dark:text-gray-200">
                    {{ $vehicle->makeModels->model_name }}
                    {{ $vehicle->year }}
                </p>

                <p class="mx-1 mt-1 text-lg font-medium dark:text-white">
                    {{-- <span
                        class="text-green-700 dark:text-green-500">{{ $vehicle->statusVehicles->status_name }}</span>
                    <br /> --}}

                    @if ($vehicle->treat == 1 && $vehicle->categories_id != 2)
                        <span class="text-green-700 dark:text-green-400">Precio negociable</span>
                        <br />
                    @elseif($vehicle->treat == 0 && $vehicle->categories_id != 2)
                        <span class="text-red-700 dark:text-red-300">Precio no negociable</span>
                        <br />
                    @endif

                    @if ($vehicle->categories_id == 2)
                        @if ($vehicle->credit_price != null && $vehicle->percentage != null)
                            @if ($categoryId != null)
                                <span class="text-lg text-green-700 dark:text-green-400">
                                    Enganche {{ $vehicle->percentage }}%
                                </span>
                                <br />
                            @endif
                            <span class="text-base text-green-700 dark:text-green-400">
                                Llevatelo con ${{ number_format($vehicle->credit_price, 2) }} MXN
                            </span>
                            <br />
                        @endif
                    @endif
                    <span class="text-2xl font-bold"> ${{ number_format($vehicle->price) }} MXN</span>
                </p>
            </a>
        @endforeach
        <div class="row">
            <div class="col-md-12">
                {{ $vehicles->links() }}
            </div>
        </div>

        {{-- {{ $vehicle->transmissions->transmission_name }}
                    {{ $vehicle->categories->category_name }}
                    {{ $vehicle->paymentMethods->payment_method_name }}
                    {{ $vehicle->statusVehicles->status_name }}
                    {{ $vehicle->conditions->condition_name }} --}}
    </div>
</div>
