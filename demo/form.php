<?php

if(isset($_POST['submit'])){
    
    $name  = array("Adrian","Student","Peter","Samid","Mohad","Maria","Tom");
    $minimum = 5;
    $maximum = 10;
    
    
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    if (strlen($username) < $minimum){
        
        echo "<p style='color:red;'>Username has to be longer than 5 characters.<p>";
        
    }
    
     if (strlen($username) > $maximum){
        
        echo "<p style='color:red;'>Username has to be longer than 10 characters.<p>";
        
    }
    
    
    if(!in_array($username,$name)) {
        
        echo "Sorry you are not allowed";
        
        
    } else {
        echo "Welcome";
    }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    
      <form action="form.php" method="post">
          
          <input type="text" name="username" placeholder= "Enter Username">
          <input type="password" name="password" placeholder="Enter Password">
        
    <br>
         
         <input type="submit" name="submit">
          </form>
       
       <?php
        
    
    
    ?>
</body>
</html>