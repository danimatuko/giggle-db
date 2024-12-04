<x-layout>

@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<div class="jokes-list">
    <header>
        <h2>All Jokes</h2>
    </header>

    <!-- Loop through jokes and display them with a link -->
    @foreach($jokes as $joke)
    <a href="/jokes/{{ $joke->id }}" class="joke-link">
        <blockquote>
            “{{ $joke->setup }}”
            <footer>
                <cite>— {{ $joke->punchline }}</cite>
            </footer>
        </blockquote>
    </a>
    @endforeach

<div class="pagination">
    {{ $jokes->links() }}
</div>

</div>

</x-layout>
