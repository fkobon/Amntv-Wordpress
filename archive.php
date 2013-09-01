<?php get_header(); ?>
<div id="indexwrapper" class="ym-wrapper">
  <div id="indexinner" class="ym-wbox">
        <h3 class="cattitle ym-clearfix">
          <?php
            single_cat_title();
          ?>
        </h3>
        <div id="page1" class="slide ym-grid linearize-level-1">
              <!--video a mettre en emphase-->
            <div id="vfeatured" class="vall">
              <div class="ym-gbox">
                <?php
                $catID = get_query_var('cat');
                  query_posts(array('showposts'=>1,
                  'cat' => $catID));
                  $compteur = array();
                  $post = $posts[0]; // Hack. Set $post so that the_date() works.
                  while (have_posts()) : the_post(); ?>
                  <article id="vidmain" <?php post_class() ?>>
                    <div class="infos">
                      <p>
                      <?php the_date(); ?>
                    </p>
                    <h2 id="post-<?php the_ID(); ?>">
                      <a href="<?php the_permalink() ?>">
                        <?php the_title(); ?>
                      </a>
                    </h2>
                    </div>
                    <a href="<?php the_permalink() ?>">
                      <?php
                        the_post_thumbnail('full',array('class' => 'flexible'));
                      ?>
                    </a>
                    <div class="infosbix">
                          <?php the_excerpt(200);?>
                      </div
                  </article>
                  <?php $compteur[] = get_the_ID();?>
                <?php endwhile; ?>
                </div><!--ym-gbox-->
            </div><!--videoimg1-->
              <!--4 autres videos-->
                <?php
                  $compteur2 = array();
                  query_posts(array('showposts'=>8,
                    'cat' => $catID,
                  'post__not_in' => $compteur));
                  while (have_posts()) : the_post();
                ?>
                  <div class="abox vall">
                      <div class="infossec">
                        <p>
                        <?php the_date(); ?>
                      </p>
                      <h2 id="post-<?php the_ID(); ?>">
                        <a href="<?php the_permalink() ?>">
                          <?php the_title(); ?>
                        </a>
                      </h2>
                    </div>
                      <a href="<?php the_permalink() ?>">
                        <?php
                          the_post_thumbnail('medium', array('class' => 'flexible'));
                        ?>
                      </a>
                      <div class="infosbix2">
                          <?php //the_excerpt(200);?>
                      </div><!--infobix2-->
                    </div><!--abox-->
                        <?php endwhile; ?>
        </div><!--page1-->
  </div><!--indexinner-->
</div><!--indewrapper-->
          <?php include (TEMPLATEPATH . '/_/inc/nav.php' ); ?>

<?php get_footer(); ?>
