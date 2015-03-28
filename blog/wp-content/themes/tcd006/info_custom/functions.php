<?php

add_action('admin_menu', 'my_plugin_menu');

function my_plugin_menu() {
	add_theme_page(__('TCD006-Option'), __('TCD006-Option'), 'edit_themes', basename(__FILE__), 'tcd006_options');
}



/**
 * Enter description here ...
 */
function tcd006_options() {

    // フィールドと設定項目名のための変数
    $opt_color   = 'opt_color';
    $opt_color2  = 'opt_color2';
    $opt_midasi_height  = 'opt_midasi_height';
    $opt_font_color_top  = 'opt_font_color_top';
    $opt_h_twitter = 'opt_h_twitter';
    $opt_h_hatena = 'opt_h_hatena';
    $opt_h_contact = 'opt_h_contact';
    $opt_h_contact_address = 'opt_h_contact_address';
    $opt_h_rss = 'opt_h_rss';
    $opt_twitter_acount = 'opt_twitter_acount';
    $opt_google_acount = 'opt_google_acount';
    $opt_facebook_acount = 'opt_facebook_acount';
    $opt_mixi_acount = 'opt_mixi_acount';
    $opt_page_top = 'opt_page_top';
    $opt_t_title = 'opt_t_title';
    $opt_t_cate = 'opt_t_cate';
    $opt_t_news_count = 'opt_t_news_count';
    $opt_s_twitter = 'opt_s_twitter';
    $opt_s_hatena = 'opt_s_hatena';
    $opt_s_google = 'opt_s_google';
    $opt_s_facebook = 'opt_s_facebook';
    $opt_s_mixi = 'opt_s_mixi';
    $opt_date = 'opt_date';

    $hidden_field_name_color   = 'hidden_color';
    $hidden_field_name_color2  = 'hidden_color2';
    $hidden_field_name_midasi_height  = 'hidden_midasi_height';
    $hidden_field_name_font_color_top  = 'hidden_font_color_top';
    $hidden_field_name_h_twitter   = 'hidden_h_twitter';
    $hidden_field_name_h_hatena   = 'hidden_h_hatena';
    $hidden_field_name_h_contact   = 'hidden_h_contact';
    $hidden_field_name_h_contact_address   = 'hidden_h_contact_address';
    $hidden_field_name_h_rss   = 'hidden_h_rss';
    $hidden_field_name_twitter_acount   = 'hidden_twitter_acount';
    $hidden_field_name_google_acount   = 'hidden_google_acount';
    $hidden_field_name_facebook_acount   = 'hidden_facebook_acount';
    $hidden_field_name_mixi_acount   = 'hidden_mixi_acount';
    $hidden_field_name_page_top   = 'hidden_page_top';
    $hidden_field_name_t_title   = 'hidden_t_title';
    $hidden_field_name_t_cate   = 'hidden_t_cate';
    $hidden_field_name_t_news_count   = 'hidden_t_news_count';
    $hidden_field_name_s_twitter   = 'hidden_s_twitter';
    $hidden_field_name_s_hatena   = 'hidden_s_hatena';
    $hidden_field_name_s_google   = 'hidden_s_google';
    $hidden_field_name_s_facebook   = 'hidden_s_facebook';
    $hidden_field_name_s_mixi   = 'hidden_s_mixi';
    $hidden_field_name_date   = 'hidden_date';

    $data_field_name_color   = 'color';
    $data_field_name_color2  = 'color2';
    $data_field_name_midasi_height  = 'midasi_height';
    $data_field_name_font_color_top  = 'font_color_top';
    $data_field_name_h_twitter = 'h_twitter';
    $data_field_name_h_hatena = 'h_hatena';
    $data_field_name_h_contact = 'h_contact';
    $data_field_name_h_contact_address = 'h_contact_address';
    $data_field_name_h_rss = 'h_rss';
    $data_field_name_twitter_acount = 'twitter_acount';
    $data_field_name_google_acount = 'google_acount';
    $data_field_name_facebook_acount = 'facebook_acount';
    $data_field_name_mixi_acount = 'mixi_acount';
    $data_field_name_page_top = 'page_top';
    $data_field_name_t_title = 't_title';
    $data_field_name_t_cate = 't_cate';
    $data_field_name_t_news_count = 't_news_count';
    $data_field_name_s_twitter = 's_twitter';
    $data_field_name_s_hatena = 's_hatena';
    $data_field_name_s_google = 's_google';
    $data_field_name_s_facebook = 's_facebook';
    $data_field_name_s_mixi = 's_mixi';
    $data_field_name_date = 'date';

    // データベースから既存の設定値を読み込む
    $opt_val_color   = get_option( $opt_color );
    $opt_val_color2  = get_option( $opt_color2 );
    $opt_val_midasi_height  = get_option( $opt_midasi_height );
    $opt_val_font_color_top  = get_option( $opt_font_color_top );
    $opt_val_h_twitter   = get_option( $opt_h_twitter );
    $opt_val_h_hatena   = get_option( $opt_h_hatena );
    $opt_val_h_contact   = get_option( $opt_h_contact );
    $opt_val_h_contact_address   = get_option( $opt_h_contact_address );
    $opt_val_h_rss   = get_option( $opt_h_rss );
    $opt_val_twitter_acount   = get_option( $opt_twitter_acount );
    $opt_val_google_acount   = get_option( $opt_google_acount );
    $opt_val_facebook_acount   = get_option( $opt_facebook_acount );
    $opt_val_mixi_acount   = get_option( $opt_mixi_acount );
    $opt_val_page_top   = get_option( $opt_page_top );
    $opt_val_t_title   = get_option( $opt_t_title );
    $opt_val_t_cate   = get_option( $opt_t_cate );
    $opt_val_t_news_count   = get_option( $opt_t_news_count );
    $opt_val_s_twitter   = get_option( $opt_s_twitter );
    $opt_val_s_hatena   = get_option( $opt_s_hatena );
    $opt_val_s_google   = get_option( $opt_s_google );
    $opt_val_s_facebook   = get_option( $opt_s_facebook );
    $opt_val_s_mixi   = get_option( $opt_s_mixi );
    $opt_val_date   = get_option( $opt_date );

    // ユーザが何かの情報を投稿したかどうかをチェックする
    // 投稿していれば、このhiddenフィールドの値は'Y'にセットされる
    if( $_POST[ $hidden_field_name_color ] == 'Y' ||
        $_POST[ $hidden_field_name_color2 ] == 'Y' ||
        $_POST[ $hidden_field_name_midasi_height ] == 'Y' ||
        $_POST[ $hidden_field_name_font_color_top ] == 'Y' ||
        $_POST[ $hidden_field_name_h_twitter ] == 'Y' ||
        $_POST[ $hidden_field_name_h_hatena ] == 'Y' ||
        $_POST[ $hidden_field_name_h_contact ] == 'Y' ||
        $_POST[ $hidden_field_name_h_contact_address ] == 'Y' ||
        $_POST[ $hidden_field_name_h_rss ] == 'Y' ||
        $_POST[ $hidden_field_name_s_twitter ] == 'Y' ||
        $_POST[ $hidden_field_name_s_hatena ] == 'Y' ||
        $_POST[ $hidden_field_name_s_google ] == 'Y' ||
        $_POST[ $hidden_field_name_s_facebook ] == 'Y' ||
        $_POST[ $hidden_field_name_s_mixi ] == 'Y' ||
        $_POST[ $hidden_field_name_date ] == 'Y' ||
        $_POST[ $hidden_field_name_twitter_acount ] == 'Y' ||
        $_POST[ $hidden_field_name_google_acount ] == 'Y' ||
        $_POST[ $hidden_field_name_facebook_acount ] == 'Y' ||
        $_POST[ $hidden_field_name_mixi_acount ] == 'Y' ||
        $_POST[ $hidden_field_name_page_top ] == 'Y' ||
        $_POST[ $hidden_field_name_t_title ] == 'Y' ||
        $_POST[ $hidden_field_name_t_cate ] == 'Y' ||
        $_POST[ $hidden_field_name_t_news_count ] == 'Y') {

        // 投稿された値を読む
        $opt_val_color  = $_POST[ $data_field_name_color ];
        $opt_val_color2 = $_POST[ $data_field_name_color2 ];
        $opt_val_midasi_height = $_POST[ $data_field_name_midasi_height ];
        $opt_val_font_color_top = $_POST[ $data_field_name_font_color_top ];
        $opt_val_h_twitter = $_POST[ $data_field_name_h_twitter ];
        $opt_val_h_hatena = $_POST[ $data_field_name_h_hatena ];
        $opt_val_h_contact = $_POST[ $data_field_name_h_contact ];
        $opt_val_h_contact_address = $_POST[ $data_field_name_h_contact_address ];
        $opt_val_h_rss = $_POST[ $data_field_name_h_rss ];
        $opt_val_s_twitter = $_POST[ $data_field_name_s_twitter ];
        $opt_val_s_hatena = $_POST[ $data_field_name_s_hatena ];
        $opt_val_s_google = $_POST[ $data_field_name_s_google ];
        $opt_val_s_facebook = $_POST[ $data_field_name_s_facebook ];
        $opt_val_s_mixi = $_POST[ $data_field_name_s_mixi ];
        $opt_val_date = $_POST[ $data_field_name_date ];
        $opt_val_twitter_acount = $_POST[ $data_field_name_twitter_acount ];
        $opt_val_google_acount = $_POST[ $data_field_name_google_acount ];
        $opt_val_facebook_acount = $_POST[ $data_field_name_facebook_acount ];
        $opt_val_mixi_acount = $_POST[ $data_field_name_mixi_acount ];
        $opt_val_page_top = $_POST[ $data_field_name_page_top ];
        $opt_val_t_title = $_POST[ $data_field_name_t_title ];
        $opt_val_t_cate = $_POST[ $data_field_name_t_cate ];
        $opt_val_t_news_count = $_POST[ $data_field_name_t_news_count ];

        // データベースに値を設定する
        update_option( $opt_color, $opt_val_color );
        update_option( $opt_color2, $opt_val_color2 );
        update_option( $opt_midasi_height, $opt_val_midasi_height );
        update_option( $opt_font_color_top, $opt_val_font_color_top );
        update_option( $opt_h_twitter, $opt_val_h_twitter );
        update_option( $opt_h_hatena, $opt_val_h_hatena );
        update_option( $opt_h_contact, $opt_val_h_contact );
        update_option( $opt_h_contact_address, $opt_val_h_contact_address );
        update_option( $opt_h_rss, $opt_val_h_rss );
        update_option( $opt_s_twitter, $opt_val_s_twitter );
        update_option( $opt_s_hatena, $opt_val_s_hatena );
        update_option( $opt_s_google, $opt_val_s_google );
        update_option( $opt_s_facebook, $opt_val_s_facebook );
        update_option( $opt_s_mixi, $opt_val_s_mixi );
        update_option( $opt_date, $opt_val_date );
        update_option( $opt_twitter_acount, $opt_val_twitter_acount );
        update_option( $opt_google_acount, $opt_val_google_acount );
        update_option( $opt_facebook_acount, $opt_val_facebook_acount );
        update_option( $opt_mixi_acount, $opt_val_mixi_acount );
        update_option( $opt_page_top, $opt_val_page_top );
        update_option( $opt_t_title, $opt_val_t_title );
        update_option( $opt_t_cate, $opt_val_t_cate );
        update_option( $opt_t_news_count, $opt_val_t_news_count );

        // 画面に更新されたことを伝えるメッセージを表示

?>
<div class="updated"><p><strong><?php _e('設定を保存しました。', 'mt_trans_domain' ); ?></strong></p></div>
<?php

}

// 設定変更画面を表示する

echo '<div class="wrap">';

// ヘッダー

echo "<h2>" . __( 'TCD-Option', 'mt_trans_domain' ) . "</h2>";

// 設定用フォーム

?>
<link type="text/css" href="<?php echo get_bloginfo('template_directory') ?>/ui-lightness/jquery-ui-1.8.16.custom.css" rel="stylesheet">
<script type="text/javascript" src="<?php echo get_bloginfo('template_directory') ?>/js/jquery-1.6.2.min.js"></script>
<script type="text/javascript" src="<?php echo get_bloginfo('template_directory') ?>/js/jquery-ui-1.8.16.custom.min.js"></script>
<script type="text/javascript" src="<?php echo get_bloginfo('template_directory') ?>/js/tabs.js"></script>
<style type="text/css" media="screen">
	* { margin: 0; padding: 0; }
	.submit { clear:both; margin-top:20px;}
	label {
		display: inline-table;
		width: 210px;
		text-align: right;
		padding-right: 10px;
	}
	.right {
		text-align: right;
		width: 120px;
		padding-right: 10px;
	}
</style>

		<form name="form1" method="post" action="<?php echo str_replace( '%7E', '~', $_SERVER['REQUEST_URI']); ?>">

<div id="Wrapper">
<div id="Contents">
<div id="tabs">
	<ul>
		<li><a href="#tab1">基本設定</a></li>
		<li><a href="#tab2">ヘッダ設定</a></li>
		<li><a href="#tab3">トップページ設定</a></li>
		<li><a href="#tab4">個別記事設定</a></li>
		<li><a href="#tab5">上級者向け設定</a></li>
	</ul>
	<div id="tab1">

		<input type="hidden" name="<?php echo $hidden_field_name_color; ?>" value="Y">
		<p><label for="<?php echo $data_field_name_color; ?>"><?php _e("基本となる色１を設定:", 'mt_trans_domain' ); ?></label>
		<input type="text" name="<?php echo $data_field_name_color; ?>" value="<?php echo $opt_val_color; ?>" size="20">
		</p>

		<input type="hidden" name="<?php echo $hidden_field_name_color2; ?>" value="Y">
		<p><label for="<?php echo $data_field_name_color2; ?>"><?php _e("基本となる色２を設定:", 'mt_trans_domain' ); ?></label>
		<input type="text" name="<?php echo $data_field_name_color2; ?>" value="<?php echo $opt_val_color2; ?>" size="20">
		</p>

		<input type="hidden" name="<?php echo $hidden_field_name_twitter_acount; ?>" value="Y">
		<p><label for="<?php echo $data_field_name_twitter_acount; ?>"><?php _e("Twitterアカウントを設定:", 'mt_trans_domain' ); ?></label>
		<input type="text" name="<?php echo $data_field_name_twitter_acount; ?>" value="<?php echo $opt_val_twitter_acount; ?>" size="20">
		</p>

<!--
		<input type="hidden" name="<?php echo $hidden_field_name_google_acount; ?>" value="Y">
		<p><label for="<?php echo $data_field_name_google_acount; ?>"><?php _e("GooglePlusIDを設定:", 'mt_trans_domain' ); ?></label>
		<input type="text" name="<?php echo $data_field_name_google_acount; ?>" value="<?php echo $opt_val_google_acount; ?>" size="20">
		</p>

		<input type="hidden" name="<?php echo $hidden_field_name_facebook_acount; ?>" value="Y">
		<p><label for="<?php echo $data_field_name_facebook_acount; ?>"><?php _e("Facebookアカウントを設定:", 'mt_trans_domain' ); ?></label>
		<input type="text" name="<?php echo $data_field_name_facebook_acount; ?>" value="<?php echo $opt_val_facebook_acount; ?>" size="20">
		</p>
 -->

		<input type="hidden" name="<?php echo $hidden_field_name_mixi_acount; ?>" value="Y">
		<p><label for="<?php echo $data_field_name_mixi_acount; ?>"><?php _e("mixiチェックキーを設定:", 'mt_trans_domain' ); ?></label>
		<input type="text" name="<?php echo $data_field_name_mixi_acount; ?>" value="<?php echo $opt_val_mixi_acount; ?>" size="20">
		</p>

    </div>

	<div id="tab2">
		<p><input type="hidden" name="<?php echo $hidden_field_name_h_twitter; ?>" value="Y">
		<label for="<?php echo $data_field_name_h_twitter; ?>">Twitterアイコンを表示する</label><input type="radio" name="<?php echo $data_field_name_h_twitter; ?>" value="0" <?php if( $opt_val_h_twitter == 0 ) echo 'checked '; ?>/>
		<label for="<?php echo $data_field_name_h_twitter; ?>" class="right">表示しない</label><input type="radio" name="<?php echo $data_field_name_h_twitter; ?>" value="1" <?php if( $opt_val_h_twitter == 1 ) echo 'checked '; ?>/></p>

		<p><input type="hidden" name="<?php echo $hidden_field_name_h_hatena; ?>" value="Y">
		<label for="<?php echo $data_field_name_h_hatena; ?>">はてなブックマークを表示する</label><input type="radio" name="<?php echo $data_field_name_h_hatena; ?>" value="0" <?php if( $opt_val_h_hatena == 0 ) echo 'checked '; ?>/>
		<label for="<?php echo $data_field_name_h_hatena; ?>" class="right">表示しない</label><input type="radio" name="<?php echo $data_field_name_h_hatena; ?>" value="1" <?php if( $opt_val_h_hatena == 1 ) echo 'checked '; ?>/></p>

		<p><input type="hidden" name="<?php echo $hidden_field_name_h_contact; ?>" value="Y">
		<label for="<?php echo $data_field_name_h_contact; ?>">お問い合わせを表示する</label><input type="radio" name="<?php echo $data_field_name_h_contact; ?>" value="0" <?php if( $opt_val_h_contact == 0 ) echo 'checked '; ?>/>
		<label for="<?php echo $data_field_name_h_contact; ?>" class="right">表示しない</label><input type="radio" name="<?php echo $data_field_name_h_contact; ?>" value="1" <?php if( $opt_val_h_contact == 1 ) echo 'checked '; ?>/></p>

		<input type="hidden" name="<?php echo $hidden_field_name_h_contact_address; ?>" value="Y">
		<p><label for="<?php echo $data_field_name_h_contact_address; ?>"><?php _e("お問い合わせアドレスを設定:", 'mt_trans_domain' ); ?></label>
		<input type="text" name="<?php echo $data_field_name_h_contact_address; ?>" value="<?php echo $opt_val_h_contact_address; ?>" size="20">
		</p>

		<p><input type="hidden" name="<?php echo $hidden_field_name_h_rss; ?>" value="Y">
		<label for="<?php echo $data_field_name_h_rss; ?>">RSSを表示する</label><input type="radio" name="<?php echo $data_field_name_h_rss; ?>" value="0" <?php if( $opt_val_h_rss == 0 ) echo 'checked '; ?>/>
		<label for="<?php echo $data_field_name_h_rss; ?>" class="right">表示しない</label><input type="radio" name="<?php echo $data_field_name_h_rss; ?>" value="1" <?php if( $opt_val_h_rss == 1 ) echo 'checked '; ?>/></p>
    </div>

	<div id="tab3">
		<input type="hidden" name="<?php echo $hidden_field_name_t_title; ?>" value="Y">
		<p><label for="<?php echo $data_field_name_t_title; ?>"><?php _e("最新記事一覧のタイトル:", 'mt_trans_domain' ); ?></label>
		<input type="text" name="<?php echo $data_field_name_t_title; ?>" value="<?php echo $opt_val_t_title; ?>" size="20">
		</p>

                <input type="hidden" name="<?php echo $hidden_field_name_t_news_count; ?>" value="Y">
		<p><label for="<?php echo $data_field_name_t_news_count; ?>"><?php _e("最新記事表示数:", 'mt_trans_domain' ); ?></label>
		<input type="text" name="<?php echo $data_field_name_t_news_count; ?>" value="<?php echo $opt_val_t_news_count; ?>" size="20">
		</p>

		<input type="hidden" name="<?php echo $hidden_field_name_font_color_top; ?>" value="Y">
		<p><label for="<?php echo $data_field_name_font_color_top; ?>"><?php _e("トップ記事の文字色を指定:", 'mt_trans_domain' ); ?></label>
		<input type="text" name="<?php echo $data_field_name_font_color_top; ?>" value="<?php echo $opt_val_font_color_top; ?>" size="20">
		</p>
    </div>

	<div id="tab4">
		<p><input type="hidden" name="<?php echo $hidden_field_name_s_twitter; ?>" value="Y">
		<label for="<?php echo $data_field_name_s_twitter; ?>">Twitterアイコンを表示する</label><input type="radio" name="<?php echo $data_field_name_s_twitter; ?>" value="0" <?php if( $opt_val_s_twitter == 0 ) echo 'checked '; ?>/>
		<label for="<?php echo $data_field_name_s_twitter; ?>" class="right">表示しない</label><input type="radio" name="<?php echo $data_field_name_s_twitter; ?>" value="1" <?php if( $opt_val_s_twitter == 1 ) echo 'checked '; ?>/></p>

		<p><input type="hidden" name="<?php echo $hidden_field_name_s_google; ?>" value="Y">
		<label for="<?php echo $data_field_name_s_google; ?>">Google+アイコンを表示する</label><input type="radio" name="<?php echo $data_field_name_s_google; ?>" value="0" <?php if( $opt_val_s_google == 0 ) echo 'checked '; ?>/>
		<label for="<?php echo $data_field_name_s_google; ?>" class="right">表示しない</label><input type="radio" name="<?php echo $data_field_name_s_google; ?>" value="1" <?php if( $opt_val_s_google == 1 ) echo 'checked '; ?>/></p>

		<p><input type="hidden" name="<?php echo $hidden_field_name_s_facebook; ?>" value="Y">
		<label for="<?php echo $data_field_name_s_facebook; ?>">Facebookいいね！アイコンを表示する</label><input type="radio" name="<?php echo $data_field_name_s_facebook; ?>" value="0" <?php if( $opt_val_s_facebook == 0 ) echo 'checked '; ?>/>
		<label for="<?php echo $data_field_name_s_facebook; ?>" class="right">表示しない</label><input type="radio" name="<?php echo $data_field_name_s_facebook; ?>" value="1" <?php if( $opt_val_s_facebook == 1 ) echo 'checked '; ?>/></p>

		<p><input type="hidden" name="<?php echo $hidden_field_name_s_hatena; ?>" value="Y">
		<label for="<?php echo $data_field_name_s_hatena; ?>">はてなアイコンを表示する</label><input type="radio" name="<?php echo $data_field_name_s_hatena; ?>" value="0" <?php if( $opt_val_s_hatena == 0 ) echo 'checked '; ?>/>
		<label for="<?php echo $data_field_name_s_hatena; ?>" class="right">表示しない</label><input type="radio" name="<?php echo $data_field_name_s_hatena; ?>" value="1" <?php if( $opt_val_s_hatena == 1 ) echo 'checked '; ?>/></p>

		<p><input type="hidden" name="<?php echo $hidden_field_name_mixi; ?>" value="Y">
		<label for="<?php echo $data_field_name_s_mixi; ?>">mixiアイコンを表示する</label><input type="radio" name="<?php echo $data_field_name_s_mixi; ?>" value="0" <?php if( $opt_val_s_mixi == 0 ) echo 'checked '; ?>/>
		<label for="<?php echo $data_field_name_s_mixi; ?>" class="right">表示しない</label><input type="radio" name="<?php echo $data_field_name_s_mixi; ?>" value="1" <?php if( $opt_val_s_mixi == 1 ) echo 'checked '; ?>/></p>
    </div>

	<div id="tab5">
		<p><input type="hidden" name="<?php echo $hidden_field_name_date; ?>" value="Y">
		<label for="<?php echo $data_field_name_date; ?>">記事の日付を表示する</label><input type="radio" name="<?php echo $data_field_name_date; ?>" value="0" <?php if( $opt_val_date == 0 ) echo 'checked '; ?>/>
		<label for="<?php echo $data_field_name_date; ?>" class="right">表示しない</label><input type="radio" name="<?php echo $data_field_name_date; ?>" value="1" <?php if( $opt_val_date == 1 ) echo 'checked '; ?>/></p>

		<p><input type="hidden" name="<?php echo $hidden_field_name_page_top; ?>" value="Y">
		<label for="<?php echo $data_field_name_page_top; ?>">Page Topアイコンを表示する</label><input type="radio" name="<?php echo $data_field_name_page_top; ?>" value="0" <?php if( $opt_val_page_top == 0 ) echo 'checked '; ?>/>
		<label for="<?php echo $data_field_name_page_top; ?>" class="right">表示しない</label><input type="radio" name="<?php echo $data_field_name_page_top; ?>" value="1" <?php if( $opt_val_page_top == 1 ) echo 'checked '; ?>/></p>

		<input type="hidden" name="<?php echo $hidden_field_name_midasi_height; ?>" value="Y">
		<p><label for="<?php echo $data_field_name_midasi_height; ?>"><?php _e("見出しの行高を設定:", 'mt_trans_domain' ); ?></label>
		<input type="text" name="<?php echo $data_field_name_midasi_height; ?>" value="<?php echo $opt_val_midasi_height; ?>" size="20">
		</p>
    </div>
</div>
</div>
</div>

<p class="submit">
<input type="submit" name="Submit" value="<?php _e('設定を保存', 'mt_trans_domain' ) ?>" />
</p>

</form>
</div>

<?php

}

