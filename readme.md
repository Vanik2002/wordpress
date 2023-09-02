# Plugin 101 Series

Full list of sections and features we will build during series of Tutorials

* Modular Administration Area
* CPT Manager
* Custom Taxonomy Manager
* Widget to Upload and Display media in sidebars
* Post and Pages Gallery integration
* Testimonial section: Comment in the front-end,Admins can approve comments,select which comments to display
* Custom template sections


//
//add_shortcode("MyGallery","add_MyGallery");
//
//function add_MyGallery(){
//    $args = array(
//        'post_type' => 'Gallery',
//    );
//    $new_query = new WP_Query ($args);
//    if( $new_query->have_posts() ){
//        while( $new_query->have_posts() ){
//            $new_query->the_post();
//            ?>
<!--                --><?php //the_content(); ?>
<!--                --><?php
//        }
//        wp_reset_postdata();
//    }
//}