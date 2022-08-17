function mostrar(){
 		document.getElementById("dert").style.display = "block";
 	}


var g = window.matchMedia("(max-width: 830px)")
var y = window.matchMedia("(min-width: 830px)")
 	function myFunction() {
    let x = document.getElementById("myDIV");
    if(y.matches){
    	if (x.style.width === "60px") {
        x.style.width = "250px";
    } else {
        x.style.width = "60px";
    }
    }
     
    if(g.matches){
    	if (x.style.display === "block") {
        x.style.display = "none";
    } else {
        x.style.display = "block";
    }
    }


}

//------------------------USUARIOS----------------------------------------//
//borrar usuarios

$(".TB").on("click",".BorrarU" , function (){
    var Uid = $(this).attr("Uid");

    window.location= "index.php?url=usuarios&Uid="+Uid;
})
//Llamar datos para editar

$(".TB").on("click",".EditarU", function(){
    var Uid = $(this).attr("Uid");
    var datos = new FormData();

    datos.append("Uid",Uid);

    $.ajax({
        url :"Ajax/usuariosA.php",
        method:"POST",
        data: datos,
        cache:false,
        contentType: false,
        processData: false,
        dataType: "json",
        success: function(respuesta){


            $("#usuarioE").val(respuesta["usuario"]);

            $("#Uid").val(respuesta["id_usuario"]);

            $("#claveE").val(respuesta["clave"]);

            $("#rolE").html(respuesta["rol"]);
            $("#rolE").val(respuesta["rol"]);

        }
    });
})

//------------------------PERSONAL----------------------------------------//

//Consumo de API
$("#btn-buscar").click(function(){
    let dni = $("#dni-buscar").val();

    $.ajax({
        url: 'controllers/reniecC.php',
        type: 'post',
        data: 'dni='+dni,
        dataType: 'json',
        success: function(r){
            if(r.success){
                $("#nombresN").val(r.result.nombres);
                $("#paternoN").val(r.result.paterno);
                $("#maternoN").val(r.result.materno);
                $("#dniN").val(dni);


            }else{
                alert(r.message);
            }
        }
    })
});