$( document ).ready(function() {

    //Data to be pulled for ajax
    var cityVal=document.getElementById("cityDB").value;
    var disVal=document.getElementById("districtDB").value;
    var selectCityElement = document.getElementById("cityedit");
    var selectDisElement = document.getElementById("districtedit");

    //city selection process
    for (var i = 0; i < selectCityElement.options.length; i++) {
        if (selectCityElement.options[i].value === cityVal) {
            selectCityElement.selectedIndex = i;
            break;
        }
    }

    //ajax post process to get district list
    $.ajax({
        type: "POST",
        url: "Process.php",
        cache: false,
        data: {districts: cityVal},
        success: function (reply) {
            $("#districtedit").html("" + reply);
        }
    });

    //district selection process
    for (var i = 0; i < selectDisElement.options.length; i++) {
        if (selectDisElement.options[i].value === disVal) {
            selectDisElement.selectedIndex = i;
            break;
        }
    }


    //Function that will run when the city is changed
    $("#cityedit").change(function() {
        var selectOption = $("#cityedit option:selected");
        var selectVal = selectOption.val();
        $.ajax({
            type: "POST",
            url: "Process.php",
            cache: false,
            data: {districts: selectVal},
            success: function (reply) {
                $("#districtedit").html("" + reply);
            }
        });

    });

});





