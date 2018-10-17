<?php

echo "Lamine";

/*
require '../vendor/autoload.php';

$template = new Twig_Loader_Filesystem(__DIR__ . '../templates');
$twig = new Twig_Environment($template, array(
    'cache' => false
));

// $link = basename($_SERVER['REQUEST_URI']);
/*
 if($link == 'annuaire_film')
{

    echo 'Twig : ' . $twig->render('home.twig', ['page' => $Accueil]);
}
// else if($link == 'contact_us') {
//     require 'view/contact.html';
// }
// else if($link == 'apropos') {
//     require 'view/apropos.html';
// }
// else if($link == 'services') {
//     require 'view/services.html';
// }


// /**
//  * @param string file name
//  * 
//  */
// function route($link) {
//     if($link == 'annuaire_film') {
//         require 'view/accueil.html';
//     }
//     else {
//         require 'view/' . $link . '.html';
//     }
// }

