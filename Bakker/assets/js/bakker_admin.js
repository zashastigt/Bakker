$(document).ready(function () {

  $("#mobile_info_container").hide();

  $("#info").click(function () {
    $("#mobile_info_container").slideToggle("slow");
  });

  $("#close_info").click(function () {
    $("#mobile_info_container").slideToggle("slow");
  });

  $(function () {
    $("#calander_start").datepicker();
  });

  $(function () {
    $("#calander_end").datepicker();
  });

});

// Website on off buttons

// $(document).on('click', "img#shoping_cart", function (e) {

//   window.location.href = "http://10.45.41.52/Bakker/bakker_betalingspagina.php";

//   e.preventDefault();

//   var form = $('input#quantity').val();
//   $.ajax({
//     url: 'http://10.45.41.52/Bakker/bakker_betalingspagina.php',
//     method: 'post',
//     dataType: 'json',
//     data: {
//       quantity: form
//     },
//     success: function (data) {
//       console.log(data);
//       $('span#notifier').html('server :' + data.message);
//     },
//     fail: function () {
//       console.log('error has arrived...')
//     }
//   })
// });

function siteOn() {

};

function siteOff() {

};
