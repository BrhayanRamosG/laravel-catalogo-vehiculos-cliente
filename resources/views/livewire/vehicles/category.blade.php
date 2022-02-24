@php
$category_links = [
    [
        'name' => 'Seminuevos y Usados',
        'img' => 'https://tailwindui.com/img/ecommerce-images/home-page-02-edition-01.jpg',
        'route' => route('seminew-used-vehicles'),
        'paragraph' => 'Los mejores vehículos a un excelente
                        precio',
    ],
    [
        'name' => 'Nuevos de Agencia',
        'img' => 'https://tailwindui.com/img/ecommerce-images/home-page-02-edition-02.jpg',
        'route' => route('new-vehicles'),
        'paragraph' => 'Adquiere tu automóvil nuevo con facilidades',
    ],
    [
        'name' => 'Remates',
        'img' => 'https://tailwindui.com/img/ecommerce-images/home-page-02-edition-03.jpg',
        'route' => route('cheap-vehicles'),
        'paragraph' => 'Vehículos a precios bajos',
    ],
    // [
    //     'name' => 'Para Reparacion',
    //     'img' => 'https://tailwindui.com/img/ecommerce-images/home-page-02-edition-03.jpg',
    //     'route' => route('cheap-vehicles'),
    //     'paragraph' => 'Vehículos para piezas',
    // ],
];
@endphp
<div id="categorias" class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="max-w-2xl mx-auto py-16 sm:py-24 lg:py-12 lg:max-w-none">
        <h2 class="text-2xl font-extrabold dark:text-white">Categor&iacute;as</h2>
        <div class="mt-6 space-y-12 lg:space-y-0 lg:gap-y-10 lg:grid lg:grid-cols-3 lg:gap-x-4">
            @foreach ($category_links as $value)
                <div class="group relative shadow-md dark:shadow-gray-600">
                    <div
                        class="relative w-full h-80 bg-white dark:bg-gray-700 dark:text-white rounded-lg overflow-hidden group-hover:opacity-75 sm:aspect-w-2 sm:aspect-h-1 sm:h-64 lg:aspect-w-1 lg:aspect-h-1">
                        <img src="{{ $value['img'] }}"
                            alt="Collection of four insulated travel bottles on wooden shelf."
                            class="w-full h-full object-center object-cover">
                    </div>
                    <h3 class="mt-6 text-lg text-gray-500 dark:text-gray-300">
                        <a href="{{ $value['route'] }}">
                            <span class="absolute inset-0"></span>
                            {{ $value['name'] }}
                        </a>
                    </h3>
                    <p class="text-base font-semibold dark:text-gray-200">
                        {{ $value['paragraph'] }}
                    </p>
                </div>
            @endforeach
        </div>
    </div>
</div>
