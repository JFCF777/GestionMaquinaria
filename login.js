$(document).ready(function(){
    $("#login").click(function(e){
        e.preventDefault();
        alert("holoa"); 
        alert("Debe seleccionar su tipo de usuario");
        var usuario = $("#usuario_login").val();
        var contrasena = $("#contrasena_login").val();
        var tip_usuario = $("#tip_usuario").val();
        alert(usuario+tip_usuario+contrasena);
        if(usuario == ""){
            alert("debe completar su identificacion");
            return false;
        }
        if(usuario.length != 9){
            alert("el id debe ser igual a 9 caracteres")
            return false;
        }
        if(contrasena == ""){
            alert("la contraseña no debe estar vacio");
            return false;
        }
        if(contrasena.length < 8){
            alert("la contraseña debe ser mayor a 8 caracteres");
            return false;
        }
        if(tip_usuario == ""){
            alert("debe completar su nombre");
            return false;
        }
        var datos = 0;
        $.ajax({
            url: "login.php",
            method: "POST",
            data: {usuario:usuario, contrasena:contrasena, tip_usuario:tip_usuario},
            success: function(dataresponse, statustext, response){
                datos = dataresponse;
                alert(datos);
                if(datos == 2){
                    window.location.href = "index2.html";
                }else if(datos == 1){
                    window.location.href = "index.html";
                }
            },
            error: function(request, errorcode, errortext){}
        });
        return true;
    })
})