<?php get_header(); ?>

<div id="wrapper">
  <div id="container-top"></div>
  <div id="container">

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<div id="s-contents">
	<h2 class="entrytitle"><?php the_title(); ?></h2>
  <div class="entrytitle2">
  	<p class="metadate2"><?php if( get_option( 'opt_date' ) == 0 ){the_time("Y年n月j日"); echo ' | ';}; ?><?php the_category(', ') ?> | <a href="<?php comments_link(); ?>">コメント/トラックバック <?php comments_number('(0)', '(1)', '(%)'); ?></a></p>
	<?php social(get_permalink()); ?>
	</div>
	<?php
	if ( has_post_thumbnail()) {
		the_post_thumbnail( array(300,200));
	}
	?>

    <div class="s-contents-main">
    <?php the_content('<p class="serif">Read the rest of this entry &raquo;</p>'); ?>
    <?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
    </div>

<?php comments_template(); ?>

<div id="prev-post"><?php previous_post_link('&laquo; %link') ?></div>
<div id="next-post"><?php next_post_link('%link &raquo;') ?></div>

<?php endwhile; else: ?>
<p><?php echo "お探しの記事、ページは見つかりませんでした。"; ?></p>
<?php endif; ?>

<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar(2) ) : ?>
	<?php the_widget('widget_tcd_notice_report'); ?>
	<?php the_widget('widget_tcd_commercial'); ?>
<?php endif; ?>

</div>
<?php get_sidebar(2); ?><?php get_footer(); ?>