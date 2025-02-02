<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>inheritance</title>
</head>
<body>
    <?php
        //Inheritance
        class Animal{       //parent class
            public function makeSound(){
                return "Some generic sound";
            }
        }

        class Cat extends Animal{
            public function makeSound(){
                return "Meow <br>";
            }
        }
        class Dog extends Animal{
            public function makeSound(){
                return "Bark <br>";
            }
        }

        $dog = new Dog();
        echo $dog->makeSound();

        $cat = new Cat();
        echo $cat->makeSound();
    ?>
</body>
</html>