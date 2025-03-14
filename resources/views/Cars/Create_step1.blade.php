<x-app-layout>
        <h1>Stap 1: Kenteken invullen</h1>
        <form action="{{ route('cars.create.step2') }}" method="POST">
            @csrf
            <label for="license_plate">Kenteken:</label>
            <input type="text" name="license_plate" id="license_plate" required>
            <button type="submit">Volgende</button>
        </form>
</x-app-layout>

