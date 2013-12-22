<?php
/**
 * @package WordPress
 * @subpackage HTML5_Boilerplate
 */
?>

</section><!-- .site-content -->

<footer class="site-footer">

  <div class="callout">
    <div class="inner">
      <h3><a href="/our-menu/#bmc-menu-takeout">Meatball Previews</a></h3>
      <h4>Family Deal</h4>
      <p>Best Value, Serves 4, 12 Meatballs, sauce, and pasta of choice $29.99</p>
      <p>See our complete <a href="/our-menu/">Menu</a> or give us a call at (713) 751-1700.</p>
    </div>
  </div><!-- .callout -->

  <!--div class="footer-nav">
    <ul>
      <li>News</li>
      <li>Staff</li>
    </ul>
  </div-->

  <div class="social-media">
    <h4>Get Social</h4>
    <p>Find us elsewhere on the Web.</p>
    <ul>
      <li class="fb"><a href="http://www.facebook.com/pages/Brooklyn-Meatball-Company/260046834011588">
        Facebook
      </a></li>
      <li class="yl"><a href="http://www.yelp.com/biz/brooklyn-meatball-co-houston-2">
        Yelp
      </a></li>
      <li class="us"><a href="http://www.urbanspoon.com/r/8/1681453/restaurant/Downtown/Brooklyn-Meatball-Company-Houston">
        Urbanspoon
      </a></li>
      <li class="gp">
        <!-- <script type="text/javascript" src="https://apis.google.com/js/plusone.js"></script> -->
        <!-- <g:plusone></g:plusone> -->
      </li>
    </ul>
  </div>

  <!--
  <div class="payment-forms">
    <ul>
      <li>VISA</li>
      <li>AmeEx</li>
      <li>MasterCard</li>
    </ul>
  </div>
  -->

  <div class="imprint">
    <div class="inner">
    <p>&copy; 2012 <a href="<?php echo get_bloginfo('url'); ?>">Brooklyn Meatball Company</a> &#8260; <a href="/terms/">Terms</a> <?php if (is_user_logged_in()) { ?>&#8260; <a href="/dash/">Dash</a> &#8260; <?php } else { ?> &#8260; <a href="/dash/">Login</a> &#8260; <?php } ?> <a href="/wp-content/themes/bmc/doc/build/index.html">Docs</a></p>
      <p><a rel="license" href="http://creativecommons.org/licenses/by-sa/3.0/us/"><img title="Attribution-ShareAlike 3.0 United States (CC BY-SA 3.0)" alt="Creative Commons License" style="border-width:0;position:relative;top:4px;margin-right:3px;opacity:.3" src="http://i.creativecommons.org/l/by-sa/3.0/us/80x15.png"></a>: Built by <a href="http://nerdfiles.net" rel="nofollow external">nerdfiles</a>. See <a href="https://github.com/nerdfiles/brooklynmeatballcompany_com" rel="nofollow external">the repo</a>.</p>
    </div>
  </div><!-- .imprint -->

</footer><!-- .site-footer -->

</div><!-- .page-wrapper -->

<!-- <?php echo get_num_queries(); ?> queries. <?php timer_stop(1); ?> seconds. -->

<script src="//code.jquery.com/jquery.min.js"></script>
<?php versioned_javascript($GLOBALS["TEMPLATE_RELATIVE_URL"]."vendor/waitUntilExists.js") ?>
<?php versioned_javascript($GLOBALS["TEMPLATE_RELATIVE_URL"]."vendor/jquery/scroll.js") ?>
<?php versioned_javascript($GLOBALS["TEMPLATE_RELATIVE_URL"]."vendor/jquery/waypoints.min.js") ?>
<?php versioned_javascript($GLOBALS["TEMPLATE_RELATIVE_URL"]."html5-boilerplate/js/plugins.js") ?>
<?php versioned_javascript($GLOBALS["TEMPLATE_RELATIVE_URL"]."html5-boilerplate/js/main.js") ?>

<?php wp_footer(); ?>

<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36143512-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

</body>
</html>


