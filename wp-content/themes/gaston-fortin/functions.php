<?php
add_action( 'after_setup_theme', 'raiola_registrar_menu' );
function raiola_registrar_menu() {
    register_nav_menu( 'menu-principal', 'Menu Principal' );
}
?>