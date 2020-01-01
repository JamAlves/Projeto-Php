<?php 

class pessoa{

	public $nome;// atributo 

	public function falar(){// método pq e uma funçao dentro de uma classe 


		return "O meu nome é ".$this->nome; 

	}
} 

$jayme = new Pessoa();
$jayme->nome = "Jayme Daniel"; 
echo $jayme->falar();

 ?>