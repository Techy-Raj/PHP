<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $name = $_POST['name'];
    $mobile = $_POST['mobile'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    
    $data = "Name: " . $name . "\n";
    $data .= "Mobile: " . $mobile . "\n";
    $data .= "Email: " . $email . "\n";
    $data .= "Message: " . $message . "\n";
    $data .= "----------------------------------\n"; 

    
    $filePath = "feedbacks.txt"; 

    
    $file = fopen($filePath, "a");

    
    if ($file) {
        
        fwrite($file, $data);
        
        fclose($file);

        echo "<h3>Thank you for your feedback!</h3>";
    } else {
        echo "<h3>Sorry, there was an error saving your feedback.</h3>";
    }
}
?>
