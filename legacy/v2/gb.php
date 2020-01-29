<?php
	include('includes/header.php');
	include('includes/header2.php');
	include('includes/functions.php');

	$filename = "includes/guestbook/guestbook_data.dat";
	$section = "view";

	$pages = array("view", "sign");
	$titles = array("View Guestbook", "Sign Guestbook");

	if(isset($_GET['x'])){
		$temp = $_GET['x'];

		if($temp == "view" || $temp == "sign"){
			$section = $temp;
		}
	}

	printLink("gb", $pages, $section, $titles, 0);
	echo " | ";
	printLink("gb", $pages, $section, $titles, 1);
?>
<br />
<br />

<div id="guestbook">

<?php
	if($section == "sign"){
		include('includes/guestbook/sign.php');
	} else {
		include('includes/guestbook/view.php');
	}
?>

</div>
<?php
	include('includes/footer.php');
?>
