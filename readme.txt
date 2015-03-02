=== Surbma - Recent Comments Shortcode ===
Contributors: Surbma
Donate link: http://surbma.com/
Tags: jetpack
Requires at least: 3.0
Tested up to: 4.1
Stable tag: 1.0.0
License: GPLv2
License URI: http://www.gnu.org/licenses/gpl-2.0.html

A simple shortcode to display recent comments.

== Description ==

A simple shortcode to display recent comments. You can use it in text widgets or with every shortcode enabled page builder.

The shortcode:
`[recent-comments]`
`[recent-comments number="10" author="" title=""]`

There are six parameters for this shortcode:

1. number - Number of comments to return. Leave blank to return all comments. Default: 5
2. order - How to sort comments: 'ASC' (Ascending - lowest to highest) or 'DESC' (Descending - highest to lowest). Default: DESC
3. author - Do you want to hide the author? Just give an empty parameter: author=""
4. title - Do you want to hide the title? Just give an empty parameter: title=""
5. excerpt - Do you want to hide the excerpt? Just give an empty parameter: excerpt=""
6. morelink - You can specify the text of the more link. Do you want to hide the more link? Just give an empty parameter: morelink=""

There is no mandatory parameter, you can use the shortcode as is.

IMPORTANT! This (or any other) shortcode is working only in a widget, if you or the theme has enabled the use of shortcodes in widgets. I'm not giving any description how you can do it, because there are a lot of posts out there. You can do a search for this: wordpress enable shortcodes in widgets

== Installation ==

1. Upload `surbma-recent-comments-shortcode` folder to the `/wp-content/plugins/` directory
2. Activate the Surbma - Recent Comments Shortcode plugin through the 'Plugins' menu in WordPress
3. That's it. Now you can use the shortcode. :)

== Frequently Asked Questions ==

= Why doesn't work the shortcode in a text widget? =

Because you have to enable this function. By default, Wordpress does not allow you to use shortcodes in widgets. I'm not giving any description how you can do it, because there are a lot of posts out there. You can do a search for this: wordpress enable shortcodes in widgets

= What does Surbma mean? =

It is the reverse version of my last name. ;)

== Changelog ==

= 1.0.0 =

- Initial release.
