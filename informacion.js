$(document).ready(function(){
    $("#procesar_info").click(function(){
        var id = $("#usuario").val();
        var info = $("#informacion").val();
        if(id == ""){
            alert("debe completar su identificacion");
            return false;
        }
        if(id.length != 9){
            alert("el id debe ser igual a 9 caracteres")
            return false;
        }
        if(info == ""){
            alert("debe completar su solicitud de informacion");
            return false;
        }

        $.ajax({
            url: "informacion.php",
            method: "POST",
            data: {id:id, info:info},
            success: function(dataresponse, statustext, response){
                var datos = 0;
                datos = dataresponse;
                alert(datos);
            },
            error: function(request, errorcode, errortext){}
        });
        return true;
    })
})