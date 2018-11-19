<?php /* Template Name: Teaching */ get_header(); ?>
<main class="teaching-page">
	<?php while (have_posts()) : the_post(); ?>
		<section class="main-section">
			<div class="content">
				<h1><?php the_title(); ?></h1>
				<?php the_content(); ?>
			</div>
		</section>
		<section class="teaching-links-section">
			<div class="content">
				<?php if(have_rows('course_links')): while (have_rows('course_links')): the_row();?>
					<div class="single-course-link">
						<div class="single-course-name">
							<?php the_sub_field('single_course_name'); ?>
						</div>
						<div class="single-course-date">
							<?php the_sub_field('single_course_date'); ?>
						</div>
						<div class="button">
							<a class="c-block-fill" href='<?php the_sub_field('single_course_pdf'); ?>'></a>
							Download PDF
						</div>
					</div>
				<?php endwhile; endif;?>
			</div>
		</section>
	<?php endwhile; ?>
</main>
<?php get_footer(); ?>
