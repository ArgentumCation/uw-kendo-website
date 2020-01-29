<?
$title = 'Resources';

$expandNav = 7;

define('PAGEDISPLAY', 'display');

$displayMode = (isset($_GET['p'])) ? $_GET['p'] : 'main';

$subNavi = array("Warm Up", "Vocabulary", "Etiquette",);
$subNaviL = array("resources.php", "resources.php?p=vocab", "resources.php?p=etiquette");
$subNaviS = 0;

switch (strtolower($displayMode)) {
	case 'vocab':
		$title = 'vocab';
		$subNaviS = 1;
		require_once('includes/resources_vocab.php');
		break;
	case 'etiquette':
		$title = 'Etiquette';
		$subNaviS = 2;
		require_once('includes/resources_etiquette.php');
		break;
	default:
		$title = 'Warm Up';
		require_once('includes/resources_warmup.php');
		break;
}

require_once('display.php'); 

?>