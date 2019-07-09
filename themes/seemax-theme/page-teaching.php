<?php /* Template Name: Teaching */ get_header(); ?>
<main class="teaching-page">
	<?php get_template_part('partials/_duotone-svg');?>
	<?php while (have_posts()) : the_post(); ?>
		<section class="hero-section">
			<svg viewBox="0 0 100 100" preserveAspectRatio="none" class="hero-pic">
				<image height="100%" width='100%' xlink:href="<?php echo get_template_directory_uri(); ?>/img/teaching-back.jpg" filter="url(#duotone)" />
			</svg>
			<div class="content">
				<h1 class="c-width-50"><?php the_title(); ?></h1>
				<?php the_content(); ?>
			</div>
		</section>
		<section class="courses-section">
			<div class="content">
				<div class="grid-section-group">
					<div class="course-section-courses grid-container-three">
						<?php $loop = new WP_Query( array(
				          'post_type' => 'courses_taught',
				          'posts_per_page' => -1,
				    ));?>
				    <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>

							<div class="single-course grid-item grid-item-halves">
								<div class="color-back"></div>
								<div class="grid-info">
									<h4 class="grid-date">
										<?php if(get_field('courses_pdf_date')):?>
											<?php the_field('courses_pdf_date'); ?> /
										<?php endif;?>
										<?php if(get_field('courses_pdf_2_date')):?>
											<?php the_field('courses_pdf_2_date'); ?> /
										<?php endif;?>
										<?php if(get_field('courses_pdf_3_date')):?>
											<?php the_field('courses_pdf_3_date'); ?>
										<?php endif;?>
									</h4>
									<h3 class="grid-name">
										<?php the_title(); ?>
									</h3>
								</div>
								<div class="course-pdf-group">
									<?php
										$pdf1 = get_field('courses_pdf');
										$pdf1date = get_field('courses_pdf_date');
										$pdf2 = get_field('courses_pdf_2');
										$pdf2date = get_field('courses_pdf_2_date');
										$pdf3 = get_field('courses_pdf_3');
										$pdf3date = get_field('courses_pdf_3_date');
									?>
									<?php if($pdf1):?>
										<div class="button grid-button">
											<?php echo $pdf1date;?> PDF <i class="fal fa-file"></i>
											<a class="c-block-fill" href='<?php echo $pdf1;?>'></a>
										</div>
									<?php endif;?>
									<?php if($pdf2):?>
										<div class="button grid-button">
											<?php echo $pdf2date;?> PDF <i class="fal fa-file"></i>
											<a class="c-block-fill" href='<?php echo $pdf2;?>'></a>
										</div>
									<?php endif;?>
									<?php if($pdf3):?>
										<div class="button grid-button">
											<?php echo $pdf3date;?> PDF <i class="fal fa-file"></i>
											<a class="c-block-fill" href='<?php echo $pdf3;?>'></a>
										</div>
									<?php endif;?>
								</div>
							</div>
						<?php endwhile;?>
					</div>
				</div>

			</div>
		</section>
	<?php endwhile; ?>
</main>
<?php get_footer(); ?>
