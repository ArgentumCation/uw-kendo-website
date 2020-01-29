<script type="text/javascript" language="JavaScript">
<!-- Copyright 2002 Bontrager Connection, LLC
//
// Type the number of images you are rotating.

NumberOfImagesToRotate = 3;

// Specify the first and last part of the image tag.

FirstPart = '<img src="error';
LastPart = '.jpg">';

function printImage() {
var r = Math.ceil(Math.random() * NumberOfImagesToRotate);
document.write(FirstPart + r + LastPart);
}
//-->
</script>

<?
$title = 'om nom nom';

define('PAGEDISPLAY', 'display');

$displayMode = (isset($_GET['p'])) ? $_GET['p'] : 'OM NOM NOM NOM';

$subNavi = array("404 file not found");
$subNaviL = array("index.php");
$subNaviS = 0;

$mainContent = <<<EOD

<div id="linkuSan">

<p>
<script type="text/javascript" language="JavaScript"><!--
printImage();
//--></script>
</p>
<p>
<strong>The requested page does not exist, sorry!<br /></strong>
<a href="http://students.washington.edu/uwkc/">Home</a>
</p>

</div>

EOD;

require_once('display.php'); 

?>