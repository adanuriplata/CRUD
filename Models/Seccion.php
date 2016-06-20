<?php namespace Models;
	
	class seccion{
		private $id;
		private $nombre;
		private $con;

		public function __construct(){
			$this->con = new Conexion();
		}

		public function set($atributo, $contenido){
			$this->$atributo = $contenido;
		}

		public function get($atributo){
			return $this->contenido;
		}

		public function listar(){
			$sql = "SELECT * FROM secciones";
			$datos = $this->con->consultaRetorno($sql);
		}

		public function add(){
			$sql= "INSERT INTO secciones (id, nombre) VALUES (null, '{$this->nombre}')";
			$this->con->consultaSimple($sql);
		}

		public function delete(){
			$sql = "DELETE FROM secciones WHERE id = '{$this->id}'";
			$this->con->consultaRetorno($sql);
		}

		public function edit(){
			$sql = "UPDATE FROM secciones SET nombre = '{$this->nombre}' WHERE id = '{$this->id}'";
			$this->con->consultaSimple($sql);
		}

		public function view(){
			$sql = "SELECT * FROM secciones WHERE id = '{$this->id}'";
			$datos = $this->con->consultaRetorno($datos);
			$row = mysqli_fetch_assoc($datos);
			return $row;

		}
	} 


 ?>