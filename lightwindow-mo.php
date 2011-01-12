<?php
/*
Plugin Name: lightwindow-mo
Plugin URI: http://www.mo1984.com/archives/lightwindow-mo.html
Description: 简洁代码（t,w,h可选择性填写）：[lw t="显示的连接名" w="宽" h="高"]文件地址[/lw]，下载页面代码（可直接[dlw][/dlw]）：[dlw did="自定义值" t="要显示的链接文字"]下载链接列表[/dlw]，自定义HTML页面代码：[hlw hid="自定义值" w="宽" h="高" t="要显示的链接文字"]html代码[/hlw]，视频代码：[vlw v1="地址1" t1="视频1名" v2="地址2" t2="视频2名" w="宽" h="高"]视频列表总标题[/vlw]目前只支持swf，且一行区域只能设置5个，超过5个再用次代码，或者修改插件文件。标明有宽高的，必须设置。
Author: mo1984 
Author URI: http://www.mo1984.com/
Version: 1.0
Put in /wp-content/plugins/ of your Wordpress installation
*/
/* Add lightwindow-mo Code */

/*-- 简洁代码 --*/
function lightwindow($atts, $content=null){
extract(shortcode_atts(array(
"t" => '',"w" => '',"h" => ''
), $atts));
	return '<div id="sh">'.$t.' 弹窗查看</div><div id="moshow"><p><a href="'.$content.'" class="lightwindow page-options" params="lightwindow_width='.$w.',lightwindow_height='.$h.'" title="'.$t.'">点击查看…'.$t.'</a><br>Tip:点击链接会弹出'.$t.'页面,请在网页加载完成之后点击！</p></div>';
}

add_shortcode('lw','lightwindow');


/*-- 下载页面代码 --*/
function download($atts, $content=null){
	extract(shortcode_atts(array(
"did" => '',"t" => ''
), $atts));
	return '<div id="sh">【'.$t.'】 下载列表</div>
<div id="moshow"><p><a href="#'.$did.'download" class="lightwindow page-options" title="'.$t.'下载列表">点击查看【'.$t.'】下载列表</a><br>Tip:点击链接会弹出【'.$t.'】下载列表页面,请在网页加载完成之后点击！</p></div>
<div id="'.$did.'download" style="display:none">
<div align="center" style=" width: 500px; height: 200px;">
 <p style="line-height:200%">&nbsp;</p>
	<p style="line-height:200%"><strong>免责申明</strong></p>
<p></p><p></p>
<p align="left" style="line-height:200%">1、本站资源大多由老莫从网络或者其他渠道收集而来，仅供学习和研究使用，不得用于任何商业用途。如本站不慎侵犯你的版权请<a href="mailto:mo@mo1984.com">联系老莫</a>，我将及时处理，并撤下相关内容！</p>
<p align="left" style="line-height:200%">2、如标明为老莫或者老莫朋友原创的，请大家在转载前先与<a href="mailto:mo@mo1984.com">老莫联系</a>，请不要随意转载！</p>
<p style="line-height:200%">&nbsp;</p>
<p style="line-height:200%"><strong>下载地址列表</strong></p>
<p style="line-height:200%">&nbsp;</p>
<p style="line-height:200%">'.$content.'</span>
<p style="line-height:100%">&nbsp;</p>
<p style="line-height:200%">如无法下载，请与老莫联系，联系方式请见网站侧边栏</p>
</div>
</div>
';
}

add_shortcode('dlw','download');

/*-- 自定义HTML页面代码 --*/
function htmllightwindow($atts, $content=null){
extract(shortcode_atts(array(
"hid" => '',"w" => '',"h" => '',"t"=> ''
), $atts));
	return '<div id="sh">'.$t.' 弹窗查看</div>
<div id="moshow"><p><a href="#'.$hid.'lshow" class="lightwindow page-options" params="lightwindow_width='.$w.',lightwindow_height='.$h.'" title="'.$t.'">点击查看…'.$t.'</a><br>Tip:点击链接会弹出【'.$t.'】页面,请在网页加载完成之后点击！</p></div>
<div id="'.$hid.'lshow" style="display:none">
'.$content.'
</div>
';
}

add_shortcode('hlw','htmllightwindow');

function vodplay($atts, $content=null){
extract(shortcode_atts(array(
"v1" => 'http://',"v2" => 'http://',"v3" => 'http://',"v4" => 'http://',"v5" => 'http://',"w" => '',"h" => '',"t1" => '',"t2" => '',"t3" => '',"t4" => '',"t5" => ''
), $atts));
	return '<div id="vodlist">
<ul>
<li><a href="'.$v1.'" class="lightwindow page-options" params="lightwindow_width='.$w.',lightwindow_height='.$h.'" title="'.$content.' - '.$t1.'">'.$t1.'</a></li>
<li><a href="'.$v2.'" class="lightwindow page-options" params="lightwindow_width='.$w.',lightwindow_height='.$h.'" title="'.$content.' - '.$t2.'">'.$t2.'</a></li>
<li><a href="'.$v3.'" class="lightwindow page-options" params="lightwindow_width='.$w.',lightwindow_height='.$h.'" title="'.$content.' - '.$t3.'">'.$t3.'</a></li>
<li><a href="'.$v4.'" class="lightwindow page-options" params="lightwindow_width='.$w.',lightwindow_height='.$h.'" title="'.$content.' - '.$t4.'">'.$t4.'</a></li>
<li><a href="'.$v5.'" class="lightwindow page-options" params="lightwindow_width='.$w.',lightwindow_height='.$h.'" title="'.$content.' - '.$t5.'">'.$t5.'</a></li>
</ul></div>';
}

add_shortcode('vlw','vodplay');



function lightwindow_head() {
	print('
        <link rel="stylesheet" type="text/css" href="'.get_bloginfo('wpurl').'/wp-content/plugins/lightwindow-mo/css/lightwindow-mo.css" />
	<script type="text/javascript" src="'.get_bloginfo('wpurl').'/wp-content/plugins/lightwindow-mo/javascript/prototype.js"></script>
	<script type="text/javascript" src="'.get_bloginfo('wpurl').'/wp-content/plugins/lightwindow-mo/javascript/effects.js"></script>
	<script type="text/javascript" src="'.get_bloginfo('wpurl').'/wp-content/plugins/lightwindow-mo/javascript/lightwindow.js"></script>
	');
}
add_action('wp_head', 'lightwindow_head');

 ?>