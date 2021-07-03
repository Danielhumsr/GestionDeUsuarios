$( document ).ready(function() {
    console.log( "ready!" );
});

function CrearUsuario(){

    let controlador = "/registrar";
    $.ajax({
        type: "POST",
        url: controlador,
        data: {'name': 'admin','password':'1234'},
        'dataType': 'json',
        success: function (respuesta) {

    console.log(respuesta);
    },
    error: function (a) {
        console.log("No se ha podido obtener la información");
        console.log(a);
    }
    });

}

