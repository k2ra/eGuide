/*$( window ).on( "load", function() {
    
    console.log(prueba());
});*/

function prueba (){
 /*   fetch('?view=profesores&mode=list')
    .then(function(response){
        console.log(response);
    });*/
    
    var connect, form, response, result;

	    	//form = $( "#formEditCompany").serialize()+ "&id="+id+"&seccion=Empresa";
	    	connect = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
	    	connect.onreadystatechange = function() {
		        if(connect.readyState == 4 && connect.status == 200) {
                    var data =JSON.stringify(connect.response);
                    
                    for(var i=0 ; i <= data[0].length; i++){
                        console.log(data[i].nombre);
                    } 
			    }
			}

			connect.open('GET','?view=profesores&mode=list',true);
			connect.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
			connect.send();

    }