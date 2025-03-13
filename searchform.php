<!-- Custom search form -->
<form role="search" aria-label="Search the site" method="get" class="search-form" action="<?php echo esc_url(home_url('/')); ?>">
    <label for="search-field" class="screen-reader-text">
        <?php echo _x('Search for:', 'label'); ?>
    </label>
    <input type="search" id="search-field" name="s" class="search-field focus:outline-none focus:ring focus:ring-primary" placeholder="<?php echo esc_attr_x('Search &hellip;', 'placeholder'); ?>" value="<?php echo get_search_query(); ?>" />
    <input type="submit" class="search-submit border-2 px-4 py-1 bg-black text-white hover:bg-white hover:text-black cursor-pointer" value="<?php echo esc_attr_x('Search', 'submit button'); ?>" />
</form>
