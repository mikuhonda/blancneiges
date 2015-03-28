<?php get_header(); ?>

<div id="wrapper">
  <div id="container-top"></div>
  <div id="container">

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<div id="s-contents">
	<h2 class="entrytitle"><?php the_title(); ?></h2>
  <div class="entrytitle2">
	<?php social(get_permalink()); ?>
    </div>
	<?php
	if ( has_post_thumbnail()) {
		the_post_thumbnail( array(300,200));
	}
	?>

    <div class="s-contents-main">
	  <?php the_content(); ?>
    </div>
<?php endwhile; else: ?>

	  <p><?php echo "お探しの記事、ページは見つかりませんでした。"; ?></p>

<?php endif; ?>

<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar(4) ) : ?>
	<?php the_widget('widget_tcd_notice_report'); ?>
	<?php the_widget('widget_tcd_commercial'); ?>
<?php endif; ?>

	  </div>

<?php get_sidebar(3); ?><?php get_footer(); ?>