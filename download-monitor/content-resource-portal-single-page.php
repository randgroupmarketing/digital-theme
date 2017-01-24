<?php
//
//
//
//

define('USE_TWIG_MAIN_TEMPLATE', true);
define('RESOURCE_PAGE', true);

$dlm = RG_DLM::get_download($dlm_download->id);

$categories = array();

$form_values['asset_url'] = home_url() . '/resource_download/' . $dlm_download->post->ID . '/';
$form_values['asset_title'] = $dlm_download->post->post_title;
$form_values['asset_slug'] = $dlm_download->post->post_name;
$form_values['asset_categories'] = implode(',', $categories);
$form_values['asset_buying_phase'] = implode(',', $buying_phase);
$form_values['asset_topic'] = "";
$form_values['topic'] = 'Resource Access: ' . $form_values['asset_topic'];

if ($form_values['asset_buying_phase'] == '') {
	$form_values['asset_buying_phase'] = '1 - Awareness';
}

$form_values['redirect_to'] = $form_values['asset_url'] . "&offer_name=" . urlencode($form_values['asset_title']) . "&offer_category=" . urlencode($form_values['asset_categories']);

if (!isset($dlm['acf']['primary_image']['ID'])) {
	$img = $dlm['acf']['primary_image'];

} else {
	$img = get_field('primary_image', $dlm_download->id);
	$img = wp_get_attachment_image($img['ID'], 'resource-product-shot');
}

//vlog($dlm);

//
// Run location data
//
$geoip = '';
$geoip = geolocation();

$form_values['city'] = $geoip['city'];
$form_values['state'] = $geoip['state'];
$form_values['country'] = $geoip['country'];

$utmz = new Utmz_cookie_parser();
// /$url_utmz = "&utm_source={$utmz->source}&utm_term={$utmz->term}&utm_content={$utmz->content}&utm_campaign={$utmz->campaign}&utm_gclid={$utmz->gclid}&utm_medium={$utmz->medium}";
$form_values['utm_source'] = $utmz->source;
$form_values['utm_term'] = $utmz->term;
$form_values['utm_content'] = $utmz->content;
$form_values['utm_campaign'] = $utmz->campaign;
$form_values['utm_gclid'] = $utmz->gclid;
$form_values['utm_medium'] = $utmz->medium;

//
// load form
//
$form = get_field('resource_form', 'options');
if (!$form) {
	$form = "Please go to options and update form definition";
}
$form = Timber::compile_string($form, $form_values);
//vlog($form);

//
// setup template values
//

$subject = "Resource Download";
$form_button_override = "Access Resource";
$hide_checkboxes = true;
$show_comments = false;

$context = array();
preg_match('@src="([^"]+)"@', $img, $match);
//vlog($match);
$img_url = $match[1];
$context['img'] = $img;
$context['dlm_download_title'] = $dlm_download->get_the_title();
$context['dlm_acf_landing_page_copy'] = $dlm['acf']['landing_page_copy'] ? $dlm['acf']['landing_page_copy'] : $dlm['download']->post->post_content;
$context['download_button'] = apply_filters('dlm_page_addon_download_button', '<a class="aligncenter download-button" href="' . $dlm_download->get_the_download_link() . '" rel="nofollow">' . __('Download', 'dlm_page_addon') . '</a>', $dlm_download->id);
$context['members_only'] = $dlm_download->is_members_only();
$context['resource_url'] = "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

$context['form'] = $form;
$context['form_values'] = $form_values;

