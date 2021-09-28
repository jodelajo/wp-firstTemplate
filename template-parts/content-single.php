<article id="post-<?php the_ID();?>" <?php post_class(); ?>>
    
    <header>
        <h1><?php the_title(); ?></h1>
		<div class="meta-info">
			<p><?php _e('Posted on ', 'learnwp') ?><span><?php echo get_the_date(); ?></span><?php _e('by ', 'learnwp') ?><span><?php the_author_posts_link(); ?></span></p>
			<p><?php _e('Categories: ', 'learnwp') ?><span><?php the_category( ' ' ); ?></span></p>
			<p><?php _e('Tags: ', 'learnwp') ?><span><?php the_tags( ' ',); ?></span></p>	
		</div>
    </header>

    <div class="content">
        <?php the_content(); ?>
    </div>

</article>
