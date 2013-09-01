		<footer id="footer" class="source-org vcard copyright ym-wrapper">
      <div id="footerdeco" class="ym-wrapper">
<p style="color:white !important">AMN TV</p>
      </div>
			<div id="footerinner" class="ym-wbox">
        <div id="lefooter" class="ym-grid linearize-level-1">
          <div id="logofooter" class="ym-g20 ym-gl">
              <div class="gbox">
                <a href="<?php echo get_option('home'); ?>/"></a>
                <div class="blogdescription ym-clearfix"><?php bloginfo('description'); ?></div>
              </div>
          </div>
          <div id="plandusite" class="ym-g20 menufoot ym-gl">
            <div class="ym-gbox">
              <h3 class="nappa">Plan du site</h3>
              <?php
                    wp_nav_menu( array( 'menu' => 'menu'));
                  ?>
            </div>
          </div>
          <div id="votrecompte" class="ym-g20 menufoot ym-gl">
            <div class="ym-gbox">
              <h3 class="nappa">Votre compte</h3>
              <?php
                    wp_nav_menu( array( 'menu' => 'votrecompte'));
                  ?>
            </div>
          </div>
          <div id="noussuivre" class="ym-g20 menufoot ym-gl">
              <div class="ym-gbox">
                <h3 class="nappa">Nous suivre</h3>
                <?php
                    wp_nav_menu( array( 'menu' => 'noussuivre'));
                  ?>
              </div>
          </div>
          <div id="contacts" class="ym-g20 menufoot ym-gl">
            <div class="ym-gbox">
              <h3 class="nappa">Nos contacts</h3>
              <?php
                    wp_nav_menu( array( 'menu' => 'contacts'));
                  ?>
            </div>
          </div>
        </div><!--lefooter-->
      </div><!--footerinner-->
      <div class="cwedits ym-wrapper">
        2013 <a href="http://africaincorpmedia.co">Africaincorp Media Network</a> | Template par <a href="http://houedanou.com" rel="dofollow">Jean Luc Houedanou</a>
      </div>
		</footer>
<script src="<?php bloginfo('template_directory'); ?>/js/jquery.isotope.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/functions.js"></script>
	<?php wp_footer(); ?>


<!-- here comes the javascript -->

<!-- jQuery is called via the Wordpress-friendly way via functions.php -->

<!-- Asynchronous google analytics; this is the official snippet.
	 Replace UA-XXXXXX-XX with your site's ID and uncomment to enable.

<script>

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-XXXXXX-XX']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
-->

</body>

</html>
