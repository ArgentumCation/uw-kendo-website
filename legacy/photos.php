<?
$title = 'Photos';

define('PAGEDISPLAY', 'display');

$expandNav = 1;

$maxYear = 2009;
$minYear = 1998;

$year = $maxYear;
if(isset($_GET['p'])){
	$temp = (int)$_GET["p"];
	if($temp >= $minYear && $temp <= $maxYear ){
		$year = $temp;
	}
}

$subNavi = array("Photos");
$subNaviL = array("photos.php");
$subNaviS = 0;

$mainContent = "<div id=\"photos\">\n<p>";

for ($i = $maxYear; $i >= $minYear; $i--) {
	if ($i != $maxYear) {
		$mainContent .= " | ";
	}
	if ($i == $year) {
		$mainContent .= $year;
	} else {
		$mainContent .= '<a href="photos.php?p='.$i.'">'.$i.'</a>';
	}
}

$mainContent .= "</p>";

$mainContent .= <<<EOD
<p>
Click on a picture below to see a larger/more detailed version. (Thumbnails are not indicators of
picture quality.) Most photographs have been run through the autolevels filter in Photoshop. It
works wonders.
<br />
<br />
Gee I wonder where all the photos from 2010 to the present are?  Maybe <a href="https://www.facebook.com/uwkendoclub" target="_blank">Facebook?</a>
</p>
EOD;

function displayPhotos($taikai, $numOfPhotos, $photoPrefix, $captions){
	global $mainContent;

	$mainContent .= '<p><span class="subtitle">' . $taikai . '</span><br />';
	$numOfCaptions = sizeof($captions);

	for($index = 1; $index <= $numOfPhotos; $index++){
		$imageNum = "";

		if($index < 10){
			$imageNum ="0";
		}

		$imageNum .= "$index";

		$mainContent .= '<a href="/uwkc/photos/' . $photoPrefix . '/' . $imageNum . '.jpg">';
		$mainContent .= '<img src="/uwkc/photos/' . $photoPrefix . '/t-' . $imageNum . '.jpg" border="0" alt="" title="';

		$captionNum = $index - 1;
		if($captionNum < $numOfCaptions){
			$mainContent .= substr($captions[$captionNum], 0, strlen($captions[$captionNum]) - 1);
		}

		$mainContent .= "\" /></a>\n";
	}
	$mainContent .= '</p>';
}

$photosDir = getcwd() . "/photos/" . $year;

$files = scandir($photosDir, 1);

$numEvents = sizeof($files) - 2;

for ( $index = 0; $index < $numEvents; $index++ ){
	$titleName = $year . " " . substr($files[$index], 3);
	$titleName = preg_replace('~_~', ' ', $titleName);

	if ( $titleName == "2002 camp" ){
		$mainContent .= <<<EOD
<p>
<span class="subtitle">2002 Camping Trip</span><br/>
<i>Any similarity, actual or implied, between UWKC members and the individuals depicted
<a href="2002Camp.php">here</a> is purely coincidental.</i>
</p>
EOD;
		continue;
	}

	$folderName = $year . "/" . $files[$index];

	$photos = scandir($photosDir . "/" . $files[$index]);

	$numPhotos = sizeof($photos) - 2;

	$captions = NULL;

	if ( $numPhotos % 2 == 1 ){
		$numPhotos--;
		$captions = file($photosDir . "/" . $files[$index] . "/captions.txt");
	}

	displayPhotos($titleName, $numPhotos/2, $folderName, $captions);

}

$mainContent .= "</div>";


require_once('display.php'); 

?>