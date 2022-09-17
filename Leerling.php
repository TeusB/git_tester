<?php 
class Leerling {
    private
    $naam,
    $leeftijd,
    $klas;

    public function __construct($naam, $leeftijd, $klas){
        $this->setNaam($naam);
        $this->setLeeftijd($leeftijd);
        $this->setKlas($klas);
    }


    public function getNaam(){
        return $this->naam;
    }
    public function getLeeftijd(){
        return $this->leeftijd;
    }
    public function getKlas(){
        return $this->klas;
    }

    public function setNaam($naam){
        $this->naam = $naam;
    }
    public function setLeeftijd($leeftijd){
        $this->leeftijd = $leeftijd;
    }
    public function setKlas($klas){
        $this->klas = $klas;
    }
}

?>