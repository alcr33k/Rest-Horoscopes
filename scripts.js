$(document).ready(function() {

    $('#saveBtn').on('click', function () {
        if ($("#birthNumber").val() != "") {
            $("#birthNumber").css('border', '0');
            $.ajax({
                url: 'addHoroscope.php',
                method: 'POST',
                data: {birthnumber: $("#birthNumber").val()},
                success: function (data) {
                    location.reload(); // efterssom detta är en Php-uppgift visar / döljer vi knapparna med PHP i index.php men hade kunnat lägga till show and hide här med JQuery istället
                }
            });
            viewHoroscope();
        } else {
            $("#birthNumber").css('border', '1px solid red');
        }
    });
    
    $('#updateBtn').on('click', function () { 
        $.ajax({
            url: 'updateHoroscope.php',
            method: 'PUT',
            data: {birthnumber: $("#birthNumber").val()},
            success: function (data) {
                console.log(data);
            }
        });
        viewHoroscope();
    });
    
    $('#deleteBtn').on('click', function () { 
        $.ajax({
            url: 'deleteHoroscope.php',
            method: 'DELETE',
            success: function (data) {
                location.reload();
            }
        });
        viewHoroscope();
    });

    function viewHoroscope() {
        $.ajax({
            url: 'viewHoroscope.php',
            method: 'GET',
            success: function (data) {
                $("#horoscopeOutput").empty();
                $("#horoscopeOutput").append(data);
            }
        });
    }

    viewHoroscope();
});