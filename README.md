# wordpress

 add_action('init', 'add_alt_to_image');
function add_alt_to_image(){
    global $wpdb;
    $query = "SELECT post_id FROM {$wpdb->postmeta} WHERE meta_key != '_wp_attachment_image_alt' AND meta_key = '_wp_attachment_metadata'";
    $meta_query = "SELECT meta_id FROM {$wpdb->postmeta} WHERE `meta_key` = '_wp_attachment_image_alt'";
    $post_ids = $wpdb->get_col($query);
    $meta_ids = $wpdb->get_col($meta_query);
    $posts_count = 0;
    $last_meta_id = end($meta_ids);
    $meta_entries = array(
        array(
            'meta_id'    => $last_meta_id,
            'meta_key'   => '_wp_attachment_image_alt',
            'meta_value' => 'argavand kahuyq',
        ),
    );
    foreach ($post_ids as $post_id) {
        foreach ($meta_entries as $meta_entry) {
            $posts_count++;
            $meta_id = $meta_entry['meta_id'] + $posts_count;
            $wpdb->insert(
                 $wpdb->postmeta,
                    array(
                            'meta_id'    => $meta_id,
                            'post_id'    => $post_id,
                            'meta_key'   => $meta_entry['meta_key'],
                            'meta_value' => $meta_entry['meta_value'],
                    )
            );
        }
    }
}
