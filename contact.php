<?php 
	include('../../../wp-load.php');
	  $fname = $_POST['first_name'];
    $lname = $_POST['last_name'];
  	$designation = $_POST['designation'];
  	$organization = $_POST['organization'];
    $email = $_POST['email'];
    $remail = $_POST['remail'];
    $office = $_POST['office'];
    $mobile = $_POST['mobile'];
    $home = $_POST['home'];
    $contact = $_POST['contact'];
  	//php mailer variables
  	$to = get_option('admin_email');
  	$subject = "Someone sent a message from ".get_bloginfo('name');
  	$headers = 'From: '. $email . "\r\n" .
    'Reply-To: ' . $email . "\r\n";
    if(empty($fname) || empty($lname) || empty($email) || empty($remail)){
      echo "Please supply all required information.";
    }else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
    	echo "Email Address Invalid.";
    }else{
        if($email != $remail){
          echo "Email is not matched.";
        }else{
          $message = "Name : ".$fname." ".$lname."\n".
                     "Designation : ".$designation."\n".
                     "Organization : ".$organization."\n".
                     "Office : ".$office."\n".
                     "Mobile : ".$mobile."\n".
                     "Home : ".$home."\n\n\n".$contact;

          $sent = wp_mail($to, $subject, strip_tags($message), $headers);
          if($sent) echo "OK"; //message sent!
          else echo "ERROR"; //message wasn't sent
        }   
    }