<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        //Q1.
        echo "Q1."."<br>";
            echo "#OPERATORS"."<br>";
            echo "Arithmetic Operators: +, -, *, /, %"."<br>";
            echo "Assignment Operators: =, +=, -=, *=, /="."<br>";
            echo "Comparison Operators: ==, ===, !=, !==, <, >, <=, >="."<br>";
            echo "Logical Operators: &&, ||, !"."<br>";

        //Q2.
            echo "<br>"."Q2.";
             $First_name = "Raj";
             $Last_name = "Manodra";

            //a.Concatenation
            $Full_name = $First_name." ".$Last_name;
            echo "<br>"."Concatenated String: ".$Full_name."<br>";

            //b.String Length
            echo "String Length: ".strlen($Full_name)."<br>";

            //c.Substring Extraction
            echo "Extracted substring: ".substr($Full_name,0,3)."<br>";

            //d.Case Conversions -- all four types            
            
                //strtoupper
                echo "Upper case string: ".strtoupper($Full_name)."<br>";
                //strtolower
                echo "Lower case string: ".strtolower($Full_name)."<br>";
                //ucfirst
                echo "Uppercase first letter of first word: ".ucfirst(strtolower($Full_name))."<br>";
                //ucwords
                echo "Uppercase first letter of all words: ".ucwords("$Full_name")."<br>";

            //e.Trimming -- all three types

                //Trim
                echo "Trim: ".trim($Full_name)."<br>";                                                                                                                                                        //Made By RAJ
                                                                                                                                                                                                
                //Ltrim
                echo "Left trim: ".ltrim($Full_name,"Raj")."<br>";

                //Rtrim
                echo "Right trim: ".rtrim($Full_name,"Manodra")."<br>";
            //f.Reverses a string
            echo "Reversed string: ".strrev($Full_name)."<br>";

            //g.Compare two strings (case sensitive)
            $first1 = "raj";
            echo "String 1: $First_name, String 2: $first1"."<br>";

            echo "Case sensitive comparision: ".strcmp($First_name ,$first1)."<br>";
            
            $y = strcmp($First_name ,$first1);
            if ($y == 0){
                echo "Strings are Equal";
            }elseif($y>0){
                echo "String1 is grater than String2";
            }else{
                echo "String1 is less than String2";
            }

            //h.Compares two strings (case insensitive)
            echo "<br>"."Case insensitive comparision: ".strcasecmp($First_name ,$first1)."<br>";
            $x =  strcasecmp($First_name ,$first1);
            if ($x == 0){
                echo "Strings are Equal";
            }elseif($x>0){
                echo "String1 is grater than String2";
            }else{
                echo "String1 is less than String2";
            }
        
        //Q3.
            echo"<br>"."<br>"."Q3."."<br>";                                                                                                                                                                                       //Made By RAJ
            //a.Arithmetic Operations(+,-,*,/,%)
            $num1 = 10;
            $num2 = 5;
            //+
            echo "Addition: 10 + 5 = ".$num1+$num2."<br>";
            //-
            echo "Substraction: 10 - 5 = ".$num1-$num2."<br>";
            //*
            echo "Multiplication: 10 * 5 = ".$num1*$num2."<br>";
            //(/)
            echo "Division: 10 / 5 = ".$num1/$num2."<br>";
            //%
            echo "Modulus: 10 % 5 = ".$num1%$num2."<br>";

            //b.Rounds up to the nearest integer
            $num3 = 5.4;
            echo "Rounded up $num3: ".ceil($num3)."<br>";

            //c.Rounds down to the nearest integer
            echo "Rounded down $num3: ".floor($num3)."<br>";

            //d.Returns the square root
            echo "Square root of 4: ".sqrt(4)."<br>";

            //e.Generates a random number betwn $min & $max
            $min = 1;
            $max = 1000;
            echo "Random number Between 1 & 1000: ".rand($min,$max)."<br>";

            //f.Checks if value numeric or not
            $val1 = 10;
            $val2 = "ten";
            /*
            echo "Value ($val1) is:".is_numeric($val1)."<br>";
            echo "Value ($val2) is:".is_numeric($val2)."<br>"; 
            */
            echo "Checks if a value is numeric or not: ";
            if (is_numeric($val1)){
                echo "$val1 is an number";
            }else{
                echo "$val1 is a string";
            }
    ?>  
    
</body>
</html>