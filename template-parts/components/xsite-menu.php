<!-- Site Menu Component -->
<?php
$menu_class = esc_attr($args['menu_class']); 
$menu_id = isset($args['menu_id']) ? esc_attr($args['menu_id']) : 'navbar';
?>

<!-- Menu -->
<div>
    
    <button id="mobile-menu" class="mobile-menu block lg:hidden cursor-pointer bg-transparent border-0 p-2.5" aria-expanded="false" aria-label="<?php _e('Toggle navigation','fitness_pleasure') ?>" aria-controls="navbar">
        <span class="bar block w-8 h-1 my-1.5 bg-white 200rounded-lg mx-auto transition-all duration-300"></span>
        <span class="bar block w-8 h-1 my-1.5 bg-white rounded-lg mx-auto transition-all duration-300"></span>
        <span class="bar block w-8 h-1 my-1.5 bg-white rounded-lg mx-auto transition-all duration-300"></span>
    </button>
    
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
</div>