//サイドバーの設定
if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar(11) )

register_sidebars(1,
    array(
    'name'=>'コンテンツ(トップページ用)',
    'before_widget' => '<div class="pickup3">',
    'after_widget' => '</div>',
    'before_title' => '<div class="midasi">',
    'after_title' => '</div>',
    ));
register_sidebars(1,
    array(
    'name'=>'コンテンツ(個別記事用)',
    'before_widget' => '<div class="pickup3">',
    'after_widget' => '</div>',
    'before_title' => '<div class="midasi">',
    'after_title' => '</div>',
    ));
register_sidebars(1,
    array(
    'name'=>'コンテンツ(カテゴリページ用)',
    'before_widget' => '<div class="pickup3">',
    'after_widget' => '</div>',
    'before_title' => '<div class="midasi">',
    'after_title' => '</div>',
    ));
register_sidebars(1,
    array(
    'name'=>'コンテンツ(固定ページ用)',
    'before_widget' => '<div class="pickup3">',
    'after_widget' => '</div>',
    'before_title' => '<div class="midasi">',
    'after_title' => '</div>',
    ));
register_sidebars(1,
    array(
    'name'=>'サイドバー(トップページ用)',
    'before_widget' => '',
    'after_widget' => '',
    'before_title' => '<div class="heading"><h2>',
    'after_title' => '</h2></div>',
    ));
