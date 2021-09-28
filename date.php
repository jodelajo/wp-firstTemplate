<?php get_header(); ?>
<img class="img-fluid" src="<?php  header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" />
   <div class="content-area">
       <main>

           <section class="middle-area">
               <div class="container">
                   <div class="row">
                   
                <div class="archive col-md-9">
                    <?php 

                    the_archive_title( '<h1 class="archive-title">', '</h1>' );
                    the_archive_description();
                    //If there are any posts
                    if(have_posts()):
                        //While have posts, show them
                        while(have_posts()): the_post();

                        get_template_part( 'template-parts/content' , 'date' );
                        endwhile;
                        ?>
                       <div class="row">
                           <div class="pages col-md-6 text-start" >
                               <?php previous_posts_link (__("<< Newer Posts", 'learnwp')); ?>
                           </div>
                           <div class="pages col-md-6 text-end" >
                           <?php next_posts_link (__("Older Posts>>", 'learnwp')); ?>
                           </div>
                       </div>
                        <?php
                    else:
                    ?>
                     <p><?php _e("There's nothing to be displayed..."); ?></p>
                    <?php 
                    endif;
                    ?>
                </div>
                <aside class="sidebar col-md-3 h-100"><?php get_sidebar( 'blog' ) ?></aside>
                   </div>
    
               </div>  
       </section>
      
       </main>
     
   </div>
   <?php get_footer(); ?>
  