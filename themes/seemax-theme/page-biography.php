<?php /* Template Name: Biography */ get_header(); ?>
<main class="biography-page general-page">
	<?php while (have_posts()) : the_post(); ?>
		<section class="page-subnav-section">
			<div class="content">
				<?php if( have_rows('curriculum_vitae_bar') ):
					while ( have_rows('curriculum_vitae_bar') ) : the_row();?>
					<?php the_sub_field('copy');?>
					<div class="button">
						<a class="c-block-fill" href="<?php $linkName = get_sub_field('pdf_link');?>"></a>
						PDF <i class="fal fa-file"></i>
					</div>
					<?php endwhile;?>
				<?php endif;?>
			</div>
		</section>
		<section class="main-section">
			<div class="content no-flex">
				<h1><?php the_title(); ?></h1>
				<?php the_content(); ?>
			</div>
		</section>
	<?php endwhile; ?>
</main>
<?php get_footer(); ?>
