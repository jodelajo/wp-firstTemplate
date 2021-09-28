<article <?php post_class(); ?>>
<a href="<?php the_permalink(); ?>">
    <h2><?php the_title(); ?></h2></a>
    <div class="meta-info">
    <p><?php _e('by ', 'learnwp') ?><span><?php the_author_posts_link(); ?></span></p>
    <?php if( has_category() ): ?>
    <p><?php _e('Categories: ', 'learnwp') ?><span><?php the_category( ' ' );?></span></p>
    <?php  endif; ?>
    <?php if(has_tag() ): ?>
    <p><?php _e('Tags: ', 'learnwp') ?><span><?php the_tags( ' ',); ?></span></p>
    <?php endif; ?>
    </div>
    <p><?php the_excerpt(); ?></p>
</article>