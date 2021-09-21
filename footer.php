<footer>
    <div class="container">
        <div class="row">
        <div class="copywright col-sm-7 col-4">
            <p>Copyright</p>
        </div>
        <nav class="footer-menu col-sm-5 col-8 text-end">
        <?php wp_nav_menu( array( 'theme_location' => 'my_footer_menu' ) ); ?>
        </nav>
        </div>
    </div>
   
   </footer>
   <?php wp_footer(); ?>
</body>
</html>