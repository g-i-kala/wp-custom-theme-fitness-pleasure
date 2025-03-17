<!-- Site Menu -->
<?php
$menu_class = esc_attr($args['menu_class']); 
$menu_id = isset($args['menu_id']) ? esc_attr($args['menu_id']) : 'navbar';
?>

<!-- Menu -->
<div id="<? $menu_id ?>" class="site-nav header-menu-container hidden lg:block">
    <nav role="navigation" aria-label="<?php _e('Main Navigation', 'fitness_pleasure'); ?>" class="navbar font-thin">
        <?php
        wp_nav_menu( array(
            'theme_location' => 'site-menu',
            'menu_class' => "site__menu flex $menu_class text-white *:px-2 *:hover:text-primary *:[&.current-menu-item]:text-primary", // each ul element class
        ) );
        ?>
        </nav>
</div>
