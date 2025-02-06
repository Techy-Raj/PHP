<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Names</title>
</head>
<body>
    <?php
        $students=[
            "Raj",
            "Ben",
            "Jack",
            "James"
        ];

        $file = fopen("students.txt", "w");

        foreach ($students as $student){
            fwrite($file, $student . "\n");
        }
        
        fclose($file); 
        

        $read = fopen("students.txt","r");
        
        echo "<ul>";
        
            while (($line = fgets($read)) !== false) {
                echo "<li>" . $line. "</li>";
            }

        echo "</ul>";
            
        fclose($read);
    ?>




<style> 
    body{
        font-size: 40px;
        font-weight: 300;
        display:flex;
        justify-content:center;
    }  
</style>
</body>
</html>