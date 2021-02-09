<?php
  if(isset($_POST['name'])){
  $server = "localhost";
  $username = "root";
  $password = "";

  $con = mysqli_connect($server, $username, $password);

  if(!$con){
      die("connection to this database failed due to" . 
      mysqli_connect_error());
  }
   //echo "Sucess to connect to db";

   $name = $_POST['name'];
   $gender = $_POST['gender'];
   $age = $_POST['age'];
   $email = $_POST['email'];
   $phone = $_POST['phone'];
   $other = $_POST['desc'];
   $sql = "INSERT INTO `bhind`.`bhind` (`name`, `age`, `gender`, `email`, `phone`, `other`, `dt`) VALUES ('$name', '$age', '$gender', '$email', '$phone', '$other', current_timestamp());";
    //echo $sql;

   if($con->query($sql) == true){
       //echo "Successfully inserted";
   
     $insert = true;
   }
     else{
       echo "ERROR: $sql <br> $con->error"; 
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
    <title>welcome to travel form</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@700&display=swap" rel="stylesheet">
      <link rel="stylesheet" href="style.css">
</head>
<body>
    <img class="bg" src="bg.jpg" alt="Bhind">
    <div class="container">
        <h1>welcome to Bhind Travel</h1> 
        <p>Enter your details to confirm your participation in the trip </p>
         <p class="submitMsg">Thank you for submitting your from . We are happy to see you joining with us</p>
         <form action="index.php" method="post"></form>
            <input type="text" name="name" id="name" placeholder="Enter your name">
            <input type="text" name="age" id="age" placeholder="Enter your age">
            <input type="text" name="gender" id="gender" placeholder="Enter your gender">
            <input type="text" name="email" id="email" placeholder="Enter your email">
            <input type="text" name="phone" id="phone" placeholder="Enter your phone">
            <textarea name="desc" id="desc" cols="30" rows="10" placeholder="Enter your other information"></textarea>
            <button class="btn">Submit</button>
            
     
        </form>
    </div>
    <script src="index.js"></script>
     
</body>
</html>

