<?php
add_action('wp_head', 'custom_meta_tags');
function custom_meta_tags(){
?>
	<script src="https://kit.fontawesome.com/4525b274fc.js" crossorigin="anonymous"></script>
	<meta name="apple-mobile-web-app-title" content="ARG">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, viewport-fit=cover"/>
	<meta name="theme-color" media="(prefers-color-scheme: light)" content="#FFFFFF">
	<meta name="theme-color" media="(prefers-color-scheme: dark)" content="#FFFFFF">
	<meta name="apple-mobile-web-app-status-bar-style" content="dark">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="mobile-web-app-capable" content="yes">
	<script src="https://c.swiftlyads.net/sdk/swiftly-ads-sdk.min.js" data-account-key="d227a4db-85d6-443b-96c0-e45b8da5d34c" data-primary-color="#3D8129"></script>

<?php
};