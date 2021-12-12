 <?php
 $insert = false;
//  $not_insert = true;
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
    $sql = "INSERT INTO `travel`.`travel` (`name`, `age`, `gender`, `email`, `phone`, `other`, `dt`) VALUES ('$name', '$age', '$gender', '$email', '$phone', '$desc', current_timestamp());";
    // echo $sql; 

    // Execute the query
    if($con->query($sql) == true){
    // echo "Successfully inserted";

    // Flag for successful insertion
    $insert = true;
    }
    else{
        echo "ERROR: $sql <br> $con->error";
        // $not_insert = true;
    }

    // Close the database connection
    $con->close();
 }        
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bangers&family=Fuzzy+Bubbles:wght@700&display=swap" rel="stylesheet">
    <title>Welcome to Travel Form</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <img class="bg" src="fk.jpg" alt="Pakistan Travel">
    <div class="container">
        <h1>Welcome to Pakistan trip form</h1>
        <p>Enter your details to confirm your paticipation in the trip</p>
        <?php
        if($insert == true){
        echo "<p class ='submitMsg'>Thanks for submiting your form. We are happy to see you joining us the Pakistan trip:)</p>";
}
// else{
//     echo "Your form submition is failed!";
// }
        ?>
        <form action="index.php" method="post">
            <input type="text" name="name" id="name" placeholder="Enter your name"> 
            <input type="number" name="age" id="age" placeholder="Enter your Age">
            <input type="text" name="gender" id="gender" placeholder="Enter your gender">
            <input type="email" name="email" id="email" placeholder="Enter your email">
            <input type="phone" name="phone" id="phone" placeholder="Enter your phone">
            <textarea name="desc" id="desc" cols="30" rows="10" placeholder="Enter any other info here:)"></textarea>
            <button class="btn button">Submit</button>
            <button class="btns button">Reset</button>
        </form>
    </div>
    <script src="./app.js"></script>
</body>
</html> 