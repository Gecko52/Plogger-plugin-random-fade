<?php
/* Plogger Plugin Meta Template

$plugin_name: The name of your plugin
$version: Plugin version
$author: Name of the plugin author
$url: Link to the plugin website or author url
$description: Description of the plugin
$license: Type of license plugin is released under
$instructions: Instructions for use beyond the inclusion code
*/
$plugin_name = 'Random Fade';
$version = '1.1';
$author = 'B &amp; J Graphics';
$url = 'http://www.bnjgraphics.com/" target="_blank';
$description = 'Displays a specified number of random thumbnails from your PhoGal gallery Albums on your website. This updated Plugin can now show any selected Album on any given page, now using a java script image fade and replace rotating effect.<br />';
$license = 'GNU General Public License (GPL)';
$gallery_dir = SmartStripSlashes($config['baseurl']); //added for the src path correction
$instructions = '<strong>The above generated code is incomplete for this plugin! DO NOT USE</strong><br /><br />
1. Place the following code into the &lt;head&gt; section of the the page(s) where you would like the Random Fade Images.<br /><br />

<strong>
&lt;style type=&quot;text/css&quot;&gt; <br />
.slideshow { height: 200px; width: 200px; margin: auto } <br />
.slideshow img { padding: 15px; border: 1px solid #ccc; background-color: #eee; } <br />
&lt;/style&gt; <br />
&lt;script type="text/javascript" src="'.$gallery_dir.'plog-content/plugins/'.$plugin_folder_basename.'/jquery.min.js"&gt;&lt;/script&gt; <br />
&lt;script type="text/javascript" src="'.$gallery_dir.'plog-content/plugins/'.$plugin_folder_basename.'/jquery.cycle.all.latest.js"&gt;&lt;/script&gt; <br/>

&lt;script type=&quot;text/javascript&quot;&gt;  <br/>
&#36;(document).ready(function() &#123; <br />
    &#36;(&#39;.slideshow&#39;).cycle(&#123; <br />
		fx: &#39;fade&#39; // choose your transition type, ex: fade, scrollUp, shuffle, etc... <br />
	&#125;); <br />
&#125;); <br />
&lt;/script&gt;
</strong>
<br/><br/>
2. To use all your Collection images place the Following code on the page where you would like the Random Fade Images thumbnails to be shown.<br /><br />
<strong> &lt;div class=&quot;slideshow&quot;&gt; <br />
&lt;?php include(\''.$plugin_folder_name.$plugin_folder_basename.'.php\'); ?&gt; <br />
&lt;/div&gt; </strong><br/><br />

To set the Random Fade Images for a Spacific Album use the Following code on the page where you would like the Random Fade Images thumbnails to be shown. <strong>You will need to change the 1 ($gal_id =&#39;1&#39;) to the number matching the Album you want to use.</strong><br /><br />
<strong>&lt;?php $gal_id =&#39;1&#39;; ?&gt; <br /> &lt;div class=&quot;slideshow&quot;&gt; <br />
&lt;?php include(\''.$plugin_folder_name.$plugin_folder_basename.'.php\'); ?&gt; <br />
&lt;/div&gt; </strong><br/><br />

3. Check the <a href="'.$gallery_dir.'plog-content/plugins/'.$plugin_folder_basename.'/readme.html" target="_blank"><strong>/random-fade/readme.html</strong></a> file for additional instructions on configuration options and usage.<br /><br />

4. Thumbnail styling information can be found in the <strong>/random-fade/readme.txt</strong> file under <strong>Additional Notes</strong>.';
?>
