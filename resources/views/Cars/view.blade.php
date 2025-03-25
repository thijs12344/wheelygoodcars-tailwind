<x-app-layout>
    <h1>Mijn auto's</h1>

    @if($cars->isEmpty())
        <p>Je hebt nog geen auto's toegevoegd.</p>
    @else
        <table class="table-fixed">
            <tr class="border border-black">
                <th class="th">Kenteken</th>
                <th class="th">Merk</th>
                <th class="th">Model</th>
                <th class="th">Prijs</th>
                <th class="th">Kilometerstand</th>
                <th class="th">edit</th>
                <th class="th">delete</th>
            </tr>
            @foreach($cars as $car)
                <tr>
                    <td class="td">{{ $car->license_plate }}</td>
                    <td class="td">{{ $car->brand }}</td>
                    <td class="td">{{ $car->model }}</td>
                    <td class="td">€{{ number_format($car->price, 2, ',', '.') }}</td>
                    <td class="td">{{ number_format($car->mileage, 0, ',', '.') }} km</td>
                    <td class="td">
                        <a href="{{ route('cars.edit', $car) }}">Bewerken</a>
                    </td>
                    <td class="td">
                        <form action="{{ route('cars.destroy', $car) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-600 hover:underline">Verwijder aanbod</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    @endif
</x-app-layout>
