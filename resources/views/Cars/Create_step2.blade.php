<x-app-layout>

    @section('content')
    <h1>Stap 2: Vul de autogegevens in</h1>
    <form action="{{ route('cars.store') }}" method="POST">
        @csrf
        <p>Kenteken: {{ $license_plate }}</p>
        <label for="brand">Merk:</label>
        <input type="text" name="brand" id="brand" required>

        <label for="model">Model:</label>
        <input type="text" name="model" id="model" required>

        <label for="price">Prijs:</label>
        <input type="number" name="price" id="price" required>

        <label for="mileage">Kilometerstand:</label>
        <input type="number" name="mileage" id="mileage" required>

        <button type="submit">Opslaan</button>
    </form>
@endsection


</x-app-layout>

