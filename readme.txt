=== LH Sortable Tables ===
Contributors: shawfactor
Donate link: http://lhero.org/portfolio/lh-sortable-tables/
Tags: table, order, sorter, sortable, tablesorter
Requires at least: 4.0
Tested up to: 6.0
Stable tag: trunk

No more old static tables, make your HTML tables sortable.

== Description ==

Table Sorter turns standard HTML table (with THEAD and TBODY tags) in your post, page, or CPT content into a sortable table without page refresh. It has many useful features including : 

1. Multi-column sorting.
2. Disable sorting from particular column(s).
3. Different sorting types.
4. Cross-browser support

To make a table just add class="sortable" to the table element in the html view.

**NOTE** Unlike other plugins this plugin will not unneccessarily slow down your site. The javascript to add the sorting is only added to the page is the above class is added to a table in the content.

As the javascript is vanilla it is unlikely to connflict with other plugins

This plugin uses Jonas Earendel's  <a href="https://github.com/tofsjonas/sortable">Sortable table library</a>. So advanced documenation can be found there and its many other features can be found there.

**View a demo here: [https://lhero.org/sortable-table-demo/](https://lhero.org/sortable-table-demo/).**

**Like this plugin? Please consider [leaving a 5-star review](https://wordpress.org/support/view/plugin-reviews/lh-sortable-tables/).**

**Love this plugin or want to help the LocalHero Project? Please consider [making a donation](https://lhero.org/portfolio/lh-sortable-tables/).**

== Frequently Asked Questions ==

= Why is it better to use vanilla javascript?  =

Vanilla javascript means using plain JavaScript without any additional libraries like jQuery. Using vanilla js maximises compatibility, minimises code bloat, and gives you the best chance that the functionality will still work as browsers change.

= What tags do I need to make the table sortable?  =

Firstly you need a table with the class="sortable" (this ensures the javascript and css are added)

You also need the table header to follow the standard thead->tr->th nesting and the table body to follow the standard tbody->tr->td nesting for sorting to work.

= How can I change the styling of the css tables?  =

The styling added by the plugin is neutral, and there are deliberately no options with this plugin. But if you want your own styling that harmonises with your site there are filters. The filters can be viewed in the code. 

And an example is here: [https://lhero.org/portfolio/lh-sortable-tables/#modifying-the-table-css](https://lhero.org/portfolio/lh-sortable-tables/#modifying-the-table-css)

= How is this better than other plugins that provide this functionality?  =

This plugin ONLY adds the javascript and css if a table with the class="sortable" id exists in the post, page or CPT content. This means assets are not added unnnecessarily (and thus slow down your site). This plugin also uses the best javascript library for table sorting I can find, with many additional features.

= What is something does not work?  =

LH Sortable Tables, and all [https://lhero.org](LocalHero) plugins are made to WordPress standards. Therefore they should work with all well coded plugins and themes. However not all plugins and themes are well coded (and this includes many popular ones). 

If something does not work properly, firstly deactivate ALL other plugins and switch to one of the themes that come with core, e.g. twentyfirteen, twentysixteen etc.

If the problem persists pleasse leave a post in the support forum: [https://wordpress.org/support/plugin/lh-sortable-tables/](https://wordpress.org/support/plugin/lh-sortable-tables/) . I look there regularly and resolve most queries.

= Are there any other requirements?  =

This plugin relies on the [https://developer.wordpress.org/reference/hooks/wp_body_open/](wp_body_open) hook. 98% of themes include it and it is now a standard. If yours does not, create a child theme, or get a better theme.

= What if I need a feature that is not in the plugin?  =

Please contact me for custom work and enhancements here: [https://shawfactor.com/contact/](https://shawfactor.com/contact/)


== Installation ==

Install using WordPress:

1. Log in and go to *Plugins* and click on *Add New*.
2. Search for *lh-sortable-tables* and hit the *Install Now* link in the results. WordPress will install it.
3. From the Plugin Management page in WordPress, activate the *lh-sortable-tables* plugin.
4. That is it, no settings are required for this plugin

Install manually:

1. Download the plugin zip file and unzip it.
2. Upload the plugin contents into your WordPress installation*s plugin directory on the server. The plugins .php files, readme.txt and subfolders should be installed in the *wp-content/plugins/lh-sortable-tables/* directory.
3. From the Plugin Management page in WordPress, activate the *lh-sortable-tables* plugin.
4. That is it, no settings are required for this plugin


== Changelog ==

= 1.00 - October 04, 2020 =
* Inital release

= 1.01- October 11, 2020 =
* Added filters to exclude or change the css