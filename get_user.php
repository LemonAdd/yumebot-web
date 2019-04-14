<?php 

// Afficher les erreurs à l'écran
ini_set('display_errors', 1);
// Enregistrer les erreurs dans un fichier de log
ini_set('log_errors', 1);
// Nom du fichier qui enregistre les logs (attention aux droits à l'écriture)
ini_set('error_log', dirname(__file__) . '/log_error_php.txt');

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

$response_u = Requests::get($discord_api_url . '/users/@me/guilds', $header);

$r_u = json_decode($response_u->body, True);

$servers_owner = array();

$i = 1;
foreach ($r_u as $value) {
	if ($value['owner'] == True) {
		$servers_owner[$i] = array(
			'name' => $value['name'],
			'id' => $value['id']
		);

		$i++;

	}
}
$servers_owner[0] = $i - 1;

$_SESSION['servers'] = $servers_owner;


$options = array(
    'auth' => new Requests_Auth_Basic(array($yume_user, $yume_key))
);
$response = Requests::get($yume_url . '/user/' . $_SESSION['id'], array(), $options);
$_SESSION['yume'] = $response->body;

header('Location : member.php');



?>