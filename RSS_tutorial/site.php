<?php

// If "siteName" isn't in the querystring, set the default site name to 'nettuts'
$siteName = empty($_GET['siteName']) ? 'nettuts' : $_GET['siteName'];
$siteList = array(
   'nettuts',
   'flashtuts',
   'webdesigntutsplus',
   'psdtuts',
   'vectortuts',
   'phototuts',
   'mobiletuts',
   'cgtuts',
   'audiotuts',
   'aetuts'
);

// For security reasons. If the string isn't a site name, just change to 
// nettuts instead.
if ( !in_array($siteName, $siteList) ) {
   $siteName = 'nettuts';
}

$cache = dirname(__FILE__) . "/cache/$siteName";
if( filemtime($cache) < (time() - 10800) ) {
	 // grab the site's RSS feed, via YQL
	$path = "http://query.yahooapis.com/v1/public/yql?q=";
	$path .= urlencode("SELECT * FROM feed WHERE url='http://feeds.feedburner.com/$siteName'");
	$path .= "&format=json";
	
	$feed = file_get_contents($path, true);
	
	if ( is_object($feed) && $feed->query->count ) {
	   $cachefile = fopen($cache, 'w');
	   fwrite($cachefile, $feed);
	   fclose($cachefile);
	}
}
else {
	// We already have local cache. Use that instead.
	$feed = file_get_contents($cache);
}

// Decode that shizzle
$feed = json_decode($feed);

// Include the view
include('views/site.tmpl.php');