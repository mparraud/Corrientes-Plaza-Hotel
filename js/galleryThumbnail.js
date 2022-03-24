// JavaScript Document
$('#myCarousel').carousel({
    interval: 4000
});

// handles the carousel thumbnails
$('[id^=carousel-selector-]').click( function(){
  var id_selector = $(this).attr("id");
  var id = id_selector.substr(id_selector.length -1);
  id = parseInt(id);
  $('#myCarousel').carousel(id);
  $('[id^=carousel-selector-]').removeClass('selected');
  $(this).addClass('selected');
});

// when the carousel slides, auto update
$('#myCarousel').on('slid', function (e) {
  var id = $('.item.active').data('slide-number');
  id = parseInt(id);
  $('[id^=carousel-selector-]').removeClass('selected');
  $('[id=carousel-selector-'+id+']').addClass('selected');
});



// JavaScript Document
$('#myCarousel3').carousel({
    interval: 4000
});

// handles the carousel thumbnails
$('[id^=carousel3-selector-]').click( function(){
  var id_selector = $(this).attr("id");
  var id = id_selector.substr(id_selector.length -1);
  id = parseInt(id);
  $('#myCarousel3').carousel(id);
  $('[id^=carousel3-selector-]').removeClass('selected');
  $(this).addClass('selected');
});

// when the carousel slides, auto update
$('#myCarousel3').on('slid', function (e) {
  var id = $('.item.active').data('slide-number3');
  id = parseInt(id);
  $('[id^=carousel3-selector-]').removeClass('selected');
  $('[id=carousel3-selector-'+id+']').addClass('selected');
});





// JavaScript Document
$('#myCarousel2').carousel({
    interval: 4000
});

// handles the carousel thumbnails
$('[id^=carousel2-selector-]').click( function(){
  var id_selector = $(this).attr("id");
  var id = id_selector.substr(id_selector.length -1);
  id = parseInt(id);
  $('#myCarousel2').carousel(id);
  $('[id^=carousel2-selector-]').removeClass('selected');
  $(this).addClass('selected');
});

// when the carousel slides, auto update
$('#myCarousel2').on('slid', function (e) {
  var id = $('.item.active').data('slide-number2');
  id = parseInt(id);
  $('[id^=carousel2-selector-]').removeClass('selected');
  $('[id=carousel2-selector-'+id+']').addClass('selected');
});

