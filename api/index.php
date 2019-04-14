<?php

header('Content-Type: application/json');

try {
	$pdo = new PDO('mysql:host=yumenetwymadmin.mysql.db;dbname=yumenetwymadmin;charset=utf8', 'yumenetwymadmin', 'Jaimelespates1');
	$retour["success"] = true;
} catch(Exception $e) {
	$retour["success"] = false;
}

$request = $pdo->prepare('SELECT * FROM changelogs ORDER BY id DESC LIMIT 0,1');
$request->execute();

$retour["results"] = $request->fetchAll();

echo json_encode($retour);


?>