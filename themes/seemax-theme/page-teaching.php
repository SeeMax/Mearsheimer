<?php /* Template Name: Teaching */ get_header(); ?>
<main class="teaching-page">
	<?php get_template_part('partials/_duotone-svg');?>
	<?php while (have_posts()) : the_post(); ?>
		<section class="hero-section">
			<img class="hero-pic duotone" src="<?php echo get_template_directory_uri(); ?>/img/jjm-headshot-2.jpg" >
			<div class="content">
				<h1 class="c-width-50"><?php the_title(); ?></h1>
				<?php the_content(); ?>
			</div>
		</section>
		<section class="courses-section">
			<div class="content">
				<div class="course-section-intro">
					<h2 class="c-width-50"><?php the_field('courses_title');?></h2>
					<p class="course-section-description">
						<?php the_field('courses_description');?>
					</p>
					<?php the_field('courses_note');?>
				</div>

				<div class="course-section-courses grid-container-two">
					<?php if(have_rows('course_links')): while (have_rows('course_links')): the_row();?>
						<div class="single-course grid-item grid-item-halves">
							<div class="color-back"></div>
							<div class="grid-info">
								<h4 class="grid-date">
									<?php the_sub_field('single_course_date'); ?>
								</h4>
								<h3 class="grid-name">
									<?php the_sub_field('single_course_name'); ?>
								</h3>
							</div>
							<div class="button grid-button">
								Download <i class="fal fa-arrow-down"></i>
							</div>
							<a class="c-block-fill" href='<?php the_sub_field('single_course_pdf'); ?>'></a>
						</div>
					<?php endwhile; endif;?>
				</div>

			</div>
		</section>
	<?php endwhile; ?>
</main>
<?php get_footer(); ?>
