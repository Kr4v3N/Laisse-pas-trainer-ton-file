<?php

// Boucle pour uploader tous les fichiers:
if (count($_FILES['img']['name']) > 0){
    //Loop through each file
    for($i = 0; $i < count($_FILES['img']['name']); $i++);
}

// 1- Vérification de l'extension

//Création d'une liste blanche des extensions autorisées
$extensions_Autorisees = ['jpg', 'png', 'gif'];

//Récuperation du nom de fichier
$fichier_Upload_Nom = $_FILES['img']['name'][$i];

//Récuperation de l'extension du fichier
$fichier_Extension = strtolower(pathinfo($fichier_Upload_Nom,  PATHINFO_EXTENSION));
//Vérification de l'extension\est
if(!in_array($fichier_Extension, $extensions_Autorisees)){
    echo 'L\'extension du fichier n\'est pas autorisées';
}

// 2- Vérification du type MIME

// On autoriese seulement les fichiers images de type gif, jpeg, et png
// Récupération du type MIME avec mime_content()
// On vérifie si le type MIME appartient à la liste blanche

//3- Vérification de la taille du fichier
// Définition de la taille maximale autorisée à 1Mo, soit 100000 octes


// On renomme le fichier uploader avec un nom aléatoire
// On génere un chaîne aléatoire avec bin2hex() sur random-bytes

//Transfer du fichier
// Upload du fichier dans son chemin de destination
// Modification des droits

//Lister les fichiers upload dans un tableau

//Message de transfert

