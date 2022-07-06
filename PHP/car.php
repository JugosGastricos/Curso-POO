<?php
class Car {
    public $id;
    public $license;
    public $driver;
    public $passenger;

    public function __construct($license, $driver){
        $this->driver = $driver;
        $this->license = $license;
    }

    public function printDataCar($brand, $model){
        echo "License: $this->license, Driver: {$this->driver->name}, Document: {$this->driver->document}, Brand: $brand, Model: $model </br>";
    }
}
?>