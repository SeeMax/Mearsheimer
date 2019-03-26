<?php /* Template Name: Publications */ get_header(); ?>
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
					<div class="subnav-link title-link">
						Jump To:
					</div>
					<div class="subnav-link">
						<a class="c-block-fill" href="books"></a>
						Books
					</div>
					<div class="subnav-link">
						<a class="c-block-fill" href="#unpublished"></a>
						Unpublished
					</div>
				</div>
			</section>
			<section class="publication-section">
				<div class="content">

					<?php if( have_rows('publication_lists') ):
					  while ( have_rows('publication_lists') ) : the_row();?>

							<?php if( have_rows('publication_section') ):
						  	while ( have_rows('publication_section') ) : the_row();?>

									<div class="publication-section-group">
										<div class="publication-section-intro">
											<h2 class="c-width-50"><?php the_sub_field('title');?></h2>
							        <p class="publication-section-description">
												<?php the_sub_field('description');?>
											</p>
										</div>
										<div class="publication-section-publications grid-container-two">
						        	<?php if( have_rows('list') ):
						          	while ( have_rows('list') ) : the_row();?>

						            	<?php if( have_rows('single') ):
						              	while ( have_rows('single') ) : the_row();?>
															<div class="single-publication grid-item grid-item-halves">
																<div class="color-back"></div>
																<div class="grid-info">
																	<?php if(get_sub_field('publisher')):?>
																		<h4 class="grid-publication-name">
																			<?php if(get_sub_field('publisher')):?>
																				<?php the_sub_field('publisher');?>
																			<?php endif;?>
																		</h4>
																	<?php endif;?>

																	<h3 class="grid-name">
																		<?php the_sub_field('title');?>
																	</h3>
																	<h4 class="grid-author">
																		<?php the_sub_field('author');?>
																	</h4>
																</div>
																<div class="single-publication-link">
																	<?php if( get_sub_field('link') == 'File' ): ?>
																		<div class="button grid-button">
																			Download <i class="fal fa-arrow-down"></i>
																		</div>
																	<?php elseif( get_sub_field('link') == 'Link' ): ?>
																		<div class="button grid-button">
																			Visit <i class="fal fa-arrow-right"></i>
																		</div>
																	<?php endif; ?>
																</div>
																<?php if( get_sub_field('link') == 'File' ): ?>
																	<?php $file = get_sub_field('link_file');?>
																	<a class="c-block-fill" href="<?php echo $file['url']; ?>" target="_blank"></a>
																<?php elseif( get_sub_field('link') == 'Link' ): ?>
																	<a class="c-block-fill" href="<?php the_sub_field('link_page');?>" target="_blank"></a>
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
