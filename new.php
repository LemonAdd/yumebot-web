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
	<script src="https://cloud.tinymce.com/stable/tinymce.min.js?apiKey=lb0915fs0xhnnsshpqjcc8tlslijx4ie1b4t96oi4r0t00dn"></script>
  	<script type="text/javascript">
  		tinymce.init({
		  selector: '#tinymce',
		  height: 500,
		  theme: 'modern',
		  plugins: 'print preview searchreplace autolink directionality visualblocks visualchars fullscreen image link media template codesample table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists textcolor wordcount imagetools contextmenu colorpicker textpattern help',
		  toolbar1: 'formatselect | bold italic strikethrough forecolor backcolor | link | alignleft aligncenter alignright alignjustify  | numlist bullist outdent indent  | removeformat',
		  image_advtab: true,
		  templates: [
		    { title: 'Test template 1', content: 'Test 1' },
		    { title: 'Test template 2', content: 'Test 2' }
		  ],
		  content_css: [
		    '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
		    '//www.tinymce.com/css/codepen.min.css'
		  ]
		 });
  	</script>
	<title>Add a changelog</title>
</head>
<body>

	<?php 
	if (isset($_POST['version'], $_POST['content'])) {
		if (!empty($_POST['version']) AND !empty($_POST['content'])) {
				
			$version = htmlspecialchars($_POST['version']);
			$content = htmlspecialchars($_POST['content']);
				
			$req = $bdd->prepare('INSERT INTO changelogs(version, content, date_changelog, author, avatar) VALUES(:version, :content, NOW(), :author, :avatar)');

			$req->execute(array(
				'version' => $version,
				'content' => $content,
				'author' => $_SESSION['username'],
				'avatar' => 'https://cdn.discordapp.com/avatars/' . $_SESSION['id'] . '/' . $_SESSION['avatar'] . '.jpg'
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
		<textarea id="tinymce" name="content" placeholder="Contenu de l'article" class="form-control"></textarea><br>
		<input type="submit" name="go" class="btn btn-success btn-lg btn-block">
	</form>


</body>
</html>

<?php } ?>