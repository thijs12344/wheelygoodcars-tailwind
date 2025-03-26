<x-app-layout>
    <h1 class="text-4xl font-bold m-4">Mijn auto's</h1>

    @if($cars->isEmpty())
        <p>Je hebt nog geen auto's toegevoegd.</p>
    @else

        <div class="grid grid-cols-4 gap-4 mx-auto my-14">
            @foreach ($cars as $car)
            <div class="w-[300px] h-[400px] p-3 rounded-xl bg-white shadow-lg border border-gray-200 flex flex-col">
                <img class="w-full h-[180px] object-cover rounded-lg" src="{{ asset($car->image) }}" alt="Car Image">

                <div class="flex-grow p-2">
                    <h2 class="text-xl font-bold text-gray-900">{{ $car->brand }}</h2>
                    <h3 class="text-lg font-semibold text-gray-700">{{ $car->model }}</h3>

                    <p class="text-sm text-gray-600"><strong>Kenteken:</strong> {{ $car->license_plate }}</p>
                    <p class="text-sm text-gray-600"><strong>Prijs:</strong> €{{ number_format($car->price, 2, ',', '.') }}</p>
                    <p class="text-sm text-gray-600"><strong>Kilometerstand:</strong> {{ number_format($car->mileage, 0, ',', '.') }} km</p>
                </div>

                @if(auth()->id() == $car->user_id)
                    <div class="flex justify-between items-center mt-2">
                        <a class="text-blue-600 font-semibold transition hover:underline hover:scale-105" href="{{ route('cars.edit', $car) }}">
                            Bewerken
                        </a>
                        <form action="{{ route('cars.destroy', $car) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-white bg-red-500 px-3 py-1 rounded-lg text-sm font-semibold transition-transform hover:scale-105 hover:bg-red-600">
                                Verwijderen
                            </button>
                        </form>
                    </div>
                @endif
            </div>
            @endforeach
        </div>

        <div class="pagination">
            @if ($cars->onFirstPage())
                <button disabled class="hidden">Previous</button>
            @else
                <a class="p-2 bg-orange-500 text-white rounded-md" href="{{ $cars->previousPageUrl() }}" class="">Previous</a>
            @endif

            @if ($cars->hasMorePages())
                <a href="{{ $cars->nextPageUrl() }}" class="p-2 bg-orange-500 text-white rounded-md">Next</a>
            @else
                <button disabled class="hidden">Next</button>
            @endif
        </div>
    @endif
</x-app-layout>
