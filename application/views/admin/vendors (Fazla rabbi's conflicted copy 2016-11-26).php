

        <div id="page-wrapper">

            <div class="container-fluid" style="min-height: 650px;">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Vendors
							
					
					</h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="<?php echo base_url().'admin/dashboard';?>">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-table"></i> Vendors
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->
				 <div class="row">
                    <div class="col-lg-12" >
							<?php    //style="background-color:#c2c2d6; "
					$ven=0;
					$ac_ven=0;
					foreach($vendors as $vendor)
					{
						$ven++;
						if($vendor['is_active']=="1")
						{
							$ac_ven++;
						}
						
					}
					//echo '<h3>Totle Number of Vendor: '.$ven.'.&nbsp&nbsp &nbsp &nbsp  Totle Active Vendor: '.$ac_ven.'</h3>';
					
					//echo '<h2 style=" background-color:#c2c2d6; font-size:30px; text-align:left; float:right; min-width:400px" class="page-header">Totle Number of Vendor: '.$ven.'</br> Totle Active Vendor: '.$ac_ven.'</h2>';
					?>
					</div>
                </div>
                <div class="row">
                    <div class="col-lg-8">
					
                        <h2>Vendors</h2>
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
										<th>No</th>
                                        <th>Name</th>
                                        <th>User Name</th>
                                        <th>Company</th>
                                        <th>Is Active</th>
                                        <th>All Survey List</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
									$co=1;
									foreach($vendors as $vendor){?>
                                        <tr>
											<td><?php echo $co; ?></td>
                                            <td><?php echo $vendor['name']; ?></td>
                                            <td><?php echo $vendor['username']; ?></td>
                                            <td><?php echo $vendor['company']; ?></td>
                                            <td><?php echo $vendor['is_active']?"Active":"Disable"; ?></td>
											<td><?php echo '<a href="'.base_url().'admin/view_vendor_survey/'.$vendor['id'].'" style="margin:0px 5px; background-color: #D0C8C8; " class="btn btn-default">All Survey  </a>'; ?></td>
                                        </tr>
                                    <?php $co++; } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="col-lg-4">
					
					<br>
                        <h2>Add New Vendor</h2>
                        <form id="add_vendor">
                            <div class="form-group">
                                <label for="add_vendor_name">Name</label>
                                <input name="add_vendor_name" type="text" class="form-control" id="add_vendor_name" aria-describedby="emailHelp" placeholder="Name" required>

                            </div>
                            <div class="form-group">
                                <label for="add_vendor_email">Email address</label>
                                <input name="add_vendor_email" type="email" class="form-control" id="add_vendor_email" aria-describedby="emailHelp" placeholder="Enter email" required>

                            </div>
                            <div class="form-group">
                                <label for="add_vendor_username">Username</label>
                                <input name="add_vendor_username" type="text" class="form-control" id="add_vendor_username" placeholder="Username" required>
                            </div>
                            <div class="form-group">
                                <label for="add_vendor_password">Password</label>
                                <input name="add_vendor_password" type="password" class="form-control" id="add_vendor_password" placeholder="Password" required>
                            </div>
                            <div class="form-group">
                                <label for="add_vendor_company">Company</label>
                                <input name="add_vendor_company" type="text" class="form-control" id="add_vendor_company" placeholder="Company" required>
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" id="add_vendor_sendMail" name="sendMail" value="true"> Email User with Credentials
                                </label>
                            </div>
                            <div class="form-group">
                                <button style="min-width:100px; font-size:20px" class="btn btn-success">Add</button>
                            </div>
                        </form>
                    </div>

                </div>
                <!-- /.row -->

            <?php
//            echo "<pre>";
//            var_dump($vendors);
//            echo "</pre>";
            ?>


