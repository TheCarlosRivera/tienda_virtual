<?php

	//declaracion de los header para identificar que es un codigo JSON

	header('Content-Type: application/json');
	header('Access-Control-Allow-Origin: *');

	//incluyendo el archivo de conexion
	include '../controlador/conexion.php';

	//declarando y haciendo herecia de la conexion
 class Procesos extends Conexion
 {

 	function Consulta()
 	{

	 if($_SERVER['REQUEST_METHOD'] == 'GET')
	 {
	 	//validando que la variable id esta definida y no vacia
	 	if(isset($_GET['id']) && !empty($_GET['id']))
	 	{
	 		//ejecutando sentencia sql
	 		$this->consul = $this->ConexSQL->prepare("SELECT * FROM category WHERE id=:id");
			$this->consul->bindParam(":id", $_GET['id'], PDO::PARAM_INT);	 		
	 	}

	 	//validando que la variable filtro esta definida y no vacia
	 	else if(isset($_GET['filtro']) && !empty($_GET['filtro']))
	 	{
	 		//ejecutando sentencia sql
	 		$this->consul = $this->ConexSQL->prepare("SELECT * FROM product INNER JOIN category ON product.category=category.id WHERE category.name=:filtro AND url_image != '' ");
			$this->consul->bindParam(":filtro", $_GET['filtro'], PDO::PARAM_STR);	 		
	 	}

	 	//validando que la variable filtro esta producto y no vacia
	 	else if(isset($_GET['producto']) && !empty($_GET['producto']))
	 	{
	 		//ejecutando sentencia sql
	 		$valor = $_GET['producto'];
	 		$this->consul = $this->ConexSQL->prepare("SELECT * FROM product INNER JOIN category ON product.category=category.id WHERE product.name like '%".$valor."%' ORDER BY product.name ASC");
	 	}
	 	else
	 	{
	 		//ejecutando sentencia sql
	 		$this->consul = $this->ConexSQL->prepare("SELECT * FROM product INNER JOIN category ON product.category=category.id WHERE url_image != '' ");
	 	}
	 		
	 		//ejecutando sentencia sql			
			$this->consul->execute();

	 		//validando que la sentencia sql es verdadera
	 		if($this->consul)
	 		{
	 			//convirtiendo el resultado de la sentencia sql en un formato json
				$this->consul->setFetchMode(PDO::FETCH_ASSOC);
				header("HTTP/1.1 200 OK");
				echo json_encode($this->consul->fetchAll());
				exit;
	 		}
	 		else
	 		{
	 			echo "no hay datos";
	 		}

	 }

	}
}

//llamando la funcion para mostrar los datos
$consul = new Procesos;
$consul->Consulta();
?>