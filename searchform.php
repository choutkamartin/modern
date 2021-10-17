<form action="<?php echo home_url( "/" ); ?>" method="get" class="d-flex">
    <input class="form-control me-2" name="s" type="search" placeholder="Hledat" aria-label="Search"
           value="<?php the_search_query(); ?>">
    <button class="btn btn-outline-success" type="submit">Hledat</button>
</form>