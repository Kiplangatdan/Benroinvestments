<?php
//if "email" variable is filled out, send email
  if (isset($_POST['email']))  {
  
  //Email information
  $admin_email = "info@benroinvestments.co.ke";
  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];
  
  //send email
  @mail($admin_email, "$subject", $message, "From:" . $email);

  //Email response
  echo (include 'thankyou.php');
  }
  
  //if "email" variable is not filled out, display the form
  else  {
    echo "Error, please try again later";
 }
?>
