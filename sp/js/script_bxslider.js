$(document).ready(function(){
  $('.bxslider').bxSlider({
     auto:true, 　　//自動で動くか否か
　　 speed:1000,　　//スライド動作の速度。ミリ秒指定。デフォルトでは500です。
　　 pause:4500,  　//スライド動作するまでの時間。あんまり短いとせわしないです。
     mode: 'horizontal',　//スライドするときのエフェクト、フェードイン、フェードアウトで切り替わります。''ではさむ
     pager: true,　//1枚目～4枚目みたいな表記。trueで表示。falseで非表示
     controls: true　//次へ＞前へ＜の表示、非表示。trueで表示。falseで非表示。
　});
});