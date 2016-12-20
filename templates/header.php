<header class="banner">
	<div class="container">
		<div class="row top-nav">
			<div class="col-lg-12">
		      <?php
		      if (has_nav_menu('top_navigation')) :
		        wp_nav_menu(['theme_location' => 'top_navigation', 'menu_class' => 'nav']);
		      endif;
		      ?>						
			</div>					
		</div>
		<div class="row">
			<div class="col-lg-12">
				<nav class="primary-nav">
				<?php
				if (has_nav_menu('primary_navigation')) :
				wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']);
				endif;
				?>
				</nav>					
			</div>	
		</div>
	</div>
</header>
