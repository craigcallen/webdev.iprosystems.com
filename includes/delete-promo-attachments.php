<?php
function unattach_promo_media($post_id) {

    // Only do this for my post type
    if ( get_post_type($post_id) == 'promo' ){

        // vars
        $fields = false;

        // load from post
        if( isset($_POST['fields']) ) {
            $fields = $_POST['fields'];
        }

        global $wpdb;

        $field_key = 'field_64c05de4e9a3a';
        $field_name = 'arg_promo_image';
        
        if (isset($fields[$field_key])) {
            $previous_images = get_field($field_name, $post_id);
            $new_images = $fields[$field_key];

            // create a lookup of ids for images in the post
            $new_lookup = array();
            if (!empty($new_images)) {
                foreach($new_images as $row) {
                    array_push($new_lookup, $row['image']);
                }
            }

            // create a lookup of images that were removed
            $removed_lookup = array();
            if (!empty($previous_images)) {
                foreach($previous_images as $row) {
                    if (!in_array($row['image'], $new_lookup)) {
                        array_push($removed_lookup, $row['image']);
                    }
                }
            }

            if (!empty($removed_lookup)) {
                foreach($removed_lookup as $image) {
                    // unattach removed ones
                    $wpdb->update($wpdb->posts, array('post_parent'=>0), array('id'=>$image, 'post_type'=>'attachment'));
                }
            }

            if (!empty($new_lookup)) {
                foreach($new_lookup as $image) {
                    // attach added ones
                    $wpdb->update($wpdb->posts, array('post_parent'=>$post_id), array('id'=>$image, 'post_type'=>'attachment'));
                }
            }

        }

    }

}

// run before ACF saves the $_POST['fields'] data
add_action('acf/save_post', 'unattach_promo_media', 1);