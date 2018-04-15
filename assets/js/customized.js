
// Notification
$(function() {
  "use strict";
  $("#tst1").click(function(){
   $.toast({
    heading: 'Welcome to Monster admin',
    text: 'Use the predefined ones, or specify a custom position object.',
    position: 'top-right',
    loaderBg:'#ff6849',
    icon: 'info',
    hideAfter: 3000, 
    stack: 1
  });

 });

  $(".tst2").click(function(){
   $.toast({
    heading: 'Welcome to Monster admin',
    text: 'Use the predefined ones, or specify a custom position object.',
    position: 'top-right',
    loaderBg:'#ff6849',
    icon: 'warning',
    hideAfter: 3000, 
    stack: 6
  });

 });
  $("#seat_success").click(function(){
   $.toast({
    heading: 'Welcome to Monster admin',
    text: 'Use the predefined ones, or specify a custom position object.',
    position: 'top-right',
    loaderBg:'#ff6849',
    icon: 'success',
    hideAfter: 3500, 
    stack: 6
  });

 });

  $("#seat_error").click(function(){
   $.toast({
    heading: 'Error',
    text: 'Silahkan unselect terlebih dahulu!',
    position: 'top-right',
    loaderBg:'#ff6849',
    icon: 'error',
    hideAfter: 3500

  });

 });
});

