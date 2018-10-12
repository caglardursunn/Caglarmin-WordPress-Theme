<!DOCTYPE HTML>
<html lang="tr-TR">
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<title><?php wp_title('-', true, 'right'); ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<?php wp_head(); ?>
</head>
<body>
	<header>
		<div class="konteyner">
			<div class="logo">
				<a href="<?php echo get_site_url(); ?>"><h1>Çağlar Dursun</h1></a>
				<h2>Bazen her şey, bazen tasarımcı</h2>
			</div>
			<nav class="sosyalmedya">
				<ul>
					<li><a href="https://facebook.com/caglardursunn"><i class="fa fa-facebook"></i></a></li>
					<li><a href="https://twitter.com/caglardrsn"><i class="fa fa-twitter"></i></a></li>
					<li><a href="https://tr.linkedin.com/in/caglardrsn"><i class="fa fa-linkedin"></i></a></li>
					<li><a href="https://www.behance.net/caglardursun"><i class="fa fa-behance"></i></a></li>
					<li><a href="https://github.com/caglardursunn"><i class="fa fa-github"></i></a></li>
				</ul>
			</nav>
			<div class="arama">
					<form role="search" method="get" id="searchform" class="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
						<input type="text" class="aramainput" value="<?php echo get_search_query(); ?>" name="s" id="s" placeholder="aklın yetmediyse, ara..." />
				</form>
			</div>
			<nav class="ustmenu">
				<ul>
					<li class="ara"><a href="#"><i class="fa fa-search"></i></a></li>
				</ul>
			</nav>
			<nav class="ustmenu">
				<?php wp_nav_menu( array( 'theme_location' => 'ust_menu' ) ); ?>
			</nav>
			<div id="menuac"><i class="fa fa-bars"></i></div>
			<div id="mobilara" class="ara"><a href="#"><i class="fa fa-search"></i></a></div>
			<nav class="mobilmenu">
				<?php wp_nav_menu( array( 'theme_location' => 'ust_menu' ) ); ?>
				<nav class="mobilsosyalmedya">
					<ul>
						<li><a href="https://facebook.com/caglardursunn"><i class="fa fa-facebook"></i></a></li>
						<li><a href="https://twitter.com/caglardrsn"><i class="fa fa-twitter"></i></a></li>
						<li><a href="https://tr.linkedin.com/in/caglardrsn"><i class="fa fa-linkedin"></i></a></li>
						<li><a href="https://www.behance.net/caglardursun"><i class="fa fa-behance"></i></a></li>
						<li><a href="https://github.com/caglardursunn"><i class="fa fa-github"></i></a></li>
					</ul>
				</nav>
			</nav>
		</div>
	</header>
