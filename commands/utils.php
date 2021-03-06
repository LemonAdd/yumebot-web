<?php 
$title = 'Utils';
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
                    <li><a href="/commands/utils.php" class="is-active"><i class="fas fa-calendar-check"></i> Utils</a></li>
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
                            Utils
                          </h1>
                        </div>
                    </div>
                  </section>


                  <div class="box">
                    <h4 id="let" class="title is-3"><span class="tag is-info is-large">info</span> <span class="tag is-info is-normal">server</span></h4>
                    <article class="message is-info">
                      <span class="icon has-text-info">
                        <i class="fas fa-info-circle"></i>
                      </span>
                      <div class="message-body">
                          Display informations about the server
                      </div>
                    </article>
                    <pre><code class="language-javascript">Usage : --info</code></pre>
                  </div>

                  <div class="box">
                    <h4 id="let" class="title is-3"><span class="tag is-info is-large">members</span></h4>
                    <article class="message is-info">
                      <span class="icon has-text-info">
                        <i class="fas fa-info-circle"></i>
                      </span>
                      <div class="message-body">
                          How many members ?
                      </div>
                    </article>
                    <pre><code class="language-javascript">Usage : --members</code></pre>
                  </div>

                  <div class="box">
                    <h4 id="let" class="title is-3"><span class="tag is-info is-large">owner</span></h4>
                    <article class="message is-info">
                      <span class="icon has-text-info">
                        <i class="fas fa-info-circle"></i>
                      </span>
                      <div class="message-body">
                        Who is the server owner ?
                      </div>
                    </article>
                    <pre><code class="language-javascript">Usage : --owner</code></pre>
                  </div>

                  <div class="box">
                    <h4 id="let" class="title is-3"><span class="tag is-info is-large">whois</span></h4>
                    <article class="message is-info">
                      <span class="icon has-text-info">
                        <i class="fas fa-info-circle"></i>
                      </span>
                      <div class="message-body">
                        Get informations about a member
                      </div>
                    </article>
                    <pre><code class="language-javascript">Usage : --whois '@user'</code></pre>
                  </div>

                  <div class="box">
                    <h4 id="let" class="title is-3"><span class="tag is-info is-large">hackwhois</span></h4>
                    <article class="message is-info">
                      <span class="icon has-text-info">
                        <i class="fas fa-info-circle"></i>
                      </span>
                      <div class="message-body">
                        Get informations about an user
                      </div>
                    </article>
                    <pre><code class="language-javascript">Usage : --hackwhois 'id'</code></pre>
                  </div>

                  <div class="box">
                    <h4 id="let" class="title is-3"><span class="tag is-info is-large">avatar</span></h4>
                    <article class="message is-info">
                      <span class="icon has-text-info">
                        <i class="fas fa-info-circle"></i>
                      </span>
                      <div class="message-body">
                          Download an avatar
                      </div>
                    </article>
                    <pre><code class="language-javascript">Usage : --avatar '@user'</code></pre>
                  </div>

                  <div class="box">
                    <h4 id="let" class="title is-3"><span class="tag is-info is-large">icon</span></h4>
                    <article class="message is-info">
                      <span class="icon has-text-info">
                        <i class="fas fa-info-circle"></i>
                      </span>
                      <div class="message-body">
                          Get the server icon
                      </div>
                    </article>
                    <pre><code class="language-javascript">Usage : --icon</code></pre>
                  </div>

                  <div class="box">
                    <h4 id="let" class="title is-3"><span class="tag is-info is-large">roleinfo</span></h4>
                    <article class="message is-info">
                      <span class="icon has-text-info">
                        <i class="fas fa-info-circle"></i>
                      </span>
                      <div class="message-body">
                          Display informations about a role
                      </div>
                    </article>
                    <pre><code class="language-javascript">Usage : --roleinfo '@role'</code></pre>
                  </div>

                  <div class="box">
                    <h4 id="let" class="title is-3"><span class="tag is-info is-large">invite</span></h4>
                    <article class="message is-info">
                      <span class="icon has-text-info">
                        <i class="fas fa-info-circle"></i>
                      </span>
                      <div class="message-body">
                          Create an invitation
                      </div>
                    </article>
                    <pre><code class="language-javascript">Usage : --invite</code></pre>
                  </div>
                  
                </div>
              </div>
          </div>
        </div>
    </section>

<?php include('footer.php'); ?>