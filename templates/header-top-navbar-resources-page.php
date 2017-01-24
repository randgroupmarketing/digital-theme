<?php if (is_user_logged_in()) {?>
	<style>
	.navbar-fixed-top { top: 32px; }
	</style>
<?php }?>




<header class="banner navbar navbar-static-top" role="banner">
	<div class="container-fluid topbar">
		<div class="container">
			<nav class="nav-main-top" role="navigation">
			<?php
if (has_nav_menu('top_navigation')):
	wp_nav_menu(array('theme_location' => 'top_navigation', 'menu_class' => 'nav'));
endif;
?>

			</nav>
		</div>
	</div>
  <div class="navbar-inner">
    <div class="container">
		<div class="row-fluid">
			<div class="span6">
				<div class="brand">
					<div class="span4">
						<div class="logo-horizontal">
							<a href="">
								<svg version="1.1" id="Layer_2" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
									 viewBox="0 0 1100 140" style="enable-background:new 0 0 1100 140;" xml:space="preserve">
								<g>
									<path class="st3" d="M669.4,18.7h40.8c11.6,0,33.8,1.3,33.8,26.1c0,13-6.7,23-18.1,25.9V71c13.3,3.4,14,14.3,14.5,22.7
										c1,17.4,0.4,21.4,4.4,27.5h-8c-3.1-6-2.6-9.5-3.7-27.4c-0.6-9.4-1.6-19.9-20.5-19.9h-36.1v47.3h-7V18.7z M676.4,67.8h36.7
										c7.9,0,23.6-3.1,23.6-22.7c0-19.8-18-20.2-26.5-20.2h-33.8V67.8z"/>
									<path class="st3" d="M815,15.7c30,0,47.3,20.6,47.3,54.3c0,33.7-17.3,54.3-47.3,54.3c-30,0-47.3-20.5-47.3-54.3
										C767.7,36.1,785,15.7,815,15.7z M815,118.1c20.3,0,40-12.3,40-48.1c0-35.9-19.6-48.2-40-48.2c-20.3,0-40,12.3-40,48.2
										C775.1,105.8,794.7,118.1,815,118.1z"/>
									<path class="st3" d="M894.2,18.7v62.2c0,18.1,3.8,36.1,30.9,36.1c26.9,0,30.9-17.7,30.9-36.1V18.7h7v62.3c0,18-3.4,42.1-37.9,42.1
										c-35.4,0-37.9-23.9-37.9-42.1V18.7H894.2z"/>
									<path class="st3" d="M1029.1,18.7c10.8,0,33.1,1.6,33.1,27.8c0,29.3-27.4,29.6-34.8,29.6h-28.7v45.1h-7V18.7H1029.1z M998.7,70
										h28.7c20.5,0,27.5-9.7,27.5-23.3c0-19.9-17.1-21.8-27.5-21.8h-28.7V70z"/>
								</g>
								<g>
									<path class="st3" d="M637.3,70.9V109c-10.2,8.1-22.4,12.7-37.7,12.7c-28.2,0-54.9-19.7-54.9-53.2c0-33.3,26.8-53.6,53.9-53.6
										c16.7,0,27.6,5.1,38.4,12.7l-4.2,6.2c-9.8-7.1-20.9-11.7-34.1-11.9c-25.6,0-45.3,19.3-45.3,46.6c0,28,21.2,46.1,46.6,46.1
										c11.5,0,21.2-3.3,29.4-9.1V78.3h-29.6v-7.4H637.3z"/>
								</g>
								<path class="st3" d="M66.2,56.9c2.6-2.6,4.6-5.6,6-9.1c1.4-3.5,2.2-7.5,2.2-11.9c0-5.9-1.7-10-5-12.4c-3.3-2.4-9.1-3.6-17.2-3.6H32
									l-7.2,45H45c4.4,0,8.4-0.7,12-2.1C60.5,61.5,63.6,59.5,66.2,56.9z"/>
								<polygon class="st0" points="14.6,130.5 65,130.5 39.3,77.9 22.8,77.9 "/>
								<path class="st3" d="M66,7.6c6.4,1.1,11.6,3.3,15.5,6.7c5.7,5,8.5,12.2,8.5,21.6c0,5.2-0.9,10.1-2.7,14.7c-1.8,4.7-4.3,8.8-7.5,12.4
									c-3.2,3.6-6.9,6.6-11.1,8.9c-4.2,2.3-8.7,3.5-13.5,3.8l27.5,54.9h19.8c0,0,14.6,0,14.8,0c0.2,0,4.7-0.7,4.7-4.9
									c0-4.2,0-112.5,0-113.3s-1.3-4.8-4.7-4.8c-3.5,0-15.1,0-15.1,0H66z"/>
								<path class="st3" d="M106.1,66.3"/>
								<g>
									<path class="st4" d="M151.7,16.9h41c11.6,0,34,1.3,34,26.2c0,13.1-6.8,23.1-18.2,26v0.3c13.4,3.4,14.1,14.4,14.6,22.8
										c1,17.5,0.4,21.5,4.4,27.6h-8.1c-3.1-6-2.6-9.6-3.7-27.5c-0.6-9.4-1.6-20-20.6-20h-36.3v47.5h-7.1V16.9z M158.8,66.2h36.9
										c7.9,0,23.7-3.1,23.7-22.8c0-19.9-18.1-20.3-26.6-20.3h-34V66.2z"/>
									<path class="st4" d="M248.5,119.9h-7.8L280,16.9h8.8l39.3,102.9h-7.8l-12.6-33.4h-46.5L248.5,119.9z M305.4,80.3l-21-57.5l-21,57.5
										H305.4z"/>
									<path class="st4" d="M349.1,119.9H342V16.9h8.8l61.8,93.1V16.9h7.1v102.9H411l-61.9-93.1V119.9z"/>
									<path class="st4" d="M478.9,16.9c9.1,0,48.1,0,48.1,51.2c0,44-25.6,51.8-55.3,51.8h-26.5V16.9H478.9z M452.3,113.7h21.8
										c19.1,0,45.6-2.9,45.6-45.3c0-40.3-26.9-45.3-40.3-45.3h-27.1V113.7z"/>
								</g>
								</svg>
							</a>
						</div>
						<div class="logo-vertical">
							<a href="<?php echo home_url(); ?>">
								<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
								viewBox="0 0 400 150" style="enable-background:new 0 0 400 150;" xml:space="preserve">
									<g>
										<path class="st0" d="M198.9,143.5V95.9h18.9c5.3,0,9.2,1,11.8,3c2.6,2,3.9,5,3.9,9.1c0,3.1-0.7,5.7-2.2,7.8
										c-1.5,2.2-3.6,3.5-6.2,4.2v0.1c2.2,0.6,3.8,1.7,4.9,3.2c1,1.5,1.6,4,1.9,7.3c0.3,6,0.6,9.5,0.8,10.3c0.2,0.8,0.6,1.7,1.2,2.5h-3.7
										c-0.5-0.8-0.8-1.6-1-2.4c-0.2-0.8-0.4-4.2-0.7-10.3c-0.2-3.5-1.1-5.9-2.5-7.2c-1.5-1.3-3.8-2-7-2h-16.8v21.9H198.9z M202.1,98.8
										v19.9h17c3.4,0,6.1-0.9,8-2.8c1.9-1.9,2.9-4.4,2.9-7.7c0-3.3-1-5.6-3.1-7.1s-5.1-2.2-9.2-2.2H202.1z"/>
										<path class="st0" d="M244.6,119.7c0-7.8,1.9-14,5.7-18.5c3.9-4.5,9.3-6.7,16.2-6.7c6.9,0,12.3,2.2,16.1,6.7
										c3.9,4.5,5.8,10.6,5.8,18.5c0,7.9-2,14-5.8,18.5c-3.8,4.5-9.2,6.7-16.1,6.7c-6.9,0-12.3-2.2-16.2-6.7
										C246.5,133.8,244.6,127.6,244.6,119.7z M248,119.7c0,7,1.6,12.5,4.8,16.4c3.2,3.9,7.8,5.9,13.8,5.9c5.9,0,10.4-1.9,13.7-5.9
										c3.2-4,4.9-9.5,4.9-16.5c0-7-1.6-12.4-4.9-16.4c-3.2-4-7.8-5.9-13.7-5.9c-5.9,0-10.5,2-13.7,5.9C249.6,107.3,248,112.7,248,119.7z"
										/>
										<path class="st0" d="M300,95.9h3.3v28.9c0,6.3,1.2,10.7,3.7,13.1c2.4,2.4,6,3.6,10.7,3.6c5.2,0,8.8-1.3,11-4
										c2.2-2.7,3.3-7,3.3-12.8V95.9h3.3v28.9c0,7-1.5,12-4.4,15c-3,3-7.3,4.5-13.1,4.5c-6,0-10.5-1.5-13.3-4.4c-2.9-2.9-4.3-8-4.2-15.1
										V95.9z"/>
										<path class="st0" d="M348.4,95.9h17.4c5.1,0,8.9,1.1,11.5,3.2c2.6,2.1,3.9,5.3,3.9,9.7c0,4.3-1.3,7.7-3.9,10.1
										c-2.6,2.4-6.7,3.6-12.3,3.6h-13.3v20.9h-3.3V95.9z M351.7,98.8v20.9H365c4.1,0,7.2-0.8,9.4-2.5c2.2-1.7,3.3-4.5,3.3-8.3
										c0-3.3-1.1-5.8-3.2-7.5c-2.1-1.7-5.3-2.6-9.6-2.6H351.7z"/>
										</g>
										<g>
										<path class="st0" d="M184,120.2v17.7c-4.7,3.7-10.4,5.9-17.5,5.9c-13.1,0-25.5-9.1-25.5-24.7c0-15.4,12.4-24.9,25-24.9
										c7.8,0,12.8,2.4,17.8,5.9l-2,2.9c-4.5-3.3-9.7-5.5-15.8-5.5c-11.9,0-21,8.9-21,21.6c0,13,9.9,21.4,21.6,21.4
										c5.3,0,9.9-1.5,13.7-4.2v-12.7h-13.7v-3.4H184z"/>
										</g>
										<path class="st0" d="M65.3,62.9c2.8-2.8,5-6.1,6.6-10c1.6-3.8,2.4-8.2,2.4-13c0-6.4-1.8-11-5.5-13.6c-3.6-2.6-9.9-3.9-18.8-3.9h-22
										l-7.8,49.2h22c4.8,0,9.2-0.8,13.1-2.3C59.1,67.9,62.5,65.7,65.3,62.9z"/>
										<polygon class="st0" points="8.9,143.4 64,143.4 36,85.9 17.9,85.9 "/>
										<path class="st0" d="M65.1,9c7,1.2,12.7,3.6,17,7.4c6.2,5.4,9.3,13.3,9.3,23.6c0,5.6-1,11-3,16.1c-2,5.1-4.7,9.6-8.2,13.6
										c-3.5,4-7.5,7.2-12.1,9.7c-4.6,2.5-9.5,3.8-14.7,4.1l30.1,60H105c0,0,15.9,0,16.2,0c0.2,0,5.1-0.7,5.1-5.3c0-4.6,0-122.9,0-123.8
										c0-0.9-1.4-5.2-5.1-5.2c-3.8,0-16.5,0-16.5,0H65.1z"/>
										<path class="st1" d="M108.8,73.2"/>
										<g>
										<path class="st2" d="M140.7,81.1V13.5h27c7.5,0,13.1,1.4,16.8,4.2c3.7,2.8,5.5,7.1,5.5,13c0,4.4-1.1,8.1-3.2,11.2
										c-2.1,3.1-5.1,5-8.8,5.9V48c3.2,0.8,5.5,2.4,6.9,4.5c1.4,2.2,2.3,5.7,2.7,10.4c0.4,8.6,0.9,13.4,1.2,14.6c0.4,1.2,0.9,2.4,1.7,3.5
										h-5.3c-0.6-1.2-1.1-2.3-1.4-3.5c-0.3-1.2-0.6-6-1.1-14.6c-0.3-5-1.5-8.5-3.6-10.3c-2.1-1.8-5.4-2.8-9.9-2.9h-23.9v31.2H140.7z
										 M145.4,17.6v28.3h24.3c4.8,0,8.6-1.3,11.4-4c2.8-2.6,4.2-6.3,4.2-11c0-4.6-1.4-8-4.3-10.1c-2.9-2.1-7.3-3.2-13.1-3.2H145.4z"/>
										<path class="st2" d="M212.6,59.2l-8.3,21.9h-5.1L225,13.5h5.8l25.8,67.6h-5.1l-8.3-21.9H212.6z M214,55.2h27.6l-13.8-37.8L214,55.2
										z"/>
										<path class="st2" d="M270.4,20v61.2h-4.6V13.5h5.8l40.6,61v-61h4.6v67.6h-5.7L270.4,20z"/>
										<path class="st2" d="M333.6,13.5h22.1c10.7,0.1,18.6,3.1,23.8,9c5.2,5.9,7.8,14.1,7.8,24.6c0,12.1-2.9,20.8-8.7,26.1
										c-5.8,5.3-15,7.9-27.6,7.9h-17.4V13.5z M338.2,17.6v59.5h14.3c10.7,0.1,18.4-2.4,23-7.2c4.6-4.9,7-12.4,7-22.5
										c0-9.5-2.3-16.9-6.9-22c-4.6-5.2-11.1-7.7-19.6-7.7H338.2z"/>
									</g>
								</svg>
							</a>
						</div>
					</div>
					<div class="span8">
						<?php echo tagline_header(); ?>
					</div>
				</div>
			</div>
			<div class="span6">
				<div class="sform"><?php get_search_form();?></div>
			</div>

		</div>
   </div>
  </div>
  <div class="navbar-inner-2">
  	<div class="container">
	  	      <nav class="nav-main " role="navigation">
        <?php
