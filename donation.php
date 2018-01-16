<?php

echo "\r\n";
echo <<<EOL

<div class="donation">
	<p class="donation_description"> &#9925; For Fun &#9749; </p>
	<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_blank _top">
		<input type="hidden" name="cmd" value="_s-xclick">
		<input type="hidden" name="hosted_button_id" value="ZB5P5CKASJ2JL">
		<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
		<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
	</form>

</div>

EOL;

?>