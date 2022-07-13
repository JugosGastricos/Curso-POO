<?php
class UberX extends Car {
    public $brand;
    public $model;

    public function __construct($license, $driver, $brand, $model){
        parent::__construct($license, $driver);
        $this->brand = $brand;
        $this->model = $model;
    }

    public function printDataCar(){
        parent::printDataCar();
        if($this->brand == "" || $this->model == ""){
            throw new Error('Ingresa todos los datos necesarios');
        } else {
        echo "<br/>Brand: $this->brand <br/>Model: $this->model</br><br/>";
        }
    }
}
?>