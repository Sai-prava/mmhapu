<script>
    $(document).ready(function(){
        $(document).on('click', '#step-1-btn', function() {
            $('#step-1-btn').html('Please Wait!!');
            $('#step-1-btn').attr('disabled',true);
            $.ajax({
                url: "{{ route('prospect.dashboard.store_step_1') }}",
                data: $('#stepOneForm').serialize(),
                success: function(response) {
                    $("#applicationFields").html(response.html);
                },
                error: function(errors) {
                    $('#step-response').addClass('response_error');
                    $('#step-response').html(errors.responseJSON.message);
                    setTimeout(function() {
                        $('#step-response').removeClass('response_error');
                        $('#step-response').html('');
                    }, 3000);
                    $('#step-1-btn').html('Next Step');
                    $('#step-1-btn').attr('disabled',false);
                },
                type: 'POST'
            });
        });
        $(document).on('click', '#step-2-btn', function() {
            $('#step-2-btn').html('Please Wait!!');
            $('#step-2-btn').attr('disabled',true);
            $('#back-button').attr('disabled',true);
            $.ajax({
                url: "{{ route('prospect.dashboard.store_step_2') }}",
                data: $('#stepTwoForm').serialize(),
                success: function(response) {
                    $("#applicationFields").html(response.html);
                },
                error: function(errors) {
                    $('#step-response').addClass('response_error');
                    $('#step-response').html(errors.responseJSON.message);
                    setTimeout(function() {
                        $('#step-response').removeClass('response_error');
                        $('#step-response').html('');
                    }, 3000);
                    $('#step-2-btn').html('Next Step');
                    $('#step-2-btn').attr('disabled',false);
                    $('#back-button').attr('disabled',false);
                },
                type: 'POST'
            });
        });
        $(document).on('click', '#step-3-btn', function() {
            $('#step-3-btn').html('Please Wait!!');
            $('#step-3-btn').attr('disabled',true);
            $('#back-button').attr('disabled',true);
            $.ajax({
                url: "{{ route('prospect.dashboard.store_step_3') }}",
                data: $('#stepThreeForm').serialize(),
                success: function(response) {
                    $("#applicationFields").html(response.html);
                },
                error: function(errors) {
                    $('#step-response').addClass('response_error');
                    $('#step-response').html(errors.responseJSON.message);
                    setTimeout(function() {
                        $('#step-response').removeClass('response_error');
                        $('#step-response').html('');
                    }, 3000);
                    $('#step-3-btn').html('Next Step');
                    $('#step-3-btn').attr('disabled',false);
                    $('#back-button').attr('disabled',false);
                },
                type: 'POST'
            });
        });
        $(document).on('click', '#step-4-btn', function() {
            $('#step-4-btn').html('Please Wait!!');
            $('#step-4-btn').attr('disabled',true);
            $('#back-button').attr('disabled',true);
            $.ajax({
                url: "{{ route('prospect.dashboard.store_step_4') }}",
                data: formData,
                enctype: 'multipart/form-data',
                success: function(response) {
                    $('#step-response').addClass('response_success');
                    $('#step-response').html('Application Submitted Sucessfully!');
                    setTimeout(function() {
                        window.location.replace(response.url)
                    }, 3000);
                },
                error: function(errors) {
                    $('#step-response').addClass('response_error');
                    $('#step-response').html(errors.responseJSON.message);
                    setTimeout(function() {
                        $('#step-response').removeClass('response_error');
                        $('#step-response').html('');
                    }, 3000);
                    $('#step-4-btn').html('Submit');
                    $('#step-4-btn').attr('disabled',false);
                    $('#back-button').attr('disabled',false);
                },
                type: 'POST'
            });
        });
        $(document).on('click', '#back-button', function() {
            $('#back-button').html('Please Wait!!');
            $('#back-button').attr('disabled',true);
            $.ajax({
                url: "{{ route('prospect.dashboard.get-back') }}",
                success: function(response) {
                    $("#applicationFields").html(response.html);
                },
                error: function(errors) {
                    $('#step-response').addClass('response_error');
                    $('#step-response').html(errors.responseJSON.message);
                    setTimeout(function() {
                        $('#step-response').removeClass('response_error');
                        $('#step-response').html('');
                    }, 3000);
                    $('#back-button').html('Back');
                    $('#back-button').attr('disabled',false);
                },
                type: 'GET'
            });
        });
        // $(document).on('click', '#step-2-btn', function() {
        //     $('#step-2-btn').html('Please Wait!!');
        //     $('#step-2-btn').attr('disabled',true);
        //     $.ajax({
            // url: "{{ route('prospect.dashboard.store_step_1') }}",
        //         data: $('#stepTwoForm').serialize(),
        //         success: function(response) {
        //             $("#updatePollAutomatic").html(response.html);
        //         },
        //         error: function(errors) {
        //             $('#step_2_response').addClass('response_error');
        //             $('#step_2_response').html(errors.responseJSON.message);
        //             setTimeout(function() {
        //                 $('#step_2_response').removeClass('response_error');
        //                 $('#step_2_response').html('');
        //             }, 3000);
        //             $('#step-2-btn').html('Next');
        //             $('#step-2-btn').attr('disabled',false);
        //         },
        //         type: 'POST'
        //     });
        // });
        // $(document).on('click', '#step-3-btn', function() {
        //     $('#step-3-btn').html('Please Wait!!');
        //     $('#step-3-btn').attr('disabled',true);
        //     $.ajax({
            // url: "{{ route('prospect.dashboard.store_step_1') }}",
        //         data: $('#stepThreeForm').serialize(),
        //         success: function(response) {
        //             $('#step_3_response').addClass('response_success');
        //             $('#step_3_response').html(response.message);
        //             setTimeout(function() {
        //                 $('#step_3_response').removeClass('response_success');
        //                 $('#step_3_response').html('');
        //                 window.location.href="{{url('user/poll')}}";
        //             }, 1500);
        //         },
        //         error: function(errors) {
        //             $('#step_3_response').addClass('response_error');
        //             $('#step_3_response').html(errors.responseJSON.message);
        //             setTimeout(function() {
        //                 $('#step_3_response').removeClass('response_error');
        //                 $('#step_3_response').html('');
        //             }, 3000);
        //             $('#step-3-btn').html('Save Poll');
        //             $('#step-3-btn').attr('disabled',false);
        //         },
        //         type: 'POST'
        //     });
        // });
    });
</script>