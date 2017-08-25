<?php
/*
	Plugin Name: WordPress - MetaEditor
	Plugin URI:  https://github.com/Demonlord6/WordPress-MetaEditor
	Description: Basic WordPress Plugin Header Comment
	Version:     0.1
	Author:      Demonlord6
	Author URI:  https://github.com/Demonlord6
	License:     Apache License 2.0
	License URI: http://www.apache.org/licenses/LICENSE-2.0
*/
	defined( 'ABSPATH' ) or die( 'No script kiddies please!' );

	add_action( 'admin_menu', 'my_plugin_menu' );

	function my_plugin_menu() {
	add_options_page( 'Meta Editor', 'Meta Editor', 'meta-editor', 'my-unique-identifier', 'my_plugin_options' );
	}


	function my_plugin_options() {
		if ( !current_user_can( 'manage_options' ) )  {
			wp_die( __( 'You do not have sufficient permissions to access this page.' ) );
		}
		echo '<div class="wrap">';
		echo '<p>Here is where the form would go if I actually had options.</p>';
		echo '</div>';
	}
?>
