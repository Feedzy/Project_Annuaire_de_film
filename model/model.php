<?php

function recuperation()
{
    $connexion = new PDO('mysql:host=localhost;dbname=annuaire_film', 'root','');
    $req_film_select=$connexion->prepare("SELECT titre_film,taille_film,nom_genre,image_video,format,text_description,annee_production,nom_realisateur,prenom_realisateur,nationnalite_realisateur,realisateur.sexe,nom_acteur,prenom_acteur,nationnalite,personnage.sexe
    FROM film,genre,video,personnage,realisateur,description 
    WHERE video.id_video=film.id_video AND genre.id_genre=film.id_genre AND personnage.id_personnage=film.id_personnage AND realisateur.id_realisateur=film.id_realisateur AND description.id_description=film.id_description")or die(print_r($connexion->errorInfo()));
   $results = $req_film_select->fetch();
    return  $results;
}

/*
function image_film()
{
    
    $image_film = $connexion->query("SELECT * FROM video");
    return $image_film;
}*/ 