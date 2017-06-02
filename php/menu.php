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
        <link href="../css/Basic.css" rel="stylesheet">
        <style>
        .menu_ta
        {
            background-color: green;
        }
        a
        {
            text-decoration: none;
            color: white;
            
        }
        .menu_ta_opt
        {
            border-left: solid 1px yellowgreen;
            width:180px;
            text-align: center;
            border-bottom-color: green;
        }
        .menu_ta_opt:hover
        {
            border-bottom-color: white;
            border-bottom: solid 5px white;
        }
        .oval_L
        {
            color: whitesmoke;
            padding: 5px;
            font-style: normal;
        }
        .oval_L:hover
        {
            color:white;
        }
        .oval_link
        {
            text-decoration: none;
            color: whitesmoke;
            font-size: small;
        }
        .oval_link:hover
        {
            color: white;
        }
        </style>
    </head>
    <body>
        <div style="background-image: url(../images/menu_div.jpg);height: 200px">
       <table class="menu_ta">
            <th>
            <td><a href="home.php"> <p style="float: left;color: white;font-size: 28px;padding-left: 10px;padding-right: 50px;margin-top: 20px"> HackersProject.com </p></a>
            </td>
            <td class="menu_ta_opt" style="border-left: none"><a href="home.php">&nbsp;&nbsp;&nbsp;HOME&nbsp;&nbsp;&nbsp;</a></td>
            <td class="menu_ta_opt"><a href="#">&nbsp;&nbsp;&nbsp;BROWSE&nbsp;&nbsp;&nbsp;</a></td>
            <td class="menu_ta_opt"><a href="#">&nbsp;&nbsp;&nbsp;REGISTER&nbsp;&nbsp;&nbsp;</a></td>
            <td class="menu_ta_opt"><a href="#">&nbsp;&nbsp;&nbsp;SERVICES&nbsp;&nbsp;&nbsp;</a></td>
            <td class="menu_ta_opt"><a href="">&nbsp;&nbsp;&nbsp;ABOUT US&nbsp;&nbsp;&nbsp;</a></td>
           <td class="menu_ta_opt"><a href="">&nbsp;&nbsp;&nbsp;FAQs&nbsp;&nbsp;&nbsp;</a></td>
       
        </th>
        </table>
           
        <p class="oval_L" style="float: right;"><a href="Login.php" class="oval_link">Login</a>/<a href="Register.php" class="oval_link">Register</a></p>
        </div>
</body>
</html>