<?php
require_once('payment.php');

class Tarjeta extends Payment {
    public $name;
    public $number;
    public $cvv;
    public $date;
    public function __construct($id, $name, $number, $cvv, $date){
        parent::__construct($id);
        $this->name = $name;
        $this->number = $number;
        $this->cvv = $cvv;
        $this->date = $date;
    }
}
?>