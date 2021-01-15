<?php
$json = '{"Title": "Créer des jeux de A à Z avec Unity", "Author":
    "Anthony Cardinale", "Detail": { "Publisher": "D-Booker" } }';
 
var_dump(json_decode($json));
var_dump(json_decode($json, true));


?>