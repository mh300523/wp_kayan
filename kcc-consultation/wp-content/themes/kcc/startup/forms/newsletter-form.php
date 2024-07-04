<?php
function process_sending_newsletter() {
    // Check nonce for security
    check_ajax_referer('register_nonce', 'security');

    $email = sanitize_email($_POST['user_email']);

    // Validate email format with a regular expression
    if (!is_email($email)) {
        wp_send_json_error(array('message' => pll__('البريد الالكتروني غير صحييح')));
    }

    // Check if email already exists in newsletter custom post type
    $existing_newsletter = new WP_Query(array(
        'post_type' => 'newsletter',
        'title' => $email // Search by post title (email)
    ));

    if ($existing_newsletter->have_posts()) {
        wp_send_json_error(array('message' => pll__('البريد الالكتروني مستخدم')));
    }

    // Prepare new post
    $new_post = array(
        'post_title'  => $email, // Use email as post title
        'post_type'   => 'newsletter',
        'post_status' => 'publish'
    );

    // Insert new post
    $post_id = wp_insert_post($new_post);
    if (is_wp_error($post_id)) {
        wp_send_json_error(array('message' => $post_id->get_error_message()));
    } else {
        wp_send_json_success(array('message' => pll__('تم الاشتراك بنجاح في النشرة الإخبارية')));
        // Optionally, send email to the user with their confirmation
        // wp_mail($email, pll__('Email Sent Successfully', 'Kcc-consultation'), pll__('Your email has been registered.', 'Kcc-consultation'));
    }
}
add_action('wp_ajax_submit_newsletter', 'process_sending_newsletter');
add_action('wp_ajax_nopriv_submit_newsletter', 'process_sending_newsletter');


