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
        
        $username=$_POST["username"];

//Start
        //For finding the user already alredy having account
//$query = "SELECT * FROM user where username = '" . $_POST["username"] . "'";

//$sql = "INSERT INTO `hackerproject`.`projectpost` (`projectid`, `username`, `title`, `detailproject`, `priceTo`, `priceFrom`, `date`, `skill`, `peoplePlaced`, `lastDate`, `problemStatement`) VALUES (NULL,'".$_POST["username"]."','".$_POST["titl"]."','".$_POST["detail"]."','".$_POST["minPrice"].",'".$_POST["maxPrice"]."','".$_POST["date"]."' ,'".$_POST["skills"]."','','".$_POST["lastdate"]."','".$_POST["problemSt"]."');";

$sql = "INSERT INTO `hackerproject`.`projectpost` (`projectid`, `username`, `title`, `detailproject`, `priceTo`, `priceFrom`, `date`, `skill`, `peoplePlaced`, `lastDate`, `problemStatement`, `mode`, `status`) VALUES (NULL,'".$_POST["username"]."','".$_POST["titl"]."','".$_POST["detail"]."','".$_POST["minPrice"]."','".$_POST["maxPrice"]."','".$_POST["date"]."','".$_POST["skills"]."','".$_POST["username"]."','".$_POST["lastdate"]."','".$_POST["problemSt"]."','".$_POST["mode"]."', \'0\');";

$res=mysql_query($sql);

if($res)
{
    echo "Please check your email and click on activation link to activate your account";
}
else
{
    echo "Data cannot be registerd";
}

//end
      
        ?></body>
</html>

