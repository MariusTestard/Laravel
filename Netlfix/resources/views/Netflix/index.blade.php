@extends('layouts.app')


@section('title', 'MHD - Full HD Movies')

@section('logo')
<a href="#" class="logo">
    Films<span>.hd</span>
</a>
@endsection
@section('contenu')

@section('searchBar')
<form action="" class="search-box">
    <!--input-->
    <input type="text" name="search" placeholder="Search Movie" class="search-input" required />
    <!--btn-->
    <button type="submit">
        <i class="fas fa-search"></i>
    </button>
</form>
@endsection

<!--==Scroll-Progress-bar=========================-->
<div id="progress">
    <span id="progress-value"></span>
</div>
<!--==Navigation===================================-->
<section id="latest">
    <!--heading-------->
    <div class="latest-heading">
        <h1>Thriller</h1>
    </div>
    <div class="post-container">
        @if (count($filmsThriller))
        @foreach($filmsThriller as $filmThriller)

        <div class="post-box">

            <!--img-->
            <div class="post-img">
                <img alt="" src="{{$filmThriller->pochette}}" />
            </div>

            <!--text---------->
            <a class="zoomfilm" href="{{ route('film.show', [$filmThriller]) }}">
                <div class="main-slider-text">
                    <!--quality----->
                    <span class="quality">Full HD</span>
                    <!--bottom-text-->
                    <div class="bottom-text">
                        <!--name----->
                        <div class="movie-name">
                            <span>{{$filmThriller->annee}}</span>
                            <a>{{$filmThriller->titre}}</a>
                        </div>
                        <!--Category-and-rating---->
                        <div class="category-rating">
                            <!--category-->
                            <div class="category">
                                <a>{{$filmThriller->type}}</a>
                            </div>
                            <!--rating--->
                            <div class="rating">
                                {{$filmThriller->cote}} <img alt="imbd" src="images/IMDb-icon.png" />
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        @endforeach
        @else
        <h1>Il n'y a pas de films</h1>
        @endif
    </div>
    <!--container------->
    <div class="latest-heading">
        <h1>Horror</h1>
    </div>

    <div class="post-container">


        @if (count($filmsHorror))
        @foreach($filmsHorror as $filmHorror)
        <div class="post-box">
            <!--img-->
            <div class="post-img">
                <img alt="" src="{{$filmHorror->pochette}}" />
            </div>
            <!--text---------->
            <a class="zoomfilm" href="{{ route('film.show', [$filmHorror]) }}">
                <div class="main-slider-text">
                    <!--quality----->
                    <span class="quality">Full HD</span>
                    <!--bottom-text-->
                    <div class="bottom-text">
                        <!--name----->
                        <div class="movie-name">
                            <span>{{$filmHorror->annee}}</span>
                            <a>{{$filmHorror->titre}}</a>
                        </div>
                        <!--Category-and-rating---->
                        <div class="category-rating">
                            <!--category-->
                            <div class="category">
                                <a>{{$filmHorror->type}}</a>
                            </div>
                            <!--rating--->
                            <div class="rating">
                                {{$filmHorror->cote}} <img alt="imbd" src="images/IMDb-icon.png" />
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        @endforeach
        @else
        <h1>Il n'y a pas de films</h1>
        @endif
    </div>


    <div class="latest-heading">
        <h1>Mystery</h1>
    </div>
    <div class="post-container">


        @if (count($filmsMystery))
        @foreach($filmsMystery as $filmMystery)
        <div class="post-box">
            <!--img-->
            <div class="post-img">
                <img alt="" src="{{$filmMystery->pochette}}" />
            </div>
            <!--text---------->
            <a class="zoomfilm" href="{{ route('film.show', [$filmMystery]) }}">
                <div class="main-slider-text">
                    <!--quality----->
                    <span class="quality">Full HD</span>
                    <!--bottom-text-->
                    <div class="bottom-text">
                        <!--name----->
                        <div class="movie-name">
                            <span>{{$filmMystery->annee}}</span>
                            <a>{{$filmMystery->titre}}</a>
                        </div>
                        <!--Category-and-rating---->
                        <div class="category-rating">
                            <!--category-->
                            <div class="category">
                                <a>{{$filmMystery->type}}</a>
                            </div>
                            <!--rating--->
                            <div class="rating">
                                {{$filmMystery->cote}} <img alt="imbd" src="images/IMDb-icon.png" />
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        @endforeach
        @else
        <h1>Il n'y a pas de films</h1>
        @endif
    </div>




    <div class="latest-heading">
        <h1>Most popular</h1>
    </div>

    <div class="post-container">


        @if (count($filmsMostPop))
        @foreach($filmsMostPop as $filmMostPop)
        <div class="post-box">
            <!--img-->
            <div class="post-img">
                <img alt="" src="{{$filmMostPop->pochette}}" />
            </div>
            <!--text---------->
            <a class="zoomfilm" href="{{ route('film.show', [$filmMostPop]) }}">
                <div class="main-slider-text">
                    <!--quality----->
                    <span class="quality">Full HD</span>
                    <!--bottom-text-->
                    <div class="bottom-text">
                        <!--name----->
                        <div class="movie-name">
                            <span>{{$filmMostPop->annee}}</span>
                            <a>{{$filmMostPop->titre}}</a>
                        </div>
                        <!--Category-and-rating---->
                        <div class="category-rating">
                            <!--category-->
                            <div class="category">
                                <a>{{$filmMostPop->type}}</a>
                            </div>
                            <!--rating--->
                            <div class="rating">
                                {{$filmMostPop->cote}} <img alt="imbd" src="images/IMDb-icon.png" />
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        @endforeach
        @else
        <h1>Il n'y a pas de films</h1>
        @endif
    </div>



    <div class="latest-heading">
        <h1>Least popular</h1>
    </div>

    <div class="post-container">


        @if (count($filmsLeastPop))
        @foreach($filmsLeastPop as $filmLeastPop)
        <div class="post-box">
            <!--img-->
            <div class="post-img">
                <img alt="" src="{{$filmLeastPop->pochette}}" />
            </div>
            <!--text---------->
            <a class="zoomfilm" href="{{ route('film.show', [$filmLeastPop]) }}">
                <div class="main-slider-text">
                    <!--quality----->
                    <span class="quality">Full HD</span>
                    <!--bottom-text-->
                    <div class="bottom-text">
                        <!--name----->
                        <div class="movie-name">
                            <span>{{$filmLeastPop->annee}}</span>
                            <a>{{$filmLeastPop->titre}}</a>
                        </div>
                        <!--Category-and-rating---->
                        <div class="category-rating">
                            <!--category-->
                            <div class="category">
                                <a>{{$filmLeastPop->type}}</a>
                            </div>
                            <!--rating--->
                            <div class="rating">
                                {{$filmLeastPop->cote}} <img alt="imbd" src="images/IMDb-icon.png" />
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        @endforeach
        @else
        <h1>Il n'y a pas de films</h1>
        @endif
    </div>


    <!--container-end--->
    <!--page-number=====================-->
    <div class="page-number">
        <a href="#" class="page-active">1</a>
        <a href="#">2</a>
        <a href="#">3</a>
        ....
        <a href="#">100</a>
    </div>
