<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title><?php wp_title( ' | ', true, 'right' ); ?></title>
    <script src="http://pottery.jwdbuild.com/wp-content/themes/claphampottery/libs/jquery-1.9.1.min.js" type="text/javascript"></script>
    <script src="http://pottery.jwdbuild.com/wp-content/themes/claphampottery/libs/bootstrap/js/bootstrap.min.js"></script>
    <script src="http://pottery.jwdbuild.com/wp-content/themes/claphampottery/libs/bootstrap-select/bootstrap-select.min.js"></script>
    <script type="text/javascript" src="http://pottery.jwdbuild.com/wp-content/themes/claphampottery/libs/contact-form.js"></script>
    <script src="http://pottery.jwdbuild.com/wp-content/themes/claphampottery/libs/less-1.3.3.min.js"></script>
    <script src="http://pottery.jwdbuild.com/wp-content/themes/claphampottery/libs/jquery.scrollto-1.4.3.1-min.js"></script>
    <script src="http://pottery.jwdbuild.com/wp-content/themes/claphampottery/libs/jquery.easing.1.3.js"></script>
    <link rel="stylesheet" type="text/css" href="http://pottery.jwdbuild.com/wp-content/themes/claphampottery/libs/prettyphoto/css/prettyPhoto.css"/>
    <script type="text/javascript" src="http://pottery.jwdbuild.com/wp-content/themes/claphampottery/libs/prettyphoto/js/jquery.prettyPhoto.min.js"></script>
    <script src="http://pottery.jwdbuild.com/wp-content/themes/claphampottery/libs/jquery.tweet.js"></script>
    <script src="http://pottery.jwdbuild.com/wp-content/themes/claphampottery/libs/custom.js"></script>
		
    <script>
        $(document).ready(function () {
            $("a[data-rel^='prettyPhoto']").prettyPhoto({hook: 'data-rel'});
        });
    </script>

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="libs/html5shiv.js"></script>
    <![endif]-->


<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" />








<?php wp_head(); ?>








</head>
<body>

  <div id="boxedWrapper">
    <header id="top">
      <div class="container">
        <div class="row-fluid">
          <div class="span12">
            <nav class="short-contact pull-right">
              <ul class="wheel-group">
                <li><p>To enquire or to book a course: Call: <strong>020 7622 0681</strong>  Email: <a href="mailto:administrator@claphampottery.co.uk">administrator@claphampottery.co.uk</a></p></li>
                <li><a href="https://www.facebook.com/ClaphamPottery" target="_blank"><i class="wheel wheel-social icon-facebook"></i></a></li>
                <li><a href="https://twitter.com/ClaphamPottery" target="_blank"><i class="wheel wheel-social icon-twitter"></i></a></li>
              </ul>
            </nav>
            <div class="line"></div>
            <div class="clearfix"></div>
            <div class="navbar">
              <div class="navbar-inner">
                <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
                <a class="brand" href="/" alt="Clapham Pottery" title="Clapham Pottery">Clapham Pottery</a>
                <div class="nav-collapse collapse">
                  <ul class="nav pull-right">
                    <?php wp_nav_menu(); ?>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>


	