<x-app-layout>
        <h1 class="text-4xl font-bold m-4">Stap 1: Kenteken invullen</h1>
        <form class="mx-4 mt-8" action="{{ route('cars.create.step2') }}" method="POST">
            @csrf
            <h2 class="font-bold text-2xl" for="license_plate">Kenteken:</h2>
            <input type="text" name="license_plate" id="license_plate" placeholder="xx-xx-xx" required>
            <br>
            <button class="mt-4" type="submit">Volgende</button>
        </form>
</x-app-layout>

