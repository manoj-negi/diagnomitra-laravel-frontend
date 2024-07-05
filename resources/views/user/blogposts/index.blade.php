@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Blog | diagnomitra</title>
<meta name="description" content="">
<link rel="canonical" href="blog.html"/>

  <script src="ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
  <script src="cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
  <script src="cdn.jsdelivr.net/npm/bootstrap%405.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="unpkg.com/aos%402.3.1/dist/aos.js"></script>
  <script src="cdnjs.cloudflare.com/ajax/libs/lightgallery/2.7.1/lightgallery.min.js"></script>
  <script src="cdnjs.cloudflare.com/ajax/libs/lightgallery/2.7.1/plugins/thumbnail/lg-thumbnail.umd.min.js"></script>
  <script src="cdnjs.cloudflare.com/ajax/libs/lightgallery/2.7.1/plugins/zoom/lg-zoom.umd.min.js"></script>

<link href="cdn.jsdelivr.net/npm/bootstrap%405.2.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <link rel="preconnect" href="fonts.googleapis.com/index.html">
  <link rel="preconnect" href="fonts.gstatic.com/index.html" crossorigin>
  <link href="fonts.googleapis.com/css2df7e.css?family=Quicksand:wght@500;600;700&amp;display=swap" rel="stylesheet"> 
  <link href="fonts.googleapis.com/css2db6f.css?family=Roboto+Flex&amp;display=swap" rel="stylesheet"> 
  <link rel="stylesheet" href="cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
  <!-- AOS Css -->
  <link href="unpkg.com/aos%402.3.1/dist/aos.css" rel="stylesheet">
<link rel="stylesheet" href="cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.css" />
  <link rel="stylesheet" href="cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css" />
  
  
  <link rel="stylesheet" href="cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link rel="stylesheet" href="cdnjs.cloudflare.com/ajax/libs/boxicons/2.1.0/css/boxicons.min.css" />
  <link rel="stylesheet" href="cdnjs.cloudflare.com/ajax/libs/lightgallery/2.7.1/css/lightgallery-bundle.min.css">
  <link rel="stylesheet" href="static.joonsite.com/storage/21443/20284/assets/style1123.css?v=20240509094431">
  


<meta name="robots" content="noindex" />
<meta name="generator" content="Joonweb.com Website Builder"/>
<link rel="icon" type="image/ico" href="static.joonsite.com/storage/21443/media/2404251157347610.png" size="16x16"><link href="fonts.googleapis.com/cssbb8b.html?family=Quicksand%2C+sans-serif%7CTimes+New+Roman%7CNunito+Sans%7CRoboto+Flex%2C+sans-serif" rel="stylesheet">

<style>
    :root{
    --color1: #080a52;
    --color2: #ffe4f7;
    --color3: #eb2188;
    --color4: #e6fdff;
    --color5: #fff;
    --color6: #070707;
    
    --border-color: #CDC2AE;
    --light-border:#171717;
    --bx-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;

    --fontStyle1 : normal normal bold 48px/1.2 Quicksand, sans-serif;
    --fontStyle2 : normal normal bold 40px/1.2 Times New Roman;
    --fontStyle3 : normal normal bold 26px/1.2 Nunito Sans;
    --fontStyle4 : normal normal normal 18px/1.2 Times New Roman;
    --fontStyle5 : normal normal normal 20px/1.3 Times New Roman;
    --fontStyle6 : normal normal normal 18px/1.2 Times New Roman;
    --fontStyle7 : normal normal normal 18px/1.3 Times New Roman;
    --fontStyle8 : normal normal normal 17px/1.3 Times New Roman;
    --fontStyle9 : normal normal normal 14px/1.3 Roboto Flex, sans-serif;
    }

  select,textarea, input{background:transparent;}
    
.background1{background: var(--color1);color: var(--color5); border-color:var(--color5);}
.background2{background: var(--color2);color: var(--color6); border-color:var(--color6);}
.background3{background: var(--color3);color: var(--color5); border-color:var(--color5);}
.background4{background: var(--color4);color: var(--color6); border-color:var(--color6);}
.background5{background: var(--color5);color: var(--color6); border-color:var(--color6);}
.background6{background: var(--color6);color: var(--color5); border-color:var(--color5);}
  
