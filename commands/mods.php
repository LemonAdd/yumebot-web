<?php 
$title = 'Mods';
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
                    <li><a href="/commands/profile.php"><i class="fas fa-user"></i> Profile <span class="tag is-danger is-normal">NEW!</span></a></li>
                    <li><a href="/commands/fun.php"><i class="fas fa-basketball-ball "></i> Fun</a></li>
                    <li><a href="/commands/about.php"><i class="fas fa-question-circle"></i> About</a></li>
                    <li><a href="/commands/mods.php" class="is-active"><i class="fas fa-fire"></i> Mods</a></li>
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
                            Mods
                          </h1>
                        </div>
                    </div>
                  </section>


                  <div class="box">
                    <h4 id="let" class="title is-3"><span class="tag is-info is-large">mute</span> <span class="tag is-info is-normal">chut</span> <span class="tag is-info is-normal">tg</span></h4>
                    <article class="message is-info">
                      <span class="icon has-text-info">
                        <i class="fas fa-info-circle"></i>
                      </span>
                      <div class="message-body">
                          Mute someone
                      </div>
                    </article>
                    <pre><code class="language-javascript">Usage : --mute '@user' 'time m/h/d' 'reason'</code></pre>
                  </div>

                  <div class="box">
                    <h4 id="let" class="title is-3"><span class="tag is-info is-large">unmute</span></h4>
                    <article class="message is-info">
                      <span class="icon has-text-info">
                        <i class="fas fa-info-circle"></i>
                      </span>
                      <div class="message-body">
                          Unmute
                      </div>
                    </article>
                    <pre><code class="language-javascript">Usage : --unmute '@user'</code></pre>
                  </div>

                  <div class="box">
                    <h4 id="let" class="title is-3"><span class="tag is-info is-large">ban</span> <span class="tag is-info is-normal">ciao</span></h4>
                    <article class="message is-info">
                      <span class="icon has-text-info">
                        <i class="fas fa-info-circle"></i>
                      </span>
                      <div class="message-body">
                        Ban someone
                      </div>
                    </article>
                    <pre><code class="language-javascript">Usage : --ban '@user' 'reason'</code></pre>
                  </div>

                  <div class="box">
                    <h4 id="let" class="title is-3"><span class="tag is-info is-large">hackban</span> <span class="tag is-info is-normal">preventban</span> <span class="tag is-info is-normal">idban</span> <span class="tag is-info is-normal">preban</span></h4>
                    <article class="message is-info">
                      <span class="icon has-text-info">
                        <i class="fas fa-info-circle"></i>
                      </span>
                      <div class="message-body">
                        Ban someone from the ID (prevent ban)
                      </div>
                    </article>
                    <pre><code class="language-javascript">Usage : --hackban 'id' 'reason'</code></pre>
                  </div>

                  <div class="box">
                    <h4 id="let" class="title is-3"><span class="tag is-info is-large">unban</span></h4>
                    <article class="message is-info">
                      <span class="icon has-text-info">
                        <i class="fas fa-info-circle"></i>
                      </span>
                      <div class="message-body">
                        Unban
                      </div>
                    </article>
                    <pre><code class="language-javascript">Usage : --unban 'id'</code></pre>
                  </div>

                  <div class="box">
                    <h4 id="let" class="title is-3"><span class="tag is-info is-large">massban</span></h4>
                    <article class="message is-info">
                      <span class="icon has-text-info">
                        <i class="fas fa-info-circle"></i>
                      </span>
                      <div class="message-body">
                          Massban from ID (prevent ban)
                      </div>
                    </article>
                    <pre><code class="language-javascript">Usage : --massban 'reason' 'ids'</code></pre>
                  </div>

                  <div class="box">
                    <h4 id="let" class="title is-3"><span class="tag is-info is-large">kick</span> <span class="tag is-info is-normal">away</span></h4>
                    <article class="message is-info">
                      <span class="icon has-text-info">
                        <i class="fas fa-info-circle"></i>
                      </span>
                      <div class="message-body">
                          Kick someone
                      </div>
                    </article>
                    <pre><code class="language-javascript">Usage : --kick '@user' 'reason'</code></pre>
                  </div>

                  <div class="box">
                    <h4 id="let" class="title is-3"><span class="tag is-info is-large">purge</span> <span class="tag is-info is-normal">clean</span> <span class="tag is-info is-normal">clear</span></h4>
                    <article class="message is-info">
                      <span class="icon has-text-info">
                        <i class="fas fa-info-circle"></i>
                      </span>
                      <div class="message-body">
                          Purge the chat
                      </div>
                    </article>
                    <pre><code class="language-javascript">Usage : --purge 'number'</code></pre>
                  </div>
                  
                </div>
              </div>
          </div>
        </div>
    </section>

<?php include('footer.php'); ?>