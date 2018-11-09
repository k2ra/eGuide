$(document).ready(function (){
    addEvents();

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
        editable: true,
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
            $('#starts').val(date.format());
            $('#addNewEvent').modal('show');
            //alert('Coordinates: ' + jsEvent.pageX + ',' + jsEvent.pageY);
          }
     
      });

  //  $('#calendario').on('click', function(){
    //    $('#addNewEvent').modal('show');

  //  }) ; 
   
});

function addEvents(){
    $('#boton').on('click',function(){
        var a = $('#ename').val();
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