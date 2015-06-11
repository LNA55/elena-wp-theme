
<!DOCTYPE html>
 
<!-- 
PARTIE HEAD
  Dans le Head, mettre les ifos sur l'encodage de la page, les balises méta pour le référencement et l'identitié de la page, les liens vers les éléments à implémenter comme Google Analytics, Bootstrap, etc. et enfin les liens pour appeler les feuilles reset puis feuilles de style
-->

<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->

<head>

        <!-- Réglages généraux de la page et pour les moteurs de recherche -->

        <!-- Petite icone qui apparait dans l'onglet -->
        <link rel="shortcut icon" href="<?php echo get_template_directory_uri() ?>/favicon.ico" />
        <!-- Commentaire conditionnel pour rendre la favicon compatible avec d'anciennes versions d'IE -->
        <!--[if IE]><link rel="shortcut icon" type="image/x-icon" href="/front/img/favicon.ico" /><![endif]-->
        <!-- indique l'encodage, permet d'afficher des accents et autres caractères spéciaux -->
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

        <meta name="robots" content="index,follow" />
        <meta name="description" content="Arlettie organise des ventes privées d'exception à Paris. Découvrez nos deux showrooms : Trocadéro & Marais." />
        <meta name="google-site-verification" content="" />

        <!-- Open Graph utilisé par Facebook. Utile pour lui indiquer le contenu à utiliser lors d'un partage. Rajouter ici les infos liées au compte du projet.-->
        <!-- <meta property="fb:admins" content="" /> -->
        <!-- <meta property="fb:app_id" content="" /> -->
<!--         <meta property="og:title" content="" />
        <meta property="og:url" content="" />
        <meta property="og:image" content=""/>
        <meta property="og:site_name" content="" />
        <meta property="og:description" content=""/>
        <meta property="og:type" content="company"/> -->


        <!-- compatibilité avec Internet Explorer ... -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <!-- indique le titre du site, titre de l'onglet dans le nav -->
        <title>Bar à mochis</title>
        <!-- Si google juge ces lignes pertinentes, il les affichera en description du lien -->
        <meta name="description" content="Bar a mochis, ice mochi, cream mochi, specialité japonaise revisité comme une patisserie française">
        <!-- indique l'auteur' -->
        <meta name="author" content="Elena Web">
        <!-- sert au responsive (la largeur de la page est la largeur du devise et le zoom est à 1) -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        
        <!-- STYLES -->

        <!-- indique le chemin vers la feuille de reset -->
        <!-- <link rel="stylesheet" href="css/reset.css" type="text/css">  -->
        <!-- charge Bootstrap -->
        <!-- <link rel="stylesheet" href="css/bootstrap.min.css"> -->
        <!-- charge Font Awesome-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
        <!-- Lorsqu'on aime une police sur google font, on peut la prendre et l'installer dans son site. Cette ligne dit au navigateur où aller chercher les infos pour l'afficher correctement -->
        <link href='http://fonts.googleapis.com/css?family=Nunito' rel='stylesheet' type='text/css'>
        <!-- charge le thème Bootstrap -->
        <!-- <link rel="stylesheet" href="css/bootstrap-theme.min.css"> -->
        <!-- Styles prédéfinis -->
        <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/main.css" type="text/css"> <!-- donc il faut avoir le fichier style.CSS dans un dossier stylesheet -->
        <!-- Styles personnalisés -->
        <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/style.css" type="text/css"> <!-- donc il faut avoir le fichier style.CSS dans un dossier stylesheet -->

        <!-- SCRIPTS -->

    	  <!-- jQuery - nécessaire pour Bootstrap et pour beaucoup d'autres librairies -->
    	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <!-- charge une librairie qui gère les anciens navigateurs -->
        <script src="<?php echo get_template_directory_uri() ?>/js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
        <!-- Pour mailchimp : vérifier si ça ne fait pas doublon avec le script ci-dessous -->
        <script src="<?php echo get_template_directory_uri() ?>/script/script-mailchimp.js"></script>
        <link href="https://cdn-images.mailchimp.com/embedcode/slim-081711.css" rel="stylesheet" type="text/css">
        <style type="text/css">
         #mc_embed_signup{clear:left; font:14px Helvetica,Arial,sans-serif; }
          /* Add your own MailChimp form style overrides in your site stylesheet or in this style block.
          We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
        </style> 
        <!-- Latest compiled and minified JavaScript -->
        <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
  	  <!-- Tes propres scripts qui viennent changer les librairies chargées avant-->
        <script src="<?php echo get_template_directory_uri() ?>/js/main.js" type="text/javascript"></script> <!-- donc il faut avoir le fichier main.js dans un dossier JS -->

        <?php wp_head(); ?>
</head>
    
<body>      
      	<!-- Pour que la like box de facebook fonctionne -->  
	        <div id="fb-root"></div>
	        <script>(function(d, s, id) {
	            var js, fjs = d.getElementsByTagName(s)[0];
	            if (d.getElementById(id)) return;
	            js = d.createElement(s); js.id = id;
	            js.src = "https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.0";
	            fjs.parentNode.insertBefore(js, fjs);
	          }(document, 'script', 'facebook-jssdk'));
	        </script>
        <!-- Pour que google analytics fonctionne --> 
	     	<script type="text/javascript">
	 			var _gaq = _gaq || [];
	  			_gaq.push(['_setAccount', 'UA-32203429-1']);
	  			_gaq.push(['_trackPageview']);
	  			(function() {
	    		var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
				ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
				var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
				})();
			</script>
        <!-- Pour que twitter fonctionne --> 
			<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];
				if(!d.getElementById(id)){js=d.createElement(s);js.id=id;
				js.src="//platform.twitter.com/widgets.js";
				fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");
			</script>



  <header>	
    <div id="header">
        <nav>
          <ul class="menu">
            <li><a href="/" title="Retour à l accueil">Accueil</a></li>
            <li class="menuBull">&bull;</li>
            <li><a href="/mochi" title="Carte des mochis">Mochis</a>
                <ul class="menu">
                  <li><a href="/mochi-ice" title="Liste des mochis glacés">Mochi glace</a></li>
                  <li><a href="/mochi-cream" title="Liste des mochi à la crème">Mochi crème</a></li>
                </ul>
            </li>
            <li class="menuBull">&bull;</li>
            <li><a href="/adresses" title="Nos points de vente">Boutiques</a></li>
          </ul>
        </nav>
    </div>
  </header>


  <header>
      <div id="header">
          <nav class="navbar navbar-default">
            <div class="container-fluid">
              <!-- Brand and toggle get grouped for better mobile display -->
              <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand visible-xs" href="#">Bar à mochis</a>
              </div>

              <!-- Collect the nav links, forms, and other content for toggling -->
                 <?php
                  wp_nav_menu( array(
                    'menu' => 'top-menu',
                    'theme_location' => 'top-menu',
                    'depth' => 2,
                    'container' => 'div',
                    'container_class' => 'collapse navbar-collapse row',
                    'container_id' => 'bs-example-navbar-collapse-1',
                    'menu_class' => 'nav navbar-nav',
                    'fallback_cb' => 'wp_bootstrap_navwalker::fallback',
                    'walker' => new wp_bootstrap_navwalker())
                  );
                ?>
              </div><!-- /.container-fluid -->
          </nav>
      </div>
  </header>