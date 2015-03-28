<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ja" lang="ja">
<head>
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<meta http-equiv="content-style-type" content="text/css" />
<meta http-equiv="content-script-type" content="text/javascript" />
<meta name="author" content="" />
<meta name="keyword" content="" />
<meta name="description" content="<?php echo trim(wp_title('', false)); if(wp_title('', false)) { echo ' - '; } bloginfo('description'); ?>" />
<title><?php echo trim(wp_title('', false)); if(wp_title('', false)) { echo ' - '; } bloginfo('name'); ?></title>
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link rel="alternate" type="application/atom+xml" title="<?php bloginfo('name'); ?> Atom Feed" href="<?php bloginfo('atom_url'); ?>" />
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery-1.6.2.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/reflection.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.page-scroller-308.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.pngFix.pack.js"></script>
<script type="text/javascript" defer="defer" src="<?php bloginfo('template_url'); ?>/js/alphafilter.js"></script>
<!--[if lte IE 6]>
<script src="http://www.dillerdesign.com/experiment/DD_belatedPNG/DD_belatedPNG_0.0.8a.js" type="text/javascript"></script>
</script>  
<script type="text/javascript">  DD_belatedPNG.fix('.png_bg');</script>  
<![endif]-->
<script type="text/javascript">
$(function(){
    $("ul.menu li").hover(function(){
        $(">ul:not(:animated)",this).slideDown("fast")
    },
    function(){
        $(">ul",this).slideUp("fast");
    })
})

</script>
<style type="text/css" media="screen">
<?php if(get_option( 'opt_midasi_height' ) != NULL ) { echo '.midasi,.archive-title, #s-contents #comments h3, #s-contents h3,#one-column h3 { line-height: ' . get_option( 'opt_midasi_height' ) . ';}'; } ?>
<?php if(get_option( 'opt_color' ) != NULL ) { echo '#nav, .midasi, .archive-title, #s-contents #comments h3, #s-contents h3,#one-column h3, #sidebar h2, #headwrapp, #footer-bar1 h2, .footer-bar2 h2,#s-contents h4,#one-column h4 {border-color: ' . get_option( 'opt_color' ) . ';}' . '#s-contents h5,#one-column h5 { color: ' . get_option( 'opt_color' ) . ';}';} ?>
<?php if(get_option( 'opt_color2' ) != NULL ) { echo '#entry1wrapper, #entry1, #entry1 .wp-post-image { background-color: ' . get_option( 'opt_color2' ) . ';}';} ?>
<?php if(get_option( 'opt_font_color_top' ) != NULL) { echo '#entry1, #entry1 h2 a, #entry1wrapper{ color: ' . get_option( 'opt_font_color_top' ) . ';}';} ?>
<?php if(get_option( 'opt_date' ) != 0) { echo '.metadate{display: none}';}; ?>
<?php if(get_option( 'opt_page_top' ) != 0) { echo '#page-jump{display: none}#footer{margin-top:0px;}';}; ?>
</style>
<?php wp_head(); ?>
</head><body <?php body_class(); ?>>

	<!-- ヘッダー画像 start -->
	<div id="headwrapp">
	<div id="head">
	  <div id="header">
	  	<h1><a href="<?php bloginfo('url'); ?>" title="<?php bloginfo('name'); ?>"><img src="<?php header_image(); ?>" width="<?php echo HEADER_IMAGE_WIDTH; ?>" height="<?php echo HEADER_IMAGE_HEIGHT; ?>" border="0" /></a></h1>
	  </div>
	  <p id="description"><?php bloginfo('description'); ?></p>
	  <?php get_search_form(); ?>
		<div id="submenu">
		  <?php if(get_option( 'opt_h_twitter' ) == 0) { ?><a href="http://twitter.com/<?php echo get_option( 'opt_twitter_acount' ); ?>" title="ツイッター"><img border="0" src="<?php bloginfo('template_url'); ?>/images/Twitter.png" width="64" height="64" class="png_bg" /></a><?php } ?>
		  <?php if(get_option( 'opt_h_hatena' ) == 0) { ?><a href="http://b.hatena.ne.jp/entry/<?php bloginfo('url'); ?>" title="はてなブックマーク"><img border="0" src="<?php bloginfo('template_url'); ?>/images/hatena.png" width="64" height="64" class="png_bg" /></a><?php } ?>
		  <?php if(get_option( 'opt_h_contact' ) == 0) { ?><a href="<?php echo get_option( 'opt_h_contact_address' ) ?>" title="お問い合わせ"><img border="0" src="<?php bloginfo('template_url'); ?>/images/Email.png" width="64" height="64" class="png_bg" /></a><?php } ?>
		  <?php if(get_option( 'opt_h_rss' ) == 0) { ?><a href="<?php bloginfo('rss2_url'); ?>" title="RSSフィード"><img border="0" src="<?php bloginfo('template_url'); ?>/images/RSS.png" width="64" height="64" class="png_bg" /></a><?php } ?>
		</div>
	</div>
	</div>
	<!-- ヘッダー画像 end -->

	<!-- トップナビゲーション start -->
	  <div id="nav">
		<?php wp_nav_menu(array('theme_location' => 'navi_menu','walker' => new description_walker)); ?>
	  </div>
	<!-- トップナビゲーション end -->
