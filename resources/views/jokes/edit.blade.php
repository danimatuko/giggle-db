<x-layout>
    <header>
        <h2>Edit Joke</h2>
    </header>

    <x-joke-form
        method="PUT"
        action="/jokes/{{ $joke->id }}"
        buttonText="Update Joke"
        :joke="$joke"
    />
</x-layout>
