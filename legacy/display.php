<? 
if (!defined('PAGEDISPLAY'))
	exit;

if (substr_count($_SERVER['HTTP_ACCEPT_ENCODING'], 'gzip'))
	ob_start("ob_gzhandler"); 
else 
	ob_start();

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<title>Kendo Club at University of Washington - <?= $title ?></title>
	<link rel="shortcut icon" href="favicon.png" />
	<link rel="stylesheet" href="style.css" type="text/css" />
	<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
	<script type="text/javascript" src="js/prototype.js"></script>
	<script type="text/javascript" src="js/effects.js"></script>
<?

if (isset($expandNav)) {
?>
<script type="text/javascript">
<!--
	var expandNav = <?= $expandNav ?>;
//-->
</script>
<?
}
?>
	<script type="text/javascript" src="js/main.js"></script>
</head>

<body>
<div id="container">
	<div id="logo">
		<a href="index.php"><img src="images/logo.png" alt="Kendo Club at University of Washington" /></a>
	</div>
<div id="main1"><div id="main2">
	<div id="navi">
		<div class="roundtop"><div></div></div>
		<div id="naviContent">
			<ul id="naviItems">
				<li class="main">
					<a href="index.php" class="main">Home</a>
				</li>
				<li class="main">
					<a href="#" class="main">About</a>
					<ul>
						<li><a href="about.php?p=history">History</a></li>
						<li><a href="about.php?p=instructors">Instructors</a></li>
						<li><a href="about.php?p=officers">Officers</a></li>
						<li><a href="alumni.php?p=alumni">Alumni</a></li>
						<li><a href="photos.php?p=2012">Photos</a></li>
						
					</ul>
				</li>
				<li class="main"><a href="http://mailman13.u.washington.edu/mailman/listinfo/uwkendo" class="main">Mailing List</a></li>
				<li class="main"><a href="https://www.facebook.com/uwkendoclub" class="main">Club Events</a></li>
				<li class="main"><a href="payment.php" class="main">Payment</a></li>
				<li class="main">
					<a href="#" class="main">Awards</a>
					<ul>
						<li>Please check Facebook for recent results</li>
						<li><a href="awards.php?p=2018">2018</a></li>
						<li><a href="awards.php?p=2017">2017</a></li>
						<li><a href="awards.php?p=2016">2016</a></li>
						<li><a href="awards.php?p=2015">2015</a></li>
						<li><a href="awards.php?p=2014">2014</a></li>
						<li><a href="awards.php?p=2013">2013</a></li>
						<li><a href="awards.php?p=2012">2012</a></li>
						<li><a href="awards.php?p=2011">2011</a></li>
						<li><a href="awards.php?p=2010">2010</a></li>
						<li><a href="awards.php?p=2009">2009</a></li>
						<li><a href="awards.php?p=2008">2008</a></li>
						<li><a href="awards.php?p=2007">2007</a></li>
						<li><a href="awards.php?p=2006">2006</a></li>
						<li><a href="awards.php?p=2005">2005</a></li>
						<li><a href="awards.php?p=2004">2004</a></li>
						<li><a href="awards.php?p=2003">2003</a></li>
						<li><a href="awards.php?p=2002">2002</a></li>
						<li><a href="awards.php?p=2001">2001</a></li>
						<li><a href="awards.php?p=2000">2000</a></li>
					</ul>
				</li>
				
				<li class="main">
					<a href="#" class="main">Resources</a>
					<ul>
						<li><a href="resources.php?p=Warmup">Warm Up</a></li>
						<li><a href="resources.php?p=vocab">Vocabulary</a></li>
						<li><a href="resources.php?p=etiquette">Etiquette</a></li>
					</ul>
				</li> 
				<li class="main"><a href="links.php" class="main">Links</a></li>
				<li class="main">
					<a href="#" class="main">Videos</a>
					<ul>
						<li><a href="practicevideos.php">Practice Video</a></li>
						<li><a href="taikaivideos.php">Taikai Video</a></li>
					</ul>
				</li>
				<li class="main"><a href="http://students.washington.edu/uwkc/?page_id=406">(屮｀∀´)屮</a></li>
				<li class="last"><a href="http://students.washington.edu/uwkc/blog/wp-login.php" class="main">Login</a></li>
			</ul>
		</div>
		<div class="roundbottom"><div></div></div>
	</div>
	<div id="news">
		<div id="newsTab">
			<div><span>info</span></div>
		</div>
		<div id="newsContent">
<!-- NEWS GO HERE -->

<? echo file_get_contents('news.txt'); ?>

<!-- END NEWS -->
		</div>
		<div class="roundbottom"><div></div></div>
	<div id="facebook">
		Find us and pay us
		<br> <a href="https://www.facebook.com/uwkendoclub" target="_blank"><img src="FBbadge.png">
			 &nbsp;</a><a href="payment.php" target="_blank"><img src="PayPalBadge.gif"></a>
	</div>
	</div>
	<div id="middle">
		<div id="subnavicont">
			<ul id="subnavi">
<!-- SUBNAVI -->
<?
if (isset($subNavi) && isset($subNaviL) && count($subNavi) == count($subNaviL)) {
	if ($subNaviS < 0 && $subNaviS > count($subNavi)) {
		$subNaviS = 0;
	}

	for ($i = 0; $i < count($subNavi); $i++) {
		echo '				<li><a href="' . $subNaviL[$i] . '"';
		if ($i == $subNaviS)
			echo ' class="selected"';
		echo '><span>' . $subNavi[$i] . '</span></a></li>';
	}
}
?>
<!-- END SUBNAVI -->
			</ul>
		</div>
		<div id="mainContent">
<!-- MAIN STUFF HERE -->

<?= $mainContent ?>

<!-- END MAIN STUFF -->
		</div>
		<div class="roundbottom"><div></div></div>
<div id="logos">
<a href="http://www.pnkf.org/"><img src="pnkflogo.png"></a><a href="http://www.auskf.info/"><img src="auskflogo.png"></a>
</div>
	</div>
</div></div>
</div>
</body>
</html>
