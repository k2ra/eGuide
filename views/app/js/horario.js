function listarHorario(){
	var connect, form, response, flag= true, fila,cont=1;
	
	limpiaTabla = document.getElementById("materias");
    while (limpiaTabla.hasChildNodes()) {   
        limpiaTabla.removeChild(limpiaTabla.firstChild);
    }

	    	connect = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
	    	connect.onreadystatechange = function() {
		        if(connect.readyState == 4 && connect.status == 200) {
					var data =JSON.parse(connect.response);
					var tbody = document.getElementById('materias');
					
					for(var list of data){
						if(flag){
							fila = list['HORAINICIO'];
							tbody.innerHTML +=('<tr id='+cont+'><td>'+list['HORAINICIO']+' - '+list['HORAFINAL']+'</td></tr>');
							flag = false;
						}
						if( fila == list['HORAINICIO'] ){
							document.getElementById(cont).innerHTML +=('<td>'+list['DESCRIPCION']+'</td>');
						}else{
							cont +=1;
							console.log(fila+ "  "+list['HORAINICIO']);
							fila = list['HORAINICIO'];
							tbody.innerHTML +=('<tr id='+cont+'><td>'+list['HORAINICIO']+' - '+list['HORAFINAL']+'</td><td>'+list['DESCRIPCION']+'</td></tr>');
							
						}
						//tbody.innerHTML +=('<tr id='+1+'></tr>');
						console.log(data);
					}
			    }
			}

			connect.open('GET','?view=horario&mode=list',true);
			connect.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
			connect.send();
}