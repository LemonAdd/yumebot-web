<?php
session_start();
include("../config/admin.php");
if (!isset($_SESSION['id']) OR !in_array($_SESSION['id'], $admins)) {
	echo "Error";
} else {
?>
<!DOCTYPE html>
<html>
<head>
	<title>Add a changelog</title>
</head>
<body>

	<?php 

	if (isset($_POST['version'], $_POST['content'])) {
		if (!empty($_POST['version']) AND !empty($_POST['content'])) {
				
			$version = htmlspecialchars($_POST['version']);
			$content = htmlspecialchars($_POST['content']);

			$avatar = $_SESSION['avatar'];
			$ext = ".png";
			if ($avatar[0] == "a" AND $avatar[1] == "_") {
				$ext = ".gif";
			}

			$url_image = 'https://cdn.discordapp.com/avatars/' . $_SESSION['id'] . '/' . $avatar . $ext;
 
			$ch = curl_init($url_image);
			 
			$save_dir = '../img/changelogs/';
			$filename = basename($url_image);
			$complete_save_loc = $save_dir . $filename;
			 
			$fp = fopen($complete_save_loc, 'wb');
			 
			curl_setopt($ch, CURLOPT_FILE, $fp);
			curl_setopt($ch, CURLOPT_HEADER, 0);
			curl_exec($ch);
			curl_close($ch);
			fclose($fp);


				
			$req = $bdd->prepare('INSERT INTO changelogs(version, content, date_changelog, author, avatar) VALUES(:version, :content, NOW(), :author, :avatar)');

			$req->execute(array(
				'version' => $version,
				'content' => $content,
				'author' => $_SESSION['username'],
				'avatar' => 'https://www.yumenetwork.fr/img/changelogs/' . $avatar . $ext
			));

			$error = 'Votre article a bien été posté';


		} else {
			$error = 'Veuillez renseigner tous les champs';
		}
	}

	?>


	<?php if (isset($error)) { ?>
		<div class="notif-red"><center><?php echo $error; ?></center></div>
	<?php } ?>

	<form method="POST">
		<input type="text" name="version" placeholder="Version (Example : 1.4.1)" class="form-control"><br>
		<textarea name="content" placeholder="Contenu de l'article" class="form-control"></textarea><br>
		<input type="submit" name="go" class="btn btn-success btn-lg btn-block">
	</form>


</body>
</html>

<?php } ?>