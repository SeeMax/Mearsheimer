<?php /* Template Name: Publication Loops */ get_header(); ?>
	<main class="publications-page">
		<?php get_template_part('partials/_duotone-svg');?>
		<?php while (have_posts()) : the_post(); ?>
			<section class="hero-section">
				<img class="hero-pic duotone" src="<?php echo get_template_directory_uri(); ?>/img/jjm-headshot-2.jpg" >
				<div class="content">
					<h1 class="c-width-50"><?php the_title(); ?></h1>
					<?php the_content(); ?>
				</div>
			</section>
			<section class="page-subnav-section">
				<div class="content">
					<div class="subnav-link">
						<a class="c-block-fill" href="#books"></a>
						Books
					</div>
					<div class="subnav-link">
						<a class="c-block-fill" href="#opeds"></a>
						Op-Ed Pieces
					</div>
					<div class="subnav-link">
						<a class="c-block-fill" href="#articles-and-book-chapters"></a>
						Articles and Book Chapters
					</div>
					<!-- <div class="subnav-link">
						<a class="c-block-fill" href="#public-affairs-commentary"></a>
						Public Affairs Commentary
					</div> -->
					<div class="subnav-link">
						<a class="c-block-fill" href="#unpublished-works"></a>
						Unpublished Works
					</div>
				</div>
			</section>
			<section class="publication-section">
			  <div class="content">
					<?php get_template_part('partials/_book-publication-section');?>
					<?php get_template_part('partials/_oped-publication-section');?>
					<?php get_template_part('partials/_articles-chapters-publication-section');?>
					<!-- <?php get_template_part('partials/_public-affairs-publication-section');?> -->
					<?php get_template_part('partials/_unpublished-publication-section');?>

				</div>
			</section>
		<?php endwhile; ?>
	</main>
	<?php get_footer(); ?>
