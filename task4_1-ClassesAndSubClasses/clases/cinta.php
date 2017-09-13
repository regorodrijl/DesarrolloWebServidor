<?php 
/**
* 
*/
class Cinta extends Soporte
{
	private $duracion;
	private $formato;
	function __construct($num,$tit,$pre,$dura,$forma)
	{
		parent::__construct($num,$tit,$pre);
		$this->duracion=$dura;
		$this->formato=$forma;
	}
	function imprimirCaracteristicas()
		{
			parent::imprimirCaracteristicas();
			echo ". Duracion: ".$this->duracion.". Formato: ".$this->formato;
		}
}
?>