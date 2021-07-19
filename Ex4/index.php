<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 4</title>
</head>
<body>
<?php
$nom = array('François', 'Michel', 'Nicole', 'Véronique', 'Benoît');
$nom2 = array('Leelo');
array_splice($nom,4,0,$nom2);
echo "<ul>";
foreach($nom as $key=>$value){
    echo "<li> $value </li>";
}
echo "</ul>";
?>
</body>
</html>