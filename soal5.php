<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bilangan Ganjil Genap</title>
</head>
<body>
    
</body>
</html>

<?php
$i = 1;
while ($i <= 50) {
    if ($i % 2) {
        echo $i . " bilangan ganjil, ";
        echo "<br>";
    } else {
        echo $i . " bilangan genap, ";
        echo "<br>";
    }
    $i++;
}
?>
