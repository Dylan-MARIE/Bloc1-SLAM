<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Message</title>
</head>
<body>

<?php
extract($_GET);
$message??="Hello World !";
$color??="black";
$size??="15";
?>
<p style="color:<?=$color?>; font-size: <?=$size?>px;">
    <?=$message?>
</p>
<h2>URLs de test</h2>
<ul>
    <li>
        <a href="?message=Texte en vert de taille 20&size=20&color=green">Vert</a>
    </li>
    <li>
        <a href="?message=Texte en vert de taille 40&size=20&color=yellow">Jaune</a>
    </li>
    <li>
        <a href="?message=Texte en vert de taille 80&size=20&color=red">Rouge</a>
    </li>
</ul>
</body>
</html>