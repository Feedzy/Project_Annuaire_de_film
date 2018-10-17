<?php
/**
 * Created by PhpStorm.
 * User: Stagiaire
 * Date: 17/10/2018
 * Time: 12:10
 */
try
{
    $connexion = new PDO('mysql:host=localhost;dbname=annuaire_film', 'root','');
}
catch (Exception $exception)
{
    echo "La connexion avec la base de données a echoué ==>".$exception->getMessage();
}