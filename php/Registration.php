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
        $email=$_POST["email"];
        if(!filter_var($_POST["email"],FILTER_VALIDATE_EMAIL))
        {
            die("Invalid email");
        }
        $password=$_POST["password"];
        $mobile=$_POST["mobile"];
        $detail=$_POST["detail"];
        $skill=$_POST["skill"];
        $city=$_POST["city"];
        
        if (strcmp($_POST["typeabc"],"hacker")==0) {
            $typeOf = 1;
        } else {
            $typeOf = 0;
        }

        if (strcmp($_POST["gender"],"male")==0) {
            $gender = 1;
        } else {
            $gender = 0;
        }
        
//Start
        //For finding the user already alredy having account
//$query = "SELECT * FROM user where username = '" . $_POST["username"] . "'";
$query = "SELECT * FROM `hackerproject`.`user` where username = '" .$username. "'";
$num=  mysql_query($query);
$count = mysql_num_rows($num);
echo $count;
if($count==0) {	
$sql = "INSERT INTO `hackerproject`.`user` (username,email,password,mobile,city,deatils,skill,gender,notification,type,status) VALUES ('".$username."','".$email."','".$password."','".$mobile."','".$city."','".$detail."','".$skill."','$gender','0','$typeOf','0');";

$res=mysql_query($sql);

if($res)
{
    echo "Please check your email and click on activation link to activate your account";
}
else
{
    echo "Data cannot be registerd";
}

} else {
	$message = "User Email is already in use.";	
}
//end
        
        
        ?>
    </body>
</html>
