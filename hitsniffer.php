<?php
/*
Plugin Name: Hit Sniffer Live Blog Analytics
Description: Hit Sniffer 'was' a powerful real time website visitor activity tracker.
Author: Armin Nikdel
Version: 2.12
*/ 


//Hitsniffer stop it's services in September 2016. Those who are looking for alternative can use Hitsteps.
include_once( ABSPATH . 'wp-admin/includes/plugin.php' );
if (!function_exists("hitsteps")&&function_exists("is_plugin_active")&&!is_plugin_active( 'hitsteps-visitor-manager/hitsteps.php' )){


	if (!function_exists("hitsniffer_admin_warnings")){
	function hitsniffer_admin_warnings() {



		
			function hitsniffer_warning() {
				echo "
				<div id='hitsniffer-warning' class='updated fade'><p><strong>".sprintf(__('Recommended for you: <a href="%1$s" class="thickbox open-plugin-details-modal" aria-label="More information about Hitsteps" data-title="Hitsteps">Get to know Hitsteps Analytics</a>.','hitsteps-visitor-manager')."</strong> ".__('You might have a great website, so do your competitors! Start gaining competitive advantage by tracking your visitors, click heatmaps, get detailed report of every single visitors, watch them live, chat with them, get notification when they visit your website, and receive list of pages they visit included in messages they send to you via contact forms or in receipt of their purchases.<br><br><small>Recommended based on deprecated plugin installed: Hit Sniffer Live Blog Stats</small>','hitsteps-visitor-manager'), "plugin-install.php?tab=plugin-information&amp;plugin=hitsteps-visitor-manager&amp;TB_iframe=true&amp;width=600&amp;height=55")."</p></div>
				
				<script type=\"text/javascript\">setTimeout(function(){jQuery('#hitsniffer-warning').slideUp('slow');}, 30000);</script>

				";

			}

			add_action('admin_notices', 'hitsniffer_warning');

			return;



	}
	hitsniffer_admin_warnings();
	}

}


?>