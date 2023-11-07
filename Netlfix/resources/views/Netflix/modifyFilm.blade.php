<!DOCTYPE html>
<!-- Coding By CodingNepal - www.codingnepalweb.com -->
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MHD - Modify</title>
    <link rel="shortcut icon" href="{{ asset('images/fav-icon.png') }}" />
    <link rel="stylesheet" href="{{ asset('css/create.css') }}">
    <!--==Import-poppins-font====================-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <!--==Import-Monoton-Font====================-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Monoton&display=swap" rel="stylesheet">
</head>

<body>
    <nav>
        <a href="#" class="logo">
            Films<span>.hd</span>
        </a>
    </nav>

    <div class="form-wrapper">
        <h2>Films</h2>
        <form method="post" action="{{ route('netflix.update', $film) }}">
            @csrf
            @method('Patch')
            <div class="form-control">
                <label for="titre"></label>
                <input type="text" id="titre" name="titre" value="{{ $film->titre }}" placeholder="Titre" required>
            </div>
            <div class="form-control">
                <label for="resume"></label>
                <input type="text" id="resume" name="resume" value="{{ $film->resume }}" placeholder="Résumé">
            </div>
            <div class="form-control">
                <label for="duree"></label>
                <input type="number" id="duree" name="duree" value="{{ $film->duree }}" placeholder="Durée" required min="0">
            </div>
            <div class="form-control">
                <label for="annee"></label>
                <input type="number" id="annee" name="annee" value="{{ $film->annee }}" placeholder="Année de sortie" required min="1800" max="2100">
            </div>
            <div class="form-control">
                <label for="lienFilm"></label>
                <input type="url" id="lienFilm" name="lienFilm" value="{{ $film->lienFilm }}" placeholder="Lien du film" required>
            </div>
            <div class="form-control">
                <label for="pochette"></label>
                <input type="url" id="pochette" name="pochette" value="{{ $film->pochette }}" placeholder="Pochette" required>
            </div>
            <div class="form-control">
                <label for="type"></label>
                <input type="text" id="type" name="type" value="{{ $film->type }}" placeholder="Type" required>
            </div>
            <div class="form-control">
                <label for="brand"></label>
                <input type="text" id="brand" name="brand" value="{{ $film->brand }}" placeholder="Brand" required>
            </div>
            <div class="form-control">
                <label for="cote"></label>
                <input type="text" id="cote" name="cote" value="{{ $film->cote }}" placeholder="Côte" required>
            </div>
            <div class="form-control">
                <label for="rating"></label>
                <input type="text" id="rating" name="rating" value="{{ $film->rating }}" placeholder="Rating" required>
            </div>
            <div class="form-control">
                <label for="bannerLien"></label>
                <input type="text" id="bannerLien" name="bannerLien" value="{{ $film->bannerLien }}" placeholder="Lien de la bannière" required>
            </div>
            <button type="submit">Modify</button>
            <div class="form-help">
                <a href="#">Need help?</a>
            </div>
        </form>
    </div>
</body>

</html>