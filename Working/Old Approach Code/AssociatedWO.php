
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
    
    <style>
    .table{
        border-collapse: collapse;
        width: 100%;
        table-layout: fixed;
        margin-top:5%;
    }
    .table td, .table th {
        border-right: 1px solid #ddd;
        border-bottom: 1px solid #ddd;
        padding: 8px;
        overflow:hidden;
    }

    </style>
    
</head> 
<body>

    <img src="ESL_Color_trans.gif" alt="Avatar" width="235" height="60" style = "margin-left:1%;">
    <div class="TopNavMargin">
        <nav class="navbar navbar-default">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button"  data-target="#navbarCollapse"  data-toggle="collapse" class="navbar-toggle">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="#" class="navbar-brand">Home</a>
            </div>
            <!-- Collection of nav links and other content for toggling -->
            <div id="navbarCollapse" class="collapse navbar-collapse">
                <ul class="nav navbar-nav">

                    <li><a href="EditProjectPage.php">Editing Project</a></li>
                    <li class="active"><a href="#">Associated WO</a></li>
                    <li><a href="AssociatedILLU.php">Associated ILLU</a></li>
                    <li><a href="Report.php">Report</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <!--<li><a href="#" data-toggle="modal" data-target="#logoutModal">Logout</a></li>-->
                    <li><a href="Logout.php">Logout</a></li>
                </ul>
            </div>
        </nav>
    </div>

    <div class = "container-fluid">
        <table class="table">
            <form action = "ShowAssociatedWoButtons.php" method = "post">
                <tr>
                    <th>ATA Number</th>
                    <th>WO No</th>
                    <th>Status</th>
                    <th>Owner</th>
                    <th>WO Allotted date</th>
                    <th>Start Date</th>
                    <th>SFCK Date- Planned</th>
                    <th>Peer Reviewer</th>
                    <th>Peer QA Completion Date- Planned</th>
                    <th>Internal Reviewer</th>
                    <th>Internal QA Completion Date- Planned</th>
                    <th>Remarks</th>
                    <th>Partner/Customer QA Comments Received Date</th>
                    <th>Partner/Customer QA Re-submission Date</th>
                    <th style = "width:60px;">Info</th>
                </tr>
                
                <tr>
                    <td>ATANumber</td>
                    <td>WONo</td>
                    <td>Status</td>
                    <td>Owner</td>
                    <td>WOAllotteddate</td>
                    <td>StartDate</td>
                    <td>SFCKDatePlanned</td>
                    <td>PeerReviewer</td>
                    <td>PeerQACompletionDatePlanned</td>
                    <td>InternalReviewer</td>
                    <td>InternalQACompletionDatePlanned</td>
                    <td>Remarks</td>
                    <td>CustomerQACommentsReceivedDate</td>
                    <td>CustomerQAResubmissionDate</td>
                    <td><button type = "submit" name = "DisplayCRInfo" value = ""><img title = "Click here" style = "height:18;width:18px;" src="Link img.png"></button></td>
                </tr>
            </form>
        </table>
    </div>


<br><br><br><br><br><br>

</body>
</html>
