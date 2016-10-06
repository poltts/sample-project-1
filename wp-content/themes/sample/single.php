<?php get_header(); ?>
<main>
	<section>
		<div class="row">
			<div class="col-md-12">
					<?php
						while ( have_posts() ) : the_post();
 						?>
 						<h1><?php the_title();?></h1>
 						<div class="box-content">
	 						<?php
							the_content();
							?>
						</div>
						<?php
							if ( comments_open() || get_comments_number() ) {
								comments_template();
							}
						endwhile; 
					?>
			</div>
		</div>
	</section>
</main>
<?php get_footer(); ?>