<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Share & Care Dashboard</title>

    <script type="application/javascript" src="<?php echo base_url(); ?>js/jquery.js"></script>
    <script type="application/javascript" src="<?php echo base_url(); ?>js/angular.min.js"></script>
    <script type="application/javascript" src="<?php echo base_url().'js/bootstrap.min.js'; ?>"></script>


    <link rel="stylesheet" href="<?php echo base_url().'css/bootstrap.min.css'; ?>" >
    <link rel="stylesheet" href="<?php echo base_url().'css/app.css'; ?>" >

    <link href="<?php echo base_url().'css/font-awesome.min.css';?>" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url().'css/sb-admin.css'; ?>" rel="stylesheet">


</head>

<body>

<div id="wrapper">

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php echo base_url().'vendor/dashboard';?>">Share & Care Dashboard</a>
        </div>
        <!-- Top Menu Items -->
        <ul class="nav navbar-right top-nav">

            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo "  ".$vendo[0]["name"];?> <b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li>
                        <a href="<?php echo base_url().'vendor/edit_profile';?>"><i class="fa fa-fw fa-user"></i> Profile</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url().'vendor/message';?>"><i class="fa fa-fw fa-envelope"></i> Messages</a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="<?php echo base_url().'vendor/logout';?>"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                    </li>
                </ul>
            </li>
        </ul>
        <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav side-nav">
                <li class="active">
                    <a href="<?php echo base_url().'vendor/dashboard';?>"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                </li>
                <li>
                    <a href="<?php echo base_url().'vendor/survey_result';?>"><i class="fa fa-fw fa-desktop"></i> Survey Result</a>
                </li>
                <li>
                    <a href="<?php echo base_url().'vendor/add_survey';?>"><i class="fa fa-fw fa-bar-chart-o"></i> Add New Survey</a>
                </li>
                <li>
                    <a href="<?php echo base_url().'vendor/survey_list';?>"><i class="fa fa-fw fa-edit"></i> List/ Edit Surveys</a>
                </li>
                <!--<li>
                    <a href="<?php// echo base_url().'vendor/search_user';?>"><i class="fa fa-fw fa-table"></i> Search Users</a>
                </li>-->
				<li>
                    <a href="<?php echo base_url().'vendor/vendors';?>"><i class="fa fa-fw fa-desktop"></i> All Vendors</a>
                </li>
                <li>
                    <a href="<?php echo base_url().'vendor/message';?>"><i class="fa fa-fw fa-envelope"></i> Messages</a>
                </li>
                <li>
                    <a href="<?php echo base_url().'vendor/edit_profile';?>"><i class="fa fa-fw fa-edit"></i> Edit Profile</a>
                </li>

            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </nav>