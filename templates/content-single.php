</div></div></div>
<?php while (have_posts()) : the_post(); ?>
<article <?php post_class(); ?>>
	<div class="container-fluid">
		<div class="row blog-header">
			<div class="col-md-12">
				<div class="container">
				&nbsp;	
				</div>			
			</div>
		</div>
	</div>

	<div class="container blog-entry">
		<?php
if ( function_exists('yoast_breadcrumb') ) {
yoast_breadcrumb('
<p id="breadcrumbs">','</p>
');
}
?>
		<div class="row">
			<div class="col-md-11 offset-md-1">				
		 		<h1 class="entry-title"><?php the_title(); ?></h1>
		 		<?php get_template_part('templates/entry-meta'); ?>		
			</div>
		</div>
		<div class="row">	
			<div class="col-md-11 offset-md-1 blog-content">
				<?php 
					
					if ( has_post_thumbnail() ) {
						the_post_thumbnail();
						} 
						the_content();
					 ?>
	    	</div>
		</div>
	</div>
</article>
<?php endwhile; ?>
