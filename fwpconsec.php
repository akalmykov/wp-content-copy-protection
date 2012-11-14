<?php

/*
  Plugin Name: WP Content Copy Protection
  Plugin URI: http://wordpress.org/extend/plugins/wp-content-copy-protection/
  Description: WP Content Copy Protection is a simple plugin that will prevent plagirism and protect most of your valuable blog content (such as sourcecode, text content, and images) from being copied by others. Very Important : Please see the included readme.txt file for all details and instructions!
  Version: 1.0.1
  Author: RS Publishing
  License: GPL2
 */

/*
  Copyright 2012  Rynaldo Stoltz  (email : rcstoltz@gmail.com)

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

function fwpcon_pro() { ?>
<!-- WP Content Copy Protection (Copyright Protection) script by Rynaldo Stoltz -->

<div align="center"><noscript>
   <div style="position:fixed; top:0px; left:0px; z-index:3000; height:100%; width:100%; background-color:#FFFFFF">
   <div style="font-family: Tahoma; font-size: 14px; background-color:#FFF000">To see this page as it is meant to appear, we ask that you please enable your Javascript!</div></div>
</noscript></div>

		<script type="text/javascript">
		function mousedwn(e) 
		{ 
		  try { if (event.button == 2||event.button == 3) return false; }  
		  catch (e) { if (e.which == 3) return false; } 
		}
		
		window.oncontextmenu = function(event) {
    		event.preventDefault();
    		event.stopPropagation();
    			return false;
};
		document.oncontextmenu = function() { return false; }
		document.ondragstart   = function() { return false; }
		document.onmousedown   = mousedwn;
		</script>	

		<script type="text/javascript">
			document.onselectstart=function(){
				if (event.srcElement.type != "text" && event.srcElement.type != "textarea" && event.srcElement.type != "password") {
					return false;}
				else {
					return true;}};
					if (window.sidebar) {
						document.onmousedown = function(e){
						var obj=e.target;
					if (obj.tagName.toUpperCase() == "INPUT" || obj.tagName.toUpperCase() == "TEXTAREA" || obj.tagName.toUpperCase() == "PASSWORD") {
						return true;	}
					else {
						return false;	}};
				}
				</script>

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

	<script type='text/javascript'>
	try{
	var parent_location = parent.location.href.toLowerCase();
	if(parent){
	if ( top.location.href.toLowerCase() != document.location.href.toLowerCase()){
	if(parent_location.indexOf('{<?php echo $home_url; ?>}') != 0 ){
	top.location.href = document.location.href;
				}
			}
		}
	}
	catch ( err ){
		if(typeof window.console != "undefined"){
			console.log(err);
		}
		top.location.href = document.location.href;
	}
	if (parent.frames.length > 0) top.location.replace(document.location)
	</script>

<meta http-equiv="imagetoolbar" content="no">

<script type="text/javascript">
document.ondragstart = function(){return false;};
</script>

<style type="text/css">
* { -webkit-touch-callout: none; }
</style>

<!-- End WP Content Copy Protection (Copyright Protection) script by Rynaldo Stoltz -->
<?php } add_action('wp_head',   'fwpcon_pro');

?>