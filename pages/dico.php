<?php
######################################
############ Dictionnaire ###########
###################################

echo "<h1>"."Dictionnaire"."</h1>";
$string = file_get_contents("./../data/dictionnaire.txt", FILE_USE_INCLUDE_PATH);
$dico = explode("\n", $string);

######################################
############ Exercice 1 #############
###################################

$sizeofDico = sizeof($dico);
echo "<br>"."Combien de mots contient ce dictionnaire ?\n".$sizeofDico."\n";

######################################
############ Exercice 2 #############
###################################

// /!\ Très long 
$wordCount = 0;
foreach($dico as $key => $value){
    if(strlen($value) == 15){
        $wordCount++;
    }
}
echo "<br>"."Combien de mots font exactement 15 caractères ?\n".$wordCount;

######################################
############ Exercice 3 #############
###################################
$wCount = 0;
foreach($dico as $word){
    if(stristr($word,'w')){
        $wCount++;
    }
}
echo "<br>"."Combien de mots contiennent la lettre « w » ?\n".$wCount;

######################################
############ Exercice 4 #############
###################################

$qCount = 0;
foreach($dico as $word){
    if(substr($word,-1) == 'q'){
        $qCount++;
    }
}
echo "<br>"."Combien de mots finissent par la lettre « q » ?\n".$qCount;
