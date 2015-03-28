<!-- 個別記事用サイドバー(single.phpのみ) -->
<div id="sidebar">

	<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar(8) ) : ?>
	<?php the_widget('widget_tcd_side_banner'); ?>
	<?php the_widget('widget_tcd_mailmag'); ?>
	<?php the_widget('widget_tcd_category_news'); ?>
	<?php endif; ?>

</div>
