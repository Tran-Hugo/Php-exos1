<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 2</title>
</head>
<body>
<?php
$nom = array('François', 'Michel', 'Nicole', 'Véronique', 'Benoît');
array_splice($nom,3,1);
echo "<ul>";
foreach($nom as $key=>$value){
    echo "<li> $value </li>";
}
echo "</ul>";
?>
</body>
</html>