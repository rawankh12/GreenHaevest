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
        <img src="File/1-14.png" alt="" class="img1" width="600px" height="425px">
    </div>
    <div class="about" style="margin-top: 10px;">
        <h1>

            Our mission
        </h1>
        <p>IS TO OFFER SKINCARE SOLUTIONS THAT MEET THE <br>
            HIGHEST STANDARDS OF PURITY AND QUALITY
        </p>
        <p>
            .EACH PRODUCT IS METICULOUSLY CRAFTED TO ENSURE IT CONTAINS NO HARMFUL <br>
            CHEMICALS, ALLERGENS, OR SYNTHETIC FRAGRANES, MAKING THEM THE PERFECT  <br>
            CHOICE FOR THOSE WITH SENSITIVE SKIN.
        </p>
        <img src="File/33-02.png" alt="" class="img2" width="430px" height="240px">
        <p class="p1">
            GREEN HARVEST IS DEDICATED TO PROVID- <br>
            ING GENUINE, NATURAL CARE THAT YOU CAN <br>
            TRUST. OUR FOCUS ON PURITY AND SAFETY <br>
            ENSURES  THAT  EVERY  PRODUCT  IS DE- <br>
            SIGNED  TO  OFFER EXCEPTIONAL RESULTS <br>
            WHILE BEING GENTLE ON EVEN THE MOST <br>
            DELICATE SKIN.
        </p>

    </div>
    <div class="about1" style="margin-top: 200px;">
         <img src="File/1-13.png" alt="" class="img3" width="600px" height="425px">
    <h1 class="H1">
        The Story of Green Harvest
     </h1>
     <p class="p2">
           GREEN HARVEST WAS FOUNDED BY A FATHER WHO FACED A SIGNIFICANT CHALLENGE: FINDING <br>
           SKINCARE PRODUCTS THAT WERE 100% PURE AND NATURAL FOR HIS DAUGHTER. AFTER HIS <br>
           DAUGHTER'S SENSITIVE SKIN WAS ADVERSELY AFFECTED BY CHEMICALS AND ARTIFICIAL FRAGRANC- <br>
           ES IN COMMERCIAL PRODUCTS, HE DECIDED TO EMBARK ON A MISSION TO DEVELOP A SKINCARE LINE <br>
           COMPLETELY FREE OF HARMFUL CHEMICALS.<br>
           <br>
           DRIVEN BY HIS DEEP DESIRE TO PROVIDE SAFE AND PURE PRODUCTS, HE INITIATED A METICULOUS <br>
           DEVELOPMENT PROCESS TO ACHIEVE HIS GOAL. HIS VISION WAS TO CREATE PRODUCTS THAT AD- <br>
           HERED TO THE HIGHEST STANDARDS OF PURITY AND SAFETY, FREE FROM ANY HARMFUL CHEMI- <br>
           CALS.<br>
           <br>
           TODAY, GREEN HARVEST EXEMPLIFIES THIS COMMITMENT BY OFFERING SKINCARE SOLUTIONS <br>
           THAT ARE ENTIRELY NATURAL AND METICULOUSLY DESIGNED FOR SENSITIVE SKIN. THE FOUNDER'S <br>
           STEADFAST FOCUS ON PURITY AND SAFETY IN EACH PRODUCT ENSURES THE DELIVERY OF EFFEC- <br>
           TIVE AND AUTHENTIC CARE.
     </p>
 
    </div>
    <div class="about2">
    <h1 class="h1">
        MEET THE TEAM
     </h1>
    <p class="p3">
    AT GREEN HARVEST, OUR SUCCESS IS DRIVEN BY A DEDICATED TEAM OF PROFESSIONALS WHO ARE PASSIONATE ABOUT NATURAL SKINCARE AND COMMITTED TO DELIVERING THE HIGH- <br>
    EST QUALITY PRODUCTS. GET TO KNOW THE PEOPLE BEHIND OUR BRAND:<br>
    <br>
    EACH MEMBER OF OUR TEAM BRINGS UNIQUE EXPERTISE AND A SHARED DEDICATION TO OUR MISSION OF PROVIDING PURE, NATURAL SKINCARE SOLUTIONS. TOGETHER, WE STRIVE TO <br>
    DELIVER EXCEPTIONAL PRODUCTS AND SERVICES THAT MEET THE HIGHEST STANDARDS OF QUALITY AND INTEGRITY.
    </p>
    </div>
</div>
   

@endsection