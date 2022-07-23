<?php
if(isset($_POST['name'])){
    // Set connection variables
    $server = "localhost";
    $username = "root";
    $password = "";

    // Create a database connection
    $con = mysqli_connect($server, $username, $password);

    // Check for connection success
    if(!$con){
        die("connection to this database failed due to" . mysqli_connect_error());
    }
    // echo "Success connecting to the db";

    // Collect post variables
    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $age = $_POST['age'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $desc = $_POST['desc'];
    $sql = "INSERT INTO `trep`.`trip` (`name`, `age`, `gender`, `email`, `phone`, `other`) VALUES ('$name', '$age', '$gender', '$email', '$phone', '$desc');";

    if($con->query($sql) == true){
        echo "Successfully inserted";
    }
    $con->close();

}
    
?>   

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to travel form</title>
    <link href="https://fonts.google.com/specimen/Ibarra+Real+Nova" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <form action="index.php" methode="post">
    <img class="bg" src="nmamit.jpg" alt="nmamit">
    <div  class="container">
        <h3>Welcome to N.M.A.M Institution of Technology Trip Form</h3>
        <p> Enter your details and submit this form to confirm your participation in the trip</p>
        <p class="submitmsg"> Thank you for submitting the form. We are happy to see you joining for the US trip</p>

        <form action="index.php" methode="post"></form>
              <input type="text" name="name" id="name" placeholder="Enter your name">
              <input type="text" name="age" id="age" placeholder="Enter your Age">
              <input type="text" name="gender" id="gender" placeholder="Enter your gender">
              <input type="email" name="email" id="email" placeholder="Enter your email">
              <input type="phone" name="phone" id="phone" placeholder="Enter your phone">
              <textarea name="desc" id="desc" cols="34" rows="10" placeholder="Enter any other information"></textarea>
              <button class="btn">Submit</button>
           
        </form>
           
    </div>
    <script src="index.js"></script>

</body>
</html>
