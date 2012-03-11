<?php
if ( function_exists('register_sidebar') )
register_sidebar();
?>


<?php
function register_my_menus() {
  register_nav_menus(
    array('header-menu' => __( 'Header Menu' ) )
  );
}
?>