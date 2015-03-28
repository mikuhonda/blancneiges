  <div class="pickup">
	<div class="midasi"><?php if(get_catname(get_option( 'opt_t_cate' ))){echo get_catname(get_option( 'opt_t_cate' ));}else{echo '未分類';} ?></div>
	  <?php $postslist = get_posts('category=' . get_option( 'opt_t_cate' ));
     if($posts):foreach($postslist as $post) : start_wp(); ?>

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
	<p class="cat-list"><a href="<?php echo get_category_link('3'); ?>" title="<?php echo get_catname('3'); ?>">&raquo; <?php echo get_catname('3'); ?></a></p>
  </div>
