$(document).ready(function (){
    var a;
    var m = $('#listagrupo option:selected').attr("mat");
    getEvents();
    loadEvents();

    $('#listagrupo').on('change',function(){
         a =this.value;
        hideDays(a);
              
    });

    $('#calendario').fullCalendar({
        header: { //center: 'agendaWeek'
                center: 'prev,title,next',
                left: '',
                right: 'basicWeek,agendaDay'
        },
        //hiddenDays:hideDays(a),
       // weekends: false, // will hide Saturdays and Sundays
        locale: 'es',
        defaultView: 'basicWeek',
        minTime: '08:00:00',
        maxTime: '14:00:00',
        //editable: true,
        eventSources:[{
            textColor:'white'

        }],
        timeFormat: 'hh:mmt',
       
        dayClick: function(date, jsEvent,view){
           // alert(date.format());
           if($('select').val()!=0){
                tipoAsignaciones();
                $('#grupo').val($('select').val());
                //console.log('materia '+$('#listagrupo option:selected').attr("mat"));
                $('#materia').val($('#listagrupo option:selected').attr("mat"));
                $('#fecha').val(date.format());
                $('#addNewEvent').modal('show');
                //alert('Coordinates: ' + jsEvent.pageX + ',' + jsEvent.pageY);

            }else{alert("debe seleccionar un grupo a quien hacer la asignacion");}
        }
     
      });

 
   
});


function insertEvents(){
    var connect,form;
    console.log($('form').serialize());

  
    form = $( "form").serialize();
        connect = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
        connect.onreadystatechange = function() {
            if(connect.readyState == 4 && connect.status == 200) {
                var data =connect.response;
                
                console.log(data);
              
            }
        }
        

        connect.open('POST','?view=asignacionesProfesor&mode=add',true);
        connect.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
        connect.send(form);

}

function loadEvents(){
    $('#boton').on('click',function(){
    
        insertEvents();
        $('#calendario').fullCalendar( 'removeEvents', function(e){
            return true;
            });
        getEvents();
        
    }) 
    
}

function getEvents(){
    var connect,form;
  
    var events="";
           
            connect = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
            connect.onreadystatechange = function() {
                if(connect.readyState == 4 && connect.status == 200) {
                    var data =JSON.parse(connect.response);
                    
                    console.log(connect.response);
                    if(data == false){
                        $('#calendario').fullCalendar( 'removeEvents', function(e){
                            return true;
                            });
                    }else{
                        for(var list of data){
                            events = [
                               {
                                 title: list['tipo_asignacion'],
                                 start: list['fecha_asignacion'],
                                 description: list['descripcion']
                               }
                               // more events here
                           ];
                           console.log(events);
                            $('#calendario').fullCalendar('addEventSource',events);
                        }

                    }
                    
                    $('#calendario').fullCalendar('refetchEvents');
                   
                }
            }
            

            connect.open('GET','ajax.php?view=asignacionesProfesor&mode=getAssignment',true);
            connect.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
            connect.send();
}

function deleteEvents(){}

function hideDays(a){
    var connect;
    var days=[0,1,2,3,4,5,6,7];
    var horario=[];
    var hideDay=[];    
            connect = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
            connect.onreadystatechange = function() {
                if(connect.readyState == 4 && connect.status == 200) {
                    var data =JSON.parse(connect.response);
                    
                    console.log(connect.response);
                    if(data!=false){
                        for(var list of data){
                            //document.getElementById('tipoAsig').innerHTML +=('<option value='+list['id_tipo_asignacion']+'>'+list['descripcion']+'</option>');
                             horario.push(parseInt(list['horario'].substring(0,1)));
                            
                        }
                        
                        for (var i=0;i<days.length; i++){
                          //  console.log(horario.includes(days[i]));
                            if(!horario.includes(days[i])){
                                hideDay.push(days[i]);
                            }
                        }

                    }
                    console.log(hideDay);
                    $('#calendario').fullCalendar('option',{
            
                        hiddenDays: hideDay,
                        
                     });
                }
                
            }
            
            
            connect.open('GET','ajax.php?view=asignacionesProfesor&mode=hideDays&grupo='+a,true);
            connect.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
            connect.send();
            
            
}

function tipoAsignaciones(){
    var connect;

        limpiaContenedor = document.getElementById("tipoAsig");
        while (limpiaContenedor.hasChildNodes()) {   
            limpiaContenedor.removeChild(limpiaContenedor.firstChild);
        }
            connect = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
            connect.onreadystatechange = function() {
                if(connect.readyState == 4 && connect.status == 200) {
                    var data =JSON.parse(connect.response);
                    
                    //console.log(connect.response);
                    for(var list of data){
                        document.getElementById('tipoAsig').innerHTML +=('<option value='+list['id_tipo_asignacion']+'>'+list['descripcion']+'</option>');
                    }
                }
            }
            

            connect.open('GET','ajax.php?view=asignacionesProfesor&mode=listarTipoAsignacion',true);
            connect.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
            connect.send();
}