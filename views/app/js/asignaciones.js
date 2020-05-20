window.onload = function(){
    listAssignments();
    //alert(moment(moment().subtract(1,'days')+ moment().isoWeekday()))
    //alert(moment().subtract(moment().isoWeekday(),'days'))
};

function listAssignments(){
    var connect, form, response, flag= true,cont=1,dia;
    var firstDayWeek = moment().subtract(moment().isoWeekday(),'days').format('MM-DD-YYYY')
    const lastDayWeek = moment().subtract(moment().isoWeekday(),'days').add(7,'days').format('MM-DD-YYYY')
	var dia = document.getElementById('dia');
    let asigpill = document.getElementById('asigpill')
    console.log(firstDayWeek, lastDayWeek)
    limpiaContenedor = document.getElementById("asignaciones");
    while (limpiaContenedor.hasChildNodes()) {   
        limpiaContenedor.removeChild(limpiaContenedor.firstChild);
    }

	    	connect = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
	    	connect.onreadystatechange = function() {
		        if(connect.readyState == 4 && connect.status == 200) {
					var data =JSON.parse(connect.response);
					
                    console.log(data);

                    asigpill.innerText = data.length>0 ? data.length : 0
                    if (data){
                        for(var list of data){
                            if(flag){
                                dia=list['dia'];
                                document.getElementById("asignaciones").innerHTML +=(
                                `<div id="${list['dia']}">
                                    <header class="panel-heading">
                                        <h3 class="panel-title" id ="dia">${list['dia']}</h3>
                                    </header>
                                </div>`);
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
                    else{ document.getElementById("asignaciones").innerHTML = "<div><p>No hay asignaciones aun</p></div>"}
			    }
			}

			connect.open('GET','?view=perfil&mode=asignaciones&semana='+encodeURIComponent(firstDayWeek),true);
			connect.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
			connect.send();
}