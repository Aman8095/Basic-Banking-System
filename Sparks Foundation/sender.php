<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <center>
        <?php

        $conn = mysqli_connect("localhost", "root", "", "staff");

        if ($conn === false) {
            die("Error: Could not connect to the database" . mysqli_connect_error());
        }

        // taking all inputs from the user
        $reciever_name = $_REQUEST["reciever_name"];
        $reciever_email = $_REQUEST["reciever_email"];
        $sending_amount = $_REQUEST["sending_amount"];

        $sql = "INSERT INTO result VALUES('$reciever_name', '$reciever_email','$sending_amount')";
        if (mysqli_query($conn , $sql)){
            echo "<h3>Money Transfer is successful.</h3>";

            echo nl2br(" \n$reciever_name \n \n$reciever_email \n \n$sending_amount");
        }else{
            echo "ERROR : Hush! sorry $sql."
            . mysqli_error($conn);
        }
        ?>
    </center>
</body>

</html>