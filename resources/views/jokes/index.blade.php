<x-layout>
    <div class="jokes-list">
        <header>
            <h2>All Jokes</h2>
        </header>

        <!-- Loop through jokes (e.g., PHP, Laravel Blade, or JavaScript) -->
        <article class="joke-item">
            <h3>Joke Title</h3>
            <p>Joke setup...</p>
            <p><strong>Punchline:</strong> Punchline goes here.</p>
            <a href="/jokes/edit/1">Edit</a> |
            <a href="/jokes/delete/1" onclick="return confirm('Are you sure you want to delete this joke?')">Delete</a>
        </article>


        <article class="joke-item">
            <h3>Joke Title 2</h3>
            <p>Setup for Joke 2...</p>
            <p><strong>Punchline:</strong> Punchline of Joke 2</p>
            <a href="/jokes/edit/2">Edit</a> |
            <a href="/jokes/delete/2" onclick="return confirm('Are you sure you want to delete this joke?')">Delete</a>
        </article>

    </div>
</x-layout>
