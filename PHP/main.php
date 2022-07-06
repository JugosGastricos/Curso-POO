<?php
// echo 'Hola mundo';
require_once('car.php');
require_once('account.php');

$car = new Car("AMG063", new Account("Mercedes Campuzano", "LOL420"));
$car->printDataCar();
?>