register_sidebars(1,
    array(
    'name'=>'サイドバー(個別記事用)',
    'before_widget' => '',
    'after_widget' => '',
    'before_title' => '<div class="heading"><h2>',
    'after_title' => '</h2></div>',
    ));
register_sidebars(1,
    array(
    'name'=>'サイドバー(カテゴリページ用)',
    'before_widget' => '',
    'after_widget' => '',
    'before_title' => '<div class="heading"><h2>',
    'after_title' => '</h2></div>',
	));
register_sidebars(1,
    array(
    'name'=>'サイドバー(固定ページ用)',
    'before_widget' => '',
    'after_widget' => '',
    'before_title' => '<div class="heading"><h2>',
    'after_title' => '</h2></div>',
	));
register_sidebars(1,
    array(
    'name'=>'フッター(左から1番目)',
    'before_widget' => '',
    'after_widget' => '',
    'before_title' => '<h2>',
    'after_title' => '</h2>',
    ));
register_sidebars(1,
    array(
    'name'=>'フッター(左から2番目)',
    'before_widget' => '',
    'after_widget' => '',
    'before_title' => '<h2>',
    'after_title' => '</h2>',
	));
register_sidebars(1,
    array(
    'name'=>'フッター(左から3番目)',
    'before_widget' => '',
    'after_widget' => '',
    'before_title' => '<h2>',
    'after_title' => '</h2>',
    ));
