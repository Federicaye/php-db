<?php
//includi controller
include_once __DIR__ . '/Controller/Movie.php';
include_once __DIR__ . '/Controller/Book.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH' crossorigin='anonymous'>
</head>

<body>
    <div class= "container">
    <div class="row">
        <?php foreach($movies as $movie) { ?>
        <div class="card w-25 ">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title"><?php echo $movie -> title ?></h5>
                <p class="card-text"><?php echo $movie -> genre ?></p>
                <p class="card-text"><?php echo $movie -> sale -> sale ?></p>
                <p class="card-text"><?php echo $movie -> price ?></p>
                <p class="card-text"><?php echo $movie -> showPrice() ?></p>
                
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>
        <?php } ?>
        <?php foreach($books as $book) { ?>
        <div class="card w-25 ">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title"><?php echo $book -> title ?></h5>
                <p class="card-text"><?php echo $book -> genre ?></p>
                <p class="card-text"><?php echo $book -> genre ?></p>
                <p class="card-text"><?php echo $book -> sale ?></p>
                <p class="card-text"><?php echo $book -> showPrice() ?></p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>
        <?php } ?> 
    </div>
    </div>

</body>

</html>