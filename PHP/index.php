<?php
// echo 'Hola mundo';
require_once('car.php');
require_once('account.php');
require_once('uberX.php');
require_once('uberPool.php');

// $car = new Car("AMG063", new Account("Mercedes Campuzano", "LOL420"));
// $car->printDataCar();
$uberX = new UberX("AMG063", new Account("Mercedes Campuzano", "LOL420"), "Chevrolet", "Spark");
$uberX->printDataCar($uberX->brand, $uberX->model);

$uberPool = new UberPool("FUK069", new Account("Andrea Serna", "69420666"), "Volkswagen", "Jetta");
$uberPool->printDataCar($uberPool->brand, $uberPool->model);
?>