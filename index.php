<?php require 'lib/config.php'; ?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title>La troupe d'impro les Quesapelorio</title>

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="La troupe d'impro les Quesapelorio" property='og:title' />
    <meta content="http://quesapelorio.com/" property="og:url" />
    <meta content="/assets/img/logo-carre.png" property="og:image" />
    <meta content="Quesapelorio" property="og:site_name" />
    <meta content="Quesapelorio est une troupe d’improvisation théâtrale à Paris qui fait des Cabarets d'impro festifs, explosifs et survoltés tous les 4èmes jeudis de chaque mois" />
    <meta name="description" content="Quesapelorio est une troupe d’improvisation théâtrale à Paris qui fait des Cabarets d'impro festifs, explosifs et survoltés tous les 4èmes jeudis de chaque mois">

    <link rel="icon" href="assets/img/favicon2.png">
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Chivo:400,900" />
  </head>
  <body>

    <!--[if lt IE 9]>
        <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <script>window.html5 || document.write('<script src="assets/js/vendor/html5shiv.js"><\/script>')</script>
    <![endif]-->
    <!--[if lt IE 7]>
      <p class="chromeframe">Vous utilisez un <strong>vieux</strong> navigateur. La honte. Merci <a href="http://browsehappy.com/">de mettre à jour votre navigateur</a> ou <a href="http://www.google.com/chromeframe/?redirect=true">d'activer Google Chrome Frame</a> avant que quelqu'un ne vous voie faire.</p>
    <![endif]-->

    <div class="container">

      <div class="cells">
        <div class="row">
          <header class="cell logo">
            <img src="assets/img/logo.png" alt="Quesapelorio" width="189" height="261" />
            <h1 class="logo-text">
              Quesapelorio
              <i class="goutte"></i>
            </h1>
          </header>

          <section class="cell vevent prochain-evenement">
            <h2 class="gamma titre-evenement">
              Notre prochain
              <div class="beta type-evenement">
                Cabaret d'Improvisation
              </div>
            </h2>

            <?php if ($event) : ?>

              <?php if ($event->description()) : ?>
                <p>
                  <?php echo nl2br($event->description()) ?>
                </p>
              <?php endif; ?>

              <?php if ($event->date()) : ?>
                <p>
                  <svg class="icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" width="20px" height="20px" viewBox="0 0 100 100" enable-background="new 0 0 100 100" fill="white">
                    <path d="M0,0v100h100V0H0z M93.164,93.164H6.836V25.469h86.328V93.164z"></path>
                    <text x="50" y="80" style="text-anchor: middle; font: 50px Helvetica, sans-serif;text-shadow: none"
                      ><?php echo $event->day() ?></text>
                  </svg>
                  <time datetime="<?php echo $event->timestamp() ?>" class="dtstart">
                    <?php echo $event->weekday() ?>
                    <strong><?php echo $event->day() ?> <?php echo $event->month() ?></strong>
                    à <?php echo $event->hour() ?>h
                  </time>
                </p>
              <?php endif; ?>

              <?php if ($event->location() == "3arts") : ?>
                <p>
                  <i class="icon-map-marker"></i>
                  Au <strong>3 arts</strong>,
                  <a href="#les3arts" class="location go-down">21 rue des rigoles, 75020 Paris</a>
                  <abbr class="metro" title="Métro">M</abbr>&nbsp;Jourdain
                </p>

                <p>
                  1h30 de <strong>spectacle vivant</strong>
                  durant lesquelles
                  5 comédiens
                  <strong>improviseront devant vous</strong>
                  sur les thèmes que <strong>vous</strong> allez écrire.
                </p>

                <p>
                  <strong>Entrée gratuite</strong>, conso obligatoire à prendre en bas.
                  Possibilité de boire et manger sur place.
                </p>
              <?php endif; ?>

              <?php if ($event->facebook_url()) : ?>
                <p>
                  <big><a href="<?php echo h($event->facebook_url()) ?>">S'inscrire sur Facebook</a></big>
                </p>
              <?php endif; ?>

            <?php else : ?>

              <p>Très prochainement, sans doute le quatrième jeudi du mois.</p>

            <?php endif; ?>

          </section>
        </div>
      </div>

      <hr>

      <section class="social">
        <h2 class="section-title">Aimez-nous</h2>
        <div class="cells">
          <div class="row">
            <div class="cell4 facebook">
              <h3>Facebook</h3>
              <div class="fb-like" data-href="https://www.facebook.com/Quesapelorio" data-send="false" data-width="300" data-show-faces="true" data-font="tahoma"></div>
            </div>
            <div class="cell4 twitter">
              <h3>Twitter</h3>
              <a class="twitter-follow-button" href="https://twitter.com/quesapelorio" data-show-count="false" data-lang="fr" data-size="large">Suivre @quesapelorio</a>
            </div>
            <div class="cell4 newsletter">
              <h3>Newsletter</h3>
              <a href="http://eepurl.com/v6G19">La newsletter des Quesapelorio</a>
            </div>
          </div>
        </div>
      </section>

      <hr>

      <section>
        <h2 class="section-title">Quezak-eau&nbsp;?</h2>
        <p>
          <span class="quesa">Quesapelorio</span> est une <strong>troupe d’improvisation théâtrale</strong>
          à Paris qui fait des <strong>Cabarets d'impro</strong>
          festifs, explosifs et survoltés
          tous les <strong>4<sup>èmes</sup> jeudis</strong> de chaque mois.
        </p>

        <p>
          La légende raconte qu’il existait un homme du nom de <strong>Hugo</strong>
          qui, un soir de <strong>terrible orage</strong>,
          mis au monde 5 bêtes <strong>étranges</strong> aux dialogues <strong>tordus</strong>
          et à l’esprit <strong>lointain</strong>.
        </p>
        <p>
          Il nomma ses enfants <span class="quesa">Quesapelorio</span>.
          Ces derniers, pour lui faire plaisir, montèrent une
          troupe <strong>d’improvisation théâtrale</strong>.
        </p>

      </section>

      <hr>

      <section>
        <h2 class="section-title">Les improvisateurs</h2>

        <dl class="face-tabs" data-face-tab-container=".face-tab-current">
          <dt>
            <div class="face"><img src="assets/img/faces/brahim.gif" alt="Improvisateur Brahim" /></div>
            <div class="nom">Brahim</div>
          </dt>
          <dd>
            L’enfant du soleil, qui parcourt la terre le ciel, véritable
            <strong>jukebox</strong> musical et imitateur de dialogue de film… «&nbsp;Virginie…
            J’me suis cassé le coccyx&nbsp;». Il peut <strong>chauffer une salle</strong> en 30 secondes,
            lancer une <strong>chorégraphie</strong> de groupe sur Rasputin (Boney M)
            en 15 secondes, vous mettre une chanson dans la tête en
            5 secondes («&nbsp;<strong>Toii… ma copiiiiineeeuu</strong>&nbsp;»)
            et <strong>vous faire rire</strong> instantanément&nbsp;!
          </dd>

          <dt>
            <div class="face"><img src="assets/img/faces/cecile.gif" alt="Improvisatrice Cécile" /></div>
            <div class="nom">Cécile</div>
          </dt>
          <dd>
            Ohh méfiez vous de l’eau qui dort, elle peut parfois vous
            laisser de marbre et vous surprendre par <strong>des voies impénétrables</strong>.
            C’est le cas de Cécile. une fille <strong>qui a des couilles</strong>…
            enfin qui les mime super bien pour notre <strong>plus grand plaisir</strong>.
            Quand elle n’est pas conducteur (ou trice… ça dépend des couilles)
            de 15 tonnes à se renifler les dessous de bras dans le salon
            devant un match de foot, elle est perdue au milieu de
            la cours de récré, pas plus haute que 3 pommes avec
            <strong>un petit regard innocent</strong>… ou abruti ahahh.
          </dd>

          <dt>
            <div class="face"><img src="assets/img/faces/david.gif" alt="Improvisateur David" /></div>
            <div class="nom">David</div>
          </dt>
          <dd>
            Comment David fait-il pour avoir cette <strong>incroyable présence scénique</strong>,
            pour avoir des personnages bien ancrés et des <strong>dialogues pointus</strong>
            qui atteignent toujours leurs cibles&nbsp;?
            Et bien David est <strong>triple champion de France</strong> de fléchettes magnétiques
            (et vice champion d’Aquitaine de fléchettes/échec)
            et un jour il a décidé de passer du lancer de fléchettes
            <strong>au lancer de mots</strong>.
            Mais il a gardé cette rigueur, cette énergie
            et cette préparation de <strong>sportif de haut niveau</strong>
            qui font de lui un chirurgien de l’impro.
          </dd>

          <dt>
            <div class="face"><img src="assets/img/faces/dorothee.gif" alt="Improvisateur Dorothée" /></div>
            <div class="nom">Dorothée</div>
          </dt>
          <dd>
            Dorothée, c’est d’abord une voix. Qu’on attendait pas — en tout cas pas
            comme ça. Des (très) aigus aux graves, du zouk au flamenco, Dorothée
            <strong>transcende</strong> chaque note. Et c’est baroque, et vous
            supplierez pour que ça dure toujours, mais à la fin ça finira.
            Dorothée reprendra <strong>possession de son corps</strong>,
            pour incarner une femme pressée, un homme retardé, une pendule de salon.
            Car Dorothée peut tout, <strong>pour vous faire rire</strong>.
          </dd>

          <dt>
            <div class="face"><img src="assets/img/faces/hugo.gif" alt="Improvisateur Hugo" /></div>
            <div class="nom">Hugo</div>
          </dt>
          <dd>
            Hugo, Jugo, monsieur «&nbsp;<strong>Heyyyyyyyyy</strong>&nbsp;»,
            descendant des descendants de tenanciers,
            quelque fois un peu Fugo El Macholas… aussi à l’aise
            en amant dans le placard sur une <strong>Vaudeville</strong>,
            qu’en pilier de bar rustre mais attachant d’une cinquantaine d’années…
            <strong>L’absurde est son terrain de jeu</strong>,
            le frigo est son refuge, le combat des sens
            est sa plus grand œuvre… 1 minute… seul…
            durant laquelle son ouïe attaque son touché,
            et sa vue se bat avec son goût…
            un grand monsieur à la vie <strong>comme à la scène</strong>.
          </dd>

          <dt>
            <div class="face"><img src="assets/img/faces/hugos.gif" alt="Improvisateur Hugo" /></div>
            <div class="nom">Hugo</div>
          </dt>
          <dd>
            Hugo Saumon est un poisson <strong>singulier</strong> qui évolue dorénavant
            dans l'eau gazeuse des Quesapélorios.
            Mi homme de culture, mi homme de science, cette espèce rare saura
            vous raconter <strong>de belles histoires</strong>.
            Les bulles lui montent rapidement à la tête et le poussent aux plus
            grandes <strong>folies improvisées</strong>.
            Un Saumon qui ne se laissera pas transformer en sashimi si rapidement…
          </dd>

          <dt>
            <div class="face"><img src="assets/img/faces/kodsi.gif" alt="Improvisateur Kodsi" /></div>
            <div class="nom">Kodsi</div>
          </dt>
          <dd>
            Tout nouveau au tableau de chasse des Quesapelorio, Kodsi est un
            grand talent de l'impro.
            <strong>Efficacité</strong>, <strong>drôlitude</strong>, Kodsi
            est notre homme à tout faire et il vous le prouve en sortant
            de son esprit mondes <strong>féériques</strong>,
            situations alambiquées et personnages du quotidien.<br />
            Go go gadgeto Koko&nbsp;!
          </dd>

          <dt>
            <div class="face"><img src="assets/img/faces/margot.gif" alt="Improvisatrice Margot" /></div>
            <div class="nom">Margot</div>
          </dt>
          <dd>
            Margot Torres, elle est à l'impro ce que Zizou est au football,
            Kant à la philo et Maïté à la cuisine… <strong>une référence&nbsp;!!</strong>
            Elle sait user de son charme pour vous faire fondre
            et de son humour (pas toujours subtil, subtil)
            pour <strong>vous faire rire</strong>.
            Son arme secrète&nbsp;: <strong>"Le mitou"</strong>, n.m. signifiant jeu
            de mot plus ou moins élaboré, parfois bison, souvent inattendu,
            <strong>toujours efficace</strong>. Laurent Ruquier lui a récemment envoyé des
            fleurs pour féliciter l'ensemble de son oeuvre.
          </dd>

          <dt>
            <div class="face"><img src="assets/img/faces/marie.gif" alt="Improvisatrice Marie" /></div>
            <div class="nom">Marie</div>
          </dt>
          <dd>
            Mais qui est cette fille fructidose&nbsp;?
            Cette <strong>nonne chanteuse</strong> d’Amenopose ou de SAV d’aspirateurs…
            Cette tête blonde qui s’approprie les couvertures comme les
            emmerdes tirées d’un bon Audiard. C’est <strong>une pile électrique</strong>
            survoltée… révoltée…
            qui fait délirer tous les électrons qui se trouvent autour d’elle.
            D’un coup d’éclair, <strong>elle se transforme</strong>, et sous ses airs,
            un peu difformes (<strong>c’est pour la rime</strong>, no offense),
            elle vous emmène et <strong>vous promène et vous ramène</strong> comme un hymen
            (euh… je vais arrêter les rimes je crois).
          </dd>



          <dt>
            <div class="face"><img src="assets/img/faces/nelly.gif" alt="Improvisatrice Nelly" /></div>
            <div class="nom">Nelly</div>
          </dt>
          <dd>
            M<sup>elle</sup> <strong>crotte de nez</strong>. Elle les aime dures,
            elle les aime tendres… on parle <strong>des impros</strong> bien évidemment ;)
            Son tempérament explosif peut vous faire… <strong>exploser de rire</strong>
            ou bien vous <strong>terrifier</strong>
            (elle s’énerve super bien pour de faux… Mattias peut confirmer).
            Ses hobbies sont simples… <strong>découper des bras et des jambes</strong>
            d’humains. C’est <strong>comme du poulet</strong> parait-il.
            Mais ne vous inquiétez pas, cette douce demoiselle fait
            ça pour la science et viendra sans son scalpel.
          </dd>

          <dt>
            <div class="face"><img src="assets/img/faces/sebastien.gif" alt="Improvisateur Sébastien" /></div>
            <div class="nom">Sébastien</div>
          </dt>
          <dd>
            Un monsieur Quesapelorio Sébastien mais qui pourrait
            tout aussi bien s’appeler Gilbert <strong>le grabataire</strong>
            ou Tonio <strong>le coiffeur branchouille</strong>&nbsp;!
            Je n’en dirai pas plus pour ne pas trop <strong>vous faire saliver</strong>
            mais vous le retrouverez <strong>tout bronzé</strong>
            (tout nu&nbsp;: faux voir avec lui…) <strong>à votre prochain Cabaret</strong>&nbsp;!
          </dd>


          <dt>
            <div class="face"><img src="assets/img/faces/sunny.gif" alt="Improvisateur Sunny" /></div>
            <div class="nom">Sunny</div>
          </dt>
          <dd>
            Rien de tel qu’un <strong>brin de lumière</strong>,
            une éclaircie qui surgit… furtivement pour déposer son rayon et
            <strong>illuminer votre soirée</strong>&nbsp;!
            Cet homme a toujours le bon mot, la <strong>pirouette</strong> qui le fait
            retomber, tel un chat, sur ses pattes.
            Après avoir été fait Cheveulier sur <strong>une impro capillaire</strong>,
            il continue ses sérénades avec son style bien à lui
            et ses <strong>interventions chirurgicales</strong>.
          </dd>

        </dl>

        <div class="face-tab-current">
        </div>
      </section>



      <hr>

      <section id="les3arts" class="section">
        <h2 class="section-title">Le lieu</h2>
        <p class="short-text">
          <big>Les 3 arts</big><br />
          <strong>21 rue des Rigoles</strong>, 75020 Paris<br />
          <abbr title="Métro" class="metro">M</abbr> Jourdain<br />
          <a href="http://les3arts.free.fr/" rel="external">les3arts.free.fr</a>
        </p>
      </section>
    </div>

    <div class="bigmap">
      <a href="https://maps.google.fr/maps?q=21+rue+des+rigoles,+75020+Paris">
        Carte
      </a>
    </div>

    <div class="container">


      <h2 class="section-title">Du théâtre même pas chiant</h2>
      <p>Un <strong>cabaret d'improvisation</strong> c'est à chaque fois drôle, étonnant, émouvant, époustouflant. Emmenez avec vous des idées de <strong>thèmes</strong> à jouer et <strong>votre mauvaise humeur</strong>, on va s'en occuper.</p>

      <img class="full-width greyscale" src="assets/img/photos/caucus.jpg" alt="" />

      <hr>

      <h2 class="section-title">Nous contacter</h2>
      <p class="short-text">
        <a href="mailto:impro@quesapelorio.com">impro@quesapelorio.com</a>
      </p>
    </div>


    <!-- scripts -->
    <script data-main="assets/js/main" src="assets/js/vendor/require.js"></script>

    <!-- facebook -->
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/fr_FR/all.js#xfbml=1&appId=151233974919083";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>

    <!-- twitter -->
    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>

    <!-- google anal -->
    <script>
      var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
      (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
      g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
      s.parentNode.insertBefore(g,s)}(document,'script'));
    </script>
  </body>
</html>


