@extends('app')

@section('content')
<div class="video-banner-container">
    <video autoplay loop muted playsinline class="video-banner" width="100%" height="50%">
        <source src="{{ asset('videos/PrincePressBanner.mp4') }}" type="video/mp4">
        <p>Our stories are as unique as the contrast of black words on white sheets of paper.</p>
    </video>
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
