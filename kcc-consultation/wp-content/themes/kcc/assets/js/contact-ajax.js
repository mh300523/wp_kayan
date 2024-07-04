(function ($) {
    function register_contact(event) {
        event.preventDefault(); // Prevent default form submission

        var $form = $(this),
            formData = {
                action: 'submit_contact',
                contact_name: $('#name').val(),
                contact_email: $('#email').val(),
                contact_telephone: $('#telephone').val(),
                contact_enquery: $('#enquery').val(),
                contact_security: $('#contact_nonce').val()
            },
            $responseDiv = $form.next('.response'),
            errorFields = ['name', 'email', 'telephone', 'enquery'];

        // Clear previous error messages
        $.each(errorFields, function (index, field) {
            $form.find('.' + field + '-error').text('');
        });

        $.post({
            url: ajax_object2.ajax_url,
            data: formData
        }).done(function (response) {
            if (response.success) {
                $responseDiv.html('<div class="success-message">' + response.data.message + '</div>');
                $form.find('input[type="text"], input[type="email"], input[type="number"], textarea').val('');
            } else if (response.data.errors) {
                $.each(response.data.errors, function (field, message) {
                    $('.' + field + '-error').text(message);
                });
            } else {
                $responseDiv.html('<div class="error-message">' + response.data.message + '</div>');
            }
        }).fail(function () {
            $responseDiv.html('<div class="text-danger">Something went wrong .. please try again later</div>');
        });
    }

    $(document).ready(function () {
        $('#contact_form').on('submit', register_contact);
    });
})(jQuery);