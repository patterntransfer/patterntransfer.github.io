<?php

$EmailFrom = $_POST['email'];
$EmailTo = "patterntransferexcel@gmail.com";
$Subject = "online form";
$Name = Trim(stripslashes($_POST['name']));
$Email = Trim(stripslashes($_POST['email']));
$ContactType = Trim(stripslashes($_POST['subject']));
$Message = Trim(stripslashes($_POST['message']));
// validation
$validationOK=true;
if (!$validationOK) {
  echo "please check your details";
  header("Location: http://patterntransfer.co.uk/testimonials_feedback1.html");
  exit;
}

// prepare email body text

$Body = "";
$Body .= "Name: ";
$Body .= $Name;
$Body .= "\n";
$Body .= "Contact Type: ";
$Body .= $ContactType;
$Body .= "\n";
$Body .= "Email: ";
$Body .= $Email;
$Body .= "\n";
$Body .= "Message: ";
$Body .= $Message;
$Body .= "\n";

// send email
$success = mail($EmailTo, $Subject, $Body, "From: <$EmailFrom>");

// redirect to success page
if ($success){
  print "<meta http-equiv=\"refresh\" content=\"1;URL=testimonials_feedback0.html\">";
}
else{
  print "<meta http-equiv=\"refresh\" content=\"1;URL=testimonials_feedback1.html\">";
}
?>
