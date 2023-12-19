<?php

// Schedule the cron event on theme activation
register_activation_hook(__FILE__, 'schedule_pdf_cleanup');

// Unschedule the cron event on theme deactivation
register_deactivation_hook(__FILE__, 'unschedule_pdf_cleanup');

// Schedule PDF cleanup event
function schedule_pdf_cleanup() {
    if (!wp_next_scheduled('pdf_cleanup_event')) {
        wp_schedule_event(time(), 'weekly', 'pdf_cleanup_event');
    }
}

// Unschedule PDF cleanup event
function unschedule_pdf_cleanup() {
    wp_clear_scheduled_hook('pdf_cleanup_event');
}

// Hook into the PDF cleanup event
add_action('pdf_cleanup_event', 'cleanup_unattached_pdfs');

// Function to find and delete unattached PDF files
function cleanup_unattached_pdfs() {
    // Get all unattached PDF attachments
    $unattached_pdfs = get_posts(
        array(
            'post_type'      => 'attachment',
            'post_mime_type' => 'application/pdf',
            'posts_per_page' => -1,
            'post_status'    => 'inherit',
            'fields'         => 'ids',
            'meta_query'     => array(
                array(
                    'key'     => '_thumbnail_id',
                    'compare' => 'NOT EXISTS',
                ),
            ),
        )
    );

    // Delete unattached PDFs
    foreach ($unattached_pdfs as $pdf_id) {
        wp_delete_attachment($pdf_id, true);
    }
}

// Schedule a task on plugin/theme activation to clean up old schedules
add_action('switch_theme', 'cleanup_pdf_cleanup_schedule');
add_action('after_switch_theme', 'cleanup_pdf_cleanup_schedule');

function cleanup_pdf_cleanup_schedule() {
    wp_clear_scheduled_hook('pdf_cleanup_event');
}
