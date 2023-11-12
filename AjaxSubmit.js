$(document).ready(function() {
    // Function that will run when the city selector changes
    $("#city").change(function() {
        var selectOption = $("#city option:selected");
        var selectVal = selectOption.val();
        $.ajax({
            type: "POST",
            url: "Process.php",
            cache: false,
            data: {districts: selectVal},
            success: function (reply) {
                $("#district").prop("disabled", false);
                $("#district").html("" + reply);
            }
        });

    });
    });
