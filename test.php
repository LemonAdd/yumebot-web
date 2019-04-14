<?php
include('library/Requests.php');
Requests::register_autoloader();
include('config/config.php');

$data = array(
    'gender' => 'female',
    'desc' => 'MY NAME IS LEMONADD AND I\'M AN OK DEV',
    'lover' => '282233191916634113',
    'status' => 'taken'
);

$options = array(
    'auth' => new Requests_Auth_Basic(array($yume_user, $yume_key))
);
$response = Requests::put($yume_url . '/user/147698560996081674', array(), $data, $options);
var_dump($response->body);

$response = Requests::get($yume_url . '/user/282233191916634113', array(), $options);
var_dump($response->body);

?>