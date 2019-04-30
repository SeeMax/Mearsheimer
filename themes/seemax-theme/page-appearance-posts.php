<?php /* Template Name: Public Appearance Posts */ get_header(); ?>
<main class="public-appearances-page">
	<?php get_template_part('partials/_duotone-svg');?>
	<?php while (have_posts()) : the_post(); ?>
		<section class="hero-section">
			<svg viewBox="0 0 100 100" preserveAspectRatio="none" class="hero-pic">
				<image height="100%" width='100%' xlink:href="<?php echo get_template_directory_uri(); ?>/img/public-back.jpg" filter="url(#duotone)" />
			</svg>
			<div class="content">
				<h1><?php the_title(); ?></h1>
				<?php the_content(); ?>
			</div>
		</section>
		<section class="page-subnav-section">
			<div class="content">
				<div class="subnav-link">
					<a class="c-block-fill" href="#radio_and_tv_appearances"></a>
					Radio and TV Appearances
				</div>
				<div class="subnav-link">
					<a class="c-block-fill" href="#interviews"></a>
					Interviews
				</div>
				<div class="subnav-link">
					<a class="c-block-fill" href="#public-talks"></a>
					Public Talks
				</div>
			</div>
		</section>
		<section class="public-appearance-section">
			<div class="content">
				<?php get_template_part('partials/_radio-tv-appearances-section');?>
				<?php get_template_part('partials/_interviews-section');?>
				<?php get_template_part('partials/_public-talks-section');?>
			</div>
		</section>
	<?php endwhile; ?>
</main>
<?php get_footer(); ?>
