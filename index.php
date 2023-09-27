<?php
$insert=false;
if(isset($_POST['name'])){
    $dbServerName = "sql11.freesqldatabase.com";
    $dbUsername = "sql11649450";
    $dbPassword = "vnrqBn8I9C";
    $dbName = "sql11649450";

    // create connection
    $con = new mysqli($dbServerName, $dbUsername, $dbPassword, $dbName);

    if(!$con){
        die("connection to this database failed due to" . mysqli_connect_error());
    }
    echo "Success connecting to the db";
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $sql= "INSERT INTO `sql11649450`.`signup` (`name`, `email`, `password`) VALUES ('$name', '$email', '$password');";
    echo $sql;

    if($con->query($sql)==true){
        echo "Successfully inserted";
        $insert=true;
    }
    else{
        echo "ERROR: $sql <br> $con->error";
    }
    
    $con->close();
}
?>
