<?php 
class Products {
    public $title;
    public $genre;
    public function __construct($title, $genre) {
        $this->title = $title;
        $this->genre = $genre;
    }
}