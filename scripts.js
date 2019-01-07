$(document).ready(function() {

    $('#saveBtn').on('click', function () {
        $.ajax({
            url: 'addHoroscope.php',
            method: 'POST',
            data: {birthnumber: $("#birthNumber").val()},
            success: function (data) {
            }
        });
        viewHoroscope();
    });
    
    $('#updateBtn').on('click', function () { 
        $.ajax({
            url: 'updateHoroscope.php',
            method: 'PUT',
            success: function (data) {
            }
        });
    });
    
    $('#deleteBtn').on('click', function () { 
        $.ajax({
            url: 'deleteHoroscope.php',
            method: 'DELETE',
            success: function (data) {
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