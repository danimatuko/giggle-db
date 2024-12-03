<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Link to Google Fonts for the Nunito font family -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&display=swap" rel="stylesheet">

    <!-- Link to Pico CSS framework for simple styling -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.min.css">

    <!-- Link to the custom stylesheet for any additional styling specific to the project -->
    <link rel="stylesheet" href="/main.css" />

    <!-- Link to external script -->
    <script src="/main.js" defer></script>

    <title>GiggleDB - Home</title>
</head>

<body>

    <!-- Header Section -->
    <header class="container">
        <nav>
            <ul>
                <li class="logo">
                    <a href="/" class="contrast"><strong>GiggleDB</strong></a>
                </li>
            </ul>

    <!-- Navigation -->
            <ul class="nav-links">
                <li><a href="/jokes" data-tooltip="Browse all jokes" data-placement="bottom">😂 Jokes</a></li>
                <li><a href="/jokes/create" data-tooltip="Add a new joke" data-placement="bottom">📝 Add</a></li>
                <li><a href="/about" data-tooltip="Learn more about GiggleDB" data-placement="bottom">ℹ️ About</a></li>
            </ul>
        </nav>
    </header>

    <!-- Main Content -->
    <main class="container">
        {{$slot}}
    </main>


<!-- Footer Section -->
<footer class="container">
    <hr>
    <p>&copy; <?= date('Y') ?> GiggleDB - Built with laughter by
        <a href="https://github.com/danimatuko" target="_blank" data-tooltip="Check out my GitHub for more fun projects! 🚀"  data-placement="bottom">
            Dani Matuko
        </a>
        😂 Keep smiling!
    </p>
</footer>

</body>

</html>
