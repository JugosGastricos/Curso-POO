<?php
class Car {
    public $id;
    public $license;
    public $driver;
    private $passenger;
    
    public function __construct($license, $driver){
        $this->driver = $driver;
        $this->license = $license;
    }


    public function getPassengers(){
        return $this->passenger;
    }

    public function setPassengers($passengers){
        if($passengers == 4){
            $this->passenger = $passengers;
        } else {
            $this->passenger = "undefined";
            throw new Error('El número de pasajeros debe ser de 4');
        }
    }

    public function printDataCar($brand, $model){
        if ($brand == "" || $model == "" || $this->passenger == ""){
            throw new Error('Ingresa todos los datos necesarios');
        } else {
            echo "License: $this->license <br/>Driver: {$this->driver->name} <br/>Document: {$this->driver->document} <br/>Brand: $brand <br/>Model: $model </br>Passengers: $this->passenger</br><br/>";
        }
    }
}