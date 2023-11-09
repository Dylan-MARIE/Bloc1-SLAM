<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Message</title>
</head>
<body>

<?php
extract($_POST);
$message??="Hello World !";
$color??="black";
$size??="15";
?>

<form action="<?=$_SERVER["PHP_SELF"]?>" method="post">
    <div>
        <label for="message">Message :</label>
        <textarea id="message" name="message" placeholder="Tapez votre message"><?=$message?>
        </textarea>
    </div>
    <div>
        <label for="color">Couleur :</label>
        <input type ="color" id="color" name="color" value="<?=$color?>">
        </input>
    </div>
    <div>
        <label for="size">Taille :</label>
        <input type ="number" id="size" name="size" value="<?=$size?>">
    </div>
    <button type ="submit">Valider</button>
</form>
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