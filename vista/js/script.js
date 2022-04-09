/*
	abriendo menu
*/
function OpenMenu()
{
	setTimeout(function(){
		$("#nav__filtro").addClass("mostrar");
	}, 200)

}

/*
	cerrando menu
*/

function CloseMenu()
{
	setTimeout(function(){
		$("#nav__filtro").removeClass("mostrar");
	}, 200)

}

$(document).ready(function() {

	//efectos del loader
	setTimeout(function(){
		$("#contentLoader").addClass("ocultar");
	}, 1300);

	})//fin de carga de documento