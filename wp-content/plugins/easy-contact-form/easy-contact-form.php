<?php
/*
Plugin Name: Easy Contact Form
Description: Custom contact form plugin with DB storage, admin dashboard, and email notifications.
Version: 1.0
Author: Sneha
*/

if (!defined('ABSPATH')) exit;

// Include sub files
include_once plugin_dir_path(__FILE__) . 'includes/ecf-form.php';
include_once plugin_dir_path(__FILE__) . 'includes/ecf-admin.php';

// Create database table on activation
function ecf_create_table() {
    global $wpdb;
    $table = $wpdb->prefix . 'ecf_contacts';
    $charset = $wpdb->get_charset_collate();

    $sql = "CREATE TABLE $table (
        id INT NOT NULL AUTO_INCREMENT,
        name VARCHAR(100) NOT NULL,
        email VARCHAR(100) NOT NULL,
        message TEXT NOT NULL,
        submitted_at DATETIME DEFAULT CURRENT_TIMESTAMP,
        PRIMARY KEY (id)
    ) $charset;";

    require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
    dbDelta($sql);
}
register_activation_hook(__FILE__, 'ecf_create_table');


// Register admin menu
function ecf_register_admin_menu() {
    add_menu_page(
        'Contact Form Entries',     // Page title
        'Easy Contact Entries',     // Menu title
        'manage_options',           // Capability
        'ecf-contact-entries',      // Slug
        'ecf_display_entries_page', // Callback
        'dashicons-email',          // Icon
        6                           // Position
    );
}
add_action('admin_menu', 'ecf_register_admin_menu');

// Display entries page
function ecf_display_entries_page() {
    global $wpdb;
    $table_name = $wpdb->prefix . 'ecf_contacts';
    $results = $wpdb->get_results("SELECT * FROM $table_name ORDER BY date DESC");

    echo '<div class="wrap"><h1>Contact Form Entries</h1>';
    if (!empty($results)) {
        echo '<table class="widefat fixed" cellspacing="0">
            <thead>
                <tr>
                    <th class="manage-column">Name</th>
                    <th class="manage-column">Email</th>
                    <th class="manage-column">Message</th>
                    <th class="manage-column">Submitted At</th>
                </tr>
            </thead>
            <tbody>';
        foreach ($results as $row) {
            echo '<tr>
                    <td>' . esc_html($row->name) . '</td>
                    <td>' . esc_html($row->email) . '</td>
                    <td>' . esc_html($row->message) . '</td>
                    <td>' . esc_html($row->date) . '</td>
                </tr>';
        }
        echo '</tbody></table>';
    } else {
        echo '<p>No contact entries found.</p>';
    }
    echo '</div>';
}
