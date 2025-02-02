<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sessions</title>
</head>
<body>
    <?php
        //Sessions
        session_start();
        $_SESSION["username"]="John";
        $_SESSION["role"]="Hacker";

        echo "Sessions has created ! <br>";
    
        ///Accessing Session Variables
        if (isset($_SESSION["username"])){
            echo "Welcome ".$_SESSION["username"];
        }
        else{
            echo "No active Session found !";
        }

        //Destroying?killing/Terminating Session
        session_unset();
        session_destroy();
        echo "<br> Session has been terminated !<br>";
  
        if(isset($_SESSION["username"])){
            echo "Welcome".$_SESSION["username"]; 
        }
        else{
            echo "No active Session found !";
        }
    
    ?>    
</body>
</html>