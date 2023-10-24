@extends('layouts.app')


    @section('title', 'MHD - People')

    @section('logo')
    <a href="index.html" class="logo">
            Personnes<span>.hd</span>
        </a>
    @endsection
    @section('contenu')
    <!--==Scroll-Progress-bar=========================-->
    <div id="progress">
        <span id="progress-value"></span>
    </div>
    <!--==Navigation===================================-->

    <section id="latest">
        <!--heading-------->
        <div class="latest-heading">
        <h1>Plus vieux</h1>
    </div>

    <div class="post-container">


        @if (count($personnesVieux))
        @foreach($personnesVieux as $personneVieux)
        <div class="post-box">
            <!--img-->
            <div class="post-img">
                <img alt="" src="{{$personneVieux->photo}}" />
            </div>
            <!--text---------->
            <div class="main-slider-text">
                <!--quality----->
                <span class="quality">{{$personneVieux->prenom}} {{$personneVieux->nom}}</span>
                <!--bottom-text-->
                <div class="bottom-text">
                    <!--name----->
                    <div class="movie-name">
                        <span></span>
                        <a href="#">{{$personneVieux->rolePrincipal}}</a>
                    </div>
                    <!--Category-and-rating---->
                    <div class="category-rating">
                        <!--category-->
                        <div class="category">

                        </div>
                        <!--rating--->
                        <div class="rating">
                            {{$personneVieux->date}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
        @else
        <h1>Il n'y a pas de films</h1>
        @endif
    </div>
    <!--container------->
    <div class="latest-heading">
        <h1>Plus jeune</h1>
    </div>

    <div class="post-container">


@if (count($personnesJeune))
@foreach($personnesJeune as $personneJeune)
<div class="post-box">
    <!--img-->
    <div class="post-img">
        <img alt="" src="{{$personneJeune->photo}}" />
    </div>
    <!--text---------->
    <div class="main-slider-text">
        <!--quality----->
        <span class="quality">{{$personneJeune->prenom}} {{$personneJeune->nom}}</span>
        <!--bottom-text-->
        <div class="bottom-text">
            <!--name----->
            <div class="movie-name">
                <span></span>
                <a href="#">{{$personneJeune->rolePrincipal}}</a>
            </div>
            <!--Category-and-rating---->
            <div class="category-rating">
                <!--category-->
                <div class="category">

                </div>
                <!--rating--->
                <div class="rating">
                    {{$personneJeune->date}} 
                </div>
            </div>
        </div>
    </div>
</div>
@endforeach
@else
<h1 style="color:white">Il n'y a pas de films</h1>
@endif
</div>


    <div class="latest-heading">
        <h1>Acteurs</h1>
    </div>
    <div class="post-container">


@if (count($personnesActeur))
@foreach($personnesActeur as $personneActeur)
<div class="post-box">
    <!--img-->
    <div class="post-img">
        <img alt="" src="{{$personneActeur->photo}}" />
    </div>
    <!--text---------->
    <div class="main-slider-text">
        <!--quality----->
        <span class="quality">{{$personneActeur->prenom}} {{$personneActeur->nom}}</span>
        <!--bottom-text-->
        <div class="bottom-text">
            <!--name----->
            <div class="movie-name">
                <span></span>
                <a href="#">{{$personneActeur->rolePrincipal}}</a>
            </div>
            <!--Category-and-rating---->
            <div class="category-rating">
                <!--category-->
                <div class="category">

                </div>
                <!--rating--->
                <div class="rating">
                    {{$personneActeur->date}} 
                </div>
            </div>
        </div>
    </div>
</div>
@endforeach
@else
<h1>Il n'y a pas de films</h1>
@endif
</div>




    <div class="latest-heading">
        <h1>Réalisateurs</h1>
    </div>

    <div class="post-container">


@if (count($personnesRealisateur))
@foreach($personnesRealisateur as $personneRealisateur)
<div class="post-box">
    <!--img-->
    <div class="post-img">
        <img alt="" src="{{$personneRealisateur->photo}}" />
    </div>
    <!--text---------->
    <div class="main-slider-text">
        <!--quality----->
        <span class="quality">{{$personneRealisateur->prenom}} {{$personneRealisateur->nom}}</span>
        <!--bottom-text-->
        <div class="bottom-text">
            <!--name----->
            <div class="movie-name">
                <span>{{$personneRealisateur->rolePrincipal}}</span>
            </div>
            <!--Category-and-rating---->
            <div class="category-rating">
                <!--category-->
                <div class="category">
                </div>
                <!--rating--->
                <div class="rating">
                    {{$personneRealisateur->date}}/>
                </div>
            </div>
        </div>
    </div>
</div>
@endforeach
@else
<h1>Il n'y a pas de films</h1>
@endif
</div>



    <div class="latest-heading">
        <h1>Producteurs</h1>
    </div>

    <div class="post-container">


@if (count($personnesProducteur))
@foreach($personnesProducteur as $personneProducteur)
<div class="post-box">
    <!--img-->
    <div class="post-img">
        <img alt="" src="{{$personneProducteur->photo}}" />
    </div>
    <!--text---------->
    <div class="main-slider-text">
        <!--quality----->
        <span class="quality">{{$personneProducteur->personne}} {{$personneProducteur->nom}}</span>
        <!--bottom-text-->
        <div class="bottom-text">
            <!--name----->
            <div class="movie-name">
                <span></span>
                <a href="#">{{$personneProducteur->rolePrincipal}}</a>
            </div>
            <!--Category-and-rating---->
            <div class="category-rating">
                <!--category-->
                <div class="category">
                    
                </div>
                <!--rating--->
                <div class="rating">
                    {{$personneProducteur->date}}/>
                </div>
            </div>
        </div>
    </div>
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