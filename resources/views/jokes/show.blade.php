<x-layout>

<header>
    <hgroup>
        <h2>{{ $joke->setup }}</h2>
        <p>A good laugh awaits! <br>Check out the punchline below and learn more about this joke.</p>
    </hgroup>
</header>

<small>Created on:</strong> {{ $joke->created_at->format('F j, Y') }}</small>

<blockquote>
    “{{ $joke->setup }}”
    <footer>
        <cite>— {{ $joke->punchline }}</cite>
    </footer>
</blockquote>

<div class="actions">
    <a href="/jokes" class="btn">Back to Jokes</a>
    <a href="/jokes/{{$joke->id}}/edit" class="btn btn-edit">Edit Joke</a>
</div>

</x-layout>
