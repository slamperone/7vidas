var ChartColor = ["#5D62B4", "#54C3BE", "#EF726F", "#F9C446", "rgb(93.0, 98.0, 180.0)", "#21B7EC", "#04BCCC"];
var primaryColor = getComputedStyle(document.body).getPropertyValue('--primary');
var secondaryColor = getComputedStyle(document.body).getPropertyValue('--secondary');
var successColor = getComputedStyle(document.body).getPropertyValue('--success');
var warningColor = getComputedStyle(document.body).getPropertyValue('--warning');
var dangerColor = getComputedStyle(document.body).getPropertyValue('--danger');
var infoColor = getComputedStyle(document.body).getPropertyValue('--info');
var darkColor = getComputedStyle(document.body).getPropertyValue('--dark');
var lightColor = getComputedStyle(document.body).getPropertyValue('--light');
(function ($) {
  'use strict';
  $(function () {
    var body = $('body');
    var contentWrapper = $('.content-wrapper');
    var scroller = $('.container-scroller');
    var footer = $('.footer');
    var sidebar = $('#sidebar');

    //Add active class to nav-link based on url dynamically
    //Active class can be hard coded directly in html file also as required
    if (!$('#sidebar').hasClass("dynamic-active-class-disabled")) {
      var current = location.pathname.split("/").slice(-1)[0].replace(/^\/|\/$/g, '');
      $('#sidebar >.nav > li:not(.not-navigation-link) a').each(function () {
        var $this = $(this);
        if (current === "") {
          //for root url
          if ($this.attr('href').indexOf("index.html") !== -1) {
            $(this).parents('.nav-item').last().addClass('active');
            if ($(this).parents('.sub-menu').length) {
              $(this).addClass('active');
            }
          }
        } else {
          //for other url
          if ($this.attr('href').indexOf(current) !== -1) {
            $(this).parents('.nav-item').last().addClass('active');
            if ($(this).parents('.sub-menu').length) {
              $(this).addClass('active');
            }
            if (current !== "index.html") {
              $(this).parents('.nav-item').last().find(".nav-link").attr("aria-expanded", "true");
              if ($(this).parents('.sub-menu').length) {
                $(this).closest('.collapse').addClass('show');
              }
            }
          }
        }
      })
    }

    //Close other submenu in sidebar on opening any
    $("#sidebar > .nav > .nav-item > a[data-toggle='collapse']").on("click", function () {
      $("#sidebar > .nav > .nav-item").find('.collapse.show').collapse('hide');
    });


    //checkbox and radios
    $(".form-check label,.form-radio label").append('<i class="input-helper"></i>');

  });

  // el babas was here

  $('#marca').prop('disabled', 'disabled');
  $('#subcat').prop('disabled', 'disabled');


  $(document).on('change', "#cat", function () {
    var cat_id = $('#cat').val();

      $.ajax({
        type: "GET",
        url: route('get.subs', cat_id),
          success: function (respuesta) {

            $('#subcat').empty().removeAttr('disabled');
            $('#subcat').append('<option value="">...</option>');

            $('#marca').prop('disabled', 'disabled');
            $('#marca').empty().append('<option value="">...</option>');

            $.each($.parseJSON(respuesta), function(idx, obj) {
              $('#subcat').append('<option value="'+obj.id+'">'+obj.nombre+'</option>');
            });

          }
       });
 });


    $(document).on('change', "#subcat", function () {
    var cat_id = $('#cat').val();

      $.ajax({
        type: "GET",
        url: route('get.marcas', cat_id),
          success: function (respuesta) {

            $('#marca').empty().removeAttr('disabled');
            $('#marca').append('<option value="">...</option>');

            console.log(respuesta);

            $.each($.parseJSON(respuesta), function(idx, obj) {
              $('#marca').append('<option value="'+obj.id+'">'+obj.marca+'</option>');
            });

          }
       });
 });

$(document).on('change', ".paraPrecios", function () {

  var val_temp = $(this).val();

  console.log(!isNaN(val_temp));

  if ( !isNaN(val_temp) ) {

    $('#cuantos').val(parseInt($("#cuantos").val())+1);

    console.log($('#cuantos').val());
  }


});

$("#formStep2").parsley({
    excluded: 'input[type=button], input[type=submit], input[type=reset]',
    inputs: 'input, textarea, select, input[type=hidden], :hidden',
});

function delQuest(cual){
    var respuesta = confirm("¿Desear borrar el cuestionario de "+cual+"?")
             
    if(respuesta)
      alert("Usted aceptó.");
    else
      alert("Usted no aceptó."); 
  }

})(jQuery);



