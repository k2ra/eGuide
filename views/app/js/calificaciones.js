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
                
                for(var list of data){
                    document.getElementById('lista').innerHTML +=('<tr>\
                                                                        <td>'+list['grupo']+'</td>\
                                                                        <td>'+list['nombre']+'</td>\
                                                                        <td></td>\
                                                                        <td>\
                                                                            <a href ="javascript:despliegaModal()"><i class="icon md-edit"></a></i>\
                                                                        </td>\
                                                                    </tr>');
                }
            });

        }
    }
);


function despliegaModal (){
   $('#NuevaNota').modal('show');
}