
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="">

    <title>Title</title>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link rel="stylesheet" type="text/css" href="//code.jquery.com/jquery-1.11.3.min.js">
    <?php wp_head(); ?>

  </head>

  <body <?php body_class(); ?>>

    <header>

      <!-- Fixed navbar -->
      <!-- <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?= get_site_url(); ?>"><img src=<?= get_template_directory_uri().'/assets/images/ch_logo.jpg' ?>></a>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <?php 

               wp_nav_menu( array(
                'menu' => 'main_menu',
                'depth' => 2,
                'container' => false,
                'menu_class' => 'nav navbar-nav navbar-right',
                //Process nav menu using our custom nav walker
                'walker' => new wp_bootstrap_navwalker())
              );
             ?>
            </ul>
          </div>
        </div>
      </nav> -->

    </header>

    <!-- <section id="content-area">
      <div class="container"> -->