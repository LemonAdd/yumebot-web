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
    <link href="css/tooltip.css" rel="stylesheet">
    <style type="text/css">
    	.hero-body {
    		background-image: url(https://www.yumenetwork.fr/img/bg_promo.jpg);
			background-position: center;
			background-size: cover;
			background-repeat: no-repeat;
			height: 500px;
		}
		.articles {
		  margin: 5rem 0;
		  margin-top: -200px;
		}
		.articles .content p {
		    line-height: 1.9;
		    margin: 15px 0;
		}
		.media-center {
		  display: block;
		  margin-bottom: 1rem;
		}
		.media-content {
		  margin-top: 3rem;
		}
		div.column.is-8:first-child {
		  padding-top: 0;
		  margin-top: 0;
		}
		.article-title {
		  font-size: 2rem;
		  font-weight: lighter;
		  line-height: 2;
		}
		.article-subtitle {
		  color: #909AA0;
		  margin-bottom: 3rem;
		}
		.article-body {
		  line-height: 1.4;
		  margin: 0 6rem;
		  margin-top: 30px;
		}
		.tag.is-info {
	        background: #36D1DC;
	        background: -webkit-linear-gradient(to right, #5B86E5, #36D1DC);
	        background: linear-gradient(to right, #5B86E5, #36D1DC);
	    }
	    .button.is-info {
	        background: #36D1DC;
	        background: -webkit-linear-gradient(to right, #5B86E5, #36D1DC);
	        background: linear-gradient(to right, #5B86E5, #36D1DC);
	    }
    </style>
  </head>
  <body>

  	<section class="hero is-info is-medium is-bold">
        <div class="hero-body">
            <div class="container has-text-centered">
                <h1 class="title"><span class="tag is-info is-large is-rounded" style="font-size: 25px;">Your Dasboard</span></h1>
            </div>
        </div>
    </section>

	<div class="container">
		<section class="articles">
			<div class="column is-8 is-offset-2">
                <div class="card article">
                    <div class="card-content">
                        <div class="media">
                            <div class="media-content has-text-centered">
                                <p class="title article-title">Welcome back Hero.<br> What type of dungeon are we going to do today ?</p><hr>
                            </div>
                        </div>
                        <div class="content article-body has-text-centered">
                        	<a href="https://discordapp.com/api/oauth2/authorize?client_id=514133842869616651&redirect_uri=https%3A%2F%2Fwww.yumenetwork.fr%2Fget_user.php&response_type=code&scope=identify%20email%20guilds" class="button is-info is-large is-rounded">
						        <span class="icon">
						        	<i class="fas fa-sign-out-alt"></i>
						        </span>
						        <span>Connection (using Discord)</span>
						    </a><br>
						    <a href="/" class="button is-danger is-large is-rounded" style="margin-top: 20px;">
						        <span class="icon">
						        	<i class="fas fa-times-circle"></i>
						        </span>
						        <span>Nah, I give up</span>
						    </a>
                        </div>
                    </div>
            	</div>
	    </section>
	</div>

	<footer class="footer" style="margin-top: 100px;">
      <div class="content has-text-centered">
        <p>
          &copy; 2018 Yume Network
        </p>
      </div>
    </footer>
  </body>
</html>