<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
       <?php
//if "email" variable is filled out, send email
  
  //Email information
  $admin_email = "albertflyin@gmail.com";
  $email ="shukla.pravesh7@gmail.com";
  $subject ="hello";
  $comment = "Hii";
  
  //send email
  if(mail($admin_email, "$subject", $comment, "From:" . $email)==true)
  {
  //Email response
  echo "Thank you for contacting us!";   
  }
  else
  {
  //Email response
  echo "Failed";
  }
  
  //if "email" variable is not filled out, display the form
        //echo "mail cannot be sent";
  ?>
    </body>
</html>
