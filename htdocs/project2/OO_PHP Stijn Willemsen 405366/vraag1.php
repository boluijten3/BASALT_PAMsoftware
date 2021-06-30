<?php
class Auto{
  public $model = "";
  public $jaar;
  public $kilometerstand;

  protected $prijs = 100,000.00;
  protected $aantalDeuren = 4;

  public function getAuto(){
    return $this->model;
    return $this->jaar;
    return $this->kilometerstand;
  }

  public function getAantalDeuren(){
    return $this->aantalDeuren;
  }

  public function getPondPrijs(){
    return $this->prijs;
  }

  public function setPondPrijs(){
    $this->prijs = $prijs;
  }

  public function prijsNaarEuro(){
    public $euroPrijs;
    $prijs * 1.08 = $euroPrijs;
    echo "Omgerekend naar euro's is dat : " . $euroPrijs . ".";

  }
}

?>
