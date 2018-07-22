<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<title>Don Chicho&#39;s Nurture Farm</title>

    	<!-- Bootstrap core CSS -->
    	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">

    	<!-- Custom fonts for this template -->
    	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    	<link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    	<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">

		<?php wp_head(); ?>
		<script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
        </script>

	</head>
	<body <?php body_class(); ?>>

		<!-- wrapper -->
		<div id="page-top" class="wrapper">

			<!-- header -->
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand" href="<?php echo get_home_url(); ?>">
          <img id="navbar-logo" src="<?php echo get_template_directory_uri(); ?>/img/logo.png">
        </a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <?php
              $navbar_items = ['About', 'Gallery', 'Latest', 'Paiwi', 'FAQ', 'Contact'];
              foreach ($navbar_items as $item) { ?>
                <?php if ( is_front_page() && ! is_home() ) : ?>
                  <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#<?php echo strtolower($item) ?>"><?php echo $item ?></a>
                  </li>
                <?php else : ?>
                  <li class="nav-item">
                    <a class="nav-link" href="<?php echo get_home_url() . '#' . strtolower($item); ?>"><?php echo $item ?></a>
                  </li>
                <?php endif; ?>
            <?php
              } ?>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo get_home_url(); ?>/blog/">Blog</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="https://paiwionline.com/dvboer/login">Log in</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
			<!-- /header -->
