=== WP Content Copy Protection ===

Contributors:      RSPublishing
Donate link:       https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=HZWQXQCBC77ZY    
Tags:              protection, copyright, theft, no right click, plagiarism, content protection, image protection, image protect, photo, security, copy protection, secure
Requires at least: 3.0
Tested up to:      3.9
Stable tag:        1.0.8.2
License:           GPLv2 or Later
License URI: 	   http://www.gnu.org/licenses/gpl-2.0.html

The WP Content Copy Protection plugin uses multiple techniques in protecting your valuable site content (text, source, images) from being stolen.

== Description ==

WP Content Copy Protection is a simple plugin that uses multiple techniques in protecting your content from being copied illegally. Some of the most common copy methods, such as right-click copy functions, image dragging, and keyboard copy shortcuts, such as CTRL A, C, X, U, S, and P are disabled with this plugin. 

Basic Features:

* Disables text selection
* Disables right click on mouse
* Disables copy functions via browser
* Disables image drag and drop functionality
* Disables 'Hold to Copy' function on most mobile devices
* Displays a client-side error message when Javascript is disabled in user's browser
* Serves blank pages when JS is disabled in user's browser (user is forced to enable JS)
* Disables keyboard copy (CTRL A, C, X, U, P, and S) select all|copy|paste|print|view source|Save
* Disables keyboard command responsible for opening developer tools (preventing user from viewing source code)
* The image link URL is automatically removed and defaulted to the 'none' setting in your image upload settings (basic image protection)

Our Pro Edition Features include:

* Admin can exclude specific pages from being copy protected (globally)
* Admin can disable copy protection for logged in/registered users (globally)
* Aggressive image protection (makes it near impossible for users to steal your images)
* RSS feed protection against content scraping software and autoblogs
* WPCCP is fully compatible with all major theme frameworks
* WPCCP is fully compatible with all major browsers

