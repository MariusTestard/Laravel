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
        <a href="{{ route('netflix.usager') }}" class="logo">
            Films<span>.hd</span>
        </a>
    </nav>

    <div class="form-wrapper">
        <h2>Créer un usager</h2>
        <form method="post" action="{{ route('usagers.store')}}" enctype="multipart/form-data">
            @csrf
            <div class="form-control">
            <label for="nomUsager"></label>
                <input type="text" id="nomUsager" name="nomUsager" value="{{ old('nomUsager') }}" placeholder="Username" required>
            </div>
            <div class="form-control">
                <label for="nom"></label>
                <input type="text" id="nom" name="nom" value="{{ old('nom') }}" placeholder="Nom" required>
            </div>
            <div class="form-control">
                <input type="text" id="prenom" name="prenom" value="{{ old('prenom') }}" placeholder="Prénom" required>
            </div>
            <div class="form-control">
                <label for="email"></label>
                <input type="email" id="email" name="email" value="{{ old('email') }}" placeholder="Lien Wikipedia" required>
            </div>
            <div class="form-control">
                <label for="password"></label>
                <input type="password" id="password" name="password" value="{{ old('password') }}" placeholder="Mot de passe" required>
            </div>
            <div class="form-control">
                <label for="role"></label>
                <input type="text" id="date" name="role" value="{{ old('role') }}" placeholder="Rôle" required>
            </div>
            <button type="submit">Create</button>
            <div class="form-help">
                <a href="#">Need help?</a>
            </div>
        </form>
    </div>
</body>

</html>