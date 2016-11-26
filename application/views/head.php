<!Doctype html>
<html>
<head>
    <title>Share & Care</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="application/javascript" src="<?php echo $baseUrl; ?>js/jquery.js"></script>
    <script type="application/javascript" src="<?php echo $baseUrl; ?>js/angular.min.js"></script>
    <script type="application/javascript" src="<?php echo $baseUrl.'js/bootstrap.min.js'; ?>"></script>


    <link rel="stylesheet" href="<?php echo $baseUrl.'css/bootstrap.min.css'; ?>" >
    <link rel="stylesheet" href="<?php echo $baseUrl.'css/app.css'; ?>" >
    <link href="<?php echo $baseUrl.'css/nav.css';?>" rel="stylesheet">
    <link href="<?php echo $baseUrl.'css/font-awesome.min.css';?>" rel="stylesheet">
</head>
<body>
<div class="container">
    <div class="masthead">
        <h3 class="text-muted">Share & Care</h3>
        <nav>
            <ul class="nav nav-justified">
                <li class="active"><a href="<?php echo $baseUrl;?>">Home</a></li>
                <li id="Survey_list"><a href="<?php echo $baseUrl.'Survey_list';?>">Lists Of Surveys</a></li>
                <li id="Read_reviews"><a href="<?php echo $baseUrl.'Read_reviews';?>">Read Reviews</a></li>
                <li id="login"><a href="<?php if(isset($account_name)){echo $baseUrl.'User_login/logout';}else{?><?php echo $baseUrl.'User_login';}?>"><?php if(isset($account_name)){ echo "Logout From ".$account_name;}else{?>User Login/Register<?php } ?></a></li>
                <li id="vendor"><a href="<?php echo $baseUrl.'Vendor';?>">Vendor Login/Register</a></li>
                <li id="admin"><a href="<?php echo $baseUrl.'Admin';?>">Admin Login</a></li>
            </ul>
        </nav>
    </div>
