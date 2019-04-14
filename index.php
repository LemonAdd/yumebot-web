<?php 
$title = 'Home';
include('header.php');
?>


    <section class="section">
      <div class="container">
        <div class="columns">
          <div class="column is-3">
            <aside class="is-medium menu">
                  <ul class="menu-list">
                    <li class="is-right"><a href="/" class="is-active"><i class="fas fa-home"></i> Home</a></li>
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
                    <li class="is-right"><a href="/credits.php"><i class="fas fa-user"></i> Credits</a></li>
                  </ul>
                </aside>
              </div>
              <div class="column is-9">
                <div class="content is-medium">

                  <section class="hero is-info welcome is-small">
                    <div class="hero-body">
                       <div class="container">
                          <h1 class="title">
                            Home
                          </h1>
                        </div>
                    </div>
                  </section>

                  <div class="card article">
                    <div class="card-content">
                      <h4 id="const" class="title is-3">What's Yume Bot ?</h4>
                      <article class="message is-info">
                        <span class="icon has-text-info">
                        <i class="fas fa-info-circle"></i>
                        </span>
                        <div class="message-body">
                          Simple, basic, practical, useful... In short! Everything you need to manage your server.
                        </div>
                      </article>
                      <h4 id="const" class="title is-3">How to get it ?</h4>
                      <article class="message is-info">
                        <span class="icon has-text-info">
                        <i class="fas fa-info-circle"></i>
                        </span>
                        <div class="message-body">
                          Just press the button on the top !
                        </div>
                      </article>
                      <h4 id="const" class="title is-3">How can I contribute ?</h4>
                      <article class="message is-info">
                        <span class="icon has-text-info">
                        <i class="fas fa-info-circle"></i>
                        </span>
                        <div class="message-body">
                          If you want to help us, you can join our discord
                        </div>
                      </article>
                      <h4 id="const" class="title is-3">Who is the developer ?</h4>
                      <article class="message is-info">
                        <span class="icon has-text-info">
                        <i class="fas fa-info-circle"></i>
                        </span>
                        <div class="message-body">
                          You can see the team <a href="credits.php">here</a> !
                        </div>
                      </article>
                    </div>
                  </div>
                </div>
              </div>
          </div>
        </div>
    </section>


<?php include('footer.php'); ?>