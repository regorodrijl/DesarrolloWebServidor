<?php 
/**
* 
*/
class Juego extends Soporte
{
	private $consola;
	private $minJugadores;
	private $maxJugadores;

	function __construct($num,$tit,$pre,$con,$min,$max)
	{
		$this->consola=$con;
		$this->minJugadores=$min;
		$this->maxJugadores=$max;
		parent::__construct($num,$tit,$pre);
	}
	function imprimirCaracteristicas()
	{
		parent::imprimirCaracteristicas();
		echo ". Consola: ".$this->consola.". minJugadores: ".$this->minJugadores.". maxJugadores: ".$this->maxJugadores;
	}
	function imprimirJugador()
	{
		echo ". minJugadores: ".$this->minJugadores.". maxJugadores: ".$this->maxJugadores;
	}
}
 ?>