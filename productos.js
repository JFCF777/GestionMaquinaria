$(document).ready(function(){
    $("#procesar_reserva").click(function(){
    })
    $("#reserva_1").click(function(){
        alert("Selecciono tractor , puede realizar otra reserva o procesar");
        var tractor = 1;
        var id = $("#usuario").val();
        alert(tractor+" "+id);
        if(id == ""){
            alert("debe completar su identificacion");
            return false;
        }
        if(id.length != 9){
            alert("el id debe ser igual a 9 caracteres")
            return false;
        }
        var datos = 0;
        $.ajax({
            url: "tractor.php",
            method: "POST",
            data: {tractor:tractor, id:id},
            success: function(dataresponse, statustext, response){
                datos = dataresponse;
                alert(datos);
            },
            error: function(request, errorcode, errortext){}
        });
    })
    $("#reserva_2").click(function(){
        alert("Selecciono vagoneta , puede realizar otra reserva o procesar");
        var vagoneta = 2;
        var id = $("#usuario").val();
        if(id == ""){
            alert("debe completar su identificacion");
            return false;
        }
        if(id.length != 9){
            alert("el id debe ser igual a 9 caracteres")
            return false;
        }
        $.ajax({
            url: "vagoneta.php",
            method: "POST",
            data: {vagoneta:vagoneta, id:id},
            success: function(dataresponse, statustext, response){
                datos = dataresponse;
                alert(datos);
            },
            error: function(request, errorcode, errortext){}
        });
    })
    $("#reserva_3").click(function(){
        alert("Selecciono draga , puede realizar otra reserva o procesar");
        var draga = 3;
        var id = $("#usuario").val();
        if(id == ""){
            alert("debe completar su identificacion");
            return false;
        }
        if(id.length != 9){
            alert("el id debe ser igual a 9 caracteres")
            return false;
        }
        $.ajax({
            url: "draga.php",
            method: "POST",
            data: {draga:draga, id:id},
            success: function(dataresponse, statustext, response){
                datos = dataresponse;
                alert(datos);
            },
            error: function(request, errorcode, errortext){}
        });
    })
    $("#reserva_4").click(function(){
        alert("Selecciono compactadora , puede realizar otra reserva o procesar");
        var compactadora = 4;
        var id = $("#usuario").val();
        if(id == ""){
            alert("debe completar su identificacion");
            return false;
        }
        if(id.length != 9){
            alert("el id debe ser igual a 9 caracteres")
            return false;
        }
        $.ajax({
            url: "compactadora.php",
            method: "POST",
            data: {compactadora:compactadora, id:id},
            success: function(dataresponse, statustext, response){
                datos = dataresponse;
                alert(datos);
            },
            error: function(request, errorcode, errortext){}
        });
    })
});