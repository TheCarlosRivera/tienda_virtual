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