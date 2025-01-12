<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Control Structures</title>
</head>
<body>
    <?php
        //Control Statements
        echo "Control Statements<br>";
        $name = "Ben";
        if ($name == "Raj"){
            echo $name." Name is Correct";
        }
        else{
            echo $name." Name is Incorrect";
        }

        //Conditional Statements if and if--else
        echo "<br>"."<br>Conditional Statements if and if--else";
        $marks = 91;
        
        if($marks >= 80){
            echo "<br> You got Grade A";
        }
        elseif($marks >= 60){
            echo "<br> You got Grade B";
        }
        elseif($marks >= 40){
            echo "<br> You got Grade C";
        }
        else{
            echo "<br> You got Grade D";
        }
        
        //Conditional Statements Switch 
        echo "<br>"."<br>Conditional Statements Switch</br>";
        $day = "Sunday";
        switch($day){
            case "Sunday":
                echo "Its Sunday !!!!";
                break;
            case "Monday":
                echo "Its Monday !!";
                break;
            case "Tuesday":
                echo "Its Tuesday !!";
                break;
            case "Wednesday":
                echo "Its Wednesday !!";
                break;
            case "Thursday":
                echo "Its Thursday !!";
                break;
            case "Friday":
                echo "Its Friday !!";
                break;
            case "Saturday":
                echo "Its Saturday !!";
                break;
            default:
                echo "No matching day found !!";
            
        }

        //Iteratic Control Structures while loop
        echo "<br>"."<br>Iteratic Control Structures while loop</br>";
        $count = 1;
        while ($count<=5){
            echo "Count is $count<br>";
            $count++;
        }

        //Iteratic Control Structures dowhile loop
        echo "<br>Iteratic Control Structures dowhile loop</br>";
        $count = 1;
        do{
            echo "Count is $count<br>";
            $count++;
        }while ($count<=3);
         
        echo "<br>Iterative Control Stuructures for loop</br>";

        //Iterative Control Stuructures for loop
        for($i=1; $i<=5; $i++){
            echo "For Loop Number: $i <br>";
        }

        echo "<br>Iterative Control Stuructures foreach loop</br>";

        //Iterative Control Stuructures foreach loop
        $array=["Red","Green","Blue","Yellow","Magenta"];
        foreach($array as $color){
            echo "Color: $color <br>";
        }
        
        
        












    ?>
</body>
</html>