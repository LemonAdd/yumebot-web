<?php 
$title = 'General';
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
                    <li class="is-right"><a href="/commands/general.php"  class="is-active"><i class="fas fa-chess"></i> General</a></li>
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
                            General
                          </h1>
                        </div>
                    </div>
                  </section>

                  <div class="box">
                    <h4 id="let" class="title is-3"><span class="tag is-info is-large">help</span></h4>
                    <article class="message is-info">
                      <span class="icon has-text-info">
                        <i class="fas fa-info-circle"></i>
                      </span>
                      <div class="message-body">
                        Display the help menu
                      </div>
                    </article>
                    <pre><code class="language-javascript">Usage : --help</code></pre>
                  </div>

                  <div class="box">
                    <h4 id="let" class="title is-3"><span class="tag is-info is-large">ping</span></h4>
                    <article class="message is-info">
                      <span class="icon has-text-info">
                        <i class="fas fa-info-circle"></i>
                      </span>
                      <div class="message-body">
                        Pong !
                      </div>
                    </article>
                    <pre><code class="language-javascript">Usage : --ping</code></pre>
                  </div>

                  <div class="box">
                    <h4 id="let" class="title is-3"><span class="tag is-info is-large">feedback</span></h4>
                    <article class="message is-info">
                      <span class="icon has-text-info">
                        <i class="fas fa-info-circle"></i>
                      </span>
                      <div class="message-body">
                        Send a feedback / Bug report
                      </div>
                    </article>
                    <pre><code class="language-javascript">Usage : --feedback</code></pre>
                  </div>

                  <div class="box">
                    <h4 id="let" class="title is-3"><span class="tag is-info is-large">debug</span></h4>
                    <article class="message is-info">
                      <span class="icon has-text-info">
                        <i class="fas fa-info-circle"></i>
                      </span>
                      <div class="message-body">
                        Ask for a debug (dm only)
                      </div>
                    </article>
                    <pre><code class="language-javascript">Usage : --debug</code></pre>
                  </div>

                  <div class="box">
                    <h4 id="let" class="title is-3"><span class="tag is-info is-large">weather</span> <span class="tag is-info is-normal">mto</span> <span class="tag is-info is-normal">meteo</span></h4>
                    <article class="message is-info">
                      <span class="icon has-text-info">
                        <i class="fas fa-info-circle"></i>
                      </span>
                      <div class="message-body">
                          Display the simple weather
                      </div>
                    </article>
                    <pre><code class="language-javascript">Usage : --weather 'city'</code></pre>
                  </div>

                  <div class="box">
                    <h4 id="let" class="title is-3"><span class="tag is-info is-large">gweather</span> <span class="tag is-info is-normal">gmto</span> <span class="tag is-info is-normal">gmeteo</span></h4>
                    <article class="message is-info">
                      <span class="icon has-text-info">
                        <i class="fas fa-info-circle"></i>
                      </span>
                      <div class="message-body">
                          Display the complete weather
                      </div>
                    </article>
                    <pre><code class="language-javascript">Usage : --gweather 'city'</code></pre>
                  </div>

                  <div class="box">
                    <h4 id="let" class="title is-3"><span class="tag is-info is-large">afk</span> <span class="tag is-info is-normal">idle</span> <span class="tag is-info is-normal">away</span></h4>
                    <article class="message is-info">
                      <span class="icon has-text-info">
                        <i class="fas fa-info-circle"></i>
                      </span>
                      <div class="message-body">
                          Set your status as AFK
                      </div>
                    </article>
                    <pre><code class="language-javascript">Usage : --afk</code></pre>
                  </div>
                  
                </div>
              </div>
          </div>
        </div>
    </section>

<?php include('footer.php'); ?>