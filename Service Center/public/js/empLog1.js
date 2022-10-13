$(document).ready(function() {

    $('#submit').click(function() {

        let email = $('#email').val();
        let pass = $('#pass').val();

        if (email != "" || pass != "") {
            $.ajax({
                url: 'partials/ajax.php?action=empLogin',
                method: 'POST',
                data: {
                    email: email,
                    pass: pass
                },
                success: function(response) {


                    if (response == 1) {
                        window.location.replace('employer.php')
                    } else {
                        $('#errormsg').text("Invalid e-mail or password!");
                    }

                }

            });

        } else {
            $('#errormsg').text("Please enter passwrod and e-mail!");
        }
    });


});