.background1 input, .background1 input::placeholder, .background1 textarea, .background1 textarea::placeholder{color:var(--color5);}
.background2 input, .background2 input::placeholder, .background2 textarea, .background2 textarea::placeholder{color:var(--color6);}
.background3 input, .background3 input::placeholder, .background3 textarea, .background3 textarea::placeholder{color:var(--color5);}
.background4 input, .background4 input::placeholder, .background4 textarea, .background4 textarea::placeholder{color:var(--color6);}
.background5 input, .background5 input::placeholder, .background5 textarea, .background5 textarea::placeholder{color:var(--color6);}
.background6 input, .background6 input::placeholder, .background6 textarea, .background6 textarea::placeholder{color:var(--color5);}

.background1 input[type=submit]{background:var(--color5);color:var(--color6);}
.background2 input[type=submit]{background:var(--color6);color:var(--color5);}
.background3 input[type=submit]{background:var(--color5);color:var(--color6);}
.background4 input[type=submit]{background:var(--color6);color:var(--color5);}
.background5 input[type=submit]{background:var(--color1);color:var(--color5);}
.background6 input[type=submit]{background:var(--color1);color:var(--color5);}

.background1 input[type=submit]:hover{background:var(--color6);color:var(--color5);}
.background2 input[type=submit]:hover{background:var(--color5);color:var(--color6);}
.background3 input[type=submit]:hover{background:var(--color6);color:var(--color5);}
.background4 input[type=submit]:hover{background:var(--color5);color:var(--color6);}
.background5 input[type=submit]:hover{background:var(--color5);color:var(--color1);}
.background6 input[type=submit]:hover{background:var(--color5);color:var(--color1);}
    
.fontStyle1 {font: var(--fontStyle1);}
.fontStyle2 {font: var(--fontStyle2);}
.fontStyle3 {font: var(--fontStyle3);}
.fontStyle4 {font: var(--fontStyle4);}
.fontStyle5 {font: var(--fontStyle5);}
.fontStyle6 {font: var(--fontStyle6);}
.fontStyle7 {font: var(--fontStyle7);}
.fontStyle8 {font: var(--fontStyle8);}
.fontStyle9 {font: var(--fontStyle9);}
    
.mg-0{margin-bottom:0.5rem;}
.mg-1{margin-bottom:1rem;}
.mg-2{margin-bottom:2rem;}
.mg-3{margin-bottom:3rem;}
.mg-4{margin-bottom:4rem;}

.padding-2{padding: 2rem 0;} .padding-3{padding: 3rem 0;} .padding-4{padding: 4rem 0;}

  /* Global CSS for settings */
.section-padding{padding: 24px 0;}
.content-padding{padding: 12px 0;}
@media screen and (min-width: 750px) {
	.section-padding{padding: 48px 0;}
  	.content-padding{padding: 24px 0;}
}
/* End */
      @media (max-width: 750px) {
        .w-md-100 {width: 100% !important;}
        .w-md-75 {width: 75% !important;}
        .w-md-50 {width: 50% !important;}
    }


a{text-decoration: none;color: unset;}
body{overflow-x:hidden;}

