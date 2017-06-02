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
        // put your code here
        ?>
    </body>
</html>

<?php

//$sql = "INSERT INTO `hackerproject`.`user` (`username`, `email`, `password`, `mobile`, `city`, `deatils`, `skill`, `gender`, `notification`, `type`) VALUES (\'test1\', \'test1@gmail.com\', \'test123\', \'9820982098\', \'mumbai\', \'testing done\', \'c,c++\', \'1\', \'2\', \'1\');";

//$sql1 = "SELECT count(username) from user where username=\'test\'";

require './init.php';
$sql="select * from `hackerproject`.`user`";

$result=  mysql_query($sql) or die(mysql_errno());
while ($row=  mysql_fetch_array($result))
{
    echo $row['username']."\n".$row['email']."\n".$row['password'];?>
<br>
<?php
}

?>



