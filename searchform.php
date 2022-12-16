<!-- Template of the actual form -->
<form action="<?php echo home_url('/'); ?>" method="get" class="">
<!-- <label for="search">Search</label> -->

<!-- <input type="hidden" name="cat" value="6"> -->


<input type="text" name="s"  value="<?php the_search_query() ;?>" placeholder="Search" required class="searchInput">


<button class="searchBtn" type="submit"><i class="fas fa-search"></i></button>
</form>



