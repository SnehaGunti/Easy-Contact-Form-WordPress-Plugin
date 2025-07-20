<?php

// Shortcode to show the form
function ecf_contact_form_shortcode() {
    ob_start(); ?>
    <form method="post">
        <p><label>Name</label><br>
        <input type="text" name="ecf_name" required></p>

        <p><label>Email</label><br>
        <input type="email" name="ecf_email" required></p>

        <p><label>Message</label><br>
        <textarea name="ecf_message" required></textarea></p>

        <p><input type="submit" name="ecf_submit" value="Send Message"></p>
    </form>
    <?php
    return ob_get_clean();
}
add_shortcode('easy_contact_form', 'ecf_contact_form_shortcode');

// Handle submission
function ecf_handle_form() {
    if (isset($_POST['ecf_submit'])) {
        global $wpdb;

        $name = sanitize_text_field($_POST['ecf_name']);
        $email = sanitize_email($_POST['ecf_email']);
        $message = sanitize_textarea_field($_POST['ecf_message']);

        if (!empty($name) && !empty($email) && !empty($message)) {
            $wpdb->insert($wpdb->prefix . 'ecf_contacts', [
                'name' => $name,
                'email' => $email,
                'message' => $message
            ]);

            // Email notification
            $admin_email = get_option('admin_email');
            $subject = "New Contact Message from Easy Contact Form";
            $body = "Name: $name\nEmail: $email\nMessage: $message";
            wp_mail($admin_email, $subject, $body);
        }
    }
}
add_action('init', 'ecf_handle_form');
