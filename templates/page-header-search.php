<?php
	$title = "Search Results";
?>
<div id="search_head" class="vc_row wpb_row vc_row-fluid blog-header vc_custom_1483054767110 vc_row-has-fill vc_row-o-content-middle vc_row-flex">
	<div class="wpb_column vc_column_container vc_col-sm-12" style="width: 1140px;margin: auto;">
		<div class="vc_column-inner">
			&nbsp;
		</div>
	</div>
</div>
<script>
	jQuery(document).ready(function () {
		jQuery(window).on('load resize', function(){
			var win_width = jQuery(document).width();
      		var site_width = jQuery('.container').width();
      		var diff = ( win_width - site_width ) / 2 - 15;
      		jQuery('#search_head').css({
      			'position': 'relative',
      			'left': diff*-1,
      			'box-sizing': 'border-box',
      			'width': win_width,
      			'padding-left': diff,
      			'padding-right': diff,
      		});
		});
	});
</script>
<p><?php get_search_form(); ?></p>
<hr>
<style>
	body.search article header {
		position: relative;
	}
</style>

		