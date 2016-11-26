

<div id="page-wrapper">

    <div class="container-fluid" style="min-height: 650px;">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Search User
                </h1>
                <ol class="breadcrumb">
                    <li>
                        <i class="fa fa-dashboard"></i>  <a href="<?php echo base_url().'vendor/dashboard';?>">Dashboard</a>
                    </li>
					 <li >
                        <i class="fa fa-arrow-circle-right"></i> <a href="<?php echo base_url().'vendor/dashboard';?>">Vendors</a>
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
                            <div class="panel-heading">
							<form method="post">
                                <h3 class="panel-title"><i class="fa fa-fw fa-search"></i>User name</h3>
								<input  style="margin-top:5px;widows: 0 auto " name="seachValue" class="form-control"name="searchValue" type="text">
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
								//$value=$_POST["searchValue"];
								 ?>
									 <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>User Id</th>
                                        <th>Name</th>
                                        <th>Email</th>
										                       
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php// foreach($user as $us){?>
                                        <tr>
                                            <td><?php// echo $us['id']; ?></td>
                                            <td><?php// echo $us['name']; ?></td>
                                            <td><?php// echo $us['email'];?></td>
                                        </tr>
                                    <?php// } ?>
                                </tbody>
                            </table>
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


