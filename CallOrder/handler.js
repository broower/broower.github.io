'use strict';

$(document).ready(function(){
  //
  $('#popup__toggle').click(function(){
    $('.modal-content').slideDown();
  });

  $('#close-btn-modal').click(function(){
    $('.modal-content').slideUp();
  });

  //
  $('#send-email').click(function(){

    var name = $('#name-order').val();
    var phone = $('#phone-order').val();

    if ( name !== '' && phone !== '' ) {
      $.post("handler.php",{
          name: name,
          phone: phone
        },
        function success(data) {
          if( data !== 0 ) $('.modal-content').html('Отправлено!').slideUp(3000);
        });

    }
    else $(this).siblings('input').animate({opacity: 0.25}, 500).animate({opacity: 1}, 500);

  });

});