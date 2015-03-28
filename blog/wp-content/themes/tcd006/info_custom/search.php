<?php get_header(); ?>

<div id="wrapper">
  <div id="container">

<!-- メインカラム -->
<div id="s-contents">
  <div class="post590">
	<p class="archive-title">検索結果</p>

<?php if (have_posts()) : ?>

<?php $i = 0; ?>

<div class="archive-left" id="post<?php the_ID(); ?>">
<?php if (have_posts()) { ?>
<?php while (have_posts()) : the_post(); ?>
	<?php if ($i == floor(get_option('posts_per_page') / 2) ) { ?>
		</div>
		<div class="archive-right" id="post<?php the_ID(); ?>">
	<?php } ?>
	  <?php
	  if ( has_post_thumbnail()) {
	  the_post_thumbnail(array(200,100));
	  } else {
			no_thumbnail(60,'class="wp-post-image"');
	  }
	  ?>
	<h2><a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
	  	<span class="metadate"><?php the_time("Y年n月j日"); ?></span>
	<p class="f-clear"><?php echo mb_substr(get_the_excerpt(), 0, 300); ?>
	<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">&raquo; 続きを読む</a></p>
	<hr />
	<?php $i++; ?>
<?php endwhile; ?>
</div>
<?php } else { ?>
		  
<div id="wrapper">
  <div id="container">
    <div id="s-contents">

	<h2 class="align1">ページが見つかりません</h2>
	   <div class="contents_body">
	    <p class="align1"><?php _e('申し訳ありません。ここにはお探しのページはないようです。'); ?></p>
	   </div>
	</div>
  </div>
</div>
		
<?php } ?>

<!-- ページナビゲーション -->
<?php page_navigation(); ?>

    <?php else :
        if ( is_category() ) { // If this is a category archive
            printf("<h2 class='align1'>".__("Sorry, but there aren't any posts in the %s category yet.", 'kubrick').'</h2>', single_cat_title('',false));
        } else if ( is_date() ) { // If this is a date archive
            echo('<h2>'.__("Sorry, but there aren't any posts with this date.", 'kubrick').'</h2>');
        } else if ( is_author() ) { // If this is a category archive
            $userdata = get_userdatabylogin(get_query_var('author_name'));
            printf("<h2 class='align1'>".__("Sorry, but there aren't any posts by %s yet.", 'kubrick')."</h2>", $userdata->display_name);
        } else {
            echo("<h2 class='align1'>".__('No posts found.', 'kubrick').'</h2>');
        }
      get_search_form();
    endif;?>

  </div>
</div>
<?php get_sidebar(3); ?>
<?php get_footer(); ?>