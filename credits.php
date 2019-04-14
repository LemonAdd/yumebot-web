<?php 
$title = 'Credits';
include('header.php');
?>


    <section class="section">
      <div class="container">
        <div class="columns">
          <div class="column is-3">
            <aside class="is-medium menu">
                  <ul class="menu-list">
                    <li class="is-right"><a href="/"><i class="fas fa-home"></i> Home</a></li>
                    <li class="is-right"><a href="/changelogs.php"><i class="fas fa-newspaper"></i> Changelogs</a></li>
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
                    <li class="is-right"><a href="/credits.php" class="is-active"><i class="fas fa-user"></i> Credits</a></li>
                  </ul>
                </aside>
              </div>
              <div class="column is-9">
                <div class="content is-medium">

                  <section class="hero is-info welcome is-small">
                    <div class="hero-body">
                       <div class="container">
                          <h1 class="title">
                            Our team
                          </h1>
                        </div>
                    </div>
                  </section>

                  <h3 class="title"><span class="icon has-text-danger" style="margin-right: 10px;"><i class="fas fa-briefcase"></i></span> Lead Team</h1>

                  <div class="box">
                    <div class="columns">
                      <div class="column is-3">
                        <figure class="image is-96x96">
                          <img class="is-rounded" src="https://avatars1.githubusercontent.com/u/43623834">
                        </figure>
                      </div>
                      <div class="column">
                        <h1 class="title">Yume <a href="https://github.com/yumenetwork"><span class="icon has-text-dark"><i class="fab fa-github"></i></span></a></h1>
                        <span class="tag is-danger is-medium">
                          Owner
                        </span>
                        <span class="tag is-info is-medium">
                          Lead Developer
                        </span>
                        <span class="tag is-primary is-normal">
                          Bot
                        </span>
                      </div>
                    </div>
                  </div>

                  <h3 class="title"><span class="icon has-text-info" style="margin-right: 10px;"><i class="fas fa-laptop"></i></span> Dev Team</h1>

                  <div class="box">
                    <div class="columns">
                      <div class="column is-3">
                        <figure class="image is-96x96">
                          <img class="is-rounded" src="https://avatars2.githubusercontent.com/u/17110657">
                        </figure>
                      </div>
                      <div class="column">
                        <h1 class="title">LemonAdd <a href="https://github.com/LemonAdd"><span class="icon has-text-dark"><i class="fab fa-github"></i></span></a></h1>
                        <span class="tag is-info is-medium">
                          Developer
                        </span>
                        <span class="tag is-primary is-normal">
                          Website
                        </span>
                        <span class="tag is-primary is-normal">
                          Bot
                        </span>
                      </div>
                    </div>
                  </div>

                  <h3 class="title"><span class="icon has-text-success" style="margin-right: 10px;"><i class="fas fa-hand-holding-heart"></i></span> Contributors</h1>

                  <div class="box">
                    <div class="columns">
                      <div class="column is-3">
                        <figure class="image is-96x96">
                          <img class="is-rounded" src="https://avatars1.githubusercontent.com/u/19573589">
                        </figure>
                      </div>
                      <div class="column">
                        <h1 class="title">Zenrac <a href="https://github.com/Zenrac"><span class="icon has-text-dark"><i class="fab fa-github"></i></span></a></h1>
                        <span class="tag is-success is-medium">
                          Contributor
                        </span>
                      </div>
                    </div>
                  </div>

                  <div class="box">
                    <div class="columns">
                      <div class="column is-3">
                        <figure class="image is-96x96">
                          <img class="is-rounded" src="https://avatars0.githubusercontent.com/u/33735357">
                        </figure>
                      </div>
                      <div class="column">
                        <h1 class="title">Ondebian <a href="https://github.com/OnDebian"><span class="icon has-text-dark"><i class="fab fa-github"></i></span></a></h1>
                        <span class="tag is-success is-medium">
                          Contributor
                        </span>
                      </div>
                    </div>
                  </div>
                  
                </div>
              </div>
          </div>
        </div>
    </section>

<?php include('footer.php'); ?>