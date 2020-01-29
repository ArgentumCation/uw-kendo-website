<?php
	include('includes/header.php');
	include('includes/header2.php');
	include('includes/functions.php');

	$section = "main";

	$pages = array("main", "members", "foundingfive", "others");
	$titles = array("Main", "Members", "Founding Five", "Others");

	if(isset($_GET['x'])){
			$temp = $_GET['x'];

			for($index=0; $index < sizeof($pages); $index++){
				if($temp == $pages[$index]){
					$section = $temp;
					break;
				}
			}
	}

	printLink("alumni", $pages, $section, $titles, 0);

	for($index=1; $index < sizeof($pages); $index++){
			echo " | ";
			printLink("alumni", $pages, $section, $titles, $index);
	}
?>

<br /><br/>

<div id="alumni">

<?php

	switch($section){
		case "main":
?>

<table border="0" cellspacing="0" cellpadding="10" align="center">
	<tr>
		<td><img src="Logo3D-Small.gif" alt=""></img></td>
		<td><div class="title">Main</div></td>
		<td><img src="Logo3D-Small.gif" alt=""></img></td>
	</tr>
</table>

<center>The Kendo Club at UW has had a regional, national, and international impact on Kendo development
and leadership far beyond the proportion mere numbers might suggest.  Kendo Club at UW alumni
have gone on to such offices as: President of the All-United States Kendo Federation, Director of
the International Kendo Federation, all offices on the PNKF Board of Directors, PNKF team members
to the National Championships and US Team members to the World Championships.<br /><br />

Alumni: Please contact Elizabeth Marsten at <img src="Emails/elizabeth.gif" /> to join the alumni association.
<br /></center>

<?php
			break;
		case "members":
			include('includes/alumni/members.php');
			break;
		case "foundingfive":
			include('includes/alumni/foundingfive.php');
			break;
		case "others":
			include('includes/alumni/others.php');
			break;
	}
?>

</div>

<?php include('includes/footer.php'); ?>