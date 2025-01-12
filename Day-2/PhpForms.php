<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    echo "Current script: ".$_SERVER['PHP_SELF']."<br>";
    echo "Server name: ".$_SERVER['SERVER_NAME']."<br>";
    echo "Client ip: ".$_SERVER['REMOTE_ADDR']."<br>";
    echo "Request method: ".$_SERVER['REQUEST_METHOD']."<br>";
    ?>
</body>
</html>