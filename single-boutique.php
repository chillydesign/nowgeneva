<?php get_header(); ?>




<?php if (have_posts()): while (have_posts()) : the_post(); ?>

    <!-- article -->
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

        <?php  $boutique_cats = get_the_terms( get_the_ID(), 'boutique_cat' ); ?>


        <div class="container">

                        <h1><span><?php the_title(); ?></span></h1>
                        <?php  if ($boutique_cats) : ?>
                        <p class="single-category"><?php  echo $boutique_cats[0]->name; ?></p>
                        <?php endif; ?>
              <div class="row">
                <div class="col-sm-6 col-md-6">
                  <?php the_post_thumbnail();?>
                </div>
                <div class="col-sm-6 col-md-6">
                    <?php the_content(); // Dynamic Content ?>
                </div>
              </div>
              <div class="row" style="margin-top:100px;">
                <div class="col-sm-6">
                <div class="infos_boutique">
                  <h2><span><?php the_title(); ?></span></h2>
                  <div class="boutique_tags"><?php echo get_field('extra'); ?></div>
                  <div class="row">
                      <div class="col-sm-4">
                        <?php if(get_field('when')){ echo '<h6>Quand</h6>' . get_field('when'); } ?>
                      </div>
                      <div class="col-sm-4">
                        <?php if(get_field('address')){ echo '<h6>Où</h6>' . get_field('address'); } ?>
                      </div>
                      <div class="col-sm-4">
                        <?php if(get_field('website')){ echo '<h6>Contact</h6><p><a href="' . get_field('website') . '" target="_blank">' . get_field('website') . '</a></p>'; } ?>
                        <?php if(get_field('phone')){ echo '<p>' . get_field('phone') . '</p>'; } ?>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6">
                            <div id="map_container"></div>
                            <script type='text/javascript'>
                                var location_address = '<?php echo preg_replace( "/\r|\n/", "", strip_tags(get_field("address"))); ?>' ;
                            </script>

                </div>
            </div>



            <?php get_template_part('partials/single', 'posts-from-shop'); ?>






            <?php edit_post_link(); // Always handy to have Edit Post Links available ?>



        </div>  <!-- END OF CONTAINER -->

    </article>
    <!-- /article -->

<?php endwhile; ?>

<?php else: ?>

    <!-- article -->
    <article class="container">

        <h1><?php _e( 'Sorry, nothing to display.', 'webfactor' ); ?></h1>

    </article>
    <!-- /article -->

<?php endif; ?>



<?php get_footer(); ?>