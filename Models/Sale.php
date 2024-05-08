<?php
class Sale {
    public $sale;
    public function __construct($sale) {
        $this->sale = $sale;
    }

}

$summerSale = new Sale(5);