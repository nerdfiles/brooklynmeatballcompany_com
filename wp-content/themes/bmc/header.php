<?php
/**
 * @package WordPress
 * @subpackage HTML5_Boilerplate
 */
?>
<!DOCTYPE HTML>

<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]--> <!--[if IE 7]> <html class="no-js lt-ie9 lt-ie8"> <![endif]--> <!--[if IE 8]> <html class="no-js lt-ie9"> <![endif]--> <!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->

<head>

  <meta charset="utf-8" />

  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

  <link rel="dns-prefetch" href="//code.jquery.com" />
  <link rel="dns-prefetch" href="//use.edgefonts.net" />
  <link rel="dns-prefetch" href="//google-analytics.com" />
  <link rel="dns-prefetch" href="//apis.google.com" />
  <link rel="dns-prefetch" href="//www.khou.com" />
  <link rel="dns-prefetch" href="//maps.google.com" />

  <title><?php if (!is_home()) { ?><?php wp_title('&laquo;', true, 'right'); ?> <?php } ?><?php bloginfo('name'); ?></title>
  
  <meta name="viewport" content="width=device-width" />

  <?php versioned_stylesheet($GLOBALS["TEMPLATE_RELATIVE_URL"]."html5-boilerplate/css/normalize.css") ?>

  <?php versioned_stylesheet($GLOBALS["TEMPLATE_RELATIVE_URL"]."compass/stylesheets/screen.css") ?>
  <?php versioned_stylesheet($GLOBALS["TEMPLATE_RELATIVE_URL"]."compass/stylesheets/overrides.css") ?>
  <?php versioned_stylesheet($GLOBALS["TEMPLATE_RELATIVE_URL"]."compass/stylesheets/plugin_contactform7.css") ?>
  <style>
    .jwl_qr_code { border: none !important; }
    .jwl_qr_code img { position: absolute; right: 0; top: -320px; opacity: .3; }
    <?php if (is_front_page()) { ?>
      .jwl_qr_code img { right: -18px; top: -322px; }
    <?php } ?>

    .jwl_qr_code img:hover { opacity: 1; }
    #qr_header { display: none !important; }
    #qr_main { text-align: right; padding: 0; }
    #qr_main div:nth-child(even) { display: none !important; }
  </style>

  <script charset="utf-8" src="http://use.edgefonts.net/poiret-one.js"></script>
  <script charset="utf-8" src="http://use.edgefonts.net/m-1m.js"></script>
  <script charset="utf-8" src="http://use.edgefonts.net/open-sans.js"></script> 

  <!--script charset="utf-8" src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.6.2/modernizr.min.js"></script-->

  <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
  <link rel="shortcut icon" href="<?php echo $GLOBALS["TEMPLATE_RELATIVE_URL"]."images/favicon.png"; ?>" type="image/x-icon" />

  <?php wp_head(); ?>

  <!--[if (gte IE 6)&(lte IE 8)]>
  <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/selectivizr/1.0.2/selectivizr-min.js"></script>
  <![endif]--> 

</head>

<?php $slug = sanitize_title( get_the_title(), $fallback_title ); ?>

<body id="<?php echo $slug; ?>" <?php body_class(); ?>>
  <!--[if lt IE 7]>
    <p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
  <![endif]-->

  <div class="page-wrapper">
  
  <nav class="site-access">
    <ul class="access">
      <li>
        <a href="#main" title="Skip to content">Skip to content</a>
      </li>
    </ul>
  </nav><!-- .site-access -->

  <header class="site-header" role="banner">
    <h1><a href="<?php echo get_option('home'); ?>/"><?php bloginfo('name'); ?></a></h1>
    <?php if (get_bloginfo('description')) : ?>
      <p class="description"><?php bloginfo('description'); ?></p>
    <?php endif; ?>
  </header><!-- .site-header -->

  <nav class="site-nav">
    <?php wp_nav_menu(); ?>
  </nav><!-- .site-nav -->

  <section class="site-content">

