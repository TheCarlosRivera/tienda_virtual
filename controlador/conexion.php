
<?php

class Conexion extends PDO
{

	//declaracion y asignacion de las credenciales de conexion
	public $ConexSQL;
	private $tipo_db = "mysql";
	private $host = "mdb-test.c6vunyturrl6.us-west-1.rds.amazonaws.com";
	private $db = "bsale_test";
	private $user = "bsale_test";
	private $pass = "bsale_test";

	//realizando la conexion a la base de datos con PDO
	public function __construct()
	{
		try
		{
			//conectando
			$this->ConexSQL = new PDO($this->tipo_db.':host='.$this->host.';dbname='.$this->db, $this->user, $this->pass, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

		}
		catch(PDOException $e)
		{
			//rescatando los errores
			echo "Error: (". $e .")";
      exit;
		}
	}
}

?>