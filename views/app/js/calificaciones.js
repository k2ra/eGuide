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
                        document.getElementById('lista').innerHTML +=('<tr><td>'+list['grupo']+'</td><td>'+list['nombre']+'</td><td></td><td></td><td></td><td></td></tr>');
                    }
                }
            }
            

            connect.open('GET','ajax.php?view=calificaciones&mode=listarEstudiantesXGrupo&cod='+this.value,true);
            connect.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
            connect.send();

        }
    }
);