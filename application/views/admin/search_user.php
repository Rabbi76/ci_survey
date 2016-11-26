

<div id="page-wrapper">

    <div class="container-fluid" style="min-height: 650px;">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Survey
                </h1>
                <ol class="breadcrumb">
                    <li>
                        <i class="fa fa-dashboard"></i>  <a href="<?php echo base_url().'admin/dashboard';?>">Dashboard</a>
                    </li>
					 <li >
                        <i class="fa fa-arrow-circle-right"></i> <a href="<?php echo base_url().'admin/dashboard';?>">Admin</a>
                    </li>
                    <li class="active">
                        <i class="fa fa-arrow-circle-right"></i> Search User
                    </li>
                </ol>
            </div>
        </div>
        <!-- /.row -->

        <div class="row" style="margin:10px;">
                    <div class="col-lg-8">
                        <div class="panel panel-default">
                            <div class="panel-heading" >
							<form method="post">
                                <h3 class="panel-title"><i class="fa fa-fw fa-search"></i>User name</h3>
								<input  style="margin-top:5px;widows: 0 auto " name="seachValue" class="form-control" type="text">
								<button style="margin-top: 10px;widows: 0 auto" id="submit_answer_btn" class="btn btn-default" name="submit">Search</button>
								</form>
                            </div>
                            
                        </div>
                    </div>
        </div>
		<div class="row" style="margin:10px;">
            <div class="col-lg-8">
               <div class="panel panel-default">
                    <div class="panel-heading">
						<?php
							if(($_SERVER ["REQUEST_METHOD"]=="POST") && isset($_POST["submit"]))
							{  
								 ?>
									</br><h5 class="panel-title"></i>Name</h5>
									<input value="" class="form-control" type="text">
									</br><h5 class="panel-title"></i>Email</h5>
									<input value="" class="form-control" type="text">
									</br><h5 class="panel-title"></i>Company</h5>
									<input value="" class="form-control" type="text">
                            <?php 
							}								
							
						?>
                    </div>       
                </div>
            </div>
        </div>
        <script type="text/javascript" src="<?php echo base_url().'js/jquery.rateyo.min.js'; ?>"></script>
        <script type="text/javascript" src="<?php echo base_url().'js/rating.js'; ?>"></script>
        <link rel="stylesheet" href="<?php echo base_url().'css/jquery.rateyo.min.css'; ?>"/>
        <!-- /.row -->


