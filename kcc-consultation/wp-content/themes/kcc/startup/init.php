<?php

define('HEADER', THEME_DIR . '/common/header.php');
define('FOOTER', THEME_DIR . '/common/footer.php');

require_once THEME_DIR . '/startup/enqueues.php';
require_once THEME_DIR . '/startup/theme_customizations.php';
require_once THEME_DIR . '/startup/metaboxs.php';
require_once THEME_DIR . '/startup/cpts.php';
require_once THEME_DIR . '/startup/lang_translation.php';
require_once THEME_DIR . '/startup/forms/contact-form.php';
require_once THEME_DIR . '/startup/forms/newsletter-form.php';
