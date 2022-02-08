<!-- //establishing connection with the data base server -->
<?php

// username and password and database saving name for further use


$mysqli = new mysqli("localhost", "root", "", "staff");
if ($mysqli -> connect_error) {
    die('connect_error (' .
        $mysqli->connect_errno . ') ' .
        $mysqli->connect_error);
}

//sql queay to select data from database
$sql = "SELECT * FROM result ORDER BY reciever_name ASC";
$result = $mysqli->query($sql);
$mysqli->close();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acccount Statement</title>
   
    <link rel="stylesheet" href="statement.css">
</head>

<body class="main">
    <center>
        <h1>statement of your Account</h1>
        <section>
            <p>Name : <strong> Alpha quata </strong></p>
            <p>Account E-Mail :<strong> xyz@gmail.com </strong></p>
            <table border="5">
                <tr>
                    <th>Account Holder Name</th>
                    <th>E-Mail</th>
                    <th>Amount</th>
                </tr>
                <!-- // php code to fetch data from rows -->
                <?php
                while ($row = $result->fetch_assoc()) {
                ?>
                    <tr>
                        <td><?php echo $row['reciever_name']; ?></td>
                        <td><?php echo $row['reciever_email']; ?></td>
                        <td><?php echo $row['sending_amount']; ?></td>
                    </tr>
                <?php
                }
                ?>
            </table>
        </section>

    </center>
</body>

</html>