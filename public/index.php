<?php
// Composer
/* require __DIR__ . '/vendor/autoload.php'; */

/* on affiche  les erreurs, 
si vous avez une erreur 500, 
regardez dans votre console */
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// on inclue le fichier qui contient nos fonctions
require __DIR__ . '/../lib/functions.php';

// Page
getPart('header');
getContent();
getPart('footer');