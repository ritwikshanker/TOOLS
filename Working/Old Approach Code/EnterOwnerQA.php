
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
    
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="/resources/demos/style.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    
    <script>
    $(document).ready(function() {
    $('body').click(function(event) {
        if ($(event.target).is("#Rdatepicker")) {
                    $("#Rdatepicker").datepicker({showOn: 'focus',minDate: "-1d+1",dateFormat: 'dd/mm/yy'}).focus();
        }
    });
    });
    </script>
    
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
                    <li><a href="#">Associated WO</a></li>
                    <li class="active"><a href="AssociatedILLU.php">Associated ILLU</a></li>
                    <li><a href="Report.php">Report</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <!--<li><a href="#" data-toggle="modal" data-target="#logoutModal">Logout</a></li>-->
                    <li><a href="Logout.php">Logout</a></li>
                </ul>
            </div>
        </nav>
    </div>

    <div class="nav-side-menu">
        <div class="menu-list">
            <ul id="menu-content" class="menu-content collapse out">
                <li>
                    <a href="StartWIPIo.php"><i class="fa fa-globe fa-lg"></i>Start -WIP</a>
                </li>  
                
                <li>
                    <a href="IlluAddEditComments.php"><i class="fa fa-globe fa-lg"></i>Illustrator-Add/Edit Comments</a>
                </li>  
                
                <li>
                  <a href="SfckIo.php"><i class="fa fa-globe fa-lg"></i>SFCK-IO</a>
                </li>  
                
                <li  data-toggle="collapse" data-target="#RQA" class="collapsed">
                    <a href="#"><i class="fa fa-globe fa-lg"></i>Reviewer - QA<span class="arrow"></span></a>
                </li>
                <ul class="sub-menu collapse" id="RQA">
                    <li><a href="AddReviewerQAIo.php">Add</a></li>
                    <li><a href="EditReviewerQAIo.php">Edit</a></li>
                    <li><a href="DeleteReviewerQAIo.php">Delete</a></li>
                    <li><a href="CalculateReviewerQAIo.php">Calculate</a></li>
                </ul>  
                
                <li  data-toggle="collapse" data-target="#OQA" class="collapsed active">
                    <a href="#"><i class="fa fa-globe fa-lg"></i>Owner - QA<span class="arrow"></span></a>
                </li>
                <ul class="sub-menu collapse" id="OQA">
                    <li class="active"><a href="#">Enter Comment/error</a></li>
                    <li><a href="AcceptOwnerQA.php">Accept QA</a></li>
                </ul>  
                
                <li>
                  <a href="VandVIo.php"><i class="fa fa-globe fa-lg"></i>V & V</a>
                </li> 
                
                <li>
                  <a href="SendToOwner.php"><i class="fa fa-globe fa-lg"></i>Send To Owner</a>
                </li> 
                
            </ul>
        </div>
    </div>
    
    <br><br>
    
    <div class = "container-fluid">
        <table class="table">
            <tr>
                <th>Error Code</th>
                <td><input type = "text" name = "ErrorCode"></td>
            </tr>
            
            <tr>
                <th>Error Description</th>
                <td><input type = "text" name = "ErrorDescription"></td>
            </tr>
            
            <tr>
                <th>Quantity</th>
                <td><input type = "text" name = "Quantity"></td>
            </tr>
            
            <tr>
                <th>Graphic ID</th>
                <td><input type = "text" name = "GraphicID"></td>
            </tr>
            
            <tr>
                <th>Review  Date</th>
                <td><input type = "text" id = "Rdatepicker" name = "ReviewDate"></td>
            </tr>
            
        </table>
        <br>
        <input style = "margin-left:40%;" type = "submit" name = "SubmitOQA" value = "Submit">
    </div>

<br><br><br><br><br><br>

</body>
</html>
