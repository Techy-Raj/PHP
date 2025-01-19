<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Directory Handling</title>
</head>
<body>
    <?php 
        //Directory handling

        //create a Dirctory
        if(!is_dir("PHPDay3_Directory")){
            mkdir("PHPDay3_Directory");
            echo "Directory Created";
        }
        else{
            echo "directory already exists !";
        }
        echo "<br>"; 

        //Check is the directory exists
        if(is_dir("PHPDay3_Directory")){
            echo "Directory already exists";
        }
        else{
            echo "Directory does not exists";
        }
         
        //List the files inside the folder
        $files = scandir("PHPDay3_Directory");
        foreach($files as $file){
            echo $file."<br>";
        }
        echo"<br>";
         
        //Change the directory
        echo "Current Directory: ".getcwd();
        chdir("PHPDay3_Directory");
        echo"<br> New Current Directory: ".getcwd();

        echo"<br>";
         
        //Delete the files inside the directory
        $delete_files = scandir(".");
        foreach($delete_files as $file){
            if($file!=="."&& $file !==".."){
                unlink($file);
            }
            echo"Files Deleted!";
        }
        echo"<br>";
         
        //Delete directory
        echo "<br> Current Directory: ".getcwd();
        chdir("..");
        echo "<br> Current Directory: ".getcwd();
        if (is_dir("PHPDay3_Directory")){
            rmdir("PHPDay3_Directory");
            echo "Directory Removed";
        }
        else{
            echo "Directory Does not exists";
        }
        echo"<br>";
    
    ?>
    
</body>
</html>