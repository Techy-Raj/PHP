<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Q2</title>
</head>
<body>
    <?php
        $cities =array(
            "Delhi"=>7054678,
            "Mumbai"=>9054862,
            "Agra"=>6054651,
        );
        $max_pop=max($cities);
        $max_name = array_search($max_pop,$cities);
        echo "City with highest population is $max_name with population of $max_pop";
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
