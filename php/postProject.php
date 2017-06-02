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
         
        <form name="projectpost" method="post" action="processproject.php">
            Title<input type="text" name="titl" value="">
            Detail<input type="text" name="detail" value="">
            Price range<input type="text" name="minPrice" value="">
            Price To<input type="text" name="maxPrice" value="">
            Skills<input type="text" name="skills" value="">
            Last Date<input type="text" name="lastdate" value="">
            Date<input type="text" name="date" value="">
            Problem Statement<input type="text" name="problemSt" value="">
            Mode<input type="text" value="" name="mode">
            Please enter the username and  password To ensure that you are the authenticated user of the account          
            <input type="text" name="username" value="">
            <input type="text" name="password" value="">
            <input type="submit" value="submit" name="submit">
        </form>
        
        <?php
        // put your code here
        ?>
    </body>
</html>
