<?php
header('Authorization: Bot MTk4NjIyNDgzNDcxOTI1MjQ4.Cl2FMQ.ZnCjm1XVW7vRze4b7Cq4se7kKWs');

$json = file_get_contents('https://discordapp.com/api/users/147698560996081674');

var_dump($json);

?>