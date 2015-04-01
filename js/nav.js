jQuery(function(){
	// ===============================
	// ハンバーガーアイコン動作関係
	// ===============================

	// ナビアイコンをクリックしたら

	jQuery('.navIcon').click(function(){
		jQuery('.overlay').toggle(); // オーバーレイ表示切替
		jQuery('.menu').toggleClass('menuOn'); // サイドメニュー表示切替
		jQuery('#wrap').toggleClass('fixed'); // コンテンツ固定

		if (jQuery('.iconLayer').hasClass('arrow')) { // アイコンが矢印なら
			jQuery('.iconLayer').removeClass('arrow').addClass('hamburger'); // ハンバーガーメニューに
		} else { // それ以外なら
			jQuery('.iconLayer').removeClass('hamburger').addClass("arrow"); // 矢印
		}
		return false;
	});

	// オーバーレイ作成
	jQuery('#contents').prepend('<div class="overlay"></div>');

	// オーバーレイをクリックしたら
	jQuery('.overlay').click(function(){
		jQuery(this).fadeOut(300); // オーバーレイ非表示
		jQuery('.menu').removeClass('menuOn'); // メニュー非表示
		jQuery('#wrap').removeClass('fixed'); // 固定解除
		jQuery('.iconLayer').removeClass('arrow').addClass('hamburger'); // ハンバーガーメニューに
	});
	
	jQuery('.wrapper').click(function(){
	jQuery('.menu').removeClass('menuOn');
	});
	// ===============================
	// メニュー動作関係
	// ===============================

	// サイドナビゲーション高さ指定
	function winHeight() {
		var winH = jQuery(window).height();
		var headerH = jQuery('header').height();
		var winH = winH - headerH; // ヘッダーの高さを引く
		jQuery('.menu').css({
			'height': winH + 'px',
			'top': headerH + 'px'
		});
		jQuery('#contents').css('marginTop', headerH + 30 + 'px');
	}
	winHeight();

	// リサイズしたら再度実行
	jQuery(window).resize(function(){
		winHeight();
	});
	
	// サイドメニュー説明文
	jQuery('.menuHeader figcaption').click(function(){
		jQuery('.menu .txt').slideToggle();
	});

});