<x-app-layout>
    <h1>Auto bewerken</h1>

    <form action="{{ route('cars.update', $car) }}" method="POST">
        @csrf
        <label for="brand">Merk:</label>
        <input type="text" name="brand" id="brand" value="{{ $car->brand }}" required>

        <label for="model">Model:</label>
        <input type="text" name="model" id="model" value="{{ $car->model }}" required>

        <label for="price">Prijs:</label>
        <input type="number" step="0.01" name="price" id="price" value="{{ $car->price }}" required>

        <label for="mileage">Kilometerstand:</label>
        <input type="number" name="mileage" id="mileage" value="{{ $car->mileage }}" required>

        <button type="submit">Opslaan</button>
    </form>

    <a href="{{ route('cars.view') }}">Annuleren</a>
</x-app-layout>
