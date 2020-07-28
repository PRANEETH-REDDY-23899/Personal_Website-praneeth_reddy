<?php

// Connecting to the Database
$hostname = "sql307.epizy.com";
$username = "epiz_26250345";
$password = "Ve6nK7GEJbV";
$database = "epiz_26250345_praneeth";

// Create a connection
$conn = mysqli_connect($hostname, $username, $password, $database);
// Die if connection was not successful
if (!$conn){
    die("Sorry we failed to connect: ". mysqli_connect_error());
}
else{
    echo "Connection was successful<br>";
}

// Variables to be inserted into the table
$name = $_POST['name'];
$email = $_POST['email'];
$subject= $_POST['subject'];
$messege = $_POST['messege'];

// Sql query to be executed       
$sql = "INSERT INTO `contact` ( `name`, `email`, `subject`, `messege`) VALUES ('$name', '$email', '$subject','$messege')";

$result = mysqli_query($conn, $sql);

// Add a new trip to the Trip table in the database
if($result){
    

    echo "The record has been inserted successfully successfully!<br>";
}
else{
    echo "The record was not inserted successfully because of this error ---> ". mysqli_error($conn);
}
?>










