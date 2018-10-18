<?php

//require 'router/router.php';

$url = basename($_SERVER['REQUEST_URI']);

require 'vendor/autoload.php';

$template = new Twig_Loader_Filesystem(   __DIR__ . '/templates');
$twig = new Twig_Environment($template, array(
    'cache' => false
));
if(isset($_GET['/']))
{
    $url=$_GET['/'];
}

switch ($url)
{
    case 'Project_Annuaire_de_film':
       header('Location: controller/indexcontroller.php');
    break;

    case 'Liste-film':
        echo $twig->render('contact.twig');
    break;

    case 'Ajout':
        header('Location: controller/ajoutcontroller.php');
    break;

    default:
        header('HTTP/1.0 404 Not Found');
    break;

}