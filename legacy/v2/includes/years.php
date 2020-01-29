<?php
	$max = 2009;
	if($year != $max){
		echo "<a href=\"${page}?x=$max\">$max</a>";
	} else {
		echo $max;
	}

	for($i=$max-1; $i>2000; $i--){
		if($i != $year){
			echo " | <a href=\"${page}?x=${i}\">$i</a>";
		} else {
			echo " | $i";
		}
	}

	echo "<br /><br />";
?>