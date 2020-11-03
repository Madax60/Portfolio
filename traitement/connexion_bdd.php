<?php
if(!isset($_SESSION)){
    session_start();
}
$servername = 'localhost';
$dbname = 'portfolio';
$username = 'root';
$password = '';

//On établit la connexion
try
{
    $bdd = new PDO('mysql:host='.$servername.';dbname='.$dbname.';charset=utf8', $username, $password);
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}

?>