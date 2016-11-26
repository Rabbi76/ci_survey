

<div id="page-wrapper">

    <div class="container-fluid" style="min-height: 650px;">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Edit Profile
                </h1>
                <ol class="breadcrumb">
                    <li>
                        <i class="fa fa-dashboard"></i>  <a href="<?php echo base_url().'vendor/dashboard';?>">Dashboard</a>
                    </li>
   
					<li class="active">
                        <i class="fa fa-arrow-circle-right"></i> Edit Profile
                    </li>
					
                </ol>
            </div>
        </div>
        <!-- /.row -->

        <div class="row">
                    <div class="col-lg-8" style="margin:10px 30px";>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                               <h2 class="panel-title"><i class="fa fa-fw fa-desktop"></i>Profile detalis</h2>
                            </div>
                           
                            <div class="panel-body">
							<form >
							<?php foreach($vendo as $ven)
							{// var_dump($ven); ?>

                                <input id="vendor_id_input" value="<?php  echo $ven["id"]; ?>" class="form-control" type="hidden">
                                <h5 class="panel-title"></i>Name</h5>
                                <input id="vendor_name_input" value="<?php  echo $ven["name"]; ?>" class="form-control" type="text"></br>

                                <h5 class="panel-title"></i>User Name</h5>
                                <input value="<?php  echo $ven["username"]; ?>" class="form-control" type="text" disabled></br>

                                <h5 class="panel-title"></i>Email</h5>
                                <input value="<?php  echo $ven["email"]; ?>" class="form-control" type="text" disabled>
                                </br><h5 class="panel-title"></i>Company</h5>
                                <input value="<?php  echo $ven["company"]; ?>" class="form-control" type="text" disabled>

                                <h5 class="panel-title"></i>Change Password</h5>
                                <input value="" placeholder="Password" id="change_password" class="form-control" name="password" type="password" required><br>
                                <input value="" placeholder="Confirm Password" id="confirm_change_password"class="form-control" name="confirm_password" type="password" required>
                                <p id="pass_not_matched" style="display: none;color: red">Password not matched</p>
                                <p id="pass_matched" style="display: none;color: green">Password matched</p>
                            <?php }  ?>
							
							<div class="row">
                        <div class="col-md-4" style="margin: 0 auto; ">
                            <button type="button" style="margin-top: 10px;widows: 0 auto" id="edit_vendor_profile" class="btn btn-default">Update Profile</button>
                        </div>
                    </div>
							</form>
							</div>
                           
                        </div>
                    </div>
        </div>
        <script type="text/javascript" src="<?php echo base_url().'js/jquery.rateyo.min.js'; ?>"></script>
        <script type="text/javascript" src="<?php echo base_url().'js/rating.js'; ?>"></script>
        <link rel="stylesheet" href="<?php echo base_url().'css/jquery.rateyo.min.css'; ?>"/>
        <!-- /.row -->
