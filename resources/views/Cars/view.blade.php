<x-app-layout>
    <h1>Mijn auto's</h1>

    @if($cars->isEmpty())
        <p>Je hebt nog geen auto's toegevoegd.</p>
    @else
        <table border="1">
            <tr>
                <th>Kenteken</th>
                <th>Merk</th>
                <th>Model</th>
                <th>Prijs</th>
                <th>Kilometerstand</th>
                <th>Acties</th>
            </tr>
            @foreach($cars as $car)
                <tr>
                    <td>{{ $car->license_plate }}</td>
                    <td>{{ $car->brand }}</td>
                    <td>{{ $car->model }}</td>
                    <td>€{{ number_format($car->price, 2, ',', '.') }}</td>
                    <td>{{ number_format($car->mileage, 0, ',', '.') }} km</td>
                </tr>
            @endforeach
        </table>
    @endif
</x-app-layout>
