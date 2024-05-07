<?php
$data = file_get_contents(__DIR__ . '/../data.json');
$products = json_decode($data, true);
var_dump($products);
class Book {
    public $title; //posso cambiare questa variabile in qualunque punto del codice, c'è anche private e protected
    public $language;
    public $genre;
    public function __construct($text, $language, $genre) {
        $this->title = $text;
        $this->language = $language;
        $this->genre = $genre;
    }
    public function play(){}
}