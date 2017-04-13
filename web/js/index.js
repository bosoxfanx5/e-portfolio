$(document).ready(function () {

  $('.about').delay(300).fadeIn(1000);
  $('.skills').delay(700).fadeIn(1000);
  $('.projects').delay(1100).fadeIn(1000);
  $('.contact').delay(1500).fadeIn(1000);

  var $animation_elements = $('.animation-element');
  var $animation_bar = $('.percentage-bar');
  var $window = $(window);

  function check_if_in_view() {
    var window_height = $window.height();
    var window_top_position = $window.scrollTop();
    var window_bottom_position = (window_top_position + window_height);

    $.each($animation_elements, function() {
      var $element = $(this);
      var element_height = $element.outerHeight();
      var element_top_position = $element.offset().top;
      var element_bottom_position = (element_top_position + element_height);

      //check to see if this current container is within viewport
      if ((element_bottom_position >= window_top_position) &&
      (element_top_position <= window_bottom_position)) {
        $element.addClass('in-view');
      } else {
        $element.removeClass('in-view');
      }
    });

    $.each($animation_bar, function() {
      var $element = $(this);
      var element_height = $element.outerHeight();
      var element_top_position = $element.offset().top;
      var element_bottom_position = (element_top_position + element_height);

      //check to see if this current container is within viewport
      if ((element_bottom_position >= window_top_position) &&
      (element_top_position <= window_bottom_position)) {
        $('.percentage-bar').each(function(){
          $(this).find('.bar').animate({
            width: $(this).attr('data-percent')
          }, 5000);
        });
      } else {

      }
    });
  }

  $window.on('scroll resize', check_if_in_view);
  $window.trigger('scroll');

  $('.nav-tabs a').click(function (e) {
    e.preventDefault()
    $(this).tab('show')
  });

  // Initialize MatchHeight.js
  $('.box').matchHeight(false);

  // Back to Top button
  $(window).scroll(function () {
    if ($(this).scrollTop() > 50) {
      $('#back-to-top').fadeIn();
    } else {
      $('#back-to-top').fadeOut();
    }
  });
  // scroll body to 0px on click
  $('#back-to-top').click(function () {
    $('#back-to-top').tooltip('hide');
    $('body,html').animate({
      scrollTop: 0
    }, 800);
    return false;
  });

  $('#back-to-top').tooltip('show');

});
