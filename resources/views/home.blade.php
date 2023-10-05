@extends('app')

@section('content')
<div class="video-banner-container">
    <video autoplay loop muted playsinline class="video-banner" width="100%" height="50%">
        <source src="{{ asset('videos/PrincePressBanner.mp4') }}" type="video/mp4">
        Your browser does not support the video tag.
    </video>
    <div class="video-overlay">
        <header>
            <h1>PrincePress</h1>
            <p>Publisher of graphic novels & light novels since 2023</p>
        </header>
    </div>
</div>


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
@endsection
