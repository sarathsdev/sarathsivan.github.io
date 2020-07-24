<?php
//define_syslog_variables
$name = $_REQUEST['cf_name'];
$email = $_REQUEST['cf_email'];
$message = $_REQUEST['cf_message'];
//check input fields
if(empty($name) || empty($email) || empty($message))
{
  echo "Please fill all the fields";
}
else{
  mail("sarathsivan099@gmail.com","Personal Website message",$message,"From:$name <$email>" );

  echo "<script type='text/javascript'>alert('Your message sent successfully');
  window.history.go(-1);
  </script>";
}
?>
