<?php

/**
 * Trigger this file on Plugin uninstall
 *
 * @package GalleryPlugin
 */

if (! defined('WP_UNINSTALL_PLUGIN')){
    die();
}

$galleries = get_post(array('post_type' => 'Gallery','numberposts'=> -1));

foreach ($galleries as $gallery){
    wp_delete_post($gallery->ID,true);
}

global $wpdb;

$wpdb->query("DELETE FROM wp_posts WHERE post_type = 'Gallery'");
$wpdb->query("DELETE FROM wp_postmeta WHERE post_id NOT IN (SELECT id FROM wp_posts)");