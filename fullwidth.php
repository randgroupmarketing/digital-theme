<?php
/**
 * Template Name: Full Width
 */
?>

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/page', 'header'); ?>
  <?php get_template_part('templates/content', 'page'); ?>
<?php endwhile; ?>



<script>
	(function($){
		$(document).ready(function(){
			$('.ult-sticky').find('a[href*=#]').each(function(){
				//var t = this.hash.substr(1);
				var t = $(this)[0].hash.substr(1);
				var s = $(window).scrollTop();
				var p = $(this).offset().top;
				//console.log(t);
				//console.log(s);
				//console.log(p);

			});

		});

		$(window).scroll(function(){
			//'what-we-do-nav'


		});

		$.fn.highlightHash = function(){
			var w = $(window);


			return this;
		}

	})(jQuery);
</script>