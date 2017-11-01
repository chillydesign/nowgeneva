
<div class="other_articles">
    <div class="row">
<?php $pp = 0; if (have_posts()):  while (have_posts()) : the_post(); ?>


    <div class="col-sm-4">

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

		   <?php $image = ( has_post_thumbnail()) ? thumbnail_of_post_url(get_the_ID(),  'medium') : ''; ?>
           <?php   $excerpt = explode(' ', strip_tags( get_the_excerpt()));
                  $excerpt = implode(' ',  array_slice($excerpt, 0, 35) ); ?>
           <a  class="article_image" href="<?php the_permalink(); ?>" style="background-image:url('<?php echo $image; ?>');" title="<?php the_title(); ?>"></a>



		<h3><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>
        <?php $categories = wp_get_post_terms( get_the_ID(), 'category');   ?>
        <?php if (sizeof($categories) > 0) : ?>
            <p class="category"><?php echo ($categories[0]->name); ?></p>
        <?php endif; ?>

		<p><?php echo $excerpt; ?></p>

		<?php // edit_post_link(); ?>

	</article>
    </div>


    <?php if ($pp % 3 == 2)  echo '</div><!--  END OF ROW --><div class="row">'; ?>

    <?php $pp++; endwhile; ?>

<?php else: ?>

	<!-- article -->
	<article>
		<h4 style="text-align:center;"><?php _e( 'Aucun article ne correspond aux termes recherchés', 'webfactor' ); ?></h4>
	</article>
	<!-- /article -->

<?php endif; ?>

</div>
</div>
