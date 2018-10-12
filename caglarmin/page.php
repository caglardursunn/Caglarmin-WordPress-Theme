<?php get_header();?>
	<section>
		<div class="konteyner">
			<div id="sol">
				<?php
				if ( have_posts() ) :
				while ( have_posts() ) : the_post(); ?>
				<div class="yazi">
					<?php $kategori = get_the_category(); ?>
					<h3><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h3>
					<div class="yaziyazi">
						<?php the_content(); ?>
					</div>
				</div>
				<?php endwhile;
				else :
					echo wpautop( '<h2>Yazı bulunamadı!</h2>' );
				endif;
				?>
			</div>
			<div id="sag">
				<?php get_sidebar();?>
			</div>
		</div>
	</section>
<?php get_footer();?>