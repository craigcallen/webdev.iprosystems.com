<?php
//Sets the Current Year in Shortcode
function year_shortcode() {
	$year = date('Y');
	return $year;
}
add_shortcode('year', 'year_shortcode');