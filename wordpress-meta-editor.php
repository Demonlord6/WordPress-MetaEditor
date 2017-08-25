<?php
/*
	Plugin Name: WordPress - MetaEditor
	Plugin URI:  https://github.com/Demonlord6/WordPress-MetaEditor
	Description: Basic Meta Editor for Wordpress
	Version:     0.1
	Author:      Demonlord6
	Author URI:  https://github.com/Demonlord6
	License:     Apache License 2.0
	License URI: http://www.apache.org/licenses/LICENSE-2.0
*/
	defined( 'ABSPATH' ) or die( 'No script kiddies please!' );

	/*NEW*/

	add_action( 'admin_menu', 'my_plugin_menu' ); 

	function my_plugin_menu() {

	add_options_page( 'WP Meta Editor', 'WP Meta Editor', 'manage_options', 'wp-meta-editor', 'my_plugin_options' );

} 
function my_plugin_options() { 
if ( !current_user_can( 'manage_options' ) ) { 
 wp_die( __( 'You do not have sufficient permissions to access this page.' ) ); 
} 
echo '<div class="wrap"><h2>WP Meta Editor</h2></div>'; 
}
?>
