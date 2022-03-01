  <form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
 
    <input type="text" name="s"  placeholder="Search" id="search" value="<?php the_search_query(); ?>" />
   
</form>