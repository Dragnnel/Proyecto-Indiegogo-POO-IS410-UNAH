<?php

	class Post{

		private $nombre_campana;
		private $descripcion;
		private $fecha_de_punlicacion;
		private $fecha_de_expiracion;
		private $url_image;

		public function __construct($nombre_campana,
					$descripcion,
					$fecha_de_punlicacion,
					$fecha_de_expiracion,
					$url_image){
			$this->nombre_campana = $nombre_campana;
			$this->descripcion = $descripcion;
			$this->fecha_de_punlicacion = $fecha_de_punlicacion;
			$this->fecha_de_expiracion = $fecha_de_expiracion;
			$this->url_image = $url_image;
		}
		public function getNombre_campana(){
			return $this->nombre_campana;
		}
		public function setNombre_campana($nombre_campana){
			$this->nombre_campana = $nombre_campana;
		}
		public function getDescripcion(){
			return $this->descripcion;
		}
		public function setDescripcion($descripcion){
			$this->descripcion = $descripcion;
		}
		public function getFecha_de_punlicacion(){
			return $this->fecha_de_punlicacion;
		}
		public function setFecha_de_punlicacion($fecha_de_punlicacion){
			$this->fecha_de_punlicacion = $fecha_de_punlicacion;
		}
		public function getFecha_de_expiracion(){
			return $this->fecha_de_expiracion;
		}
		public function setFecha_de_expiracion($fecha_de_expiracion){
			$this->fecha_de_expiracion = $fecha_de_expiracion;
		}
		public function getUrl_image(){
			return $this->url_image;
		}
		public function setUrl_image($url_image){
			$this->url_image = $url_image;
		}
		public function __toString(){
			return "Nombre_campana: " . $this->nombre_campana . 
				" Descripcion: " . $this->descripcion . 
				" Fecha_de_punlicacion: " . $this->fecha_de_punlicacion . 
				" Fecha_de_expiracion: " . $this->fecha_de_expiracion . 
				" Url_image: " . $this->url_image;
		}
	}
?>