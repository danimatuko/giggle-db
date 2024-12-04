<x-layout>

    <!-- Back to Jokes Button -->
    <a href="/jokes" class="btn">⬅️ Back to Jokes</a>

    <header>
        <hgroup>
            <h2>{{ $joke->setup }}</h2>
            <p>A good laugh awaits! <br> Check out the punchline below and learn more about this joke.</p>
        </hgroup>
    </header>

    <!-- Joke Creation Date -->
    <small>Created on: {{ $joke->created_at->format('F j, Y') }}</small>

    <!-- Joke Blockquote -->
    <blockquote>
        “{{ $joke->setup }}”
        <footer>
            <cite>— {{ $joke->punchline }}</cite>
        </footer>
    </blockquote>

    <!-- Actions (Edit/Delete) -->
    <nav>
        <ul class="actions-list">
            <li>
                <a href="/jokes/{{$joke->id}}/edit" class="btn btn-edit">✏️ Edit Joke</a>
            </li>
            <li>
                <form action="/jokes/{{$joke->id}}/destroy" method="POST">
                    @method('DELETE')
                    @csrf
                    <button type="submit" class="outline">🗑️ Delete Joke</button>
                </form>
            </li>
        </ul>
    </nav>

</x-layout>

