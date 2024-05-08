<?php 
class Prod {
    public $title;

    public $rating;
    public $genre;
    public $price;
    public function __construct($title, $genre, $price, $rating) {
        $this->title = $title;
        $this->genre = $genre;
        $this->price = $price;
        $this->rating = $rating;
    }

    public function showAll(){
        echo 'showall';
    }
    public function show(){
        echo 'show';
    }
    public function search(){
        echo 'search';
    }
    

}