<?php /* Template Name: Public Appearances */ get_header(); ?>
<main class="public-appearances-page">
	<?php get_template_part('partials/_duotone-svg');?>
	<?php while (have_posts()) : the_post(); ?>
		<section class="hero-section">
			<img class="hero-pic duotone" src="<?php echo get_template_directory_uri(); ?>/img/jjm-headshot-2.jpg" >
			<div class="content">
				<h1><?php the_title(); ?></h1>
				<?php the_content(); ?>
			</div>
		</section>
		<section class="page-subnav-section">
			<div class="content">
				<?php if( have_rows('public_appearance_lists') ):
					while ( have_rows('public_appearance_lists') ) : the_row();?>

						<?php if( have_rows('public_appearance_section') ):
							while ( have_rows('public_appearance_section') ) : the_row();?>

								<?php $linkName = get_sub_field('title');?>
								<?php $linkName = str_replace(' ', '', $linkName);?>
								<?php $linkName = strtolower($linkName);?>

								<div class="subnav-link">
									<a class="c-block-fill" href="#<?php echo $linkName;?>"></a>
									<?php the_sub_field('title');?>
								</div>
							<?php endwhile;?>
						<?php endif;?>
					<!-- Publication List Group -->
					<?php endwhile;?>
				<?php endif;?>
			</div>
		</section>
		<section class="public-appearance-section">
			<div class="content">

				<?php if( have_rows('public_appearance_lists') ):
				  while ( have_rows('public_appearance_lists') ) : the_row();?>

						<?php if( have_rows('public_appearance_section') ):
					  	while ( have_rows('public_appearance_section') ) : the_row();?>

							<?php $linkName = get_sub_field('title');?>
							<?php $linkName = str_replace(' ', '', $linkName);?>
							<?php $linkName = strtolower($linkName);?>

								<div id ="<?php echo $linkName;?>" class="grid-section-group">
									<div class="grid-section-intro">
										<h2><?php the_sub_field('title');?></h2>
									</div>
									<div class="public-appearance-section-appearances grid-container-three">
					        	<?php if( have_rows('list') ):
					          	while ( have_rows('list') ) : the_row();?>

					            	<?php if( have_rows('single') ):
					              	while ( have_rows('single') ) : the_row();?>
														<div class="single-public-appearance grid-item grid-item-halves">
															<div class="color-back"></div>
															<div class="grid-info">
																<?php if(get_sub_field('date')):?>
																	<h4 class="grid-date">
																		<?php the_sub_field('date');?>
																	</h4>
																<?php endif;?>
																<h3 class="grid-name">
																	<?php the_sub_field('title');?>
																</h3>
																<?php if(get_sub_field('publisher')):?>
																	<h4 class="grid-publication-name">
																		<?php the_sub_field('publisher');?>
																	</h4>
																<?php endif;?>
															</div>
															<div class="single-publication-link">
																<?php if( get_sub_field('link') == 'PDF' ): ?>
																	<div class="button grid-button">
																		Read <i class="fas fa-file"></i>
																	</div>
																<?php elseif( get_sub_field('link') == 'Audio' ): ?>
																	<div class="button grid-button">
																		<!-- View <i class="fal fa-arrow-right"></i> -->
																		Listen <i class="far fa-microphone"></i>
																	</div>
																<?php elseif( get_sub_field('link') == 'Video' ): ?>
																	<div class="button grid-button">
																		<!-- View <i class="fal fa-arrow-right"></i> -->
																		Watch <i class="far fa-video"></i>
																	</div>
																<?php endif; ?>
															</div>
															<?php if( get_sub_field('link') == 'PDF' ): ?>
																<?php $file = get_sub_field('pdf_link');?>
																<a class="c-block-fill" href="<?php echo $file['url']; ?>" target="_blank"></a>
															<?php elseif( get_sub_field('link') == 'Audio' ): ?>
																<a class="c-block-fill" href="<?php the_sub_field('audio_link');?>" target="_blank"></a>
															<?php elseif( get_sub_field('link') == 'Video' ): ?>
																<a class="c-block-fill" href="<?php the_sub_field('video_link');?>" target="_blank"></a>
															<?php endif; ?>
														</div>
													<!-- Single Publication Repeater -->
						              <?php endwhile;?>
						            <?php endif;?>
											<!-- Publication List Group -->
						          <?php endwhile;?>
						        <?php endif;?>
									</div>

								</div>
							<!-- One Publication Section Repeater -->
				      <?php endwhile;?>
				    <?php endif;?>
						<!-- All Publication Groups -->
				  <?php endwhile;?>
				<?php endif;?>


			</div>
		</section>
	<?php endwhile; ?>
</main>
<?php get_footer(); ?>
