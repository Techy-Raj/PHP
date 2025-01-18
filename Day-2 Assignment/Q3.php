<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Q3</title>
</head>
<body>
    <?php
        /*$string1 = "madam";
        $string2 = strrev($string1);
        //$str = strcasecmp($string1, $string2);
        if ($string1==$string2){
            echo "The String ($string1) is a palindrome.";
        }
        else{
            echo "The Sting ($string1) is not a palindrome.";
        }
        */
        function check_palindrome($string1){

            $string1 = strtolower($string1);

            if ($string1==strrev($string1)){
                echo "The String '{$string1}' is a palindrome.";
            }
            else{
                echo "The Sting '{$string1}' is not a palindrome.";
            }
        }
        check_palindrome("Level");

    ?>
</body>
<style>
        body{
            text-align:center;
            font-weight:bold;
            font-size:30px;
            margin-top:50px;
        }
    </style>
</html>