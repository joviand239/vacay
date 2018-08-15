$(document).ready(function () {

    $('#paymentModal').modal({
        show: true,
        backdrop: 'static'
    });


    $('.method-box').click(function (e) {
        $('.choose-payment-method').toggleClass('active');
        $('.cc-method-section').toggleClass('active');
    });



    $('#submit-payment').click(function (e) {

        var form = $('#creditCardForm');

        form.trigger('submit');


        var countError = form.find('.has-error').length;

        var data = {
            firstName: form.find('[name=firstName]').val(),
            lastName: form.find('[name=lastName]').val(),
            creditCard: form.find('[name=creditCard] option:selected').val(),
            cardNumber: form.find('[name=cardNumber]').val(),
            expiredDate: form.find('[name=expiredDate]').val(),
            cvv: form.find('[name=cvv]').val(),
        };

        if (countError == 0) {
            $.ajax({
                url: submitPaymentURL,
                type: 'POST',
                data: data,
                dataType: 'JSON',
                beforeSend: function() {

                },
                success: function(response){
                    console.log(response.data);

                },
                error: function(error){
                    console.log(error);
                }
            });
        }


    });


    $.validate({
        form : '#creditCardForm',
        modules : 'security',
        onModulesLoaded : function() {

            // Bind card type to card number validator
            $('#creditCard').on('change', function() {
                var card = $(this).val();
                $('input[name="cardNumber"]').attr('data-validation-allowing', card);
            });
        }
    });

});