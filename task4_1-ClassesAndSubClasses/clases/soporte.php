<?php 
	/**
	* 
	*/
	class Soporte 
	{
		public $numero;
		protected $titulo;
		protected $precio;
		function __construct($num,$tit,$pre)
		{
			$this->numero = $num;
			$this->precio = $pre;
			$this->titulo = $tit;
		}
		function getPrecioSinIVA()
		{
			return $this->precio;
		}
		function getPrecioConIVA()
		{
			return $this->precio+(($this->precio*21)/100);
		}
		function setTitulo($tit)
		{
			$this->titulo = $tit;
		}
		function getTitulo()
		{
			return $this->titulo;	
		}
		function imprimirCaracteristicas()
		{
			echo "<br/>Numero: ".$this->numero.". Precio: ".$this->precio.". Titulo: ".$this->titulo;
		}
	}
	?>