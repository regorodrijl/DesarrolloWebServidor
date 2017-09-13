<?php 
/**
 * 
 */
class Dvd extends Documento
{
	protected $_nDvd;
	protected $_formato;
	function __construct($id,$formato,$publi/**/,$nDvd,$form)
	{
		$this->_nDvd=$nDvd;
		$this->_formato=$form;
 		parent::__construct($id,$formato,$publi);
	}
	function imprimirDatos()
	{
		parent::imprimirDatos();
		echo " Número de Dvd's: ".$this->_nDvd.". Formato: ".$this->_formato;
	}
} 
?>