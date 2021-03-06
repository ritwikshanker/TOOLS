
<?php
include 'connect.php';
session_start();
$_SESSION['SELECTED_WO_ID'] = $_GET["u"]; //Getting ID of selected WO
//echo $_SESSION['SELECTED_WO_ID'];
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

    <link href = "style.css" rel= "stylesheet" type= "text/css"/>

</head> 

<body>
    <br><br>
    <h3><b>Associated WO</b></h3>
    <br><br>
    <ul class="nav nav-tabs nav-justified">
	
        <li><a data-toggle="tab" href="#" onclick="ShowStartWIPFields(this.value);" value = "">Start-WIP</a></li>
        <li><a data-toggle="tab" href="#" onclick="ShowOwnerAddEditCommentFields(this.value);" value = "">OWNR-Add/Edit Comments</a></li>
        <li><a data-toggle="tab" href="#" onclick="ShowAssociatedIO(this.value);" value = "">Raising Illu</a></li>

        <li><a data-toggle="tab" href="#" onclick="ShowSfckWoFields(this.value);" value = "">SFCK-WO</a></li>
        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Reviewer - QA
            <span class="caret"></span></a>
            <ul class="dropdown-menu">
                <li><a data-toggle="tab" href="#" onclick="ShowAddReviewerQAFields(this.value);" value = "">Add</a></li>
                <li><a data-toggle="tab" href="#" onclick="ShowEditReviewerQAButtons(this.value);" value = "">Edit</a></li>
				<li><a data-toggle="tab" href="#" onclick="ShowDeleteReviewerQAFields(this.value);" value = "">Delete</a></li>
				<li><a data-toggle="tab" href="#" onclick="CalculateReviewScore(this.value);" value = "">Calculate</a></li>
                <li><a data-toggle="tab" href="#" onclick="SubmitReview(this.value);" value = "">Submit</a></li>
            </ul>
        </li>
        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Customer - QA
            <span class="caret"></span></a>
            <ul class="dropdown-menu">
                <li><a data-toggle="tab" href="#" onclick="ShowEnterCustomerQAFields(this.value);" value = "">Enter Comment/error</a></li>
                <li><a data-toggle="tab" href="#" onclick="ShowAcceptCustomerQAFields(this.value);" value = "">Accept QA</a></li>
            </ul>
        </li>
        <li><a data-toggle="tab" href="#" onclick="ShowVandVFields(this.value);" value = "">V & V</a></li>
        <li><a data-toggle="tab" href="#" onclick="ShowCstmrComntsCompletionFields(this.value);" value = "">Customer Comments Completion</a></li>
        <li><a data-toggle="tab" href="#" onclick="ShowSendToCustomerFields(this.value);" value = "">Send To Customer</a></li>
    </ul>

    <div id= "AssociatedWOProgress"></div>
    <br><br><br><br>

    <h3><b>Associated Illustration</b></h3>
    <br><br>
    <div class = "container-fluid">
        <table id="StatusTable">
            <tr>
                <th>ATA Number</th>
                <th>IO No</th>
                <th>Status</th>
                <th>Illustrator</th>
                <th>Type</th>
                <th>Alloted Date</th>
                <th>Required Date</th>
                <th>Reviewer</th>
                <th style = "width:60px;">Info</th>
            </tr>

            <?php
            $WO_ID = $_SESSION['SELECTED_WO_ID'];
            $sql="SELECT * FROM `wo_raisingillustration` WHERE `WO_ID` = '$WO_ID'";
            $result = mysqli_query($conn,$sql);
            while ($row = mysqli_fetch_array($result)) {?>
                <tr>
                    <td><?php echo $row["ATA Number"];?></td>
                    <td><?php echo $row["IO No"];?></td>
                    <td><?php echo $row["Status"];?></td>
                    <td><?php echo $row["Illustrator"];?></td>
                    <td><?php echo $row["Type"];?></td>
                    <td><?php echo $row["IO allotted date"];?></td>
                    <td><?php echo $row["IO required date"];?></td>
                    <td><?php echo $row["Reviewer"];?></td>
                    <td><input type = "radio" name = "DisplayAssIoButtons" value = "<?php echo $row["IO_ID"];?>" onclick = "ShowAssociatedIoTab(this.value);"></td>
                </tr>
                <?php
            }?>

        </table>
    </div>
        <div id= "AssociatedilluButton"></div>

<br><br><br><br><br><br><br><br><br><br><br><br>

</body>
</html>
