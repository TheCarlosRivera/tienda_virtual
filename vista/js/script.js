
$(document).ready(function() {

	//efectos del loader
	setTimeout(function(){
		$("#contentLoader").addClass("ocultar");
	}, 1300);

	})//fin de carga de documento

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


/*

	consumiendo la API

*/
		function obtenerDatos(url)
		{		
					//obtenemos la url
					fetch(url)
					.then(datos=>datos.json())//realizando promesa
					.then(datos=>{
							//declaracion de los campos donde se mostrara la información
							var resul = document.getElementById('contenedor__productos');
							var error = document.getElementById('resul');
							error.innerHTML = "";
							resul.innerHTML = "";
						 
						 //validando que (datos) posea registros
						 if(datos.length >= 1)
						 {
						 		//recorriendo los datos con for
								for(let dato of datos)
								{
									//imprimiendo la información en los campos declarados.
																			
									resul.innerHTML += `<div class='producto'>
									<div class="contenedor__img">
									<img class="producto__img" src="${dato.url_image}">
									</div>
									<div class="producto__info">
									<p class="producto__descrip">${dato.name}</p>
									<p class='precio'>$ ${Number(dato.price).toLocaleString("de-DE")}</p>
									<form class="form__cantidad">
									<input class="input__cantidad" type="text" name="cantidad" placeholder="1" required>
									<button class="boton__cantidad">
									<span class="material-icons material-icons-outlined">add_shopping_cart</span>
									/button>					
									</form>					
									</div>
									</div>`;

								}
						 }
						 else
						 {
						 	//mostrar mensaje si no se encuentra información
						 	var error = document.getElementById('resul');
						 	error.innerHTML = "<h4>No se encontraron resultados</h4>";
						 }

					});			
		}

		//ejecutando la funcion de filtros
		function filtrar(e)
		{
			//remover el loader.
			$("#contentLoader").removeClass("ocultar");
			
			//declarando la url y enviandola a la funcion obtenerDatos()
			url = 'http://localhost/tienda_virtual/modelo/?filtro='+e;
			obtenerDatos(url); 
			setTimeout(function(){
				$("#contentLoader").addClass("ocultar");
			}, 1300);
		}