<?php
	include('includes/header.php');
	include('includes/header2.php');
	include('includes/functions.php');

	$section = "federations";

	$pages = array("federations", "pnkf", "colleges", "other");
	$titles = array("Affiliated Federations", "Pacific Northwest Kendo Federation Dojos",
					"Other Collegiate Kendo Clubs", "Useful Links");

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

<div id="links">

<?php
	for($index=0; $index < sizeof($pages); $index++){
		printLink("links", $pages, $section, $titles, $index);

		echo " | ";

		$index++;

		printLink("links", $pages, $section, $titles, $index);

		echo "<br />";
	}
?>

<br />

<?php
	switch($section){
		case "federations":
			include('includes/links/fedlinks.php');
			break;
		case "pnkf":
			include('includes/links/pnkflinks.php');
			break;
		case "colleges":
			include('includes/links/collegelinks.php');
			break;
		case "other":
			include('includes/links/otherlinks.php');
			break;
	}
?>

</div>

<?php include('includes/footer.php'); ?>