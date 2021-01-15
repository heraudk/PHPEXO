<?php
// On crée le tableau informations
$informations = array ('Kevin', 'Heraud', '8ans', 'PARIS', '75000');

//On définis la "classe" de kévin
$prenoms = 'Kevin';

//On cache prenom
unset($informations[array_search($prenoms, $informations)]);


//On affiche le résultat
print_r($informations);
?>