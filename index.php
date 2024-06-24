<?php

class Movie {
    public $nome;
    public $genere;
    public $anno;

public function namGen() {
    return "$this->nome $this->genere";
}

public function annata() {
    return "Il film è uscito nell'anno $this->anno";
}

}



$first = new Movie();
$first->nome = "First";
$first->genere = "Action";
$first->anno = 2015;

$second = new Movie();
$second->nome = "Second";
$second->genere = "Horror";
$second->anno = 2010;

$third = new Movie();
$third->nome = "Third";
$third->genere = "Adventure";
$third->anno = 2005;

$movies = [$first, $second, $third];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-oop-1</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
   
<ul>
    <?php foreach($movies as $film) { ?>
      <li><?= $film->namGen()." " .$film->annata()  ?></li>
    <?php } ?>
</ul>

</body>
</html>