window.onload = function(){
    addScore();
}


var list = document.getElementById('listaEstudiante');


list.addEventListener("change",
    function listarEstudiante(){
       
        
        limpiaTabla = document.getElementById("lista");
        while (limpiaTabla.hasChildNodes()) {   
            limpiaTabla.removeChild(limpiaTabla.firstChild);
        }

        
        if(this.value != "0"){

            fetch('ajax.php?view=calificaciones&mode=listarEstudiantesXGrupo&cod='+this.value)
             .then(function(response) {
                 return response.text();
             })
            .then(function(texto){
                var data = JSON.parse(texto);
                console.log(data);
                for(var list of data){
                    document.getElementById('lista').innerHTML +=(`<tr id ="${list['id_estudiante']}">\
                                                                        <td>${list['grupo']}</td>\
                                                                        <td>${list['nombre']}</td>\
                                                                        <td></td>\
                                                                        <td>\
                                                                            <a href ="javascript:despliegaModal('+list['id_estudiante']+')"><i class="icon md-edit"></a></i>\
                                                                        </td>\
                                                                    </tr>`);
                }
            });

        }
    }
);


function despliegaModal (fila){
    var  id = fila;
    console.log(id);
    $('#estudiante').val(id);
   $('#NuevaNota').modal('show');
   
}

function addScore(){
   const boton = document.getElementById('guardaNota');
    var nota = document.getElementById('calificacion');
    var materia = document.getElementById('materia');
    var descripcion = document.getElementById('descripcion');
    var id = document.getElementById('estudiante');

    
    boton.addEventListener('click', function (){  
       $('#materia').val($('#listaEstudiante option:selected').attr("mat"));
        
        
        fetch('ajax.php?view=calificaciones&mode=add',{
           method: "POST",
           headers: {
            'Content-Type': 'application/x-www-form-urlencoded'
            },
           body: "id="+id.value +"&materia="+materia.value+"&desc="+descripcion.value+"&score="+nota.value

        })
        .then(function(response){
            return response.text();
        })
        .then(function(texto){
            console.log(texto);
        });
    });
}