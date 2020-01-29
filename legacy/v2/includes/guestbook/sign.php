<?php
	$filterWords = array("viagra","penis", "shit ", "fuck", "cunt",
						"whore", "slut", "asshole", "bastard", "cialis",
						"rgergerger", "www.wildorchidz.com", "adult cam",
						"webcam", "web cam");

	$emailFilter = array( "pent@yandex.ru" );

	if(isset($_POST[seenform])){
		if ( $_POST[subject] == "" ){
			if($_POST[message] != "" && $_POST[name] != ""){

				$appropriate = true;

				$n = "$_POST[name]";
				$n = trim($n);
				$n = htmlentities($n, ENT_QUOTES);
				$e = "$_POST[email]";
				$e = trim($e);
				$e = htmlentities($e, ENT_QUOTES);
				$d = "$_POST[dojo]";
				$d = trim($d);
				$d = htmlentities($d, ENT_QUOTES);
				$m = "$_POST[message]";
				$m = trim($m);

				if ( $e != "" ){
					for ( $i = 0; $i < sizeof($emailFilter); $i++ )
					{
						if ( strcmp( $emailFilter[i], $e ) == 0 )
						{
							echo "<font class=\"pcolor\"><b>You're a spammer, go away!<b /></font>\n<br />\n<br />";
							exit;
						}
					}
				}

				if(eregi("<a.+>.+</a>", $m) || eregi("[url.+].[/url]", $m) || eregi("http", $m)){
					echo "<font class=\"pcolor\"><b>Due to spam, links not allowed.</b></font>\n<br />\n<br />";
				} else {
					$m = htmlentities($m, ENT_QUOTES);
					$m = str_replace("\n","<br />",$m);
					$m = str_replace("\r","",$m);
					$t = date("r");

					$addData = "$n\n$e\n$d\n$m\n$t\n";

					for($i = 0; $i < sizeof($filterWords); $i++){
						if(ereg($filterWords[$i], $addData)){
							$appropriate = false;
							break;
						}
					}

					if(!$appropriate){
						echo "<font class=\"pcolor\"><b>Inappropriate material mentioned.</b></font>\n<br />\n<br />";
					} else {

					// $filename is initialized in gb.php
					$f = fopen($filename, "a");

						while(!flock($f, LOCK_EX));
						fwrite($f, $addData);
						flock($f, LOCK_UN);
						fclose($f);

						// Send Email Notifying Addition. Important in case of spam entry!
						$addData = "$n$e$d$_POST[message]\n$t\n";
						$to = "uwkc@u.washington.edu";
						$subject = "Added Guestbook Entry";
						mail($to, $subject, $addData, $mailheaders);

						// Redirect to guestbook
						header("Location: http://students.washington.edu/uwkc/gb.php");

						exit;
					}
				}
			} else {
				echo "<font class=\"pcolor\"><b>You must leave your name and a comment to sign the guestbook!<b /></font>\n<br />\n<br />";
			}
		} else {
			echo "<font class=\"pcolor\"><b>Go away spammer!!<b /></font>\n<br />\n<br />";
		}
	}
?>

<form method="post" action="gb.php?x=sign">
<b>
<table border="0" cellspacing="0" cellpadding="5">
	<tr>
		<td>Name:</td>
		<td><input type="text" size="40" name="name" value="<?php echo $_POST[name]; ?>" /></td>
	</tr>
	<tr>
		<td>Email:</td>
		<td><input type="text" size="40" name="email" value="<?php echo $_POST[email]; ?>" /> <i>(Optional)</i></td>
	</tr>
	<tr>
		<td>Dojo:</td>
		<td><input type="text" size="40" name="dojo" value="<?php echo $_POST[dojo]; ?>" /> <i>(Optional)</i></td>
	<tr>
		<td>Comments:</td>
		<td><textarea rows="7" cols="50" name="message"><?php echo $_POST[message]; ?></textarea></td>
	</tr>
	<tr>
		<td><input type="text" size="40" name="subject" value="" style="display: none" /></td>
	</tr>
</table>
</b>
<br />
<input type="hidden" name="seenform" value="true" />
<input type="submit" value="Sign Guestbook" />

</form>
