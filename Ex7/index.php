<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 7</title>
</head>
<body>
<?php

echo '<table>';
for($i=1;$i<=10;$i++){
    echo "<tr>";
    for($y=1;$y<=10;$y++){
    echo "<td>".$i*$y."</td>";
    }
    echo "</tr>";
};
echo '</table>';

?>
</body>
</html>