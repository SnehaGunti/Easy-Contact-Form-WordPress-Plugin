<?php

// Add to Admin Menu
function ecf_register_admin_page() {
    add_menu_page(
        'Easy Contact Entries',
        'Contact Entries',
        'manage_options',
        'ecf-contact-entries',
        'ecf_show_entries',
        'dashicons-email-alt2',
        6
    );
}
add_action('admin_menu', 'ecf_register_admin_page');

// Display form submissions
function ecf_show_entries() {
    global $wpdb;
    $results = $wpdb->get_results("SELECT * FROM {$wpdb->prefix}ecf_contacts");

    echo "<div class='wrap'><h2>Easy Contact Form Entries</h2>";
    echo "<table class='widefat'><thead><tr>
            <th>ID</th><th>Name</th><th>Email</th><th>Message</th><th>Submitted At</th>
          </tr></thead><tbody>";

    foreach ($results as $row) {
        echo "<tr>
                <td>{$row->id}</td>
                <td>{$row->name}</td>
                <td>{$row->email}</td>
                <td>{$row->message}</td>
                <td>{$row->submitted_at}</td>
              </tr>";
    }

    echo "</tbody></table></div>";
}
