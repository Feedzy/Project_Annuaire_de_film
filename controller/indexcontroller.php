<?php 

require '../vendor/autoload.php';
require "../model/model.php";

$template = new Twig_Loader_Filesystem(   '../templates');
$twig = new Twig_Environment($template, array(
    'cache' => false
));

echo $twig->render('index.twig', [
    'film'=> image_film(),
]);