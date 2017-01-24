<?php while (have_posts()) : the_post(); ?>
<?php get_template_part('templates/page', 'header'); ?>
<?php 
  ob_start();
  
  $hide = "";
  $hide_markup = 'style="display:none;"';
  
  $success_message = '<strong>Thank you</strong>, we will respond to your request shortly';
  $error_message = '<strong>Something gone wrong!</strong> Please check data submitted.';
  
  if(isset($_GET['success'])){
	  $hide = $hide_markup;
	  ?>
		 <div class="alert alert-success" role="alert">
		  <?php echo $success_message; ?>
		</div>
  <?php }elseif(isset($_GET['errorMessage'])){ 
   $hide = $hide_markup;
  ?>
	  
		<div class="alert alert-danger" role="alert">
		  <?php echo $error_message; ?>
		</div>

  <?php } ?>
  <?php 
  $message = ob_get_clean();
  ob_start();
  
  get_template_part('templates/content', 'page'); 
  
  $content = str_replace('<!-- form-message -->', $message, ob_get_clean() );
  $content = str_replace('{{hide-unhide}}', $hide, $content );
  
  echo $content;
  ?><?php endwhile; ?>
