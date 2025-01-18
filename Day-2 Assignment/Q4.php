<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback Form</title>
</head>
<body>
<div class="form">
    <h1>Feedback Form</h1>
    <form action="Q4data.php" method="post">
        <label for="name">Full Name:</label>
        <input type="text" id="name" name="name" required><br><br>

        <label for="mobile">Mobile Number:</label>
        <input type="tel" id="mobile" name="mobile" required><br><br>

        <label for="email">Email ID:</label>
        <input type="email" id="email" name="email" required><br><br>

        <label for="message">Message:</label>
        <textarea id="message" name="message" rows="4" required></textarea><br><br>

        <button type="submit">Submit Feedback</button>

    </form>     
</div>
</body>
        <style>
            form{
                display: grid;
                justify-content: center;
                align-items: center;
                font-weight: bold;
                
            }
            h1{
                text-align: center;
            }
            input[type='text'],input[type='email'],input[type='tel']{
                border-color: grey;
                height: 20px;
                width: 300px;
            }
            textarea{
                width: 300px;
                border:2px solid grey;
            }
            body{
                font-size: 20px;
            }
            button {
                background-color:rgb(60, 189, 245);
                border: 2px solid grey ;
                height: 30px;
                font-weight: bold;
                font-size:16px ;

            }   
        </style>

</html>
