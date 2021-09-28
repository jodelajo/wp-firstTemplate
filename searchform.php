<?php
/**
 * Template for displaying search forms in Learn WP
 *
 * @package WordPress
 * @subpackage Learn WP
 * @since Learn WP 1.0
 */
?>

<!-- <form id="searchform" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
    <input type="text" class="search-field" name="s" placeholder=<?php _e("Search", 'learnwp'); ?> value="<?php echo get_search_query(); ?>">
    <input type="hidden" value="post" name="post_type" id="post_type" class="type-post" />
    <input type="submit" value="OK">
</form> -->


<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<label>
		<input type="search" class="search-field" placeholder="<?php echo esc_attr_x( 'Search &hellip;', 'placeholder', 'learnwp' ); ?>" value="<?php echo get_search_query(); ?>" name="s" />
	</label>
	<button type="submit" class="search-submit"><span><?php echo _x( 'OK', 'submit button', 'learnwp' ); ?></span></button>
</form>
