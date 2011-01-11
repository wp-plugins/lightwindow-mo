=== Plugin Name ===
Contributors: mo1984
Donate link: http://mo1984.com/
Tags: lightwindow,mo1984
Requires at least: 2.0.2
Tested up to: 2.1
Stable tag: 1.0

Here is a short description of the plugin.  This should be no more than 150 characters.  No markup here.

== Description ==

lightwindow-mo is a flipwindow plugin,Use short code to flip the window,base on lightwindow v2.0

== Installation ==

This section describes how to install the plugin and get it working.

e.g.

1. Upload `lightwindow-mo`Folder to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress
3.shotcode [lw][/lw]
t="name"，w="width"，h="height",if you need Flash flipwindow，w and h is necessary,if you need website or picture flipwindow,t and w and h is unnecessary.
usage：
[lw t=name w="width" h="height"] url [/lw]

4.shortcode [dlw][/dlw]
usage：
[dlw did="" t=""]downloadlist(such as:webdisk | on my site)[/dlw]

5.shortcode[hlw][/hlw]
usage:
[hlw hid="" w="" h="" t=""]html code[/hlw]


6.shortcode [vlw][/vlw]
usage:
[vlw v1="video url" t1="video name" v2="" t2="" v3="" t3="" v4="" t4="" v5="" t5="" w="" h=""] list name [/vlw]

more information please see the readme in zip.

== Frequently Asked Questions ==

= A question that someone might have =

An answer to that question.

= What about foo bar? =

Answer to foo bar dilemma.

== Screenshots ==

1. This screen shot description corresponds to screenshot-1.(png|jpg|jpeg|gif). Note that the screenshot is taken from
the directory of the stable readme.txt, so in this case, `/tags/4.3/screenshot-1.png` (or jpg, jpeg, gif)
2. This is the second screen shot

== Changelog ==

= 1.0 =


== Arbitrary section ==

You may provide arbitrary sections, in the same format as the ones above.  This may be of use for extremely complicated
plugins where more information needs to be conveyed that doesn't fit into the categories of "description" or
"installation."  Arbitrary sections will be shown below the built-in sections outlined above.

== A brief Markdown Example ==

Ordered list:

1. Some feature
1. Another feature
1. Something else about the plugin

Unordered list:

* something
* something else
* third thing

Here's a link to [WordPress](http://wordpress.org/ "Your favorite software") and one to [Markdown's Syntax Documentation][markdown syntax].
Titles are optional, naturally.

[markdown syntax]: http://daringfireball.net/projects/markdown/syntax
            "Markdown is what the parser uses to process much of the readme file"

Markdown uses email style notation for blockquotes and I've been told:
> Asterisks for *emphasis*. Double it up  for **strong**.

`<?php code(); // goes in backticks ?>`


