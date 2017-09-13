<?php 
/*
Se desea crear una clase abstracta llamada Mueble con las siguientes propiedades:
protected: altura, ancho, largo
método public  ajustarDatos(ancho,alto,largo) que ajuste las propiedades anteriores.
método public y abstracto obtenerPrecio -> que implementarán las subclases
Crear una subclase Estantería que añada a la clase mueble lo siguiente:
private: precio
método public ajustarDatos que además permita introducir el precio
Implemente la función obtenerPrecio: devolverá el precio

*/
abstract class Mueble
{
	protected altura, ancho, largo;
	public function ajustarDatos($ancho,$alto,$largo)
	{
		$this->altura=$alto;
		$this->ancho=$ancho;
		$this->largo=$largo;
	}
	abstract public function obtenerPrecio();
}
/**
* 
*/
class Estanteria extends Mueble
{
	protected $precio
	function ajustarDatos($ancho,$alto,$largo,$precio)
	{
		parent::ajustarDatos($ancho,$alto,$largo);
		$this->precio=$precio;
	}
	function obtenerPrecio()
	{
		return $this->precio;
	}
}
/*

PREGUNTASSSSSSSSSSSSSSSSSSSSSSSSSSSS

¿Si Mueble en lugar de ser una clase abstracta fuera una clase normal podría usar private en las propiedades de altura, ancho y largo? ¿Qué ocurriría al heredar en la subclase Estantería?

	Si, que no se puede acceder a dicha propiedad por la visibilidad que poseen.


En una clase abstracta si los métodos son declarados como abstract se puede poner visibilidad private? Razona la respuesta.
¿Se pueden instanciar objetos de una clase abstracta?

	Al hacerlos privados no se puede acceder a los metodos, seria absurdo declararlos abstarctos y privados.
	No, es la premisa de una clase abstracta
	

Escribe 3 características-diferencias para clases Abstractas y para Interfaces

Una clase solo puede extender una clase abstracta, una clase puede implementar varias interfaces.

En  una interface todos los metodos tienen que ser publicos

En una clase abstracta los metodos abstractos deben ser heredados por las clases que extiendan dicha clase abstracta.

En las interfaces Todos los métodos en una interfaz deben ser implementados dentro de la clase

*/
?>