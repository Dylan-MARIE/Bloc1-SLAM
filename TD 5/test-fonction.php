<?php
include 'fonctions.php';

titre("Titre de niveau 1");
titre("Titre de niveau 2",level:2);
titre("Titre de niverau 2",'Avec subTitle',2);
echo get('page',true);