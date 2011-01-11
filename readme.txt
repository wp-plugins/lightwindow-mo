=== Plugin Name ===
Contributors: mo1984
Donate link: http://mo1984.com/
Tags: lightwindow
Requires at least: 2.0.2
Tested up to: 2.1
Stable tag: 1.0

Here is a short description of the plugin.  This should be no more than 150 characters.  No markup here.

== Description ==

lightwindow-mo是老莫基于lightwindow v2.0进行修改得来的一个插件，原理是通过短代码的形式来实现lightwindow弹窗效果，同时通过设置相关属性值就可以实现窗体大小，标题等的自定义，因为老莫不太懂代码，所以此插件处于研发测试阶段，如果发现问题，欢迎大家与我联系。

下一步目标，将插件各属性值设置添加到文章编辑器内，通过点击编辑器内按钮，弹出属性设置对话框，然后直接在文章内填出相应代码。如果哪位高人可以实现这个功能的话，希望能让我学习学习。

版权说明：此插件CSS,JS代码部分版权归lightwindow v2.0的作者所有，老莫只是对其进行一些修改应用。如果大家觉得代码不对或者不符合大家需要的，欢迎自行修改。但希望保留老莫和lightwindow的版权信息，谢谢！

== Installation ==

This section describes how to install the plugin and get it working.

e.g.

1. Upload `lightwindow-mo`Folder to the `/wp-content/plugins/` directory
1. Activate the plugin through the 'Plugins' menu in WordPress

1、通用短代码【lw】
t=“要显示的弹窗链接名”，w=“宽度”，h=“高度”，其中t是可以省略的。如果你要的是Flash文件的弹窗效果，那么w,h属性是必须的，不然弹窗无法正常显示，如果是网页、图片的弹窗，w,h也可省略，默认为最大化。
代码使用方法：
[lw t=要显示的弹窗链接名 w=宽 h=高] 链接网址（ps:【lw】短代码只支持网址形式，如果是html代码的，请参考下面的【hlw】短代码） [/lw]

2、下载列表短代码【dlw】
代码使用方法：
[*dlw did="自定义值" t="要显示的链接文字"]下载链接列表（如：本站下载 | 115网盘下载）[*/dlw]（*号自己去掉）
“did”和“t”都可以省略，但是如果要在一篇文章内显示多个列表时，“did”必须，且不同列表要设定不同的值（英文字母或数字）
相应的下载说明文字可到插件编辑中修改。当然如果你不嫌麻烦，可以在插件里添加一个属性，然后每次发表文章的时候进行自定义版权说明，老莫比较懒，就还是用固定说明就好了，嘿嘿

3、自定义HTML代码弹窗短代码【hlw】
【lw】只能实现链接地址的弹窗，当你需要的弹窗不是链接地址，而是一段HTML代码的时候，这个短代码就能实现你想要的，其实这个和上面的下载列表弹窗是一样的，不过被老莫独立出来。
代码使用方法：

[*hlw hid="自定义值" w="宽" h="高" t="要显示的链接文字"]html代码[*/hlw]
“hid”和上面的下载列表弹窗中的“did”是一样的功能，“w”、“h”、“t”就不用介绍了，这4个属性都可以省略不填，如果有时候弹窗无法正常显示时，建议填写“w”、“h”

4、视频弹窗短代码【vlw】
代码使用方法：

[*vlw v1="地址1" t1="视频1名" v2="地址2" t2="视频2名" v3="地址3" t3="视频3名" v4="地址4" t4="视频4名" v5="地址5" t5="视频5名" w="宽" h="高"] 视频列表总标题（可以不填）[*/vlw]
目前只支持swf，且一行区域只能设置5个，超过5个再用次【vlw】代码，或者修改插件文件。w、t必须设置。



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


