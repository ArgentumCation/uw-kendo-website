<?
$title = 'Payment';

define('PAGEDISPLAY', 'display');

$displayMode = (isset($_GET['p'])) ? $_GET['p'] : 'history';

$subNavi = array("Payment Options");
$subNaviL = array("payment.php");
$subNaviS = 0;

$mainContent = <<<EOD

<div id="payInfo">
<p>The Kendo Club at UW accepts payments both online and in person.</p>
<p>If you are paying in person we accept cash, check, and credit cards.  However if you pay using card, there is a transaction fee.  Please bring exact change.</p>
<p>Online payment is accepted through PayPal, please choose what you are paying for and click the Add to Cart button. 
 Keep in mind there is a transaction fee.  Include your full name in the message to vendor.</p>
</div>

<form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="9AA7ANYWKKPM8">
<table>
<tr><td><input type="hidden" name="on0" value="Pick what you're paying for:">Pick what you're paying for:</td></tr><tr><td><select name="os0">
	<option value="Beginner Package">Beginner Package $51.50 USD</option>
	<option value="Quarterly Dues">Quarterly Dues $16.00 USD</option>
	<option value="Shinai">Shinai $26.00 USD</option>
	<option value="Uniforms">Uniforms $72.00 USD</option>
	<option value="Nafuda">Nafuda $21.00 USD</option>
	<option value="UW Taikai Bento Fee">UW Taikai Bento Fee $8.50 USD</option>
	<option value="PNKF/AUSKF Membership">PNKF/AUSKF Membership $67.00 USD</option>
</select> </td></tr>
</table>
<input type="hidden" name="currency_code" value="USD">
<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_cart_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
</form>


EOD;

require_once('display.php'); 

?>