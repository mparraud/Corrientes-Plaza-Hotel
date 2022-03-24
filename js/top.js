// JavaScript Document

$(function(){
  $('#contactbutton').click(function(){
    $('html,body').animate({
      scrollTop: $('#form1').offset().top
    }, 1000);
    return false;
  });
});