<?php

class casa{

  private $banheiro;
  private $sala;
  private $quarto;

  public function getBanheiro(){

  	return $this->banheiro;
  }

  public function setBanheiro($banheiro){

  	$this->banheiro = $banheiro;
  }
 //------------------------------------//


  public function getSala(){

  	return $this->sala;
  }

  public function setSala($sala){
     $this->sala = $sala;

  }
 //------------------------------------//



  public function getQuarto(){

  	return $this->quarto;
  }

  public function setQuarto($quarto){

  	$this->quarto = $quarto;
  }

  //-------------------------------------//

  public function exibir(){

    return array(
      "banheiro"=>$this->getBanheiro(),
      "sala"=>$this->getSala(),
      "quarto"=>$this->getQuarto()

    );

  }

}

$AP = new Casa();
$AP->setBanheiro("Apartamento Size");
$AP->setSala("grande");
$AP->setQuarto("quarto");

var_dump($AP ->exibir());

?>