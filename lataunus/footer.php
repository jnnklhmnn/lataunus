<?php
/**
* The template for displaying the footer.
*
* Contains the closing of the #content div and all content after
*
* @package lataunus
*/
?>
    </div><!-- #content -->
    <footer id="colophon" class="site-footer" role="contentinfo">
      <div class="footer">
        <!--styles for the navbar customization-->
        <style type="text/css">
        <?php if (get_option('navbar-color')){ ?>
        ul#footer.lata-footer {background-color: <?php echo get_option('navbar-color');?> ; }
        <?php } else { ?>
        ul#footer.lata-footer {background-color: #754012; }
        .footer ul{background-color: #754012; }
        <?php } ?>
        </style>
        <?php wp_nav_menu( array( 'theme_location' => 'footer', 'menu_id' => 'footer', 'menu_class' => 'lata-footer', 'container' => 'false', 'depth' => '1', 'walker' => new wp_bootstrap_navwalker  ) ); ?>
      </div>
      <div class="site-info">
        <a href="<?php echo esc_url( __( 'https://wordpress.org/', 'lataunus' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'lataunus' ), 'WordPress' ); ?></a>
        <span class="sep"> | </span>
        <?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'lataunus' ), 'lataunus', '<a href="http://www.jannikmueller.com" >Jannik Müller</a>' ); ?>	
        <?php if (get_background_image()=="") {?>
          <span class="sep"> | </span>
          &copy; Background-picture <a href="https://www.flickr.com/photos/andyrs/2714385699">Andy Simonds</a>
        <?}?>
      </div><!-- .site-info -->	
    </footer><!-- #colophon -->
  </div><!-- #page -->
  <?php wp_footer(); ?>
  </div><!--container-->
</body>
</html>
