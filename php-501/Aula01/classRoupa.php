<?php 

class Roupa
{

	public $marca ;
	public $quantidade ;
	public $preco;
	public $foto;
	public $comprar;

	public function __construct($marca,$tamanho,$preco,$foto)
	{
	$this->marca = $marca;
	$this->preco = $preco;
	$this->quantidade = $quantidade;
	$this->foto = $foto;
	}

	public function comprar($quantidade)
	{
	echo "Você comprou" .$quantidade . "camisetas";
	}

}

$roupas = new Roupa('time','GG',200.00,true);

echo $roupas['marca'];

$roupas->comprar(25);