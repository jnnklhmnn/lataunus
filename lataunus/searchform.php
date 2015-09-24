<form role="search" method="get"  class="searchform navbar-form navbar-left" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<div class="form-group">
		<label class="screen-reader-text" for="s"><?php _x( 'Search for:', 'label' ); ?></label>
		<input type="text" placeholder="Suche " value="<?php echo get_search_query(); ?>" class="form-control" id="s" name="s">
		
	</div>
</form>