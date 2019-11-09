<?php 

class NomeDaClass
{
	public $nomeDaPropriedade = 'uma valor';

	public function nomeDoMetodo()
	{
	echo $this->nomeDaPropriedade;
	}

}

$obj = new NomeDaClass();

$obj->nomeDoMetodo();