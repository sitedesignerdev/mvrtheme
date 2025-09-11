<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package mvrtheme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<header class="bg-[#00558D] shadow-md sticky top-0 z-50 ">
  <div class="mx-auto px-4 max-w-6xl">

    <div class="flex items-center py-4 relative">
      <!-- Logo -->
      <div class="flex items-center flex-shrink-0">
        <a href="<?php echo esc_url(home_url('/')); ?>" class="flex items-center">
          <?php if (has_custom_logo()) : ?>
            <?php
              $custom_logo_id = get_theme_mod('custom_logo');
              $logo = wp_get_attachment_image_src($custom_logo_id, 'full');
              if ($logo) {
                echo '<img src="' . esc_url($logo[0]) . '" alt="' . get_bloginfo('name') . '" class="h-8 w-auto custom-logo tailwind-logo" />';
              }
            ?>
          <?php else : ?>
          <span class="text-primary">MVR</span> <span class="text-gray-700">Attorneys</span>
          <?php endif; ?>
        </a>
        </a>

      </div>

      <!-- Desktop Navigation (centered) -->
      <div class="hidden lg:flex flex-1 justify-center">
        <nav class="flex items-center space-x-8">
          <?php
          wp_nav_menu(array(
            'theme_location' => 'primary-menu',
            'container' => false,
            'items_wrap' => '%3$s',
            'walker' => new Primary_Menu_Walker()
          ));
          ?>
        </nav>
      </div>

      <!-- Button right -->
      <div class="hidden lg:flex flex-shrink-0 ml-auto">
        <a href="#consultation" class="bg-accent text-primary font-bold px-5 py-2 rounded hover:bg-yellow-400 transition duration-300">Schedule Consultation</a>
      </div>

      <!-- Mobile menu button -->
      <div class="lg:hidden ml-auto">
        <button id="mobile-menu-button" class="text-gray-700 hover:text-primary focus:outline-none">
          <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
          </svg>
        </button>
      </div>
    </div>

    <!-- Mobile Navigation -->
    <div id="mobile-menu" class="hidden lg:hidden py-4 border-t border-gray-200">
      <?php
      wp_nav_menu(array(
        'theme_location' => 'primary-menu',
        'container' => false,
        'menu_class' => 'space-y-2',
        'walker' => new Mobile_Menu_Walker()
      ));
      ?>
      <div class="mt-4 pt-4 border-t border-gray-200">
        <a href="#consultation" class="block bg-accent text-primary text-center font-bold px-5 py-3 rounded hover:bg-yellow-400 transition duration-300">Schedule Consultation</a>
      </div>
    </div>
  </div>
</header>

<?php

// Custom walker for desktop menu

class Primary_Menu_Walker extends Walker_Nav_Menu {
  function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0) {
    $classes = empty($item->classes) ? array() : (array) $item->classes;

    // Check if item has children
    $has_children = in_array('menu-item-has-children', $classes);

    // Check if this item is the current/active page
    $is_active = in_array('current-menu-item', $classes) || in_array('current_page_item', $classes);

    // Default link classes
    $link_classes = 'text-white visited:text-white hover:text-gray-300 font-medium transition duration-200 flex items-center';

    // Override if active
    if ($is_active) {
      $link_classes = 'text-[#fed310] visited:text-[#fed310] font-medium transition duration-200 flex items-center';
    }

    $output .= '<div class="relative group">';

    $output .= '<a href="' . $item->url . '" class="' . $link_classes . '">';
    $output .= $item->title;

    if ($has_children) {
      $output .= '<i class="ml-1 fas fa-chevron-down text-xs"></i>';
    }

    $output .= '</a>';

    if ($has_children && $depth === 0) {
      $output .= '<div class="absolute left-0 mt-2 w-48 bg-white rounded-md shadow-lg py-2 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 z-50">';
    }
  }

  function end_el(&$output, $item, $depth = 0, $args = array()) {
    $classes = empty($item->classes) ? array() : (array) $item->classes;
    $has_children = in_array('menu-item-has-children', $classes);

    if ($has_children && $depth === 0) {
      $output .= '</div>';
    }
    $output .= '</div>';
  }

  function start_lvl(&$output, $depth = 0, $args = array()) {
    if ($depth > 0) {
      $output .= '<div class="pl-4 mt-1 space-y-1">';
    }
  }

  function end_lvl(&$output, $depth = 0, $args = array()) {
    if ($depth > 0) {
      $output .= '</div>';
    }
  }
}


// Custom walker for mobile menu
class Mobile_Menu_Walker extends Walker_Nav_Menu {
  function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0) {
    $classes = empty($item->classes) ? array() : (array) $item->classes;
    $class_names = join(' ', apply_filters('nav_menu_css_class', array_filter($classes), $item));
    
    $output .= '<div class="mobile-menu-item">';
    $output .= '<a href="' . $item->url . '" class="block py-2 px-4 text-gray-700 hover:bg-primary hover:text-white rounded transition duration-200">';
    $output .= $item->title;
    $output .= '</a>';
  }
  
  function end_el(&$output, $item, $depth = 0, $args = array()) {
    $output .= '</div>';
  }
}
?>

<script>
// Mobile menu toggle functionality
document.addEventListener('DOMContentLoaded', function() {
  const mobileMenuButton = document.getElementById('mobile-menu-button');
  const mobileMenu = document.getElementById('mobile-menu');
  
  mobileMenuButton.addEventListener('click', function() {
    mobileMenu.classList.toggle('hidden');
  });
  
  // Close mobile menu when clicking outside
  document.addEventListener('click', function(event) {
    const isClickInsideMenu = mobileMenu.contains(event.target);
    const isClickOnMenuButton = mobileMenuButton.contains(event.target);
    
    if (!isClickInsideMenu && !isClickOnMenuButton && !mobileMenu.classList.contains('hidden')) {
      mobileMenu.classList.add('hidden');
    }
  });
});
</script>