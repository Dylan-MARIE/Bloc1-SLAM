<?php include 'fonctions.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<?php
    $nbCols=post("colonnes",5);
    $nbLignes=post("lignes",5);
   
?>
<form method="post">
    <label for="colonne">Nombre de colonnes</label>
        <input type="number" id="colonne" value="<?=$nbCols?>" name="colonnes">
    <label for="ligne">Nombre de lignes</label>
        <input type="number" id="ligne" value="<?=$nbLignes?>" name="lignes">
    <input type="submit" value="Envoyer">
</form>
<hr>
<?=generateTable($nbLignes,$nbCols,'o')?>
</body>
</html>