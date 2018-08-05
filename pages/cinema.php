<?php

######################################
############ Liste de Films ########
###################################

echo "<h1>"."Liste de Films"."</h1>";
$string = file_get_contents("./../data/films.json", FILE_USE_INCLUDE_PATH);
$brut = json_decode($string, true);
$top = $brut["feed"]["entry"]; # liste de films

echo "<h2> TOP 10 </h2>";

$topCount = 1;
			for ($i=0; $i <10; $i++) {
				echo $topCount . ' ';
				foreach ($top[$i] as $key => $value) {
					if ($key == "im:name") {
							echo $value['label'];
					}
				}
				echo "<br>";
				$topCount++;
			}

######################################
############ Exercice 1 #############
###################################

echo "Quel est le classement du film « Gravity » ?";

		    $which_num = 0;
			foreach ($top as $key => $value) {
					foreach ($value as $key => $value) {
						if($key == "im:name") {
							$which_num++;
							if($value['label'] == 'Gravity'){
								echo ' ' . $value['label'] . " est top " . $which_num . "<br>";
							}
						}
					}
			}
######################################
############ Exercice 2 #############
###################################

echo "Quel est le réalisateur du film « The LEGO Movie » ?";

            foreach ($top as $key => $value) {
						$name = $value['im:name']['label'];
						if($name == 'The LEGO Movie'){
							foreach ($value as $key => $value) {
								if($key == 'im:artist'){
									echo ' ' . $value['label'] . "<br>";
								}
							}
						}
					}
######################################
############ Exercice 3 #############
###################################

echo "Combien de films sont sortis avant 2000 ?";

			    $before_mil = 0;
				foreach ($top as $key => $value) {
					$millenium = strtotime("January 1, 2000");
					$release = $value['im:releaseDate']['attributes']['label'];
					$releaseStamp = strtotime($release);
					if($millenium > $releaseStamp){
						$before_mil++;
					}
				}
				echo ' ' . $before_mil . "<br>";

######################################
############ Exercice 4 #############
###################################

echo "Quel est le film le plus récent ? Le plus vieux ?";

                    $newestMovie = 0;
					$newestMovieName;
					foreach ($top as $key => $value) {
						$release = $value['im:releaseDate']['attributes']['label'];
						$releaseStamp = strtotime($release);
						if($releaseStamp > $newestMovie){
							$newestMovie = $releaseStamp;
							$newestMovieName = $value['im:name']['label'];
						}
					}
					echo ' ' . "Le plus recent est : " . $newestMovieName . "<br>";
            
                    $oldestMovie = 0;
					$oldestMovieName;
					foreach ($top as $key => $value) {
						$release = $value['im:releaseDate']['attributes']['label'];
						$releaseStamp = strtotime($release);
						if($releaseStamp < $oldestMovie){
							$oldestMovie = $releaseStamp;
							$oldestMovieName = $value['im:name']['label'];
						}
					}
                    echo ' ' . "Le plus vieux est : " . $oldestMovieName . "<br>";
                    
######################################
############ Exercice 5 #############
###################################

echo "Quelle est la catégorie de films la plus représentée ?";

                    $array = [];
					foreach ($top as $key => $value) {
						$array[] = $value['category']['attributes']['term'];
					}
					$valueCount = array_count_values($array);
					foreach ($valueCount as $key => $value) {
						if ($value == max($valueCount)) {
						echo ' ' . $key . "<br>";		
						}
					}

######################################
############ Exercice 6 #############
###################################

echo "Quel est le réalisateur le plus présent dans le top100 ?";

                    $directors = [];
					foreach ($top as $key => $value) {
						$directors[] = $value['im:artist']['label']; 
					}
					$dirCount = array_count_values($directors);
					foreach ($dirCount as $key => $value) {
						if($value == max($dirCount)) {
							echo ' ' . $key . "<br>";
						}
					}
######################################
############ Exercice 7 #############
###################################

echo "Combien cela coûterait-il d'acheter le top10 sur iTunes ? de le louer ?";

                    $price = [];
					$topCount = 1;
					foreach ($top as $key => $value) {
						$price[] = $value['im:price']['label'];
						$topCount++;
						if ($topCount > 10) {
							break;
						}
					}
					$topTenPrice = '';
					foreach ($price as $key => $value) {
						$topTenPrice += substr($value, 1);
					}
					echo ' ' . "Acheter le top 10 coûterais en tout : " . $topTenPrice . "$" . "<br>";
            
                    $price = [];
					$topCount = 1;
					foreach ($top as $key => $value) {
							$price[] = $value['im:rentalPrice']['label'];
							$topCount++;
							if ($topCount > 10) {
								break;
							}
					}
					$topTenRentPrice = '';
					foreach ($price as $key => $value) {
						$topTenRentPrice += substr($value, 1);
					}
					echo ' ' . "Louer le top 10 coûterais en tout : " . $topTenRentPrice . "$" . "<br>";
######################################
############ Exercice 8 #############
###################################

echo "Quel est le mois ayant vu le plus de sorties au cinéma ?";

######################################
############ Exercice 9 #############
###################################

echo "Quels sont les 10 meilleurs films à voir en ayant un budget limité ?";

