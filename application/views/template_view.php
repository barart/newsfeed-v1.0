<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--
Design by Free CSS Templates
http://www.freecsstemplates.org
Released for free under a Creative Commons Attribution 3.0 License
Name       : Accumen
Description: A two-column, fixed-width design with dark color scheme.
Version    : 1.0
Released   : 20120712
Modified by VitalySwipe
-->
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="news, blog" />
		<meta name="keywords" content="news, blog" />
		<title>NewsFeed</title>
		<link href="http://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css" />
		<link href="http://fonts.googleapis.com/css?family=Kreon" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" type="text/css" href="/css/style.css" />
		<script src="/js/jquery-1.12.0.js" type="text/javascript"></script>
		<script type="text/javascript">
		</script>
	</head>

	<body>
		<header id="header" class="header">
			<div id="logo">
				<a href="/">ОЛОЛОША</span> <span class="cms">TEAM</span></a>
			</div>
		</header><!-- /header -->	
		<div id="wrapper">		
			<div id="page">
				<div id="content">
					<div class="box">
						<?php include 'application/views/'.$main_view; ?>
					</div>
					<br class="clearfix" />
				</div>
				<br class="clearfix" />
			</div>
			<footer id="page-bottom">
				<div id="page-bottom-sidebar">
					<h3>Наши контакты</h3>
					<ul class="list">
						<li class="first">icq: 199199538</li>
						<li>skypeid: darakontem</li>
						<li class="last">email: darakon92@gmail.com</li>
					</ul>
				</div>
				<div id="page-bottom-content">
					<h3>О Компании</h3>
					<p>
			Вот дом. <br/>
			<a href="/">ОЛОЛОША TEAM</a> &copy; 2016</a>

					</p>
				</div>
				<br class="clearfix" />
			</footer>
		</div>
</html>