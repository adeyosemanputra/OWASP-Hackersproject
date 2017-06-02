<html>
    <head>
        
    <title>BROWSE | hackersProject </title>
    <link href="../css/Basic.css" rel="stylesheet">
    </head>
    
    <body>
        <?php
        require './menu.php';
        ?>
        
        <form action="" method="get" onsubmit="return check()">
        <table style="height:250px;width: 250px;border: solid;border-color: green;border-radius: 20px">   
        <th style="background-color: limegreen;color:white;font-family: monospace;font-size: 18px;border-radius:20px;text-align: center">Filter Search</th>
        <tr><td><p style="color: green">Mode of Operation:</p><select name="mode" style="color:green;padding: 10px;margin-left: 15px" id="opt1">
                    <option value="2">Both</option>
                    <option value="0">Online</option>
                    <option value="1">Offline</option>
                </select></td>
        </tr>
        <tr><td> <input type="text" name="skill" value="" placeholder="Skills seperated by , "   style="padding: 10px;margin-left: 15px;color:green;"></td></tr>
        <tr><td><input type="submit" name="submit" value="Search" style="padding: 10px;margin-left: 15px;color:green;"></td></tr>
            </table>
            </form>
        <script type="text/javascript">
           
           function check()
           {
               $opt=document.getElementById('opt1').value;
               if($opt>3)
               {
                    
               }
               else
               {
                   return false;
               }
           }
           
         </script>
        
         <div style="float: right;width: 1000px;border: solid;border-color:green;margin-right:50px;margin-top: -300px ">
              
        <?php
        
        require './init.php';
        
        if(isset($_GET['submit']))
        {
            if(!empty($_GET['skill']))
            {
                $skills=  explode(',', $_GET['skill']);
                $sql="SELECT * FROM `hackerproject`.`user` where skill like '%".$skills[0]."%'" ;               
            }
            if(!empty($_GET['mode']))
            {
                $valuemode=$_GET['mode'];
                $sql="SELECT * FROM `hackerproject`.`user` where mode='".$_GET['mode']."'" ;
            }
            if(!empty($_GET['skill']) and !empty($_GET['mode']))
            {
                $skills=  explode(',',$_GET['skill']);
                $sql="SELECT * FROM `hackerproject`.`user` where skill like '%".$skills[0]."%' and mode='".$_GET['mode']."' " ;
            }
        }
        else
        {
            $sql="SELECT * FROM `hackerproject`.`user` ";
        }
        
        $result=  mysql_query($sql);
        if($result==FALSE)
        {
            die("Error");
        }
        
        while($row=mysql_fetch_array($result))
        {
            if($row["type"]==1)
            {
               if($row["gender"]==1)
               {
                   ?>
             <table style="width: 150px;border: solid;border-color:green;border-radius: 50%;height: 150px;margin-top: 15px;margin-left: 15px;float: left">
                 <th><img src="../images/malePro.png" height="150" width="150" style="border-radius: 50%;"> </th>
             </table>
          
         <?php
               }
               else
               {
                   ?>
             <table style="width: 150px;border: solid;border-color:green;border-radius: 50%;height: 150px;margin-top: 15px;margin-left: 15px;float: left">
                  <th><img src="../images/femalePro.jpg" height="150" width="150" style="border-radius: 50%;"> </th>
             </table>
          
             <?php
               }
        
       ?>
            <table style="float: right">
                 <th><p style="width: 600px;margin-top: 20px;text-align: left"><?php echo $row["username"]; ?></p></th>
             <th><input type="textbox" name="rate" value="" readonly="readonly" style="width: 150px;text-align: center"></th>
                 <tr>
                     <td>
                         <p style="color: green"><?php    echo $row["skill"];    ?></p>
                     </td>
                     <td>
                         <?php echo $row["country"]; ?>
                     </td>
                 </tr>
                 <tr>
                     <td><form action="" method="get"><input type="submit" value="HIRE" style="margin: 15px;padding: 10px"></form></td>
                 </tr>
                 
             </table>
             <p style="float: right;margin-left: 20px;margin-right: 20px;margin-top: 20px;"><?php echo $row["deatils"]; ?></p>
                            <hr style="position: relative;margin-top: 300px;border: solid;color: green">
 
             </div>
        <?php
        }
        
         }
        
        ?>
       </div>
        
        
    </body>
</html>
