<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Functions</title>
</head>
<body>
    <?php
        //Functions
        //Without Parameter function
        echo "Without Parameter function</br>";
        function func1(){
            echo "Hello World !";
        }
        func1();
        echo"<br>";
        //With parameter Function
        echo "<br>With parameter Function</br>";
        function greet($name){
            echo"Hello ".$name."<br>";
        }
        greet("Class");
        
        //With Default Parameter
        echo "<br>With Default Parameter</br>";
        function defparameter($name = "Guest"){
            echo "Hello ".$name."<br>";
        }
        defparameter();
        defparameter("Default Parameter !");
        

        //Funtion that returns a value
        echo "<br>Funtion that returns a value</br>";
        function multiply($a, $b){
            return $a*$b;
        }
        $result = multiply(8,9);
        echo$result."<br>";
        echo"<br>";

        //Function by Value
        echo "<br>Funtion by value";
        function addTen($num){
            $num +=10;
            echo "<br>Function Value".$num;
        }
        $x = 5;
        addTen($x);
        echo "<br> Original Value: ".$x."<br>";

        //Function by Reference
        echo "<br>Funtion by reference";
        function addTenref(&$num){
            $num +=10;
            echo "<br> Function Value".$num;
        }
        $y = 5;
        addTenref($y);
        echo "<br> Original Value: ".$y."<br>";

        //Early Returning the values in functional (Conditional Return)
        echo "<br>Early Returning the values in functional (Conditional Return)";
        function checkevenodd($num){
            if ($num %2==0){
                return "Even";
            }
            return "Odd";
        }
        echo "<br>";
        echo checkevenodd(18)."<br>";
        echo checkevenodd(15);
        




    ?>
</body>
</html>