<html>
    <head>
        
    </head>
    <body>
        
        <form action="" method="post">
            Username<input type="text" name="userna" value="">
            Login<input type="text" name="login" value="">
            <input type="submit" value="submit" name="submit">
        </form>
            
        <?php
        
        if(isset($_POST['userna']))
        {
            echo $_POST['userna'];
        }
        ?>
    </body>
</html>