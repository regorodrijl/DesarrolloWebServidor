<?php 
/*
Sabiendo que un coche tiene las siguientes funcionalidades:
arrancar, apagar, girarDerecha, girarIzquierda
Sabiendo que un avión tiene las siguientes funcionalidades:
despegar, aterrizar, ascender y descender
Definir una clase llamada cocheAvion que tenga que implementar las interfaces anteriores.

*/
interface Coche
{
	public function arrancar();
	public function girarDerecha();
	public function girarIzquierda();
	public function apagar();
}
interface Avion
{
	public function aterrizar();
	public function despegar();
	public function ascender();
	public function descender();
}
/**
* Clase cocheAvion
*/
class CocheAvion implements Avion,Coche
{
	public function arrancar(){}
	public function girarDerecha(){}
	public function girarIzquierda(){}
	public function apagar(){}
	public function aterrizar(){}
	public function despegar(){}
	public function ascender(){}
	public function descender(){}
}
?>