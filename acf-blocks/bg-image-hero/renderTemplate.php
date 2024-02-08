<section class="module bg_image_hero" style="background-image:url(
  <?php the_post_thumbnail_url(); ?>
)">
  <div class="container">
    <div class="content-wrapper text-box">
      <div class="textbox-editor">
        <?php the_field('textbox-editor'); ?>
      </div>
      <?php $linktype = get_field('cta'); ?>
      <?php if ($linktype == 'url'): ?>
        <?php $url_object = get_field('cta:url'); ?>
        <?php echo acf_relative_path($url_object); ?>
      <?php elseif ($linktype == 'postid'): ?>
        <?php $postid = get_field('cta:postid'); ?>
        <?php echo postid_to_url($postid); ?>
      <?php endif ?>
    </div>
    <div class="contact">
      <?php if (have_rows('contact')): ?>
        <?php while (have_rows('contact')):
          the_row(); ?>

          <div class="image-wrapper contact-img-bg">
          <img src="<?php echo get_template_directory_uri(); ?>/asset/img/default-Profil.png" alt="real" sizes="(max-width: 500px) 100vw, 500px">

            </div>
            <div class="text_wrapper">
              <q class="quote">
                <?php the_sub_field('quote'); ?>
              </q>
              <div class="position_and_name">
<span>Inhaber: </span>Thomas Pondelek              </div>
              <div class="email"><span>Email: </span><a href="mailto:info@page-effect.com">
              info@page-effect.com
              </a>
              </div>
              <div class="phone"><span>Tel: </span>
              09351 9599991            
              </div>
            </div>
          
        <?php endwhile; ?>
      <?php endif; ?>
    </div>
  </div>

</section>