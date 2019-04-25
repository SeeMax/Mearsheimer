<?php /* Template Name: Photos */ get_header(); ?>
<main class="photos-page">
	<?php while (have_posts()) : the_post(); ?>
		<section class="hero-section">
			<div class="content">
				<h1 class="c-width-50"><?php the_title(); ?></h1>
			</div>
		</section>
		<section class="main-section">
			<div class="content">
				<?php the_content(); ?>
			</div>
		</section>
	<?php endwhile; ?>
</main>
<?php get_footer(); ?>
