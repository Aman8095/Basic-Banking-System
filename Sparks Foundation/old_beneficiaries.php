<!-- establihing the database connection -->
<?php

$mysqli = new mysqli("localhost", "root", "", "staff");
if ($mysqli->connect_error) {
    die('connect_error (' .
        $mysqli->connect_errno . ') ' .
        $mysqli->connect_error);
}

//sql queay to select data from database
$sql = "SELECT * FROM new_cust ORDER BY name";
$result = $mysqli->query($sql);
$mysqli->close();

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your beneficiaries</title>

    <link rel="stylesheet" href="old_beneficiaries.css">
</head>

<body>
    <center>
        <h1>All Yours Already Added Customers Account Inforamtion</h1>
        <div class="info">
            <center>
                <table border="5">
                    <form action="sender.php" method="POST">
                        <tr>
                            <th>Name</th>
                            <th>E-Mail</th>
                        </tr>
                        <!-- // php code to fetch data from rows -->
                        <?php
                        while ($row = $result->fetch_assoc()) {
                        ?>
                            <tr>
                                <td>
                                    <input type="text" value="<?php echo $row['name']; ?>" name="reciever_name" readonly>

                                </td>
                                <td>
                                    <input type="text" value="<?php echo $row['email']; ?>" name="reciever_email" readonly>
                                </td>

                            </tr>
                        <?php
                        }
                        ?>
                    </form>
                </table>
            </center>
        </div>
    </center>
</body>

</html>