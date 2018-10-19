<?php

try
{
    $connexion = new PDO('mysql:host=localhost;dbname=annuaire_film', 'root', '');
}
catch (Exception $e)
{
    echo "La connexion n'a pas pus etre etablie :==>". $e->getMessage();
}

$requete = $connexion->query("SELECT FROM ");