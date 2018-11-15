$(document).ready(function (){
    var a;
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
            events: [
                {
                  title: 'My Event',
                  start: '2018-11-07T13:00:00',
                  description: 'This is a cool event'
                }
                // more events here
            ],
            textColor:'white'

        }],
        timeFormat: 'hh:mmt',
       // hiddenDays: [ 2, 4 ],
        eventRender: function(event, element) {
             console.log(event.start, element[0]);
           // return $('<div style="background-color:gray; color:white;">' + event.title +' - '+ event.description+  '</div>');
        },
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

   /* limpiaContenedor = document.getElementById("tipoAsig");
    while (limpiaContenedor.hasChildNodes()) {   
        limpiaContenedor.removeChild(limpiaContenedor.firstChild);
    }*/
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
        var a = $('#tipoAsig option:selected').text();
        var newevent = [
            {
              title: a,
              start: $('#fecha').val(),
              description: 'This is a cool event',
              textColor:'white'
            }        // more events here
          ];
        
    
        insertEvents();
         // $('#calendario').fullCalendar('destroy');
        $('#calendario').fullCalendar('addEventSource',newevent);
        $('#calendario').fullCalendar('refetchEvents');
        //console.log(newevent);
    }) 
    
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