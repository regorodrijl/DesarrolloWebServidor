<?php 
/* 
Se desea crear una clase abstracta Animal que nos permita extenderla a otras clases.

Dicha clase animal deberá tener dos propiedades: nombre y edad que se cubrirán en el constructor.
Tendrá un método llamado describir() que devolverá un string con el nombre y la edad del animal
Tendrá un método saludar() (sin implementar -> tendrá que ser implementado por las subclases)
Crear una subclase de Animal llamada Perro que implemente la función saludar()
Implementar la función describir() que devuelva  un string que concatene al string original del método describir() la cadena , " y además es un perro".
Hacer lo mismo con una subclase llamada Gato.
*/
abstract class Animal
{	
	private $nome;
	private $edad;
	function __construct($nombre,$edad)
	{
		$this->nome=$nombre;
		$this->edad=$edad;
	}
	public function describir()
	{
		return "Nombre: ".$this->nome." Edad: ".$this->edad;
	}
	abstract function saludar();
}
/**
* Clase PERRO extiende Animal
*/
class Perro extends Animal
{
	function saludar()
	{
		return "Guau, Guau!";
	}
	function describir()
	{
		
		echo parent::describir()." y además es un perro<br>";
	}
}
/**
* Clase Gato extiende Animal
*/
class Gato extends Animal
{
	function saludar()
	{
		return "Miau, Miau!";
	}
	function describir()
	{
		
		echo parent::describir()." y además es un gato<br>";
	}
}
$g = new Gato("Misifu",2);
$g->describir();
$p= new Perro("Lassie",10);
$p->describir();
?>