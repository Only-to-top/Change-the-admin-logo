/* * * * * * * Change the admin logo * * * * * * */
function ale_edit_admin_logo(){?>
	<style type="text/css">
		.login h1 a {
			background: transparent url("<?php echo get_template_directory_uri(); ?>/img/logo.png") center no-repeat !important;
			width: 224px !important;
			height: 170px !important;
		}
	</style>
<?php }
add_action('login_enqueue_scripts', 'ale_edit_admin_logo');

// Change the standard link
function ale_edit_admin_logo_link(){
	return home_url('/');
}
add_filter('login_headerurl', 'ale_edit_admin_logo_link');
/* * * * * * * Change the admin logo * * * * * * */