<?php


session_start();
include('library/Requests.php');
Requests::register_autoloader();
include('config/config.php');

$code = $_GET['code'];


$data = array(
    'client_id' => $client_id,
    'client_secret' => $client_secret,
    'grant_type' => 'authorization_code',
    'code' => $code,
    'redirect_uri' => $redirect_uri,
    'scope' => $scope
);
 
$headers = array(
	'Content-Type' => 'application/x-www-form-urlencoded'
);

$response_t = Requests::post($discord_token_url, $headers, $data);
$r_t = json_decode($response_t->body, True);

$bearer = 'Bearer ' . $r_t["access_token"];
$header = array(
	'Authorization' => $bearer
);

$response_u = Requests::get($discord_api_url . '/users/@me', $header);

$r_u = json_decode($response_u->body, True);

$_SESSION['username'] = $r_u['username'];
$_SESSION['verified'] = $r_u['verified'];
$_SESSION['locale'] = $r_u['locale'];
$_SESSION['id'] = $r_u['id'];
$_SESSION['avatar'] = $r_u['avatar'];
$_SESSION['discriminator'] = $r_u['discriminator'];
$_SESSION['email'] = $r_u['email'];

header('Location : admin/index.php');

?>