register_sidebars(1,
    array(
    'name'=>'フッター(左から4番目)',
    'before_widget' => '',
    'after_widget' => '',
    'before_title' => '<h2>',
    'after_title' => '</h2>',
    ));


//続きを読むの設定
function remove_more_jump_link($link) {
$offset = strpos($link, '#more-');
if ($offset) {
$end = strpos($link, '"',$offset);
}
if ($end) {
$link = '<p class="mt20 align2">' . substr_replace($link, '', $offset, $end-$offset) . '</p>';
}
return $link;
}
add_filter('the_content_more_link', 'remove_more_jump_link');


//コメント一覧の設定
function designplus($comment, $args, $depth) {
	$GLOBALS['comment'] = $comment; ?>

	<li class="compost">
	<?php echo get_avatar($comment,$size='48',$default='<path_to_url>' ); ?>
	<?php comment_text(); ?><br class="clear" />
	<p class="cominfo">
	<?php comment_date(); ?> <?php comment_time(); ?> | <?php comment_author_link(); ?>
	</p>
	<?php
}


//ページナビゲーションの設定
function page_navigation() {
    global $wp_rewrite;
    global $wp_query;
    global $paged;
    $paginate_base = get_pagenum_link(1);
    if(($wp_query->max_num_pages) > 1):
            if (strpos($paginate_base, '?') || ! $wp_rewrite->using_permalinks()) {
                    $paginate_format = '';
                    $paginate_base = add_query_arg('paged', '%#%');
            } else {
                    $paginate_format = (substr($paginate_base, -1 ,1) == '/' ? '' : '/') .
                    user_trailingslashit('page/%#%/', 'paged');;
                    $paginate_base .= '%_%';
            }
            $result = paginate_links( array(
                    'base' => $paginate_base,
                    'format' => $paginate_format,
                    'total' => $wp_query->max_num_pages,
                    'mid_size' => 3,
                    'current' => ($paged ? $paged : 1),
            ));
            echo '<p class="local-navigation">'."\n".$result."</p>\n";
    endif;
}


//ページナビゲーションの設定
function page_navigation_top() {
    global $wp_rewrite;
    global $wp_query;
    global $paged;
    $paginate_base = get_pagenum_link(1);
    if(($wp_query->max_num_pages) > 1):
            if (strpos($paginate_base, '?') || ! $wp_rewrite->using_permalinks()) {
                    $paginate_format = '';
                    $paginate_base = add_query_arg('paged', '%#%');
            } else {
                    $paginate_format = (substr($paginate_base, -1 ,1) == '/' ? '' : '/') .
                    user_trailingslashit('page/%#%/', 'paged');;
                    $paginate_base .= '%_%';
            }
            $result = paginate_links( array(
                    'base' => $paginate_base,
                    'format' => $paginate_format,
                    'total' => $wp_query->max_num_pages,
                    'mid_size' => 3,
                    'current' => ($paged ? $paged : 1),
            ));
            echo '<p class="local-navigation">'."\n".$result."</p>\n";
    endif;
}

