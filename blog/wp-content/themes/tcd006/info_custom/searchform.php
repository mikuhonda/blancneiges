<form id="searchform" method="get" action="<?php bloginfo( 'url' ); ?>">
<?php
$value = wp_specialchars($s, 1);
if (!$value) {
$value = 'キーワード';
}
?>
<script type="text/javascript">
$(function(){
	$('input[id=s]').focus(
			function(){
				if (this.value == 'キーワード') {this.value = '';}
			}).blur(function(){
				if (this.value == '') {this.value = 'キーワード';}
		});
	$('input, textarea').focus(
			function(){
				$(this).addClass('focus');
			}).blur(function(){
				$(this).removeClass('focus');
		});
});
</script>
<input type="text" value="<?php echo $value; ?>" name="s" id="s" />
<input type="image" src="<?php bloginfo('template_url'); ?>/images/Glass.png" id="searchbutton" value="検索"  />
</form>
