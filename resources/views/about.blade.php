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
    <a href="{{ route('about') }}" style="transform: rotate(-10deg);">
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
<div class="featured-products">
    <div class="about">
        <h1>About Us</h1>
        <p>
            AT GREEN HARVEST, OUR COMMITMENT IS TO PROVIDE 100% NATU- <br>
            RAL SKINCARE PRODUCTS THAT ARE COMPLETELY FREE FROM CHEMI- <br>
            CALS,MAKING THEM IDEAL FOR SENSITIVE SKIN. FOUNDED BY A <br>
            FATHER DETERMINED TO FIND TRULY PURE SOLUTIONS FOR HIS <br>
            DAUGHTER, WE UNDERSTAND THE IMPORTANCE OF DELIVERING PROD- <br>
            UCTSTHAT ARE BOTH SAFE AND EFFECTIVE.
        </p>
        <img src="File/1-14.png" alt="" width="600px" height="425px">
    </div>
    <div class="about" style="margin-top: 10px;">
        <h1>

            Our mission
        </h1>
        <p>IS TO OFFER SKINCARE SOLUTIONS THAT MEET THE <br>
            HIGHEST STANDARDS OF PURITY AND QUALITY
        </p>
        <p>
            .EACH PRODUCT IS METICULOUSLY CRAFTED TO ENSURE IT CONTAINS NO HARMFUL
            CHEMICALS, ALLERGENS, OR SYNTHETIC FRAGRANES, MAKING THEM THE PERFECT
            CHOICE FOR THOSE WITH SENSITIVE SKIN.
        </p>
        <p>
            GREEN HARVEST IS DEDICATED TO PROVIDING
            GENUINE, NATURAL CARE THAT YOU CAN
            TRUST. OUR FOCUS ON PURITY AND SAFETY
            ENSURES THAT EVERY PRODUCT IS DESIGNED
            TO OFFER EXCEPTIONAL RESULTS
            WHILE BEING GENTLE ON EVEN THE MOST
            DELICATE SKIN.
        </p>

    </div>
</div>
<div class="offers" style="height: 700px; margin-top: 150px;">
    <h1>
        Offers
    </h1>
    <img alt="Back to School Offer" src="img/ss.png" width="1200" />
</div>

@endsection