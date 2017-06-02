<?php
session_start();
?>
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
        require './init.php';
        
        if(isset($_POST["username"]) && isset($_POST["password"]))
        {$username=$_POST["username"];
        $pass=$_POST["password"];
        
    $query = "SELECT * FROM `hackerproject`.`user` WHERE username='".$username."' and password='".$pass."'";
        
    //$query = "SELECT * FROM `hackerproject`.`user` where username = '" .$username. "' and password='".$password."'";
    
    $result=  mysql_query($query);
    $count = mysql_num_rows($result);
    if($count==1)
    {
        echo "Password Correct";
    }
    else
    {
        echo "Invalid password";
    }
        }
        else
        {
            echo "Please fill the details properly";
            
        }
    ?>
    </body>
</html>
