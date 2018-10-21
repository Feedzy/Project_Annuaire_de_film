<?php


function image_film()
{
    $connexion = new PDO("mysql:host=localhost;dbname=annuaire_film", "root", "");
    $image = $connexion->query("SELECT  film.* , genre.*, description.*, personnage.* , video.* FROM film, genre, description, personnage, video ");
    return $image;
}