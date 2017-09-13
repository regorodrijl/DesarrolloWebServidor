<?php 
/**
* 
*/
class Dvd extends Soporte
{
	private $idioma;
	private $formato;
	function __construct($num,$tit,$pre,$idio,$forma)
	{
		parent::__construct($num,$tit,$pre);
		$this->idioma=$idio;
		$this->formato=$forma;
	}
	function imprimirCaracteristicas()
	{
		parent::imprimirCaracteristicas();
		echo ". Idioma: ".$this->idioma.". Formato: ".$this->formato;
	}
}
?>