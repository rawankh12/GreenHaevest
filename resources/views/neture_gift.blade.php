@extends('layout.app')

@section('title', 'Home')

@section('content')

<div class="link">
    <a href="{{ route('home') }}" >
        <img src="File/1-05.png" alt="">
    </a>
    <a href="{{ route('product') }}">
        <img src="File/1-07.png" alt="">
    </a>
    <a href="{{ route('about') }}">
        <img src="File/1-06.png" alt="">
    </a>
    <a href="{{ route('neture_perks') }}">
        <img src="File/1-08.png" alt="">
    </a>
    <a href="{{ route('neture_gift') }}" style="transform: rotate(-10deg);">
        <img src="File/1-09.png" alt="">
    </a>
    <a href="{{ route('contact') }}" >
        <img src="File/1-10.png" alt="">
    </a>
</div>
<div class="cont" style="background-image: url(File/1-17.png);
background-size: cover;">

    <div class="search-bar">
        <input type="text" class="search-input" placeholder="search...">
        <i class="fas fa-search search-icon"></i>
    </div>
</div>
<div style="background-image: url(File/1-21.png);
background-size: cover;
height: 181px;
margin-top: -170px;
">
</div>

</div>
<h1>قيد الانشاء</h1>

@endsection