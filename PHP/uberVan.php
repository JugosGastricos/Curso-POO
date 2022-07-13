<?php
class UberVan extends Car {
    public $typeCarAccepted;
    public $seatsMaterial;

    public function __construct($license, $driver){
        parent::__construct($license, $driver);
        // $this->typeCarAccepted = $typeCarAccepted;
        // $this->seatsMaterial = $seatsMaterial;
    }

    public function setPassenger($passenger){
        if ($passenger == 6){
            $this->passenger = $passenger;
        } else {
            throw new Error('El número de pasajeros debe ser de 6');
        }
    }
}
?>