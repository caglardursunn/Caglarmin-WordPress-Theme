<?php get_header();?>
	<section>
		<div class="konteyner">
			<div id="sol">
				<?php
				if ( have_posts() ) :
				while ( have_posts() ) : the_post(); ?>
				<div class="yazi">
					<div class="yazigorsel">
						<a href="<?php echo get_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
					</div>
					<?php $kategori = get_the_category(); ?>
					<h3><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h3>
					<div class="bilgi">
						<span><i class="fa fa-user"></i> <?php the_author();?></span>
						<span><i class="fa fa-calendar"></i> <?php the_date();?></span>
						<span><i class="fa fa-folder"></i> <?php echo $kategori[0]->cat_name; ?></span>
						<span><i class="fa fa-comment"></i> <?php comments_number(); ?></span>
					</div>
					<p class="ozet">	
						<?php echo get_the_excerpt(); ?>
					</p>
				</div>
				<?php endwhile;
				else :
					echo wpautop( '<h2>Yazı bulunamadı!</h2>' );
				endif;
				?>
			
			<?php sayfalama(); ?>
			</div>
			<div id="sag">
				<?php get_sidebar();?>
			</div>
		</div>
	</section>
<?php get_footer();?>