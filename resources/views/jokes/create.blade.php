<x-layout>
    <header>
        <h2>Create a New Joke</h2>
    </header>

    <x-joke-form
        method="POST"
        action="/jokes"
        buttonText="Create Joke"
    />
</x-layout>
