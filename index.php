<?php get_header(); ?>
<div id="indexwrappers" class="ym-wrapper">
	<div id="indexinner" class="ym-wbox">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
				<h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
				<div class="entry">
					<a href="<?php the_permalink() ?>">
						<?php the_post_thumbnail('large');?>
					</a>
				<div class="black-65">
					<?php include (TEMPLATEPATH . '/_/inc/meta.php' ); ?>
				</div>
				</div>
			</article>
		<?php endwhile; ?>
		<?php else : ?>
			<h2>Not Found</h2>
		<?php endif; ?>

	</div><!--indexinner-->
			<?php include (TEMPLATEPATH . '/_/inc/nav.php' ); ?>

</div><!--indewrapper-->
		<div id="fivwrapper" class="ym-wrapper">
			<div id="fiv" class="ym-wbox">
			</div>
		</div>
<?php //get_sidebar();
// sans aucune utilite sur la page d'accueil?>
<?php get_footer(); ?>
