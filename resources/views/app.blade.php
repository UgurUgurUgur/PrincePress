
<!DOCTYPE html>
<html lang="en">
<head>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'PrincePress')</title>
    <script src="https://kit.fontawesome.com/f0223fd812.js" crossorigin="anonymous"></script>
</head>
<body>
    <header>
        <h1>PrincePress</h1>
        <p>Publisher of graphic novels & light novels since 2023</p>
    </header>
    
    <!-- navigation -->
    <div class="container">
        <div class="nav-button">
            <li><a href="{{ route('home') }}" class="nav-button"><i class="fa-solid fa-house"></i>Home</a></li>
            <li><a href="{{ route('series') }}" class="nav-button"><i class="fa-solid fa-book-bookmark"></i>Series</a></li>
            <li><a href="{{ route('short-stories') }}"><i class="fas fa-book-open"></i>Short Stories</a></li>
            <li><a href="{{ route('about-us') }}"><i class="fas fa-info-circle"></i>About Us</a></li>
            <li><a href="{{ route('contact-us') }}"><i class="fas fa-envelope"></i>Contact Us</a></li>
        </div>    
    </div>

    <main>
        @yield('content')
    </main>

    <footer>
        <p>&copy; {{ date('Y') }} PrincePress. All Rights Reserved.</p>
    </footer>
</body>
</html>
