<?php

/*
 * Place here all your WordPress add_filter() and add_action() calls.
 */

/**
 * Filter
 */

function remove_generator() {
	return '';
}

add_filter('the_generator', 'remove_generator');


/**
 * Actions
 */

function modernizr_load() {
?>
<script>
  Modernizr.load([
    {
      load: 'http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js',
      complete: function () {
          
        if ( !window.jQuery ) {
        }

        // WP Plugin JS
        Modernizr.load('<?echo plugins_url(); ?>/contact-form-7/includes/js/jquery.form.js?ver=3.14');
        var _wpcf7 = {
          "loaderUrl": "<?php $site_url = get_site_url(); echo str_replace("/", "\/", $site_url); ?>\/wp-content\/plugins\/contact-form-7\/images\/ajax-loader.gif",
          "sending":"Sending ...",
          "cached":"1"
        };
        Modernizr.load('<?echo plugins_url(); ?>/contact-form-7/includes/js/scripts.js?ver=3.2.1')

        // WP Core JS
        // Modernizr.load('<?echo includes_url(); ?>/wp-includes/js/l10n.js?ver=20101110');

        // Custom JS
        Modernizr.load('<? bloginfo('template_directory'); ?>/theme/assets/javascripts/application.js');

      }
    }
  ]);
</script>
<?php 
}

add_action('wp_footer', 'modernizr_load', 1);

function clear_fe() {
    //global $post;

    //list_hooked_functions('wp_head');
    //remove_action('wp_head', 'rsd_link');
    //remove_action('wp_head', 'wlwmanifest_link');
    //remove_action('wp_head', 'feed_links_extra', 3); // Remove category feeds
    //remove_action('wp_head', 'feed_links', 2); // Remove Post and Comment Feeds
    
    if (!is_admin()) {
      //remove_action('wp_head', 'GA_Filterspool_analytics', 2);
      //remove_action('wp_head', 'wp_generator', 10);
      //remove_action('wp_head', 'wp_print_styles', 8);
      //remove_action('wp_head', 'wp_print_head_scripts', 9);
      //remove_action('wp_head', 'rel_canonical');
      //remove_action('wp_head', 'wp_shortlink_wp_head');
      //remove_action('wp_head', 'gfc_wp_head', 10);
      //remove_action('wp_head', 'gfci_header', 10);
      
      //add_action('wp_footer', 'gfc_wp_head');
      //add_action('wp_footer', 'g_analytics', 2);
      //if ( !is_front_page() && 'open' == $post->comment_status ) {
        // comments?
      //}
      
      //wp_deregister_script('l10n');

      wp_deregister_script('jquery');
     
    }
}

add_action('wp', 'clear_fe', 1);

