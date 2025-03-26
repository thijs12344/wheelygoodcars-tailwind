<x-app-layout>
    <h1 class="text-4xl font-bold m-4">Stap 2: Vul de autogegevens in</h1>
    <form class="m-4" action="{{ route('cars') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <p class="font-bold text-3xl mb-4">Kenteken: {{ $license_plate }}</p>
        <h2 class="font-bold text-2xl mt-2" for="brand">Merk:</h2>
        <input type="text" name="brand" id="brand" required>

        <h2 class="font-bold text-2xl mt-2" for="model">Model:</h2>
        <input type="text" name="model" id="model" required>

        <h2 class="font-bold text-2xl mt-2" for="image">Afbeelding uploaden:</h2>
        <input type="file" name="image" id="image" accept="image/*">

        <h2 class="font-bold text-2xl mt-2" for="price">Prijs:</h2>
        <input type="number" name="price" id="price" required>

        <h2 class="font-bold text-2xl mt-2" for="mileage">Kilometerstand:</h2>
        <input type="number" name="mileage" id="mileage" required>
        <br>
        <button class="mt-4" type="submit">Opslaan</button>
    </form>
</x-app-layout>

