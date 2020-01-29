<?php
	// $filename is initialized in gb.php
	if(!file_exists($filename)){
		echo "Error reading guestbook. Webmaster has been notified.";

		$msg = "Data file containing guestbook information is missing.\n";

		$to = "uwkc@u.washington.edu";

		$subject = "Guestbook Error";

		$mailheaders = "From: Website\n";
		mail($to, $subject, $msg, $mailheaders);
	} else {
		$ents = file($filename);
		$entries = array_reverse($ents);

		if(sizeof($entries) == 0){
			echo "<center><i>No entries in guestbook.</i></center>";
		} else {

			$pagesOfG = ceil(sizeof($entries) / 50);

			$showingPage = 1;
			$startingEntry = 0;

			if(isset($_GET[page])){
				if($_GET[page] > 0 && $_GET[page] <= $pagesOfG){
					$showingPage = $_GET[page];
					$startingEntry = ($showingPage - 1)*10;
				}
			}

			$endingEntry = $startingEntry + 50;

			if($endingEntry > sizeof($entries)){
				$endingEntry = sizeof($entries);
			}

			for($i = $startingEntry; $i < $endingEntry; $i++){
				$gTime = $entries[$i++];
				$gMessage = $entries[$i++];
				$gDojo = $entries[$i++];
				$gEmail = $entries[$i++];
				$gName = $entries[$i];
				guestBookEntry($gName, $gEmail, $gDojo, $gMessage, $gTime);
			}

			if($pagesOfG > 1){
				echo "<center><b>";

				if($showingPage > 1){
					$prev = $showingPage - 1;

					echo "<a href=\"gb.php?page=$prev\">Previous 10</a>\n";
				}

				if($showingPage < $pagesOfG){
					$next = $showingPage + 1;

					echo "<a href=\"gb.php?page=$next\">Next 10</a>\n";
				}
				echo "</b></center>";
			}
		}
	}
?>
