function listarHorario(){
    var connect, form, response, result;

	    	connect = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
	    	connect.onreadystatechange = function() {
		        if(connect.readyState == 4 && connect.status == 200) {
                    //var data =JSON.parse(connect.response);
                   
                     console.log(connect.response);
			    }
			}

			connect.open('GET','?view=horario&mode=list',true);
			connect.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
			connect.send();
}