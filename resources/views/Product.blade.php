@extends('layout.app')

@section('title', 'Home')

@section('content')
<div class="link">
    <a href="{{ route('home') }}">
        <img src="File/1-05.png" alt="">
    </a>
    <a href="{{ route('product') }}" style="transform: rotate(-10deg);">
        <img src="File/1-07.png" alt="">
    </a>
    <a href="{{ route('about') }}">
        <img src="File/1-06.png" alt="">
    </a>
    <a href="{{ route('neture_perks') }}">
        <img src="File/1-08.png" alt="">
    </a>
    <a href="{{ route('neture_gift') }}">
        <img src="File/1-09.png" alt="">
    </a>
    <a href="{{ route('contact') }}">
        <img src="File/1-10.png" alt="">
    </a>
</div>
<div class="cont" style="background-image: url(File/1-19.png);
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
<div class="featured-products">
    <div class="products">
        <div class="product bg1">
            <p style="background-color:#f58fb2">

            </p>
            <img src="File/150.jpg" alt="" width="150px" height="150px">
            <br>
            <button> <span style="color: #f58fb2"> details</span></button>
        </div>
        <div class="product bg2">
            <p style="background-color:#8ed6f8">

            </p>
            <img src="File/150.jpg" alt="" width="150px" height="150px">
            <br>
            <button> <span style="color: #8ed6f8"> details</span></button>
        </div>

        <div class="product bg3">
            <p style="background-color:#a8c4a9">

            </p>
            <img src="File/150.jpg" alt="" width="150px" height="150px">
            <br>
            <button> <span style="color: #a8c4a9"> details</span></button>
        </div>
        <div class="product bg4">
            <p style="background-color:#ada2c2">

            </p>
            <img src="File/150.jpg" alt="" width="150px" height="150px">
            <br>
            <button> <span style="color: #ada2c2"> details</span></button>
        </div>
    </div>
</div>
<div class="offers" style="height: 400px; margin-top: 75px;">
    <img alt="Back to School Offer" src="img/ss.png" width="1200" />
</div>    
        @endsection
