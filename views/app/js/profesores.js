function listarProfesores (){

    li = document.getElementById("listaProfesores");
    while (li.hasChildNodes()) {   
        li.removeChild(li.firstChild);
    }

    var connect, form, response, result;

	    	connect = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
	    	connect.onreadystatechange = function() {
		        if(connect.readyState == 4 && connect.status == 200) {
                    var data =JSON.parse(connect.response);
                   
                    for(var list of data){
                        console.log(list['nombres']);
                        document.getElementById("listaProfesores").innerHTML +=(
                            '<li class="list-group-item">\
                                <div class="media">\
                                    <div class="pr-0 pr-sm-20 align-self-center">\
                                    <div class="avatar avatar-online">\
                                        <img src="./views/global/portraits/1.jpg" alt="...">\
                                        <i class="avatar avatar-busy"></i>\
                                    </div>\
                                    </div>\
                                    <div class="media-body align-self-center">\
                                    <h5 class="mt-0 mb-5">\
                                        '+list['nombres']+" "+list['apellidos'] +'\
                                        <small>'+list['cod_materia'] +'</small>\
                                    </h5>\
                                    <p> <i class="icon icon-color md-email" aria-hidden="true"></i></p>\
                                    </div>\
                                    <div class="pl-0 pl-sm-20 mt-15 mt-sm-0 align-self-center">\
                                    <button type="button" class="btn btn-primary btn-sm">Contactar</button>\
                                    </div>\
                                </div>\
                            </li>'
                        )
                    } 
			    }
			}

			connect.open('GET','?view=profesores&mode=list',true);
			connect.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
			connect.send();

    }