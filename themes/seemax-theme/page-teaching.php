<?php /* Template Name: Teaching */ get_header(); ?>
<main class="teaching-page">
	<?php get_template_part('partials/_duotone-svg');?>
	<?php while (have_posts()) : the_post(); ?>
		<section class="hero-section">
			<img class="hero-pic duotone" src="<?php echo get_template_directory_uri(); ?>/img/teaching-back.jpg" >
			<div class="content">
				<h1 class="c-width-50"><?php the_title(); ?></h1>
				<?php the_content(); ?>
			</div>
		</section>
		<section class="courses-section">
			<div class="content">
				<div class="grid-section-group">
					<div class="course-section-courses grid-container-three">
						<?php $loop = new WP_Query( array(
				          'post_type' => 'courses_taught',
				          'posts_per_page' => -1,
				    ));?>
				    <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>

							<div class="single-course grid-item grid-item-halves">
								<div class="color-back"></div>
								<div class="grid-info">
									<h4 class="grid-date">
										<?php the_field('courses_date'); ?>
									</h4>
									<h3 class="grid-name">
										<?php the_title(); ?>
									</h3>
								</div>
								<div class="button grid-button">
									PDF <i class="fal fa-file"></i>
								</div>
								<a class="c-block-fill" href='<?php the_sub_field('courses_pdf'); ?>'></a>
							</div>
						<?php endwhile;?>
					</div>
				</div>

			</div>
		</section>
	<?php endwhile; ?>
</main>
<?php get_footer(); ?>
