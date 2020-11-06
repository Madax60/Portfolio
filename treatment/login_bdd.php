<?php
if(!isset($_SESSION)){
    session_start();
}
$servername = 'mysql-lyceestvincent.alwaysdata.net';
$dbname = 'lyceestvincent_msamni';
$username = '116313_msamni';
$password = 'samnimehdi60';

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