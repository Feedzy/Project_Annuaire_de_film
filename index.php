<?php

//require 'router/router.php';

$url = basename($_SERVER['REQUEST_URI']);
require 'vendor/autoload.php';

$template = new Twig_Loader_Filesystem(__DIR__ . '/templates');
$twig = new Twig_Environment($template, array(
    'cache' => false
));

if(isset($_GET['/']))
{
    $url=$_GET['/'];
}

switch ($url)
{
    case '':
        echo $twig->render('home.twig');
    break;

    case 'Liste-film':
        echo $twig->render('contact.twig');
    break;


}