<?php

$conn = mysqli_connect("localhost", "root", "", "staff");

if($conn === false){
    die ("ERROR : Could not connect to the database ".mysqli_connect_error());
}

$name = $_REQUEST["name"];
$email = $_REQUEST["email"];

$sql = "INSERT INTO new_cust VALUES('$name', '$email')";

if (mysqli_query($conn , $sql)){
    echo"Benifieciry Added Successfully to your Account Successfully";
}else{
    echo "ERROR : Hush! sorry $sql."
    . mysqli_error($conn);
}

?>