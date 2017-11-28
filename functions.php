<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

if ( !function_exists( 'chld_thm_cfg_parent_css' ) ):
    function chld_thm_cfg_parent_css() {
        wp_enqueue_style( 'chld_thm_cfg_parent', trailingslashit( get_template_directory_uri() ) . 'style.css', array(  ) );
    }
endif;
add_action( 'wp_enqueue_scripts', 'chld_thm_cfg_parent_css', 1001 );

// END ENQUEUE PARENT ACTION


function fab_do_not_include_children_in_category_archive_parse_tax_query( $query ) {
    if (
        ! is_admin()
        && $query->is_main_query()
        && $query->is_category()
    ) {
        // as seen here: http://wordpress.stackexchange.com/a/140952/22534
        $query->tax_query->queries[0]['include_children'] = 0;
    }
}
add_filter(
    'parse_tax_query',
    'fab_do_not_include_children_in_category_archive_parse_tax_query'
);


function add_base_href() {
  echo '<base href="'.get_bloginfo('url').'/" />';
}
add_action( 'wp_head', 'add_base_href' );
