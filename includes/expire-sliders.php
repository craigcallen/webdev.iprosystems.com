<?php
// Expire weekly ads on ACF expiry date field.
if (!wp_next_scheduled('expire_sliders')){
	wp_schedule_event(time(), 'hourly', 'expire_sliders'); // this can be hourly, twicedaily, or daily
  }
  
  add_action('expire_sliders', 'expire_sliders_function');
  
  function expire_sliders_function() {
	  $today = date('Ymd');
	  $args = array(
		  'post_type' => array('slider'), // post types you want to check
		  'posts_per_page' => -1 
	  );
	  $posts = get_posts($args);
	  foreach($posts as $p){
		  $expiredate = get_field('arg_slider_end_date', $p->ID, false, false); // get the raw date from the db MUST CHANGE ACF FIELD VALUE
		  if ($expiredate) {
			  if($expiredate < $today){
				  $postdata = array(
					  'ID' => $p->ID,
					  'post_status' => 'trash'
				  );
				  wp_update_post($postdata);
			  }
		  }
	  }
  }