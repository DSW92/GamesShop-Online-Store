<!DOCTYPE html>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="<?php bloginfo( 'template_url' ); ?>/css/bootstrap.min.css">
  <script src="<?php bloginfo( 'template_url' ); ?>/js/jquery-3.2.0.min.js"></script>
  <script src="<?php bloginfo( 'template_url' ); ?>/js/script.js"></script>
  <script src="<?php bloginfo( 'template_url' ); ?>/js/bootstrap.min.js"></script>
	<?php wp_head(); ?>
  <link rel="stylesheet" type="text/css" href="<?php bloginfo( 'template_url' ); ?>/css/main.css">
</head>
<body <?php body_class() ?>>
<header id="main_header">
  <nav class="navbar navbar-inverse navbar-static-top" role="navigation">
    <div class="container">
      <div class="navbar-header">
        <a href="<?php echo get_home_url(); ?>">
          <img id="main_logo" src="<?php bloginfo( 'template_url' ); ?>/images/logo.png"/>
        </a>
        <div id="title_container">
          <h1 id="shop_title">Games <span>Shop</span></h1>
        </div>
        <div id="hamb_cart">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                  data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a id="cart" href="<?php echo WC()->cart->get_cart_url(); ?>"><img src="<?php bloginfo( 'template_url' ); ?>/images/cart.png" width="50" height="50"/></a>
        </div>
        <a id="avatar" href="<?php echo get_permalink( get_option('woocommerce_myaccount_page_id') ); ?>"><img src="<?php bloginfo( 'template_url' ); ?>/images/avatar.png" width="55" height="45"/></a>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<?php
				$args = [
						'menu'       => 'primary',
						'menu_class' => 'nav navbar-nav',
				];

				wp_nav_menu( $args );
				?>
        <!--				<ul class="nav navbar-nav">-->
        <!--					<li><a href="index.php">Strona główna</a></li>-->
        <!--					<li><a href="about.php">Produkty</a></li>-->
        <!--					<li><a href="#portfolio">O nas</a></li>-->
        <!--					<li><a href="contact.php">Kontakt</a></li>-->
        <!--				</ul>-->
      </div>
    </div>
  </nav>
</header>
<header id="desktop_header">
  <div id="title_container">
    <h1 id="shop_title">Games <span>Shop</span></h1>
  </div>
</header>
<div class="sidebar_menu">
  <div class="sidebar_container">
    <a class="main_logo_url" href="<?php echo get_home_url(); ?>">
      <img id="main_logo" src="<?php bloginfo( 'template_url' ); ?>/images/logo.png"/>
    </a>

    <div class="sidebar_icons">
      <a id="avatar" href="<?php echo get_permalink( get_option('woocommerce_myaccount_page_id') ); ?>"><img src="<?php bloginfo( 'template_url' ); ?>/images/avatar.png" width="55" height="45"/></a>

      <a id="cart" href="<?php echo WC()->cart->get_cart_url(); ?>"><img src="<?php bloginfo( 'template_url' ); ?>/images/cart.png" width="50" height="50"/></a>
    </div>

    <?php
    $args = [
        'menu'       => 'primary',
    ];

    wp_nav_menu( $args );
    ?>
    <div id="social_media">
      <img src="<?php bloginfo( 'template_url' ); ?>/images/12345.png" width="40" height="40"/>
      <img src="<?php bloginfo( 'template_url' ); ?>/images/Twitter.png" width="40" height="40"/>
      <img src="<?php bloginfo( 'template_url' ); ?>/images/da97eeaa4652e31198002131bdbb913d.png" width="40" height="40"/>
    </div>
  </div>
</div>