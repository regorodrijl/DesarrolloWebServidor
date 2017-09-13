<?php 
/**
 * 
 */
class Biblioteca
{
	protected $_nome;
	protected $_direccion;
	protected $_telefono;
	protected $_pagWeb;
	protected $_documentos = [];
	protected static $_contador=0;
	
	function __construct($nom,$dir,$tele,$web)
	{
		$this->nome = $nom;
		$this->direccion = $dir;
		$this->telefono = $tele;
		$this->pagWeb = $web;
		self::$_contador++;
		
	}
	function nuevoDocumento($obj)
	{
		$this->_documentos[]=$obj;//añadir a documento un obj.
	}
	function listarDocumento($tipo="X")
	{
		$t=strtoupper($tipo);

		switch ($t) {
			case 'X':
			echo "<br>Lista de todos los documentos.";
			foreach ($this->_documentos as $doc) {
				$doc->imprimirDatos();
			}
			break;
			case 'TODO':
			echo "<br>Lista de todos los documentos.";
			foreach ($this->_documentos as $doc) {
				$doc->imprimirDatos();
			}
			break;
			case 'LIBRO':
			echo "<br>Listado de los Libros.";
			for ($i=0; $i < count($this->_documentos); $i++) { 
				$obj=strtoupper($this->_documentos[$i]->getFormato());
				if ($obj=="LIBRO") {
					echo $this->_documentos[$i]->imprimirDatos();
				}
			}
			break;
			case 'REVISTA':
			echo "<br>Listado de las Revista.";
			for ($i=0; $i < count($this->_documentos); $i++) { 
				$obj=strtoupper($this->_documentos[$i]->getFormato());
				if ($obj=="REVISTA") {
					echo $this->_documentos[$i]->imprimirDatos();
				}
			}
			break;
			case 'DVD':
			echo "<br>Listado de los DVD.";
			for ($i=0; $i < count($this->_documentos); $i++) { 
				$obj=strtoupper($this->_documentos[$i]->getFormato());
				if ($obj=="DVD") {
					echo $this->_documentos[$i]->imprimirDatos();
				}
			}
			break;
		}
	}
	function bajaDocumento($id)
	{
		for ($i=0; $i < count($this->_documentos); $i++) { 
			if($this->_documentos[$i]->getId()===$id)
			{
				echo "<br>Documento con id: ".$this->_documentos[$i]->getId()." Borrado.";
				unset($this->_documentos[$i]);
			}
		}
	}
	function imprimirDatos()
	{
		echo "<br/>Nombre Biblioteca: ".$this->nome.". Dirección: ".$this->direccion.". Teléfono: ".$this->telefono.". Página Web:".$this->pagWeb;
	}
	function getContador()
	{
		echo "hay: ".self::$_contador;
	}


} ?>