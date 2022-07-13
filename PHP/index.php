<?php
// echo 'Hola mundo';
require_once('car.php');
require_once('account.php');
require_once('uberX.php');
require_once('uberPool.php');
require_once('driver.php');
require_once('uberVan.php');

$uberX = new UberX("AMG063", new Driver("Mercedes Campuzano", "LOL420"), "Chevrolet", "Spark");
$uberX->setPassengers(4);
$uberX->printDataCar();

$uberPool = new UberPool("FUK069", new Driver("Andrea Serna", "69420666"), "Volkswagen", "Jetta");
$uberPool->setPassengers(4);
$uberPool->printDataCar();

$uberVan = new UberVan("FGH345", new Driver("Andrés Herrera", "AND123"));
$uberVan->setPassenger(6);
$uberVan->printDataCar();