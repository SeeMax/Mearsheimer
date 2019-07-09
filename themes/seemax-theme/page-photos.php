<?php /* Template Name: Photos */ get_header(); ?>
<main class="photos-page">
	<?php while (have_posts()) : the_post(); ?>
		<section class="hero-section">
			<div class="content">
				<h1><?php the_title(); ?></h1>
			</div>
		</section>
		<section class="page-subnav-section">
			<div class="content">
				<?php if( have_rows('photos_download_bar') ):
					while ( have_rows('photos_download_bar') ) : the_row();?>
					<?php the_sub_field('copy');?>
					<div class="button">
						<?php $linkName = get_sub_field('zip_link');?>
						<a class="c-block-fill" href="<?php echo $linkName;?>"></a>
						ZIP <i class="fal fa-file-archive"></i>
					</div>
					<?php endwhile;?>
				<?php endif;?>
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
