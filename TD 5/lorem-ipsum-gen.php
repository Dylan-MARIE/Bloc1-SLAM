<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Message</title>
</head>
<body>

<?php
$array??=[];
echo $array["Boo"];
echo $array[0];
?>

<div>
<label for="size">Taille :</label>
<input type ="number" id="size" name="size" value="<?=$size?>"min="1" max="30">
</div>
<button type ="submit">Valider</button>
</body>
</html>