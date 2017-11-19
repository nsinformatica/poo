<?php
class Pessoa {

	public $nome;//Atributo
	public function falar(){//método
		return "O meu nome eh ".$this->nome;
	}
}
$glaucio =  new Pessoa();
$glaucio->nome = "Glaucio Daniel";
echo $glaucio->falar();
?>