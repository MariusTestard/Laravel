<!DOCTYPE html>
<!-- Coding By CodingNepal - www.codingnepalweb.com -->
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MHD - Create</title>
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
        <a href="{{ route('netflix.index') }}" class="logo">
            Films<span>.hd</span>
        </a>
    </nav>

    <div class="form-wrapper">
        <h2>Créer un film</h2>
        <form method="post" action="{{ route('films.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="containerSideToSideInput">
                <div class="div50to50">
                    <div class="form-control">
                        <label for="titre"></label>
                        <input type="text" id="titre" name="titre" value="{{ old('titre') }}" placeholder="Titre" required>
                    </div>
                </div>
                <div class="div50to50">
                    <div class="form-control">
                        <label for="resume"></label>
                        <input type="text" id="resume" name="resume" value="{{ old('resume') }}" placeholder="Résumé">
                    </div>
                </div>
            </div>
            <div class="containerSideToSideInput">
                <div class="div50to50">
                    <div class="form-control">
                        <label for="duree"></label>
                        <input type="number" id="duree" name="duree" value="{{ old('duree') }}" placeholder="Durée" required min="0">
                    </div>
                </div>
                <div class="div50to50">
                    <div class="form-control">
                        <label for="annee"></label>
                        <input type="number" id="annee" name="annee" value="{{ old('annee') }}" placeholder="Année de sortie" required min="1800" max="2100">
                    </div>
                </div>
            </div>
            <div class="containerSideToSideInput">
                <div class="div50to50">
                    <div class="form-control">
                        <label for="lienFilm"></label>
                        <input type="url" id="lienFilm" name="lienFilm" value="{{ old('lienFilm') }}" placeholder="Lien du film" required>
                    </div>
                </div>
                <div class="div50to50">
                    <div class="form-control-file">
                        <label for="pochette">Sélectionner l'image</label>
                        <input type="file" id="pochette" name="pochette" value="{{ old('pochette') }}" placeholder="Pochette" required>
                    </div>
                </div>
            </div>
            <div class="containerSideToSideInput">
                <div class="div50to50">
                    <div class="form-control">
                        <label for="type"></label>
                        <input type="text" id="type" name="type" value="{{ old('type') }}" placeholder="Type" required>
                    </div>
                </div>
                <div class="div50to50">
                    <div class="form-control">
                        <label for="brand"></label>
                        <input type="text" id="brand" name="brand" value="{{ old('brand') }}" placeholder="Brand" required>
                    </div>
                </div>
            </div>
            <div class="containerSideToSideInput">
                <div class="div50to50">
                    <div class="form-control">
                        <label for="cote"></label>
                        <input type="text" id="cote" name="cote" value="{{ old('cote') }}" placeholder="Côte" required>
                    </div>
                </div>
                <div class="div50to50">
                    <div class="form-control">
                        <label for="rating"></label>
                        <input type="text" id="rating" name="rating" value="{{ old('rating') }}" placeholder="Rating" required>
                    </div>
                </div>
            </div>
            <div class="form-control-file">
                <label for="bannerLien">Sélectionner la bannière</label>
                <input type="file" id="bannerLien" name="bannerLien" value="{{ old('bannerLien') }}" placeholder="Lien de la bannière" required>
            </div>
            <div class="containerSideToSideInput">
                <div class="div50to50">
                    <select class="" id="producteur_id" name="producteur_id">
                        <option>Producteur..</option>
                        @foreach($producteurs as $producteur)
                        <option value="{{$producteur->id}}" {{$producteur->id == old('producteur_id') ? 'selected' : null }}>
                            {{ $producteur->prenom }} {{ $producteur->nom }}
                        </option>
                        @endforeach
                    </select>
                </div>
                <div class="div50to50">
                    <select class="" id="realisateur_id" name="realisateur_id">
                        <option>Réalisateur..</option>
                        @foreach($realisateurs as $realisateur)
                        <option value="{{$realisateur->id }}" {{$producteur->id == old('realisateur_id') ? 'selected' : null }}>
                            {{ $realisateur->prenom }} {{ $realisateur->nom }}
                        </option>
                        @endforeach
                    </select>
                </div>
            </div>
            <button type="submit">Create</button>
            <div class="form-help">
                <a href="#">Need help?</a>
            </div>
        </form>
    </div>
</body>

</html>