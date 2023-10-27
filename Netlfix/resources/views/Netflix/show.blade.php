@extends('layouts.app')

@section('title', 'MHD - ZOOM')

@section('logo')
<a href="#" class="logo">
    Films<span>.hd</span>
</a>
@endsection

@section('contenu')

        <!--==Scroll-Progress-bar=========================-->
        <div id="progress">
            <span id="progress-value"></span>
        </div>

        <!--logo------------------->


        <!--==Movie-Banner=========================================-->
        <section class="movie-banner">
            <!--==img==================================-->
            <div class="m-banner-img">
                <img alt="" src="Movie-Data/Pirates-of-the-Caribbean-Salazar&#39;s-Revenge/cover.jpg">
            </div>
            <!--content================================-->
            <div class="banner-container">
                <!--title-container*******************----->
                <div class="title-container">
                    <!--title-top===============-->
                    <div class="title-top">
                    <!--title----->
                    <div class="movie-title">
                        <h1>Pirates of the Caribbean Salazar's Revenge</h1>
                    </div>
                    <!--more-about-movie-->
                    <div class="more-about-movie">
                        <span class="quality">Full HD</span>
                        <div class="rating">
                            8.2 <img alt="imbd" src="images/IMDb-icon.png">
                        </div>
                        <span>28 August 2017</span>
                        <span>87min</span>
                    </div>
                    <!--language--------->
                    <div class="language">
                        <span>English</span>
                    </div>
                    </div>
                    <!--Title-botttom==========================-->
                    <div class="title-bottom">
                        <!--category------->
                        <div class="category">
                            <strong>Category</strong><br/>
                            <a href="#">Horror</a>,<a href="#">Mistery</a>,<a href="#">Thriller</a>
                        </div>
                        <!--trailer-btn---->
                        <a href="https://www.youtube.com/watch?v=ZgQkEf3dQ08" class="watch-btn">Watch Trailer</a>
                    </div>
                </div>
                <!--play-btn******************************--->
                <div class="play-btn-container">
                    <div class="play-btn">
                        <a href="javascript:void">
                            <i class="fas fa-play"></i>
                        </a>
                    </div>
                </div>
                <!--Video/full-Movie***************************-->
                <div id="play" class="play">
                    <!--close-btn--->
                    <a href="javascript:void" class="close-movie">
                        <i class="fas fa-times"></i>
                    </a>
                    <!--movie------->
                    <div class="play-movie">
                        <video id="m-video" controls>
                            <source src="Movie-Data/Pirates-of-the-Caribbean-Salazar's-Revenge/Movie.mp4" type="video/mp4">
                        </video>
                    </div>
                </div>
            </div>
        </section>
        <!--Banner-end------------->
        <!--details=====================================-->
        <section class="movie-details">
            <strong>Pirates of the Caribean: Salazar's Revenge</strong>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint, veniam architecto, debitis quia similique adipisci autem quod eligendi delectus dolorum iusto. Eius, nobis ducimus! Corrupti nobis id itaque facere a.</p>
        </section>
        <!--==ScreenShots===============================-->
        <section class="screenshots">
            <strong>ScreenShots</strong>
            <!--screenshots-container----------->
            <div class="screen-s-container">
                <img alt="" src="Movie-Data/Pirates-of-the-Caribbean-Salazars-Revenge/screenshot-1.jpg">
                <img alt="" src="Movie-Data/Pirates-of-the-Caribbean-Salazar&#39;s-Revenge/screenshot-2.jpg">
                <img alt="" src="Movie-Data/Pirates-of-the-Caribbean-Salazar&#39;s-Revenge/screenshot-3.jpg">
                <img alt="" src="Movie-Data/Pirates-of-the-Caribbean-Salazar&#39;s-Revenge/screenshot-4.jpg">
            </div>
        </section>
        <!--Download====================================-->       
        <!--
         <section class="download-movie">
            
            <div class="download-container">
                
                <div class="download-box">
                    <span><i class="fas fa-server"></i> Server 1</span>
                    <span>English</span>
                    <span>480p</span>
                    <a href="Movie-Data/Pirates-of-the-Caribbean-Salazar's-Revenge/Movie.mkv" download>Download</a>
                </div>
                
                <div class="download-box">
                    <span><i class="fas fa-server"></i> Server 2</span>
                    <span>English</span>
                    <span>720p</span>
                    <a href="#">Download</a>
                </div>
                
                <div class="download-box">
                    <span><i class="fas fa-server"></i> Server 3</span>
                    <span>English</span>
                    <span>1080p</span>
                    <a href="#">Download</a>
                </div>
            </div>
        </section>
        --> 
<!--==jQuery=======================================-->
<script src="js/jQuery.js"></script>
        <script>
            /*==scroll-progress-bar======================*/
            let scrollPrecentage = () =>{
                let scrollProgress = document.getElementById("progress");
                let progressValue = document.getElementById("progress-value");
                let pos = document.documentElement.scrollTop;
                let calcHeight = document.documentElement.scrollHeight - document.documentElement.clientHeight;
                let scrollValue = Math.round(pos * 100 / calcHeight);
                scrollProgress.style.background = `conic-gradient(#e70634 ${scrollValue}%, #2b2f38 ${scrollValue}%)`;
            }
            window.onscroll = scrollPrecentage;
            window.onload = scrollPrecentage;
            /*--menu-btn-fixed-when-scroll============*/
            $(window).scroll(function(){
                if($(document).scrollTop() > 20){
                    $('.navigation').addClass('fix-icon');
                }
                else{
                    $('.navigation').removeClass('fix-icon');
                }
            });
            /*==popup-open==================================*/
            $(document).on('click','.play-btn a',function(){
                $('.play').addClass('active-popup');
            });
            /*==popup-Close==================================*/
            $(document).on('click','.close-movie',function(){
                $('.play').removeClass('active-popup');
            });
            /*==auto-play-when-popup-open===================*/
            $('.play-btn a').click(function(){
                $('#m-video')[0].play();
            });
            /*==Close-video-when-poppup-close==============*/
            $('.close-movie').click(function(){
                $('#m-video')[0].pause();
            });
          </script>
@endsection