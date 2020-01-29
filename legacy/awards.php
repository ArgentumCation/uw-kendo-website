<?
$title = 'Awards';

$expandNav = 2;

define('PAGEDISPLAY', 'display');

$maxYear = 2018;
$minYear = 2000;

$year = $maxYear;
if(isset($_GET['p'])){
	$temp = (int)$_GET["p"];
	if($temp >= $minYear && $temp <= $maxYear ){
		$year = $temp;
	}
}

$subNavi = array("Awards");
$subNaviL = array("awards.php");
$subNaviS = 0;

$mainContent = "<div id=\"awards\">\n<p>";

for ($i = $maxYear; $i >= $minYear; $i--) {
	if ($i != $maxYear) {
		$mainContent .= " | ";
	}
	if ($i == $year) {
		$mainContent .= $year;
	} else {
		$mainContent .= '<a href="awards.php?p='.$i.'">'.$i.'</a>';
	}
}

$mainContent .= "</p>";

switch ($year) {
		case 2018:
				$mainContent .= <<<EOD
<p>
<span class="subtitle">2018 Intercollegiate Taikai</span>
<ul>
	<li>2Dan and Above - T. Marsten - 1st place</li>
	<li>2Dan and Above - J. Higa - 3rd place</li>
	<li>1Dan and Below - A. Yorita - 1st place</li>
	<li>1Dan and Below - L. Gao - 2nd place</li>
	<li>1Dan and Below - J. Nguyen - 3rd place</li>	
	<li>Women's Team - 1st place</li>
</ul>
</p>

<p>
<span class="subtitle">2018 Steveston Taikai</span>
<ul>
	<li>1-3 Kyu - A. Yorita - 3rd place</li>
	<li>1-3 Kyu - J. Nguyen - 3rd place</li>	
</ul>
</p>

<p>
<span class="subtitle">2018 Highline Taikai</span>
<ul>
	<li>Mudansha - L. Gao - 3rd place</li>
</ul>
</p>

EOD;
		break;
		
		case 2017:
				$mainContent .= <<<EOD
<p>
<span class="subtitle">2017 Intercollegiate Taikai</span>
<ul>
	<li>1Kyu and Above - T. Marsten - 3rd place</li>
	<li>Women's Dan - B. Lin - 1st place</li>
	<li>Women's Dan - E. DeJong - 2nd place</li>
</ul>
</p>

<p>
<span class="subtitle">2017 Steveston Taikai</span>
<ul>
	<li>0-4 Kyu - R. Soriano - 1st place</li>
</ul>
</p>

<p>
<span class="subtitle">2017 Highline Taikai</span>
<ul>
	<li>Team - 1st Place</li>
	<li>Mudansha - R. Soriano - 1st place</li>
	<li>Mudansha - A. Yorita - 2nd place</li>
	<li>Mudansha - K. Wang - 3rd place</li>
</ul>
</p>

<p>
<span class="subtitle">41th University of Washington Taikai</span>
<ul>
	<li>Women - E. DeJong - 2nd place</li>
	<li>Women - B. Lin - 3rd place</li>
	<li>0-4 Kyu - L. Gao - 2nd place</li>
	<li>0-4 Kyu - M. Eum - 3rd place</li>

</ul>
</p>

<p>
<span class="subtitle">2017 Tacoma Taikai</span>
<ul>
	<li>Team - 2nd Place</li>
	<li>0-2 Kyu - L. Gao - 2nd place</li>
	<li>0-2 Kyu - A. Yorita - 3rd place</li>
</ul>
</p>

<p>
<span class="subtitle">2017 PNKF Taikai</span>
<ul>
	<li>Women's Kyu - E. Law - 2nd place</li>
	<li>1-3 Kyu - A. Yorita - 3rd place</li>
</ul>
</p>

<p>
<span class="subtitle">2016 Kent Taikai</span>
<ul>
	<li>1-2 Dan - J. Higa - 3rd place</li>
	<li>1-3 Kyu - A. Yorita - 2nd place</li>
</ul>
</p>

EOD;
		break;
		
	case 2016:
				$mainContent .= <<<EOD
<p>
<span class="subtitle">2016 Intercollegiate Taikai</span>
<ul>
	<li>Team - 2nd Place</li>
	<li>1Kyu - 1Dan - L. Le - 3rd place</li>
	<li>Women's Dan - E. DeJong - 1st place</li>
	<li>Women's Dan - B. Lin - 2nd place</li>
</ul>
</p>

<p>
<span class="subtitle">2016 Highline Taikai</span>
<ul>
	<li>Team - 2nd Place</li>
	<li>Mudansha - A. Yorita - 3rd place</li>
	<li>Mudansha - S. Kua - 3rd place</li>
</ul>
</p>

<p>
<span class="subtitle">40th University of Washington Taikai</span>
<ul>
	<li>3 Dan - E. DeJong - 2nd place</li>
	<li>Women's Dan - B. Lin - 2nd place</li>
	<li>0-4 Kyu - M. Eum - 1st place</li>
	<li>0-4 Kyu - A. Yorita - 2nd place</li>	
	<li>0-4 Kyu - N. Macias - 3rd place</li>
</ul>
</p>

<p>
<span class="subtitle">2016 Tacoma Taikai</span>
<ul>
	<li>2Dan - 3Dan - E. DeJong - 2nd place</li>
	<li>2Dan - 3Dan - B. Lin - 3rd place</li>
	<li>1Kyu - 1Dan - C. Ogier - 2nd place</li>
	<li>0-2 Kyu - R. Soriano - 1st place</li>
</ul>
</p>

<p>
<span class="subtitle">2016 PNKF Taikai</span>
<ul>
	<li>Women's Dan - B. Lin - 3rd place</li>
	<li>0-4 Kyu - J. Nguyen - 3rd place</li>
</ul>
</p>

<p>
<span class="subtitle">2016 Kent Taikai</span>
<ul>
	<li>1-2 Dan - C. Im - 3rd place</li>
</ul>
</p>

EOD;
		break;
		
	case 2015:
		$mainContent .= <<<EOD

EOD;
		break;	
		
	case 2014:
		$mainContent .= <<<EOD
<p>
<span class="subtitle">2014 Intercollegiate Taikai</span>
<ul>
	<li>Team - 2nd Place</li>
	<li>Shodan and Below - C. Ogier - 2nd place</li>
	<li>Women's Kyu - V. Le - 1st place</li>
	<li>Women's Kyu - N. Tang - 2nd place</li>
	<li>Women's Dan - E. DeJong - 1st place</li>
	<li>Women's Dan - M. Abe - 2nd place</li>
</ul>
</p>

<p>
<span class="subtitle">2014 Highline Taikai</span>
<ul>
	<li>Team - 1st Place</li>
	<li>Mudansha - V. Le - 2nd place</li>
	<li>Yudansha - C. Blomquist - 2nd place</li>
	<li>Yudansha - E. DeJong - 3rd place</li>	
</ul>
</p>



EOD;
		break;
	case 2013:
		$mainContent .= <<<EOD
<p>
<span class="subtitle">University of Victoria Taikai</span>
<ul>
	<li>Team - 1st place</li>
	<li>2 Dan - A. Kikkawa - 2nd Place</li>
	<li>1 Dan - H. Christianson - 1st Place</li>
	<li>1 Kyu and below - S. Stern - 1st Place</li>
	<li>1 Kyu and below - H. Kim - 2nd Place</li>	
</ul>
</p>
<p>
<span class="subtitle">51st Annual Steveston Taikai</span>
<ul>
	<li>1-3 kyu - N. Sung - 3rd place</li>
</ul>
</p>

<p>
<span class="subtitle">36th Anniversary Highline Mudansha Cup</span>
<ul>
	<li>Team - 1st Place</li>
	<li>Yudansha - H. Christianson - 3rd place</li>
	<li>Mudansha - H. Kim - 2nd place</li>
</ul>
</p>

<p>
<span class="subtitle">37th University of Washington Taikai</span>
<ul>
	<li>3 Dan and above - A. Kikkawa - 1st place</li>
	<li>1-2 Dan - D. Cheng - 3rd place</li>
	<li>1-3 Kyu - S. Stern - 3rd place</li>
</ul>
</p>

<p>
<span class="subtitle">Rose City Taikai</span>
<ul>
	<li>Women - A. Kikkawa - 1st place</li>
	<li>Women - N. Tang - 3rd place</li>
	<li>Men's 1-2 Dan - H. Christianson - 3rd place</li>
	<li>Men's 3 Kyu and below - C. Ogier - 1st place</li>
	<li>Men's 3 Kyu and below - Z. Neale - 3rd place</li>
</ul>
</p>

<p>
<span class="subtitle">48th Vancouver Taikai</span>
<ul>
	<li>Women - A. Kikkawa - 3rd place</li>
</ul>
</p>
<p>
<span class="subtitle">2013 PNKF Taikai</span>
<ul>
	<li>Women's Kyu - N. Tang - 3rd place</li>
	<li>Women's Kyu - V. Le - 3rd place</li>
</ul>
</p>
<p>
<span class="subtitle">2013 Kent Taikai</span>
<ul>
	<li>0-4 Kyu - C. Chan - 3rd place</li>
	<li>1-3 Kyu - C. Ogier - 3rd place</li>
	<li>Women's Open - E. DeJong - 3rd place</li>
	<li>Women's Dan - E. DeJong - 3rd place</li>
</ul>
</p>

EOD;
		break;


	case 2012:
		$mainContent .= <<<EOD
<p>
<span class="subtitle">50th Annual Steveston Taikai</span>
<ul>
	<li>1-3 kyu - H. Christianson - 1st place</li>
</ul>
</p>

<p>
<span class="subtitle">35th Anniversary Highline Mudansha Cup</span>
<ul>
	<li>Team - 43 points - 1st Place</li>
	<li>Individuals - S.Stern - 1st Place</li>
	<li>Individuals - H. Christianson - 3rd Place</li>
	<li>Individuals - H. Kim - 4th Place</li>
	<li>Individuals - Z. Neale - 4th Place</li>

</ul>
</p>

<p>
<span class="subtitle">16th Harvard Shoryuhai Intercollegiate Kendo Taikai</span>
<ul>
	<li>Team - Y.Shim, H.Christianson, F.Wessbecher, N.Grimes, S.Stern - 1st place</li>	
</ul>
</p>

<p>
<span class="subtitle">36th University of Washington Taikai</span>
<ul>
	<li>1-2 Dan - F. Wessbecher - 2nd Place</li>
	<li>0-4 Kyu - Z. Neale - 3rd Place</li>
</ul>
</p>

<p>
<span class="subtitle">38th Annual PNFK Taikai</span>
<ul>
	<li>Women's Dan - A. Kikkawa - 1st Place</li>
	<li>Women's Kyu - V. Le - 2nd place</li>
</ul>
</p>

<p>
<span class="subtitle">16th Annual Kent Taikai</span>
<ul>
	<li>Team - Y.Shim, H.Christianson, D.Cheng, A.Kikkawa, S.Stern - 3rd Place</li>
	<li>Women - A. Kikkawa - 3rd Place</li>
	<li>1-3 Dan - A. Kikkawa - 3rd Place</li>
	<li>3-1 Kyu - S. Stern - 3rd Place</li>
	<li>0-4 Kyu - Z. Neale - 1st Place</li>
	<li>0-4 Kyu - N. Tang - 2nd Place</li>
</ul>
</p>


EOD;
		break;



	case 2011:
		$mainContent .= <<<EOD
<p>
<span class="subtitle">2011 Steveston Taikai</span>
<ul>
	<li>1-2 Dan - F. Wessbecher - 3rd place</li>
	<li>0-4 Kyu - S. Stern - 2nd place</li>
	<li>Women's 2 Dan+ - N. Grimes - 2nd place</li>
</ul>
</p>

<p>
<span class="subtitle">2011 Highline Mudansha Taikai</span>
<ul>
	<li>J. Yu - 3rd place</li>
	<li>H. Christianson - 2nd place</li>
	<li>D. Cheng - 1st place</li>
	<li>Team - 1st place</li>
</ul>
</p>

<p>
<span class="subtitle">2011 UW Taikai</span>
<ul>
	<li>Women's - N. Grimes - 3rd place</li>
	<li>1-3 Kyu - H. Christianson - 3rd place</li>
	<li>1-3 Kyu - D. Cheng - 2nd place</li>
	<li>1-3 Kyu - D. Tsai - 1st place</li>
	<li>1-3 Dan - F. Wessbecher - 4th place</li>
	<li>1-3 Dan - N. Grimes - 3rd place</li>
</ul>
</p>


<p>
<span class="subtitle">2011 Vancouver Taikai</span>
<ul>
	<li>Women's Dan - N. Grimes - 2nd place</li>
</ul>
</p>

<p>
<span class="subtitle">US Kendo Championships</span>
<ul>
	<li>Women's Team - N. Grimes - 2nd place</li>
</ul>
</p>

EOD;
		break;
		
		
		
	case 2010:
		$mainContent .= <<<EOD
<p>
<span class="subtitle">2010 Highline Taikai</span>
<ul>
	<li>David Cheng - 1st place</li>
	<li>Damon Tsai - 2nd place</li>
	<li>Young Shim - 3rd place</li>
	<li>Team - 1st place</li>
</ul>
</p>
<p>
<span class="subtitle">2010 UW Taikai</span>
<ul>
	<li>Women's Open - Noelle Grimes - 3rd place</li>
	<li>0-4 kyu - Daniel Oh - 1st place</li>
	<li>0-4 kyu - Eric Dominey - 2nd place</li>
	<li>0-4 kyu - Naohiro Tamaki - 3rd place</li>
	<li>1-3 kyu - Damon Tsai - 1st place</li>
	<li>1-3 kyu - Nathan Jang - 3rd place</li>
	<li>3 dan - Mic Sinclair - 3rd place</li>
	<li>Teams - UW A team - 2nd place</li>
</ul>
</p>

<p>
<span class="subtitle">2010 Harvard Shoryuhai</span>
<ul>
	<li>Team - Y. Shim, M. Sinclair, F. Wessbecher, N. Grimes, D. Tsai - 2nd place</li>
</ul>
</p>

<p>
<span class="subtitle">2010 Tacoma Taikai</span>
<ul>
	<li>Team - UW- 1st place</li>
</ul>
</p>

<p>
<span class="subtitle">2010 PNKF taikai</span>
<ul>
	<li>1-3 kyu - D. Tsai - 1st place</li>
	<li>Women's Dan - N. Grimes - 2nd place</li>
	<li>3 Dan - S. McNally - 3rd place</li>
</ul>
</p>

<p>
<span class="subtitle">2010 Kent Taikai</span>
<ul>
	<li>Women's Open - N. Grimes - 1st place</li>
	<li>1-3 Dan - S. McNally - 1st place</li>
	<li>1-3 Kyu - D. Tsai - 2nd place</li>
	<li>0-4 Kyu - E. Dominey - 2nd place</li>
	<li>1-3 Kyu - D. Cheng - 3rd place</li>
	<li>1-3 Kyu - T. Tagami - 3rd place</li>
	<li>1-3 Dan - Y. Shim - 3rd place</li>
</ul>
</p>


EOD;
		break;



	case 2009:
		$mainContent .= <<<ENDOFTEXT
<p>
<span class="subtitle">2009 PNKF Taikai</span>
<ul>
	<li>0-4 Kyu - Ken Loeu - 3rd place</li>
	<li>3-1 Kyu - Damon Tsai - 1st place</li>
	<li>3-1 Kyu - Frank Wessbecher - 2nd place</li>
</ul>
</p>
<p>
<span class="subtitle">2009 Tacoma Taikai</span>
<ul>
	<li>Adult Kyu Team - 1st place</li>
</ul>
</p>
<p>
<span class="subtitle">2009 Kent Taikai</span>
<ul>
	<li>0-4 Kyu - Nathan Jang - 1st place</li>
	<li>0-4 Kyu - Matt Durban - 2nd place</li>
	<li>3-1 Kyu - Young Shim - 3rd place</li>
	<li>3-1 Kyu - Damon Tsai - 3rd place</li>
	<li>Senior Team - 2nd place</li>
</ul>
</p>
<p>
<span class="subtitle">2009 UW Taikai</span>
<ul>
	<li>0-4 Kyu - Nathan Jang - 1st place</li>
	<li>0-4 Kyu - Daniel Anzai - 3rd place</li>
	<li>3-1 Kyu - Young Shim - 3rd place</li>
	<li>Shoji Inspirational Award - Damon Tsai</li>
</ul>
</p>
<p>
<span class="subtitle">2009 Steveston Taikai</span>
<ul>
	<li>3-1 Kyu - Young Shim - 3rd place</li>
</ul>
</p>

<p>
<span class="subtitle">2009 Kent Taikai 2</span>
<ul>
	<li>Team - N.Jang, Y.Shim, F. Wessbecher, N.Grimes, D.Tsai - 3rd place</li>
	<li>1-3 Kyu - Frank Wessbecher - 1st place</li>
	<li>Womens Open - Noelle Grimes - 1st place</li>
	<li>1-3 Kyu - Damon Tsai - ???</li>
</ul>
</p>

ENDOFTEXT;
		break;
	case 2008:
		$mainContent .= <<<EOD
<p>
<span class="subtitle">2008 Kent Taikai</span>
<ul>
	<li>0-4 Kyu - Stephan Moore - 3rd place</li>
</ul>
</p>
<p>
<span class="subtitle">2008 Tacoma Taikai</span>
<ul>
	<li>Adult Kyu Team - 1st Place</li>
</ul>
</p>
<p>
<span class="subtitle">2008 PNKF Taikai</span>
<ul>
	<li>Adult 0-4 Kyu - Damon Tsai - 1st Place</li>
	<li>Adult 3-1 Kyu - Young Shim - 2nd Place</li>
</ul>
</p>
EOD;
		break;
	case 2007:
		$mainContent .= <<<EOD
<p>
<span class="subtitle">2007 PNKF Taikai</span>
<ul>
	<li>Women's Kyu - Kathy Liao - 1st Place</li>
	<li>Women's Kyu - Erica Tam - 2nd Place</li>
</ul>
</p>

<p>
<span class="subtitle">2007 Tacoma Taikai</span>
<ul>
	<li>Kyu Team - 1st Place</li>
</ul>
</p>

<p>
<span class="subtitle">2007 PNKF Women's Taikai</span>
<ul>
	<li>Women's Kyu - Erica Tam - 3rd Place</li>
</ul>
</p>

<p>
<span class="subtitle">2007 UW Taikai</span>
<ul>
	<li>1-3 Kyu - Leroy Um - 1st Place</li>
	<li>Shoji Inspirational Award - Ken Eguro</li>
</ul>
</p>

<p>
<span class="subtitle">2007 Highline Taikai</span>
<ul>
	<li>Leroy Um - 4th Place</li>
</ul>
</p>

<p>
<span class="subtitle">2007 Steveston Taikai</span>
<ul>
	<li>Women's 1 Dan & Under - Kyoka Hinami - 1st Place</li>
</ul>
</p>

EOD;
		break;
	case 2006:
		$mainContent .= <<<EOD
<p>
<span class="subtitle">2006 PNKF Taikai</span>
<ul>
	<li>Women's Kyu - Erica Tam - 2nd Place</li>
</ul>
</p>

<p>
<span class="subtitle">2006 Harvard Shoryuhai Taikai</span>
<ul>
	<li>Team - 3rd Place</li>
</ul>
</p>

<p>
<span class="subtitle">2006 UW Taikai</span>
<ul>
	<li>0-4 Kyu - Shin Inoue - 2nd Place</li>
	<li>0-4 Kyu - Erica Tam - 3rd Place</li>
	<li>1-3 Kyu - Brian Hur - 3rd Place</li>
	<li>Shoji Inspirational Award - Roger Yau</li>
</ul>
</p>

<p>
<span class="subtitle">2006 Highline Taikai</span>
<ul>
	<li>Team - 1st Place</li>
	<li>Takashi Maruo - 1st Place</li>
	<li>Ken Eguro - 4th Place</li>
</ul>
</p>

<p>
<span class="subtitle">2006 Steveston Taikai</span>
<ul>
	<li>1-3 Kyu - Roger Yau - 3rd Place</li>
</ul>
</p>
EOD;
		break;
	case 2005:
		$mainContent .= <<<EOD
<p>
<span class="subtitle">2005 Kent Taikai</span>
<ul>
	<li>1-3 Dan - Garrett Suzaka - 3rd Place</li>
	<li>Women's Open - Kathy Kang - 3rd Place</li>
</ul>
</p>

<p>
<span class="subtitle">2005 PNKF Taikai</span>
<ul>
	<li>Woman's Mudansha - Kathy Kang - 1st Place</li>
</ul>
</p>

<p>
<span class="subtitle">2005 UW Taikai</span>
<ul>
	<li>1-3 Kyu - Takashi Maruo - 1st Place</li>
	<li>1-3 Kyu - Kathy Kang - 3rd Place</li>
	<li>1-3 Dan - Garrett Suzaka - 3rd Place</li>
	<li>Shoji Inspirational Award - Takashi Maruo</li>
</ul>
</p>

<p>
<span class="subtitle">2005 Highline Taikai</span>
<ul>
	<li>Takashi Maruo - 1st Place</li>
	<li>Kenji McCullough - 3rd Place</li>
</ul>
</p>
EOD;
		break;
	case 2004:
		$mainContent .= <<<EOD
<p>
<span class="subtitle">2004 Renton Taikai</span>
<ul>
	<li>0-4 Kyu - Kenji McCullough - 1st Place</li>
	<li>1-3 Kyu - Roger Yau - 2nd Place</li>
	<li>Senior Teams - UW - 2nd Place</li>
</ul>
</p>

<p>
<span class="subtitle">2004 PNKF Taikai</span>
<ul>
	<li>0-4 Kyu - Oun Upatising - 1st Place</li>
	<li>0-4 Kyu - Trevor Campbell - 2nd Place</li>
	<li>1-3 Kyu - Roger Yau - 1st Place</li>
	<li>1-3 Dan - Garrett Suzaka - 2nd Place</li>
</ul>
</p>

<p>
<span class="subtitle">2004 UW Taikai</span>
<ul>
	<li>0-4 Kyu - Oun Upatising - 2nd Place</li>
	<li>1-3 Kyu - Hyundae Kim - 1st Place</li>
	<li>1-3 Dan - Garrett Suzaka - 3rd Place</li>
	<li>Shoji Inspirational Award - Hyundae Kim</li>
</ul>
</p>

<p>
<span class="subtitle">2004 Highline Taikai</span>
<ul>
	<li>1-3 Kyu - Hyundae Kim - 1st Place</li>
	<li>1-3 Kyu - Nate Jacobson - 4th Place</li>
	<li>Team - 3rd Place</li>
</ul>
</p>
EOD;
		break;
	case 2003:
		$mainContent .= <<<EOD
<p>
<span class="subtitle">2003 Renton Taikai</span>
<ul>
	<li>0-4 Kyu - Roger Yau - 1st Place</li>
	<li>1-3 Kyu - Hyundae Kim -  1st Place</li>
	<li>Team - 2nd Place</li>
</ul>
</p>

<p>
<span class="subtitle">2003 PNKF Taikai</span>
<ul>
	<li>0-4 Kyu - Kenji McCullough - 1st Place</li>
	<li>0-4 Kyu - C. Takahashi - 3rd Place</li>
	<li>1-3 Kyu - Hyundae Kim - 3rd Place</li>
	<li>1-2 Dan - Garrett Suzaka - 2nd Place</li>
</ul>
</p>

<p>
<span class="subtitle">2003 UW Taikai</span>
<ul>
	<li>0-4 Kyu - Takashi Maruo - 3rd Place</li>
	<li>1-3 Dan - Garrett Suzaka - 1st Place</li>
	<li>Shoji Inspirational - Elizabeth Shin</li>
</ul>
</p>

<p>
<span class="subtitle">2003 Highline Taikai</span>
<ul>
	<li>Eric Timm - 3rd Place</li>
</ul>
</p>
EOD;
		break;


	case 2002:
		$mainContent .= <<<EOD
<p>
<span class="subtitle">2002 Renton Taikai</span>
<ul>
	<li>1-3 Dan - Garrett Suzaka - 1st Place</li>
</ul>
</p>

<p>
<span class="subtitle">2002 PNKF Taikai</span>
<ul>
	<li>0-4 Kyu - Mark Lee - 1st Place</li>
	<li>0-4 Kyu - Mike Alquist - 3rd Place</li>
	<li>1-2 Dan - Garrett Suzaka - 2nd Place</li>
</ul>
</p>

<p>
<span class="subtitle">2002 9th US National Championship"</span>
<ul>
	<li>Garret Suzaka - 3rd, Sr. Youth Division; 1st Place Team Member</li>
</ul>
</p>

<p>
<span class="subtitle">2002 UW Taikai</span>
<ul>
	<li>0-4 Kyu - Mark Lee - 1st Place</li>
	<li>0-4 Kyu - Hyundae Kim - 2nd Place</li>
	<li>0-4 Kyu - Aaron Lee - 3rd Place</li>
	<li>1-3 Kyu - Eric Timm - 3rd Place</li>
	<li>1-3 Kyu - Leonid Tsybert - 3rd Place</li>
	<li>1-3 Dan - Garrett Suzaka - 1st Place</li>
	<li>Shoji Inspirational Award - Leonid Tsybert</li>
</ul>
</p>

<p>
<span class="subtitle">2002 Highline Taikai</span>
<ul>
	<li>Team - 1st Place</li>
	<li>Eric Timm - 2nd Place</li>
	<li>Hyundae Kim - 3rd Place</li>
	<li>Leonid Tsybert - 4th Place</li>
</ul>
</p>

<p>
<span class="subtitle">2002 38th Annual Vancouver Taikai</span>
<ul>
	<li>16-20 Year Olds - Garrett Suzaka - 2nd Place</li>
</ul>
</p>
EOD;
		break;
	case 2001:
		$mainContent .= <<<EOD
<p>
<span class="subtitle">2001 PNKF Taikai</span>
<ul>
	<li>1-2 Dan - Garrett Suzaka - 3rd Place</li>
</ul>
</p>

<p>
<span class="subtitle">2001 5th Annual Shoryuhai Intercollegiate Taikai</span>
<ul>
	<li>Team - 2nd Place</li>
</ul>
</p>

<p>
<span class="subtitle">2001 UW Taikai</span>
<ul>
	<li>0-4 Kyu - Eric Timm - 3rd Place</li>
	<li>Women's Open - Elizabeth Marsten - 3rd Place</li>
	<li>Shoji Inspirational Award - Elizabeth Marsten</li>
</ul>
</p>

<p>
<span class="subtitle">2001 Highline Taikai</span>
<ul>
	<li>Shuji Uehara - 1st Place</li>
	<li>Eric Dycus - 2nd Place</li>
	<li>Nels Lindberg - 3rd Place</li>
	<li>Team - 1st Place</li>
</ul>
</p>

<p>
<span class="subtitle">2001 37th Annual Vancouver Taikai</span>
<ul>
	<li>31-40 - Durrell Rittenberg - 3rd Place</li>
</ul>
</p>

EOD;
		break;
	case 2000:
		$mainContent .= <<<EOD
<p>
<span class="subtitle">Renton Invitational Taikai - December 9th, 2000</span>
<ul>
	<li>Women's - Elizabeth Marsten - 2nd Place</li>
	<li>0-4 Kyu - Leonid Tsybert - 2nd Place</li>
	<li>1-3 Kyu - Shuji Uehara - 3rd Place</li>
	<li>1-2 Dan - Durrell Rittenberg - 3rd Place</li>
	<li>Team - 2nd Place</li>
</ul>
</p>

<p>
<span class="subtitle">PNKF Taikai - November 11th, 2000</span>
<ul>
	<li>1-3 Kyu - Eric Dycus - 1st Place</li>
	<li>1-2 Dan - Elizabeth Marsten - 3rd Place</li>
</ul>
</p>
EOD;
		break;
}
$mainContent .= "\n</div>\n";


require_once('display.php'); 

?>