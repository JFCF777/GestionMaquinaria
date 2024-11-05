$(document).ready(function(){
    $("#cancelar").click(function(){
        var cancelaciones_producto = $("#cancelaciones_producto").val();
        var id = $("#usuario").val();
        if(id == ""){
            alert("debe completar su identificacion");
            return false;
        }
        if(id.length != 9){
            alert("el id debe ser igual a 9 caracteres")
            return false;
        }
        if(cancelaciones_producto == ""){
            alert("debe seleccionar un producto");
            return false;
        }
        var datos = 0;
        $.ajax({
            url: "cancelaciones.php",
            method: "POST",
            data: {cancelaciones_producto:cancelaciones_producto, id:id},
            success: function(dataresponse, statustext, response){
                datos = dataresponse;
                alert(datos);
            },
            error: function(request, errorcode, errortext){}
        });
    });
    $("#devolver").click(function(){
        var calificacion = $("#calificacion").val();
        var comentario = $("#comentario").val();
        var cancelaciones_producto = $("#cancelaciones_producto").val();
        var id = $("#usuario").val();
        if(id == ""){
            alert("debe completar su identificacion");
            return false;
        }
        if(id.length != 9){
            alert("el id debe ser igual a 9 caracteres")
            return false;
        }
        if(cancelaciones_producto == ""){
            alert("debe seleccionar un producto");
            return false;
        }
        if(calificacion == ""){
            alert("Debe dejar su comentario y calificacion de experiencia");
            return false;
        }
        if(comentario == ""){
            alert("debe dar su comentario");
            return false;
        }
        var datos = 0;
        $.ajax({
            url: "devoluciones.php",
            method: "POST",
            data: {cancelaciones_producto:cancelaciones_producto, calificacion:calificacion, comentario:comentario, id:id},
            success: function(dataresponse, statustext, response){
                datos = dataresponse;
                alert(datos);
            },
            error: function(request, errorcode, errortext){}
        });
    });
    $("#devolver").click(function(){
        var cancelaciones_producto = $("#cancelaciones_producto").val();
        var id = $("#usuario").val();
        if(id == ""){
            alert("debe completar su identificacion");
            return false;
        }
        if(id.length != 9){
            alert("el id debe ser igual a 9 caracteres")
            return false;
        }
        if(cancelaciones_producto == ""){
            alert("debe seleccionar un producto");
            return false;
        }
        var datos = 0;
        $.ajax({
            url: "actualiza_estado_devolucion.php",
            method: "POST",
            data: {cancelaciones_producto:cancelaciones_producto, id:id},
            success: function(dataresponse, statustext, response){
                datos = dataresponse;
                alert(datos);
            },
            error: function(request, errorcode, errortext){}
        });
    });
});