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
        <style>
            .log_i
            {
                border-radius: 50%;
                padding: 20px;
                margin-top: 20px;
                margin-left: 100px;
                color: green;
                border-style: thin;
                border-color: greenyellow;
                font-family: monospace;
                font-size: 18px;
            }
            .log_i:hover
            {
                color: white;
                background-color: green;
            }
        </style>
    </head>
    <body>
        <?php
            require './menu.php';
         ?>
        <div style="background-color: grey;float:left;width: 300px;height: 300px;border-color: greenyellow;border-radius: 50%;margin-left: 20px;border-style: solid">
            <p style="color:yellowgreen;margin-top: 20px;margin-left: 110px;font-family: monospace;font-size: 28px;">Login</p>
            <table> 
                <form action="LoginProcess.php" method="post" onsubmit="return check()">
                    <input type="text" name="err" id="err" value="" style="color: red;margin-left: 70px;background-color: gray;border: none;" readonly>
                    <tr>
                    <td>
                        <input type="text" name="username" value="" placeholder="Username" id="username" style="margin-top: 20px;padding: 10px;margin-left: 50px;border-radius:05px" onfocus="apply()">
                    </td>
                </tr>
                <script type="text/javascript">
                    
                function apply()
                {
                    document.getElementById("err").value="";
                   
                }
                </script>
                
                <tr>
                    <td>
                        <input type="password" name="password" value="" placeholder="password" id="password" style="margin-top: 10px;padding: 10px;margin-left: 50px;border-radius:05px">
                    </td>  
                </tr>
                <tr>
                    <td>
                        <input type="submit" name="login" value="Login" class="log_i">                               
                    </td>
                </tr>
                <script type="text/javascript">
                
                function check()
                {
                    var num=document.getElementById("username").value;
                    var pas=document.getElementById("password").value;
                    if(num.length >5 && num.length>5)
                    {
                        return true
                    }
                    else
                    {
                        document.getElementById("err").value="Enter all the data";
                        return false;
                    }
                }
                
                </script>
                </form>
            </table>
        </div>
        
        <div style="float: right;background-color: lightgreen;width: 1000px;height: 400px">
            <p style="font-family: monospace;font-size: 36px;text-align: center;">Register for Free</p>
            <p style="float: lef;font-family: monospace;color: green;font-size: 18px;margin-left: 10px">Getting ready for posting project</p>
            <p style="float:right;font-family: monospace;color: green;font-size: 18px;margin-right: 10px;margin-top: -35px">Setting ready for working on Project</p>
            <p style="float: lef;font-family: monospace;color: green;font-size: 18px;margin-left: 90px;margin-top: 20px;"><a href="RegisterEmployer.php"><img src="../images/employerPro.jpg" height="150" width="150" style="border-radius: 50%;border-style: thin;border-color: yellowgreen"></a></p>
            <p style="margin-left: 400px;color:green;font-family: monospace;font-size: 128px;margin-top: -180px">OR</p>
            <p style="float:right;font-family: monospace;color: green;font-size: 18px;margin-right: 90px;margin-top: -270px"><a href="RegisterEmployee.php"><img src="../images/malePro.png" height="150" width="150" style="border-radius: 50%;"></a></p>
        </div>        
 </body>
</html>
