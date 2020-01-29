<?php
	include('includes/header.php');
	include('includes/header2.php');
	include('includes/functions.php');

	$section = "overview";

	$pages = array("overview", "history", "instructors", "officers", "mailinglist");
	$titles = array("Overview", "History", "Instructors", "Club Officers", "Mailing List");

	if(isset($_GET['x'])){
		$temp = $_GET['x'];

		for($index=0; $index < sizeof($pages); $index++){
			if($temp == $pages[$index]){
				$section = $temp;
				break;
			}
		}
	}

?>

<div id="about">

<?php

	printLink("about", $pages, $section, $titles, 0);

	for($index=1; $index < sizeof($pages); $index++){
		echo " | ";
		printLink("about", $pages, $section, $titles, $index);
	}
?>

<br />
<br />

<?php
	switch($section){
		case "overview":
			include('includes/about/overview.php');
			break;
		case "history":
			include('includes/about/history.php');
			break;
		case "instructors":
			include('includes/about/instructors.php');
			break;
		case "officers":
			include('includes/about/officers.php');
			break;
		case "mailinglist":
			include('includes/about/mailinglist.php');
			break;
	}
?>

</div>

<?php include('includes/footer.php'); ?>