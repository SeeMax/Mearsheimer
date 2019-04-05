<?php /* Template Name: Biography */ get_header(); ?>
<main class="biography-page general-page">
	<?php while (have_posts()) : the_post(); ?>
		<section class="main-section">
			<div class="content no-flex">
				<h1><?php the_title(); ?></h1>
				<?php the_content(); ?>
			</div>
		</section>
	<?php endwhile; ?>
</main>
<?php get_footer(); ?>
