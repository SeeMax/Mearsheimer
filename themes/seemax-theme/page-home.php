<?php /* Template Name: Home */ get_header(); ?>
<main class="home-page">
	<?php get_template_part('partials/_duotone-svg-light');?>
	<?php while (have_posts()) : the_post(); ?>
		<section class="hero-section">
			<img class="hero-pic duotone" src="<?php echo get_template_directory_uri(); ?>/img/Mearchiavelli-VIII-edit.jpg" >
			<div class="content no-flex">
				<h1><?php the_title();?></h1>
				<?php the_content(); ?>
			</div>
		</section>
		<section class="main-section">
			<div class="content">
				<div class="grid-section-group">
				  <div class="grid-section-intro">
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
