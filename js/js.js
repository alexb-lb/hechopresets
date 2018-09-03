'use strict';
/************ purchase modal window ************/
jQuery('a[data-purchase], a[data-purchase]').click(function (e){
  e.preventDefault();
  jQuery('.modal[data-purchase]').show();
});

jQuery('.modal[data-purchase]').click(function (e){
  e.preventDefault();
  if(jQuery(e.target).attr('data-purchase') === 'form'){
    jQuery(this).hide();
  }
});


/****** target _blank для всех внешних ссылок ******/
function setTargetBlank() {
  var links = document.body.querySelectorAll('[href^="http"]');

  for(var i = 0; i < links.length; i++){
    links[i].setAttribute("target", "_blank");
  }
}
window.addEventListener("DOMContentLoaded", setTargetBlank);

/*** Send email ***/
jQuery('#send-preset').click(function (){
  var $emailField = jQuery('.free-preset-form input');
  var email = $emailField.val();

  if(email.length === 0){
    alert('Please add your email');
    $emailField.focus();
    return;
  }

  jQuery.ajax({
    type: "POST",
    url: '/templates/hecho_v2/sendMail.php',
    dataType: 'json',
    data: {email: email}
  }).done(function (data) {
    if(data.success){
      alert('We will send free preset to your email in a few minutes!');
      $emailField.val('');
    } else {
      alert('Oops, seems to some error occurs');
    }
  }).fail(function () {
    alert('Oops, seems to some error occurs');
  });
});

/*** Send email for viewbug ***/
jQuery('#send-preset-viewbug').click(function (){
  var $emailField = jQuery('.free-preset-form input');
  var email = $emailField.val();

  if(email.length === 0){
    alert('Please add your email');
    $emailField.focus();
    return;
  }

  jQuery.ajax({
    type: "POST",
    url: '/templates/hecho_v2/sendMailViewbug.php',
    dataType: 'json',
    data: {email: email}
  }).done(function (data) {
    if(data.success){
      alert('We will send free preset to your email in a few minutes!');
      $emailField.val('');
    } else {
      alert('Oops, seems to some error occurs');
    }
  }).fail(function () {
    alert('Oops, seems to some error occurs');
  });
});