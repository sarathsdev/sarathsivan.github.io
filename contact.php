<?php
//define_syslog_variables
$name = $_REQUEST['name'];
$email = $_REQUEST['email'];
$message = $_REQUEST['message'];
//check input fields
if(empty($name) || empty($email) || empty($message))
{
  echo "Please fill all the fields";
}
else{
  mail("pkd18cs048@gecskp.ac.in","Personal Website message",$message,"From:$name <$email>" );

  echo "<script type='text/javascript'>alert('Your message sent successfully');
  window.history.log(-1);
  </script>";
}
?>
