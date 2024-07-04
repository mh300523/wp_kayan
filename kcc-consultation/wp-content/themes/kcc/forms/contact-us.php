<div class="call-form">
    <form class="form details" id="contact_form">
        <div class="form-group foot-na cont required">
            <input type="text" name="full-name" id="name" class="form_input" placeholder="<?php echo pll__('الاسم'); ?>" >
            <div class="photo-fo">
                <i class="uil uil-user-circle"></i>
            </div>
        </div>
        <div class="error-message name-error"></div>
        <div class="form-group foot-na cont">
            <input type="email" name="email" id="email" class="form_input" placeholder=" <?php echo pll__('البريد الالكتروني'); ?>" >
            <div class="photo-fo">
                <i class="uil uil-envelope"></i>
            </div>
        </div>
        <div class="error-message email-error"></div>
        <div class="form-group foot-na cont required">
            <input type="number" name="telephone" id="telephone" class="form_input" placeholder="<?php echo pll__('رقم الجوال '); ?>" >
            <div class="photo-fo">
                <i class="uil uil-phone-alt"></i>
            </div>
        </div>
        <div class="error-message telephone-error"></div>
        <div class="form-group te cont required">
            <textarea name="enquery" id="enquery" placeholder="<?php echo pll__('الموضوع'); ?>" ></textarea>
            <div class="photo-fo">
                <i class="uil uil-comment-alt-edit"></i>
            </div>
        </div>
        <div class="error-message enquery-error"></div>
        <input type="hidden" id="contact_nonce" value="<?php echo wp_create_nonce('contact_nonce'); ?>">
        <div class="ask-send">
            <button type="submit" class="btn"> <?php echo pll__('إرسال'); ?></button>
        </div>
    </form>
    <div class="response"></div>
</div>