<div id ="articles-and-book-chapters" class="grid-section-group">
  <div class="grid-section-intro">
    <h2>Articles and Book Chapters</h2>
  </div>
  <div class="publication-section-publications grid-container-two">

    <?php $loop = new WP_Query( array(
          'post_type' => 'articles_chapters',
          'posts_per_page' => -1,
    ));?>
    <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>

      <?php if( have_rows('publication_details') ):
        while ( have_rows('publication_details') ) : the_row();?>

          <?php $bookImage = get_sub_field('image');?>
          <?php $pubNote = get_sub_field('publication_note');?>
          <div class="single-publication grid-item grid-item-halves">
            <div class="color-back"></div>
            <?php if($bookImage):?>
              <img class="publication-book" src="<?php echo $bookImage['url'];?>">
            <?php endif;?>
            <div class="grid-info">
              <?php if(get_sub_field('publisher')):?>
                <h4 class="grid-publication-name">
                  <?php the_sub_field('publisher');?>
                </h4>
              <?php endif;?>
              <h3 class="grid-name">
                <?php the_title();?>
              </h3>
              <h4 class="grid-author">
                <?php the_sub_field('author');?>
              </h4>
            </div>
            <?php if($pubNote):?>
              <div class="grid-item-note">
                <?php echo $pubNote;?>
              </div>
            <?php endif;?>
            <div class="single-publication-link">
              <?php if( get_sub_field('link') == 'File' ): ?>
                <div class="button grid-button">
                  PDF <i class="fal fa-file"></i>
                </div>
              <?php elseif( get_sub_field('link') == 'Link' ): ?>
                <div class="button grid-button">
                  View <i class="fal fa-globe"></i>
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

        <?php endwhile;?>
      <?php endif;?>

    <?php endwhile; wp_reset_query(); ?>
  </div>
</div>
