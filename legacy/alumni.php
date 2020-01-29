<?
$title = 'Alumni';

$expandNav = 1;

define('PAGEDISPLAY', 'display');

$displayMode = (isset($_GET['p'])) ? $_GET['p'] : 'main';

$subNavi = array("Alumni", "Members", "Founding Five", "Others");
$subNaviL = array("alumni.php", "alumni.php?p=members", "alumni.php?p=ff", "alumni.php?p=others");
$subNaviS = 0;

switch (strtolower($displayMode)) {
	case 'members':
		$title = 'Members';
		$subNaviS = 1;
		require_once('includes/alumni_members.php');
		break;
	case 'ff':
		$title = 'Founding Five';
		$subNaviS = 2;
		require_once('includes/alumni_ff.php');
		break;
	case 'others':
		$title = 'Others';
		$subNaviS = 3;
		require_once('includes/alumni_others.php');
		break;
	default:
		$title = 'Alumni';
		require_once('includes/alumni_main.php');
		break;
}

require_once('display.php'); 

?>