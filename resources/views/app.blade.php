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
        <div id="navbar">
            <a href="{{ route('home') }}" id="logo">
                <img src="{{ asset('images/PrincePressLogoFullWeb.png') }}" alt="PrincePress Logo">
            </a>
            <div id="navbar-right">
                <p><a href="{{ route('series') }}">Series</a></p>
                <p><a href="{{ route('short-stories') }}">Short Stories</a></p>
                <p><a href="{{ route('about-us') }}">About Us</a></p>
                <p><a href="{{ route('contact-us') }}">Contact Us</a></p>
            </div>
        </div>
        
        <!-- Theme switch button -->
        <label id="themeSwitchLabel" class="nav-button">
            <input type="checkbox" id="themeSwitch" style="display: none;">
            <i id="themeIcon" class="lni lni-sun"></i> <!-- Default is the sun icon -->
        </label>
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

        // When the user scrolls down px from the top of the document, resize the navbar's padding and the logo's font size
        window.onscroll = function() {
            scrollFunction();
        };

        function scrollFunction() {
            if (document.body.scrollTop > 1 || document.documentElement.scrollTop > 1) {
                document.getElementById("navbar").style.padding = "30px 10px";
                document.getElementById("logo").style.fontSize = "25px";
            } else {
                document.getElementById("navbar").style.padding = "80px 10px";
                document.getElementById("logo").style.fontSize = "35px";
            }
        }
    })
</script>
