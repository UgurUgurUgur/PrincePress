<!DOCTYPE html>
<html lang="en">
<head>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'PrincePress')</title>
    <script src="https://kit.fontawesome.com/f0223fd812.js" crossorigin="anonymous"></script>
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
            
            <div class="dropdown" id="themeDropdown">
                <label for="theme"><i class="fa-solid fa-circle-half-stroke"></i> Theme</label>
                <select name="theme" id="theme">
                    <option value="Default">Default</option>
                    <option value="Dark">Dark</option>
                    <option value="Contrast">Contrast</option>
                    <option value="Caramel">Caramel</option>
                </select>
            </div>
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

{{-- hide/show dropdown --}}
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var themeDropdown = document.getElementById('themeDropdown');
        var themeLabel = themeDropdown.querySelector('label');
        var themeSelect = themeDropdown.querySelector('select');
        var themeSelect = document.getElementById('theme');
        var body = document.body;
        
        // Initially hide the dropdown
        themeSelect.style.display = 'none';
    
        // Toggle dropdown visibility when clicking the label
        themeLabel.addEventListener('click', function() {
            if (themeSelect.style.display === 'none') {
                themeSelect.style.display = 'block';
            } else {
                themeSelect.style.display = 'none';
            }
        });

        // Listen for changes in the theme select
        themeSelect.addEventListener('change', function() {
            var selectedTheme = themeSelect.value;
            
            // Apply the theme styles based on the selected option
            if (selectedTheme === 'Default') {
                body.style.backgroundColor = '#ffffff';
                body.style.color = '#333333';
            } else if (selectedTheme === 'Dark') {
                body.style.backgroundColor = '#333333';
                body.style.color = '#ffffff';
            } else if (selectedTheme === 'Contrast') {
                body.style.backgroundColor = '#000000';
                body.style.color = '#ffffff';
            } else if (selectedTheme === 'Caramel') {
                body.style.backgroundColor = '#ffd700';
                body.style.color = '#664422';
            }
        });
    });
</script>