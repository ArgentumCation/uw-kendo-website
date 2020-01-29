<?php
	include('includes/header.php');
	include('includes/header2.php');
	include('includes/functions.php');

	$page="awards.php";

	$year = 2009;

	if(isset($_GET['x'])){
		$temp = (int)$_GET["x"];
		if($temp > 2000 && $temp <= $year ){
			$year = $temp;
		}
	}

	include('includes/years.php');
?>

<div id="awards">

<?php
	switch($year){
		case 2009:
		displayLogoTitle("2009 Steveston Taikai");
?>
3-1 Kyu - Young Shim - 3rd place<br /><br />
<?php
			break;
		case 2008:
		displayLogoTitle("2008 Kent Taikai");
?>
0-4 Kyu - Stephan Moore - 3rd place<br /><br />
<?php
		displayLogoTitle("2008 Tacoma Taikai");
?>
Adult Kyu Team - 1st Place<br /><br />
<?php
		displayLogoTitle("2008 PNKF Taikai");
?>
Adult 0-4 Kyu - Damon Tsai - 1st Place<br />
Adult 3-1 Kyu - Young Shim - 2nd Place<br /><br />
<?php
			break;
		case 2007:
		displayLogoTitle("2007 PNKF Taikai");
?>
Women's Kyu - Kathy Liao - 1st Place<br />
Women's Kyu - Erica Tam - 2nd Place<br /><br />
<?php
		displayLogoTitle("2007 Tacoma Taikai");
?>
Kyu Team - 1st Place<br /><br />
<?php
		displayLogoTitle("2007 PNKF Women's Taikai");
?>
Women's Kyu - Erica Tam - 3rd Place<br /><br />
<?php
		displayLogoTitle("2007 UW Taikai");
?>
1-3 Kyu - Leroy Um - 1st Place<br /><br />
Shoji Inspirational Award - Ken Eguro<br /><br />
<?php
		displayLogoTitle("2007 Highline Taikai");
?>
Leroy Um - 4th Place<br /><br />

<?php
			displayLogoTitle("2007 Steveston Taikai");
?>
Women's 1 Dan & Under - Kyoka Hinami - 1st Place<br /><br />
<?php
			break;
		case 2006:
			displayLogoTitle("2006 PNKF Taikai");
?>

Women's Kyu - Erica Tam - 2nd Place<br /><br />

<?php
			displayLogoTitle("2006 Harvard Shoryuhai Taikai");
?>

Team - 3rd Place<br /><br />

<?php
			displayLogoTitle("2006 UW Taikai");
?>

0-4 Kyu - Shin Inoue - 2nd Place<br />
0-4 Kyu - Erica Tam - 3rd Place<br />
1-3 Kyu - Brian Hur - 3rd Place<br />
Shoji Inspirational Award - Roger Yau<br /><br />

<?php
			displayLogoTitle("2006 Highline Taikai");
?>

Team - 1st Place<br />
Takashi Maruo - 1st Place<br />
Ken Eguro - 4th Place<br /><br />

<?php
			displayLogoTitle("2006 Steveston Taikai");
?>

1-3 Kyu - Roger Yau - 3rd Place<br /><br />

<?php
			break;
		case 2005:
			displayLogoTitle("2005 Kent Taikai");
?>

1-3 Dan - Garrett Suzaka - 3rd Place<br />
Women's Open - Kathy Kang - 3rd Place<br /><br />

<?php
			displayLogoTitle("2005 PNKF Taikai");
?>

Woman's Mudansha - Kathy Kang - 1st Place<br /><br />

<?php
			displayLogoTitle("2005 UW Taikai");
?>

1-3 Kyu - Takashi Maruo - 1st Place<br />
1-3 Kyu - Kathy Kang - 3rd Place<br />
1-3 Dan - Garrett Suzaka - 3rd Place<br />
Shoji Inspirational Award - Takashi Maruo<br /><br />

<?php
			displayLogoTitle("2005 Highline Taikai");
?>

Takashi Maruo - 1st Place<br />
Kenji McCullough - 3rd Place<br /><br />

<?php
			break;
		case 2004:
			displayLogoTitle("2004 Renton Taikai");
?>

0-4 Kyu - Kenji McCullough - 1st Place<br />
1-3 Kyu - Roger Yau - 2nd Place<br />
Senior Teams - UW - 2nd Place<br /><br />

<?php
			displayLogoTitle("2004 PNKF Taikai");
?>

0-4 Kyu - Oun Upatising - 1st Place<br />
0-4 Kyu - Trevor Campbell - 2nd Place<br />
1-3 Kyu - Roger Yau - 1st Place<br />
1-3 Dan - Garrett Suzaka - 2nd Place<br /><br />

<?php
			displayLogoTitle("2004 UW Taikai");
?>

0-4 Kyu - Oun Upatising - 2nd Place<br />
1-3 Kyu - Hyundae Kim - 1st Place<br />
1-3 Dan - Garrett Suzaka - 3rd Place<br />
Shoji Inspirational Award - Hyundae Kim<br /><br />

<?php
			displayLogoTitle("2004 Highline Taikai");
?>

1-3 Kyu - Hyundae Kim - 1st Place<br />
1-3 Kyu - Nate Jacobson - 4th Place<br />
Team - 3rd Place<br /><br />

<?php
			break;
		case 2003:
			displayLogoTitle("2003 Renton Taikai");
?>

0-4 Kyu - Roger Yau - 1st Place<br />
1-3 Kyu - Hyundae Kim -  1st Place<br />
Team - 2nd Place<br /><br />

<?php
			displayLogoTitle("2003 PNKF Taikai");
?>

0-4 Kyu - Kenji McCullough - 1st Place<br />
0-4 Kyu - C. Takahashi - 3rd Place<br />
1-3 Kyu - Hyundae Kim - 3rd Place<br />
1-2 Dan - Garrett Suzaka - 2nd Place<br /><br />

<?php
			displayLogoTitle("2003 UW Taikai");
?>

0-4 Kyu - Takashi Maruo - 3rd Place<br />
1-3 Dan - Garrett Suzaka - 1st Place<br />
Shoji Inspirational - Elizabeth Shin<br /><br />

<?php
			displayLogoTitle("2003 Highline Taikai");
?>

Eric Timm - 3rd Place

<?php
			break;
		case 2002:
			displayLogoTitle("2002 Renton Taikai");
?>

1-3 Dan - Garrett Suzaka - 1st Place<br /><br />

<?php
			displayLogoTitle("2002 PNKF Taikai");
?>

0-4 Kyu - Mark Lee - 1st Place<br />
0-4 Kyu - Mike Alquist - 3rd Place<br />
1-2 Dan - Garrett Suzaka - 2nd Place<br /><br />

<?php
			displayLogoTitle("2002 9th US National Championship");
?>

Garret Suzaka - 3rd, Sr. Youth Division; 1st Place Team Member<br /><br />

<?php
			displayLogoTitle("2002 UW Taikai");
?>

0-4 Kyu - Mark Lee - 1st Place<br />
0-4 Kyu - Hyundae Kim - 2nd Place<br />
0-4 Kyu - Aaron Lee - 3rd Place<br />
1-3 Kyu - Eric Timm - 3rd Place<br />
1-3 Kyu - Leonid Tsybert - 3rd Place<br />
1-3 Dan - Garrett Suzaka - 1st Place<br />
Shoji Inspirational Award - Leonid Tsybert<br /><br />

<?php
			displayLogoTitle("2002 Highline Taikai");
?>

Team - 1st Place<br />
Eric Timm - 2nd Place<br />
Hyundae Kim - 3rd Place<br />
Leonid Tsybert - 4th Place<br /><br />

<?php
			displayLogoTitle("2002 38th Annual Vancouver Taikai");
?>

16-20 Year Olds - Garrett Suzaka - 2nd Place

<?php
			break;
		case 2001:
			displayLogoTitle("2001 PNKF Taikai");
?>

1-2 Dan - Garrett Suzaka - 3rd Place<br /><br />

<?php
			displayLogoTitle("2001 5th Annual Shoryuhai Intercollegiate Taikai");
?>

Team - 2nd Place<br /><br />

<?php
			displayLogoTitle("2001 UW Taikai");
?>

0-4 Kyu - Eric Timm - 3rd Place<br />
Women's Open - Elizabeth Marsten - 3rd Place<br />
Shoji Inspirational Award - Elizabeth Marsten<br /><br />

<?php
			displayLogoTitle("2001 Highline Taikai");
?>

Shuji Uehara - 1st Place<br />
Eric Dycus - 2nd Place<br />
Nels Lindberg - 3rd Place<br />
Team - 1st Place<br /><br />

<?php
			displayLogoTitle("2001 37th Annual Vancouver Taikai");
?>

31-40 - Durrell Rittenberg - 3rd Place

<?php
			break;
		}
/* Renton Invitational Taikai - December 9th, 2000

Women's - Elizabeth Marsten - 2nd Place
0-4 Kyu - Leonid Tsybert - 2nd Place
1-3 Kyu - Shuji Uehara - 3rd Place
1-2 Dan - Durrell Rittenberg - 3rd Place
Team - 2nd Place
	 PNKF Taikai - November 11th, 2000

1-3 Kyu - Eric Dycus - 1st Place
1-2 Dan - Elizabeth Marsten - 3rd Place
*/

?>

</div>

<?php include('includes/footer.php'); ?>