.theme-shadow-lg{box-shadow: -8px 16px 25px #bbb;}
  
  
   /* About Variants */
.about-content{width: 80%;margin: 0 auto;}
.about-media img{width: 100%;object-fit: cover;aspect-ratio: 2/1;}
.about-media2 img{width: 100%;object-fit: cover;aspect-ratio: 1/1;}
  @media(max-width:991px){.about-content{width: 100%;margin: 0 auto;}}
/* About Variants End */

  /* Column Variants */
  .column-media img{width: 100%;aspect-ratio: 3/2;object-fit: cover;}
  .column-item{text-align: center;}
  .column-icon-media img{width: 50px;aspect-ratio: 1/1;}
  .border-radius-2{border-radius: 2rem;}

    /* Column Variants End */
  
  /* Slider */
  .slide_first .slick-slide{max-height:500px;}
   .slide_img_2 img{width:100%; height: 500px; object-fit: cover;}
   .slide_img_2{position: relative; }
   .slider_2_text{position: absolute; top:50%; left:50%; transform: translate(-50%,-50%); padding: 2rem 3rem; width:50%; text-align:   center; width:50%;}
   .slider_text_2{position: absolute; top:0; left:0; height:100%; padding: 2rem 3rem; width:50%; display: flex;  flex-direction: column;         justify-content: center;}
   .slider_22 .slick-next{ top: 50%;right:0%;}
   .slider_22 .slick-prev{ top:50%; left:0%;}
  
   .slider_11 .slick-next{ top: 50%;right:0%;}
   .slider_11 .slick-prev{ top:50%; left:0%;}
   .slider_22 .slick-prev::before{font-family: FontAwesome; font-size:normal; content: '\f104';  font-size: 1.2rem; transition: all 0.4s linear; color: var(--color6);  background: transparent; border:none; outline:none;}
   .slider_22 .slick-next::before{ font-family: FontAwesome; font-size:normal; content: '\f105';  font-size: 1.2rem;  transition: all 0.4s linear; color: var(--color6);  background: transparent; border:none; outline:none;}
   .slider_22 .slick-prev,.slick-next{position: absolute;width:50px;font-size:0.1px;z-index:1;}
   .slider_22 .slick-dots .slick-active{background-color:var(--color6); transition: all 0.4s ease-in-out;}
   .slider_22 .slick-dots li{  border-radius: 50%; height:10px; width:10px; display: inline-block; font-size: 0px; margin: 0 0.3rem; cursor: pointer; border: 0.2px solid var(--color6);}
   .slider_22 .slick-dots{bottom:5%; position:absolute; left:50%; transform: translate(-50%,0);}
  .slider_11 .slick-dots{bottom:5%; left:25%;}
   .slider_22 .slick-dotted.slick-slider {margin-bottom: 0px; }
  .slider_22 .slick-dots{margin-bottom: 0px; padding-left:0;}
   .slider_22 .slick-dots li.slick-active button:before{color:unset;}
   .slider_22 .slick-dots li button:before{color:unset;}
  
     @media(max-width:991px){.slider_22 .slick-next{ top: 50%;right:0% ;}
     .slider_22 .slick-prev{ top:50%; left:0%;} .slider_2_text,.slider_text_2{width:70%; padding: 2rem 2rem;} .slider_text_2{width:50%;}
     .slider_11 .slick-next{ top: 50%;right:0%;}
    .slider_11 .slick-prev{ top:50%; left:0%;} 
     }
     @media(max-width:576px){ .slider_22 .slick-next{ top: 50%;right:0%;}
    .slider_22 .slick-prev{ top:50%; left:0%;} .slider_2_text,.slider_text_2{width:80%; padding: 2rem 1rem; text-align: center;}
    .slider_text_2{height: auto; top: 20%; left:10%; }
      .slider_11 .slick-next{ top:50%;right:0%;}
      .slider_11 .slick-prev{ top:50%; left:0%;} 
      .slider_11 .slick-dots{bottom:5%; position:absolute; left:50%; transform: translate(-50%,0);}
    }
  /* Slider End */
  
  /* Text variants */
  .text-media img{max-height:240px;object-fit:contain;}
  /* Text variants End */
  
  /* Video */
  .video-media iframe{width: 100%;min-height: 450px;}
  .video-media2 iframe{width: 100%;min-height: 350px;}
  /* Video End */
  
  /* Forms */
  .form_1_img{position: relative;width:100%;height:100%;}
  .form_1_img .form_1_div{position: absolute; top:50%; left:50%; transform: translate(-50%,-50%); padding: 2rem 3rem; width:50%; }
  .form_1_img img{width: 100%; height: 500px; object-fit: cover;}
  .form_2_img img{width:100%; aspect-ratio: 3/2; object-fit: cover;}
  .form_form_style input, .form_form_style textarea, .form_form_style select{outline: none; border:none; border-bottom:1px solid rgb(196, 196, 196);  border-radius: 0; padding:0.5rem 0.5rem; width:100%; background: transparent;}
  .form_form_style [type=submit]{padding:0.7rem 3rem;margin-top:1rem; transition:0.4s linear;}
  .form_form_style li{list-style:none;margin-bottom: 1rem;display:block;align-items:center;}
  .form_form_style li label{width:100%; margin-bottom:0.5rem;}
  @media (max-width:991px) {.form_1_img .form_1_div{padding: 2rem 2rem; width:70%;} }
  @media (max-width:576px) {.form_1_img .form_1_div{width:90%; padding: 2rem 2rem;}  .form_form_style [type=submit]{width:50%;}}
    /* Form End */
  
  /* Welcome */
  .welcome_1_img img{width:100%; height:500px; object-fit: cover;}
  .welcome_1_img{position: relative;}
  .welcome_1_text{position: absolute; top:50%; left:50%; transform: translate(-50%, -50%);  text-align: center; padding:3rem;}
  .welcome_1_textt{text-align: center;}
  .welcome_texts{padding: 5rem 0;}
  @media (max-width:576px) {.welcome_1_text{padding: 1rem 3rem;width:90%;}}
  /* Welcome End */
  
  /* content  */
.content_data a{color:var(--color1);font:var(--fontStyle8);}
.content_data p{margin-bottom:1rem;}
.content_data p, .content_data span, .content_data li, .content_data td, .content_data th{font:var(--fontStyle8);}
.content_data th{font-weight:bold;color:#000;}
.content_data table, .content_data td, .content_data th{border:1px solid #bbb;border-collapse:collapse;}
.content_data td, .content_data th{padding:0.7rem 1.4rem;}
.content_data img{margin:1rem auto;width:100%;}
.content_data h1{font:var(--fontStyle6);margin-bottom:1rem;}
.content_data h2{font:var(--fontStyle6);margin-bottom:1rem;}
.content_data h3{font:var(--fontStyle7);margin-bottom:1rem;}
.content_data h4{font:var(--fontStyle8);margin-bottom:1rem;}
.content_data h5{font:var(--fontStyle8);margin-bottom:1rem;}
.content_data h6{font:var(--fontStyle8);margin-bottom:1rem;}

.content_data h1 a, .content_data h2 a, .content_data h3 a, .content_data h4 a, .content_data h5 a, .content_data h6 a{font-size: inherit;}

.content_data ul, .content_data ol{padding-left:2rem !important;}
.content_data ul li{list-style: disc !important;}
.content_data ol li{list-style-type: lower-alpha;}
 /* content end */

  
      /* ------ word_limit_2 ----------- */
      .word_limit_2{
      	text-overflow: ellipsis;
        word-break: break-word;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        display: -webkit-box;
        overflow: hidden;
      }
      .word_limit_3{
      	text-overflow: ellipsis;
        word-break: break-word;
        -webkit-line-clamp: 3;
        -webkit-box-orient: vertical;
        display: -webkit-box;
        overflow: hidden;
      }
    
        /* ------ word_limit_2 end ----------- */
  

    .see-list-item{cursor:pointer;} .see_popups{  display:none;z-index:99999999999;position:absolute;} jw-media{ display:inline-block; } .shapewheel{   position: absolute; left: 0;bottom: -1px; width: 100%;  } #jw-popup-container {display:none;position: fixed;z-index: 996;width: 60%;left: 50%;margin-left: -30%;top: 20%;background-color: #fff;} #jw-popup-close {cursor: pointer;position: absolute;right: -10px;top: -10px;z-index: 998;width: 25px;height: 25px;border-radius: 25px;text-align: center;font-size: 12px;background-color: #000;line-height: 25px;color: #fff;} #jw-popup-iframe-container {position: absolute;z-index: 997;width: 100%;padding-bottom: 56.25%;border: 2px solid #000;border-radius: 2px;} #jw-popup-container iframe {z-index: 999;position: absolute;width: 100%;height: 100%;left: 0;top: 0;background-color: #000;} #jw-popup-overlay {display: none;position: fixed;z-index: 995;top: 0;background-color: #000;opacity: 0.8;width: 100%;height: 100%;} .see-dp-none{display:none;} .rs-modal{position: fixed;z-index: 999999;height: 100vh;width: 100%;top: 0;left: 0;display: none;} .rs-modal-inner{width: 100%;height: 100%; background: rgba(0, 0, 0, 0.5);display: flex;align-items: center;justify-content: center;} .rs-modal .rs-modal-box{width: 95%;max-width: 350px;background: #fff;padding:20px 15px;border-radius: 10px;} .rs-modal .rs-modal-container{max-height: 450px;overflow-y: scroll;scrollbar-width: thin;padding: 0px 10px;} .rs-modal .rs-modal-container::-webkit-scrollbar{width: 5px;} .rs-modal .rs-modal-container::-webkit-scrollbar-track {background: none;} .rs-modal .rs-modal-container::-webkit-scrollbar-thumb {background: #888;border-radius: 5px;} .rs-modal .rs-color-modal,.review-site .rs-modal .rs-fonts-modal{display: none;} .rs-modal .rs-modal-title{font-size: 25px;font-weight: 600;padding: 20px 0px;} #jw-popup-close:hover {color: #DE0023;} [data-popup]{display: none;}
  
  </style>
    
</head>
<style>
    #blog_1 .theme-title .jwset {
        font-size: 24px;
        font-family: Arial, sans-serif;
        font-weight: bold;
        line-height: 1.5;
        letter-spacing: 1px;
    }

    #blog_1 .theme-subtitle .jwset {
        font-size: 18px;
        font-family: Arial, sans-serif;
        font-weight: normal;
        line-height: 1.5;
        letter-spacing: 1px;
    }

    .word_limit_3 {
        display: -webkit-box;
        -webkit-line-clamp: 3;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }
</style>
@include('header')
<section class="blog-fleed padding-4" id="blog_1">
    <div class="container">
        <div class="top-box text-center text-lg-center content-padding">
            <div class="fontStyle3 theme-title jwset">Latest Blogs</div>
          
        </div>
        <div class="row gy-4 feed-ul">
            @foreach ($blogPosts as $blogPost)
            <div class="feed-list col-12 col-sm-6 col-12 col-md-4">
                <div class="list-in text-start text-lg-start">
                    <figure class="column-media-fit">
                        <img src="{{ asset('storage/' . $blogPost->image) }}" alt="{{ $blogPost->title }}" onerror="this.src='../static.joonsite.com/storage/2077/media/wlcm.jpg'">
                    </figure>
                    <ul class="feed-box d-flex flex-wrap justify-content-between py-3 fontStyle9">
                        <li class="opacity1">
                            <a href="{{ route('blogposts.show', $blogPost->id) }}">
                                <i class="fa-solid fa-eye me-2"></i>
                                <span class="para">2</span>
                            </a>
                        </li>
                        <li class="opacity1">
                            <a href="{{ route('blogposts.show', $blogPost->id) }}">
                                <i class="fa-solid fa-user me-2"></i>
                                <span class="para">{{ $blogPost->author }}</span>
                            </a>
                        </li>
                        <li class="opacity1">
                            <a href="{{ route('blogposts.show', $blogPost->id) }}">
                                <i class="fa-solid fa-calendar-days me-2"></i>
                                <span class="para">{{ $blogPost->created_at->format('d-m-Y') }}</span>
                            </a>
                        </li>
                    </ul>
                    <div class="feed-list-cont">
                        <div class="fontStyle4 list-title">{{ $blogPost->title }}</div>
                        <div class="para list-para fontStyle7 mt-2 word_limit_3">{{ $blogPost->content }}</div>
                        <div class="list-btn btn fontStyle7 mt-2">
                            <a href="{{ route('blogposts.show', $blogPost->id) }}" class="color1">Read More <i class="fa-solid fa-angles-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection
</html>