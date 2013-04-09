=== WP Content Copy Protection ===

Contributors:      RS Publishing
Donate link:       https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=M986BXMFAH4KJ      
Tags:              protection, copyright, prevent, content, protect, copy, no right click, disable, images, text, plagiarism, source, code, steal, theft, context menu
Requires at least: 2.0
Tested up to:      3.4.2
Stable tag:        1.0.3
License:           GPLv2 or Later
License URI: 	   http://www.gnu.org/licenses/gpl-2.0.html

The WP Content Copy Protection plugin uses multiple techniques in copy-protecting your blog content.


== Description ==

WP Content Copy Protection is a simple plugin that uses multiple techniques in copy-protecting your blog content. Some of the most common copy methods, such as right click, image dragging, and keyboard copy shortcuts such as CTRL A, C, X, U, and P are disabled with this plugin. 

This plugin is also equipped with mobile text/image protection as well as a Javascript error message which is served to clients with their Javascript disabled. The JS error is served in addition to blank site pages which is only 'removed' once the client enables his/her JS.

While this will most certainly help copy-protect your content, do remember that there are many other means one could use to get their hands on your content without using the context menu.

Features

* iFrame Protection
* Disables right click function on mouse
* Disables image drag and drop function
* Disables 'Hold to Copy' function on most mobile devices
* Displays a client-side error message when Javascript is disabled
* Disables combo keyboard command (CTRL A, C, X, U, P) copy/paste/print/view source functions
* Automatically removes the image link URL and defaults the upload settings to 'none'

Donations - Help us Keep WP Content Coopy Protection Alive

Love our work? Please consider making a donation via [PayPal] (https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=M986BXMFAH4KJ) as this would help us keep the WP Content Copy Protection plugin alive and updated !


== This Plugin will NOT ==

1. Have any negative effect on your SEO
2. Have any negative effect on your Advertising (such as Adsense) : Ad codes are NOT affected by this plugin in any way


== Installation ==

1. Download the .zip file
2. Upload and extract the contents of WP Content-Copy-Protection.zip to your wp-content/plugins/folder
3. Activate the Full-WP-Content-Security plugin in your WP-admin / Plugins
4. Enjoy our content protection

== Feedback, Questions, Help, Bug Reporting, and Suggestions ==

Just post a mail to: rcstoltz@gmail.com / Email Subject : WP Content Copy Protection


== Upgrade Notice ==

= Version 1.0.3 = 

Added function - Pugin now automatically removes the image link URL and defaults the image upload settings to 'none' (helps deter image theft)

== Screenshots ==

none

== Frequently Asked Questions ==

= Will WP Content Copy Protection Plugin have a negative impact on my SEO? =

No! This plugin will only affect the user's browser (attempting to copy your content) and will have NO negative impact on your SEO.

= Will this plugin disable the features from the site administrator also? =

The plugin will disable the given features for everyone (including site administration) at this stage. However, we are looking to disable this in our update.

= I need to Hard Refresh (CTRL + F5) my Page, but the CTRL Key Function is Locked. What now? = 

Simply move your mouse pointer into your browser's URL (address) bar and then execute CTRL + F5 for a hard refresh. This function will (like all other content protection measures through the plugin), remain UN-executable in the current window, however, trigger from the URL/address bar. This was tested on all major browsers (latest versions).

= Will your WP Content Copy Protection Plugin affect my Advertising (Adsense)? =

Absolutely not! Although this plugin locks your content and prevents it from being copied by anyone else, your advertising blocks will remain UN-touched and UN-affected. These blocks will function without any trouble, and will work with Adsense, Chitika, as well as most other advertising programs.

= Why Did you Exclude The 'alert-message' (Popup) Function? =

This function was removed mainly due to the fact that it could scare away your website visitors - cause a higher bounce rate - and essentially defame your website.

= Does your Plugin work on all major Browsers? =

This plugin works on all major browsers. The full functionality (features) of this plugin was tested on the latest versions of IE (Internet Explorer), Mozilla FF, and Chrome without any problems.

= How do I manually Disable my Image Link URL as Users Can Still LEFT Click on my Images? =

When uploading an image to your blog post - simply select the 'none' option just below your link URL (in the image uploading window). This will disable the LEFT click function on the image. The plugin will take care of the rest!

= How do I Change The Javascript Error Message? = 

Should you wish to change the current Javascript error message, simple go to Line: 35 in the fwpconsec.php file and change it there (replace the existing message). Our upcoming version will include the necessary administration.

= How do I Change the Font and the Background Color of the JS Error Message? =

Once again, navigate to Line: 35 in the fwpconsec.php file and change it there. The current color code is: #FFF000 (Yellow). You can also change your font and font size here.

= Why did you Decide to Re-enable Text Selection ? =

The text selection function was re-enabled simply to give users more "freedom" (knowing that even with text selection - they are still unable to actually copy any selected text). This way, the users are also LESS aware of the actual protection running in the backend (in hope of decreasing bounce rate). 

== Changelog ==

= 1.0.1 =
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

= Version 1.0.1 =

First Release Version

= Version 1.0.2 =

* Added Javascript Error Message Function (Serves blank pages until user enables his/her JS)
* Added mobile image hold/copy protection (works on most mobile devices)

= 1.0.3 = 
* Added function to automatically remove the image link URL and defaults the image upload settings to 'none' (deters image theft)
* Fixed a bug that prevented text input (via forms) in Chrome browsers
* Did some housekeeping