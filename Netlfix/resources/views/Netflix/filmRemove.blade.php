<!DOCTYPE html>
<!-- Coding By CodingNepal - www.codingnepalweb.com -->
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MHD - Remove</title>
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
        <h2>Retirer un acteur</h2>
        <!-- method="POST" action="{{ route('filmsRemove.destroy') }}"-->
        <form >
            @csrf
            @method('DELETE')
            <div>
                <select class="form-control" id="idFilm" name="film_id" onchange="ajaxChange(this.value)">
                    <option>Veuillez choisir un film...</option>
                    @foreach($films as $film)
                    <option value="{{ $film->id }}" {{$film->id == old('id') ? 'selected' : null }}>
                        {{ $film->titre }}
                    </option>
                    @endforeach
                </select>
            </div>
            <select class="form-control" id="idPerson" name="personne_id">
                <option>Veuillez choisir un acteur...</option>
                @foreach($acteurs as $acteur)
                <option value="{{ $acteur->id }}" {{$acteur->id == old('id') ? 'selected' : null }}>
                    {{ $acteur->prenom }} {{ $acteur->nom }}
                </option>
                @endforeach
            </select>
            <button id="ajaxSubmit">Remove</button>
            <div class="form-help">
                <a href="#">Need help?</a>
            </div>
        </form>
    </div>
</body>
<script>
document.getElementById("idFilm").onselect = function() {ajaxChange()};
function ajaxChange(str) {
    console.log(str);
    let select_item = document.getElementById('idPerson');
    let options = select_item.getElementsByTagName('option');

    // REMOVES ALL OPTIONS IN SELECT
    for (var i=options.length; i--;) {
        select_item.removeChild(options[i]);
    }

    

    // ADD OPTION IN SELECT
    var opt = document.createElement('option');
    opt.innerHTML = "Test";
    select_item.appendChild(opt);

    $(document).ready(function(){
    $('#ajaxSubmit').click(function(e){
        e.preventDefault();

            var varName = $("input[name='token']").val();
            var varName = $("input[name='token']").val();
            var varName = $("input[name='token']").val();
            var varName = $("input[name='token']").val();

            $.ajax({
                url: "ajouterPOST",
                type: 'POST',
                data:{
                    _token:_token,
                    nom:nom,
                    annee:annee,
                    description:description
                },
                success: function(data) {
                    if(data === "reussi") {
                        $('#ajoutSuccess').toast('show');
                    }
                },
                error: functio(xhr, ajaxOptions, thrownError) {
                    alert(xhr.status);
                    alert(thrownError);
                } 
            });
    });
});
}
</script>
</html>