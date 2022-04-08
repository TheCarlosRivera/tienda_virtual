<?php

	header('Content-Type: application/json');
	header('Access-Control-Allow-Origin: *');

include '../controlador/conexion.php';

 $pdo = new Conexion();

 class Procesos extends Conexion
 {

 	function Consulta()
 	{

	 if($_SERVER['REQUEST_METHOD'] == 'GET')
	 {

	 	if(isset($_GET['id']))
	 	{
	 		$this->consul = $this->ConexSQL->prepare("SELECT * FROM category WHERE id=:id");
			$this->consul->bindParam(":id", $_GET['id'], PDO::PARAM_INT);	 		
	 	}
	 	else if(isset($_GET['filtro']))
	 	{
	 		$this->consul = $this->ConexSQL->prepare("SELECT * FROM category WHERE name=:filtro");
			$this->consul->bindParam(":filtro", $_GET['filtro'], PDO::PARAM_STR);	 		
	 	}
	 	else
	 	{
	 		$this->consul = $this->ConexSQL->prepare("SELECT * FROM category");

	 	}

				$this->consul->execute();
				$this->consul->setFetchMode(PDO::FETCH_ASSOC);

				header("HTTP/1.1 200 OK");
				echo json_encode($this->consul->fetchAll());
				exit;
	 	
	 }

	}
}

$consul = new Procesos;
$consul->Consulta();
?>