See WP Content Copy Protection Pro Edition [Here](http://www.securiilock.com/)

While this will most certainly help protect your content, do remember that there are many other means one could use to get their hands on your content without using the context menu.

PLEASE NOTE: This plugin is not meant for Mac based OS!!

== This Plugin will NOT ==

1. Have any negative impact on your SEO.
2. Have any negative effect on your Advertising (such as Adsense) : Embed codes are NOT affected by this plugin in any way.

== Installation ==

1. Download the .zip file
2. Upload and extract the contents of the zip file to your wp-content/plugins/folder
3. Activate the Full-WP-Content-Security plugin in your WP-admin / Plugins
4. Enjoy!

== Feedback, Questions, Help, Bug Reporting, and Suggestions ==

Just email us at: support@securiilock.com / Email Subject : WP Content Copy Protection

== Upgrade Notice ==

= Version 1.0.8.2 = 

== Screenshots ==

none

== Frequently Asked Questions ==

= Will WP Content Copy Protection Plugin have a negative impact on my SEO? =

Absolutely not! This plugin will only affect the user's browser (attempting to copy your content) and will have absolutely no negative impact on your SEO.

= Will this plugin disable the features from the site administrator also? =

Yes! However, our Pro version allows the blog administrator to enable/disable copy protect functions for registered and logged in users (globally)

= Will your WP Content Copy Protection Plugin affect my Advertising Units (Adsense)? =

Absolutely not! Although this plugin locks your content and prevents it from being copied by anyone else, your advertising units will remain unaffected as the code doesn't alter any embeddable code or the functioning thereof.

= Why Did you Exclude The alert-message (Popup), Function? =

This function was removed simply because it could scare away your website visitors - cause a higher bounce rate - and essentially defame your website. We like to be 'silent'!

= Does your Plugin work on all major Browsers? =

This plugin works on all major browsers. The full functionality (features) was tested on the latest versions of IE (Internet Explorer), Mozilla FF, and Chrome without any problems. Our plugin is also compatible with all major theme frameworks.

= What is the difference between the free version and the pro version? =

The pro version includes advanced image protection (making it near impossible for a user to copy/steal your images), RSS feed protection against content scraping software/autoblogs and, backend admin switches.

= The plugin causes conflict with theme appearance/customization. =

We are aware of the issue and are currently working on a fix. We have disabled this function until we resolve the issue. 

= The view source option is still available from the Browser =

We are aware that the view source option is still accessible from the browser and we are busy working on a fix for this. Possible temporary solution = source code padding. This involves adding a ton of white space before the start of your code so that the view source menu appears blank. See [example](http://www.securiilock.com/)

== Changelog ==

= 1.0.1 =
* First release version
* Fixed bug that disabled user input via contact form
* Added funtion to disable Print via keyboard (CTRL+P)

= 1.0.2 =
* Re-enabled text selection (giving users more "freedom"). However, users are still unable to copy any selected text
* Fixed User input error (this error prevented users from text input via contact, search, and comment forms)
* Fixed a bug in mobile text protection code (conflicted with Chrome specific user input)
* Fixed Javascript drop down menu functionality
* Revamped iFrame breaking code

= 1.0.3 = 
* Added function to automatically remove the image link URL and defaults the image upload settings to 'none' (deters image theft)
* Fixed a bug that prevented text input (via forms) in Chrome browsers
* Did some housekeeping

= 1.0.4 = 
* added settings page
* Cleared ctrl + f5 (hard refresh) issue - no longer conflicts with other ctrl key functions
* Cleared bug that caused dropdown and user input issues
* Changed readme.txt and corrected typo errors
* Removed included screenshots
* General housekeeping

= 1.0.4.1 =
* fixed callback error
* fixed bug in mobile hold/copy function
* changed settings page
* edited readme.txt
* added tester area links in pro.php
* fixed user input bug for Chrome browsers
* added notice to plugin settings page

= 1.0.4.2 =
* fixed user input bug (for Chrome browsers)
* changed settings page and added notice
* fixed bug in mobile text select function
* edited readme.txt
* general housekeeping

= 1.0.5 = 

* fixed bug in mobile text selection function (hold to copy)
* made changes to included pro page and fixed typo errors
* made changes to readme file

= 1.0.5.1 =

* changed settings page (added new text, removed some text, fixed typo error)
* renamed pro.php page to settings.php (modified the fwpconsec.php accordingly)
* added license URI to fwpconsec.php file header
* decreased tag count in readme.txt file (best practice)
* changed plugin description in fwpconsec.php file header
* general housekeeping and cleaning

= 1.0.5.2 =

* removed imagetoolbar meta from code due to conflict with head content
* removed deprecated code and replaced with correct syntax
* added padding to JS error message
* modified readme file
* general housekeeping

= 1.0.6 =

* re-enabled text selection as users could bypass mouse/keyboard copy on selected text by using the browser copy function (text select disabled = nothing to copy even from browser copy option)
* reconstructed and upgraded settings page
* added donation link (settings file)
* general housekeeping and code cleanup
* upgraded from v1.0.5.2 - v1.0.6
* updated and tested compatibility with WP v3.7.1
* updated readme.txt file

= 1.0.6.1 =

* removed duplicate javascript function from code
* corrected author name (display issue)
* upgraded from v1.0.6 - v1.0.6.1
* updated settings.php page
* updated readme.txt file
* general housekeeping

= 1.0.6.2 =

* tested compatibility with v3.8
* changed version number
* changed support email
* corrected typo error

= 1.0.6.03 =

* general housekeeping
* fixed typos in readme.txt
* updated settings.php page

= 1.0.7 =

* updated compatibility (tested up to 3.9)
* changes in readme.txt
* changes in settings.php
* changes in fwpconsec.php

= 1.0.8 =

* addressed conflict with theme appearance/customization (fwpconsec and readme)
* added missing feature in readme description
* removed some unnecessary spacing in code
* changed external URLs in settings
* changed default (blank) index.php
* added new question to readme faq
* upgraded from v1.0.7-v1.0.8
* fixed iFrame code comment

= 1.0.8.1 =

* added new function (ctrl+s = document saving) to keyboard copy protection. Now prevents keyboard shortcut to saving documents/webpages.
* fixed typo error in fwpconsec.php (caused code comments to display in UI)
* renamed plugin name due to conflict with another plugin
* renamed php files (fwpconsec.php to wpccpl.php)
* made changes to settings/readme files
* made changes to blank index.php
* pushed from v1.0.8-v1.0.8.1
* general housekeeping

= 1.0.8.2 =

* disabled iframe breaking code due to conflict with theme customizer
* added new function = disabled key command responsible for opening developer tools (another way of viewing source code)
* renamed plugin name (previous plugin conflict resolved)
* changed plugin version from v1.0.8.1-v1.0.8.2
* tested all current functions with v3.9
* made changes to readme