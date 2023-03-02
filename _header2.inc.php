<?php

	ob_start();

	$S = 'Ellahouse';

	$T = explode("/",$_SERVER['SCRIPT_NAME']);
	$T = array_pop($T);
	$T = ucfirst(substr($T,0,-4));

	include("_svg.inc.php");

?><!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
							
	<title><?=$T?> - <?=$S?></title>
	<meta name="description" content="Ellahouse">
			
	<link rel="stylesheet" href="dist/css.php">					
								
</head>
<body<?php if(!empty($bodyclass)) { ?> class="<?php echo $bodyclass; ?>"<?php } ?>>

	<header class="header">

		<a class="logo" href="#">
			<img class="desktop" src="img/logo-new-2.svg">
		</a>

		<nav>
			<ul>
				<li><a href="01a-homepage.php#top">HOME</a></li>	         
				<li><a href="01a-homepage.php#section1">At a Glance</a></li>
				<li><a href="01a-homepage.php#section2">How it works</a></li> 
				<li><a href="01a-homepage.php#section3">KEY FEATURes</a></li>
				<li><a href="01a-homepage.php#section4">AT YOUR SERVICE</a></li>   
				<li><a href="02-contact.php">Contact</a></li>
				<li><a href="01a-homepage.php#section6">Sustainability</a></li>
				<li><a href="01a-homepage.php#section7">ENQUIRE</a></li>
			</ul>
		</nav>

		<div class="connect">
			<ul>
				<li><a href="#">Facebook</a></li>
				<li><a href="#">Twitter</a></li>
				<li><a href="#">Linkedin</a></li>
			</ul>
		</div>

		<a class="open-mobile-menu" href="#"><span></span></a>

		<a class="open-connect" href="#"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"><path d="M579.8 267.7c56.5-56.5 56.5-148 0-204.5c-50-50-128.8-56.5-186.3-15.4l-1.6 1.1c-14.4 10.3-17.7 30.3-7.4 44.6s30.3 17.7 44.6 7.4l1.6-1.1c32.1-22.9 76-19.3 103.8 8.6c31.5 31.5 31.5 82.5 0 114L422.3 334.8c-31.5 31.5-82.5 31.5-114 0c-27.9-27.9-31.5-71.8-8.6-103.8l1.1-1.6c10.3-14.4 6.9-34.4-7.4-44.6s-34.4-6.9-44.6 7.4l-1.1 1.6C206.5 251.2 213 330 263 380c56.5 56.5 148 56.5 204.5 0L579.8 267.7zM60.2 244.3c-56.5 56.5-56.5 148 0 204.5c50 50 128.8 56.5 186.3 15.4l1.6-1.1c14.4-10.3 17.7-30.3 7.4-44.6s-30.3-17.7-44.6-7.4l-1.6 1.1c-32.1 22.9-76 19.3-103.8-8.6C74 372 74 321 105.5 289.5L217.7 177.2c31.5-31.5 82.5-31.5 114 0c27.9 27.9 31.5 71.8 8.6 103.9l-1.1 1.6c-10.3 14.4-6.9 34.4 7.4 44.6s34.4 6.9 44.6-7.4l1.1-1.6C433.5 260.8 427 182 377 132c-56.5-56.5-148-56.5-204.5 0L60.2 244.3z"/></svg></a>

	</header>

	<div class="wrapper">

	