<script>
    $(document).on('click', '#create-order-btn', function() {
            $('#create-order-btn').html('Please Wait!!');
            $('#create-order-btn').attr('disabled',true);
            $.ajax({
                url: "{{ route('prospect.dashboard.create_order') }}",
                success: function(response) {
                    if(response.success)
                    {
                        openRazorPayment(response);
                    }else{
                    $('#step-response').addClass('response_error');
                    $('#step-response').html(errors.responseJSON.message);
                    setTimeout(function() {
                        $('#step-response').removeClass('response_error');
                        $('#step-response').html('');
                    }, 3000);
                        $('#create-order-btn').html('Pay');
                        $('#create-order-btn').attr('disabled',false);
                    }
                },
                error: function(errors) {
                    $('#step-response').addClass('response_error');
                    $('#step-response').html(errors.responseJSON.message);
                    setTimeout(function() {
                        $('#step-response').removeClass('response_error');
                        $('#step-response').html('');
                    }, 3000);
                    $('#create-order-btn').html('Pay');
                    $('#create-order-btn').attr('disabled',false);
                },
                type: 'GET'
            });
        });
</script>
