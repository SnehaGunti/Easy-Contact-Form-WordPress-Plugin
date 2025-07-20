<?php
// Handles form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['ecf_submit'])) {
    global $wpdb;

    $name = sanitize_text_field($_POST['ecf_name']);
    $email = sanitize_email($_POST['ecf_email']);
    $message = sanitize_textarea_field($_POST['ecf_message']);

    $table_name = $wpdb->prefix . 'ecf_contacts';

    $wpdb->insert(
        $table_name,
        [
            'name'    => $name,
            'email'   => $email,
            'message' => $message,
            'date'    => current_time('mysql')
        ]
    );

    // Email admin (optional)
    wp_mail(get_option('admin_email'), 'New Contact Form Submission', "Name: $name\nEmail: $email\nMessage: $message");

    // Redirect with thank you
    wp_redirect($_SERVER['HTTP_REFERER'] . '?submitted=true');
    exit;
}
