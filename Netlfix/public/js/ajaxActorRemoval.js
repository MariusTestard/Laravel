// CATCH THE EVENT THAT CALLS THE FUNCTION
document.getElementById("idFilm").onselect = function(e) {
    e.preventDefault();
    ajaxChange()
};

// FUNCTION CALLED ATTRIBUT "onchange" IN HTML
function ajaxChange(str) {
    console.log(str);
    let select_item = document.getElementById('idPerson');
    let options = select_item.getElementsByTagName('option');

    // REMOVES ALL OPTIONS IN SELECT
    for (var i=options.length; i--;) {
        select_item.removeChild(options[i]);
    }

    $.ajax({
            url         :'getBTB',
            type       :'GET',
            dataType   :'JSON',
            success    :'success',
            data       :{'term':str},
            success    :function(result){
                var data = result;
                var opt = document.createElement('option');
                opt.innerHTML = data.id;
                select_item.appendChild(opt);
            }
        });
    


    /*
    // ADD OPTION IN SELECT
    var opt = document.createElement('option');
    opt.innerHTML = data.id;
    select_item.appendChild(opt);
    */
}


    