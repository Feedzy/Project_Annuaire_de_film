<?php 

require '../vendor/autoload.php';
require "../model/model.php";

$template = new Twig_Loader_Filesystem(   '../templates');
$twig = new Twig_Environment($template, array(
    'cache' => false
));

try
{
    $connexion = new PDO('mysql:host=localhost;dbname=annuaire_film', 'root','');
}
catch (Exception $exception)
{
    echo "La connexion avec la base de données a echoué ==>".$exception->getMessage();
}


echo $twig->render('index.twig', [
    'resultat'=>recuperation($connexion),
]);