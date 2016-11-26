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
		<!-- <form action="" method="post" id="search_survey" style="float:right">
				<input name="search"  type="text" placeholder="Search.." required>
				
		</form> -->
    <div class="masthead">
        <h1 class="text-muted"><a href="<?php echo $baseUrl.'User_login/logout';?>">Share & Care</a></h1>

        <div id="navbar">
            <nav class="navbar" role="navigation">
                <div class="collapse navbar-collapse" id="navbar-collapse-1">
                    <ul class="nav nav-justified">
                        <li class="active"><a href="<?php echo $baseUrl;?>">Home</a></li>
                        <li id="Survey_list"><a href="<?php echo $baseUrl.'Survey_list';?>">Surveys & Result</a></li>
						<li id="Survey_list"><a href="<?php echo $baseUrl.'Survay_search';?>">Surveys By Category</a></li>
					<!--
                        <li class="dropdown" id="Read_reviews">
                            <a href="<?php echo $baseUrl.'Survay_search';?>">Surveys By Category <b class="caret"></b></a>
                            <ul class="dropdown-menu">
							<?php
							/*
								foreach($category as $cat)
								{
									$check=0;
									//echo '<li style="font-size:20px"><a href="#">' .$cat['category_name'].'</a></li>';
									foreach($sub_category as $sub_cat)
									{
										
										if($sub_cat['category_id']==$cat['category_id'])
										{
											if($check==0)
											{
												echo '<li  class="dropdown dropdown-submenu">';
												echo '<a style="font-size:20px" href="'.base_url().'Survay_search/selectCategory/'.$cat['category_id'].'" class="dropdown-toggle" data-toggle="dropdown">'.$cat['category_name'].'</a>';
												echo '<ul style="margin-left:150px"  class="dropdown-menu">';
												$check=1;
											}
											echo '<li style="font-size:20px" ><a href="'.base_url().'Survay_search/selectCategory/'.$sub_cat['sub_category_id'].'_'.$sub_cat['category_id'].'">'.$sub_cat['sub_category_name'].'</a></li>';
										}
										//echo '<option value='.$sub_cat['category_id'].'_'.$sub_cat['sub_category_id'].'><h3 class="page-title">' .$sub_cat['sub_category_name'].'</h3>';
									}
									if($check==1)
									{
										echo '</ul>';
										echo '</li>';
									}
									
									//echo '<option value='.$cat['category_id'].'><h3 class="page-title">' .$cat['category_name'].'</h3>';
								}  */
							?>
                             <!--   <li class="kopie"><a href="#">Dropdown</a></li>
                                <li><a href="#">Dropdown Link 1</a></li>
                                <li class="active"><a href="#">Dropdown Link 2</a></li>
                                <li><a href="#">Dropdown Link 3</a></li>
                                <li class="dropdown dropdown-submenu">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown Link 4</a>
                                    <ul class="dropdown-menu">
                                        <li class="kopie"><a href="#">Dropdown Link 4</a></li>
                                        <li><a href="#">Dropdown Submenu Link 4.1</a></li>
                                        <li><a href="#">Dropdown Submenu Link 4.2</a></li>
                                        <li><a href="#">Dropdown Submenu Link 4.3</a></li>
                                        <li><a href="#">Dropdown Submenu Link 4.4</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown dropdown-submenu">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown Link 5</a>
                                    <ul class="dropdown-menu">
                                        <li class="kopie"><a href="#">Dropdown Link 5</a></li>
                                        <li><a href="#">Dropdown Submenu Link 5.1</a></li>
                                        <li><a href="#">Dropdown Submenu Link 5.2</a></li>
                                        <li><a href="#">Dropdown Submenu Link 5.3</a></li>
                                        <li class="dropdown dropdown-submenu">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown Submenu Link 5.4</a>
                                            <ul class="dropdown-menu">
                                                <li class="kopie"><a href="#">Dropdown Submenu Link 5.4</a></li>
                                                <li><a href="#">Dropdown Submenu Link 5.4.1</a></li>
                                                <li><a href="#">Dropdown Submenu Link 5.4.2</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>  
                            </ul>
                        </li>  -->
                        <li id="login"><a href="<?php echo $baseUrl.'login';?>">Login</a></li>
                    </ul>
                </div>
    </div>
