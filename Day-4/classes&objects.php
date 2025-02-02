<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOPs classes $ objects</title>
</head>
<body>
    <?php
    //Calsses and Objects
    //create a class
        class Car{
            public $brand;//Property of the car
            public $color;//Property of Color
            //private
            //protected
            public function startEngine(){      //Method
                return "The engine is starting...";

            }
        }
        //create object
        
        $car = new Car();
        $car->brand = "Toyota";
        $car->color = "Blue";
        echo "Car brand:".$car->brand."<br>";
        echo $car->startEngine();
    ?>
</body>
</html>