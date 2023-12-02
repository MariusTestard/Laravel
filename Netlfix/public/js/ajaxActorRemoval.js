// CATCH THE EVENT THAT CALLS THE FUNCTION
document.getElementById("idFilm").onselect = function(e) {
    e.preventDefault();
    ajaxChange()
};

// FUNCTION CALLED ATTRIBUT "onchange" IN HTML
function ajaxChange(_str) {
    var str = _str;
    console.log(str);
    let select_item = document.getElementById('idPerson');
    let options = select_item.getElementsByTagName('option');

    // REMOVES ALL OPTIONS IN SELECT
    for (var i=options.length; i--;) {
        select_item.removeChild(options[i]);
    }

    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        /*
        type:
        url: '/home',
        data : { id : str },
        cache: false,
        dataType: 'json',
        */
        url: '{{url("/home")}}',
        data : {id:str},
        success : function(result){
            alert(result);
            for (const element of result) {
                var opt = document.createElement('option');
                opt.innerHTML = element;
                select_item.appendChild(opt);
            }
        },
        error: function (xhr, ajaxOptions, thrownError) {
            console.log(xhr.status);
            console.log(thrownError);
        }
    });
}


    