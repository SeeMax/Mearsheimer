<?php /* Template Name: Contact */ get_header(); ?>
<main class="contact-page">
	<?php while (have_posts()) : the_post(); ?>
		<section class="main-section">
			<div class="content">
				<h1><?php the_title(); ?></h1>
				<?php the_field('address', 'options'); ?>
				<?php the_field('email', 'options'); ?>
				<?php the_field('phone', 'options'); ?>
				<?php the_field('fax', 'options'); ?>
			</div>
		</section>
	<?php endwhile; ?>
</main>
<?php get_footer(); ?>
