<form class="search-form" action="<?php echo esc_url( home_url('/') ); ?>">
<input class="search-input" type="text" name="s" placeholder="<?php _d('Search...'); ?>" value="<?php echo get_search_query(); ?>" spellcheck="false">
<button type="submit" id=""><span class="icon-search2"></span></button>
</form>