<x-app-layout pagetitle="429 Error">
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="mx-4 py-4 text-center">
                    <h1 class="text-8xl text-red-400 font-bold">
                        429
                    </h1>
                    <p class="text-2xl text-red-600">
                        Has sobrepasado el n&uacute;mero de peticiones permitidas
                    </p>
                    <p class="mt-2 font-bold text-lg text-red-600">
                        Por favor espera y vuelve a intentarlo m&aacute;s tarde
                    </p>
                    <p class="mt-2 font-bold text-lg">
                        <a class="ml-4 text-blue-600 underline" href="{{ route('index') }}">
                            Ir a Inicio
                        </a>
                    </p>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
