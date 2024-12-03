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

        <!-- Loop through jokes and display them in blockquote format -->
        @foreach($jokes as $joke)
        <blockquote>
            “{{ $joke->setup }}”
            <footer>
                <cite>— {{ $joke->punchline }}</cite>
            </footer>
        </blockquote>
        @endforeach
    </div>
</x-layout>
