<?php 
/**
 * 
 */
class Revista extends Documento
{
	protected $_nPag;
	protected $_tipoEncuadernacion;
	function __construct($id,$formato,$publi/**/,$nPag,$tipoEn)
	{
		$this->_nPag=$nPag;
		$this->_tipoEncuadernacion=$tipoEn;
 		parent::__construct($id,$formato,$publi);
	}
	function imprimirDatos()
	{
		parent::imprimirDatos();
		echo " Numero de páginas: ".$this->_nPag.". Encuadernación: ".$this->_tipoEncuadernacion;
	}
} 
?>