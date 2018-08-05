<?php 

function getContent(){
	if(!isset($_GET['page'])){
		include __DIR__.'/../pages/dico.php';
    }
    else if ($_GET['page'] == 'cinema'){
        include __DIR__.'/../pages/cinema.php';
    }
    else if ($_GET['page'] == 'dico'){
        include __DIR__.'/../pages/dico.php';
    }
}

function getPart($name){
	include __DIR__ . '/../parts/'. $name . '.php';
}