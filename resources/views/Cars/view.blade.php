<x-app-layout>
    <h1 class="text-4xl font-bold m-4">Alle auto's</h1>
    <form action="{{ route('car.search') }}" method="GET">
        <input type="text" name="search" placeholder="Search car" value="{{ request('search') }}">
        <button type="submit">Search</button>
    </form>

    @if (!empty($results) && count($results) > 0)
        <h2 class="text-2xl font-bold mt-6">Zoekresultaten</h2>
        <div class="grid grid-cols-4 gap-4 mx-auto my-14">
            @foreach ($results as $car)
                <div class="w-[300px] h-[400px] p-4 rounded-xl bg-white shadow-lg border border-gray-200 flex flex-col transition-transform transform hover:scale-105 hover:shadow-2xl">
                    <img class="w-full h-[180px] object-cover rounded-lg mb-3" src="{{ asset($car->image ?? '/img/noImage.png') }}" alt="Car Image">

                    <div class="flex-grow px-2 pt-2">
                        <div class="flex justify-between items-center">
                            <h2 class="text-xl font-semibold text-gray-900 truncate">{{ $car->model }}</h2>
                            <h3 class="text-lg font-bold text-gray-700">€{{ number_format($car->price, 2, ',', '.') }}</h3>
                        </div>

                        <h3 class="text-md font-medium text-gray-700 mb-6">{{ $car->brand }}</h3>

                        <div class="relative mb-2" style="background-image: url('{{ asset('img/licensePlate.png') }}'); background-size: cover; background-position: center; height: 50px; border-radius: 8px;">
                            <h3 class="absolute left-0 inset-0 flex items-center justify-center text-black text-xl font-semibold ml-2">{{ $car->license_plate }}</h3>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @elseif (!empty($results))
        <p class="mt-6">Geen resultaten gevonden voor jouw zoekopdracht.</p>
    @endif

    @if (isset($cars) && $cars->isNotEmpty())
        <h2 class="text-2xl font-bold mt-6">Alle auto's</h2>
        <div class="grid grid-cols-4 gap-4 mx-auto my-14">
            @foreach ($cars as $car)
                <div class="w-[300px] h-[400px] p-4 rounded-xl bg-white shadow-lg border border-gray-200 flex flex-col transition-transform transform hover:scale-105 hover:shadow-2xl">
                    <img class="w-full h-[180px] object-cover rounded-lg mb-3" src="{{ asset($car->image ?? '/img/noImage.png') }}" alt="Car Image">

                    <div class="flex-grow px-2 pt-2">
                        <div class="flex justify-between items-center">
                            <h2 class="text-xl font-semibold text-gray-900 truncate">{{ $car->model }}</h2>
                            <h3 class="text-lg font-bold text-gray-700">€{{ number_format($car->price, 2, ',', '.') }}</h3>
                        </div>

                        <h3 class="text-md font-medium text-gray-700 mb-6">{{ $car->brand }}</h3>

                        <div class="relative mb-2" style="background-image: url('{{ asset('img/licensePlate.png') }}'); background-size: cover; background-position: center; height: 50px; border-radius: 8px;">
                            <h3 class="absolute left-0 inset-0 flex items-center justify-center text-black text-xl font-semibold ml-2">{{ $car->license_plate }}</h3>
                        </div>
                    </div>

                    @if(auth()->id() == $car->user_id)
                        <div class="flex justify-between items-center mt-2">
                            <a class="text-blue-600 font-semibold transition duration-200 hover:underline hover:scale-105" href="{{ route('cars.edit', $car) }}">
                                Bewerken
                            </a>
                            <form action="{{ route('cars.destroy', $car) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-white bg-red-500 px-4 py-1 rounded-lg text-sm font-semibold transition-transform duration-200 hover:scale-105 hover:bg-red-600">
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
    @elseif (isset($cars))
        <p>Je hebt nog geen auto's toegevoegd.</p>
    @endif
</x-app-layout>
