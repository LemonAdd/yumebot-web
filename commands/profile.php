<?php 
$title = 'Profile';
include('../header.php');
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
                    <li><a href="/commands/profile.php"  class="is-active"><i class="fas fa-user"></i> Profile <span class="tag is-danger is-normal">NEW!</span></a></li>
                    <li><a href="/commands/fun.php"><i class="fas fa-basketball-ball"></i> Fun</a></li>
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
                            Profile
                          </h1>
                        </div>
                    </div>
                  </section>
                  <!-- <a href="/login.php">
                  <section class="hero is-info is-bold is-small promo-block">
                      <div class="hero-body" style="background-image: url(https://www.yumenetwork.fr/img/bg_promo.jpg);">
                          <div class="container">
                              <h1 class="title">
                                  <i class="fas fa-glass-cheers"></i> Online profiles have arrived !</h1>
                              <span class="tag is-black is-medium is-rounded">
                                      Click here or on the "Your dashboard" button
                              </span>
                          </div>
                      </div>
                  </section>
                  </a> -->


                  <div class="box">
                    <h4 id="let" class="title is-3"><span class="tag is-info is-large">profile</span></h4>
                    <article class="message is-info">
                      <span class="icon has-text-info">
                        <i class="fas fa-info-circle"></i>
                      </span>
                      <div class="message-body">
                          This is the main command. Use it without any args to show your profile.
                      </div>
                    </article>
                    <pre><code class="language-javascript">Usage : --profile</code></pre>
                  </div>

                  <div class="box">
                    <h4 id="let" class="title is-3"><span class="tag is-info is-large">profile</span> <span class="tag is-danger is-large">get</span></h4>
                    <article class="message is-info">
                      <span class="icon has-text-info">
                        <i class="fas fa-info-circle"></i>
                      </span>
                      <div class="message-body">
                        Show the profile of someone
                      </div>
                    </article>
                    <pre><code class="language-javascript">Usage : --profile get '@user'</code></pre>
                  </div>

                  <div class="box">
                    <h4 id="let" class="title is-3"><span class="tag is-info is-large">profile</span> <span class="tag is-danger is-large">edit</span></h4>
                    <article class="message is-info">
                      <span class="icon has-text-info">
                        <i class="fas fa-info-circle"></i>
                      </span>
                      <div class="message-body">
                        Edit your profile. Just follow the bot.
                      </div>
                    </article>
                    <pre><code class="language-javascript">Usage : --profile edit</code></pre>
                  </div>

                  
                </div>
              </div>
          </div>
        </div>
    </section>

<?php include('footer.php'); ?>