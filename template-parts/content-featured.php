<article <?php post_class( array(
    'class' => 'featured'
)); ?>>
    
    <div class="thumbnail">
        <a href="<?php the_permalink(); ?>">
    <?php the_post_thumbnail( 'large', array( 'class' => 'img-fluid' ) ); ?></a>
    </div>
    <a href="<?php the_permalink(); ?>">
    <h2><?php the_title(); ?></h2></a>
    <div class="meta-info">
        <p>
        <?php _e('by ', 'learnwp') ?><span>  <?php the_author_posts_link(); ?></span>
        <?php _e('Categories: ', 'learnwp') ?><span><?php the_category( ' ' );?></span>
        <?php _e('Tags: ', 'learnwp') ?><span><?php the_tags( ' ',); ?></span>
           
        </p>
       <p><?php _e('Posted on ', 'learnwp' ) ?><span> <?php  echo get_the_date();?></span></p>
    </div>
    <p><?php the_excerpt(); ?></p>
</article>