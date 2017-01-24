<footer class="content-info">
	<div class="container">
		<div class="row">
			<div class="col-lg-4">
			<?//php dynamic_sidebar('sidebar-footer'); ?>	
			<span class="copyright">&copy; 2003-<?php echo date('Y'); ?> The Rand Group, LLC</span>			
			</div>
			<div class="col-lg-8 foot-links">
		<?php
	      if (has_nav_menu('footer_navigation')) :
	        wp_nav_menu(['theme_location' => 'footer_navigation', 'menu_class' => 'nav']);
	      endif;
	    ?>					
			</div>
		</div>
		
	</div>
</footer>

<?php wp_footer();?>




