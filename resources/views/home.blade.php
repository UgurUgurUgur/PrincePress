@extends('app')

@section('content')
<div class="video-banner-container">
    <video autoplay loop muted playsinline class="video-banner" width="100%" height="50%">
        <source src="{{ asset('videos/PrincePressBanner.mp4') }}" type="video/mp4">
        Your browser does not support the video tag.
    </video>
    <div class="video-overlay">
        <!-- Navigation Menu -->
        <nav class="overlay-menu">
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Releases</a></li>
                <li><a href="#">Coming Soon</a></li>
                <li><a href="#">All Series</a></li>
            </ul>
        </nav>

        <!-- Prince.png Image -->
        <img src="{{ asset('images/Prince.png') }}" alt="Prince" class="overlay-image prince">

        <!-- Press.png Image -->
        <img src="{{ asset('images/Press.png') }}" alt="Press" class="overlay-image press">

        <div class="releases">
            <h2>Releases</h2>
            <!-- releases -->
        </div>

        <div class="coming-soon">
            <h2>Coming Soon</h2>
            <!-- coming soon -->
        </div>

        <div class="all-series">
            <h2>All Series</h2>
            <!-- all series -->
        </div>
    </div>
</div>
@endsection