///
_wp_admin_bar_init();
if (USE_TWIG_MAIN_TEMPLATE) {

	?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes();?>> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" <?php language_attributes();?>> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" <?php language_attributes();?>> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes();?>> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?php wp_title('|', true, 'right');?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="msapplication-TileColor" content="#da532c">
	<meta name="msapplication-TileImage" content="/favicons/mstile-144x144.png">
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-TBCRVJ');</script>
<!-- End Google Tag Manager -->

    <meta property="og:title" content="<?php echo $context['dlm_download_title'] ?>" />
    <meta property="og:description" content="<?php echo strip_tags($context['dlm_acf_landing_page_copy']); ?>" />
    <meta property="og:url" content="<?php echo $context['resource_url'] ?>" />
    <meta property="og:image" content="<?php echo $img_url; ?>" />

	<link rel="apple-touch-icon" sizes="57x57" href="/favicons/apple-touch-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="114x114" href="/favicons/apple-touch-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="72x72" href="/favicons/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="144x144" href="/favicons/apple-touch-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="60x60" href="/favicons/apple-touch-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="120x120" href="/favicons/apple-touch-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="76x76" href="/favicons/apple-touch-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="152x152" href="/favicons/apple-touch-icon-152x152.png">
	<link rel="icon" type="image/png" href="/favicons/favicon-196x196.png" sizes="196x196">
	<link rel="icon" type="image/png" href="/favicons/favicon-160x160.png" sizes="160x160">
	<link rel="icon" type="image/png" href="/favicons/favicon-96x96.png" sizes="96x96">
	<link rel="icon" type="image/png" href="/favicons/favicon-16x16.png" sizes="16x16">
	<link rel="icon" type="image/png" href="/favicons/favicon-32x32.png" sizes="32x32">

	<?php wp_head();?>

	<link rel="stylesheet" href="/assets/css/cg.css">
	<link rel="stylesheet" href="/assets/css/squeezestyles.css">
	<link rel="stylesheet" media="print" type="text/css" href="/assets/css/print.css" />
	<link rel="stylesheet" href="/assets/css/buttons.css">
	<link rel="alternate" type="application/rss+xml" title="<?php echo get_bloginfo('name'); ?> Feed" href="<?php echo home_url(); ?>/feed/">


	<?php //removed by chris 05032016 <script defer="defer" type="text/javascript" src="//use.typekit.net/mfj3uhr.js"></script> ?>
        <script type="text/javascript" src="/assets/js/ga-changes.js"></script>
         <script type="text/javascript" src="/assets/js/jquery.matchHeight.js"></script>
	<script type="text/javascript">window._pt_lt = new Date().getTime();</script>

<?php
/*

	#################################################################################
	// Do not remove!
	// This is not a duplicate tracking code. This tracks to a seperate profile and allows us to capture UTMZ values into forms.
	#################################################################################
	 */?>
	<script type="text/javascript">
	var _gaq = _gaq || [];
	_gaq.push(['_setAccount', 'UA-9393260-5']);
	_gaq.push(['_trackPageview']);

	(function() {
	var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	ga.src = ('https:' == document.location.protocol ? 'https://www' : 'http://www') + '.randgroup.com/assets/js/ga-changes.js';
	var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	})();

	</script>

	<?php /* removed 2/22/2016 by Colin <script defer="defer" src="//fast.wistia.net/static/iframe-api-v1.js"></script> */?>
	<script type="text/javascript">try{Typekit.load();}catch(e){}</script>

	<?php /* <script type="text/javascript" charset="utf-8" src="/assets/js/dyn-nav_edgePreload.js"></script>  */?>

</head>

<body <?php body_class();?> data-resources-page='true'>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TBCRVJ"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

	  <!--[if lt IE 7]><div class="alert">Your browser is <em>out of date!</em> <a href="http://browsehappy.com/">Upgrade your browser</a> to experience this site.</div><![endif]-->
<?php
do_action('get_header');
	//vlog(current_theme_supports('bootstrap-top-navbar'));
	if (current_theme_supports('bootstrap-top-navbar')) {

		get_template_part('templates/header-top-navbar');
	} else {
		get_template_part('templates/header');
	}
} // USE TWIG
/*

get_template_part('templates/page-header-resources');
get_template_part('templates/breadcrumb-resources');

 */

// do action page addon
do_action('dlm_page_addon_aside_start');

Timber::render('content-resource-portal-single-page.twig', $context);

if (USE_TWIG_MAIN_TEMPLATE) {
	?>

<div ><?php get_template_part('templates/footer');?> </div>

<?php
} // USE_TWIG

// Edit resource URL
// cbautista@randgroup 2016
if (current_user_can('manage_options')) {?>
<script>!function(a){a(document).ready(function(){function e(){a("#wp-admin-bar-root-default").append('<li id="wp-admin-bar-edit"><a class="ab-item" href="/digital/wp-admin/post.php?post=<?php echo $dlm_download->post->ID; ?>&amp;action=edit&amp;lang=<?php echo ICL_LANGUAGE_CODE; ?>">Edit Resource</a></li>')}a("#wp-admin-bar-root-default").length>1?e():setTimeout(e,3e3)})}(jQuery);</script>
<?php }?>

  </body>
</html>

