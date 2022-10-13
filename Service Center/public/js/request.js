$('#verify_form').hide(); // initially hide the verfy form
$('#r_form_div').hide(); //initially hide the request form
$('#smsg').hide();

$(document).ready(function() {

    $('#email_form').submit(function(e) {
        e.preventDefault();

        let email = $('#email').val(); //get the emali from textbox


        //send data to ajax file
        $.ajax({
            url: 'partials/ajax.php?action=user',
            method: 'POST',
            data: { email: email }, //send the email to ajax.php
            success: function(response) {

                if (response == 1) { //if email is done response will be 1
                    $('#emailError').hide(); // then hide error messages
                    $('#email_form').hide(); // hide email form
                    $('#verify_form').show(); //show otp verify form
                } else {
                    $('#emailError').html("Something went wrong. Check your e-mail or internet!"); // if email is not done display an error msg
                    $('#email').css({
                        borderColor: "red" //textbox color will be red
                    });
                    $('#emailError').show(); //show the error msg
                }

            }
        })

    });

    //verify otp
    $('#verify_form').submit(function(e) {
        e.preventDefault();

        let otp = $('#otp').val(); // get the otp code from text box

        $.ajax({
            url: 'partials/ajax.php?action=otpVerify',
            method: 'POST',
            data: { otp: otp }, // send the otp to ajax.php
            success: function(response) {

                if (response == 1) {
                    $('#email-send-div').hide(); // hide other forms
                    $('#r_form_div').show(); // if otp is correct diplay request form
                    $('#emailReq').val($('#email').val());
                } else {
                    $('#otpError').html("Invalid OTP!");
                    $('#otpError').css({
                        color: "red"
                    });
                }
            }
        });
    });

    //submit the request
    $('#request_form').submit(function(e) {
        e.preventDefault();

        let name = $('#name').val();
        let email = $('#emailReq').val();
        let mobile = $('#mobile').val();
        let type = $('#type').val();
        let duration = $('#duration').val();
        let price = $('#currency-field').val();
        let desc = $('#desc').val();
        let address = $('#address').val();
        let pattern = /^[0-9-+]+$/;


        if (duration != "1" && type != "1" && mobile.length == 10 && pattern.test(mobile)) {



            $.ajax({
                url: 'partials/ajax.php?action=request',
                method: 'POST',
                data: {
                    name: name,
                    email: email,
                    mobile: mobile,
                    type: type,
                    duration: duration,
                    price: price,
                    desc: desc,
                    address: address
                },
                success: function(response) {

                    if (response == 1) {
                        $('#smsg').show();
                        $('#r_form_div').hide();

                        setTimeout(function() {
                            $('#smsg').fadeOut('fast');
                            window.location.replace("index.php");
                        }, 5000);
                    } else {
                        alert("error");
                    }


                }

            });
        } else {

            alert("Please enter correct details!");
            //validate duration drop down
            if (duration == "1") {
                $('#duration').css({
                    borderColor: 'red'
                });
            } else {
                $('#duration').css({
                    borderColor: 'rgb(208, 208, 208)'
                });
            }

            //validate type drop down
            if (type == "1") {
                $('#type').css({
                    borderColor: 'red'
                });

            } else {
                $('#type').css({
                    borderColor: 'rgb(208, 208, 208)'
                });
            }

            //validate mobile 
            if (mobile.length != 10) {
                $('#mobile').css({
                    borderColor: 'red'
                });

            } else {

                $('#mobile').css({
                    borderColor: 'rgb(208, 208, 208)'
                });

            }

            //validate mobile 
            if (pattern.test(mobile) == false) {
                $('#mobile').css({
                    borderColor: 'red'
                });

            } else {

                $('#mobile').css({
                    borderColor: 'rgb(208, 208, 208)'
                });
            }
        }

    });
});