</section>
<!--latest-post-end------->
<!--==footer==============================-->

<!--==JS-Swiper====================================-->
<script src="js/swiper-bundle.min.js"></script>
<!--==jQuery=======================================-->
<script src="js/jQuery.js"></script>
<script>
    /*==scroll-progress-bar======================*/
    let scrollPrecentage = () => {
        let scrollProgress = document.getElementById("progress");
        let progressValue = document.getElementById("progress-value");
        let pos = document.documentElement.scrollTop;
        let calcHeight = document.documentElement.scrollHeight - document.documentElement.clientHeight;
        let scrollValue = Math.round(pos * 100 / calcHeight);
        scrollProgress.style.background = `conic-gradient(#e70634 ${scrollValue}%, #2b2f38 ${scrollValue}%)`;
    }
    window.onscroll = scrollPrecentage;
    window.onload = scrollPrecentage;
    /*Initialize Swiper*/
    var swiper = new Swiper(".mySwiper", {
        slidesPerView: 1,
        spaceBetween: 10,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        autoplay: {
            delay: 5000,
            disableOnInteraction: false,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        breakpoints: {
            640: {
                slidesPerView: 2,
                spaceBetween: 20,
            },
            768: {
                slidesPerView: 2,
                spaceBetween: 40,
            },
            1024: {
                slidesPerView: 3,
                spaceBetween: 50,
            },
        },
    });
    /*--menu-btn-fixed-when-scroll============*/
    $(window).scroll(function() {
        if ($(document).scrollTop() > 20) {
            $('.navigation').addClass('fix-icon');
        } else {
            $('.navigation').removeClass('fix-icon');
        }
    });
</script>
@endsection