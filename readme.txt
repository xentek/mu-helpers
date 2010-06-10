=== MU-Helpers ===
Contributors: xenlab
Donate link: http://j.mp/donate-to-xentek
Tags: wordpressmu, wpmu, helper functions
Requires at least: 2.9
Tested up to: 2.9.2
Stable tag: trunk
 
Helper functions to make developing solutions with WordPress MU or BuddyPress easier…

== Description ==

Helper functions to make developing solutions with WordPress MU or BuddyPress easier. Right now there is a function to return all posts from all blogs, and one to return all comments on all blogs. The code is well commented with phpdoc blocks, so read the source for more info. This plugin is for developers and will do nothing on its own (except provide functions to developers that don't exist in the core API)

== Installation ==

1. Download the mu-helpers.zip file, unzip and upload the whole directory to the `/wp-content/plugins/` directory
1. Activate the plugin through the 'Plugins' menu in WordPress.
1. Utilize the functions it provides in building your own plugins or in your theme.

== Frequently Asked Questions ==

= Why would I want this? =

If you've ever tried to develop complex solutions with WordPress MU or BuddyPress then no doubt you've found that there are quite a few functions missing from the API, especially when trying to pull content from all of the blogs on your MU instance. This plugin represents an evolving library of functions to make these types of tasks easier to complete.

= I want to help with development of this Plugin! =

The project is now hosted on [github.com](http://github.com/xentek/mu-helpers). Just fork the project and send me a pull request.

[New to git?](http://delicious.com/ericmarden/git)

== Screenshots ==

1. This screen shot description corresponds to screenshot-1.(png|jpg|jpeg|gif). Note that the screenshot is taken from
the directory of the stable readme.txt, so in this case, `/tags/4.3/screenshot-1.png` (or jpg, jpeg, gif)
2. This is the second screen shot

== Changelog ==

= 0.7 =
* Added `get_all_blog_comments()` function

= 0.5 =
* Using quicksort algorithm to efficiently order the merged posts array

= 0.1 =
* Added `get_all_blog_posts()` function

== Upgrade Notice ==

= 0.7 =
Added a new function: `get_all_blog_comments`

== License ==

The WordPress-MU Helpers plugin was developed by Eric Marden, and is provided with out warranty under the GPLv2 License. More info and other plugins at: http://xentek.net

Copyright 2010  Eric Marden  (email : wp@xentek.net)

This program is free software; you can redistribute it and/or modify it under the terms of the GNU General Public License as published by the Free Software Foundation; either version 2 of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the GNU General Public License for more details.

You should have received a copy of the GNU General Public License along with this program; if not, write to the Free Software Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA