
<?php
/*
require 'vendor/autoload.php';

//twig config
$loader = new Twig_Loader_Filesystem(__DIR__ . '/templates');

$twig = new Twig_Environment($loader, [
    'cache' => false, //__DIR__ . '/tmp',
]);

//echo $twig->render('home.twig', ['nom' => 'Aliou']);

$link = basename($_SERVER['REQUEST_URI']);


switch ($link)
{
    case '/':

        route('view/accueil.html');
    break;
}


if($link == 'annuaire_film') {
    $link = '/';
}
if($link == '/') {
    echo 'Twig : ' . $twig->render('home.twig', ['page' => 'Accueil']);
}
else if($link = 'apropo') {
    echo 'Twig : ' . $twig->render('apropos.twig', ['page' => 'A Propos']);
}
else if($link = 'contact_u') {
    echo 'Twig : ' . $twig->render('contact.twig', ['page' => 'Contact']);
}
else if($link = 'services') {
    
}