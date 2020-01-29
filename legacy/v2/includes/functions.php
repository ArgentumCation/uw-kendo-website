<?php

function guestBookEntry($gName, $gEmail, $gDojo, $gComment, $gTime){
?>
	<b>
	<font class="pcolor">Name:</font> <?php echo $gName; ?><br />
	<font class="pcolor">Email:</font> <?php echo $gEmail; ?><br />
	<font class="pcolor">Dojo:</font> <?php echo $gDojo; ?><br />
	<font class="pcolor">Comment:</font> <?php echo $gComment; ?><br />
	</b>
	<i><?php echo $gTime; ?></i><br /><br />
<?php
}

function printLink($pagename, $pages, $section, $titles, $index){
	if($pages[$index] != $section){
		echo "<a href=\"${pagename}.php?x=$pages[$index]\">$titles[$index]</a>";
	} else {
		echo "$titles[$index]";
	}
}

function printLinkTable($tableName, $imagenames, $columns, $links, $linktitles){

	echo "<table border=\"0\" cellspacing=\"0\" cellpadding=\"10\" align=\"center\">";

	$w = floor(100/$columns);
	for($i = 0; $i < $columns; $i++){
		echo "\n<col width=\"${w}%\" />";
	}

	echo "\n\t<tr>\n\t\t<th colspan=\"$columns\"><font class=\"titles\">$tableName</font></th>\n\t</tr>";

	$numOfLinks = sizeof($links);
	$numOfImages = sizeof($imagenames);
	$r = ceil($numOfLinks/$columns);

	for($i = 0; $i < $r; $i++){
		echo "\n\t<tr>\n";
		for($j = 0; $j < $columns; $j++){
			$linkNum = $i*$columns + $j;
			if($linkNum < $numOfLinks){
				echo "\t\t<td align=\"center\">";
				if($linkNum < $numOfImages){
					echo "<img src=\"$imagenames[$linkNum]\" alt=\"\"></img><br /><br />\n\t\t";
				}
				echo"<a href=\"$links[$linkNum]\">$linktitles[$linkNum]</a></td>\n";
			}
		}
		echo "\t</tr>\n";
	}

	echo "</table>";
}

function displayLogoTitle($heading){
?>
	<table border="0" cellspacing="0" cellpadding="10" align="center">
		<tr>
			<td><img src="Logo3D-Small.gif" border="0" alt=""></img></td>
			<td><font class="pcolor"><?php echo $heading; ?></font></td>
			<td><img src="Logo3D-Small.gif" border="0" alt=""></img></td>
		</tr>
	</table>
<?php
}

function displayPhotos($taikai, $numOfPhotos, $photoPrefix, $captions){
	displayLogoTitle($taikai);
	$numOfCaptions = sizeof($captions);

	for($index = 1; $index <= $numOfPhotos; $index++){
		$imageNum = "";

		if($index < 10){
			$imageNum ="0";
		}

		$imageNum .= "$index";

		echo "<a href=\"/uwkc/photos/$photoPrefix/${imageNum}.jpg\">";
		echo "<img src=\"/uwkc/photos/$photoPrefix/t-${imageNum}.jpg\" border=\"0\" alt=\"\" title=\"";
		$captionNum = $index - 1;
		if($captionNum < $numOfCaptions){
			echo substr($captions[$captionNum], 0, strlen($captions[$captionNum]) - 1);
		}

		echo "\" /></a>\n";
	}
}

?>