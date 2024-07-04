<form class="form-group newsletter_form">
    <input type="email" class="email_field form-control" name="email" placeholder="<?php echo pll__('ادخل بريدك الإلكتروني'); ?>">
    <input type="hidden" class="register_nonce" value="<?php echo wp_create_nonce('register_nonce'); ?>">
    <button class="check" type="submit"><i class="uil uil-envelope-alt"></i></button>
</form>
<div class="response"></div>