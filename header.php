<!DOCTYPE html>
<!--[if IE 7]><html lang="en" class="ie7"><![endif]-->
<!--[if IE 8]><html lang="en" class="ie8"><![endif]-->
<!--[if IE 9]><html lang="en" class="ie9"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><html lang="en"><![endif]-->
<!--[if !IE]><html lang="en-US"><![endif]-->

<!--[if IE 8]><html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"  lang="en"> <!--<![endif]-->
  <head>
    <meta charset="utf-8">
    <title><?php wp_title('|',1,'right'); ?> <?php bloginfo('name'); ?></title>
    <meta name="viewport" content="width=device-width" />
    
    <meta name="author" content="">

    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600' rel='stylesheet' type='text/css'>
    <!-- <link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet"> -->
    <link href="<?php echo get_stylesheet_directory_uri() . "/css/bootstrap.css" ?>" rel='stylesheet'> 

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
       <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <?php wp_enqueue_script("jquery"); ?>
		<?php wp_enqueue_script( "custom_script", get_template_directory_uri()  . '/js/script.js', array( 'jquery' ), null ); ?>
    <?php wp_head(); ?>

    <link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/images/favicon.ico">
  </head>

  <body <?php body_class(); ?>>
    <div id="background">
      <div class="container">

      <header class="headernav navbar">
				<div class="navbar-inner">
					<h1 class="skm"><a class="brand" href="<?php echo  home_url(); ?>">Alta Vista Solutions</a></h1>
				<div class="row">
			
        <nav class="offset7 span5">
          	<?php wp_nav_menu( array( 
					'menu' => 'secondary-nav', 
					'container' => false, 
					'menu_class' => 'nav secondary-nav nav-pills pull-right',) 
					); ?>  
	           <?php wp_nav_menu( array( 
					'menu' => 'primary-nav', 
					'container' => false, 
					'menu_class' => 'nav primary-nav nav-pills pull-right') 
					); ?>     
      	</nav>
					</div>
					</div>
      </header>
