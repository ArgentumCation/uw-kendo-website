<?
$title = 'About';

$expandNav = 1;

define('PAGEDISPLAY', 'display');

$displayMode = (isset($_GET['p'])) ? $_GET['p'] : 'history';

$subNavi = array("History", "Instructors", "Officers", "Alumni", "Photos");
$subNaviL = array("about.php", "about.php?p=instructors", "about.php?p=officers", "alumni.php", "photos.php");
$subNaviS = 0;

switch (strtolower($displayMode)) {
	case 'instructors':
		$title = 'Instructors';
		$subNaviS = 1;
		require_once('includes/about_instructors.php');
		break;
	case 'officers':
		$title = 'Officers';
		$subNaviS = 2;
		require_once('includes/about_officers.php');
		break;
	case 'alumni':
		$title = 'Alumni';
		$subNaviS = 3;
		require_once('alumni.php');
		break;
	case 'photos':
		$title = 'Photos';
		$subNaviS = 4;
		require_once('photos.php');
		break;	
	default:
		$title = 'History';
		require_once('includes/about_history.php');
		break;
}

require_once('display.php'); 

