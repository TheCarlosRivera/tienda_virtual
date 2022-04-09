<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@300;400;600&display=swap" rel="stylesheet"> 

	<link rel="preload" href="vista/css/normalizer.css" as="style">
	<link rel="stylesheet" type="text/css" href="vista/css/normalizer.css">

	<link rel="preload" href="vista/css/style.css" as="style">
	<link rel="stylesheet" type="text/css" href="vista/css/style.css">

	<link rel="preload" href="vista/css/globales.css" as="style">
	<link rel="stylesheet" type="text/css" href="vista/css/globales.css">

  <script type="text/javascript" src="vista/js/jquery.js"></script>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
  <script type="text/javascript" src="vista/js/script.js"></script>

	<title>Bsale</title>
</head>
<body>

	<header class="header ">
		<div class="header__interno">
			<div class="header__principal">
				<div class="header__titulo">
					<a href="">
					<img class="header__titulo-img" src="vista/img/logo_bsale.webp">
					</a>
					<div class="icon__menu">
					<span id="open__menu" class="open__menu material-icons material-icons-outlined" onclick="OpenMenu();">menu</span>
					</div>
				</div>
				<div class="header__buscador">
					<form class="form__buscar">
						<input class="input__buscar" type="text" name="buscar" placeholder="Buscar">
						<span class="icon__search material-icons material-icons-outlined">search</span>
					</form>
				</div>
			</div>
			<nav class="nav__filtro" id="nav__filtro">
				<div class="icon__menu">
					<p class="titulo__filtro">Filtros:</p>
					<span id="close__menu" class="close__menu material-icons material-icons-outlined" onclick="CloseMenu();">close</span>
				</div>
				<ul class="contenedor__filtro">
					<li class="filtros" onclick="filtrar('bebida energetica');">Energética</li>
					<li class="filtros" onclick="filtrar('pisco');">Pisco</li>
					<li class="filtros" onclick="filtrar('ron');">Ron</li>
					<li class="filtros" onclick="filtrar('bebida');">Bebida</li>
					<li class="filtros" onclick="filtrar('snack');">Snack</li>
					<li class="filtros" onclick="filtrar('cerveza');">Cerveza</li>
					<li class="filtros" onclick="filtrar('vodka');">Vodka</li>
				</ul>
			</nav>
		</div>
	</header>

	<main class="main">
		
		<section id="contenedor__productos" class="contenedor__productos">

			<div class="producto">
				<img class="producto__img" src="vista/img/snack.webp">
				<div class="producto__info">
					<p class="producto__descrip">Cheezels - Evercrisp</p>
					<p class="precio">$ 1.200</p>
					<form class="form__cantidad">
						<input class="input__cantidad" type="text" name="cantidad" placeholder="1">
						<button class="boton__cantidad">
							<span class="material-icons material-icons-outlined">add_shopping_cart</span>
						</button>
						
					</form>
					
				</div>
			</div>

			<div class="producto">
				<img class="producto__img" src="vista/img/snack.webp">
				<div class="producto__info">
					<p class="producto__descrip">Cheezels - Evercrisp</p>
					<p class="precio">$ 1.200</p>
					<form class="form__cantidad">
						<input class="input__cantidad" type="text" name="cantidad" placeholder="1">
						<button class="boton__cantidad">
							<span class="material-icons material-icons-outlined">add_shopping_cart</span>
						</button>
						
					</form>
					
				</div>
			</div>

			<div class="producto">
				<img class="producto__img" src="vista/img/snack.webp">
				<div class="producto__info">
					<p class="producto__descrip">Cheezels - Evercrisp</p>
					<p class="precio">$ 1.200</p>
					<form class="form__cantidad">
						<input class="input__cantidad" type="text" name="cantidad" placeholder="1">
						<button class="boton__cantidad">
							<span class="material-icons material-icons-outlined">add_shopping_cart</span>
						</button>
						
					</form>
					
				</div>
			</div>

			<div class="producto">
				<img class="producto__img" src="vista/img/snack.webp">
				<div class="producto__info">
					<p class="producto__descrip">Cheezels - Evercrisp</p>
					<p class="precio">$ 1.200</p>
					<form class="form__cantidad">
						<input class="input__cantidad" type="text" name="cantidad" placeholder="1">
						<button class="boton__cantidad">
							<span class="material-icons material-icons-outlined">add_shopping_cart</span>
						</button>
						
					</form>
					
				</div>
			</div>

			<div class="producto">
				<img class="producto__img" src="vista/img/snack.webp">
				<div class="producto__info">
					<p class="producto__descrip">Cheezels - Evercrisp</p>
					<p class="precio">$ 1.200</p>
					<form class="form__cantidad">
						<input class="input__cantidad" type="text" name="cantidad" placeholder="1">
						<button class="boton__cantidad">
							<span class="material-icons material-icons-outlined">add_shopping_cart</span>
						</button>
						
					</form>
					
				</div>
			</div>

			<div class="producto">
				<img class="producto__img" src="vista/img/snack.webp">
				<div class="producto__info">
					<p class="producto__descrip">Cheezels - Evercrisp</p>
					<p class="precio">$ 1.200</p>
					<form class="form__cantidad">
						<input class="input__cantidad" type="text" name="cantidad" placeholder="1">
						<button class="boton__cantidad">
							<span class="material-icons material-icons-outlined">add_shopping_cart</span>
						</button>
						
					</form>
					
				</div>
			</div>

			<div class="producto">
				<img class="producto__img" src="vista/img/snack.webp">
				<div class="producto__info">
					<p class="producto__descrip">Cheezels - Evercrisp</p>
					<p class="precio">$ 1.200</p>
					<form class="form__cantidad">
						<input class="input__cantidad" type="text" name="cantidad" placeholder="1">
						<button class="boton__cantidad">
							<span class="material-icons material-icons-outlined">add_shopping_cart</span>
						</button>
						
					</form>
					
				</div>
			</div>

			<div class="producto">
				<img class="producto__img" src="vista/img/snack.webp">
				<div class="producto__info">
					<p class="producto__descrip">Cheezels - Evercrisp</p>
					<p class="precio">$ 1.200</p>
					<form class="form__cantidad">
						<input class="input__cantidad" type="text" name="cantidad" placeholder="1">
						<button class="boton__cantidad">
							<span class="material-icons material-icons-outlined">add_shopping_cart</span>
						</button>
						
					</form>
					
				</div>
			</div>




		</section>

			<p id="ValorId"></p>		
			<p id="ValorName"></p>	
	</main>


	<script>

		function filtrar(e)
		{
			fetch('http://localhost/tienda_virtual/modelo/?filtro='+e)
			.then(datos=>datos.json())
			.then(datos=>{
				       datos.forEach(valores => {
           document.getElementById('ValorId').innerHTML = `${valores.id}`
           document.getElementById('ValorName').innerHTML = `${valores.name}`
       }); 
				//document.getElementById('datos').innerHTML = ` Dolar: ${datos.dolar} - Euro: ${datos.euro}`
			});
		}

/*
		fetch('http://localhost/tienda_virtual/modelo/?id=3')
		.then(datos=>datos.json())
		.then(datos=>{
			console.log(datos);
			//document.getElementById('datos').innerHTML = ` Dolar: ${datos.dolar} - Euro: ${datos.euro}`
		});
*/
	</script>

</body>
</html>