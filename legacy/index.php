<?
$title = 'Home';

define('PAGEDISPLAY', 'display');

$displayMode = (isset($_GET['p'])) ? $_GET['p'] : 'home';

$subNavi = array("Main", "The Club", "FAQ", "Join");
$subNaviL = array("index.php", "index.php?p=club", "index.php?p=faq", "index.php?p=join");
$subNaviS = 0;

switch (strtolower($displayMode)) {
	case 'club':
		$title = 'The Club';
		$subNaviS = 1;
		require_once('includes/home_club.php');
		break;
	case 'faq':
		$title = 'FAQ';
		$subNaviS = 2;
		require_once('includes/home_faq.php');
		break;
	case 'join':
		$title = 'Join';
		$subNaviS = 3;
		require_once('includes/home_join.php');
		break;
	default:
		$title = 'Home';
		require_once('includes/home_main.php');
		break;
}

require_once('display.php'); 

?>