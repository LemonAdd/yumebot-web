<?php
    include('../library/Requests.php');
    Requests::register_autoloader();
    include('../config/config.php');
    $arg = 'Bot ' . $bot_token;
    $header = array(
        'Authorization' => $arg
    );
    $response = Requests::get($discord_api_url . '/users/' . $_GET['id'], $header);
    $user = json_decode($response->body, true);

    $user_avatar = "https://cdn.discordapp.com/avatars/" . $user['id'] . "/" . $user['avatar'] . ".jpg";

    $text = "is now level " . $_GET['lvl'] . " !";

    $IMG = imagecreatefromjpeg("https://www.yumenetwork.fr/img/cards/levelup.jpg");
    $avatar = imagecreatefromjpeg($user_avatar);
    $avatar_size = getimagesize($user_avatar);
    $avatar_final = imagecreatetruecolor(91, 91);
    $text_color = imagecolorallocate($IMG, 255,255,255);
    imagecopyresampled($avatar_final, $avatar, 0, 0, 0, 0, 91, 91, $avatar_size[0], $avatar_size[1]);
	imagecopymerge($IMG, $avatar_final, 20, 6, 0, 0, 91, 91, 100);
    imagestring($IMG, 5, 122, 53, $user['username'] . "#" . $user['discriminator'], $text_color);
    imagestring( $IMG, 5, 122, 74, $text, $text_color);
    header("Content-type: image/png");
    imagepng($IMG);
    imagecolordeallocate($IMG, $text_color);
    imagedestroy($IMG);
    imagedestroy($avatar);
    imagedestroy($avatar_final);
    exit; 
?>