$(function() {
  var href = window.location.href;
  $('nav a').each(function(e,i) {
    if (href.indexOf($(this).attr('href')) >= 0) {
      $(this).addClass('active');
    }
  });
});
