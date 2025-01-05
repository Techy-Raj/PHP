<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Webpage</title>
</head>
<body>
    <?php
        echo"hello";
        //scaler types
        $name = "RAJ";
        $age = 18;
        $time = 2.46;
        $class = true;
        //compound Types
        $student_arr = $array = array("Raj","Ben","Joe");//Array


        class Student{
            public $marks; 
        }

        $stud = new Student();     //object
        $stud->marks =90;

        //Special Types
        $null = NULL;

        echo "<br>String :", $name;
        echo "<br>Integer: ", $age;
        echo "<br>Float: ", $time;
        echo "<br>Boolean: ", $class;
        echo "<br>Array: ",$student_arr[1];

        //echo "Object: ", $stud;
        echo "<br>Null: ", $null;




    ?>
</body>
</html>
