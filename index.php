<?php
	get_header();
?>
	<div id="primary" class="content-area container">
		<div id="content" class="site-content row" role="main">
		
		<section class="col-lg-8">
			<h3>Notes</h3>
		<?php if ( have_posts() ) : ?>
			<dl class="dl-horizontal">
			<?php /* The loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<dt>
					<span class="text-muted"><?php the_time("F j, Y"); ?></span>
				</dt>
				<dd>
					<strong><?php the_title();?></strong>
					<p><?php the_excerpt() ;?></p>
				</dd>
			<?php endwhile; ?>
			</dl>
		<?php else : ?>
			<?php get_template_part( 'content', 'none' ); ?>
		<?php endif; ?>
		</section>

		<section class="col-lg-4">
			<h3>
				About Me
			</h3>
			<p>
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
			</p>
		</section>
		</div><!-- #content -->

	</div><!-- #primary -->
<?php
	get_footer();
?>