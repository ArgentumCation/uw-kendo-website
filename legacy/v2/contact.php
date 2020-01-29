<?php
	include('includes/header.php');
	include('includes/header2.php');
?>

<div id="contact">

<?php

$warning = "";

if (($_POST[name] == "") || ($_POST[email] == "") ||
    ($_POST[message] == "")) {
?>

To contact us, fill out this form or email us at <img src="Emails/uwkc.gif" />.
<br />
<br />
Contact information for specific officers can be found <a href="about.php?x=officers">here</a>.
<br />
<br />

<?php
	if(isset($_POST[seenform])){
		echo "<font class=\"pcolor\">All fields must be completed.</font>\n<br />\n<br />";
	}
?>

<form method="post" action="contact.php">
<table border="0" cellspacing="0" cellpadding="5">
	<tr>
		<td>Name:</td>
		<td><input type="text" size="40" name="name" value="<?php echo $_POST[name]; ?>" /></td>
	</tr>
	<tr>
		<td>Email:</td>
		<td><input type="text" size="40" name="email" value="<?php echo $_POST[email]; ?>" /></td>
	</tr>
	<tr>
		<td>Comments/<br />Questions:</td>
		<td><textarea rows="7" cols="50" name="message"><?php echo $_POST[message]; ?></textarea></td>
	</tr>
	<tr>
		<td><input type="text" size="40" name="subject" value="" style="display:none" /></td>
	</tr>
</table>

<br />
<input type="hidden" name="seenform" value="true" />
<input type="submit" value="Send Comments/Questions" />

</form>

<br />

</div>

<?php
} else {

	if ( $_POST[subject] == "" ){
		$msg = "$_POST[message]\n";

		$to = "uwkc@u.washington.edu";

		$subject = "Web Site Comments/Questions";

		$mailheaders = "From: $_POST[name] <$_POST[email]>\n";
		mail($to, $subject, $msg, $mailheaders);
		?>

		The following e-mail has been sent:

		<P><strong>Your Name:</strong><br>
		<?php echo "$_POST[name]"; ?>
		<P><strong>Your E-Mail Address:</strong><br>
		<?php echo "$_POST[email]"; ?>
		<P><strong>Message:</strong><br>
		<?php echo "$_POST[message]"; ?>
<?php
	} else {
		echo "Go away spammer!";
	}
}
?>

</div>
</div>
</body>
</html>