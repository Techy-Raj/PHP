<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays</title>
</head>
<body>
    <?php
    //Array Indexed
        echo "<br>Array Indexed";
        $fruits=["Banana","Apple","Cherry","Mango"];
        echo "<br> Selected Fruits: $fruits[1]";

        foreach($fruits as $fruit){
            echo "<br> Fruit: $fruit";
        }
        echo"<br>";

    //Associative array
        echo "<br>Associative array</br>";
        $ages = ["John"=>35,"Raj"=>18,"Alice"=>22];
        echo "Selected Age: ". $ages["Raj"];
        foreach($ages as $name =>$age){
            echo"<br>".$name." is ".$age." years old";
        }
        echo"<br>";

    //multi-dimensional Arrays
        echo "<br>Multi-dimensional Arrays</br>";
        $students = [
             ["John",25,false],
             ["Raj",18,true],
             ["Alice",22,false]
            ];
            echo "Student 1 is present in the class: ".$students[1][2];
        echo"<br>";
        
        //Array Manipulation
        echo "<br>Array Manipulation";

        $classroom =["Stuart","Ben","Rick"];
        foreach($classroom as $student){
            echo "<br> Student: ".$student; 
        }
        echo"<br>";

        //Adding elements
        echo "<br>Adding elements";
        $classroom[]="Alen";
        array_push($classroom,"Xavier");

        foreach($classroom as $student){
            echo "<br> Student: ".$student; 
        }
        echo"<br>";

        //updating elements
        echo "<br>Updating elements";
        $classroom[2] = "Raj";
        foreach($classroom as $student){
            echo "<br> Student :".$student;
        }
        echo"<br>";

        //Counting Elements
        echo "<br>Counting Elements</br>";
        echo "Number of elements in the array are: ".count($classroom)."<br>";
        
        //Deleting Elements
        echo "<br>Deleting Elements</br>";
        unset($classroom[1]);
        print_r($classroom);
        echo "<br>";

        //Re-Indexing Elements
        echo "<br>Re-Indexing Elements</br>";
        $classroom = array_values($classroom);
        print_r($classroom);



    ?>
</body>
</html>