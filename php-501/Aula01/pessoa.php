<?php


Class Pessoa
{
	public $nome;

	public $sobrenome;

	public $dataNascimento;

	public $sexo;

	public function nomeCompleto(): string //assinatura
	{

	return"{$this->nome}{$this->sobrenome}";

	} 

}


class Funcionario extends Pessoa
{
	public $cargo;
	public $setor;
}


$f = new Funcionario();

$f->nome = 'Lucas ';
$f->sobrenome = 'Ricciardi de Sales';


$f->cargo = 'Desenvolvedor';
$f->setor='Desenvolvimento';

echo $f->nomeCompleto();