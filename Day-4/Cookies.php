<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookies</title>
</head>
<body>
    <?php
        //cookies 

        //set cookie
        $cookieName = 'LangPreference';
        $cookieValue = 'French';
        $cookieExpire = time() + (180);
        setcookie($cookieName,$cookieValue,$cookieExpire,"/");
        echo "Cookie has been set !";

        //Accessing the cookie
        if (isset($_COOKIE[$cookieName])){
            echo "<br>Your language Preferance is :". $_COOKIE[$cookieName];
        }
        else{
            echo "<br>Cookie not set !";
        }
        //Deleting Cookie or Block the cookie
        setcookie($cookieName,$cookieValue,time()-30,"/");
        echo "<br> Cookie has been deleted";
    
    ?>
</body>
</html>