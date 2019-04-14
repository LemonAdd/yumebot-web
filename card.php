<?php
header ("Content-type: image/jpeg");

$pseudo = $_GET['pseudo'];
$avatar = $_GET['avatar'];


// On charge d'abord les images
$source = imagecreatefrompng("http://steamavatars.co/?media_dl=2342");
$destination = imagecreatefromjpeg("https://cdn.discordapp.com/attachments/494142792914829314/513807027450019844/profile.png");


$largeur_source = imagesx($source);
$hauteur_source = imagesy($source);
$largeur_destination = imagesx($destination);
$hauteur_destination = imagesy($destination);

// On veut placer le logo en bas à droite, on calcule les coordonnées où on doit placer le logo sur la photo
$destination_x = $largeur_destination - $largeur_source;
$destination_y =  $hauteur_destination - $hauteur_source;

// On met le logo (source) dans l'image de destination (la photo)
imagecopymerge($destination, $source, $destination_x, $destination_y, 0, 0, $largeur_source, $hauteur_source, 60);

// On affiche l'image de destination qui a été fusionnée avec le logo
imagejpeg($destination);
?>