<?
$title = 'Taikai Videos';

define('PAGEDISPLAY', 'display');

$displayMode = (isset($_GET['p'])) ? $_GET['p'] : 'Taikai Videos';

$subNavi = array("Taikai Videos");
$subNaviL = array("taikaivideos.php");
$subNaviS = 0;

$mainContent = <<<EOD

<div id="videoInfo">
<p>Here are playlists of any recorded taikai matches.</p>
</div>

<div class="subtitle" style="margin-top: 10px">2015 Highline Taikai</div>
<iframe width="560" height="315" src="//www.youtube.com/embed/videoseries?list=PLvJpZoRyrWt2h1j7-gJA2oV6YeS8xehxe" frameborder="0" allowfullscreen></iframe>

<div class="subtitle" style="margin-top: 10px">2014 PNKF Taikai</div>
<iframe width="560" height="315" src="//www.youtube.com/embed/videoseries?list=PLvJpZoRyrWt3RH63KmihEJvndG3pTGxmW" frameborder="0" allowfullscreen></iframe>

<div class="subtitle" style="margin-top: 10px">2014 UW Taikai</div>
<iframe width="560" height="315" src="//www.youtube.com/embed/videoseries?list=PLvJpZoRyrWt0ro-riAIG_q28RJsr7zVXi" frameborder="0" allowfullscreen></iframe>

<div class="subtitle" style="margin-top: 10px">2014 BCKF Taikai</div>
<iframe width="560" height="315" src="//www.youtube.com/embed/videoseries?list=PLvJpZoRyrWt0pat9XzESUEYBai7ynVl9V" frameborder="0" allowfullscreen></iframe>

<div class="subtitle" style="margin-top: 10px">2014 Highline Taikai</div>
<iframe width="560" height="315" src="//www.youtube.com/embed/videoseries?list=PLvJpZoRyrWt0z0-7WSvu7OEqO-6i3wyEV" frameborder="0" allowfullscreen></iframe>
EOD;
require_once('display.php' ); 

?>