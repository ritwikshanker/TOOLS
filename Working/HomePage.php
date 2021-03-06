<?php
/**
 * Created by PhpStorm.
 * User: ritwik.shanker
 * Copyright of Esterline Technologies (c) 2018.
 */

include 'connect.php';
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

    <link rel="stylesheet" href="https://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css" rel="stylesheet"
          type="text/css"/>
    <link rel="stylesheet" href="/resources/demos/style.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="AjaxRequestFunctions.js"></script>

</head>

<body>
<img src="ESL_Color_trans.gif" alt="Avatar" width="235" height="60" style="margin-left:40%;">

<ul class="nav nav-tabs nav-justified">
    <li><a data-toggle="tab" href="#" onclick="ShowAddProjectPage(this.value);" value="">Add Project</a></li>
    <li><a data-toggle="tab" href="#" onclick="ShowEditProjectPage(this.value);" value="">Editing Project</a></li>
    <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Report
            <span class="caret"></span></a>
        <ul class="dropdown-menu">
            <li><a data-toggle="tab" href="#" onclick="ShowIndividualSummary(this.value);" value="">Individual
                    Summary</a></li>
            <li><a data-toggle="tab" href="#" onclick="ShowTeamReport(this.value);" value="">Team Report</a></li>
        </ul>
    </li>
</ul>

<div id="ProjectPage"></div>

<br><br>

</body>
</html>
