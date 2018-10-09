window.onload = function(){
    listAssignments();
};

function listAssignments(){
    var connect, form, response, flag= true,cont=1,dia;
	var dia = document.getElementById('dia');
    
    limpiaContenedor = document.getElementById("asignaciones");
    while (limpiaContenedor.hasChildNodes()) {   
        limpiaContenedor.removeChild(limpiaContenedor.firstChild);
    }

	    	connect = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
	    	connect.onreadystatechange = function() {
		        if(connect.readyState == 4 && connect.status == 200) {
					var data =JSON.parse(connect.response);
					
                    console.log(data);
                    for(var list of data){
                        if(flag){
                            dia=list['dia'];
                            document.getElementById("asignaciones").innerHTML +=(
                            '<div id="'+list['dia']+'">\
                                <header class="panel-heading">\
                                    <h3 class="panel-title" id ="dia">'+list['dia']+'</h3>\
                                </header>\
                            </div>');
                            flag=false;
                        }
                        console.log(list['dia']);
                        if(dia == list['dia']){
                            document.getElementById(list['dia']).innerHTML +=(
                                '<div class="panel-body">\
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
                                </div>')
                        }else{
                            dia=list['dia'];
                            document.getElementById("asignaciones").innerHTML +=(
                            '<hr><div id="'+list['dia']+'">\
                                <header class="panel-heading">\
                                    <h3 class="panel-title" id ="dia">'+list['dia']+'</h3>\
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
                            </div>');
                        }
                    }
			    }
			}

			connect.open('GET','?view=perfil&mode=asignaciones',true);
			connect.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
			connect.send();
}