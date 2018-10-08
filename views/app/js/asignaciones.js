window.onload = function(){
    listAssignments();
};

function listAssignments(){
    var connect, form, response, flag= true, fila,cont=1;
	
	/*limpiaTabla = document.getElementById("materias");
    while (limpiaTabla.hasChildNodes()) {   
        limpiaTabla.removeChild(limpiaTabla.firstChild);
    }*/

	    	connect = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
	    	connect.onreadystatechange = function() {
		        if(connect.readyState == 4 && connect.status == 200) {
					var data =JSON.parse(connect.response);
					
                    console.log(data);
                    for(var list of data){
                        document.getElementById("asignaciones").innerHTML=(
                            '<div>\
                                <header class="panel-heading">\
                                    <h3 class="panel-title">'+list['dia']+'</h3>\
                                </header>\
                                <div class="panel-body">\
                                    <ul class="list-group">\
                                        <li class="list-group-item">\
                                            <div class="media">\
                                                <div class="pr-20">\
                                                <a class="avatar" href="javascript:void(0)">\
                                                    <img class="img-fluid" src="./views/global/portraits/2.jpg"\
                                                    alt="...">\
                                                </a>\
                                                </div>\
                                                <div class="media-body">\
                                                <h5 class="mt-0 mb-5">'+list['nombre']+'\
                                                    <small>'+list['materia']+'</small>\
                                                </h5>\
                                                <small>'+list['tipo']+'</small>\
                                                <div class="profile-brief">'+list['descripcion']+'</div>\
                                                </div>\
                                            </div>\
                                        </li>\
                                    </ul>\
                                </div>\
                                <hr/>\
                            </div>')
                    }
			    }
			}

			connect.open('GET','?view=perfil&mode=asignaciones',true);
			connect.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
			connect.send();
}