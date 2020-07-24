<?php
if (isset($_POST['submit'])) {
  
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];
  
  $mailTo = "pkd18cs048@gecskp.ac.in";
  $headers = "From : ".$mailFrom;
  $txt ="You have recieved an e-mail from ".$name.".\n\n".$message;
  
  mail($mailTo,$txt,$headers);
  header("Location: index.html?mailsend");
  
}

?>
