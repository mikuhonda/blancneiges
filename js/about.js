$(function () {
  $('span').click(function() { 
    if ($(this).attr('class') == 'selected') {
      // メニュー非表示
      $(this).removeClass('selected').next('ul').slideUp('fast');
    } else {
      // 表示しているメニューを閉じる
      $('span').removeClass('selected');
      $('ul').hide();

      // メニュー表示
      $(this).addClass('selected').next('ul').slideDown('fast');
    }    
  });
  
  // メニュー領域外をクリックしたらメニューを閉じる
  $('body').click(function() {
    if (over_flg == false) {
      $('span').removeClass('selected');
      $('ul').slideUp('fast');
    }
  });
});