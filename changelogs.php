<?php 
$title = 'Changelogs';
include('header.php');
?>
    <style type="text/css">
    .card {
      margin-top: 60px;
    }
    .author-image {
        position: absolute;
        top: -30px;
        left: 48%;
        width: 100px;
        height: 100px;
        margin-left: -30px;
        border: 3px solid #ccc;
        border-radius: 50%;
    }
    .media-center {
      display: block;
      margin-bottom: 1rem;
    }
    .media-content {
      margin-top: 3rem;
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
    article span.icon {
      float: right;
      font-size: 1.7em;
      padding: 2rem 2rem 0 0;
    }
    </style>


    <section class="section">
      <div class="container">
        <div class="columns">
          <div class="column is-3">
            <aside class="is-medium menu">
                  <ul class="menu-list">
                    <li class="is-right"><a href="/"><i class="fas fa-home"></i> Home</a></li>
                    <li class="is-right"><a href="/changelogs.php" class="is-active"><i class="fas fa-newspaper"></i> Changelogs</a></li>
                  </ul>
                  <p class="menu-label">
                    getting started
                  </p>
                  <ul class="menu-list">
                    <li class="is-right"><a href="/readme.php"><i class="fas fa-book"></i> Read me</a></li>
                  </ul>
                  <p class="menu-label">
                    commands
                  </p>
                  <ul class="menu-list">
                    <li class="is-right"><a href="/commands/general.php"><i class="fas fa-chess"></i> General</a></li>
                    <li><a href="/commands/utils.php"><i class="fas fa-calendar-check"></i> Utils</a></li>
                    <li><a href="/commands/profile.php"><i class="fas fa-user"></i> Profile <span class="tag is-danger is-normal">NEW!</span></a></li>
                    <li><a href="/commands/fun.php"><i class="fas fa-basketball-ball "></i> Fun</a></li>
                    <li><a href="/commands/about.php"><i class="fas fa-question-circle"></i> About</a></li>
                    <li><a href="/commands/mods.php"><i class="fas fa-fire"></i> Mods</a></li>
                    <li><a href="/commands/admin.php"><i class="fas fa-briefcase"></i> Admin</a></li>
                  </ul>
                  <p class="menu-label">
                    Informations
                  </p>
                  <ul class="menu-list">
                    <li class="is-right"><a href="/credits.php"><i class="fas fa-user"></i> Credits</a></li>
                  </ul>
                </aside>
              </div>
              <div class="column is-9">
                <div class="content is-medium">

                  <?php
                    include 'config/admin.php';

                    if (!isset($_GET['id']) OR empty($_GET['id'])) {
                  ?>
                  <section class="hero is-info welcome is-small">
                    <div class="hero-body">
                       <div class="container">
                          <h1 class="title">
                            Changelogs
                          </h1>
                        </div>
                    </div>
                  </section>

                  <?php 
                      $articles = $bdd->query('SELECT * FROM changelogs ORDER BY id DESC'); 
                      $i = 0;
                      while($m = $articles->fetch()) {
                  ?>

                  <div class="card article">
                      <div class="card-content">
                          <div class="media">
                              <div class="media-center">
                                  <img src="<?php echo $m['avatar']; ?>" class="author-image">
                              </div>
                              <div class="media-content has-text-centered">
                                <p class="title article-title"><a href="changelogs.php?id=<?php echo $m['id']; ?>"><?php echo $m['version']; ?> - Changelogs</a> <?php if ($i == 0) { echo "<span class='tag is-danger is-normal has-text-white'>NEW!</span>"; } ?></p>
                                <p class="subtitle is-6 article-subtitle">
                                  By <a href="#">@<?php echo $m['author']; ?></a> on <?php echo $m['date_changelog']; ?>
                                </p>
                                <a href="changelogs.php?id=<?php echo $m['id']; ?>" class="button is-normal is-info">Read more <i class="fas fa-arrow-circle-right" style="margin-left: 10px;"></i></a>
                              </div>
                          </div>
                      </div>
                  </div>

                  <?php $i = 1; }} else { 

                      $get_id = htmlspecialchars($_GET['id']);
                      $article = $bdd->prepare('SELECT * FROM changelogs WHERE id = ?');
                      $article->execute(array($get_id));

                      if ($article->rowCount() == 1) {
                        
                        $article = $article->fetch();


                      } else {
                        die('Cet article n\'existe pas');
                      }


                  ?>

                  <div class="card article">
                      <div class="card-content">
                          <div class="media">
                              <div class="media-center">
                                  <img src="<?php echo $article['avatar']; ?>" class="author-image">
                              </div>
                              <div class="media-content has-text-centered">
                                <p class="title article-title"><?php echo $article['version']; ?> - Changelogs</p>
                                <p class="subtitle is-6 article-subtitle">
                                  By <a href="#">@<?php echo $article['author']; ?></a> on <?php echo $article['date_changelog']; ?>
                                </p>

                              </div>
                          </div>
                          <?php $content = html_entity_decode($article['content']);
                          echo $content; ?>
                      </div>
                  </div>


                  <div class="card article">
                    <div class="card-content">
                      <h1>Comments</h1>
                      <hr>
                      <div id="disqus_thread"></div>
                      <script>
                      (function() { // DON'T EDIT BELOW THIS LINE
                      var d = document, s = d.createElement('script');
                      s.src = 'https://yumenetwork.disqus.com/embed.js';
                      s.setAttribute('data-timestamp', +new Date());
                      (d.head || d.body).appendChild(s);
                      })();
                      </script>
                      <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
                    </div>
                  </div>

                  <center><a href="changelogs.php" class="button is-medium is-info" style="margin-top: 50px;"><i class="fas fa-arrow-circle-left" style="margin-right: 10px;"></i>Back</a></center>




                    
                  <?php } ?>

                </div>
              </div>
          </div>
        </div>
    </section>


<?php include('footer.php'); ?>