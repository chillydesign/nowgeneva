<?php $boutiquealaune = new WP_Query(array( 'post_type' => 'boutiquealaune', 'posts_per_page' =>  1 ));  ?>

<?php  if ($boutiquealaune->have_posts() ) :   while($boutiquealaune->have_posts()) : $boutiquealaune->the_post();   ?>
    <?php $image = ( has_post_thumbnail()) ? thumbnail_of_post_url(get_the_ID(),  'large') : ''; ?>


<div class="container">
    <div class="advert">
        <?php $boutique_link = get_field('boutique'); ?>

        <a href="<?php echo ($boutique_link); ?>">
        <img src="<?php echo $image; ?>"  alt="<?php echo get_the_title(); ?>">
        </a>
        <div class="advert_text">
            <p><a href="<?php echo ($boutique_link); ?>"><?php echo get_the_title(); ?></a></p>

        </div>
    </div>


</div>

<?php   endwhile; endif; ?>
