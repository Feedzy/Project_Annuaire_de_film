<?php


require '../vendor/autoload.php';

$template = new Twig_Loader_Filesystem(   '../templates');
$twig = new Twig_Environment($template, array(
    'cache' => false
));

 echo $twig->render('ajout_film.twig');