<?php 
include_once __DIR__. "/../Models/Movie.php";
$movies = [];
 foreach ($products as $type => $value) {
   /*  echo $type;  *///movies e books
    if($type == 'movies') {
       
        foreach( $value as $item ) {
           $movie = new Movie($item['title'], $item['language'], $item['category']);
           $movies[] = $movie;
           /*  var_dump($item); 
            echo $item['title']; */
          }
    }}  
var_dump($movies);