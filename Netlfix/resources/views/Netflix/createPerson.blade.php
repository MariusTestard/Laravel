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
        <a href="{{ route('netflix.personne') }}" class="logo">
            Personnes<span>.hd</span>
        </a>
    </nav>

    <div class="form-wrapper">
        <h2>Créer une personne</h2>
        <form method="post" action="{{ route('personnes.store')}}" enctype="multipart/form-data">
            @csrf
            <div class="form-control">
            <label for="prenomActeur"></label>
                <input type="text" id="prenomActeur" name="prenom" value="{{ old('prenom') }}" placeholder="Prénom" required>
            </div>
            <div class="form-control">
                <label for="nomActeur"></label>
                <input type="text" id="nomActeur" name="nom" value="{{ old('nom') }}" placeholder="Nom" required>
            </div>
            <div class="form-control-file">
                <input type="file" id="photo" name="photo" value="{{ old('photo') }}" placeholder="Photo" required>
            </div>
            <div class="form-control">
                <label for="wikiLien"></label>
                <input type="url" id="wikiLien" name="wikiLien" value="{{ old('phwikiLienoto') }}" placeholder="Lien Wikipedia" required>
            </div>
            <div class="form-control">
                <label for="rolePrincipal"></label>
                <select name="rolePrincipal" id="rolePrincipal">
                    <option value="Acteur">Acteur</option>
                    <option value="Producteur">Producteur</option>
                    <option value="Réalisateur">Réalisateur</option>
                </select>
                
            </div>
            <div class="form-control">
                <label for="date"></label>
                <input type="date" id="date" name="date" value="{{ old('date') }}" placeholder="Date" required>
            </div>
            <button type="submit">Create</button>
            <div class="form-help">
                <a href="#">Need help?</a>
            </div>
        </form>
    </div>
</body>

</html>