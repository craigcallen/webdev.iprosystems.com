<?php

function connect_to_external_database() {
    $db_host = 'mysql.rameys.co';
    $db_user = 'rameys_points';
    $db_pass = 'EatMyShorts!';
    $db_name = 'rameys_points_db';

    $conn = new mysqli($db_host, $db_user, $db_pass, $db_name);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    return $conn;
}


function search_external_database($query) {
    // Check if this is the main query and if a search is being performed.
    if ($query->is_main_query() && $query->is_search()) {
        // Get the search query.
        $search_query = $query->get('s');

        // Connect to the external database.
        $conn = connect_to_external_database();

        // Perform a custom query on the external database.
        $sql = "SELECT * FROM external_table WHERE column_name LIKE '%$search_query%'";
        $result = $conn->query($sql);

        $post_ids = array();

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                // Add the external data to the search results.
                $post_ids[] = $row['post_id'];
            }
        }

        // Set the post__in parameter to include external results in the search.
        if (!empty($post_ids)) {
            $query->set('post__in', $post_ids);
        }

        // Close the external database connection.
        $conn->close();
    }
}

// Hook into the pre_get_posts action.
add_action('pre_get_posts', 'search_external_database');


add_action('rest_api_init', 'register_custom_api_route');

function register_custom_api_route() {
    register_rest_route('custom/v1', '/rameys-rewards', array(
        'methods' => 'GET',
        'callback' => 'get_external_data',
    ));
}

function get_external_data($request) {
    // Connect to the external database.
    $conn = connect_to_external_database();

    // Perform a custom query on the external database.
    $sql = "SELECT * FROM external_table";
    $result = $conn->query($sql);

    $data = array();

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            // Add external data to the response.
            $data[] = $row;
        }
    }

    // Close the external database connection.
    $conn->close();

    // Return the data as a JSON response.
    return new WP_REST_Response($data, 200);
}