@extends('layouts.app')

@section('content')
<div class="header">
    <h1>PrincePress</h1>
    <p>Publisher of graphic novels & light novels</p>
</div>

<nav class="navbar">
    <ul>
        <li><a href="{{ route('home') }}">Home</a></li>
        <li><a href="{{ route('series') }}">Series</a></li>
        <li><a href="{{ route('short-stories') }}">Short Stories</a></li>
        <li><a href="{{ route('about') }}">About Us</a></li>
        <li><a href="{{ route('contact') }}">Contact Us</a></li>
    </ul>
</nav>

<div class="releases">
    <h2>Releases</h2>
    <!-- Images of releases as buttons -->
</div>

<div class="coming-soon">
    <h2>Coming Soon</h2>
    <!-- Images of coming soon items -->
</div>

<div class="all-series">
    <h2>All Series</h2>
    <!-- Images of all series -->
</div>
@endsection