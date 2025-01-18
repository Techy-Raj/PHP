<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = htmlspecialchars($_POST['name']);
            $mobile = htmlspecialchars($_POST['mobile']);
            $email = htmlspecialchars($_POST['email']);
            $message = htmlspecialchars($_POST['message']);
            
        } else {
            echo "No data received.";
            exit;
        }
        echo "Recieved Feedback"."<br>";
        echo "Full Name:".$name."<br>";
        echo "Mobile Number:".$mobile."<br>";
        echo "Emai Id:".$email."<br>";
        echo "Message:".$message."<br>";

        ?>
</body>
        <style>
            body{
                display:flex;
                text-align:left;
                justify-content:left;
                font-size:30px;
            }
        </style>
</html>