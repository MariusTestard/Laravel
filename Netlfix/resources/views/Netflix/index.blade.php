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
@endsection

    <!-- 
    PHASE DE TEST, À REVOIR ET FAIRE DES TOASTS EN BOOTSTRAP SI ERREURS
    -->
    @if(isset($errors) && $errors->any())
    <div class="alert alert-danger">
        @foreach($errors->all() as $error)
        <p>{{ $error }}</p>
        @endforeach
    </div>
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
            <a href="{{ route('films.create') }}" class="create-btn">Create</a>
            <a href="{{ route('filmsAdd.create') }}" class="create-btn">Add persons</a>
        </div>
        @endrole

        <!-- NORMAUX OU ADMIN POUR LES THRILLERS -->
        <div class="latest-heading">
            <h1>Thriller</h1>
        </div>

        @if(auth()->check() && (auth()->user()->role == 'admin' || auth()->user()->role == 'normal'))
        <div class="post-container">
            @if (count($filmsThriller))
            @foreach($filmsThriller as $filmThriller)
            <div class="post-box">
                <!--img-->
                <div class="post-img">
           
                    <img alt="" src="{{$filmThriller->pochette}}" />
        
                </div>

                <!--text---------->
                <div class="main-slider-text">
                    <!--quality----->
                    <div id="topFilm">
                        <span class="quality">Full HD</span>
                        @role('admin')
                        <a href="{{ route('netflix.edit', [$filmThriller]) }}" class="modifygear">⚙️</a>
                        <form method="POST" action="{{ route('films.destroy', [$filmThriller->id]) }}">
                            @csrf
                            @method('DELETE')
                            <button class="deleteX">❌</button>
                        </form>
                        @endrole
                    </div>
                    <a class="zoomfilm" href="{{ route('film.show', [$filmThriller]) }}"></a>
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
            </div>
            @endforeach
            @else
            <h1>Il n'y a pas de films</h1>
            @endif
        </div>
        @endif

        <!-- ENFANT POUR LES THRILLERS -->
        @role('enfant')
        <div class="post-container">
            @if (count($filmsThrillerEnfant))
            @foreach($filmsThrillerEnfant as $filmThrillerEnfant)
            <div class="post-box">
                <!--img-->
                <div class="post-img">
                    <img alt="" src="{{$filmThrillerEnfant->pochette}}" />
                </div>
                <!--text---------->
                <div class="main-slider-text">
                    <!--quality----->
                    <div id="topFilm">
                        <span class="quality">Full HD</span>
                    </div>
                    <a class="zoomfilm" href="{{ route('film.show', [$filmThrillerEnfant]) }}"></a>
                    <!--bottom-text-->
                    <div class="bottom-text">
                        <!--name----->
                        <div class="movie-name">
                            <span>{{$filmThrillerEnfant->annee}}</span>
                            <a>{{$filmThrillerEnfant->titre}}</a>
                        </div>
                        <!--Category-and-rating---->
                        <div class="category-rating">
                            <!--category-->
                            <div class="category">
                                <a>{{$filmThrillerEnfant->type}}</a>
                            </div>
                            <!--rating--->
                            <div class="rating">
                                {{$filmThrillerEnfant->cote}} <img alt="imbd" src="images/IMDb-icon.png" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            @else
            <h1 class="noFilm">Il n'y a pas de films</h1>
            @endif
        </div>
        @endrole

        <!--container------->
        <!-- NORMAUX OU ADMIN POUR LES HORRORS-->
        <div class="latest-heading">
            <h1>Horror</h1>
        </div>

        @if(auth()->check() && (auth()->user()->role == 'admin' || auth()->user()->role == 'normal'))
        <div class="post-container">
            @if (count($filmsHorror))
            @foreach($filmsHorror as $filmHorror)
            <div class="post-box">
                <!--img-->
                <div class="post-img">
                    <img alt="" src="{{$filmHorror->pochette}}" />
                </div>
                <!--text---------->
                <div class="main-slider-text">
                    <!--quality----->
                    <div id="topFilm">
                        <span class="quality">Full HD</span>
                        @role('admin')
                        <a href="{{ route('netflix.edit', [$filmHorror]) }}" class="modifygear">⚙️</a>
                        <form method="POST" action="{{ route('films.destroy', [$filmHorror->id]) }}">
                            @csrf
                            @method('DELETE')
                            <button class="deleteX">❌</button>
                        </form>
                        @endrole
                    </div>
                    <a class="zoomfilm" href="{{ route('film.show', [$filmHorror]) }}"></a>

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
        @endif

        <!-- ENFANT POUR LES HORRORS-->
        @role('enfant')
        <div class="post-container">
            @if (count($filmsHorrorEnfant))
            @foreach($filmsHorrorEnfant as $filmHorrorEnfant)
            <div class="post-box">
                <!--img-->
                <div class="post-img">
                    <img alt="" src="{{$filmHorrorEnfant->pochette}}" />
                </div>
                <!--text---------->
                <div class="main-slider-text">
                    <!--quality----->
                    <div id="topFilm">
                        <span class="quality">Full HD</span>
                    </div>
                    <a class="zoomfilm" href="{{ route('film.show', [$filmHorrorEnfant]) }}"></a>

                    <!--bottom-text-->
                    <div class="bottom-text">
                        <!--name----->
                        <div class="movie-name">
                            <span>{{$filmHorrorEnfant->annee}}</span>
                            <a>{{$filmHorrorEnfant->titre}}</a>
                        </div>
                        <!--Category-and-rating---->
                        <div class="category-rating">
                            <!--category-->
                            <div class="category">
                                <a>{{$filmHorrorEnfant->type}}</a>
                            </div>
                            <!--rating--->
                            <div class="rating">
                                {{$filmHorrorEnfant->cote}} <img alt="imbd" src="images/IMDb-icon.png" />
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
        @endrole

        <div class="latest-heading">
            <h1>Mystery</h1>
        </div>

        @if(auth()->check() && (auth()->user()->role == 'admin' || auth()->user()->role == 'normal'))
        <div class="post-container">
            @if (count($filmsMystery))
            @foreach($filmsMystery as $filmMystery)
            <div class="post-box">
                <!--img-->
                <div class="post-img">
                    <img alt="" src="{{$filmMystery->pochette}}" />
                </div>
                <!--text---------->

                <div class="main-slider-text">
                    <!--quality----->
                    <div id="topFilm">
                        <span class="quality">Full HD</span>
                        @role('admin')
                        <a href="{{ route('netflix.edit', [$filmMystery]) }}" class="modifygear">⚙️</a>
                        <form method="POST" action="{{ route('films.destroy', [$filmMystery->id]) }}">
                            @csrf
                            @method('DELETE')
                            <button class="deleteX">❌</button>
                        </form>
                        @endrole
                    </div>
                    <a class="zoomfilm" href="{{ route('film.show', [$filmMystery]) }}"></a>

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
        @endif

        @role('enfant')
        <div class="post-container">
            @if (count($filmsMysteryEnfant))
            @foreach($filmsMysteryEnfant as $filmMysteryEnfant)
            <div class="post-box">
                <!--img-->
                <div class="post-img">
                    <img alt="" src="{{$filmMysteryEnfant->pochette}}" />
                </div>
                <!--text---------->

                <div class="main-slider-text">
                    <!--quality----->
                    <div id="topFilm">
                        <span class="quality">Full HD</span>
                    </div>
                    <a class="zoomfilm" href="{{ route('film.show', [$filmMysteryEnfant]) }}"></a>

                    <!--bottom-text-->
                    <div class="bottom-text">
                        <!--name----->
                        <div class="movie-name">
                            <span>{{$filmMysteryEnfant->annee}}</span>
                            <a>{{$filmMysteryEnfant->titre}}</a>
                        </div>
                        <!--Category-and-rating---->
                        <div class="category-rating">
                            <!--category-->
                            <div class="category">
                                <a>{{$filmMysteryEnfant->type}}</a>
                            </div>
                            <!--rating--->
                            <div class="rating">
                                {{$filmMysteryEnfant->cote}} <img alt="imbd" src="images/IMDb-icon.png" />
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
        @endrole

        <div class="latest-heading">
            <h1>Most popular</h1>
        </div>

        @if(auth()->check() && (auth()->user()->role == 'admin' || auth()->user()->role == 'normal'))
        <div class="post-container">
            @if (count($filmsMostPop))
            @foreach($filmsMostPop as $filmMostPop)
            <div class="post-box">
                <!--img-->
                <div class="post-img">
                    <img alt="" src="{{$filmMostPop->pochette}}" />

                </div>
                <!--text---------->

                <div class="main-slider-text">
                    <!--quality----->
                    <div id="topFilm">
                        <span class="quality">Full HD</span>
                        @role('admin')
                        <a href="{{ route('netflix.edit', [$filmMostPop]) }}" class="modifygear">⚙️</a>
                        <form method="POST" action="{{ route('films.destroy', [$filmMostPop->id]) }}">
                            @csrf
                            @method('DELETE')
                            <button class="deleteX">❌</button>
                        </form>
                        @endrole
                    </div>
                    <a class="zoomfilm" href="{{ route('film.show', [$filmMostPop]) }}"></a>

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
        @endif

        @role('enfant')
        <div class="post-container">
            @if (count($filmsMostPopEnfant))
            @foreach($filmsMostPopEnfant as $filmMostPopEnfant)
            <div class="post-box">
                <!--img-->
                <div class="post-img">
  
                    <img alt="" src="{{$filmMostPopEnfant->pochette}}" />
                
                </div>
                <!--text---------->

                <div class="main-slider-text">
                    <!--quality----->
                    <div id="topFilm">
                        <span class="quality">Full HD</span>
                    </div>
                    <a class="zoomfilm" href="{{ route('film.show', [$filmMostPopEnfant]) }}"></a>

                    <!--bottom-text-->
                    <div class="bottom-text">
                        <!--name----->
                        <div class="movie-name">
                            <span>{{$filmMostPopEnfant->annee}}</span>
                            <a>{{$filmMostPopEnfant->titre}}</a>
                        </div>
                        <!--Category-and-rating---->
                        <div class="category-rating">
                            <!--category-->
                            <div class="category">
                                <a>{{$filmMostPopEnfant->type}}</a>
                            </div>
                            <!--rating--->
                            <div class="rating">
                                {{$filmMostPopEnfant->cote}} <img alt="imbd" src="images/IMDb-icon.png" />
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
        @endrole

        <div class="latest-heading">
            <h1>Least popular</h1>
        </div>

        @if(auth()->check() && (auth()->user()->role == 'admin' || auth()->user()->role == 'normal'))
        <div class="post-container">
            @if (count($filmsLeastPop))
            @foreach($filmsLeastPop as $filmLeastPop)
            <div class="post-box">
                <!--img-->
                <div class="post-img">
            
                    <img alt="" src="{{ $filmLeastPop->pochette }}" />
    
                </div>
                <!--text---------->

                <div class="main-slider-text">
                    <!--quality----->
                    <div id="topFilm">
                        <span class="quality">Full HD</span>
                        @role('admin')
                        <a href="{{ route('netflix.edit', [$filmLeastPop]) }}" class="modifygear">⚙️</a>
                        <form method="POST" action="{{ route('films.destroy', [$filmLeastPop->id]) }}">
                            @csrf
                            @method('DELETE')
                            <button class="deleteX">❌</button>
                        </form>
                        @endrole
                    </div>
                    <a class="zoomfilm" href="{{ route('film.show', [$filmLeastPop]) }}"></a>

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
        @endif

        @role('enfant')
        <div class="post-container">
            @if (count($filmsLeastPopEnfant))
            @foreach($filmsLeastPopEnfant as $filmLeastPopEnfant)
            <div class="post-box">
                <!--img-->
                <div class="post-img">

                    <img alt="" src="{{ $filmLeastPopEnfant->pochette }}" />

                </div>
                <!--text---------->

                <div class="main-slider-text">
                    <!--quality----->
                    <div id="topFilm">
                        <span class="quality">Full HD</span>
                    </div>
                    <a class="zoomfilm" href="{{ route('film.show', [$filmLeastPopEnfant]) }}"></a>

                    <!--bottom-text-->
                    <div class="bottom-text">
                        <!--name----->
                        <div class="movie-name">
                            <span>{{$filmLeastPopEnfant->annee}}</span>
                            <a>{{$filmLeastPopEnfant->titre}}</a>
                        </div>
                        <!--Category-and-rating---->
                        <div class="category-rating">
                            <!--category-->
                            <div class="category">
                                <a>{{$filmLeastPopEnfant->type}}</a>
                            </div>
                            <!--rating--->
                            <div class="rating">
                                {{$filmLeastPopEnfant->cote}} <img alt="imbd" src="images/IMDb-icon.png" />
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
        @endrole

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