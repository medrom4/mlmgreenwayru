<!DOCTYPE html>

<html lang="en" class="no-js">
<!-- BEGIN HEAD -->

<head>
	<meta charset="utf-8" />
	<title><?php wp_title(); ?></title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta content="width=device-width, initial-scale=1" name="viewport" />



	<!-- GLOBAL MANDATORY STYLES -->
	
	<link href="https://fonts.googleapis.com/css?family=Neucha&display=swap&subset=cyrillic" rel="stylesheet">

	<?php wp_head(); ?>
</head>
<!-- END HEAD -->

<!-- BODY -->

<body>

	<!--========== HEADER ==========-->
	<header class="header navbar-fixed-top">
		<!-- Navbar -->
		<nav class="navbar" role="navigation">
			<div class="container">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="menu-container">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".nav-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="toggle-icon"></span>
					</button>

					<!-- Logo -->
					<div class="logo">
						<a class="logo-wrap" href="<?php bloginfo('url'); ?>">
							<img class="logo-img logo-img-main" src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="Asentus Logo">
							<img class="logo-img logo-img-active" src="<?php echo get_template_directory_uri(); ?>/img/logo-dark.png" alt="Asentus Logo">
						</a>
					</div>
					<!-- End Logo -->
				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse nav-collapse">
					<div class="menu-container>

                        <?php wp_nav_menu(array(
													'theme_location' => 'menu-menu',
													'container' => 'nav',
												)); ?>


            </div>
          </div>
        <!-- End Navbar Collapse -->
      </div>
        </nav>
        <!-- Navbar -->
    </header>
    <!--========== END HEADER ==========-->