<form role="search" method="get" action="<?php echo esc_url(home_url('/')); ?>">
  <input type="search" placeholder="<?php echo esc_attr_x('Search...', 'placeholder'); ?>" 
         value="<?php echo get_search_query(); ?>" name="s" />
  <button type="submit">Search</button>
</form>