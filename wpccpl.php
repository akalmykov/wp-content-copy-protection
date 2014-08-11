<?php

/*
  Plugin Name: WP Content Copy Protection
  Plugin URI: http://securiilock.com/
  Description: WP Content Copy Protection prevents plagiarism and protects your valuable content such as source code, text and images from being copied illegally by others. Copy is disabled via mouse and keyboard. See <a href="options-general.php?page=wpcp_options">Settings > WP Content Copy Protection</a> to learn more about WP Content Copy Protection - The complete content protection plugin for WordPress.
  Version: 1.1.2
  Author: RSPublishing
  Author URI: http://securiilock.com/
  License: GPLv2 or later
  License URI: http://www.gnu.org/licenses/gpl-2.0.html/
 */

/*
  Copyright 2013/2014  Rynaldo Stoltz  (email: support@securiilock.com | web: http://securiilock.com/)

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
	require_once('settings.php');
}

add_action('wp_head', 'fwpcon_pro');
update_option('image_default_link_type','none');

function fwpcon_pro() { ?>

<!-- WP Content Copy Protection ™ script by Rynaldo Stoltz Starts - http://securiilock.com/ -->

<div align="center"><noscript>
   <div style="position:fixed; top:0px; left:0px; z-index:3000; height:100%; width:100%; background-color:#FFFFFF">
   <div style="font-family: Tahoma; font-size: 14px; background-color:#FFF000; padding: 10pt;">Please enable your Javascript to see this page as it is meant to appear!</div></div>
</noscript></div>

<script type="text/javascript">
function disableSelection(e){if(typeof e.onselectstart!="undefined")e.onselectstart=function(){return false};else if(typeof e.style.MozUserSelect!="undefined")e.style.MozUserSelect="none";else e.onmousedown=function(){return false};e.style.cursor="default"}window.onload=function(){disableSelection(document.body)}
</script>

<script type="text/javascript">
document.oncontextmenu=function(e){var t=e||window.event;var n=t.target||t.srcElement;if(n.nodeName!="A")return false}
</script>

<style type="text/css">
* : (input, textarea) {
    -webkit-touch-callout: none;
    -webkit-user-select: none;
}
</style>

<style type="text/css">
img {
	-webkit-touch-callout: none;
	-webkit-user-select: none;
}
</style>

<script type="text/javascript">
window.addEventListener("keydown",function(e){if(e.ctrlKey&&(e.which==65||e.which==66||e.which==67||e.which==73||e.which==80||e.which==83||e.which==85||e.which==86)){e.preventDefault()}});document.keypress=function(e){if(e.ctrlKey&&(e.which==65||e.which==66||e.which==67||e.which==73||e.which==80||e.which==83||e.which==85||e.which==86)){}return false}
</script>

<script type="text/javascript">
document.onkeydown=function(e){e=e||window.event;if(e.keyCode==123||e.keyCode==18){return false}}
</script>

<!-- WP Content Copy Protection ™ script by Rynaldo Stoltz Ends - http://securiilock.com/ -->

































<?php } ?>