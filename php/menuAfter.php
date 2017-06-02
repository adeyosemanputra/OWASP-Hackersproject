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
        <table class="menu_ta">
            <th>
            <td><a href="afterLoginyee.php"> <p style="float: left;color: white;font-size: 28px;padding-left: 10px;padding-right: 50px;margin-top: 20px"> HackersProject.com </p></a>
            </td>
            <td class="menu_ta_opt" style="border-left: none"><a href="home.php">&nbsp;&nbsp;&nbsp;Dashboard&nbsp;&nbsp;&nbsp;</a></td>
            <td class="menu_ta_opt"><a href="#history">&nbsp;&nbsp;&nbsp;History&nbsp;&nbsp;&nbsp;</a></td>
            <td class="menu_ta_opt"><a href="browse">&nbsp;&nbsp;&nbsp;Browse&nbsp;&nbsp;&nbsp;</a></td>
            <td class="menu_ta_opt"><a href="logout.php">&nbsp;&nbsp;&nbsp;Logout&nbsp;&nbsp;&nbsp;</a></td>
            <td class="menu_ta_opt"><a href="">&nbsp;&nbsp;&nbsp;FAQs&nbsp;&nbsp;&nbsp;</a></td>
        </th>
        </table>
        
        <?php
        $date = date('Y-m-d H:i:s');
        echo $date;
        ?>
    </body>
</html>
