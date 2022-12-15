<!-- Template of the actual form -->
<form action="" method="get">
<label for="search">Search</label>

<input type="hidden" name="cat" value="6">


<input type="text" name="s" id="search" value="<?php the_search_query() ;?>" required>

<button type="submit">サーチ</button>
</form>

<!-- http://localhost/wp/?s=chocolate -->


