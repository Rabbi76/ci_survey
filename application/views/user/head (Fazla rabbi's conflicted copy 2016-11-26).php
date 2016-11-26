<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Share & Care </title>

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
            <a class="navbar-brand" href="<?php echo base_url().'user/dashboard';?>">Share & Care </a>
        </div>
        <!-- Top Menu Items -->
        <ul class="nav navbar-right top-nav">
           <!-- <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope"></i> <b class="caret"></b></a>
                <ul class="dropdown-menu message-dropdown">
                    <li class="message-preview">
                        <a href="#">
                            <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                <div class="media-body">
                                    <h5 class="media-heading"><strong>John Smith</strong>
                                    </h5>
                                    <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                    <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="message-preview">
                        <a href="#">
                            <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                <div class="media-body">
                                    <h5 class="media-heading"><strong>John Smith</strong>
                                    </h5>
                                    <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                    <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="message-preview">
                        <a href="#">
                            <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                <div class="media-body">
                                    <h5 class="media-heading"><strong>John Smith</strong>
                                    </h5>
                                    <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                    <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="message-footer">
                        <a href="#">Read All New Messages</a>
                    </li>
                </ul>
            </li> -->
            
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i><?php echo "  ".$user[0]["name"];?> <b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li>
                        <a href="<?php echo base_url().'user/edit_profile';?>"><i class="fa fa-fw fa-user"></i> Profile</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url().'user/message';?>"><i class="fa fa-fw fa-envelope"></i> Message</a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="<?php echo base_url().'User_login/logout';?>"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                    </li>
                </ul>
            </li>
        </ul>
        <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav side-nav">
			<li class="active">
                    <a href="<?php echo base_url().'user/dashboard';?>"><i class="fa fa-fw fa-desktop"></i> Home</a>
                </li>
                <li class="active">
                    <a href="<?php echo base_url().'user/userHome';?>"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                </li>
                <li>
                    <a href="<?php echo base_url().'user/all_survey_list';?>"><i class="fa fa-fw fa-bar-chart-o"></i> All Survey List</a>
					<?php
						//var_dump($user);
					?>
                </li>
                <li>
                    <a href="<?php echo base_url().'user/given_survey_list';?>"><i class="fa fa-fw fa-table"></i> Given Survey List</a>
                </li>
				<li>
                    <a href="<?php echo base_url().'user/vendors';?>"><i class="fa fa-fw fa-edit"></i> Vendor</a>
                </li>
                <li>
                    <a href="<?php echo base_url().'user/edit_profile';?>"><i class="fa fa-fw fa-edit"></i> Edit Profile</a>
                </li>
                <li>
                    <a href="<?php echo base_url().'user/message';?>"><i class="fa fa-envelope"></i> Messages</a>
                </li>

            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </nav>