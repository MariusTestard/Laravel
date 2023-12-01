@extends('layouts.app')


@section('title', 'MHD - Full HD Movies')

@section('logo')
<a href="#" class="logo">
    Usagers<span>.hd</span>
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
@endsection

    <!-- 
    PHASE DE TEST, À REVOIR ET FAIRE DES TOASTS EN BOOTSTRAP SI ERREURS
    -->
    @if(isset($errors) && $errors->any())
    <div id="pToast">
        @foreach($errors->all() as $error)
            {{ $error }}
        @endforeach
        </div>
    </div>
    @endif

@if(session('messages'))
    <div id="pToast">{{ session('messages') }}</div>
@endif

    <!--==Scroll-Progress-bar=========================-->
    <div id="progress">
        <span id="progress-value"></span>
    </div>
    <!--==Navigation===================================-->
    <section id="latest">
        <!--heading-------->
        @role('admin')
        <div id="buttonsDisplay">
            <a href="{{ route('usagers.create') }}" class="create-btn">Create</a>
        </div>
        @endrole

        <!-- NORMAUX OU ADMIN POUR LES THRILLERS -->
        <div class="latest-heading">
            <h1>Usagers</h1>
        </div>
        <div class="post-container">
            @if (count($usagers))
            @foreach($usagers as $usager)
            <div class="post-box">
                <!--img-->
                <div class="post-img">
                    <img alt="" src="https://isobarscience.com/wp-content/uploads/2020/09/default-profile-picture1.jpg" />
                </div>
                <!--text---------->

                <div class="main-slider-text">
                    <!--quality----->
                    <div id="topFilm">
                        <span class="quality">{{$usager->role}}</span>
                        @if(auth()->check() && (auth()->user()->role == 'admin' || auth()->user()->role == 'normal'))
                        <a href="{{ route('usagers.edit', [$usager]) }}" class="modifygear">⚙️</a>
                        @endif
                        @role('admin')
                        <form method="POST" action="{{ route('usagers.destroy', [$usager->id]) }}">
                            @csrf
                            @method('DELETE')
                            <button class="deleteX">❌</button>
                        </form>
                        @endrole
                    </div>
                    <!--bottom-text-->
                    <div class="bottom-text">
                        <!--name----->
                        <div class="movie-name">
                            <span></span>
                            <a>{{$usager->prenom}} {{$usager->nom}}</a>
                        </div>
                        <!--Category-and-rating---->
                        <div class="category-rating">
                            <!--category-->
                            <div class="category">
                                <a>{{$usager->email}}</a>
                            </div>
                            <!--rating--->
                            <div class="rating">

                            </div>
                        </div>
                    </div>
                </div>
                </a>
            </div>
            @endforeach
            @else
            <h1 class="noFilm">Il n'y a pas de films</h1>
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
        setTimeout(function() {
        var pToast = document.getElementById('pToast');
                    pToast.style.animation = "fadeinout 1.75";
                    setTimeout(function() {
                        pToast.style.display = "none";
                    }, 1750);
                }, 1750);
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