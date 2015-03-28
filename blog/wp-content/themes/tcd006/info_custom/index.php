<?php get_header(); ?>
<!-- メインカラム -->

<?php $i = 0; ?>
<?php if(get_option( 'opt_t_news_count' ) != NULL){ $cnt = get_option( 'opt_t_news_count' );}else{ $cnt = '11';} ?>
<?php query_posts($query_string . '&posts_per_page=' . $cnt ); ?>

<?php if (have_posts()) : the_post(); ?>
<div id="entry1wrapper">
	<div id="entry1">
	  <div class="entrytitle">
		<dl>
		  <dt>
		  <a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>">
		  <?php
		  if ( has_post_thumbnail()) {
				the_post_thumbnail( array(950,950), '' );
		  } else {
				no_thumbnail('','class="wp-post-image"');
		  }
		  ?>
		  </a>
		  </dt>
		  <dd>
			<h2><a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
			  <div class="contents_body">
				<?php echo mb_substr(get_the_excerpt(), 0, 500); ?>...
			  </div>
		  </dd>
		</dl>
	  </div>
	</div>
</div>
<div id="entry1bottom" class="alphafilter"></div>




<div id="wrapper">
  <div id="container-top" class="alphafilter"></div>
  <div id="container" class="alphafilter">
    <div id="contents">
	<div class="midasi"><?php if(get_option( 'opt_t_title' )){echo get_option( 'opt_t_title' );}else{echo '最新記事';} ?></div>

	<div class="post590">
	<?php while (have_posts()) : the_post(); ?>
	<?php if ($i % 2 == 0) { ?>
		<div class="entry-left" id="post<?php the_ID(); ?>">
		<?php } else { ?>
		<div class="entry-right" id="post<?php the_ID(); ?>">
		<?php } ?>
		  <div class="entrytitle">
			<dl>
			  <dt><a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>">
			  <?php
			  if ( has_post_thumbnail()) {
                            the_post_thumbnail(array(100,100));
			  } else {
                            no_thumbnail();
			  }
			  ?>
			  </a></dt>
			  <dd><h2><a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
				  <p class="metadate alignright"><?php the_time("Y年n月j日"); ?></p>
			  </dd>
			</dl>
		  </div>
		</div>
	<?php $i++; ?>
	<?php endwhile; ?>
	<?php page_navigation(); ?>
	<?php if(is_page('全記事一覧') ): ?>
	<ul>
	<?php wp_get_archives('type=postbypost'); ?>
	</ul>
	<?php endif; ?>
	</div>

<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar(1) ) : ?>
	<?php the_widget('widget_tcd_notice_report'); ?>
	<?php the_widget('widget_tcd_commercial'); ?>
<?php endif; ?>

<?php else: ?>

<div id="wrapper">
  <div id="container">
    <div id="contents">

<h2 class="align1">ページが見つかりません</h2>
   <div class="contents_body">
    <p class="align1"><?php _e('申し訳ありません。ここにはお探しのページはないようです。'); ?></p>
   </div>

<?php endif; ?>

</div>
<!-- / メインカラム -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>