<?php
session_start();
include("../config/admin.php");
if (!isset($_SESSION['id']) OR !in_array($_SESSION['id'], $admins)) {
	echo "Error";
} else {
?>


<a href="new.php">Add a changelog</a>


<?php } ?>