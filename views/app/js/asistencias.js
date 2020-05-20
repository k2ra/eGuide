window.onload = function(){
    selectGroup();
   // saveAssistanceList();
   console.log($('#listaEstudiante option:selected').val());
};


function selectGroup(){

    let list = document.getElementById('listaEstudiante');
    
    
    list.addEventListener("change",
        function listarEstudiante(){
            var connect, form, response, flag= true,cont=1,dia;
            
            limpiaTabla = document.getElementById("lista");
            while (limpiaTabla.hasChildNodes()) {   
                limpiaTabla.removeChild(limpiaTabla.firstChild);
            }
            
            console.log(this.value); 
    
            if(this.value != "0"){

                fetch('ajax.php?view=calificaciones&mode=listarEstudiantesXGrupo&cod='+this.value)
                .then(function(response){
                    return response.text()
                })
                .catch(function(err){console.error('Error:', err)})
                .then(function(texto){
                    let data = JSON.parse(texto)

                    for(var list of data){
                        document.getElementById('lista').innerHTML +=(`<tr id = ${list['id_estudiante']}><td>${list['nombre']}</td>
                                    <td>
                                        <div class="checkbox-custom checkbox-primary">
                                            <input type="checkbox"  checked/>
                                            <label></label>
                                        </div>
                                    </td></tr>`);
                    }
                    
                    document.getElementById('contenedor').innerHTML =('<button id="guardar" class="btn btn-primary" onclick="saveAssistanceList();">guardar</button>');
                })
    
               
    
            }
        }
    );
}

function saveAssistanceList(){

        let table = $('#tblestudiantes tr:has(td)').map(function(){
            let $td =  $('td', this);
           // console.log($td.eq(1));
            return{
                id: $td.parent().attr('id'),
                alumno: $td.eq(0).text(),
                asistencia: $td.eq(1).find("input")[0].checked ? 1:0
            }
        }).get();
       // var table1 =$('#tblestudiantes').dataTables();
        
       fetch('ajax.php?view=asistencias&mode=add',{
           method: "POST",
           headers: {
            'Content-Type': 'application/x-www-form-urlencoded'
            },
           body: "listAsistencia="+JSON.stringify(table) 

       })
        .then(function(response) {
            return response.text();
        })
        .then(function(texto){
                console.log(texto);
        });

    console.log(table);
}