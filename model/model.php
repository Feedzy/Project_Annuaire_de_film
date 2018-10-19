<?php

function recuperation($connexion)
{
    $req_film_select=$connexion->prepare('Select titre_film,taille_film,nom_genre,image_video,format,text_description,annee_production,nom_realisateur,prenom_realisateur,nationnalite_realisateur,realisateur.sexe,nom_acteur,prenom_acteur,nationnalite,personnage.sexe
    from film,genre,video,personnage,realisateur,description 
    WHERE video.id_video=film.id_video and genre.id_genre=film.id_genre and personnage.id_personnage=film.id_personnage and realisateur.id_realisateur=film.id_realisateur AND description.id_description=film.id_description')or die(print_r($bdd->errorInfo()));
    $result = $req_film_select->fetch();
    return  $result;
}