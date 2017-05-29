$('#BTN').addClass('animated shake');
$('#BTN').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
$('#BTN').removeClass('animated shake');});
$('body').on('click', function(){
  $('#BTN').addClass('animated shake');
  $('#BTN').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
    $('#BTN').removeClass('animated shake');
  });
});
