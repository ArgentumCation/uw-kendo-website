<?php include('includes/header.php');

	$picture = 1;

	if(isset($_GET['x'])){
		$temp = $_GET["x"];
		if($temp > 0 && $temp < 65){
			$picture = $temp;
		}
	}

	$image = "../photos/2002/02_camp/";

	if($picture < 10){
		$image .= "0";
	}

	$image .= "${picture}.jpg";

	$captions = array("The first tent is up!",
		"'Good work, boys'",
		"It's Darrick!",
		"Three Amigos",
		"",
		"Smile for the camera!",
		"Emmalee hard at work",
		"Lewis saying something witty",
		"Haha.. They're not done yet!",
		"Fun at the beach",
		"",
		"",
		"",
		"Playing catch",
		"",
		"Throwing like a girl, #1",
		"It's Morpheus!",
		"Dan looking his best",
		"Look what I've got..",
		"It's a butterfly!",
		"Ok, so it's a moth.",
		"You're free!  ",
		"The rocks, being skipped in action.",
		"Smile!",
		"Throwing like a girl, #2",
		"The rock skipping master in action.",
		"The competition.",
		"The throw.",
		":-)",
		"",
		"Dunking the new guy in bogu.. sort of.",
		"Great job Lewis!",
		"Your newest wallpaper (find the flat ones!)",
		"Getting sleepy..",
		"The tide is invading",
		"",
		"Well, duh!",
		"The first cut..",
		"Strike one!",
		"Man make fire",
		"Playing with fire.",
		"Man vs Log",
		"Eric hard at work.  The Lumberjack looks on.",
		"Henry Kissinger hard at work",
		"It's the Lumberjack!",
		"And he's OK!",
		"The hard-working president.",
		"",
		"Limwel demonstrates the one-hand technique.",
		"",
		"Feeling hungry?",
		"Dinner",
		"",
		"",
		"Das Brot, bitte.",
		"",
		"Glowstick fun.",
		"Nighttime!",
		"Fireside chat",
		"Fireside chat continued",
		"Mark contemplating Simpsons Trivia.  Darrick celebrating.",
		"Liquid fire?",
		"The day after.. ",
		"Packing up.");
?>
<br />
<br />
<div id="rightside">
<div class="content">
<div class="photos">

<div class="title">2002 UW Kendo Club Camping Trip</div><br />

<table border="0" cellspacing="0" cellpadding="0" align="center">
	<tr>
		<td width="120"><?php
				if($picture > 1){
					echo "<a href=\"2002-Camp.php?x=" . ($picture - 1) . "\">Previous</a>";
				}
			?></td>
		<td><a href="<?php echo "$image" ?>"><img src="<?php echo "$image" ?>" border="0" height="360" alt =""></img></a><br /><br />
						<?php echo $captions[$picture-1] ?></td>
		<td width="120"><?php
				if($picture < 64){
					echo "<a href=\"2002-Camp.php?x=" . ($picture + 1) . "\">Next</a>";
				}
			?></td>
	</tr>
</table>

<br />
Back to <a href="photos.php?x=2002">photos</a>.

</div>

<?php include('includes/footer.php'); ?>