<?php
/**
* 
*/
class Usuario
{
	const STATUS_ATIVO = true;
	const STATUS_INATIVO =false;

	public $ativo;
	function __construct()
	{
		$this->ativo = Usuario::STATUS_ATIVO;
	}

	public function getAtivo()
	{
		return $this->ativo ? 'ativo' : 'inativo';
	}

	public function __clone()
	{
		echo 'Clone o objeto...';
	}

	public function __clone()
	{
		$this-> ativo = Usuario::STATUS_ATIVO;
	}

}

$u1 = new Usuario();

echo $u1->getAtivo();
echo "<br>";

$u2 = $u1;
$u2->ativo = Usuario::STATUS_INATIVO;

echo $u1->getAtivo;