<section class="content">
	<article id="post-<?php the_ID(); ?>" <?php post_class('container'); ?>>
		
		<?php if(is_single()) :?>
		<h1 class="entry-title"><?php the_title(); ?></h1>
		<?php else : ?>
		<h3 class="entry-title"><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>
		<?php endif; ?>
		<?php if ( has_post_thumbnail() && ! post_password_required() ) : ?>
		
		<?php endif; ?>

		<div class="entry-content">
			<div class="entry-thumbnail pull-left">
				<?php the_post_thumbnail(); ?>
			</div>
			<?php if(is_single()) :?>
				<?php
					the_content();
				?>
			<?php else : ?>
				<?php the_excerpt(); ?>
				<p class="pull-right"><a href="<?php the_permalink();?>"><?php _e("Continue reading &raquo;");?></a></p>
			<?php endif; ?>
		</div>
		<div class="clearfix"></div>
	</article>
</section>