if (has_nav_menu('main_navigation')):
	wp_nav_menu(array('theme_location' => 'main_navigation', 'menu_class' => 'nav'));
endif;
?>

      </nav>
  	</div>
  </div>
</header>



  <?php
if (is_front_page()) {
	get_template_part('templates/homepage');
}
// job_listing	 subpage
else if (is_post_type('job_listing')) {
	get_template_part('templates/page-header');
	get_template_part('templates/breadcrumb-job_listing');
} else if (is_single()) {
	get_template_part('templates/page-header-cat');
	get_template_part('templates/breadcrumb');
}
// resources page
else if (is_page('519') || defined('RESOURCE_PAGE')) {
	get_template_part('templates/page-header-resources');
	get_template_part('templates/breadcrumb-resources');
}
// leadership subpage
else if (is_child('19')) {
	get_template_part('templates/page-header');
	get_template_part('templates/breadcrumb');
}
// promo subpage
else if (is_child('517')) {
	get_template_part('templates/page-header');
	// big header image
	if (has_post_thumbnail()): ?>
		<div class="container hidden-phone">
			<div class="row-fluid">
				<a href="<?php the_permalink();?>" title="<?php the_title_attribute();?>" ><?php the_post_thumbnail();?></a>
			</div>
		</div>
	  <?php endif;
} else if (is_single()) {
	//get_template_part('templates/page-header');
	get_template_part('templates/breadcrumb');
} else if (is_page()) {
	get_template_part('templates/page-header');
	get_template_part('templates/breadcrumb');
	// big header image
	if (has_post_thumbnail()): ?>
		<div class="container hidden-phone">
			<div class="row-fluid">
				<a href="<?php the_permalink();?>" title="<?php the_title_attribute();?>" ><?php the_post_thumbnail();?></a>
			</div>
		</div>

	<?php endif;?>

	<?php

	/*
		// subnav mechanism
		// check if child pages, will show nav
		$ancestor_id = $post->ID; // you want to change this
		$descendants = get_pages( array( 'child_of' => $ancestor_id ) );
		$incl = '';

		$descendants_count = count($descendants);
		//echo '<test>'.$descendants_count.'</test>';
		//if ($descendants_count > 1) { echo 'true'; }

		if ( ($descendants != null) && ($descendants_count > 1) ) {

			foreach ( $descendants as $page ) {
				if ( ( $page->post_parent == $ancestor_id )
					|| ( $page->post_parent == $post->post_parent )
					|| ( $page->post_parent == $post->ID )
				) {
					$incl .= $page->ID . ",";
				}
			}
			?>

			<div class="container">
				<div class="row">
					<div class="span12">

								<ul class="nav nav-tabs">
									<?php
									wp_list_pages( array(
										'child_of'    => $ancestor_id,
										'include'     => $incl,
										'link_before' => '',
										'title_li'    => '',
										'sort_column' => 'menu_order'
									) );
									?>
								</ul>

					</div>
				</div>
			</div>

	*/?>

<?php
} else {
	get_template_part('templates/page-header');
	get_template_part('templates/breadcrumb');
}
