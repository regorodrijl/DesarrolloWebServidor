<?php 
class Libro extends Documento
{
	protected $nombreAutor;
	protected $nPag;
	function __construct($id,$formato,$publi/**/,$nomA,$nPag)
	{
		$this->nombreAutor=$nomA;
		$this->nPag=$nPag;
		parent::__construct($id,$formato,$publi);
	}
	function imprimirDatos()
	{
		parent::imprimirDatos();
		echo " Autor: ".$this->nombreAutor.". Numero de páginas: ".$this->nPag;
	}
} 
?>