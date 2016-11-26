

        <div id="page-wrapper">

            <div class="container-fluid" style="min-height: 650px;">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            User
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="<?php echo base_url().'admin/dashboard';?>">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-table"></i> user
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-8" >
                        <h2>User</h2>
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Date of Join</th>
										<th>Given Survey</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
									$co=1;
									foreach($user as $us){?>
                                        <tr>
                                            <td><?php echo $co; ?></td>
                                            <td><?php echo $us['name']; ?></td>
                                            <td><?php echo $us['email']; ?></td>
                                            <td><?php echo $us['dateJoined']; ?></td>
											<td><?php echo '<a href="'.base_url().'admin/view_user_survey/'.$us['id'].'" style="margin:0px 5px; background-color: #D0C8C8; " class="btn btn-default">Given Survey List</a>'; ?></td>
                                        </tr>
                                    <?php $co++; } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
					<div class="col-lg-4" >
					<br><br>
                        <h2 style=" background-color:#c2c2d6; font-size:30px; text-align:center;" class="btn btn-default">Totle Number of User: <?php echo $co-1; ?></h2>
                        
                    </div>
                    

                </div>
                <!-- /.row -->

            <?php
//            echo "<pre>";
//            var_dump($vendors);
//            echo "</pre>";
            ?>


