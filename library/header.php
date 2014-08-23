<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no"/>
	<title>
		<?php
			include "setting/conf.php";
       		$query = mysql_query("select * from setting");
      		while ($buff = mysql_fetch_array($query)) 
        	{ echo $buff['nama_set']; }
    	?>
	</title>

	<link rel="shortcut icon" href="images/favicon.ico">

	<link rel="stylesheet" type="text/css" href="asset/css/style.css"/>
	<link rel="stylesheet" type="text/css" href="asset/css/loader.css"/>
	<link rel="stylesheet" type="text/css" href="asset/3dParty/rs-plugin/css/pi.settings.css"/>
	<link rel="stylesheet" type="text/css" href="asset/css/slider.css"/>
	<link rel="stylesheet" type="text/css" href="asset/css/counters.css"/>
	<link rel="stylesheet" type="text/css" href="asset/css/galleries.css"/>
	<link rel="stylesheet" type="text/css" href="asset/css/images.css"/>
	<link rel="stylesheet" type="text/css" href="asset/css/portfolio.css"/>
	<link rel="stylesheet" type="text/css" href="asset/css/alert-boxes.css"/>
	<link rel="stylesheet" type="text/css" href="asset/css/animations.css"/>
	<link rel="stylesheet" type="text/css" href="asset/3dParty/colorbox/colorbox.css"/>
	
	<link rel="stylesheet" type="text/css" href="asset/css/tooltips.css"/>
	<link rel="stylesheet" type="text/css" href="asset/css/testimonials.css"/>
	<link rel="stylesheet" type="text/css" href="asset/css/accordion.css"/>
	<link rel="stylesheet" type="text/css" href="asset/css/page-nav.css"/>
	<link rel="stylesheet" type="text/css" href="asset/css/tabs.css"/>

	

	<!--Fonts-->
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&amp;subset=latin,cyrillic'
		  rel='stylesheet' type='text/css'>

	<!--Fonts with Icons-->
	<link rel="stylesheet" href="asset/3dParty/fontello/css/fontello.css"/>

</head>