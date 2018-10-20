<?php 

require '../vendor/autoload.php';
require "../model/model.php";

$template = new Twig_Loader_Filesystem(   '../templates');
$twig = new Twig_Environment($template, array(
    'cache' => false
));
/*

function recuperations()
{
    $connexion = new PDO('mysql:host=localhost;dbname=annuaire_film', 'root','');
    $req_film_select=$connexion->prepare("SELECT titre_film,taille_film,nom_genre,image_video,format,text_description,annee_production,nom_realisateur,prenom_realisateur,nationnalite_realisateur,realisateur.sexe,nom_acteur,prenom_acteur,nationnalite,personnage.sexe
    FROM film,genre,video,personnage,realisateur,description 
    WHERE video.id_video=film.id_video AND genre.id_genre=film.id_genre AND personnage.id_personnage=film.id_personnage AND realisateur.id_realisateur=film.id_realisateur AND description.id_description=film.id_description")or die(print_r($connexion->errorInfo()));
    return  $req_film_select;
}*/

function image_film()
{
    $connexion = new PDO("mysql:host=localhost;dbname=annuaire_film", "root", "");
    $image = $connexion->query("SELECT  film.* , genre.*, description.* FROM film, genre, description");
    return $image;
}
echo $twig->render('index.twig', [
    'film'=> image_film(),
]);