<?php

interface Avaliavel
{
	public function receberAvaliacao(string $aval):int;

}

interface Foo 
{
	public function bar();
}

class Produto implements Avaliavel
{

}

$p = new Produto();





