<form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
	<fieldset>

				<a class="search-toggle" aria-hidden="true" href="#">
					<i class="fa fa-search"></i>
				</a>
		
				<label>
					<input type="search" class="search-field" placeholder="TYPE AND HIT ENTER..." value="<?php echo esc_attr( get_search_query() ); ?>" name="s" title="Search for:" />
				</label>

				<input type="submit" class="screen-reader-text" id="search-submit" value="Search">
	</fieldset>
</form>
