<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet"  href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.min.css">
    <title>GiggleDB - Home</title>
</head>
<body>
    <header class="container">
        <nav>
        <ul>
            <li><center><strong><a href="/" class="contrast">GiggleDB</a></strong></center></li>
        </ul>
            <ul>
                <li><a href="/jokes">Browse Jokes</a></li>
                <li><a href="/about">About GiggleDB</a></li>
                <li><a href="/contact">Contact</a></li>
            </ul>
        </nav>
    </header>

    <main class="container">
        {{$slot}}
    </main>

    <footer class="container">
        <p>&copy; 2024 GiggleDB</p>
        <ul>
            <li><a href="/privacy-policy">Privacy Policy</a></li>
            <li><a href="/terms-of-service">Terms of Service</a></li>
        </ul>
    </footer>
</body>
</html>
