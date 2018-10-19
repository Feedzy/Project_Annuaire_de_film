<?php
function getPosts()
{
    try
    {
        $bdd = new PDO('mysql:host=localhost;dbname=annuaire_de_films;charset=utf8', 'root', '');
    }
    catch(Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    }

    $req = $bdd->query('SELECT id, titre_film, taille_film,compteur_film,id_genre,id_video,id_description,id_realisateur,id_personnage FROM  );

    return $req;
}
?>