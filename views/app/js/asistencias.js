window.onload = function(){
    selectGroup();
   // saveAssistanceList();
   console.log($('#listaEstudiante option:selected').val());
};


function selectGroup(){

    var list = document.getElementById('listaEstudiante');
    
    
    list.addEventListener("change",
        function listarEstudiante(){
            var connect, form, response, flag= true,cont=1,dia;
            
            limpiaTabla = document.getElementById("lista");
            while (limpiaTabla.hasChildNodes()) {   
                limpiaTabla.removeChild(limpiaTabla.firstChild);
            }
            
            console.log(this.value); 
    
            if(this.value != "0"){
    
                connect = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
                connect.onreadystatechange = function() {
                    if(connect.readyState == 4 && connect.status == 200) {
                        var data =JSON.parse(connect.response);
                        
                        console.log(data);
                        for(var list of data){
                            document.getElementById('lista').innerHTML +=('<tr id = '+list['id_estudiante']+'><td>'+list['nombre']+'</td>\
                                        <td><select id="asistencia">\
                                        <option value="1" >Asistio</option>\
                                        <option value="0">Ausente</option>\
                                        </select></td></tr>');
                        }
                        //document.getElementById('contenedor').innerHTML =('<input type="button" id="guardar" value="guardar"/>');
                        document.getElementById('contenedor').innerHTML =('<button id="guardar" onclick="saveAssistanceList();">guardar</button>');
                    }
                }
                
    
                connect.open('GET','ajax.php?view=calificaciones&mode=listarEstudiantesXGrupo&cod='+this.value,true);
                connect.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
                connect.send();
    
            }
        }
    );
}

function saveAssistanceList(){

        var table = $('#tblestudiantes tr:has(td)').map(function(){
            var $td =  $('td', this);
           // console.log($td.eq(1));
            return{
                id: $td.parent().attr('id'),
                alumno: $td.eq(0).text(),
                asistencia: $td.eq(1).find("select").find(":selected").val()
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