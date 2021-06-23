<?php
abstract class Speler{
  public $naam = "";
  public $speler;
  public $transferWaarde;

  public function beschrijfSpeler(){
    return $this->naam;
    return $this->speler;
  }

  abstract function heeftTransferwaarde(){
    return $this->transferWaarde;
  }
}

class Liverpool extends Speler{
  public function beschrijfSpeler(){
  }

  public function heeftTransferwaarde(){
  }
}

class Barcelona extends Speler{
  public function beschrijfSpeler(){
  }
  
  public function heeftTransferwaarde(){
  }
}

?>
