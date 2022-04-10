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
					<a href="index.php">
					<img class="header__titulo-img" src="vista/img/logo_bsale.webp">
					</a>

					<!-- boton para abrir menu -->
					<div class="icon__menu">
					<span id="open__menu" class="open__menu material-icons material-icons-outlined" onclick="OpenMenu();">menu</span>
					</div>
				</div>

				<!-- buscador de productos -->
				<div class="header__buscador">
					<form class="form__buscar">
						<input class="input__buscar" type="text" name="producto" placeholder="Buscar" required>
						<button class="icon__search">
							<span class="material-icons material-icons-outlined">search</span>
						</button>
					</form>
				</div>

			</div>

			<!-- filtros de productos -->
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

	<!-- cuerpo de la tienda virtual -->
	<main class="main">
			<div class="resul" id="resul"></div>
			<section id="contenedor__productos" class="contenedor__productos"></section>
	</main>

	<?php

		//validando si existe la variable producto
		if(isset($_GET['producto']) && !empty($_GET['producto']))
		{
			?>
				<script type="text/javascript">

					//ejeuctando llamado de API
					url = "http://localhost/tienda_virtual/modelo/<?php echo "?producto=".$_GET['producto'] ?>";
					obtenerDatos(url);

				</script>
			<?php
		}
		else
		{
		?>
			<script> 

				//ejeuctando llamado de API
				url = 'http://localhost/tienda_virtual/modelo/';
				obtenerDatos(url); 
			</script>
		<?php			
		}


	?>

<!-- loader -->
<section id="contentLoader">
	<div class="lds-ellipsis">
		<div></div>
		<div></div>
		<div></div>
		<div></div>
	</div>
</section>

</body>
</html>