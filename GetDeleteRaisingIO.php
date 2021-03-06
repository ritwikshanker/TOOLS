<?php
/**
 * Created by PhpStorm.
 * User: ritwik.shanker
 * Copyright of Esterline Technologies (c) 2018.
 */

include 'connect.php';
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet" type="text/css"/>

</head>

<body>
<form action="" method="POST" id="DeleteIO" role="form">
    <div class="container-fluid">
        <table id="StatusTable">
            <tr>
                <th style="width:60px;">Info</th>
                <th>Illustrator</th>
                <th>Reviewer</th>
                <th>Graphic ID (Old)</th>
                <th>Type</th>
                <th> Remarks</th>
                <th>Alloted Date</th>
                <th>Required Date</th>
            </tr>

            <?php
            $WO_ID = $_SESSION['SELECTED_WO_ID'];
            $sql = "SELECT * FROM `wo_raisingillustration` WHERE `WO_ID` = '$WO_ID'";
            $result = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_array($result))
            { ?>
                <tr>
                    <td><input type="radio" name="DisplayAssIoButtons" value="<?php echo $row["IO_ID"]; ?>" id = "DeleteIOID"></td>
                    <td><?php echo $row["Illustrator"]; ?></td>
                    <td><?php echo $row["Reviewer"]; ?></td>
                    <td><?php echo $row["Graphic ID Old"]; ?></td>
                    <td><?php echo $row["Type"]; ?></td>
                    <td><?php echo $row["Remarks"]; ?></td>
                    <td><?php echo $row["IO allotted date"]; ?></td>
                    <td><?php echo $row["IO required date"]; ?></td>
                </tr>
                <?php
            } ?>
            <br><br>
            <input type="submit" name="Submit" value="Delete" style="margin-left:45%;">
    </div>
</form>

</body>
</html>
