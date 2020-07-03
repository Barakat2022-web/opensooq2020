

$('#carmake').change(function() {
    var CarMake = $(this).val();

    if (CarMake) {
        $.ajax({
            type: "GET",
            url: "/get-car-model-list?car_make_id=" + CarMake,
            success: function(res) {
                // console.log(res);
                if (res) {
                    $("#carmodel").empty();
                    $("#carmodel").append('<option>Select</option>');
                    $.each(res, function(key, value) {
                        $("#carmodel").append('<option value="' + value + '">' + key.charAt(0).toUpperCase() + key.slice(1) + '</option>');

                    });

                    $('carmodel').selectpicker('refresh');


                } else {
                    $("#carmodel").empty();
                }
            }
        });
    } else {
        $("#carmake").empty();
        $("#carmodel").empty();
    }
});


$('#carmake1').change(function() {
    var CarMake = $(this).val();

    if (CarMake) {
        $.ajax({
            type: "GET",
            url: "/get-car-model-list?car_make_id=" + CarMake,
            success: function(res) {
                // console.log(res);
                if (res) {
                    $("#carmodel1").empty();
                    $("#carmodel1").append('<option>Select</option>');
                    $.each(res, function(key, value) {
                        $("#carmodel1").append('<option value="' + value + '">' + key.charAt(0).toUpperCase() + key.slice(1) + '</option>');

                    });

                    $('carmodel1').selectpicker('refresh');


                } else {
                    $("#carmodel1").empty();
                }
            }
        });
    } else {
        $("#carmake1").empty();
        $("#carmodel1").empty();
    }
});

$('#carmake').select2({
    width: '250px'
});
$('#carmake1').select2({
    width: '250px'
});
$("#carmodel").select2({ width: '250px' });
$("#carmodel1").select2({ width: '250px' });


$('#year').select2({
    width: '250px',
});
$('#year1').select2({
    width: '250px',
});
$('#year2').select2({
    width: '250px',
});
$('#year3').select2({
    width: '250px',
});



$('#fuel').select2({
    width:'248.733px',
});

$('#fuel_rental').select2({
    width:'248.733px',
});

$('#rental_period').select2({width:'248.733px',});


$(function () {
    $('.selectpicker').selectpicker();
});

var count = $("#car_option :selected").length;

// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, true);
    });
  }, true);
})();


//datepicker
$(document).ready(function(){
    var date_input=$('input[name="date"]'); //our date input has the name "date"
    var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
    date_input.datepicker({
        format: 'mm/dd/yyyy',
        container: container,
        todayHighlight: true,
        autoclose: true,
    })
})

//image


//motor cycle

$("#motormake").select2({ width: '250px' });
$("#motormodel").select2({ width: '250px' });
$("#engine").select2({ width: '258px'});

//images
$(document).ready(function(){
    $('#images').on('change', function(){ //on file input change
       if (window.File && window.FileReader && window.FileList && window.Blob) //check File API supported browser
       {

           var data = $(this)[0].files; //this file data

           $.each(data, function(index, file){ //loop though each file
               if(/(\.|\/)(gif|jpe?g|png)$/i.test(file.type)){ //check supported file type
                   var fRead = new FileReader(); //new filereader
                   fRead.onload = (function(file){ //trigger function on successful read
                   return function(e) {
                       var img = $('<img/>').addClass('thumb').attr('src', e.target.result); //create image element
                       $('#preview_img').append(img); //append image to output element
                   };
                   })(file);
                   fRead.readAsDataURL(file); //URL representing the file's data.
               }
           });

       }else{
           alert("Your browser doesn't support File API!"); //if File API is absent
       }
    });
   });

//images_carrent
$(document).ready(function(){
    $('#images_carrent').on('change', function(){ //on file input change
        if (window.File && window.FileReader && window.FileList && window.Blob) //check File API supported browser
        {

            var data = $(this)[0].files; //this file data

            $.each(data, function(index, file){ //loop though each file
                if(/(\.|\/)(gif|jpe?g|png)$/i.test(file.type)){ //check supported file type
                    var fRead = new FileReader(); //new filereader
                    fRead.onload = (function(file){ //trigger function on successful read
                    return function(e) {
                        var img = $('<img/>').addClass('thumb').attr('src', e.target.result); //create image element
                        $('#preview_img1').append(img); //append image to output element
                    };
                    })(file);
                    fRead.readAsDataURL(file); //URL representing the file's data.
                }
            });

        }else{
            alert("Your browser doesn't support File API!"); //if File API is absent
        }
     });
    });
