<?
$title = 'Misc Videos';

define('PAGEDISPLAY', 'display');

$displayMode = (isset($_GET['p'])) ? $_GET['p'] : 'Misc Videos';

$subNavi = array("Misc Videos");
$subNaviL = array("miscvideos.php");
$subNaviS = 0;

$mainContent = <<<EOD

<div id="videoInfo">
<p>Here are playlists of any miscellaneous videos.</p>
</div>

No content :(

EOD;
require_once('display.php' ); 

?>