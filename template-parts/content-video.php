<article <?php post_class(); ?>>
<a href="<?php the_permalink(); ?>">
    <h2><?php the_title(); ?></h2></a>
    <a href="<?php the_permalink(); ?>">
    <?php the_post_thumbnail( array(275,275) ); ?><a>
    <div class="meta-info">
        <p><?php _e('Posted on ', 'learnwp') ?><span><?php  echo get_the_date();?></span> </p>
        <p><?php _e('Categories: ', 'learnwp') ?><span><?php the_category( ' ' );?><span></p>
        <p><?php _e('Tags: ', 'learnwp') ?><span><?php the_tags( ' ',); ?></span></p>
    </div>  
    <p><?php the_content(); ?></p>
</article>