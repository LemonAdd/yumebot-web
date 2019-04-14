<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $title; ?> - Yume Bot</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.2/css/bulma.min.css">
    <link rel="stylesheet" href="css/prism.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link href="css/tooltip.css" rel="stylesheet">
    <link href="css/badge.css" rel="stylesheet">
    <link href="css/ribbon.css" rel="stylesheet">
    <style type="text/css">
      .card span.icon {
        float: right;
        font-size: 1.7em;
        padding: 2rem 2rem 0 0;
      }
      .box span.icon {
        float: right;
        font-size: 1.7em;
        padding: 2rem 2rem 0 0;
      }
      .hero.welcome.is-info {
        background: #36D1DC;
        background: -webkit-linear-gradient(to right, #5B86E5, #36D1DC);
        background: linear-gradient(to right, #5B86E5, #36D1DC);
      }
      .is-active {
        background: #36D1DC;
        background: -webkit-linear-gradient(to right, #5B86E5, #36D1DC);
        background: linear-gradient(to right, #5B86E5, #36D1DC);
      }
      .button.is-info {
        background: #36D1DC;
        background: -webkit-linear-gradient(to right, #5B86E5, #36D1DC);
        background: linear-gradient(to right, #5B86E5, #36D1DC);
      }
      .tag.is-info {
        background: #36D1DC;
        background: -webkit-linear-gradient(to right, #5B86E5, #36D1DC);
        background: linear-gradient(to right, #5B86E5, #36D1DC);
      }
      .hero.welcome .title, .hero.welcome .subtitle {
        color: hsl(192, 17%, 99%);
      }
      .promo-block .container {
        margin: 1rem 5rem;
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
    </style>
    <!-- Yandex.Metrika counter -->
    <script type="text/javascript" >
        (function (d, w, c) {
            (w[c] = w[c] || []).push(function() {
                try {
                    w.yaCounter51391486 = new Ya.Metrika2({
                        id:51391486,
                        clickmap:true,
                        trackLinks:true,
                        accurateTrackBounce:true,
                        webvisor:true
                    });
                } catch(e) { }
            });

            var n = d.getElementsByTagName("script")[0],
                s = d.createElement("script"),
                f = function () { n.parentNode.insertBefore(s, n); };
            s.type = "text/javascript";
            s.async = true;
            s.src = "https://mc.yandex.ru/metrika/tag.js";

            if (w.opera == "[object Opera]") {
                d.addEventListener("DOMContentLoaded", f, false);
            } else { f(); }
        })(document, window, "yandex_metrika_callbacks2");
    </script>
    <noscript><div><img src="https://mc.yandex.ru/watch/51391486" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
    <!-- /Yandex.Metrika counter -->
    
  </head>

  <body>
    
    <section class="hero is-dark">
      <div class="hero-body">
        <div class="columns">
          <div class="column is-12">
            <div class="container content">
              <div class="columns">
                <div class="column is-10">
                  <h1 class="title">Yume Bot</h1>
                  <p class="subtitle"><i>A usefull Discord Bot for your server~</i></p>
                </div>
                <div class="column is-2">
                  <a href="#" class="button is-info is-normal is-rounded tooltip" data-tooltip="Coming before 2021" disabled data-badge="8">
                    <span class="icon">
                      <i class="fas fa-chart-line"></i>
                    </span>
                    <span>Your dashboard</span>
                  </a>
                </div>
              </div>
              <a href="https://github.com/yumenetwork/Yume-Bot" target="_blank" class="button is-white is-large">
                <span class="icon">
                  <i class="fab fa-github"></i>
                </span>
                <span>Github</span>
              </a>
              <a href="https://discord.gg/EDbaXxh" target="_blank" class="button is-white is-large">
                <span class="icon">
                  <i class="fab fa-discord"></i>
                </span>
                <span>Discord</span>
              </a>
              <a href="https://discordapp.com/oauth2/authorize?client_id=456504213262827524&permissions=8&scope=bot" target="_blank" class="button is-primary is-large is-rounded">
                <span class="icon">
                  <i class="fas fa-user-check"></i>
                </span>
                <span>Add on your server</span>
              </a>
              <br><br>
              <div class="columns">
                <div class="column is-2">
                  <div class="tags has-addons">
                    <span class="tag is-medium">Version</span>

                    <?php
                    include('config/admin.php');

                    $request = $bdd->prepare('SELECT * FROM changelogs ORDER BY id DESC LIMIT 0,1');
                    $request->execute();

                    $r = $request->fetchAll();

                    ?>



                    <span class="tag is-danger is-medium"><a href="/changelogs.php?id=<?php echo $r['0']['id']; ?>"><?php echo $r['0']['version']; ?></a></span>
                  </div>
                </div>
                <div class="column is-2">
                  <div class="tags has-addons">
                    <span class="tag is-medium">Servers</span>
                    <span class="tag is-danger is-medium">33</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>