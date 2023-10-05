<!DOCTYPE html>
<html lang="en">
<head>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'PrincePress')</title>
    <script src="https://kit.fontawesome.com/f0223fd812.js" crossorigin="anonymous"></script>
    <link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
    
    {{-- navigation --}}
    <div class="container">
        <div class="nav-button">
            <a href="{{ route('home') }}" class="nav-button"><i class="fa-solid fa-house"></i>Home</a>
            <a href="{{ route('series') }}" class="nav-button"><i class="fa-solid fa-book-bookmark"></i>Series</a>
            <a href="{{ route('short-stories') }}" class="nav-button"><i class="fas fa-book-open"></i>Short Stories</a>
            <a href="{{ route('about-us') }}" class="nav-button"><i class="fas fa-info-circle"></i>About Us</a>
            <a href="{{ route('contact-us') }}" class="nav-button"><i class="fas fa-envelope"></i>Contact Us</a>
            
            <!-- Theme switch button -->
            <label id="themeSwitchLabel" class="nav-button">
                <input type="checkbox" id="themeSwitch" style="display: none;">
                <i id="themeIcon" class="lni lni-sun"></i> <!-- Default is the sun icon -->
            </label>
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

{{-- Script to toggle theme --}}
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var themeSwitch = document.getElementById('themeSwitch');
        var themeIcon = document.getElementById('themeIcon');
        var body = document.body;
        var isDarkMode = false;

        // Initial theme (light mode)
        body.style.backgroundColor = '#ffffff';
        body.style.color = '#333333';

        // Toggle theme when the checkbox is clicked
        themeSwitch.addEventListener('click', function() {
            if (isDarkMode) {
                // Switch to light mode
                body.style.backgroundColor = '#ffffff';
                body.style.color = '#333333';
                themeIcon.className = 'lni lni-sun'; // Set sun icon for light mode
                isDarkMode = false;
            } else {
                // Switch to dark mode
                body.style.backgroundColor = '#333333';
                body.style.color = '#ffffff';
                themeIcon.className = 'fa-solid fa-moon'; // Set moon icon for dark mode
                isDarkMode = true;
            }
        });
    });
</script>
