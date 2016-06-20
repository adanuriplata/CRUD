<?php namespace Models;
	class Conexion{
		private $datos = array( 
			"host" => "localhost",
			"user" => "root",
			"pass" => "secret",
			"db" => "CRUD"
		);
		private $con;

		public function __construct(){
			//se inserta la barra invertida "\" en mysqli($this->datos)
			//para que sepa que e suna clase global y no local, esto es 
			//provocado por el namespace
			$this->con = new \mysqli($this->datos['host'],
				$this->datos['user'],
				$this->datos['pass'],
				$this->datos['db']);
		}

		public function consultaSimple($sql){
			$this->con->query($sql);
		}

		public function consultaRetorno($sql){
			$datos = $this->con->query($sql);
			return $datos;
		}
	}

 ?>