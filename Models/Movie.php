<?php
include __DIR__ ."/Sale.php";
$data = file_get_contents(__DIR__ . '/../data.json');
$products = json_decode($data, true);
var_dump($products);
class Movie {
    public $title; //posso cambiare questa variabile in qualunque punto del codice, c'è anche private e protected
    public $language;
    public $genre;
    public $sale;
    public function __construct($text, $language, $genre, $sale) {
        $this->title = $text;
        $this->language = $language;
        $this->genre = $genre;
        $this->sale = $sale;
    }
    public function play(){}
}

/* foreach ($products as $type => $value) {
    echo $type; //movies e books
    if($type == 'books') {
       
        foreach( $value as $item ) {
           $movie = new Movie($item['title']);
            var_dump($item); 
            echo $item['title'];
          }
    }

} */
  