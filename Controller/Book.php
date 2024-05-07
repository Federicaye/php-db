<?php 
include_once __DIR__. "/../Models/Movie.php";
$books = [];
 foreach ($products as $type => $value) {
   /*  echo $type;  *///movies e books
    if($type == 'books') {
       
        foreach( $value as $item ) {
           $book = new Book($item['title']);
           $books[] = $book;
           /*  var_dump($item); 
            echo $item['title']; */
          }
    }}  
var_dump($books);