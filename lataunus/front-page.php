<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package lataunus
 */

get_header(); 

?>

<div class="row">
	<div class="front-page">
		<main id="main" class="site-main" role="main">	
		
		<div class="container">
			<div class="row">
				<div class="col-md-10 col-md-offset-1">
					<div class="main-slider">
					<?php   
					if (get_option('front-page-image')){

	   					$alttag=get_post_meta(get_attachment_id_from_url(get_option('front-page-image')), '_wp_attachment_image_alt', true);	
						if ($alttag) {?>
						<div><img class="img-responsive big-teaser" alt="<?php echo $alttag; ?>" src="<?php echo get_option('front-page-image') ?>"></div>				
						<?}else{?>
						<div><img class="img-responsive big-teaser" src="<?php echo get_option('front-page-image') ?>"></div>
						<?}
					}?>
					<?php   
					if (get_option('front-page-image2')){
						$alttag=get_post_meta(get_attachment_id_from_url(get_option('front-page-image2')), '_wp_attachment_image_alt', true);
						if ($alttag) {?>
						<div><img class="img-responsive big-teaser" alt="<?php echo $alttag; ?>" src="<?php echo get_option('front-page-image2') ?>"></div>				
						<?}else{?>
						<div><img class="img-responsive big-teaser" src="<?php echo get_option('front-page-image2') ?>"></div>
						<?}
					}?>
					<?php   
					if (get_option('front-page-image3')){
						$alttag=get_post_meta(get_attachment_id_from_url(get_option('front-page-image3')), '_wp_attachment_image_alt', true);
						if ($alttag) {?>
						<div><img class="img-responsive big-teaser" alt="<?php echo $alttag; ?>" src="<?php echo get_option('front-page-image3') ?>"></div>				
						<?}else{?>
						<div><img class="img-responsive big-teaser" src="<?php echo get_option('front-page-image3') ?>"></div>
						<?}
					}?>
					<?php   
					if (get_option('front-page-image4')){
						$alttag=get_post_meta(get_attachment_id_from_url(get_option('front-page-image4')), '_wp_attachment_image_alt', true);
						if ($alttag) {?>
						<div><img class="img-responsive big-teaser" alt="<?php echo $alttag; ?>" src="<?php echo get_option('front-page-image4') ?>"></div>				
						<?}else{?>
						<div><img class="img-responsive big-teaser" src="<?php echo get_option('front-page-image4') ?>"></div>
						<?}
					}?>
					<?php   
					if (get_option('front-page-image5')){
						$alttag=get_post_meta(get_attachment_id_from_url(get_option('front-page-image5')), '_wp_attachment_image_alt', true);
						if ($alttag) {?>
						<div><img class="img-responsive big-teaser" alt="<?php echo $alttag; ?>" src="<?php echo get_option('front-page-image5') ?>"></div>				
						<?}else{?>
						<div><img class="img-responsive big-teaser" src="<?php echo get_option('front-page-image5') ?>"></div>
						<?}
					}?>
					<?php   
					if (get_option('front-page-image6')){
						$alttag=get_post_meta(get_attachment_id_from_url(get_option('front-page-image6')), '_wp_attachment_image_alt', true);
						if ($alttag) {?>
						<div><img class="img-responsive big-teaser" alt="<?php echo $alttag; ?>" src="<?php echo get_option('front-page-image6') ?>"></div>				
						<?}else{?>
						<div><img class="img-responsive big-teaser" src="<?php echo get_option('front-page-image6') ?>"></div>
						<?}
					}?>
					</div>
				</div>

			</div>
		</div>
		<div class="row">
			<div id="primary" class="content-area front-page-text">
				

					<?php while ( have_posts() ) : the_post(); ?>

						<?php get_template_part( 'template-parts/content', 'page' ); ?>
						<?php
							// If comments are open or we have at least one comment, load up the comment template
							if ( comments_open() || get_comments_number() ) :
								comments_template();
							endif;
						?>

					<?php endwhile; // end of the loop. ?>

			</div><!-- #primary -->
		</div>


		<div class="row">
		<?php
		$args = array(
			'post_type' => 'front-page_teaser',
			'orderby' => 'date',
			'showposts'=> '3'
		);
$counter=0;
// The Query
$the_query = new WP_Query( $args );

// The Loop
if ( $the_query->have_posts() ) {
	while ( $the_query->have_posts() ) {
		$the_query->the_post();
		?>

		<?php if (get_post_meta ( get_the_ID(), 'link', true)!="") {
			$linkurl=get_post_meta ( get_the_ID(), 'link', true);
		 	?> <a href="<?php echo $linkurl;?>"> <?php }?>

		<div class="col-md-3 col-sm-3 front-teaser<?php if ($counter==0){echo " teaser-left";}?>">		
					<?php get_template_part( 'content', 'single' ); ?>
			



					<?php
					if(has_post_thumbnail(get_the_ID())==1){
					
					 echo the_post_thumbnail( 'teaser-thumbnail', array( 'class' => 'img-responsive teaser-img' ));
						?>
					<hr class="teaser-hr">
					<?php 
					} ?>
					
					<div class="teaser-text-section">
						
						<h4><?php echo get_the_title();?></h4>
						<p class="teaser-text"><?php echo get_the_content();?></p>
					</div>
				</div>
				<?php if (get_post_meta ( get_the_ID(), 'link', true)!="") {
				 	?> </a> <?php }?>
		<?
		$counter++;
	}//end while
}
/* Restore original Post Data */

wp_reset_postdata();?>

		</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php //get_sidebar(); ?>
</div>
<?php get_footer(); ?>