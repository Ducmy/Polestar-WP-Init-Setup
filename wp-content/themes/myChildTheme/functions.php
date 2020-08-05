<?php

define("CACHE_CLEAR", "?".rand(1, 1000));

add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles', 11 );
function my_theme_enqueue_styles() {
    wp_enqueue_style( 'child-style', get_stylesheet_uri() );
}

function loadUniqueFile($uniqueLoad)
{
	$files = "";
	if (!is_array($uniqueLoad) || empty($uniqueLoad)) {
		return $files;
	}
 
	foreach ($uniqueLoad as $file) {
		if ($file["type"] == "css") {
			$files .= "<link rel='stylesheet' href='" . $file["src"] . CACHE_CLEAR . "' type='text/css'>\n";
		} else if ($file["type"] == "js") {
			$files .= "<script type='text/javascript' src='" . $file["src"] . CACHE_CLEAR . "'></script>\n";
		}
	}
 
	return $files;
}