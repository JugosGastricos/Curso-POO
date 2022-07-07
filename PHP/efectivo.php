<?php
require_once('payment.php');

class Efectivo extends Payment {
    public function __construct($id){
        parent::__construct($id);
    }
}
?>