<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FileHandlingOerations</title>
</head>
<body>
    <?php
        //File handling Operations
    
        //create a new file

        $file =fopen("Student.txt","w");
        //fclose($file);
        echo "file has been created"."<br>";

        //Write in a new file
        fwrite($file,"Hello Student File !! \n This is a test file");
        echo "Text has been inseted <br><br>";
        fclose($file);

        //Read a file
        $file_read = fopen("Student.txt","r");
        while(!feof($file_read)){
            echo fgets($file_read)."<br>"; 
        }
        fclose($file_read);
          
        //Deleting a File

        if (file_exists("Student.txt")){
            unlink("Student.txt");
            echo "<br> File has been deleted";
        }
        else{  
            echo"<br> File not found";
        }



    ?>
    
</body>
</html>