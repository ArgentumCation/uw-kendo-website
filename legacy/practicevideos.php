<?
$title = 'Practice Videos';

define('PAGEDISPLAY', 'display');

$displayMode = (isset($_GET['p'])) ? $_GET['p'] : 'Practice Videos';

$subNavi = array("Practice Videos");
$subNaviL = array("practicevideos.php");
$subNaviS = 0;

$mainContent = <<<EOD

<div id="videoInfo">
<p>Here's a playlist of any recorded practices.</p>
</div>

<span class="subtitle">2014 - 2015</span>
<iframe width="560" height="315" src="//www.youtube.com/embed/D2yNjvgZsR0?list=PLvJpZoRyrWt1u9kxdLWcU9t4ObhtG6pMg" frameborder="0" allowfullscreen></iframe>
EOD;
require_once('display.php' ); 

?>