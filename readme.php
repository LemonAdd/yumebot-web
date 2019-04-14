<?php 
$title = 'Read me';
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
                    <li class="is-right"><a href="/readme.php" class="is-active"><i class="fas fa-book"></i> Read me</a></li>
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
                            Read Me
                          </h1>
                        </div>
                    </div>
                  </section>

                  <div class="box">
                      <h4 id="const" class="title is-3">Yume Bot</h4>
                      <article class="message is-info">
                        <span class="icon has-text-info">
                        <i class="fas fa-info-circle"></i>
                        </span>
                        <div class="message-body">
                          An useful bot for discord
                        </div>
                      </article>
                      <h4 id="const" class="title is-3">About the Project</h4>
                      <article class="message is-info">
                        <span class="icon has-text-info">
                        <i class="fas fa-info-circle"></i>
                        </span>
                        <div class="message-body">
                          We provide an useful discord bot and want to improve the discord community
                        </div>
                      </article>
                      <h4 id="const" class="title is-3">Project status</h4>
                      <article class="message is-info">
                        <span class="icon has-text-info">
                        <i class="fas fa-info-circle"></i>
                        </span>
                        <div class="message-body">
                          The project is still in the process of being developed! We are only at the beginning so don't hesitate to help us.
                        </div>
                      </article>
                      <article class="message is-danger">
                        <span class="icon has-text-danger">
                        <i class="fas fa-exclamation-circle"></i>
                        </span>
                        <div class="message-body">
                          We are looking for python developers and community managers.
                        </div>
                      </article>
                      
                      <h4 id="const" class="title is-3">Release Process & Versioning</h4>
                      <article class="message is-info">
                        <span class="icon has-text-info">
                        <i class="fas fa-info-circle"></i>
                        </span>
                        <div class="message-body">
                          We regularly update the bot regularly!<br>
                          This project uses Semantic Versioning. For a list of available versions, see <a href="https://github.com/yumenetwork/Yume-bot/tags">the repository tag list</a>.
                        </div>
                      </article>
                      <h4 id="const" class="title is-3">How to get help ?</h4>
                      <article class="message is-warning">
                        <span class="icon has-text-warning">
                        <i class="fas fa-exclamation-circle"></i>
                        </span>
                        <div class="message-body">
                          <ul>
                            <li><a href="mailto:contact@yumenetwork.fr">Email</a></li>
                            <li><a href="https://invite.gg/yumenetwork%E2%80%8B">Discord</a></li>
                          </ul>
                        </div>
                      </article>
                      <h4 id="const" class="title is-3">Contributing</h4>
                      <article class="message is-info">
                        <span class="icon has-text-info">
                        <i class="fas fa-info-circle"></i>
                        </span>
                        <div class="message-body">
                          We encourage public contributions!<br>Please review <a href="https://github.com/yumenetwork/Yume-Bot/blob/master/.github/CONTRIBUTING.md">CONTRIBUTING.md</a> for details on our code of conduct and development process.
                        </div>
                      </article>
                      <h4 id="const" class="title is-3">Further Reading</h4>
                      <article class="message is-info">
                        <span class="icon has-text-info">
                        <i class="fas fa-info-circle"></i>
                        </span>
                        <div class="message-body">
                          <ul>
                            <li><a href="https://github.com/yumenetwork/Yume-Bot">Code</a></li>
                            <li><a href="https://invite.gg/yumenetwork">Support</a></li>
                          </ul>
                        </div>
                      </article>
                      <h4 id="const" class="title is-3">License</h4>
                      <article class="message is-warning">
                        <span class="icon has-text-warning">
                        <i class="fas fa-exclamation-circle"></i>
                        </span>
                        <div class="message-body">
                          Copyright &copy; 2017 Embedded Artistry LLC<br>This project is licensed under the MIT License - see <a href="https://yumenetwork.gitbook.io/yumebot/getting-started/LICENSE.md">LICENSE.md</a> file for details.
                        </div>
                      </article>
                      <h4 id="const" class="title is-3">Authors</h4>
                      <article class="message is-info">
                        <span class="icon has-text-info">
                        <i class="fas fa-info-circle"></i>
                        </span>
                        <div class="message-body">
                          You can check the team <a href="credits.php">here</a> !
                        </div>
                      </article>
                      <h4 id="const" class="title is-3">Acknowledgments</h4>
                      <article class="message is-info">
                        <span class="icon has-text-info">
                        <i class="fas fa-info-circle"></i>
                        </span>
                        <div class="message-body">
                          Provide proper credits, shoutouts, and honorable mentions here. Also provide links to relevant repositories, blog posts, or contributors worth mentioning.<br>Give proper credits. This could be a link to any repo which inspired you to build this project, any blogposts or links to people who contributed in this project. If you used external code, link to the original source.
                        </div>
                      </article>
                    </div>
                </div>
              </div>
          </div>
        </div>
    </section>


<?php include('footer.php'); ?>