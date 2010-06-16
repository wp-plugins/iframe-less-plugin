=== IFrame-less plugin ===
Contributors: freebiesms
Donate link: http://wordpressiframe.omadataobjects.com/
Tags: comments iframe content
Requires at least: 2.0.2
Tested up to: 2.1
Stable tag: 4.3

IFrame-less plugin is a simple and SEO friendly way to embed non-PHP dynamic content directly onto a wordpress page.


== Description ==

Not everyone who uses wordpress knows PHP. Perhaps you are more familiar with ASP.NET or JSP,but you can not just put ASP.NET or JSP code in the middle of wordpress, especially if your server does not support it.

Using an IFrame is a possibility, but it has some SEO (Search Engine Optimization) downsides, since, search engines will view that content as part of another page, and give your blog no extra credit for this content.

This plugin allows you to specify a URL, which this plugin will fetch for you, and re-display on the page, as part of the page content. Giving you the SEO advantage that an IFrame looses.

Please visit our blog at http://wordpressiframe.omadataobjects.com/


== Installation ==

To get this widget running

e.g.

1. Upload `Iframeless.php` to the `/wp-content/plugins/` directory
2. Activate the plugin through the `Plugins` menu in WordPress
3. Press Appearance | Widgets, drag the IFrame-less widget to the sidebar
4. Enter the URL of your dynamic content and press Save.


== Frequently Asked Questions ==

= Why does it say the current time? =

Purely as an example, the default URL is http://wordpressiframe.omadataobjects.com/now.php
which shows the current time on our server. 

The idea is that you change the default URL to the content you want to show.

= I have embedded a page, and all the images are missing? =

Any relative links within your dynamic content will no longer be relative to the server that served the content, but rather the wordpress blog, so if you want to include images in your content, it’s often best to have them as absolute links.


== Screenshots ==

None yet

== Changelog ==

= 1.0 =
* First release

== Upgrade Notice ==

None
