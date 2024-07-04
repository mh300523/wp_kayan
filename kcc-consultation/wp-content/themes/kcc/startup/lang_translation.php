<?php
//translate post types as strings
function register_labels_for_translation($post_types, $taxonomies) {
    foreach ($post_types as $post_type => $labels) {
        foreach ($labels as $label_key => $label_value) {
            pll_register_string($label_value, $label_value, 'Kcc-consultation');
        }
    }

     // Register taxonomy labels
     foreach ($taxonomies as $taxonomy => $labels) {
        foreach ($labels as $label) {
            pll_register_string($label, $label, 'Kcc-consultation');
        }
    }
}

// Define an array of post types and their labels
$post_types_labels = array(
    'work' => array(
        'Works',
        'Work',
        'Add New Work',
        'New Work',
        'Edit Work',
        'View Work',
        'Search Work',
    ),

    'newsletter' => array(
        'Newsletter',
        'Add New',
        'All Newsletters',
        'Search Email',
    ),

    'contact' => array(
        'Contacts',
        'contact',
        'Add New',
        'Search',
    ),

    // Add more post types and their labels as needed
);


// Define an array of taxonomies and their labels
$taxonomy_labels = array(
    'categories' => array(
        'Works Categories',
        'Work Category',
        'Add New Category',
        'New Category',
        'Edit Category',
        'View Category',
        'all Categories',
        'Search Categories',
    ),
    // Add more taxonomies and their labels as needed
);

// Call the function with the array of post types and labels
register_labels_for_translation($post_types_labels, $taxonomy_labels);


//Translate Strings
if (function_exists('pll_register_string')) {
    pll_register_string('view more', 'المزيد', 'Kcc-consultation');
    pll_register_string('newsletter Title', 'تريد الأستفسار عن شي؟ لا تتردد بحجز إستشارة مجانية الآن', 'Kcc-consultation');
    pll_register_string('Phone Number', 'رقم الجوال', 'Kcc-consultation');
    pll_register_string('Email Address', 'البريد الالكتروني', 'Kcc-consultation');
    pll_register_string('Address', 'العنوان', 'Kcc-consultation');
    pll_register_string('Contact Us', 'تواصل معنا', 'Kcc-consultation');
    pll_register_string('Ansewer', 'نحن هنا للإجابة على جميع أسئلتك.املأ نموذج الاتصال الخاص بنا وسنتواصل معكأنت مع الأشخاص الذين يمكنهم المساعدة.', 'Kcc-consultation');
    pll_register_string('Organizational Hierarchy', 'الهيكل التنظيمي', 'Kcc-consultation');
    pll_register_string('Submit Button', 'إرسال', 'Kcc-consultation');
    pll_register_string('Enter your email', 'ادخل بريدك الإلكتروني', 'Kcc-consultation');
    pll_register_string('email validation', 'البريد الالكتروني غير صحييح', 'Kcc-consultation');
    pll_register_string('email validation', 'البريد الالكتروني مستخدم', 'Kcc-consultation');
    pll_register_string('email validation', 'تم الاشتراك بنجاح في النشرة الإخبارية', 'Kcc-consultation');
    pll_register_string('contact name', 'الاسم', 'Kcc-consultation');
    pll_register_string('contact Message', 'الموضوع', 'Kcc-consultation');
    pll_register_string('contact Submit message', 'تم الإرسال بنجاح', 'Kcc-consultation');
    pll_register_string('contact name validation', 'من فضلك أدخل الاسم', 'Kcc-consultation');
    pll_register_string('contact name validation', 'من فضلك أدخل البريد الالكتروني', 'Kcc-consultation');
    pll_register_string('contact name validation', 'من فضلك أدخل رقم الجوال', 'Kcc-consultation');
    pll_register_string('contact name validation', 'من فضلك أدخل رسالتك', 'Kcc-consultation');
}


