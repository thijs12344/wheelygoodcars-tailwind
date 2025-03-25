<x-app-layout>
    <h1 class="text-4xl font-bold m-4">Mijn auto's</h1>

    @if($cars->isEmpty())
        <p>Je hebt nog geen auto's toegevoegd.</p>
    @else

        <div class="grid grid-cols-4 gap-4 mx-auto my-14">

            @foreach ($cars as $car)
                <div class="border border-black w-[250px] p-4 rounded-sm">

                    <h2 class="text-2xl font-bold">{{ $car->brand }} </h2>
                    <h3 class="text-lg font-semibold">{{ $car->model }}</h3>
                    <p class="text-gray-600"><strong>Kenteken:</strong> {{ $car->license_plate }}</p>
                    <p class="text-gray-600"><strong>Prijs:</strong> €{{ number_format($car->price, 2, ',', '.') }}</p>
                    <p class="text-gray-600"><strong>Kilometerstand:</strong> {{ number_format($car->mileage, 0, ',', '.') }} km</p>
                    <a href="{{ route('cars.edit', $car) }}">Bewerken</a>
                    <form action="{{ route('cars.destroy', $car) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="text-red-600 hover:underline">Verwijder aanbod</button>
                    </form>

                </div>
            @endforeach

        </div>
    @endif
</x-app-layout>
