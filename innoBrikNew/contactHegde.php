<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Contact - Mahesh Hegde!</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"/>

<style type="text/css">
</style>

</head>

<body>

<form name="contactform" method="POST"  action="send_form_email_hegde_captcha.php">
			
			<table width="450px">
			</tr>
			<tr>
				<td valign="top">
				<label for="first_name">First Name *</label>
				</td>
			<td valign="top">
				<input  type="text" name="first_name" maxlength="50" size="30">
			</td>
			</tr>
 
			<tr>
			<td valign="top"">
			<label for="last_name">Last Name *</label>
			</td>
			<td valign="top">
			<input  type="text" name="last_name" maxlength="50" size="30">
			</td>
			</tr>
			<tr>
			<td valign="top">
			<label for="email">Email Address *</label>
			</td>
			<td valign="top">
			<input  type="text" name="email" maxlength="80" size="30">
			</td>
 
			</tr>
			<tr>
			<td valign="top">
			<label for="telephone">Telephone Number</label>
			</td>
			<td valign="top">
				<input  type="text" name="telephone" maxlength="30" size="30">
			</td>
			</tr>
			<tr>
			<td valign="top">
			<label for="comments">Comments *</label>
			</td>
			<td valign="top">
			<textarea  name="comments" maxlength="1000" cols="25" rows="6"></textarea>
			</td>
			<?php
				require_once('recaptchalib.php');
				$publickey = "6Lf5V9QSAAAAAJfdF8X0enNtPbl2j_WMe2RXGD2o"; // you got this from the signup page
				echo recaptcha_get_html($publickey);
			?>
			</tr>
			<tr>
			<td colspan="2" style="text-align:center">
			<input type="submit" value="Submit"> 
			</td>
		</tr>
		</table>
	</form>
	
</body>

</html>

