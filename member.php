<?php
session_start();
include('library/Requests.php');
Requests::register_autoloader();
include("config/admin.php");
include("config/config.php");



if (isset($_SESSION['id'])) {

	$user_info = json_decode($_SESSION['yume'], true);

	if (!isset($user_info['gender'])) {
		echo "Error, make sure that you modified your profile at least once with YumeBot on Discord<br><a href='logout.php'>Please, disconnect here</a>";
	} else {
		$avatar = $_SESSION['avatar'];
		$ext = ".png";
		if ($avatar[0] == "a" AND $avatar[1] == "_") {
			$ext = ".gif";
		}

	$options = array(
		'auth' => new Requests_Auth_Basic(array($yume_user, $yume_key))
	);

	$arg = 'Bot ' . $bot_token;
	$header = array(
		'Authorization' => $arg
	);
	$response = Requests::get($discord_api_url . '/users/' . $user_info['lover'], $header);
	$lover_info = json_decode($response->body, true);

	$lov_ext = ".png";
	if ($lover_info['avatar'][0] == "a" AND $lover_info['avatar'][1] == "_") {
		$ext = ".gif";
	}

	$servers_id = array();

	for ($i=1; $i <= $_SESSION['servers'][0]; $i++) { 
		array_push($servers_id, $_SESSION['servers'][$i]['id']);
	}
	if(!empty($_POST['send'])) {
		$data = array(
		    'gender' => $_POST['gender'],
		    'desc' => $_POST['desc'],
		    'lover' => $user_info['lover'],
		    'status' => $user_info['status']
		);
		$response = Requests::put($yume_url . '/user/' . $_SESSION['id'], array(), $data, $options);
		$alert = "Your profile has been updated ! Please <a href='logout.php'>disconnect</a> and reconnect to see the changes";
	}
	if (!empty($_POST['server'])) {
		$plog = False;
		$pgreet = False;
		$pmod = False;
		if ($_POST['log'] == 'on') {
			$plog = True;
		}
		if ($_POST['greet'] == 'on') {
			$pgreet = True;
		}
		if ($_POST['mod'] == 'on') {
			$pmod = True;
		}
		$data = array(
		    'Greet' => $pgreet,
		    'logging' => $plog,
		    'automod' => $pmod,
		    'bl' => False,
		    'GreetChannel' => $_POST['greet_c'],
		    'LogChannel' => $_POST['log_c']
		);

		$response = Requests::put($yume_url . '/guild/' . $_SESSION['last_server'], array(), $data, $options);
		$alert = $response->body;
	} 

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $_SESSION['username']; ?> - Yume Bot</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.2/css/bulma.min.css">
    <link rel="stylesheet" href="css/prism.css">
    <link rel="stylesheet" href="css/flag-icon.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link href="https://afeld.github.io/emoji-css/emoji.css" rel="stylesheet">
    <link href="css/tooltip.css" rel="stylesheet">
    <link href="css/timeline.css" rel="stylesheet">
    <link href="css/switch.css" rel="stylesheet">
    <style type="text/css">
		.stat-val {
		  font-size: 3em;
		  padding-top: 20px;
		  font-weight: bold;
		}
		.stat-key {
		  font-size: 1.4em;
		  font-weight: 200;
		}
		.section.profile-heading .column.is-2-tablet.has-text-centered + .has-text-centered {
		  border-left: 1px dotted rgba(0, 0, 0, .2);
		}
		.container.profile {
		  margin-top: 1%;
		}
		.control.is-pulled-left span.select {
		  margin-right: 5px;
		  border-radius: 2px;
		}
		.modal-card .content h1 {
		  padding: 40px 10px 10px;
		  border-bottom: 1px solid #dadada;
		}
		.container.profile .profile-options .tabs ul li.link a {
		  margin-bottom: 20px;
		  padding: 20px;
		  background-color: #f1f1f1;
		}
		.item {
		  position:relative;
		  padding-top:20px;
		  display:inline-block;
		}
		.notify-badge{
		  position: absolute;
		  right:-20px;
		  top:10px;
		  background:red;
		  text-align: center;
		  border-radius: 30px 30px 30px 30px;
		  color:white;
		  padding:5px 10px;
		  font-size:20px;
		}
		.tabcontent {
		  display: none;
		  animation: fadeEffect 1s;
		}
		@keyframes fadeEffect {
		  from {opacity: 0;}
		  to {opacity: 1;}
		}
		.hero.welcome.is-info {
		  background: #36D1DC;
		  background: -webkit-linear-gradient(to right, #5B86E5, #36D1DC);
		  background: linear-gradient(to right, #5B86E5, #36D1DC);
		}
		.hero.welcome .title, .hero.welcome .subtitle {
		  color: hsl(192, 17%, 99%);
		}

    </style>
  </head>
  <body>
	<div class="columns" style="margin-bottom: 0; background: #f5f7fa;">
	  <div class="container profile">
	    <div class="modal" id="edit-preferences-modal">
	      <div class="modal-background"></div>
	      <div class="modal-card">
	        <header class="modal-card-head">
	          <p class="modal-card-title">Edit Profile</p>
	          <button class="delete"></button>
	        </header>
	        <section class="modal-card-body">
	        <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
	          <label class="label">Description</label>
	          <p class="control">
	            <textarea id="desc" name="desc" class="textarea" placeholder="Describe Yourself!"><?php echo $user_info['desc']; ?></textarea>
	          </p>
	          <label class="label">Gender</label>
	          <div class="field">
				  <div class="control">
				    <div class="select is-primary">
				      <select id="gender" name="gender">
				        <option value="unknown">Unknown</option>
				        <option value="male">Male</option>
				        <option value="female">Female</option>
				        <option value="transgender">Transgender</option>
				        <option value="non-binary">Non-Binary</option>
				      </select>
				    </div>
				  </div>
			  </div>
			  <label class="label">To change your lover, please use the YumeBot on Discord</label>
			
	        </section>
	        <footer class="modal-card-foot">
	        	<input class="button is-primary" type="submit" id="send" name="send" value="Save changes">
	          <a class="button modal-cancel">Cancel</a>
	        </footer>
	        </form>
	      </div>
	    </div>
	    <div class="section profile-heading">
	      <div class="columns is-mobile is-multiline">
	        <div class="column is-2">
	          <span class="header-icon user-profile-image">
	          	<div class="item">
	          		<?php if (in_array($_SESSION['id'], $admins)) { ?>
		          	<span class="notify-badge tooltip" data-tooltip="You are Admin. Noice.">ADMIN</span>
		          	<?php } ?>
		            <img style="border-radius: 10%;" src="<?php echo "https://cdn.discordapp.com/avatars/" . $_SESSION['id'] . "/" . $avatar . $ext; ?>"/>
	        	</div>
	          </span>
	        </div>
	        <div class="column is-4-tablet is-10-mobile name">
	          <p>
	            <span class="title is-bold tooltip" data-tooltip="<?php echo $_SESSION['locale']; ?>"><?php echo $_SESSION['username']; ?><span style="font-size: 15px;">#<?php echo $_SESSION['discriminator']; ?></span> <span class="flag-icon flag-icon-<?php echo $_SESSION['locale']; ?>" style="border-radius: 20%"></span></span>
	            <br/>
	            <a class="button is-primary is-outlined" href="#" id="edit-preferences" style="margin: 5px 0">
	              Edit Profile
	            </a>
	            <br/>
	          </p>
	          <p class="tagline">
	            <?php echo $user_info['desc']; ?>
	          </p>
	        </div>
	        <div class="column is-2-tablet is-4-mobile has-text-centered">
	          <p class="stat-val"><?php echo $user_info['level']; ?></p>
	          <p class="stat-key tooltip" data-tooltip="<?php echo $user_info['xp']; ?> xp">level</p>
	        </div>
	        <div class="column is-2-tablet is-4-mobile has-text-centered">
	        	<?php
	        	if ($user_info['gender'] == 'male') {
	        		$gender = "male_fairy";
	        	} elseif ($user_info['gender'] == 'female') {
	        		$gender = "female_fairy";
	        	} elseif ($user_info['gender'] == 'transgender') {
	        		$gender = "boom";
	        	} elseif ($user_info['gender'] == 'unknown') {
	        		$gender = "coffee";
	        	} else {
	        		$gender = "snail";
	        	}
	        	?>

	          <p class="stat-val"><i class="em em-<?php echo $gender; ?>"></i></p>
	          <p class="stat-key tooltip" data-tooltip="<?php echo $user_info['gender']; ?>">gender</p>
	        </div>
	        <div class="column is-2-tablet is-4-mobile has-text-centered">
	          <p class="stat-val">
	        	<?php if ($lover_info['id'] == $_SESSION['id']) { ?>
	        		<i class="em em-sob tooltip" data-tooltip="You are alone !"></i>
	        	<?php } else { ?>
	        		<div class="item">
	        		<span class="notify-badge tooltip" data-tooltip="Your love <3"><i class="fas fa-kiss-wink-heart"></i></span>
	        		<img style="border-radius: 50%; width: 100px; height: 100px;" src="<?php echo "https://cdn.discordapp.com/avatars/" . $lover_info['id'] . "/" . $lover_info['avatar'] . $lov_ext; ?>"/>
	        		</div>
	        	<?php } ?>
	          </p>
	          <p class="stat-key tooltip" data-tooltip="<?php echo $lover_info['username'] . "#" . $lover_info['discriminator']; ?>">lover</p>
	        </div>
	        <a href="logout.php" class="button is-danger is-normal is-rounded" style="margin-right: 10px;">
		        <span class="icon">
		        	<i class="fas fa-times-circle"></i>
		        </span>
		        <span>Disconnection</span>
		    </a>
		    <?php 
		    if (in_array($_SESSION['id'], $admins)) {
				echo '<a href="/admin" class="button is-primary is-normal is-rounded">
		        <span class="icon">
		        	<i class="fas fa-tools"></i>
		        </span>
		        <span>Administration</span>
		    </a>'; }
			?>
			<?php if (isset($alert)) { ?>
				<div class="notification is-primary">
					<?php echo $alert; ?>
				</div>
			<?php } ?>
	      </div>
	    </div>

	    
	  </div>
	</div>

	<div class="tabs is-toggle is-fullwidth is-large">
	  <ul>
	    <li>
	      <a onclick="openTab(event, 'servers')" id="defaultOpen">
	        <span class="icon"><i class="fas fa-box-open"></i></span>
	        <span>Manage your servers</span>
	      </a>
	    </li>
	    <li>
	      <a onclick="openTab(event, 'tl')">
	        <span class="icon"><i class="fas fa-mug-hot"></i></span>
	        <span>Your timeline</span>
	      </a>
	    </li>
	    <li>
	      <a onclick="openTab(event, '3')">
	        <span class="icon"><i class="far fa-question-circle"></i></span>
	        <span>Coming Soon!</span>
	      </a>
	    </li>
	    <li>
	      <a onclick="openTab(event, '4')">
	        <span class="icon"><i class="far fa-question-circle"></i></span>
	        <span>Coming Soon!</span>
	      </a>
	    </li>
	  </ul>
	</div>

	<div id="servers" class="tabcontent">
		
		
		<?php if (!isset($_GET['s']) OR empty($_GET['s'])) { ?>
			<center>
			<p class="stat-key" style="margin-top: 50px; margin-bottom: 20px;">You're using YumeBot on your own server ? Manage it here !</p>
			<div class="select is-info is-large is-rounded">
			   <select onChange="location.href='member.php?s='+this.options[this.selectedIndex].value;">
			     <option>Select a server</option>
			    <?php
			    foreach ($_SESSION['servers'] as $value) { ?>
			     <option value="<?php echo $value['id']; ?>"><?php echo $value['name']; ?></option>
				<?php } ?>
			   </select>
			</div>
			<p class="stat-key" style="margin-top: 50px; font-size: 1em">You can add YumeBot to your server <a href="https://discordapp.com/oauth2/authorize?client_id=456504213262827524&permissions=8&scope=bot">here !</a> (ノ^o^)ノ</p>
			</center>

		<?php } else { 
			$server = $_GET['s'];
			$_SESSION['last_server'] = $server;
			if (!in_array($server, $servers_id) AND !in_array($_SESSION['id'], $admins)) { ?>
				<center>
				<div class="container">
				<article class="message is-danger">
				  <div class="message-body">
				    <b>Error : </b>You are not the owner of this guild
				  </div>
				</article>
				</div>
				<a href="member.php" class="button is-primary is-large is-rounded" style="margin-top: 20px;">
			        <span class="icon">
			        	<i class="fas fa-backward"></i>
			        </span>
			        <span>Back</span>
			    </a>
			    </center>
			<?php } else {
				$options = array(
				    'auth' => new Requests_Auth_Basic(array($yume_user, $yume_key))
				);
				$response = Requests::get($yume_url . '/guild/' . $server, array(), $options);
				$server_info = json_decode($response->body, true);
				var_dump($server_info);
				if (!isset($server_info['_id'])) { ?>
				<center>
				<div class="container">
				<article class="message is-danger">
				  <div class="message-body">
				    <b>Error : </b><?php echo $server_info; ?>
				  </div>
				</article>
				</div>
				<br><p>YumeBot is not on this guild. You can add it <a href='https://discordapp.com/oauth2/authorize?client_id=456504213262827524&permissions=8&scope=bot'>here !</a> (ノ^o^)ノ</p><br>
				<a href="member.php" class="button is-primary is-large is-rounded" style="margin-right: 10px;">
			        <span class="icon">
			        	<i class="fas fa-backward"></i>
			        </span>
			        <span>Back</span>
			    </a>
			    </center>

			<?php } else { ?>
				<div class="container">
					<div class="columns">
						<div class="column is-6">
							<section class="hero is-info welcome is-small">
			                    <div class="hero-body">
			                        <div class="container">
			                            <h1 class="title">
			                                Welcome to your Admin panel !
			                            </h1>
			                            <h2 class="subtitle">
			                                Server ID : <?php echo $server; ?>
			                            </h2>
			                        </div>
			                    </div>
			                </section>
		                </div>

		                <?php 
		                $greet = ['x', 'Disabled', False];
		                $log = ['x', 'Disabled', False];
		                $mod = ['x', 'Disabled', False];
		                if ($server_info['Greet']) {
		                	$greet = ['white_check_mark', 'Enabled', True];
		                }
		                if ($server_info['logging']) {
		                	$log = ['white_check_mark', 'Enabled', True];
		                }
		                if ($server_info['automod']) {
		                	$mod = ['white_check_mark', 'Enabled', True];
		                }
		                ?>

		                <div class="column is-6">
		                	<div class="tile is-ancestor has-text-centered">
		                        <div class="tile is-parent">
		                            <article class="tile is-child box">
		                                <p class="title tooltip" data-tooltip="<?php echo $log[1]; ?>"><i class="em em-<?php echo $log[0]; ?>"></i></p>
		                                <p class="subtitle stat-key">logging</p>
		                            </article>
		                        </div>
		                        <div class="tile is-parent">
		                            <article class="tile is-child box">
		                                <p class="title tooltip" data-tooltip="<?php echo $mod[1]; ?>"><i class="em em-<?php echo $mod[0]; ?>"></i></p>
		                                <p class="subtitle stat-key">automod</p>
		                            </article>
		                        </div>
		                        <div class="tile is-parent">
		                            <article class="tile is-child box">
		                                <p class="title tooltip" data-tooltip="<?php echo $greet[1]; ?>"><i class="em em-<?php echo $greet[0]; ?>"></i></p>
		                                <p class="subtitle stat-key">greet</p>
		                            </article>
		                        </div>

		                    </div>
		                </div>
	            	</div>
	            		<div class="tile is-ancestor has-text-centered">
		                        <div class="tile is-parent">
		                            <article class="tile is-child box">
		                            	<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
			            				<div class="field is-horizontal">
										  <div class="field-label is-normal">
										    <label class="label">Log channel</label>
										  </div>
										  <div class="field-body">
										    <div class="field">
										      <p class="control">
										        <input class="input is-primary" type="text" id="log_c" name="log_c" placeholder="Log Channel" value="<?php echo $server_info['LogChannel']; ?>">
										      </p>
										    </div>
										  </div>
										</div>
										<div class="field is-horizontal">
										  <div class="field-label is-normal">
										    <label class="label">Greet channel</label>
										  </div>
										  <div class="field-body">
										    <div class="field">
										      <p class="control">
										        <input class="input is-primary" type="text" id="greet_c" name="greet_c" placeholder="Greet Channel" value="<?php echo $server_info['GreetChannel']; ?>">
										      </p>
										    </div>
										  </div>
										</div>

		                            </article>
		                        </div>
		                        <div class="tile is-parent">
		                            <article class="tile is-child box">
		                            	
		                            	
		                            	<div class="field">
				            				<input id="log" type="checkbox" name="log" class="switch is-thin" <?php if ($log[2]) {echo "checked='checked'";} ?>>
			  								<label for="log">Turn ON/OFF logging</label>
		  								</div>
		  								<div class="field">
			  								<input id="mod" type="checkbox" name="mod" class="switch is-thin" <?php if ($mod[2]) {echo "checked='checked'";} ?>>
			  								<label for="mod">Turn ON/OFF automod</label>
		  								</div>
		  								<div class="field">
			  								<input id="greet" type="checkbox" name="greet" class="switch is-thin" <?php if ($greet[2]) {echo "checked='checked'";} ?>>
			  								<label for="greet">Turn ON/OFF greet</label>
		  								</div>
		  								
		                            </article>
		                        </div>
		                </div>
		                <center>
		                	<input class="button is-primary" type="submit" id="server" name="server" value="Save changes">
							</form>
						    <a href="member.php" class="button is-primary is-large is-rounded" style="margin-top: 20px;">
						        <span class="icon">
						        	<i class="fas fa-backward"></i>
						        </span>
						        <span>Back</span>
						    </a>
		                </center>
                </div>

		<?php }}} ?>
		


	</div>

	<div id="tl" class="tabcontent">
		<div class="timeline is-centered">
		  <header class="timeline-header">
		    <span class="tag is-medium is-primary">Today</span>
		  </header>
		  <div class="timeline-item is-primary">
		    <div class="timeline-marker is-primary"></div>
		    <div class="timeline-content">
		      <p class="heading">28/12/2018</p>
		      <p>You modified your gender to "Cat"</p>
		    </div>
		  </div>
		  <div class="timeline-item is-danger">
		    <div class="timeline-marker is-danger is-icon">
		      <i class="fa fa-flag"></i>
		    </div>
		    <div class="timeline-content">
		      <p class="heading">12/12/2018</p>
		      <p>Kicked from "Your Server"</p>
		    </div>
		  </div>
		  <header class="timeline-header">
		    <span class="tag is-primary">December</span>
		  </header>
		  <div class="timeline-item is-warning">
		    <div class="timeline-marker is-warning is-icon">
		      <i class="fas fa-exclamation"></i>
		    </div>
		    <div class="timeline-content">
		      <p class="heading">26/11/2018</p>
		      <p>Muted in "Your server"</p>
		    </div>
		  </div>
		  <header class="timeline-header">
		    <span class="tag is-medium is-primary">Hello</span>
		  </header>
		</div>

	<div id="3" class="tabcontent">
		Lorem ipsum
	</div>

	<div id="4" class="tabcontent">
		Lorem ipsum
	</div>

	</div>
	<footer class="footer" style="margin-top: 100px;">
      <div class="content has-text-centered">
        <p>
          &copy; 2018 Yume Network
        </p>
      </div>
    </footer>
  </body>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  <script type="text/javascript">
  	function openTab(evt, tab) {
	  var i, tabcontent, tablinks;

	  tabcontent = document.getElementsByClassName("tabcontent");
	  for (i = 0; i < tabcontent.length; i++) {
	    tabcontent[i].style.display = "none";
	  }

	  tablinks = document.getElementsByClassName("tablinks");
	  for (i = 0; i < tablinks.length; i++) {
	    tablinks[i].className = tablinks[i].className.replace(" active", "");
	  }

	  document.getElementById(tab).style.display = "block";
	  evt.currentTarget.className += " active";
	}
	document.getElementById("defaultOpen").click();
  	$(() => {
	  $('#edit-preferences').click(function(){
	   $('#edit-preferences-modal').addClass('is-active');
	  });
	  $('.modal-card-head button.delete, .modal-save, .modal-cancel').click(function(){
	    $('#edit-preferences-modal').removeClass('is-active');
	  });
	});

  </script>
</html>



<?php


}
} else {
	header('Location : login.php');
}
?>