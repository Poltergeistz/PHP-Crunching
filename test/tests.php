<?php
require __DIR__.'./pages/dico.php';

$string = file_get_contents("films.json", FILE_USE_INCLUDE_PATH);
$brut = json_decode($string, true);
$top = $brut["feed"]["entry"]; # liste de films

class tests extends \PHPUnit\Framework\TestCase
{
    function exercice_1_test() {
        $result = exercice_1();
        $this->assert;
    }
}