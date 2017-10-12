<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
<style type="text/css">

.Content {
	text-align: center;
	font-family: "Times New Roman", Times, serif;
	font-size: 28px;
}
.Content2 {
	text-align: center;
	font-size: 22px;
	font-weight: bold;
}

.Red {
	color: #F00;
}
.text {
	font-size: 48px;
}
.text {
	font-size: 50px;
}
.WebsiteTopic {
	font-size: large;
	font-style: normal;
	color: #000000;
}
	#nav{ font-family: Times New Roman; font-size: 14px; width: 100%; float: left; margin: 0 0 1em 0; padding: 0; list-style: none; }
	#nav {list-style: none; border:0;}
	#rightnav { list-style: none; }
	#nav li { float: left; }
	#rightnav li { float: right; }
	#nav li a { margin: 0 3px 0 0; font-size:16px; display: block; padding: 8px 10px; text-decoration: none; color: #FFFFFF; background-color: #25822B; border: 1px solid #25822B;}
	<!--MJ 28/02/16 changed colour from c1c1c1 to 3333cc for border around buttons to blue and border weight from 1px to 3px for border around top buttons FROM ABOVE LINE */
	#nav li a:hover {background-color: #f2e4d5;}-->
	#nav li a:hover {background-color: #A6CCA8; color: #000000;}
	#nav a:link, a:visited {border-radius: 12px 12px 12px 12px;}

body 
{
	background-color: #FFFFFF;
}

</style>
</head>
<body>
	<div>
		<ul id="nav">
		<li><data-toggle="tooltip" title="Home page"><a href='<?php echo site_url('main/frameset1')?>'>Home</a></li>
		<li><data-toggle="tooltip" title="Sports page"><a href='<?php echo site_url('main/sports')?>'>Sports</a></li>
		<li><data-toggle="tooltip" title="Venues page"><a href='<?php echo site_url('main/venues')?>'>Venues</a></li>
		<li><data-toggle="tooltip" title="Events page"><a href='<?php echo site_url('main/events')?>'>Events</a></li>
		<li><data-toggle="tooltip" title="Officials page"><a href='<?php echo site_url('main/officials')?>'>Officials</a></li>
		<li><data-toggle="tooltip" title="Cards page"><a href='<?php echo site_url('main/cards')?>'>Cards</a></li>
		<li><data-toggle="tooltip" title="Entry Logs Page"><a href='<?php echo site_url('main/entrylogs')?>'>Entry Logs</a></li>
		<li><data-toggle="tooltip" title="Authorisations of Card page"><a href='<?php echo site_url('main/authorise_card')?>'>Authorisations of Card</a></li>
		<li><data-toggle="tooltip" title="Access Check page"><a href='<?php echo site_url('main/access_check')?>'>Access Check</a></li>
		<li><data-toggle="tooltip" title="Update Venue page"><a href='<?php echo site_url('main/adjust_venue')?>'>Update Venue</a></li>
			<ul id="rightnav">
				<li><data-toggle="tooltip" title="Help page"><a href='<?php echo site_url('main/help')?>'>Help</a></li>
				<li><data-toggle="tooltip" title="Expire All Cards page"><a href='<?php echo site_url('main/all_card_status')?>'>Expire / Cancel All</a></li>
				<li><data-toggle="tooltip" title="Cards of Group page"><a href='<?php echo site_url('main/group_card_status')?>'>Expire Group</a></li>
				<li><data-toggle="tooltip" title="Individual Card page"><a href='<?php echo site_url('main/individual_card_status')?>'>Expire Individual</a></li>
			</ul>
		</ul>
	</div>
</body>
</html>