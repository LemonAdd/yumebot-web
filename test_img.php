<?php
    $text = "is now level " . $_GET['lvl'] . " !";

    $IMG = imagecreatefromjpeg("https://www.yumenetwork.fr/img/cards/levelup.jpg");
    $avatar = imagecreatefromjpeg("https://www.yumenetwork.fr/img/lemon.jpg");
    $avatar_size = getimagesize("https://www.yumenetwork.fr/img/lemon.jpg");
    $avatar_final = imagecreatetruecolor(91, 91);
    $text_color = imagecolorallocate($IMG, 255,255,255);
    imagecopyresampled($avatar_final, $avatar, 0, 0, 0, 0, 91, 91, $avatar_size[0], $avatar_size[1]);
	imagecopymerge($IMG, $avatar_final, 20, 6, 0, 0, 91, 91, 100);
    imagestring($IMG, 5, 122, 53, $_GET['p'], $text_color);
    imagestring( $IMG, 5, 122, 74, $text, $text_color);
    header( "Content-type: image/png" );
    imagepng($IMG);
    imagecolordeallocate($IMG, $text_color );
    imagedestroy($IMG); 
    exit; 
?>