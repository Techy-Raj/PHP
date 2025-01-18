<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Q1</title>
</head>
<body>
    <?php
        $sum = 0;
        for($i=0; $i<=100; $i++){
            if($i%2==0){
                $sum +=$i;
            }   
        }
        echo "The Sum of all Even Numbers between 1 and 100 is: ".$sum;
    ?>
    <style>
        body{
            text-align:center;
            font-weight:bold;
            font-size:30px;
            margin-top:50px;
        }
    </style>
</body>
</html>
