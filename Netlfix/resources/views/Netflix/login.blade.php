<!DOCTYPE html>
<!-- Coding By CodingNepal - www.codingnepalweb.com -->
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MHD - Login</title>
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
        <h2>Login</h2>
        <form method="post" action="{{ route('login.login')}}">
            @csrf
            <div class="form-control">
            <label for="email"></label>
                <input type="email" id="email" name="email" value="{{ old('email') }}" placeholder="Email" required>
            </div>
            <div class="form-control">
                <label for="password"></label>
                <input type="password" id="password" name="password" value="{{ old('password') }}" placeholder="Password" required>
            </div>
            <button type="submit">Login</button>
            <div class="form-help">
                <a href="#">Need help?</a>
            </div>
        </form>
        <small>
            This page is protected by Google reCAPTCHA to ensure you're not a bot.
        </small>
    </div>
</body>

</html>