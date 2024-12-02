<x-layout>
    <header>
        <h2>Create a New Joke</h2>
    </header>

    <form action="/jokes" method="POST">
        @csrf
        <label for="setup">Setup</label>
        <input type="text" name="setup" id="setup" required>

        <label for="punchline">Punchline</label>
        <input type="text" name="punchline" id="punchline" required>

        <button type="submit">Create Joke</button>
    </form>
</x-layout>
