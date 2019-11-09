<?php

class Quadrado
{

	static instancia = null;

	private $lado;

	static function getQuadrado($lado)
	{
		if(!Quadrado::instancia){
			Quadrado::instancia = new Quadrado();
		}

		return Quadrado::instancia;
	}

	private function __construct()
	{

	}

	public function setLado($lado)
	{
		$this->lado = $lado;
		return $this;
	}

	public function getLado($lado)
	{
		
		return $this->lado;
	}
}