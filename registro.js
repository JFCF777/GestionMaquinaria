$(document).ready(function(){
    $("#btn_crear").click(function(){

        alert("hola");
        var usuario_id = $("#usuario").val();
        var usuario_nombre = $("#nombre").val();
        var usuario_email = $("#email").val();
        var usuario_pws = $("#contrasena").val();
        if(usuario_id == ""){
            alert("debe completar su identificacion");
            return false;
        }
        if(usuario_id.length != 9){
            alert("el id debe ser igual a 9 caracteres")
            return false;
        }
        if(usuario_nombre == ""){
            alert("debe completar su nombre");
            return false;
        }
        if(usuario_email == ""){
            alert("debe completar su email");
            return false;
        }
        if (!valida_correo(usuario_email)){
            alert("el formato de correo es incorrecto")
            return false;
        }
        if(usuario_pws == ""){
            alert("la contraseña no debe estar vacio");
            return false;
        }
        if(usuario_pws.length < 8){
            alert("la contraseña debe ser mayor a 8 caracteres");
            return false;
        }
        $.ajax({
            url: "registro.php",
            method: "POST",
            data: {id:usuario_id, nombre:usuario_nombre, email:usuario_email, pws:usuario_pws},
            success: function(dataresponse, statustext, response){
                $("#respuesta").html(dataresponse);
            },
            error: function(request, errorcode, errortext){}
        });
        return true;
    })
});

/*funciones de validacion extra*/ 

function valida_correo(email){
    expresion = /^[a-z]([\w\.]*)@[a-z]([\w\.]*)\.[a-z]{2,3}$/;
    if(expresion.test(email)){
        return true;
    }else{
        return false;
    }
}