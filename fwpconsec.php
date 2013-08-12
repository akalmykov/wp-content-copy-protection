<?php

/*
  Plugin Name: WP Content Copy Protection
  Plugin URI: http://wordpress.org/plugins/wp-content-copy-protection/
  Description: WP Content Copy Protection prevents plagiarism and protects most of your valuable blog content (such as source code, text content, and images) from being copied by others. PRO version is available and includes advanced image protection ! See <a href="options-general.php?page=wpcp_options">Settings -> WP Content Copy Protection</a>
  Version: 1.0.4.2
  Author: RS Publishing
  Author URI: http://wordpress.org/plugins/wp-content-copy-protection/
  License: GPL2
 */

/*
  Copyright 2012/13  Rynaldo Stoltz  (email : rcstoltz@gmail.com)

  This program is free software; you can redistribute it and/or modify
  it under the terms of the GNU General Public License as published by
  the Free Software Foundation; either version 2 of the License, or
  (at your option) any later version.

  This program is distributed in the hope that it will be useful,
  but WITHOUT ANY WARRANTY; without even the implied warranty of
  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
  GNU General Public License for more details.

  You should have received a copy of the GNU General Public License
  along with this program; if not, write to the Free Software
  Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
 */

if(is_admin()) {
	add_action('admin_menu', 'constr_menu');
}

function constr_menu() {
	add_options_page('WP Content Copy Protection', 'WP Content Copy Protection', 'manage_options', 'wpcp_options', 'return_settings');
}

function return_settings() {
	require_once('pro.php');
}

add_action('wp_head',   'fwpcon_pro');

update_option('image_default_link_type','none');

function fwpcon_pro() {

?>

<!-- WP Content Copy Protection (Copyright Protection) script by Rynaldo Stoltz Starts -->

<div align="center"><noscript>
   <div style="position:fixed; top:0px; left:0px; z-index:3000; height:100%; width:100%; background-color:#FFFFFF">
   <div style="font-family: Tahoma; font-size: 14px; background-color:#FFF000">To see this page as it is meant to appear, we ask that you please enable your Javascript!</div></div>
</noscript></div>

<script type="text/javascript">
function mousedwn(e) {
try { if (event.button == 2||event.button == 3) return false; }
catch (e) { if (e.which == 3) return false; }

}
	document.oncontextmenu = function() { return false; }
	document.ondragstart   = function() { return false; }
	document.onmousedown   = mousedwn;
	</script>

<script language="JavaScript" type="text/javascript">
if (top.location != self.location) top.location.replace(self.location);
</script>

<meta http-equiv="imagetoolbar" content="no">

<script type="text/javascript">
document.ondragstart = function(){return false;};
</script>

<style type="text/css">

* : (input) {

    -webkit-touch-callout: none;
    -webkit-user-select: none;
}

img {
	    -webkit-touch-callout: none;
	    -webkit-user-select: none;		
    }
		</style>

	<script type='text/javascript'>
window.addEventListener("keydown",function (e) {
    if (e.ctrlKey && (e.which == 65 || e.which == 67 || e.which == 85 || e.which == 80)) {
        e.preventDefault();
    }
})
        document.keypress = function(e) {
        if (e.ctrlKey && (e.which == 65 || e.which == 67 || e.which == 85 || e.which == 80)) {
	}
		return false;
				};
</script>

<!-- WP Content Copy Protection (Copyright Protection) script by Rynaldo Stoltz Ends -->


























<?php 

} 
?>