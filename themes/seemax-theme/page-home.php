<?php /* Template Name: Home */ get_header(); ?>
<main class="home-page">
	<?php get_template_part('partials/_duotone-svg-light');?>
	<?php while (have_posts()) : the_post(); ?>
		<section class="hero-section">
			<div class="content">
				<!-- <h1><?php the_title();?></h1> -->
				<div class="hero-image">
					<img src="<?php echo get_template_directory_uri(); ?>/img/Mearchiavelli-VIII-edit-5.jpg"/>
					<!-- <div class="hero-image-caption">
						Mearchiavelli<br />
						<span>Marwane Pallas, The Philomathean Society</span>
					</div> -->
				</div>
				<div class="hero-words">
					<?php the_content(); ?>
				</div>
			</div>

		</section>
		<section class="featured-section">
			<div class="content">
				<div class="grid-section-group">
				  <div id="featured-work" class="grid-section-intro">
				    <h2>Featured Work</h2>
				  </div>
				  <div class="featured-work-section">
						<?php if( have_rows('featured_work_two') ):
						  while ( have_rows('featured_work_two') ) : the_row();?>

							<?php $pubType = get_sub_field('publication_type');?>

						  <?php if( $pubType == 'book'):?>
								<?php get_template_part('partials/_home-featured-book');?>
						  <?php elseif($pubType == 'oped'):?>
								<?php get_template_part('partials/_home-featured-oped');?>
						  <?php elseif($pubType == 'article'):?>
								<?php get_template_part('partials/_home-featured-articles');?>
						  <?php elseif($pubType == 'unpublished'):?>
								<?php get_template_part('partials/_home-featured-unpublished');?>
							<?php elseif($pubType == 'radiotv'):?>
								<?php get_template_part('partials/_home-featured-radiotv');?>
							<?php elseif($pubType == 'interviews'):?>
								<?php get_template_part('partials/_home-featured-interviews');?>
							<?php elseif($pubType == 'publictalks'):?>
								<?php get_template_part('partials/_home-featured-publictalks');?>
						  <?php endif;?>

						  <?php endwhile;?>
						<?php endif;?>
						<?php if(get_field('featured_writeup')):?>
							<div class="featured-writeup">
								<?php the_field('featured_writeup');?>
							</div>
						<?php endif;?>
					</div>
				</div>
			</div>
		</section>
		<section class="main-section">
			<div class="content">
				<div class="grid-section-group">
				  <div id="recent-work" class="grid-section-intro">
				    <h2>Recent Work</h2>
				  </div>
				  <div class="publication-section-publications grid-container-two">

						<?php if( have_rows('featured_publications') ):
						  while ( have_rows('featured_publications') ) : the_row();?>

							<?php $pubType = get_sub_field('publication_type');?>

						  <?php if( $pubType == 'book'):?>
								<?php get_template_part('partials/_home-featured-book');?>
						  <?php elseif($pubType == 'oped'):?>
								<?php get_template_part('partials/_home-featured-oped');?>
						  <?php elseif($pubType == 'article'):?>
								<?php get_template_part('partials/_home-featured-articles');?>
						  <?php elseif($pubType == 'unpublished'):?>
								<?php get_template_part('partials/_home-featured-unpublished');?>
						  <?php endif;?>


						  <?php endwhile;?>
						<?php endif;?>
					</div>
				</div>
			</div>
		</section>
	<?php endwhile; ?>
</main>
<?php get_footer(); ?>
