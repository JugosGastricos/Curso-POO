<?php
class UberX extends Car {
    public $brand;
    public $model;

    public function __construct($license, $driver, $brand, $model){
        parent::__construct($license, $driver);
        $this->driver = $driver;
        $this->license = $license;
        $this->brand = $brand;
        $this->model = $model;

    }
}
?>