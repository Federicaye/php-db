<?php
$data = file_get_contents(__DIR__ . '/../data.json');
$products = json_decode($data, true);
class Sale {
    public $sale;
   
    public function __construct($sale) {
        $this->sale = $sale;
     
    }

}

