<!DOCTYPE html>
<!--[if lt IE 7 ]><html <?php language_attributes(); ?> class="no-js ie ie6 lte7 lte8 lte9"><![endif]-->
<!--[if IE 7 ]><html <?php language_attributes(); ?> class="no-js ie ie7 lte7 lte8 lte9"><![endif]-->
<!--[if IE 8 ]><html <?php language_attributes(); ?> class="no-js ie ie8 lte8 lte9"><![endif]-->
<!--[if IE 9 ]><html <?php language_attributes(); ?> class="no-js ie ie9 lte9"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
        <title><?php wp_title( '|', true, 'right' ); ?></title>
        <link rel="shortcut icon" href="<?php echo home_url( '/wp-content/themes/svbtle/images/favicon.ico' ); ?>" />
		<link rel="profile" href="http://gmpg.org/xfn/11" />
		<link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
        <link href='http://fonts.googleapis.com/css?family=Audiowide' rel='stylesheet' type='text/css' />
<?php

		if ( is_singular() && get_option( 'thread_comments' ) )
			wp_enqueue_script( 'comment-reply' );

		wp_head();
?>
        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-31236795-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

	</head>
	<body <?php body_class(); ?>>
	
	<div id="wrap">
		
        <header role="banner">
            <figure id="user_logo">
                <a href="/">
                <div class="logo">&nbsp;</div>
                </a>
            </figure>

            <?php if(is_front_page()) { ?>
            <div class="header-logo">
			    <h1><a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			    <p><?php bloginfo( 'description' ); ?></p>

            </div>
            <?php } else { ?>

			<h1 class="blog-header-logo"><a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<div class="links">
			<?php 
			ob_start(); 
			bloginfo('home');
			$site_url = ob_get_clean(); 
			?>
			
				<p><a href="<?php bloginfo('home'); ?>">home</a></p>
				<p><a href="<?php echo home_url( '/blog/about' ); ?>">about</a></p>
				<!-- <p><a href="http://twitter.com/gravityonmars">@gravityonmars</a> 		</p> -->
				<!--<p><a target="_blank" href=mailto:"<?php echo get_settings('admin_email') ?>">say hello</a>    </p>-->
				<!--<p><a target="_blank" href="<?php bloginfo('rss2_url'); ?>">rss feed</a>     </p>-->
                <p><a target="_blank" href="http://github.com/HackerLabs">GitHub</a></p>
                <p><a target="_blank" href="http://twitter.com/HackerLabs">Twitter</a></p>
                <!--<p><a target="_blank" href="https://plus.google.com/u/0/b/101352013442440682418/">Google+</a></p>-->
                <!--<p><a target="_blank" rel="nofollow" href="http://facebook.com/HackerLabs">facebook</a></p>-->
			</div><!-- .links -->
            <?php } ?>
		</header>
		
		<section id="content" role="main">
	

