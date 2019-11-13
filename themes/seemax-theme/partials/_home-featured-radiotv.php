<?php $post_object = get_sub_field('radio_tv');
if( $post_object ):$post = $post_object;setup_postdata( $post );?>

<?php if( have_rows('single_public_appearance') ):
  while ( have_rows('single_public_appearance') ) : the_row();?>

    <div class="single-public-appearance grid-item grid-item-halves">
      <div class="color-back"></div>
      <?php if( get_sub_field('link') == 'Embed' ): ?>
        <div class="embed-video-half c-width-100">
          <div class="iframe-box">
            <?php the_sub_field('iframe_link');?>
          </div>
        </div>
      <?php endif;?>
      <div class="grid-info">
        <?php if(get_sub_field('date')):?>
          <h4 class="grid-date">
            <?php the_sub_field('date');?>
          </h4>
        <?php endif;?>
        <h3 class="grid-name">
          <?php the_title();?>
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
            Read <i class="fal fa-file"></i>
          </div>
        <?php elseif( get_sub_field('link') == 'Audio' ): ?>
          <div class="button grid-button">
            <!-- View <i class="fal fa-arrow-right"></i> -->
            Listen <i class="fal fa-microphone"></i>
          </div>
        <?php elseif( get_sub_field('link') == 'Video' ): ?>
          <div class="button grid-button">
            <!-- View <i class="fal fa-arrow-right"></i> -->
            Watch <i class="fal fa-video"></i>
          </div>
        <?php elseif( get_sub_field('link') == 'Website' ): ?>
          <div class="button grid-button">
            <!-- View <i class="fal fa-arrow-right"></i> -->
            View <i class="fal fa-globe"></i>
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
      <?php elseif( get_sub_field('link') == 'Website' ): ?>
        <a class="c-block-fill" href="<?php the_sub_field('website_link');?>" target="_blank"></a>
      <?php endif; ?>gitu
    </div>
  <?php endwhile;?>
<?php endif;?>
  <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
<?php endif; ?>
