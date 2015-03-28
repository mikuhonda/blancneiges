<div id="comments">

<?php if (have_comments()) { ?>

<?php if (empty($comments_by_type['comment'])) { ?>
<div class="midasi">コメント一覧</div>
<ul>
<?php wp_list_comments('callback=designplus&type=comment'); ?>
</ul>
<?php } ?>

<?php if (!empty($comments_by_type['pings'])) { ?>
<div class="midasi">トラックバック一覧</div>
<ul>
<?php wp_list_comments('callback=designplus&type=pings'); ?>
</ul>
<?php } ?>

<?php } ?>

<?php
$fields =  array(
    'author' => '<p class="comment-form-author">' . '<input id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '" size="30"' . $aria_req . ' />' . '<label for="author">' . 'お名前' . '</label> ' . ( $req ? '<span class="required">(必須)</span>' : '' ) . '</p>',
    'email'  => '<p class="comment-form-email">' . '<input id="email" name="email" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) . '" size="30"' . $aria_req . ' />' . '<label for="email">メールアドレス (非公開)</label> ' . ( $req ? '<span class="required">(必須)</span>' : '' ) . '</p>',
    'url'    => '<p class="comment-form-url">' . '<input id="url" name="url" type="text" value="' . esc_attr( $commenter['comment_author_url'] ) . '" size="30" />' . '<label for="url">' . 'ウェブサイト' . '</label>' . '</p>',
);
 $defaults = array(
    'fields'               => apply_filters( 'comment_form_default_fields', $fields ),
    'comment_field'        => '<p class="comment-form-comment"><textarea id="comment" name="comment" cols="45" rows="8" aria-required="true"></textarea></p>',
    'comment_notes_before' => '<p class="comment-notes">' . ' <!-- メールアドレス非公開 --> ' . ( $req ? $required_text : '' ) . '</p>',
    'comment_notes_after'  => '<p class="form-allowed-tags">' . '<!-- HTMLタグ無効 -->' . '</p>',
    'title_reply'          => 'この記事にコメントを書く',
    'title_reply_to'       => '%s にコメントを書く',
    'cancel_reply_link'    => 'キャンセル',
    'label_submit'         => '投稿する' ,
);
?>
 
<?php comment_form($defaults); ?>
	
<?php if(pings_open()): ?>

<div class="midasi">トラックバックURL</div>
<p class="tburl">
	<input type="text" name="tburl" id="tburl" value="<?php trackback_url(); ?>" size="80" tabindex="1" />
</p>
<?php endif; ?>
</div>