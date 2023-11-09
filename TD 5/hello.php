<?php
$content="Hello World !";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$content?></title>
</head>
<body>
    <h1><?="PHP est capable de passer les variables dans une chaîne : $content"?></h1>
    <p><?="Pour éviter la concaténation ".$content . " des chaînes"?></p>
</body>
</html>