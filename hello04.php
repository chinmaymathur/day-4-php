<?php
// way to connect mysql database 
//1 mysqli extension
//2 PDO php data objects 

// connecting to a database 
$servername = "localhost";
$username = "root";
$password = "";
// for creating a connection object 
$conn = mysqli_connect($servername,$username,$password);
if (!$conn){
    die("sorry we failed to connect: ".mysqli_connect_error());
}
else{
echo "Connection was successful";
}
// create datatabase
$sql = "CREATE DATABASE chinmay4";
$result = mysqli_query($conn, $sql);
// check for the db creation success
if($result){
    echo "The db was created successfully!<br>";
}

else{
    echo "The db was  not created successfully bec of this erroe ---> ".mysqli_error($conn);
}


?>