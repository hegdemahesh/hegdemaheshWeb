<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Contact - Mahesh Hegde!</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"/>

<style type="text/css">

	body {
		color: #dedede;
		font-family: "Century Gothic",Trebuchet MS, Arial, Helvetica, sans-serif;
		font-size: 14px;
	}
</style>

</head>

<body>

<?php

if(isset($_POST['email'])) {

     

    // EDIT THE 2 LINES BELOW AS REQUIRED

    $email_to = "mahesh8341@gmail.com";

    $email_subject = "Hegdemahesh Enquiry";

    

     

    function died($error) {

        // your error code can go here

        echo "<k style='color: #dedede;'>We are very sorry, but there were error(s) found with the form you submitted.</k> ";

        echo "<k style='color: #dedede;'>These errors appear below.</k><br /><br />";

        echo $error."<br /><br />";

        echo "<k style='color: #dedede;'>Please go back and fix these errors.</k><br /><br />";

        die();

    }

     

    // validation expected data exists

    if(!isset($_POST['first_name']) ||

        !isset($_POST['last_name']) ||

        !isset($_POST['email']) ||

        !isset($_POST['telephone']) ||

        !isset($_POST['comments'])) {

        died('We are sorry, but there appears to be a problem with the form you submitted.');      

    }

     

    $first_name = $_POST['first_name']; // required

    $last_name = $_POST['last_name']; // required

    $email_from = $_POST['email']; // required

    $telephone = $_POST['telephone']; // not required

    $comments = $_POST['comments']; // required

     

    $error_message = "";

    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';

  if(!preg_match($email_exp,$email_from)) {

    $error_message .= 'The Email Address you entered does not appear to be valid.<br />';

  }

    $string_exp = "/^[A-Za-z .'-]+$/";

  if(!preg_match($string_exp,$first_name)) {

    $error_message .= 'The First Name you entered does not appear to be valid.<br />';

  }

  if(!preg_match($string_exp,$last_name)) {

    $error_message .= 'The Last Name you entered does not appear to be valid.<br />';

  }

  if(strlen($comments) < 2) {

    $error_message .= 'The Comments you entered do not appear to be valid.<br />';

  }

  if(strlen($error_message) > 0) {

    died($error_message);

  }

    $email_message = "Form details below.\n\n";

     

    function clean_string($string) {

      $bad = array("content-type","bcc:","to:","cc:","href");

      return str_replace($bad,"",$string);

    }

     

    $email_message .= "First Name: ".clean_string($first_name)."\n";

    $email_message .= "Last Name: ".clean_string($last_name)."\n";

    $email_message .= "Email: ".clean_string($email_from)."\n";

    $email_message .= "Telephone: ".clean_string($telephone)."\n";

    $email_message .= "Comments: ".clean_string($comments)."\n";

     

     

// create email headers

$headers = 'From: '.$email_from."\r\n".

'Reply-To: '.$email_from."\r\n" .

'X-Mailer: PHP/' . phpversion();

@mail($email_to, $email_subject, $email_message, $headers); 

?>

 

<!-- include your own success html here -->

 

Thank you for contacting us. We will be in touch with you very soon.

 

<?php

}

?>

</body>

</html>