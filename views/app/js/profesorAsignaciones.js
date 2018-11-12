$(document).ready(function (){
    loadEvents();

    $('#calendario').fullCalendar({
        header: { //center: 'agendaWeek'
                center: 'prev,title,next',
                left: '',
                right: 'agendaWeek,agendaDay'
        },
        weekends: false, // will hide Saturdays and Sundays
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
                $('#grupo').val($('select').val());
                $('#starts').val(date.format());
                $('#addNewEvent').modal('show');
                //alert('Coordinates: ' + jsEvent.pageX + ',' + jsEvent.pageY);

            }else{alert("debe seleccionar un grupo a quien hacer la asignacion");}
        }
     
      });

 
   
});
function insertEvents(){

}

function loadEvents(){
    $('#boton').on('click',function(){
        var a = $('#tipoAsig').val();
        var newevent = [
            {
              title: a,
              start: $('#starts').val(),
              description: 'This is a cool event',
              textColor:'white'
            }        // more events here
          ];
        
    
    
         // $('#calendario').fullCalendar('destroy');
        $('#calendario').fullCalendar('addEventSource',newevent);
        $('#calendario').fullCalendar('refetchEvents');
        console.log(newevent);
    }) 
    
}

function deleteEvents(){}

function hideDays(){

}

function tipoAsignaciones(){
    var connect, form, response, flag= true,cont=1,dia;
        

        

            connect = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
            connect.onreadystatechange = function() {
                if(connect.readyState == 4 && connect.status == 200) {
                    var data =JSON.parse(connect.response);
                    
                    console.log(data);
                    //for(var list of data){
                    //    document.getElementById('grupo').innerHTML +=('');
                   // }
                }
            }
            

            connect.open('GET','ajax.php?view=asignacionesProfesor&mode=listarTipoAsignacion',true);
            connect.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
            connect.send();
}