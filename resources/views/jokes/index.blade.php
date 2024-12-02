<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>GiggleDB - Jokes</title>
</head>
<body>
    <header>
        <h1>Jokes Collection</h1>
        <nav>
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="/about">About</a></li>
                <li><a href="/contact">Contact</a></li>
                <li><a href="/jokes/create">Add a Joke</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section class="jokes-list">
            <h2>All Jokes</h2>

            <!-- Loop through jokes (e.g., PHP, Laravel Blade, or JavaScript) -->
            <div class="joke-item">
                <h3>Joke Title</h3>
                <p>Joke setup...</p>
                <p><strong>Punchline:</strong> Punchline goes here.</p>
                <a href="/jokes/edit/1">Edit</a> |
                <a href="/jokes/delete/1" onclick="return confirm('Are you sure you want to delete this joke?')">Delete</a>
            </div>

            <!-- Example of multiple jokes looped -->
            <!--
            <div class="joke-item">
                <h3>Joke Title 2</h3>
                <p>Setup for Joke 2...</p>
                <p><strong>Punchline:</strong> Punchline of Joke 2</p>
                <a href="/jokes/edit/2">Edit</a> |
                <a href="/jokes/delete/2" onclick="return confirm('Are you sure you want to delete this joke?')">Delete</a>
            </div>
            -->

        </section>
    </main>

    <footer>
        <p>&copy; 2024 GiggleDB</p>
        <ul>
            <li><a href="/privacy-policy">Privacy Policy</a></li>
            <li><a href="/terms-of-service">Terms of Service</a></li>
        </ul>
    </footer>
</body>
</html>
