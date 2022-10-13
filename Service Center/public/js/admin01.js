//get all project details to admin page
$.ajax({
    url: 'partials/ajax.php?action=projectData',
    method: 'POST',
    success: function(response) {

        $('#projects').html(response);
    }

});

//count of request
$.ajax({
    url: 'partials/ajax.php?action=reqCount',
    method: 'POST',
    success: function(response) {

        if (response > 0) {
            $('#breq').show();
            if (response < 10) {

                $('#breq').html(0 + response);

            } else {
                $('#breq').html(response);
            }

        } else {
            $('#breq').hide();
        }
    }



});

//count of current projects
$.ajax({
    url: 'partials/ajax.php?action=projectCount',
    method: 'POST',
    success: function(response) {
        if (response > 0) {
            $('#pcount').show();
            if (response < 10) {

                $('#pcount').html(0 + response);

            } else {
                $('#pcount').html(response);
            }

        } else {
            $('#pcount').hide();
        }
    }



});


$(document).ready(function() {

    $(document).on("click", ".assign", function() {
        let pid = $(this).attr('id');

        let emp = $('#emp' + pid).val();


        if (emp != 0) {

            $.ajax({
                url: 'partials/ajax.php?action=assignEmp',
                method: 'POST',
                data: {
                    pid: pid,
                    emp: emp
                },
                success: function(response) {


                    if (response == "done") {
                        alert("The project has assigned successfully!");
                        location.reload();
                    } else {
                        alert("Something weng wrong!");
                    }

                }

            });

        } else {
            $('#emp' + pid).css({
                border: "2px solid red"
            });
        }


    });
});