<?php
// Expire weekly ads on ACF expiry date field.
if (!wp_next_scheduled('expire_alerts')){
	wp_schedule_event(time(), 'hourly', 'expire_alerts'); // this can be hourly, twicedaily, or daily
  }
  
  add_action('expire_alerts', 'expire_alerts_function');
  
  function expire_alerts_function() {
	  $today = date('Ymd');
	  $args = array(
		  'post_type' => array('alert'), // post types you want to check
		  'posts_per_page' => -1 
	  );
	  $posts = get_posts($args);
	  foreach($posts as $p){
		  $expiredate = get_field('arg_alert_end_date', $p->ID, false, false); // get the raw date from the db MUST CHANGE ACF FIELD VALUE
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