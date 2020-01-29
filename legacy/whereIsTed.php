<?php
	$locations = file("locations.txt", FILE_IGNORE_NEW_LINES);
	if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['newLocation'])) {
		array_push($locations, $_POST['newLocation']);
		$fp = fopen("locations.txt", "w+");
		foreach($locations as $key => $value){
			fwrite($fp, $value."\n");
		}
	}
?>
<!DOCTYPE html>
<html lang="en">
<!--  
	whereIsTed.php
	Corey Chan
 -->
<head>
<style>
	body{ text-align: center; font-family: Tahoma, Geneva, sans-serif;}
	h1{ margin-top: 0; margin-bottom: 0; }
 	form{ width:20em; margin:auto; position:relative; }
</style>
<meta charset="utf-8" />
<title>Where is Ted?</title>
<meta name="description" content="Ted's last known locations">		
</head>
<body>
	<h1>Where is Ted?</h1>
	<div class="content">
		<?php
			echo $locations[rand(0,sizeof($locations))]." we think...";
		?>
	</div>
	<img src="http://i.imgur.com/aWirvYd.png?1" alt=""></img>
	<p>Have you seen Ted? Tell us where you last saw him!</p>
	<form action="<?= $_SERVER['PHP_SELF'] ?>" method="POST">
		<input type="text" name="newLocation" class="form-control" placeholder="We're worried">
	</form>
	<audio controls="controls" autoplay="autoplay" loop="loop">
  		<source src="butterfly.ogg" type="audio/ogg" />
 	 	<source src="butterfly.mp3" type="audio/mpeg">
 	 	<embed height="50" width="100" src="butterfly.mp3">
	</audio> 
</body>
</html>