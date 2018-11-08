$(document).ready(function (){
    $('#calendario').fullCalendar({
        header: { //center: 'agendaWeek'
                center: 'prev,title,next',
                left: '',
                right: 'agendaWeek,agendaDay'
        },
        weekends: false, // will hide Saturdays and Sundays
        locale: 'es',
        defaultView: 'agendaWeek',
        minTime: '08:00:00',
        maxTime: '14:00:00',
        editable: true,
        events: [
            {
              title: 'My Event',
              start: '2018-11-07T13:00:00',
              description: 'This is a cool event'
            }
            // more events here
          ],
          eventRender: function(event, element) {
             console.log(event.start, element[0]);
           // return $('<div style="background-color:gray; color:white;">' + event.title +' - '+ event.description+  '</div>');
          },
     
      });

  //  $('#calendario').on('click', function(){
    //    $('#addNewEvent').modal('show');

  //  }) ; 
   
});
