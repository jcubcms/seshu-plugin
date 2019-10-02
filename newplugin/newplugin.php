<?php
/**
 *Plugin Name: new plugin
 *Description: used by millions, new plugin is quite possibly the best way <strong> to edit your footer</strong>.
**/     
?>

<?php
add_action('admin_menu', 'my_admin_menu');

function my_admin_menu () {
  add_menu_page('Footer Text title', 'Footer Settings', 'manage_options', 'footer_setting_page', 'mt_settings_page');

}

function footer_text_admin_page () {
  echo 'This is where we will edit the variable';
}

function mt_settings_page() {
    echo "<h2>" . __( 'Footer Settings Configurations', 'menu-test' ) . "</h2>";
	include_once('footer_settings_page.php');
}
?>

<?php
function your_function() {
   echo "<div style='color: blue;
    font-size: 30px;
    margin: 20px;'>".get_option('footer_text')."</div>";
}
add_action( 'wp_footer', 'your_function' );
?>