<?php

class Movie {
    public $nome;
    public $genere;
    public $anno;

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
    <li><?= "$first->nome $first->genere $first->anno" ?></li>
    <li><?= "$second->nome $second->genere $second->anno" ?></li>
    <li><?= "$third->nome $third->genere $third->anno" ?></li>

    </ul>
</body>
</html>