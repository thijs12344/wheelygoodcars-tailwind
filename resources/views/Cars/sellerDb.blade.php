<x-app-layout>
    <h1 class="text-4xl font-bold m-4">Mijn auto's</h1>

    @if($cars->isEmpty())
        <p>Je hebt nog geen auto's toegevoegd.</p>
    @else

        <div class="grid grid-cols-4 gap-4 mx-auto my-14">
            @foreach ($cars as $car)
                <div class=" w-[300px] p-1 rounded-lg bg-orange-500 shadow-xl">
                    <div class="p-3 bg-white rounded-md">
                        <h2 class=" text-2xl font-bold underline mb-2">{{ $car->brand }} </h2>
                        <h3 class=" text-lg font-semibold">{{ $car->model }}</h3>
                        <p class=""><strong>Kenteken:</strong> {{ $car->license_plate }}</p>
                        <p class=""><strong>Prijs:</strong> €{{ number_format($car->price, 2, ',', '.') }}</p>
                        <p class="mb-4"><strong>Kilometerstand:</strong> {{ number_format($car->mileage, 0, ',', '.') }} km</p>
                        @if(auth()->id() == $car->user_id)
                        <div class="flex justify-between mr-4">
                            <a class="my-auto transition-transform transform hover:underline hover:scale-[105%]" href="{{ route('cars.edit', $car) }}">Bewerken</a>
                            <form action="{{ route('cars.destroy', $car) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-white bg-red-600 px-2 py-1 rounded-md transition-transform transform hover:underline hover:scale-[105%]">Verwijder aanbod</button>
                            </form>
                        </div>
                        @endif
                    </div>

                </div>
            @endforeach
        </div>

        <div class="pagination">
            <!-- Previous Page Button -->
            @if ($cars->onFirstPage())
                <button disabled class="hidden">Previous</button>
            @else
                <a class="p-2 bg-orange-500 text-white rounded-md" href="{{ $cars->previousPageUrl() }}" class="">Previous</a>
            @endif

            <!-- Next Page Button -->
            @if ($cars->hasMorePages())
                <a href="{{ $cars->nextPageUrl() }}" class="p-2 bg-orange-500 text-white rounded-md">Next</a>
            @else
                <button disabled class="hidden">Next</button>
            @endif
        </div>


    @endif
</x-app-layout>
