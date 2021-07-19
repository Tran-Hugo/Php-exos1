<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 3</title>
</head>
<body>
<?php
$json='{"Title": "Créer des jeux de A à Z avec Unity", "Author": "Anthony Cardinale", "Detail": { "Publisher": "D-Booker" } }';
$decoded_array=json_decode($json,true);
function livre($item,$key) {
    echo "la clé ".$key." contient l'élément ".$item."<br />";
};
array_walk_recursive($decoded_array, "livre");
?>
</body>
</html>