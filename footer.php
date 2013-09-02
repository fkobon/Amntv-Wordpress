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
    <?php if( is_front_page() ) { ?>
        <div id="video-controls" >
          <a href="#" class="tubular-play black-85"><span class="fui-play"></span></a><br />
           <a href="#" class="tubular-pause black-85"><span class="fui-pause"></span></a><br />
           <a href="#" class="tubular-volume-up  black-85"><span class="fui-volume"></span></a><br />
           <a href="#" class="tubular-mute  black-85"><span class="fui-cross"></span></a></p>
      </div>
      <?php } ?>
	<?php wp_footer(); ?>
  <?php if( is_front_page() ) { ?>
  <script src="<?php bloginfo('template_directory'); ?>/js/jquery.tubular.1.0.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/jquery.cycle.min.js"></script>
<script type="text/javascript">
    $('document').ready(function() {
          $('div#indexinner.ym-wbox').cycle({
                fx: 'scrollHorz',
                  speed: 1000,
                  timeout: 5000,
                  pager:'#fiv',
                   slideResize: false
              });
            //inserer video oco
           var options = { videoId: 'ksfBt5TL4ms', start: 0,increaseVolumeBy: 10};
            $('#contenuwrapper').tubular(options);
            // f-UGhWj1xww cool sepia hd
            // 49SKbS7Xwf4 beautiful barn sepia
          });

  </script>
<?php } ?>
<script src="<?php bloginfo('template_directory'); ?>/js/functions.js"></script>

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
<script>document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')</script>
</div><!--contenwrapper-->
</body>

</html>
