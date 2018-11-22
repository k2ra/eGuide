window.onload = function(){
    selectGroup();
    saveAssistanceList();
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
                                        <option value="1">Asistio</option>\
                                        <option value="0">Ausente</option>\
                                        </select></td></tr>');
                        }
                        document.getElementById('contenedor').innerHTML =('<input type="button" id="guardar" value="guardar"/>');
                       
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

    $('#guardar').on('click', function(){

        var table = $('table tr:has(td)').map(function(){
            var $td =  $('td', this);
            return{
                alumno: $td.eq(0).text(),
                asistencia: $td.eq(1).text($(this).val())
            }
        }).get();
        console.log("hola");
    });
}