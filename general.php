<?php
/*
Plugin Name: Shortcodes Date | General Address
Description: Shortcode for date - [year] with attributes [year color="red" bgcolor="black"]. Address [gen] with attributes [gen color="red" bgcolor="black" linkcolor="orange" linkbg="black" link="http://kevinpichette.com" name="Kevin"] 
Version: 2016.5.25.1
Author: Kevin Pichette
Author URI: http://www.kevinpichette.com
License: GPL
Copyright: Kevin Pichettte
*/
defined( 'ABSPATH' ) or die( 'No script kiddies please!' );


add_shortcode('year','date_code');

function date_code($atts)
{
	$a = shortcode_atts(array(
			'color' => '#000000',
			'bgcolor' => '#ffffff',
		),$atts);

	$color = $a['color'];
	$bgcolor = $a['bgcolor'];

	return '&copy; Copyright - <span style="color: ' . $color . '; background: ' . $bgcolor . '">' . date('Y');
}

add_shortcode('gen','gen_add');

function gen_add($atts)
{
	$a = shortcode_atts(array(
			'color' => '#000000',
			'bgcolor' => '#ffffff',
			'linkcolor' => '#000000',
			'linkbg' => '#ffffff',
			'link' => 'http://kevinpichette.com',
			'name' => 'Kevin',
		),$atts);

	$color = $a['color'];
	$bgcolor = $a['bgcolor'];
	$linkcolor = $a['linkcolor'];
	$linkbg = $a['linkbg'];
	$link = $a['link'];
	$name = $a['name'];

	return " <span style='color:" . $color . "; background: " . $bgcolor . ";'>| Created by <a style='color: " . $linkcolor . "; background: " . $linkbg . ";' href='" . $link . "' target='_blank'>" . $name . "</a>.</span>";
}