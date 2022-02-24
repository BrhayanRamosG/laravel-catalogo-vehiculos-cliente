<div class="dark:text-white">
    <h1>List Vehicles:</h1>
    <x-jet-input wire:model="search" type="text" placeholder="Search vehicles..." />

    <ul>
        @foreach ($vehicles as $vehicle)
            <li>
                <strong>{{ $vehicle->id }}</strong>
                Precio: ${{ number_format($vehicle->price, 2) }} MXN <br />
                A&ntilde;o: {{ $vehicle->year }}<br />
                Kilometraje: {{ number_format($vehicle->driven, 2) }}<br />
            </li>
        @endforeach
    </ul>
</div>
