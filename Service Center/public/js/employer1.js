$('#cprojects').hide();
//developer details
$.ajax({
    url: 'partials/ajax.php?action=empSession',
    method: 'POST',
    success: function(response) {

        let resp = JSON.parse(response);
        $('#empname').html(resp[1].slice(0, 6));

        $('#mail').html(resp[2]);
        $('#mobile').html(resp[3]);
        $('#position').html(resp[4]);
        $('#nme').html(resp[1]);

    }

});

//new projects count
$.ajax({
    url: 'partials/ajax.php?action=empProject',
    method: 'POST',
    success: function(response) {


        let resp = JSON.parse(response);



        if (resp[0] == 0) {
            $('#pcnt').hide();
        } else if (resp[0] < 10) {

            $('#pcnt').text("0" + resp[0]);
        } else {
            $('#pcnt').text(resp[0]);
        }



    }

});

//current projects count
$.ajax({
    url: 'partials/ajax.php?action=currentProject',
    method: 'POST',
    success: function(response) {

        if (response == 0) {
            $('#ccnt').hide();
        } else if (response < 10) {
            $('#ccnt').show();
            $('#ccnt').text("0" + response);
        } else {
            $('#ccnt').show();
            $('#ccnt').text(response);
        }



    }

});

$(document).ready(function() {

    //getproject details
    $.ajax({
        url: 'partials/ajax.php?action=getProject',
        method: 'POST',
        success: function(response) {

            if (response != "error") {

                $('#project').html(response);
            } else {
                $('#project').html('<h4>Something went wrong!!</h4>');
            }



        }

    });

    //get current project details
    $.ajax({
        url: 'partials/ajax.php?action=getCurrentProject',
        method: 'POST',
        success: function(response) {

            if (response != "error") {

                $('#cprojects').html(response);
            } else {
                $('#cprojects').html('<h4>Something went wrong!!</h4>');
            }



        }

    });


    //accept ptoject
    $(document).on("click", ".accept", function() {
        let pid = $(this).attr('id');

        //update project status
        $.ajax({
            url: 'partials/ajax.php?action=acceptProject',
            method: 'POST',
            data: { pid: pid },

            success: function(response) {

                if (response == 1) {
                    alert("New project has been accepted successfuly!");
                    location.reload();
                } else {
                    alert("Something went wrong!");
                }



            }

        });

    });

    //get current projects
    $('#cprojectBtn').click(function() {
        $('#project').hide();
        $('#cprojects').show();

    });

    $('#nprojectBtn').click(function() {
        $('#project').show();
        $('#cprojects').hide();
    });


});