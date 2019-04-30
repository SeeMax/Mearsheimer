<?php /* Template Name: Contact */ get_header(); ?>
<main class="contact-page">
	<?php get_template_part('partials/_duotone-svg');?>
	<?php while (have_posts()) : the_post(); ?>
		<section class="hero-section">
			<svg class="hero-pic" viewBox="0 0 100 100" preserveAspectRatio="none">
				<image height="100%" width='100%' xlink:href="<?php echo get_template_directory_uri(); ?>/img/jjm-headshot-2.jpg" filter="url(#duotone)" />
			</svg>
			<div class="content">
				<!-- <h1><?php the_title(); ?></h1> -->
				<?php the_content(); ?>
				<div class="contact-block-container">
					<div class="contact-page-block">
						<h2>Address</h2><?php the_field('address', 'options'); ?>
					</div>
					<div class="contact-page-block">
						<h2>Email</h2><a href="mailto:<?php the_field('email', 'options'); ?>"><?php the_field('email', 'options'); ?> <i class="fas fa-envelope-square"></i></a>
					</div>
					<div class="contact-page-block">
						<?php if(get_field('phone', 'options')): ?>
							<h2>Phone</h2>
							<a href="tel:<?php the_field('phone', 'options'); ?>"><?php the_field('phone', 'options'); ?> <i class="fas fa-phone-square"></i></a>
						<?php endif;?>
					</div>
					<!-- <div class="contact-page-block c-width-33">
						<?php if(get_field('fax', 'options')): ?>
							<h2>Fax</h2><?php the_field('fax', 'options'); ?>
						<?php endif;?>
					</div> -->
				</div>
			</div>
		</section>
	<?php endwhile; ?>
</main>
<?php get_footer(); ?>
