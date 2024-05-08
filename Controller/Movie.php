<?php 
include_once __DIR__. "/../Models/Movie.php";
include_once __DIR__."/../Models/Sale.php";
$summerSale = new Sale(5);
$movies = [];
 foreach ($products as $type => $value) {
   /*  echo $type;  *///movies e books
    if($type == 'movies') {
       
        foreach( $value as $item ) {
           $movie = new Movie($item['title'], $item['category'],  $item['price'], $item['rating'], $summerSale, $item['language'] );
           $movies[] = $movie;
           /*  var_dump($item); 
            echo $item['title']; */
          }
    }}  
var_dump($movies);