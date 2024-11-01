<?php
/*
Plugin Name: WP-NoIndex
Version: 0.1
Plugin URI: http://notes.rudomilov.ru/wp-noindex/
Description: WP-NoIndex allows you to increase profit in selling links (SAPE, Mainlink and etc).
Author: Ilya Rudomilov
Author URI: http://www.rudomilov.ru/
*/

remove_filter('the_content', 'wptexturize');
add_filter('the_content', 'noindex_replace');
remove_filter('the_excerpt', 'wptexturize');
add_filter('the_excerpt', 'noindex_replace');

function noindex_replace($content) {
	
	$content = str_replace("</a>","</a></noindex>", $content);
	$content = str_replace("<a","<noindex><a", $content);
	
	$content = str_replace("</a></noindex></noindex>","</a></noindex>", $content);
	$content = str_replace("<noindex><noindex><a","<noindex><a", $content);	
	
	return $content;
	
}

?>
