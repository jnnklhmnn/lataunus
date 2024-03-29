<?php get_header(); ?>
  <div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

          <article class="post">
            <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            
            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            <p>
              By <?php the_author(); ?> 
              on <?php echo the_time('l, F jS, Y');?>
              in <?php the_category( ', ' ); ?>.
              <a href="<?php comments_link(); ?>"><?php comments_number(); ?></a>
            </p>

            <hr>

            <?php the_excerpt(); ?>
            </div>
          </article>

         
        <?php endwhile; else: ?>
          
          <div class="page-header">
            <h1>Oh no!</h1>
          </div>

          <p>No content is appearing for this page!</p>

        <?php endif; ?>

    </main><!-- #main -->
  </div><!-- #primary -->

<?php //get_sidebar(); ?>
<?php get_footer(); ?>







