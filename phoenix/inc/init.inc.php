<?php
// connexion à la BDD
$pdo = new PDO('mysql:host=localhost;dbname=phoenix', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING, PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
//var_dump($pdo);

//----------------------
//ouverture de session
// session_start();

// définition de constantes
define("RACINE_SITE", $_SERVER['DOCUMENT_ROOT'] . '/php/site/');  // chemin jusqu'au au dossier du site
define("URL", 'http://localhost/Cours-poles/Workshop/phoenix');


//-----------------
//inclusion des fichiers
// require_once('functions.php');

?>