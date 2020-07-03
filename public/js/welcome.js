$('#city').change(function() {
    var CityID = $(this).val();
    if (CityID) {
        $.ajax({
            type: "GET",
            url: "/get-region-list?city_id=" + CityID,
            success: function(res) {
                if (res) {
                    $("#region").empty();
                    $("#region").append('<option>Select Region</option>');
                    $.each(res, function(key, value) {

                        $("#region").append('<option value="' + value + '">' + key.charAt(0).toUpperCase() + key.slice(1) + '</option>');
                    });

                    $('region').selectpicker('refresh');

                } else {
                    $("#region").empty();
                }
            }
        });
    } else {
        $("#city").empty();
        $("#region").empty();
    }

});

/**
///////////////////////////////////////////
////////////////////////////////////////
*/

//This code for search dropdownlist on Departments

$('#department').change(function() {
    var DepartID = $(this).val();
    if (DepartID) {
        $.ajax({
            type: "GET",
            url: "/get-subdepartment-list?department_id=" + DepartID,
            success: function(res) {
                if (res) {
                    $("#subdepartment").empty();
                    $("#subdepartment").append('<option disabled="true">Select SubDepartment</option>');
                    $.each(res, function(key, value) {
                        $("#subdepartment").append('<option value="' + key + '">' + key.charAt(0).toUpperCase() + key.slice(1) + '</option>');
                    });
                    $('subdepartment').selectpicker('refresh');

                } else {
                    $("#subdepartment").empty();
                }
            }
        });
    } else {
        $("#department").empty();
        $("#subdepartment").empty();
    }
});
///////////////////////////////////////////////
/////////////////////////////////////////////////////////
//This code for search dropdownlist
$('#city').select2();
$('#region').select2();
$('#department').select2();
$('#subdepartment').select2();

/////////////////////////////////////////////////////

$('.car_color').hover(function(){
    var car_color=$(this).children('')
});
////////////////////////////////////////////////

$('#city1').change(function() {
    var CityID = $(this).val();
    if (CityID) {
        $.ajax({
            type: "GET",
            url: "/get-region-list?city_id=" + CityID,
            success: function(res) {
                if (res) {
                    $("#region1").empty();
                    $("#region1").append('<option>Select Region</option>');
                    $.each(res, function(key, value) {

                        $("#region1").append('<option value="' + value + '">' + key.charAt(0).toUpperCase() + key.slice(1) + '</option>');
                    });

                    $('region1').selectpicker('refresh');

                } else {
                    $("#region1").empty();
                }
            }
        });
    } else {
        $("#city1").empty();
        $("#region1").empty();
    }

});

$('#city1').select2({
    width: '250px'
});
$('#region1').select2({
    width: '250px'
});
///////////////////////////////////////////////////////
$('#city2').change(function() {
    var CityID = $(this).val();
    if (CityID) {
        $.ajax({
            type: "GET",
            url: "/get-region-list?city_id=" + CityID,
            success: function(res) {
                if (res) {
                    $("#region2").empty();
                    $("#region2").append('<option>Select Region</option>');
                    $.each(res, function(key, value) {

                        $("#region2").append('<option value="' + value + '">' + key.charAt(0).toUpperCase() + key.slice(1) + '</option>');
                    });

                    $('region2').selectpicker('refresh');

                } else {
                    $("#region2").empty();
                }
            }
        });
    } else {
        $("#city2").empty();
        $("#region2").empty();
    }

});

$('#city2').select2({
    width: '250px'
});
$('#region2').select2({
    width: '250px'
});


