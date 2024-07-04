(function ($) {
    function register_newsletter(event) {
        event.preventDefault(); // Prevent default form submission

        var $form = $(this).closest('.newsletter_form'),
            useremail = $form.find('.email_field').val().trim(),
            nonce = $form.find('.register_nonce').val(),
            $responseDiv = $form.next('.response');

        $.post({
            url: ajax_object.ajax_url,
            data: {
                action: 'submit_newsletter',
                user_email: useremail,
                security: nonce
            }
        }).done(function (response) {
            if (response.success) {
                $responseDiv.html('<div class="success-message">' + response.data.message + '</div>');
            } else {
                $responseDiv.html('<div class="error-message">' + response.data.message + '</div>');
            }
            $form.find('.email_field').val('');
        }).fail(function () {
            $responseDiv.html('<div class="text-danger">Something went wrong .. please try again later</div>');
        });
    }

    $(document).ready(function() {
        $('.newsletter_form').on('submit', register_newsletter);
    });
})(jQuery);




