<?php 

include('../model/connexion.php');


$url = basename($_SERVER['REQUEST_URI']);
require '../vendor/autoload.php';

$template = new Twig_Loader_Filesystem( '../templates');
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


if (isset($_POST['nom_realisateur']) && isset($_POST['prenom_realisateur']) && isset($_POST['nationnalite_realisateur']) && isset($_POST['sexe']))
{
    $req_reali=$connexion->prepare('Insert into realisateur(nom_realisateur,prenom_realisateur,nationnalite_realisateur,sexe) VALUES (:nom_realisateur,:prenom_realisateur,:nationnalite_realisateur,:sexe)')or die(print_r($connexion->errorInfo()));
    $req_reali->execute(array(
    'nom_realisateur'=>$_POST['nom_realisateur'],
    'prenom_realisateur'=>$_POST['prenom_realisateur'],
    'nationnalite_realisateur'=>$_POST['nationnalite_realisateur'],
    'sexe'=>$_POST['sexe'],
));
}


if(isset($_POST['titre_film']) && isset($_POST['taille_film']) && isset($_POST['compteur_vue']) && isset($_POST['id_genre']) && isset($_POST['id_video']) && isset($_POST['id_description']) && isset($_POST['id_realisateur']) && isset($_POST['id_personnage']) )
{
    $req_film=$connexion->prepare('INSERT INTO film(titre_film,taille_film,compteur_vue,id_genre,id_video,id_description,id_realisateur,id_personnage) VALUES(:titre_film,:taille_film,:compteur_vue,:id_genre,:id_video,:id_description,:id_realisateur,id_personnage)') or die(print_r($connexion->errorInfo()));
$req_film->execute(array(
    'titre_film'=>$_POST['titre_film'],
    'taille_film'=>$_POST['taille_film'],
    'compteur_vue'=>$_POST['compteur_vue'],
    'id_genre'=>$_POST['id_genre'],
    'id_video'=>$_POST['id_video'],
    'id_description'=>$_POST['id_description'],
    'id_realisateur'=>$_POST['id_realisateur'],
    'id_personnage'=>$_POST['id_personnage'],
));
}


if (isset($_POST['nom_genre']))
{
    $req_genre=$connexion->prepare('Insert into personnage(nom_genre) VALUES (:nom_genre)')or die(print_r($connexion->errorInfo()));
    $req_genre->execute(array(
    'nom_genre'=>$_POST['nom_genre'],
    ));
}

if (isset($_POST['nom_acteur']) && isset($_POST['prenom_acteur']) && isset($_POST['nationnalite']) && isset($_POST['sexe'])) 
{
    $req_personage=$connexion->prepare('Insert into personnage(nom_acteur,prenom_acteur,nationnalite,sexe) VALUES (:nom_acteur,:prenom_acteur,:nationnalite,:sexe)')or die(print_r($connexion->errorInfo()));
    $req_personage->execute(array(
    'nom_acteur'=>$_POST['nom_acteur'],
    'prenom_acteur'=>$_POST['prenom_acteur'],
    'nationnalite'=>$_POST['nationnalite'],
    'sexe'=>$_POST['sexe'],
    ));
}

if (isset($_POST['nom_realisateur']) && isset($_POST['prenom_realisateur']) && isset($_POST['nationnalite_realisateur']) && isset($_POST['sexe'])) 
{
    $req_reali=$connexion->prepare('Insert into realisateur(nom_realisateur,prenom_realisateur,nationnalite_realisateur,sexe) VALUES (:nom_realisateur,:prenom_realisateur,:nationnalite_realisateur,:sexe)')or die(print_r($connexion->errorInfo()));
    $req_reali->execute(array(
    'nom_realisateur'=>$_POST['nom_realisateur'],
    'prenom_realisateur'=>$_POST['prenom_realisateur'],
    'nationnalite_realisateur'=>$_POST['nationnalite_realisateur'],
    'sexe'=>$_POST['sexe'],
));
}

if (isset($_POST['annee_production']) &&  isset($_POST['text_description'])) 
{
    $req_des=$connexion->prepare('INSERT INTO description(annee_production,text_description) VALUES(:annee_production,:text_description)') or die(print_r($connexion->errorInfo()));
$req_des->execute(array(
    'annee_production'=>$_POST['annee_production'],
    'text_description'=>$_POST['text_description'],
));
}



header('Location: indexcontroller.php');
