<?php 
/**
* 
*/
class Documento
{
	protected $_id;
	protected $_formato;
	protected $_publicacion;
	function __construct($id,$formato,$publi)
	{
		$this->_id=$id;
		$this->_formato=$formato;
		$this->_publicacion=$publi;
	}
	function imprimirDatos()
	{
		echo "<br/>Id: ".$this->_id.". Formato: ".$this->_formato.". Año de publicación: ".$this->_publicacion;
	}
	function setPublicacion($publi)
	{
		$this->_publicacion=$publi;
	}
	function getFormato()
	{
		return $this->_formato;
	}
	function getId()
	{
		return $this->_id;
	}
}
?>