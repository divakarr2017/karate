=== Plugin Name ===
Contributors: aurelien, aurovrata
Tags: order, reorder, re order, order by category,order custom post type, order by categories, order category, order categories, order by taxonomy, order by taxonomies
Requires at least: 3.4
Tested up to: 4.7
Stable tag: 1.2.3
License: GPLv2
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Sort Post and Custom Post Type through drag & drop interface of selected category (or custom selected taxonomies).

== Description ==


ReOrder Post Within Categories is used to sort posts (and custom post type) in any custom order by drag & drop interface.
It works with a selected category, each category can have different order of same post.


== Installation ==

1. Upload the 'reorder-posts-within-categories' folder to the '/wp-content/plugins/' directory
2. Activate the plugin through the 'Plugins' menu in WordPress
3. Go to the settings page to activate sorting for each categories you choose.


== Screenshots ==

1. Plugin page settings
2. Re-order your post through a drag & drop interface

== FAQ ==
= Modify the reorder category query =

A filter allows you to hook into the query of the posts before your reorder them in the dashboard.  This is useful is you want to order parent terms posts and not children.  WP post category query by default include post from children terms, which will show up in the order list.  So by excluding them you are able to order only the posts of parent terms,
`
add_filter('reorder_post_within_category_query_args', 'exclude_children');
function exclude_children($args) {
    $args['tax_query'][0]['include_children']=false;
    return $args;
}`

= I want to order posts in non-hierarchical taxonomies (tags) =
By default the plugin allows you to order posts only within hierarchical taxonomies (categories).  This is done as a means to ensure one doesn't have spurious orders as allowing both tags and category ordering could lead to users trying to order a post in both and this would create issues which have not been tested by this author.  Hence tread with caution if you enable this in your functions.php file,

`add_filter('reorder_post_within_categories_and_tags', '_return__false');`

Keep in mind that you will now see `Pages` as a post type to re-order, selecting such post types which do not have any categories associated with it.
== Changelog ==
= 1.2.3 =
* bug fix: attempting to add menu pages before options are set.

= 1.2.2 =
* improved custom post selection in settings
* added filter 'reorder_post_within_categories_and_tags'

= 1.2.1 =
* added filter 'reorder_post_within_category_query_args'

= 1.2 =
* cleaned up, included better messages to ensure settings are saved after activation, else order menu is not shown
* fixed a small bug

= 1.1.7 =
* Bug fix to allow plugin to work with WP multisite network installation.
* enable editor role access to re-order menu
* fixed some languages translation issues

= 1.1.6 =
* Important bug fix (See http://wordpress.org/support/topic/updating-a-post-removes-it-from-the-custom-order). Thanks to Faison for this fix

= 1.1.5 =
* Add DE_de language

= 1.1.4 =
* Correct minor bug

= 1.1.3 =
* Add spanish translations. Special thanks to David Bravo for this !

= 1.1.2 =
* Add a plugin URI

= 1.1.1 =
* Bug Correction when a post is saving

= 1.1 =
* Change version number

= 1.0 =
* Minor Correction

= 0.1 =
* First commit; Initial version
