<?php

// Add security headers
Header("Strict-Transport-Security: max-age=31536000; includeSubDomains");
Header("X-Frame-Options: SAMEORIGIN");
Header("X-Content-Type-Options: nosniff");
Header("Content-Security-Policy: block-all-mixed-content");
Header('Permissions-Policy: geolocation=(), microphone=(), camera=()');
Header("Referrer-Policy: no-referrer-when-downgrade");

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php // wp_body_open(); ?>
	<nav class="navbar navbar-expand-md navbar-dark bg-dark" role="navigation">
		<div class="container">
			<div class="nav_logo_holder p-4 mt-5">
				<a href="/"><img src="<?= get_stylesheet_directory_uri() ;?>/img/logo-4.svg"></a>
			</div>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-collapse-1" aria-controls="navbar-collapse-1" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<?php
			wp_nav_menu( array(
				'menu_id'			=> 'primary-menu',
				'theme_location'    => 'menu-1',
				'depth'             => 2,
				'container'         => 'div',
				'container_class'   => 'collapse navbar-collapse justify-content-end',
				'container_id'      => 'navbar-collapse-1',
				'menu_class'        => 'nav navbar-nav montserrat ml-0',
				'item_spacing'		=> 'preserve',
				'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
				'walker'            => new WP_Bootstrap_Navwalker(),
			) );
			?>
		</div>
	</nav>
