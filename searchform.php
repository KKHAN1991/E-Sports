<form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
	<div class="search-group">
		<div class="input-group">
			<input type="search" class="form-control search-field" placeholder="<?php echo esc_attr_x( '', 'placeholder' ) ?>" value="<?php echo get_search_query() ?>" name="s" title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>" />
			<div class="input-group-addon"><button type="submit" class=""><i id="search-form-icon"></i></button>
			</div>
		</div>
	</div>
</form>

<!--<form role="search" method="get" class="search-form" action="--><?php //echo home_url( '/' ); ?><!--">-->
<!--	<label>-->
<!--	    <input type="search" class="search-field" placeholder="--><?php //echo esc_attr_x( '', 'placeholder' ) ?><!--" value="--><?php //echo get_search_query() ?><!--" name="s" title="--><?php //echo esc_attr_x( 'Search for:', 'label' ) ?><!--" />-->
<!--		<button type="submit" class="search-submit"><i id="search-form-icon"></i></button>-->
<!--	</label>-->
<!---->
<!--</form>-->
<!---->
