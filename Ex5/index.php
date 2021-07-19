<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 5</title>
</head>
<body>
<?php
/*$my_Arr = array("Le","Chat","Botté","de","Charles","Perrault");
$stringLenght=0;
$stringLenght2=0;

function tri($str){
    if (strlen($str)>$stringLenght) {
        $stringLenght=strlen($str);
    }
};
function tri2($str){
    if (strlen($str)<$stringLenght2) {
        $stringLenght2=strlen($str);
    }
};
array_map('tri',$my_Arr);
array_map('tri2',$my_Arr);

echo 'le mot le plus long contient '.$stringLenght.' caractères.';*/
$my_array = array("Le","Chat","Botté","de","Charles","Perrault"); 
$new_array = array_map('strlen', $my_array); // En premier argument on a la fonction callback strlen(), en deuxième le tableau => array(2,4,5,2,7,8)
echo "La longueur du plus petit élément est " . min($new_array) ."."; // affiche 2
echo "<br />";
echo "La longueur du plus grand élément est " . max($new_array) ."."; // affiche 8 

?>
</body>
</html>