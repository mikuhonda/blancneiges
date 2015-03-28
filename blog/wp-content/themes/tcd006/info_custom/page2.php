<?php
/*
Template Name: 1カラム
*/
?>
<?php get_header(); ?>

<div id="wrapper">
  <div id="container-top"></div>
  <div id="container">

<div id="one-column">
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<h2><?php the_title();?></h2>
<?php the_content(); ?>
<!--
<div class="information">
	<?php if(function_exists('the_tags')) { the_tags('<p class="taglist">タグ: ',', ','</p>'); } ?>
	<p class="entry-footer"><?php the_date('Y.m.d'); ?> | <?php the_category(', ') ?> | <a href="<?php comments_link(); ?>">コメント/トラックバック <?php comments_number('(0)', '(1)', '(%)'); ?></a> </p>
</div>
<?php endwhile; else: ?>
<p><?php echo "お探しの記事、ページは見つかりませんでした。"; ?></p>
<?php endif; ?>
-->
</div>

<?php get_footer(2); ?>