<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
    <link rel="shortcut icon" href="{{ asset('images/fav-icon.png') }}" />
    <!--==Import-poppins-font====================-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <!--==Import-Monoton-Font====================-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Monoton&display=swap" rel="stylesheet">
    <!--==Using-Font-Awesome======================-->
    <script src="https://kit.fontawesome.com/c8e4d183c2.js" crossorigin="anonymous"></script>
    <!--==CSS-Swiper==============================-->
    <link rel="stylesheet" href="css/swiper-bundle.min.css" />
</head>

<body>
    <!-- HEADER -->


    <nav class="navigation">
        <!--menu-btn--------------->
        <input type="checkbox" class="menu-btn" id="menu-btn">
        <label for="menu-btn" class="menu-icon">
            <span class="nav-icon"></span>
        </label>
        <!--logo------------------->
        @yield('logo')
        <!--menu------------------->
        <ul class="menu">
            <li><a href="{{ route('netflix.index') }}">Home</a></li>
            <li><a href="/">Films</a></li>
            <li><a href="/personne">Personnes</a></li>
            <!--<li><a href="#">Contact</a></li>-->
        </ul>
        <!--Search-box------------->
        @yield('searchBar')
        </form>
        <form method="POST" action="{{ route('logout')}} ">
            @csrf
            <!--btn-->
            <button type="submit" class="search-box" title="Logout">
                <h1>&#128721;</h1>
            </button>
        </form>
    </nav>


    @yield('contenu')

    <!-- FOOTER -->
    <footer>
        <!--footer-logo--->
        <a href="#" class="logo">
            Home<span>hd</span>
        </a>
        <!--copyright----->
        <span class="copyright">
            Copyright 2021 - GoingToInternet
        </span>
    </footer>
</body>

</html>