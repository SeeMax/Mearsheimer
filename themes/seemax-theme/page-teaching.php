<?php /* Template Name: Teaching */ get_header(); ?>
<main class="teaching-page">
	<?php while (have_posts()) : the_post(); ?>
		<section class="main-section">
			<div class="content">
				<h1><?php the_title(); ?></h1>
				<?php the_content(); ?>
			</div>
		</section>
		<section class="courses-section">
			<div class="content">
				<h2><?php the_field('courses_title');?></h2>
				<p class="course-section-description">
					<?php the_field('courses_description');?>
				</p>
				<?php the_field('courses_note');?>
				<?php if(have_rows('course_links')): while (have_rows('course_links')): the_row();?>
					<div class="single-course">
						<div class="single-course-info">
							<h3 class="single-course-name">
								<?php the_sub_field('single_course_name'); ?>
							</h3>
							<div class="single-course-date">
								<?php the_sub_field('single_course_date'); ?>
							</div>
						</div>
						<div class="button">
							<a class="c-block-fill" href='<?php the_sub_field('single_course_pdf'); ?>'></a>
							<i class="far fa-arrow-alt-circle-down"></i>
						</div>
					</div>
				<?php endwhile; endif;?>
			</div>
		</section>
	<?php endwhile; ?>
</main>
<?php get_footer(); ?>
