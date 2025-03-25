<x-app-layout>
    <h1>Auto bewerken</h1>

    <form action="{{ route('cars.update', $car) }}" method="POST">
        @csrf

        <label for="price">Prijs:</label>
        <input type="number" step="0.01" name="price" id="price" value="{{ $car->price }}" required>

        <button type="submit">Opslaan</button>
    </form>

    <a href="{{ route('cars.view') }}">Annuleren</a>
</x-app-layout>
