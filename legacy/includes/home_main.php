<?php 
if (!defined('PAGEDISPLAY'))
	exit;

require('./blog/wp-blog-header.php'); 	

ob_start();
include("./includes/div.tpl");
$news = ob_get_clean();

$mainContent = <<<ENDOFTEXT

<!-- <img src="images/kendo.jpg" alt="" id="mainPic" /> -->
<img src="images/uwkc2018.jpg" alt="UWKC 2018" id="mainPic" />
$news
ENDOFTEXT;

?>
