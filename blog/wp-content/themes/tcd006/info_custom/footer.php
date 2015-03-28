</div>
<!-- / コンテンツ -->

<!-- フッター -->

</div>

<div id="footer">
<div id="page-jump"><a href="#top"><img src="<?php bloginfo('template_directory');?>/images/page-top.png" alt="ページ上部に" class="linkimg" /></a></div>
  <div class="footer-inner">

	<!-- フッター(左から1番目) -->
	<div id="footer-bar1">
		<?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar(9) ) : else : ?>
		<a href="<?php echo bloginfo('url'); ?>" title="タイトル"><img src="<?php echo bloginfo('template_url') . '/ads/250250ad.jpg' ?>" alt="*" class="banner" /></a>
		<?php endif; ?>
	</div>

	<!-- フッター(左から2番目) -->
	<div class="footer-bar2">
		<?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar(10) ) : else : ?>
		<?php the_widget('WP_Widget_Recent_Posts'); ?>
		<?php endif; ?>
	</div>

	<!-- フッター(左から3番目) -->
	<div class="footer-bar2">
		<?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar(11) ) : else : ?>
		<?php the_widget('WP_Widget_Categories'); ?>
		<?php endif; ?>
	</div>

	<!-- フッター(左から4番目) -->
	<div class="footer-bar2">
		<?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar(12) ) : else : ?>
		<?php the_widget('WP_Widget_Tag_Cloud'); ?>
		<?php endif; ?>
	</div>

</div>
<div class="copyright alphafilter"><p class="align1">Copyright(c) 2008-<?php echo date('Y'); ?> <a href="<?php bloginfo('url'); ?>" title="<?php bloginfo('name'); ?>"><?php bloginfo('name'); ?></a> All Rights Reserved.</p></div>
<!-- / フッター -->

</div><?php wp_footer(); ?>
</body></html>