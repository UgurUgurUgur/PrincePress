<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'PrincePress')</title>
</head>
<body>
    <header>
        <h1>PrincePress</h1>
        <p>Publisher of graphic novels & light novels since 2023</p>
    </header>

    <nav>
        <ul>
            <li><a href="{{ route('home') }}">Home</a></li>
            <li><a href="{{ route('series') }}">Series</a></li>
            <li><a href="{{ route('short-stories') }}">Short Stories</a></li>
            <li><a href="{{ route('about') }}">About Us</a></li>
            <li><a href="{{ route('contact') }}">Contact Us</a></li>
        </ul>
    </nav>

    <main>
        @yield('content')
    </main>

    <footer>
        <p>&copy; {{ date('Y') }} PrincePress. All Rights Reserved.</p>
    </footer>
</body>
</html>
