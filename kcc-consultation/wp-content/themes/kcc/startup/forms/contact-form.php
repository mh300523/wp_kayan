<?php
function process_sending_contact() {
    // Check nonce for security
    check_ajax_referer('contact_nonce', 'contact_security');

    $fields = [
        'name' => sanitize_text_field($_POST['contact_name']),
        'email' => sanitize_email($_POST['contact_email']),
        'telephone' => sanitize_text_field($_POST['contact_telephone']),
        'enquery' => sanitize_textarea_field($_POST['contact_enquery'])
    ];

    $errors = validate_contact_fields($fields);
    if (!empty($errors)) {
        wp_send_json_error(['errors' => $errors]);
    }

    if (email_exists_in_contact($fields['email'])) {
        wp_send_json_error(['errors' => ['email' => pll__('البريد الالكتروني مستخدم')]]);
    }

    $post_id = create_contact_post($fields);
    if (is_wp_error($post_id)) {
        wp_send_json_error(['message' => $post_id->get_error_message()]);
    } else {
        // send_contact_email_notification($fields); // Send email notification
        wp_send_json_success(['message' => pll__('تم الإرسال بنجاح')]);
    }
}
add_action('wp_ajax_submit_contact', 'process_sending_contact');
add_action('wp_ajax_nopriv_submit_contact', 'process_sending_contact');

function validate_contact_fields($fields) {
    $errors = [];
    $required_fields = [
        'name' => pll__('من فضلك أدخل الاسم'),
        'email' => pll__('من فضلك أدخل البريد الالكتروني'),
        'telephone' => pll__('من فضلك أدخل رقم الجوال'),
        'enquery' => pll__('من فضلك أدخل رسالتك')
    ];

    foreach ($required_fields as $field => $error_message) {
        if (empty($fields[$field])) {
            $errors[$field] = $error_message;
        }
    }

    if (!empty($fields['email']) && !is_email($fields['email'])) {
        $errors['email'] = pll__('البريد الالكتروني غير صحييح');
    }

    return $errors;
}

function email_exists_in_contact($email) {
    $query = new WP_Query([
        'post_type' => 'contact',
        'meta_query' => [
            [
                'key' => 'contact_email',
                'value' => $email,
                'compare' => '='
            ]
        ]
    ]);

    return $query->have_posts();
}

function create_contact_post($fields) {
    $post_id = wp_insert_post([
        'post_title' => $fields['name'],
        'post_type' => 'contact',
        'post_status' => 'pending'
    ]);

    if (!is_wp_error($post_id)) {
        update_post_meta($post_id, 'contact_name', $fields['name']);
        update_post_meta($post_id, 'contact_email', $fields['email']);
        update_post_meta($post_id, 'contact_telephone', $fields['telephone']);
        update_post_meta($post_id, 'contact_message', $fields['enquery']);
    }

    return $post_id;
}

// function send_contact_email_notification($fields) {
//     // Fallback email address if not set
//     $to = !empty(SITE_EMAIL) ? SITE_EMAIL : '';

//     // Subject (can be translated)
//     $subject = __('New Message', 'Kcc-consultation');

//     // Email body with dynamic data and HTML formatting
//     $message = '<html><body>';
//     $message .= '<h2>' . pll__('الاسم') . ': ' . esc_html($fields['name']) . '</h2>';
//     $message .= '<p><strong>' . pll__('البريد الالكتروني') . ': </strong> ' . esc_html($fields['email']) . '</p>';
//     $message .= '<p><strong>' . pll__('رقم الجوال') . ': </strong> ' . esc_html($fields['telephone']) . '</p>';
//     $message .= '<p><strong>' . pll__('الموضوع') . ': </strong></p>';
//     $message .= '<p>' . nl2br(esc_html($fields['enquery'])) . '</p>'; // Preserve line breaks
//     $message .= '</body></html>';

//     $headers = array('Content-Type: text/html; charset=UTF-8');

//     // Send email using wp_mail
//     wp_mail($to, $subject, $message, $headers);
// }