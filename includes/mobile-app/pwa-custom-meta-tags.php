<?
//Load Font Awesome and Set Web App Title
add_action( 'wp_head', function () { ?>
<meta name="apple-mobile-web-app-title" content="Checkers">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, viewport-fit=cover"/>
<meta name="theme-color" media="(prefers-color-scheme: light)" content="#008A4D">
<meta name="theme-color" media="(prefers-color-scheme: dark)" content="#008A4D">
<meta name="apple-mobile-web-app-status-bar-style" content="dark">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="mobile-web-app-capable" content="yes">
<link rel="manifest" href="/pwa/manifest.json">
<script src="/pwa/safari-links.js"></script>
<script src="https://kit.fontawesome.com/4525b274fc.js" crossorigin="anonymous"></script>
<script src="/pwa/pwabuilder-sw.js"></script>
<script src="/pwa/pwabuilder-sw-register.js" type="module"></script>

<?php } );