//カスタムメニューの設定
register_nav_menu( 'navi_menu', 'グローバルメニュー' );


//カスタムヘッダーの設定
add_custom_image_header('','admin_header_style');

function admin_header_style() {
	?>
	<style type="text/css">
	#headimg	{width: 950px!important}
	</style>
	<?php
}

define('NO_HEADER_TEXT',true);

define('HEADER_IMAGE','%s/images/header.png');

define('HEADER_IMAGE_WIDTH',200);

define('HEADER_IMAGE_HEIGHT',90);


//カスタム背景の設定
add_custom_background();


//アイキャッチ画像の設定
add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size( 360, 360, true );

function no_thumbnail($img_size = null, $stat = null) {
	$designplus =  '/images/thumbnail-icon.jpg';
	if($img_size == null) {
	echo '<img src="' . get_bloginfo('template_directory') . $designplus . '" '. $stat . ' />';
	} else {
	echo '<img src="' . get_bloginfo('template_directory') . $designplus . '" width="'.$img_size.'" height="'. $img_size .'" '. $stat . ' />';
	}
}

function social($pagelink) {

	echo '<div class="post-single-bookmarks clearfix">';

	switch( get_option( 'opt_s_google' ) ) {
	case 0: echo '
		<script type="text/javascript" src="https://apis.google.com/js/plusone.js">
		  {lang: \'ja\'}
		</script>
		<div class="post-single-google">
		<g:plusone size="medium"></g:plusone>
		</div>
		';
		break;
	case 1: break;
		}

	switch( get_option( 'opt_s_hatena' ) ) {
	case 0: echo '
		<script type="text/javascript" src="http://b.st-hatena.com/js/bookmark_button.js" charset="utf-8" async="async"></script>
		<div class="post-single-hatena">
		<a href="' . $pagelink . '" class="hatena-bookmark-button" data-hatena-bookmark-title="" data-hatena-bookmark-layout="standard" title="このエントリーをはてなブックマークに追加"><img src="http://b.st-hatena.com/images/entry-button/button-only.gif" alt="このエントリーをはてなブックマークに追加" width="20" height="20" style="border: none;" /></a>
		</div>
		';
		break;
	case 1: break;
		}

	switch( get_option( 'opt_s_twitter' ) ) {
	case 0: echo '
		<script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>
		<div class="post-single-twitter">
		<a href="http://twitter.com/share" class="twitter-share-button" data-url="';
		echo '" data-text="';
		echo '" data-count="horizontal" data-via="' . get_option( 'opt_twitter_acount' );
		echo '" data-lang="ja">ツイート</a>
		</div>
		';
		break;
	case 1: break;
		}

	switch( get_option( 'opt_s_mixi' ) ) {
	case 0: echo '
		<div class="post-single-mixi">
		<a href="http://mixi.jp/share.pl" class="mixi-check-button" data-url="';
		echo $pagelink . '" data-button="button-1" data-key="' . get_option( 'opt_mixi_acount' );
		echo '">Check</a>
		</div>
		<script type="text/javascript" src="http://static.mixi.jp/js/share.js"></script>
		';
		break;
	case 1: break;
		}

	switch( get_option( 'opt_s_facebook' ) ) {
	case 0: echo '
		<script type="text/javascript" src="http://connect.facebook.net/ja_JP/all.js#xfbml=1" charset="utf-8"></script>
		<div class="post-single-facebook">
		<fb:like href="' . $pagelink . '" layout="button_count" show_faces="false" width=""></fb:like>
		</div>
		';
		break;
	case 1: break;
		}

	echo '</div>';

}

if(!function_exists("convenience_comment_form")):
/**
 * ちょっとだけ使いやすいコメントフォームを提供する関数
 * 引数はもとのcomment_form関数とほぼ同じ。
 * --
 * 追加した引数
 * required
 *  必須項目のマークを指定する。　デフォルトで、「<span class="required">*</span>」となる。
 * required_notes
 *  「*マークは必須項目です」のような表示をするメッセージノート。
 *   初期値は「%1$sは必須項目です。」となる。
 *   %1$sには、上記 required の内容に置き換えられる。
 */
function convenience_comment_form($args = array(), $post_id = null) {
    wp_parse_args($args, array(
        "required" => '<span class="required">*</span>',
        "require_note" => '%1$sは必須項目です。'
    ));

    // コメントユーザーのデフォルト値を取得
    $commenter = wp_get_current_commenter();
    $req = get_option( 'require_name_email' );
    $aria_req = ( $req ? " aria-required='true'" : '' );

    $required_notes = null;
    if($req) {
        $required_notes = sprintf(
            $args["required_notes"], $args["required"]
        );
    }

    foreach($args["fields"] as $field_name => $field) {
        $args["fields"][$field_name] = sprintf(
            $field,
            ($req ? $args["required"] : ''), // 必須項目の設定
            esc_attr($commenter["comment_author". str_replace("author", "", $field_name)]), // 初期値
            $aria_req
        );
    }

    // comment_notes_before の設定
    if($args["comment_notes_before"]) {
        $args["comment_notes_before"] = sprintf(
            $args["comment_notes_before"], $required_notes
        );
    }

    comment_form($args, $post_id);
}

endif;

//独自ウィジェット関連
class widget_tcd_side_banner extends WP_Widget {
	/** constructor */
	function widget_tcd_side_banner() {
	    $widget_ops = array(
	        'description' => 'サイドバーやフッターへのバナーを設定します。
	        例：サイド用   300x250px　フッター用 250x250px　180x150px'
	    );
		parent::WP_Widget(false, $name = 'TCD-バナーウィジェット', $widget_ops);
	}

	function widget($args, $instance) {
		extract( $args );
		?>

		<a href="<?php if($instance['link_url'] == NULL){ echo bloginfo('url');} else { echo $instance['link_url']; }; ?>" title="タイトル"><img src="<?php if($instance['image_url'] == NULL){ echo bloginfo('template_url') . '/ads/300250mag.jpg' ;} else { echo $instance['image_url']; }; ?>" alt="*" class="banner" /></a>

		<?php
	}

	/** @see WP_Widget::update */
	function update($new_instance, $old_instance) {
		return $new_instance;
	}

	/** @see WP_Widget::form */
	function form($instance) {
		$image_url = $instance['image_url'] ? $instance['image_url'] : get_bloginfo( 'template_url' ) .'/ads/300250mag.jpg';
		$link_url = $instance['link_url'] ? $instance['link_url'] : site_url();
		?>

		<p><label for="<?php echo $this->get_field_id('image_url'); ?>">
			<?php _e('バナー画像アドレス:<br/ ><small>サイドバー用の画像アドレスを入力して下さい。</small>'); ?>
			<input class="widefat" id="<?php echo $this->get_field_id('image_url'); ?>" name="<?php echo $this->get_field_name('image_url'); ?>" type="text" value="<?php echo $image_url; ?>" />
		</label></p>

		<p><label for="<?php echo $this->get_field_id('link_url'); ?>">
			<?php _e('リンク先アドレス:<br/ ><small>バナーのリンク先アドレスを入力して下さい。</small>'); ?>
			<input class="widefat" id="<?php echo $this->get_field_id('link_url'); ?>" name="<?php echo $this->get_field_name('link_url'); ?>" type="text" value="<?php echo $link_url; ?>" />
		</label></p>

		<?php
	}
}
add_action('widgets_init', create_function('', 'return register_widget("widget_tcd_side_banner");'));

class widget_tcd_category_news extends WP_Widget {
	/** constructor */
	function widget_tcd_category_news() {
	    $widget_ops = array(
	        'description' => '特定のカテゴリーの最新記事一覧を表示'
	    );
		parent::WP_Widget(false, $name = 'TCD-最新記事一覧', $widget_ops);
	}
	function widget($args, $instance) {
		extract( $args );
		?>

			<?php global $post; ?>
                        <?php echo $before_widget ?>
			<?php echo $before_title ?><?php if($instance['news_title']){echo $instance['news_title'];}elseif($instance['news_cate'] == NULL){ echo get_catname('1');} else { echo get_catname($instance['news_cate']); }; ?><?php echo $after_title ?>
				<div class="entryicon">
				<?php if($instance["news_cate"] != NULL){query_posts('cat='.$instance["news_cate"].'&showposts='.$instance["news_count"]);} else {query_posts('cat=1&showposts=10');} ?>
				<div class="f-clear">
				<?php if(have_posts()) : while (have_posts()) : the_post(); ?>
					<dl>
					<dt><a href="<?php the_permalink() ?>">
					<?php
					if ( has_post_thumbnail()) {
						the_post_thumbnail(array(45,45));
					} else {
						no_thumbnail(45);
					}
					?></a></dt>

					<dd><span class="metadate alignleft"><?php the_time("Y年n月j日"); ?></span><h3><a href="<?php the_permalink() ?>" title=""><?php echo mb_substr(the_title_attribute('echo=0'), 0, 38); ?></a></h3>
					</dd></dl>
					<?php endwhile; else: ?>
					<p>該当する記事はありません｡</p>
					<?php endif; ?>
 				</div>
				</div>
                <?php echo $after_widget ?>
		<?php
	}

	/** @see WP_Widget::update */
	function update($new_instance, $old_instance) {
		return $new_instance;
	}

	/** @see WP_Widget::form */
	function form($instance) {
		$news_title = $instance['news_title'];
		$news_cate = $instance['news_cate'] ? $instance['news_cate'] : 1;
		$news_count = $instance['news_count'] ? $instance['news_count'] : 10;
		?>

		<p><label for="<?php echo $this->get_field_id('news_title'); ?>">
			<?php _e('タイトルの設定:<br/ ><small>タイトルを変更する場合に入力して下さい（未記入の場合はカテゴリ名）</small>'); ?>
			<input class="widefat" id="<?php echo $this->get_field_id('news_title'); ?>" name="<?php echo $this->get_field_name('news_title'); ?>" type="text" value="<?php echo $news_title; ?>" />
		</label></p>

                <p><label for="<?php echo $this->get_field_id('news_cate'); ?>">
			<?php _e('記事カテゴリーナンバー:<br/ ><small>記事を取得するカテゴリナンバーを指定して下さい。</small>'); ?>
			<input class="widefat" id="<?php echo $this->get_field_id('news_cate'); ?>" name="<?php echo $this->get_field_name('news_cate'); ?>" type="text" value="<?php echo $news_cate; ?>" />
		</label></p>

		<p><label for="<?php echo $this->get_field_id('news_count'); ?>">
			<?php _e('記事取得数:<br/ ><small>記事を取得する数を指定して下さい。</small>'); ?>
			<input class="widefat" id="<?php echo $this->get_field_id('news_count'); ?>" name="<?php echo $this->get_field_name('news_count'); ?>" type="text" value="<?php echo $news_count; ?>" />
		</label></p>

		<?php
	}
}
add_action('widgets_init', create_function('', 'return register_widget("widget_tcd_category_news");'));



class widget_tcd_mailmag extends WP_Widget {
	/** constructor */
	function widget_tcd_mailmag() {
	    $widget_ops = array(
	        'description' => 'ピックアップ記事（特定のカテゴリーの最新記事）を表示（サイドバー専用）'
	    );
		parent::WP_Widget(false, $name = 'TCD-ピックアップ記事（1記事）', $widget_ops);
	}

	function widget($args, $instance) {
		extract( $args );
		?>

			<?php global $post; ?>
                        <?php echo $before_widget ?>

                        <?php if($instance["news_one"] != NULL){query_posts('cat='.$instance["news_one"].'&showposts=1');} else {query_posts('cat=1&showposts=1');} ?>
			<?php echo $before_title ?><?php if($instance["news_title"] != NULL){ echo $instance["news_title"];} elseif($instance['news_one'] != NULL) { echo get_catname($instance['news_one']); } else { echo get_catname('1');}; ?><?php echo $after_title ?>
                        <?php if(have_posts()) : while (have_posts()) : the_post(); ?>
			<div class="pickup2">
			<a href="<?php the_permalink() ?>">
			<?php
			if ( has_post_thumbnail()) {
				the_post_thumbnail(array(249,166));
			} else {
				no_thumbnail(56);
			}
			?></a>
			<h3><a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><?php the_title_attribute(); ?></a></h3>
			<p class="alignright metadate"><?php the_time("Y年n月j日"); ?></p>
			<p class="alignleft"><a href="<?php if($instance["news_one"] != NULL){ echo get_category_link($instance["news_one"]);}else{echo get_category_link(1);} ?>" title="<?php echo get_catname($instance["news_one"]); ?>">&raquo; バックナンバー</a></p>
			</div>
			<?php endwhile; endif; ?>
                        <?php echo $after_widget ?>
		<?php
	}

	/** @see WP_Widget::update */
	function update($new_instance, $old_instance) {
		return $new_instance;
	}

	/** @see WP_Widget::form */
	function form($instance) {
		$news_one = $instance['news_one'] ? $instance['news_one'] : 1;
		$news_title = $instance['news_title'];
		?>

		<p><label for="<?php echo $this->get_field_id('news_title'); ?>">
			<?php _e('タイトルの設定:<br/ ><small>タイトルを変更する場合に入力して下さい（未記入の場合はカテゴリ名）</small>'); ?>
			<input class="widefat" id="<?php echo $this->get_field_id('news_title'); ?>" name="<?php echo $this->get_field_name('news_title'); ?>" type="text" value="<?php echo $news_title; ?>" />
		</label></p>

		<p><label for="<?php echo $this->get_field_id('news_one'); ?>">
			<?php _e('記事カテゴリーナンバー:<br/ ><small>記事を取得するカテゴリナンバーを指定して下さい。</small>'); ?>
			<input class="widefat" id="<?php echo $this->get_field_id('news_one'); ?>" name="<?php echo $this->get_field_name('news_one'); ?>" type="text" value="<?php echo $news_one; ?>" />
		</label></p>

		<?php
	}
}
add_action('widgets_init', create_function('', 'return register_widget("widget_tcd_mailmag");'));

class widget_tcd_twitter extends WP_Widget {
	/** constructor */
	function widget_tcd_twitter() {
	    $widget_ops = array(
	        'description' => 'Twitterタイムライン表示に使います。'
	    );
		parent::WP_Widget(false, $name = 'TCD-Twitterウィジェット', $widget_ops);
	}

	/** @see WP_Widget::widget */
	function widget($args, $instance) {
		extract( $args );
		?>
                <?php echo $before_widget ?>
		<!-- Twitter Updates // -->
		<script src="http://widgets.twimg.com/j/2/widget.js"></script>
		<script>
		new TWTR.Widget({
		  version: 2,
		  type: 'profile',
		  rpp: 10,
		  interval: 6000,
		  width: 'auto',
		  height: 300,
		  theme: {
		    shell: {
		      background: '<?php echo get_option( 'opt_color' ); ?>',
		      color: '#ffffff'
		    },
		    tweets: {
		      background: '#ffffff',
		      color: '#000000',
		      links: '<?php echo get_option( 'opt_color' ); ?>'
		    }
		  },
		  features: {
			scrollbar: false,
			loop: true,
			live: true,
			hashtags: true,
			timestamp: true,
			avatars: true,
			behavior: 'default'
		  }
		}).render().setUser('<?php if($instance['twitter_username'] == NULL){ echo 'milkcoffee1';} else { echo $instance['twitter_username']; }; ?>').start();
		</script>
		<!-- // Twitter Updates -->
                <?php echo $after_widget ?>
		<?php
	}

	/** @see WP_Widget::update */
	function update($new_instance, $old_instance) {
		return $new_instance;
	}

	/** @see WP_Widget::form */
	function form($instance) {
		$twitter_username = $instance['twitter_username'] ? $instance['twitter_username'] : "milkcoffee1";
		?>

		<p><label for="<?php echo $this->get_field_id('twitter_username'); ?>">
			<?php _e('ツイッター名:<br/ ><small>タイムラインを表示させるツイッター名を入力して下さい。</small>'); ?>
			<input class="widefat" id="<?php echo $this->get_field_id('twitter_username'); ?>" name="<?php echo $this->get_field_name('twitter_username'); ?>" type="text" value="<?php echo $twitter_username; ?>" />
		</label></p>

		<?php
	}
}
add_action('widgets_init', create_function('', 'return register_widget("widget_tcd_twitter");'));

class widget_tcd_commercial extends WP_Widget {
	/** constructor */
	function widget_tcd_commercial() {
	    $widget_ops = array(
	        'description' => '広告欄編集用です。'
	    );
		parent::WP_Widget(false, $name = 'TCD-commercialウィジェット', $widget_ops);
	}

	/** @see WP_Widget::widget */
	function widget($args, $instance) {
		extract( $args );
		?>
                        <?php echo $before_widget ?>
			<?php if($before_title != '<h2 class="widgettitle">'){echo $before_title;} else { echo '<div class="midasi">';} ?><?php if($instance['title'] == NULL ){ echo 'Sponsored links';} else { echo $instance['title'];} ?><?php if($after_title != '</h2>'){echo $after_title;} else { echo '</div>';} ?>
			<div class="pickup4">
			<div class="pickup4-img">
			<a href="<?php echo $instance['commercial_url_1']; ?>"><img src="<?php if($instance['commercial_image_1'] == NULL ){ echo get_bloginfo('template_directory') . "/images/eye.jpg";} else { echo $instance['commercial_image_1'];} ?>" alt="*" /></a>
			</div>
			<div class="pickup4-inner">
			<p><a href="<?php echo $instance['commercial_url_1']; ?>"><?php if($instance['commercial_text_1'] == NULL ){ echo "ここに広告文を入れます";} else { echo $instance['commercial_text_1'];} ?></a></p>
			</div>
			</div>
			<div class="pickup4">
			<div class="pickup4-img">
			<a href="<?php echo $instance['commercial_url_2']; ?>"><img src="<?php if($instance['commercial_image_2'] == NULL ){ echo get_bloginfo('template_directory') . "/images/eye.jpg";} else { echo $instance['commercial_image_2'];} ?>" alt="*" /></a>
			</div>
			<div class="pickup4-inner">
			<p><a href="<?php echo $instance['commercial_url_2']; ?>"><?php if($instance['commercial_text_2'] == NULL ){ echo "ここに広告文を入れます";} else { echo $instance['commercial_text_2'];} ?></a></p>
			</div>
			</div>
			<div class="pickup4">
			<div class="pickup4-img">
			<a href="<?php echo $instance['commercial_url_3']; ?>"><img src="<?php if($instance['commercial_image_3'] == NULL ){ echo get_bloginfo('template_directory') . "/images/eye.jpg";} else { echo $instance['commercial_image_3'];} ?>" alt="*" /></a>
			</div>
			<div class="pickup4-inner">
			<p><a href="<?php echo $instance['commercial_url_3']; ?>"><?php if($instance['commercial_text_3'] == NULL ){ echo "ここに広告文を入れます";} else { echo $instance['commercial_text_3'];} ?></a></p>
			</div>
			</div>
                        <?php echo $after_widget ?>
		<?php
	}

	/** @see WP_Widget::update */
	function update($new_instance, $old_instance) {
		return $new_instance;
	}

	/** @see WP_Widget::form */
	function form($instance) {
		$title = $instance['title'] ? $instance['title'] : "Sponsored links";
		$commercial_image_1 = $instance['commercial_image_1'] ? $instance['commercial_image_1'] : get_bloginfo('template_directory') . "/images/eye.jpg";
		$commercial_url_1 = $instance['commercial_url_1'] ? $instance['commercial_url_1'] : "";
		$commercial_text_1 = $instance['commercial_text_1'] ? $instance['commercial_text_1'] : "ここに広告文を入れます";
		$commercial_image_2 = $instance['commercial_image_2'] ? $instance['commercial_image_2'] : get_bloginfo('template_directory') . "/images/eye.jpg";
		$commercial_url_2 = $instance['commercial_url_2'] ? $instance['commercial_url_2'] : "";
		$commercial_text_2 = $instance['commercial_text_2'] ? $instance['commercial_text_2'] : "バナーサイズは180x150px";
		$commercial_image_3 = $instance['commercial_image_3'] ? $instance['commercial_image_3'] : get_bloginfo('template_directory') . "/images/eye.jpg";
		$commercial_url_3 = $instance['commercial_url_3'] ? $instance['commercial_url_3'] : "";
		$commercial_text_3 = $instance['commercial_text_3'] ? $instance['commercial_text_3'] : "国際基準のバナーサイズ";
		?>

		<p><label for="<?php echo $this->get_field_id('title'); ?>">
			<?php _e('広告用タイトル:<br/ ><small>広告欄タイトルの文字列を入力して下さい。</small>'); ?>
			<input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo $title; ?>" />
		</label></p>

		<hr />

		<p><label for="<?php echo $this->get_field_id('commercial_image_1'); ?>">
			<?php _e('広告画像URL(1):<br/ ><small>広告(1)のバナーURLを入力して下さい。</small>'); ?>
			<input class="widefat" id="<?php echo $this->get_field_id('commercial_image_1'); ?>" name="<?php echo $this->get_field_name('commercial_image_1'); ?>" type="text" value="<?php echo $commercial_image_1; ?>" />
		</label></p>

		<p><label for="<?php echo $this->get_field_id('commercial_url_1'); ?>">
			<?php _e('広告URL(1):<br/ ><small>広告(1)のリンク先URLを入力して下さい。</small>'); ?>
			<input class="widefat" id="<?php echo $this->get_field_id('commercial_url_1'); ?>" name="<?php echo $this->get_field_name('commercial_url_1'); ?>" type="text" value="<?php echo $commercial_url_1; ?>" />
		</label></p>

		<p><label for="<?php echo $this->get_field_id('commercial_text_1'); ?>">
			<?php _e('広告説明文(1):<br/ ><small>広告(1)の説明文を入力して下さい。</small>'); ?>
			<input class="widefat" id="<?php echo $this->get_field_id('commercial_text_1'); ?>" name="<?php echo $this->get_field_name('commercial_text_1'); ?>" type="text" value="<?php echo $commercial_text_1; ?>" />
		</label></p>

		<hr />

		<p><label for="<?php echo $this->get_field_id('commercial_image_2'); ?>">
			<?php _e('広告画像URL(2):<br/ ><small>広告(2)のバナーURLを入力して下さい。</small>'); ?>
			<input class="widefat" id="<?php echo $this->get_field_id('commercial_image_2'); ?>" name="<?php echo $this->get_field_name('commercial_image_2'); ?>" type="text" value="<?php echo $commercial_image_2; ?>" />
		</label></p>

		<p><label for="<?php echo $this->get_field_id('commercial_url_2'); ?>">
			<?php _e('広告URL(2):<br/ ><small>広告(2)のリンク先URLを入力して下さい。</small>'); ?>
			<input class="widefat" id="<?php echo $this->get_field_id('commercial_url_2'); ?>" name="<?php echo $this->get_field_name('commercial_url_2'); ?>" type="text" value="<?php echo $commercial_url_2; ?>" />
		</label></p>

		<p><label for="<?php echo $this->get_field_id('commercial_text_2'); ?>">
			<?php _e('広告説明文(2):<br/ ><small>広告(2)の説明文を入力して下さい。</small>'); ?>
			<input class="widefat" id="<?php echo $this->get_field_id('commercial_text_2'); ?>" name="<?php echo $this->get_field_name('commercial_text_2'); ?>" type="text" value="<?php echo $commercial_text_2; ?>" />
		</label></p>

		<hr />

		<p><label for="<?php echo $this->get_field_id('commercial_image_3'); ?>">
			<?php _e('広告画像URL(3):<br/ ><small>広告(3)のバナーURLを入力して下さい。</small>'); ?>
			<input class="widefat" id="<?php echo $this->get_field_id('commercial_image_3'); ?>" name="<?php echo $this->get_field_name('commercial_image_3'); ?>" type="text" value="<?php echo $commercial_image_3; ?>" />
		</label></p>

		<p><label for="<?php echo $this->get_field_id('commercial_url_3'); ?>">
			<?php _e('広告URL(3):<br/ ><small>広告(3)のリンク先URLを入力して下さい。</small>'); ?>
			<input class="widefat" id="<?php echo $this->get_field_id('commercial_url_3'); ?>" name="<?php echo $this->get_field_name('commercial_url_3'); ?>" type="text" value="<?php echo $commercial_url_3; ?>" />
		</label></p>

		<p><label for="<?php echo $this->get_field_id('commercial_text_3'); ?>">
			<?php _e('広告説明文(3):<br/ ><small>広告(3)の説明文を入力して下さい。</small>'); ?>
			<input class="widefat" id="<?php echo $this->get_field_id('commercial_text_3'); ?>" name="<?php echo $this->get_field_name('commercial_text_3'); ?>" type="text" value="<?php echo $commercial_text_3; ?>" />
		</label></p>

		<?php
	}
}
add_action('widgets_init', create_function('', 'return register_widget("widget_tcd_commercial");'));

class widget_tcd_notice_report extends WP_Widget {
	/** constructor */
	function widget_tcd_notice_report() {
	    $widget_ops = array(
	        'description' => '特定記事の一覧表示に使用します。'
	    );
		parent::WP_Widget(false, $name = 'TCD-notice_reportウィジェット', $widget_ops);
	}

	/** @see WP_Widget::widget */
	function widget($args, $instance) {
		extract( $args );
		?>
		<?php global $post; ?>
		  <div class="pickup">
			<?php if($before_title != '<h2 class="widgettitle">'){echo $before_title;} else { echo '<div class="midasi">';} ?><?php if($instance['notice_report_title']){echo $instance['notice_report_title'];} elseif($instance['notice_report_cate']){echo get_catname($instance['notice_report_cate']);}else{echo get_catname(1);} ?><?php if($after_title != '</h2>'){echo $after_title;} else { echo '</div>';} ?>
			  <?php if($instance['notice_report_cate'] != NULL){
			        $postslist = get_posts('category=' . $instance['notice_report_cate'] . "&numberposts=" . $instance['notice_report_count']);}
			        else {$postslist = get_posts('category=1&numberposts=' . $instance['notice_report_count']);} ?>
		      <?php if($postslist):foreach($postslist as $post) : start_wp(); ?>

			<div class="pickup-item">
			  <a href="<?php the_permalink() ?>">
			  <?php
			  if ( has_post_thumbnail()) {
			  		the_post_thumbnail(array(130,130));
			  } else {
					no_thumbnail(130);
			  }
			  ?></a>
			  <div class="pickup-inner"><h2><a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><?php $title= mb_substr($post->post_title,0); echo $title; ?></a></h2>
				<p class="metadate"><?php the_time("Y年n月j日"); ?></p>
				<?php echo mb_substr(get_the_excerpt(), 0, 100); ?>...
				<p class="r-flo"><a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>">続きを読む</a></p>
			  </div>
			</div>
			<?php endforeach; endif; ?>
                        <p class="cat-list"><a href="<?php if($instance["notice_report_cate"] != NULL){ echo get_category_link($instance["notice_report_cate"]);}else{echo get_category_link(1);} ?>" title="<?php echo get_catname($instance["notice_report_cate"]); ?>">&raquo; <?php if($instance['notice_report_cate'] != NULL){echo get_catname($instance['notice_report_cate']);}else{echo get_catname(1);} ?></a></p>

		  </div>
		<?php
	}

	/** @see WP_Widget::update */
	function update($new_instance, $old_instance) {
		return $new_instance;
	}

	/** @see WP_Widget::form */
	function form($instance) {
		$notice_report_title = $instance['notice_report_title'];
		$notice_report_cate = $instance['notice_report_cate'] ? $instance['notice_report_cate'] : "1";
		$notice_report_count = $instance['notice_report_count'] ? $instance['notice_report_count'] : "10";
		?>

		<p><label for="<?php echo $this->get_field_id('notice_report_title'); ?>">
			<?php _e('タイトルの設定:<br/ ><small>タイトルを変更する場合に入力して下さい（未記入の場合はカテゴリ名）</small>'); ?>
			<input class="widefat" id="<?php echo $this->get_field_id('notice_report_title'); ?>" name="<?php echo $this->get_field_name('notice_report_title'); ?>" type="text" value="<?php echo $notice_report_title; ?>" />
		</label></p>

		<p><label for="<?php echo $this->get_field_id('notice_report_cate'); ?>">
			<?php _e('表示カテゴリ:<br/ ><small>表示カテゴリの番号を入力して下さい。</small>'); ?>
			<input class="widefat" id="<?php echo $this->get_field_id('notice_report_cate'); ?>" name="<?php echo $this->get_field_name('notice_report_cate'); ?>" type="text" value="<?php echo $notice_report_cate; ?>" />
		</label></p>

		<p><label for="<?php echo $this->get_field_id('notice_report_count'); ?>">
			<?php _e('表示記事数:<br/ ><small>表示する記事数を入力して下さい。</small>'); ?>
			<input class="widefat" id="<?php echo $this->get_field_id('notice_report_count'); ?>" name="<?php echo $this->get_field_name('notice_report_count'); ?>" type="text" value="<?php echo $notice_report_count; ?>" />
		</label></p>

		<?php
	}
}
add_action('widgets_init', create_function('', 'return register_widget("widget_tcd_notice_report");'));

// 既存のウィジェットの置換
class description_walker extends Walker_Nav_Menu {
	function start_el(&$output, $item, $depth, $args) {
		global $wp_query;
		$indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';

		$class_names = $value = '';

		$classes = empty( $item->classes ) ? array() : (array) $item->classes;

		$class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item ) );
		$class_names = ' class="'. esc_attr( $class_names ) . '"';

		$output .= $indent . '<li id="menu-item-'. $item->ID . '"' . $value . $class_names .'>';

		$attributes  = ! empty( $item->attr_title ) ? ' title="'  . esc_attr( $item->attr_title ) .'"' : '';
		$attributes .= ! empty( $item->target )     ? ' target="' . esc_attr( $item->target     ) .'"' : '';
		$attributes .= ! empty( $item->xfn )        ? ' rel="'    . esc_attr( $item->xfn        ) .'"' : '';
		$attributes .= ! empty( $item->url )        ? ' href="'   . esc_attr( $item->url        ) .'"' : '';

		$prepend = '<strong>';
		$append = '</strong>';
		$description  = ! empty( $item->description ) ? '<span>'.esc_attr( $item->description ).'</span>' : '';

		if($depth != 0) {
			$description = $append = $prepend = "";
		}

		$item_output = $args->before;
		$item_output .= '<a'. $attributes .'>';
		$item_output .= $args->link_before .$prepend.apply_filters( 'the_title', $item->title, $item->ID ).$append;
		$item_output .= $description.$args->link_after;
		$item_output .= '</a>';
		$item_output .= $args->after;

		$output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
	}
}

?>
