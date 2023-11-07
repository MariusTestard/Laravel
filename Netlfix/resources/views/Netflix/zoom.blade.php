@extends('layouts.app')

@section('title', 'MHD - ZOOM Personne')

@section('logo')
<a href="#" class="logo">
    Acteurs<span>.hd</span>
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
        <img alt="" src="{{ $personne->photo }}">
    </div>
    <!--content================================-->
    <div class="banner-container">
        <!--title-container*******************----->
        <div class="title-container">
            <!--title-top===============-->
            
            <div class="title-top">
                <!--title----->
                <div class="movie-title">
                    <h1>{{$personne->prenom}} {{$personne->nom}}</h1>
                </div>
                <!--more-about-movie-->
                <div class="more-about-movie">

                    <span>{{ $personne->date }}</span>

                </div>
                <!--language--------->

            </div>
            <!--Title-botttom==========================-->
            <div class="title-bottom">
                <!--category------->
                <div class="category">
                    <strong>Rôle</strong><br />
                    <a>{{ $personne->rolePrincipal }}</a> <!-- ,<a href="#">Mistery</a>,<a href="#">Thriller</a> -->
                </div>
                <!--trailer-btn---->
                <a href="{{ $personne->wikiLien }}" class="watch-btn" target="_blank">Wikipedia</a>
            </div>
        </div>
        <!--play-btn******************************--->

        <!--Video/full-Movie***************************-->
        <div id="play" class="play">
            <!--close-btn--->
            <a href="javascript:void" class="close-movie">
                <i class="fas fa-times"></i>
            </a>
            <!--movie------->
            <div class="play-movie">
                <video id="m-video" controls>
                <iframe width="560" height="315" src="https://www.youtube.com/embed/w0AjRwH578g?si=LtehjDz5cTaSON-1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </video>
            </div>
        </div>
    </div>
</section>
<!--Banner-end------------->
<!--details=====================================-->

<!--==ScreenShots===============================-->
<section class="screenshots">
    <strong>Apparaît&nbsp;&nbsp;&nbsp;&nbsp;dans</strong>
    <!--screenshots-container----------->
    <div class="screen-s-container">

    @if (count($personne->filmsDedans))
    @foreach($personne->filmsDedans as $film)
    <img alt="" src="{{ $film->pochette }}">
    @endforeach
    @else
    Cette personne n'apparaît dans aucun film
    @endif
    </div>
   
</section>

<section class="screenshots">
    <strong>Films&nbsp;&nbsp;&nbsp;&nbsp;produits</strong>
    <!--screenshots-container----------->
    <div class="screen-s-container">

    @if (count($personne->filmsProduits))
    @foreach($personne->filmsProduits as $film)
    <img alt="" src="{{ $film->pochette }}">
    @endforeach
    @else
    Cette personne n'a produit aucun film
    @endif
    </div>
   
</section>

<section class="screenshots">
    <strong>Films&nbsp;&nbsp;&nbsp;&nbsp;réalisés</strong>
    <!--screenshots-container----------->
    <div class="screen-s-container">

    @if (count($personne->filmsRealises))
    @foreach($personne->filmsRealises as $film)
    <img alt="" src="{{ $film->pochette }}">
    @endforeach
    @else
    Cette personne n'a réalisé aucun film
    @endif
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
    /*--menu-btn-fixed-when-scroll============*/
    $(window).scroll(function() {
        if ($(document).scrollTop() > 20) {
            $('.navigation').addClass('fix-icon');
        } else {
            $('.navigation').removeClass('fix-icon');
        }
    });
    /*==popup-open==================================*/
    $(document).on('click', '.play-btn a', function() {
        $('.play').addClass('active-popup');
    });
    /*==popup-Close==================================*/
    $(document).on('click', '.close-movie', function() {
        $('.play').removeClass('active-popup');
    });

</script>
@endsection