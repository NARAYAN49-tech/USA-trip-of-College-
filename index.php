<?php
if(isset($_POST['name'])){


$server = "localhost";
$username = "root";
$password = "";

$con = mysqli_connect($server,$username,$password);

if(!$con){
    die("connection to this database failed due to" . 
    mysqli_connect_error());
}
// echo "Success connecting to the db";
$name  = $_POST['name'];
$gender  = $_POST['gender'];
$age  = $_POST['age'];
$email  = $_POST['email'];
$desc  = $_POST['desc'];
$phone  = $_POST['phone'];
$dt  = $_POST['dt'];
$sql = "INSERT INTO `trip`.`trip`(`Name`, `age`, `gender`, `email`, `phone`, `other`, `dt`) VALUES ('$name', '$age', '$gender', '$email', '$phone', '$desc', '$dt');";
echo $sql;

if($con->query($sql) == true){
    echo "Successfully inserted";
}
else{
    echo "Error: $sql <br> $conn->error";
}


$con->close();
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Welcome to Travel Form</title>
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Roboto|Sriracha&display=swap"
    />
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <img src="am.jpg" alt="collge image" class="bg" />
    <div class="container">
      <h1>Welcome to Annasaheb Magar US Trip From</h1>
      <p>Enter your details to confirm your participation in thd trip</p>

      <form action="index.php" method="post">
        <input
          type="text"
          name="name"
          id="name"
          placeholder="Enter your Name"
        />
        <input type="text" name="age" id="age" placeholder="Enter your age" />
        <input
          type="text"
          name="gender"
          id="gender"
          placeholder="Enter you gender"
        />
        <input
          type="email"
          name="email"
          id="email"
          placeholder="enter your email"
        />
        <input type="phone" name="phome" id="phone" placeholder="phone" />
        <textarea
          name="desc"
          id="desc"
          cols="30"
          rows="10"
          placeholder="Enter any other information here"
        ></textarea>
        <button class="btn submit">Submit</button>
        <p class="thank">
          Thanks for Submitting your form. We are happy to see you joining us
          for the US trip
        </p>
        <!-- <button class="btn reset">Reset</button> -->
      </form>
    </div>

    <script src="app.js"></script>
  </body>
</html>
