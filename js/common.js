$(function(){ //smooth scroll
   $('a[href^=#]').click(function() {
      var speed = 500;
      var href= $(this).attr("href");
      var target = $(href == "#" || href == "" ? 'html' : href);
      var position = target.offset().top;
      $('body,html').animate({scrollTop:position}, speed, 'swing');
      return false;
   });
   
});

$(function(){ //tab switcher
  $('#tabMenu li').on('click', function(){
    if($(this).not('active')){
      // タブメニュー
      $(this).addClass('active').siblings('li').removeClass('active');
      // タブの中身
      var index = $('#tabMenu li').index(this);
      $('#tabBox div').eq(index).addClass('active').siblings('div').removeClass('active');
    }
  });
});

$(function () {
    $('.financial_btn').nextAll().hide();
    $('.financial_btn').click(function () {
        if ($(this).nextAll().is(':hidden')) {
            $(this).nextAll().slideDown();
            $(this).children('img').attr("src", $('.financial_btn img').attr("src").replace("-o", "-c"));
        } else {
            $(this).nextAll().slideUp();
            $(this).children('img').attr("src", $('.financial_btn img').attr("src").replace("-c", "-o"));
        }
    });
});
