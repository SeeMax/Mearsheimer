<?php $post_object = get_sub_field('op_ed_publication');
if( $post_object ):$post = $post_object;setup_postdata( $post );?>

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
          <?php if($pubNote):?>
            <div class="grid-item-note">
              <?php echo $pubNote;?>
            </div>
          <?php endif;?>
        </div>
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
  <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
<?php endif; ?>
