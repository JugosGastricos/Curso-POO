<?php
// echo 'Hola mundo';
require_once('car.php');
require_once('account.php');
require_once('uberX.php');
require_once('uberPool.php');
require_once('driver.php');

// $car = new Car("AMG063", new Account("Mercedes Campuzano", "LOL420"));
// $car->printDataCar();
$uberX = new UberX("AMG063", new Driver("Mercedes Campuzano", "LOL420"), "Chevrolet", "Spark");
$uberX->setPassengers(4);
$uberX->printDataCar($uberX->brand, $uberX->model);

$uberPool = new UberPool("FUK069", new Driver("Andrea Serna", "69420666"), "Volkswagen", "Jetta");
$uberPool->setPassengers(4);
$uberPool->printDataCar($uberPool->brand, $uberPool->model);