$(document).ready(function() {

    $('#submit').click(function() {

        let id = $('#email').val();
        let pass = $('#pass').val();

        if (email != "" || pass != "") {
            $.ajax({
                url: 'partials/ajax.php?action=adminLogin',
                method: 'POST',
                data: {
                    id: id,
                    pass: pass
                },
                success: function(response) {

                    if (response == 1) {
                        window.location.replace('admin.php')
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