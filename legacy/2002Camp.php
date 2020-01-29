<?
$title = '2002 Camping Trip';

define('PAGEDISPLAY', 'display');

$expandNav = 3;

$displayMode = (isset($_GET['p'])) ? $_GET['p'] : 'main';

$subNavi = array("Photos");
$subNaviL = array("photos.php?p=2002");
$subNaviS = 0;

$picture = 1;

if(isset($_GET['x'])){
	$temp = $_GET["x"];
	if($temp > 0 && $temp < 65){
		$picture = $temp;
	}
}

$image = "photos/2002/02_camp/";

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

$mainContent = <<<EOD
<p><span class="subtitle">2002 UW Kendo Club Camping Trip</span><br />
<div style="height: 20px; padding: 0 10px;">
EOD;
if($picture > 1){
	$mainContent .= "<span style=\"float:left;clear:left;\"><a href=\"2002Camp.php?x=" . ($picture - 1) . "\">Previous</a></span>";
}
if($picture < 64){
	$mainContent .= "<span style=\"float:right;clear:right;\"><a href=\"2002Camp.php?x=" . ($picture + 1) . "\">Next</a></span>";
}

$mainContent .= <<<EOD
</div>
<br/>
</p>
<div style="text-align:center;">
	<a href="{$image}"><img src="{$image}" border="0" width="500" alt ="" /></a><br />
	{$captions[$picture-1]}
</div>
EOD;

require_once('display.php'); 

?>