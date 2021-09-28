<article <?php post_class(); ?>>
<a href="<?php the_permalink(); ?>">
    <h2><?php the_title(); ?></h2></a>
    <a href="<?php the_permalink(); ?>">
    <?php the_post_thumbnail( 'large', array( 'class' => 'img-fluid' ) ); ?><a>
    <div class="meta-info">
        <p><?php _e('by ', 'learnwp') ?><span><?php the_author_posts_link(); ?> </span></p>
        <p><?php _e('Posted on ', 'learnwp')?> <span><?php  echo get_the_date();?> </span><?php _e('by ', 'learnwp') ?><span><?php the_author_posts_link(); ?></span></p>
        <!-- <p><?php _e('Categories: ', 'learnwp') ?> <span><?php the_category( ' ' );?> </span></p> -->
        <p><?php _e('Tags: ', 'learnwp') ?><span><?php the_tags( ' ',); ?></span></p>
    </div>
    <p><?php the_excerpt(); ?></p>
</article>