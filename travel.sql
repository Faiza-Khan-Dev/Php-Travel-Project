-- <?php $insert = false;
--  if(isset($_POST['name'])){
--     -- // Set connection variables
--      $server = "localhost";
--      $username = "root";
--      $password = "";
    
--     -- // Create a database connection
--      $con = mysqli_connect($server, $username, $password);

--     // Check for connection success
--      if(!$con){
--          die("connection to this database failed due to" . mysqli_connect_error());
--     }
--     -- // echo "Success connecting to the db";

--     -- // Collect post variables
--     $name = $_POST['name'];
--     $gender = $_POST['gender'];
--     $age = $_POST['age'];
--     $email = $_POST['email'];
--     $phone = $_POST['phone'];
--     $other = $_POST['other'];
--     $sql = "INSERT INTO `travel`.`travel` (`name`, `age`, `gender`, `email`, `phone`, `other`, `dt`) VALUES ('$name', '$age', '$gender', '$email', '$phone', '$other', current_timestamp());";
--     // echo $sql; 

--     -- // Execute the query
--     if($con->query($sql) == true){
--     -- // echo "Successfully inserted";

--     -- // Flag for successful insertion
--     $insert = true;
--     }
--     -- else{
--     --     -- // echo "ERROR: $sql <br> $con->error";
--     --     -- !$insert = true;
--     -- }

--     -- // Close the database connection
--     $con->close();
--  }        
--  ?>
-- --  <?php $insert = false;

-- // <?php include "travel.sql";?>
-- 
-- <?php include "functions.php"; ?>

-- <?php
--     $name = $_POST['name'];
--     $gender = $_POST['gender'];
--     $age = $_POST['age'];
--     $email = $_POST['email'];
--     $phone = $_POST['phone'];
--     $other = $_POST['other'];
--     $sql = "INSERT INTO `travel`.`travel` (`name`, `age`, `gender`, `email`, `phone`, `other`, `dt`) VALUES ('$name', '$age', '$gender', '$email', '$phone', '$other', current_timestamp());";
--     // echo $sql; 
-- if(isset($_POST['name'])){
--     $username = $_POST['username'];
--     $password = $_POST['password'];
--     $id = $_POST['id'];
    
--     $query = "UPDATE users SET username = '$username', password = '$password', WHERE id = '$id' ";
    
--     $result = mysqli_query($connection, $query);
-- if(!$result){
--     die("ERROR".mysqli_error($connection));
-- }
-- }