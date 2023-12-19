<?php
// Expire weekly ads on ACF expiry date field.
if (!wp_next_scheduled('expire_weekly_ads')){
	wp_schedule_event(time(), 'hourly', 'expire_weekly_ads'); // this can be hourly, twicedaily, or daily
  }
  
  add_action('expire_weekly_ads', 'expire_weekly_ads_function');
  
  function expire_weekly_ads_function() {
	  $today = date('Ymd');
	  $args = array(
		  'post_type' => array('weekly-ad'), // post types you want to check
		  'posts_per_page' => -1 
	  );
	  $posts = get_posts($args);
	  foreach($posts as $p){
		  $expiredate = get_field('arg_weekly_ad_end_date', $p->ID, false, false); // get the raw date from the db MUST CHANGE ACF FIELD VALUE
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